@extends('layouts.client.index')
@section('content')
    @include('layouts.client.parts.breadcrumb', [
        'title' => 'Nạp tiền',
        'description' => 'Bạn có thể chọn các phương thức thanh toán khả dụng bên dưới',
    ])

    <section aria-label="section">
        <div class="container bankingMethod-container">
            <div class="box-url nohover">
                <label for="bankingMethod1" class="box-bankingMethod">
                    <input hidden type="radio" id="bankingMethod1" name="bankingMethod" value="1">
                    <img src="{{ asset('custom/images/banks/momo-logo.png') }}" alt="" class="bank-image">
                    <div class="ml20">
                        <h4>Thanh toán bằng Momo</h4>
                        <p>Nạp tiền tự động liên kết với Momo, hoàn thành tức thì. Phí 5%</p>
                    </div>
                </label>
            </div>

            <div class="box-url nohover">
                <label for="bankingMethod2" class="box-bankingMethod">
                    <input hidden type="radio" id="bankingMethod2" name="bankingMethod" value="2">
                    <img src="{{ asset('custom/images/banks/vnpay-logo.png') }}" alt="" class="bank-image">
                    <div class="ms-3">
                        <h4>Thanh toán VNPAY-QR</h4>
                        <p>Quét mã QR PAY trên ứng dụng Mobile Banking, phí giao dịch 2%</p>
                    </div>
                </label>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
    <script src="{{ asset('custom/js/deposit.js') }}"></script>
@endsection
