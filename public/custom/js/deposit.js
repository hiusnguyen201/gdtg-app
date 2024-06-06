/**
 * Deposit
 */
function handleDeposit(e) {
    e.preventDefault();

    Toastify({
        text: "",
        duration: -1,
        gravity: "bottom",
        position: "right",
        style: {
            background: "#fff",
            "box-shadow": "1px 1px 8px 1px rgba(0, 0, 0, 0.1)",
            color: "black",
        },
    }).showToast();

    $(".toastify").html(
        '<div class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></div> Đang yêu cầu nạp tiền'
    );

    const amount = +$("input[name='amount'").val();
    $.ajax({
        url: `${location.origin}/api/v1/deposit`,
        method: "POST",
        dataType: "JSON",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            amount: amount,
            paymentMethod: $("input[name='paymentMethod']:checked").val(),
        },
        success: function (response) {
            $(".toastify").remove();

            const { url, data } = response;
            const { fee, feePrice, totalPrice } = data;

            const paymentMethodTitle = $("input[name='paymentMethod']:checked")
                .closest(".box-url")
                .find(".paymentMethod-title");

            $(".paymentMethod-container").append(`
                <div class="modal fade" id="modalDeposit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="modalDepositLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content py-4 px-4">
                            <div class="modal-header modalDeposit-header">
                                ${paymentMethodTitle.html()}
                                <button id="btnCloseModalDeposit" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body modalDeposit-body">
                                <span>Số tiền: ${convertCurrency(amount)}</span>
                                <span>Phí giao dịch: ${convertCurrency(
                                    feePrice
                                )} (${fee}%)</span>
                                <span>Tổng tiền: ${convertCurrency(
                                    totalPrice
                                )}</span>
                            </div>
                            <div class="modal-footer modalDeposit-footer">
                                <div id="qrcode"></div>
                                <div class="guide-payment">
                                    <h6 class="mb-3">Thực hiện theo hướng dẫn sau để thanh toán:</h6>
                                    <p class="mb-2">Bước 1: Mở ứng dụng <b>${paymentMethodTitle
                                        .find("#paymentMethod-logo")
                                        .attr("alt")}</b> để thanh toán</p>
                                    <p class="mb-2">Bước 2: Chọn "<b>Thanh Toán</b>" và quét mã QR tại hướng dẫn này</p>
                                    <p class="mb-0">Bước 3: Hoàn thành các bước thanh toán theo hướng dẫn và đợi server xử lý
                                        trong giây
                                        lát</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `);

            $("#btnCloseModalDeposit").click(() => {
                $(this).closest(".modal").remove();
            });

            new QRCode(document.querySelector("#qrcode"), {
                text: url,
                width: 250,
                height: 250,
                colorDark: "#000000",
                colorLight: "#ffffff",
                correctLevel: QRCode.CorrectLevel.H,
            });

            $("#btnModalDeposit").click();
        },
        error: function (response) {
            $(".toastify").remove();

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
}

/**
 * Interact with selection banking method to deposit
 */
$(".box-paymentMethod").click(function (e) {
    e.preventDefault();

    const boxUrl = $(this).closest(".box-url");
    const existInputChecked = $("input:radio[name='paymentMethod']:checked");

    if (existInputChecked.length) {
        existInputChecked.attr("checked", false);
        const oldBoxUrl = existInputChecked.closest(".box-url");
        oldBoxUrl.removeClass("disabled");
        oldBoxUrl.find("#amount-box").toggleClass("expanded");

        $("input:radio[name='paymentMethod']:not(:checked)")
            .closest(".box-url")
            .each((i, e) => {
                e.classList.remove("disabled");
            });

        setTimeout(() => {
            oldBoxUrl.find("#amount-container").remove();
        }, 400);

        if (boxUrl.is(oldBoxUrl)) {
            return;
        }
    }

    boxUrl.find("input:radio[name='paymentMethod']").attr("checked", true);

    $("input:radio[name='paymentMethod']:not(:checked)")
        .closest(".box-url")
        .each((i, e) => {
            e.classList.add("disabled");
        });

    boxUrl.append(`
        <div id='amount-container'>
            <div id='amount-box' class='form-border'>
                <input id='amount' type='number' name='amount' class='form-control mb-0' placeholder='Nhập số tiền'>
                <button id='btnDeposit' type='button' class='btn btn-main color-2 ml10'>
                    Nạp tiền
                </button>
            </div>
        </div>
    `);

    $("#btnDeposit").click((e) => {
        handleDeposit(e);
    });

    setTimeout(() => {
        boxUrl.find("#amount-box").toggleClass("expanded");
    });
});
