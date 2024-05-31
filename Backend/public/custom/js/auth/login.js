/**
 * Show/hide password
 */
$(".password-block").on("click", "#action-password-icon", function (e) {
    const input = $(this).parent().find("input");

    if (input.attr("type") == "password") {
        input.attr("type", "text");
        $(this).attr("class", "fa fa-eye");
    } else {
        input.attr("type", "password");
        $(this).attr("class", "fa fa-eye-slash");
    }
});

/**
 * Login
 */
$("#btnLocalLogin").on("click", function (e) {
    e.preventDefault();

    $("#btnLocalLogin")
        .html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...')
        .prop("disabled", true);

    $.ajax({
        url: `${location.origin}/api/v1/login`,
        method: "POST",
        dataType: "JSON",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            email: $("input[name='email']").val(),
            password: $("input[name='password'").val(),
        },
        success: function (response) {
            const { type, msg, url, data } = response;
            switch (type) {
                case "verify":
                    localStorage.setItem("userData", JSON.stringify(data));
                    Swal.fire("Warning!", msg, "warning");
                    setTimeout(() => {
                        location.href = url;
                    }, 2000);
                    break;
                default:
                    Swal.fire("Successful!", msg, "success");
                    setTimeout(() => {
                        location.href = location.origin;
                    }, 2000);
                    break;
            }

            $("#btnLogin").html("Đăng Nhập bằng email").prop("disabled", false);
        },
        error: function (response) {
            console.log(response);
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

            $("#btnLogin").html("Đăng Nhập bằng email").prop("disabled", false);
        },
    });
});
