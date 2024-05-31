@extends('layouts.client.index')
@section('content')
    <section class="full-height relative no-top no-bottom vertical-center"
        data-bgimage="url(gigaland-nft/images/background/subheader.jpg) top" data-stellar-background-ratio=".5">
        <div class="overlay-gradient t50">
            <div class="center-y relative">
                <div class="container">
                    <div class="login-box box-rounded padding40" data-bgcolor="#ffffff">
                        <h3 class="mb10 text-center">Xác thực mã OTP</h3>
                        <p class="mb-3">
                            Vui lòng nhập mã số chúng tôi gửi cho bạn qua email. Mã xác thực có giá trị trong
                            {{ env('OTP_MINUTES_EXPIRED', 1) }} phút
                        </p>

                        <div class="form-border mb-3">
                            <div class="field-set mb-3">
                                <input type="text" name="otp" id="otp" class="form-control mb-0"
                                    placeholder="Otp" />
                            </div>

                            <div class="field-set">
                                @csrf
                                <button id="btnSendOtp" type="submit" class="btn btn-main btn-fullwidth color-2">Xác
                                    nhận</button>
                            </div>
                        </div>

                        <p class="mb-0">Bạn chưa nhận được mã? <a id="btnResendOtp" href="javascript:void(0)">Gửi lại
                                otp</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
    <script src="{{ asset('custom/js/auth/otp.js') }}"></script>
@endsection
