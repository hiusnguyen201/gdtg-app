@extends('layouts.client.index')
@section('content')
    @include('layouts.client.parts.breadcrumb', [
        'title' => 'Nạp tiền',
        'description' => 'Bạn có thể chọn các phương thức thanh toán khả dụng bên dưới',
    ])

    <section aria-label="section">
        <div class="container paymentMethod-container">
            @if (isset($payment_methods) && count($payment_methods))
                @foreach ($payment_methods as $method)
                    <div class="box-url nohover">
                        <label for="{{ $method->name }}" class="box-paymentMethod">
                            <input hidden type="radio" id="{{ $method->name }}" name="paymentMethod"
                                value="{{ $method->id }}">
                            <div class="paymentMethod-title">
                                <img id="paymentMethod-logo" src="{{ asset("$method->logo") }}" alt="{{ $method->name }}"
                                    class="bank-image">
                                <div class="ml20">
                                    <h4>Thanh toán bằng {{ $method->name }}</h4>
                                    <p class="mb-0">{{ $method->description }}</p>
                                </div>
                            </div>
                        </label>
                    </div>
                @endforeach
            @endif

            <button hidden type="button" id="btnModalDeposit" data-bs-toggle="modal"
                data-bs-target="#modalDeposit"></button>
        </div>
    </section>
@endsection

@section('javascript')
    <script src="{{ asset('qrcode-master/qrcode.min.js') }}"></script>
    <script src="{{ asset('custom/js/deposit.js') }}"></script>
@endsection
