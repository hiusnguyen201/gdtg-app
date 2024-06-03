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
            const { msg, url } = response;
            Swal.fire("Success!", msg, "success");
            setTimeout(() => {
                location.href = url;
            }, 1000);
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
        $("#btnLocalLogin")
            .html("Đăng Nhập bằng email")
            .prop("disabled", false);
    }, 500);
});
