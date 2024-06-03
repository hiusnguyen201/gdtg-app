/**
 * Verify Otp
 */
const urlParams = new URLSearchParams(window.location.search);
const token = urlParams.get("token");

$("#btnSendOtp").on("click", function (e) {
    e.preventDefault();

    $("#btnSendOtp")
        .html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...')
        .prop("disabled", true);

    $.ajax({
        url: `${location.origin}/api/v1/verify-otp`,
        method: "POST",
        dataType: "JSON",
        data: {
            otp: $("input[name='otp']").val(),
            token: token,
        },
        success: function (response) {
            const { type, msg, url } = response;
            switch (type) {
                case "verify":
                    Swal.fire("Warning!", msg, "warning");
                    setTimeout(() => {
                        location.href = url;
                    }, 1000);
                    break;
                default:
                    Swal.fire("Successful!", msg, "success");
                    setTimeout(() => {
                        location.href = location.origin;
                    }, 1000);
                    break;
            }
        },
        error: function (response) {
            const { type, msg, url } = response.responseJSON;
            console.log(response);

            switch (type) {
                case "validate":
                    /**
                     * Description: This is not use alert
                     * showErrValidate($("#loginForm"), msg);
                     */

                    Swal.fire("Failure!", Object.values(msg)[0][0], "error");
                    break;
                case "expire":
                    Swal.fire("Failure!", msg, "error");
                    setTimeout(() => {
                        location.href = url;
                    }, 1000);
                    break;
                default:
                    Swal.fire("Failure!", msg, "error");
                    break;
            }
        },
    });

    $("#btnSendOtp").html("Xác nhận").prop("disabled", false);
});

/**
 * Resend Otp
 */
var countdownNum = 30;
$("#btnResendOtp").on("click", function (e) {
    e.preventDefault();

    if ($("#btnResendOtp").hasClass("disabled")) return;
    const countdownInterval = setInterval(handleCountdown, 1000);
    setTimeout(() => {
        clearInterval(countdownInterval);
        countdownNum = 30;
    }, 1000 * countdownNum);

    $.ajax({
        url: `${location.origin}/api/v1/resend-otp`,
        method: "POST",
        dataType: "JSON",
        data: {
            token: token,
        },
        success: function (response) {
            const { msg } = response;
            Swal.fire("Successful!", msg, "success");
        },
        error: function (response) {
            const { type, msg } = response.responseJSON;
            console.log(response.responseJSON);
            switch (type) {
                case "validate":
                    Swal.fire("Failure!", Object.values(msg)[0][0], "error");
                    break;
                default:
                    Swal.fire("Failure!", msg, "error");
                    break;
            }
        },
    });

    setTimeout(() => {
        $("#btnOtpForm").html("Xác nhận").prop("disabled", false);
    }, 500);
});

function handleCountdown() {
    $("#btnResendOtp")
        .html(`Gửi lại sau ${countdownNum} giây`)
        .addClass("disabled");

    countdownNum--;

    if (countdownNum <= 0) {
        $("#btnResendOtp").html(`Gửi lại otp`).removeClass("disabled");
        return;
    }
}
