const userData = JSON.parse(localStorage.getItem("userData"));

/**
 * verifyOtp
 */
$("#btnSendOtp").on("click", function (e) {
    e.preventDefault();

    $("#btnSendOtp")
        .html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...')
        .prop("disabled", true);

    const userData = JSON.parse(localStorage.getItem("userData"));
    $.ajax({
        url: `${location.origin}/api/v1/verify-otp`,
        method: "POST",
        dataType: "JSON",
        data: {
            otp: $("input[name='otp']").val(),
            userId: userData.id,
        },
        success: function (response) {
            const { type, msg, data } = response;
            switch (type) {
                case "verify":
                    Swal.fire("Warning!", msg, "warning");
                    setTimeout(() => {
                        location.href = data.url;
                    }, 2000);
                    break;
                default:
                    Swal.fire("Successful!", msg, "success");
                    setTimeout(() => {
                        location.href = location.origin;
                    }, 2000);
                    break;
            }
        },
        error: function (response) {
            const { type, msg } = response.responseJSON;
            console.log(response);

            switch (type) {
                case "validate":
                    /**
                     * Description: This is not use alert
                     * showErrValidate($("#loginForm"), msg);
                     */

                    Swal.fire("Failure!", Object.values(msg)[0][0], "error");
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
 * resendOtp
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

    const userData = JSON.parse(localStorage.getItem("userData"));
    $.ajax({
        url: `${location.origin}/api/v1/resend-otp`,
        method: "POST",
        dataType: "JSON",
        data: {
            userId: userData.id,
        },
        success: function (response) {
            const { msg } = response;
            Swal.fire("Successful!", msg, "success");
        },
        error: function (response) {
            const { type, msg } = response.responseJSON;
            switch (type) {
                case "validate":
                    /**
                     * Description: This is not use alert
                     * showErrValidate($("#loginForm"), msg);
                     */

                    Swal.fire("Failure!", Object.values(msg)[0][0], "error");
                    break;
                default:
                    Swal.fire("Failure!", msg, "error");
                    break;
            }
        },
    });

    $("#btnOtpForm").html("Xác nhận").prop("disabled", false);
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
