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
