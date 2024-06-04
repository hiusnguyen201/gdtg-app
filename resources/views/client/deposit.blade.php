@extends('layouts.client.index')
@section('content')
    <!-- section begin -->
    <section id="subheader" class="text-light" data-bgimage="url(gigaland-nft/images/background/subheader.jpg) top">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <h1>Nạp tiền</h1>
                        <p>Bạn có thể chọn các phương thức thanh toán khả dụng bên dưới</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb30">
                    <a class="box-url" href="login.html">
                        <img src="{{ asset('custom/images/banks/momo-logo.png') }}" alt="" class="mb20 bank-image">
                        <h4>Thanh toán bằng Momo</h4>
                        <p>Nạp tiền tự động liên kết với Momo, hoàn thành tức thì. Phí 5%</p>
                    </a>
                </div>

                <div class="col-lg-3 mb30">
                    <a class="box-url" href="login.html">
                        <img src="{{ asset('custom/images/banks/vnpay-logo.png') }}" alt="" class="mb20 bank-image">
                        <h4>Thanh toán bằng VnPay</h4>
                        <p>Quét mã QR PAY trên ứng dụng Mobile Banking, phí giao dịch 2%</p>
                    </a>
                </div>

                <div class="col-lg-3 mb30">
                    <a class="box-url" href="login.html">
                        <img src="{{ asset('custom/images/banks/MoMo_Logo.png') }}" alt="" class="mb20 bank-image">
                        <h4>Momo Payment</h4>
                        <p>Nạp Dcoin tự động liên kết với Momo, hoàn thành tức thì. Phí 5%</p>
                    </a>
                </div>

                <div class="col-lg-3 mb30">
                    <a class="box-url" href="login.html">
                        <img src="{{ asset('custom/images/banks/MoMo_Logo.png') }}" alt="" class="mb20 bank-image">
                        <h4>Momo Payment</h4>
                        <p>Nạp Dcoin tự động liên kết với Momo, hoàn thành tức thì. Phí 5%</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
