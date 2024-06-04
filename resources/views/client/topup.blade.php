@extends('layouts.client.index')
@section('content')
    @include('layouts.client.parts.breadcrumb', [
        'title' => 'Nạp tiền',
        'description' => 'Bạn có thể chọn các phương thức thanh toán khả dụng bên dưới',
    ])

    <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb30">
                    <button class="box-url" type="button" class="box-url" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <img src="{{ asset('custom/images/banks/momo-logo.png') }}" alt="" class="mb20 bank-image">
                        <h4>Thanh toán bằng Momo</h4>
                        <p>Nạp tiền tự động liên kết với Momo, hoàn thành tức thì. Phí 5%</p>
                    </button>

                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    I will not close if you click outside me. Don't even try to press escape key.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
