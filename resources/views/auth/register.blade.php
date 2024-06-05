@extends('layouts.client.index')
@section('content')
    @include('layouts.client.parts.breadcrumb', [
        'title' => 'Đăng ký',
    ])

    <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>Bạn không có tài khoản? Đăng ký ngay.</h3>

                    <div class="spacer-10"></div>

                    <div class="form-border">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Tên:</label>
                                    <input type='text' name='name' id='name' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Địa chỉ Email:</label>
                                    <input type='email' name='email' id='email' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Điện thoại:</label>
                                    <input type='tel' name='phone' id='phone' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Mật khẩu:</label>
                                    <input type='password' name='password' id='password' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Nhập lại mật khẩu:</label>
                                    <input type='password' name='re-password' id='re-password' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button id="btnRegister" type="button" class="btn btn-main color-2 w-100">Đăng ký
                                    ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
    <script src="{{ asset('custom/js/auth/register.js') }}"></script>
@endsection
