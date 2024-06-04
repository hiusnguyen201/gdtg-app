/**
 * Register
 */
$("#btnRegister").on("click", function (e) {
    e.preventDefault();

    $("#btnRegister")
        .html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...')
        .prop("disabled", true);

    $.ajax({
        url: `${location.origin}/api/v1/register`,
        method: "POST",
        dataType: "JSON",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            name: $("input[name='name']").val(),
            phone: $("input[name='phone']").val(),
            email: $("input[name='email']").val(),
            password: $("input[name='password'").val(),
            password_confirmation: $("input[name='re-password'").val(),
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
        $("#btnRegister").html("Đăng ký ngay").prop("disabled", false);
    }, 500);
});
