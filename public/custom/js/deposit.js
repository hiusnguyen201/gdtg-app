/**
 * Interact with selection banking method to deposit
 */
$(".box-bankingMethod").click(function (e) {
    e.preventDefault();

    const boxBankingMethod = $(this).closest(".box-bankingMethod");
    const boxUrl = boxBankingMethod.closest(".box-url");
    const existInputChecked = $("input:radio[name='bankingMethod']:checked");

    if (existInputChecked.length) {
        existInputChecked.attr("checked", false);
        const oldBoxUrl = existInputChecked.closest(".box-url");
        oldBoxUrl.removeClass("disabled");
        oldBoxUrl.find("#amount-box").toggleClass("expanded");

        setTimeout(() => {
            oldBoxUrl.find("#amount-container").remove();
        }, 400);

        if (boxUrl.is(oldBoxUrl)) {
            return;
        }
    }

    boxBankingMethod
        .find("input:radio[name='bankingMethod']")
        .attr("checked", true);

    boxUrl.append(`
        <div id="amount-container">
            <div id="amount-box" class='form-border'>
                <input type='number' name='amount' class="form-control mb-0" placeholder="Nhập số tiền">
                <button class="btn btn btn-main color-2 ml10">
                    Nạp tiền
                </button>
            </div>
        </div>
    `);

    setTimeout(() => {
        boxBankingMethod
            .closest(".box-url")
            .find("#amount-box")
            .toggleClass("expanded");
    });
});
