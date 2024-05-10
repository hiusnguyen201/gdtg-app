@extends('layouts.customer.index')
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

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form name="contactForm" id="contact_form" class="form-border mb-3" method="post"
                            action="{{ route('otp.verify') }}">
                            <div class="field-set mb-3">
                                <input type="text" name="otp" id="otp" class="form-control mb-0"
                                    placeholder="Otp" />
                                @error('otp')
                                    <span class="d-block" style="color: red">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="field-set">
                                @csrf
                                <button type="submit" class="btn btn-main btn-fullwidth color-2">Xác nhận</button>
                            </div>
                        </form>

                        <p class="mb-0">Bạn chưa nhận được mã? <a href="{{ route('otp.resend') }}">Gửi lại otp</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
