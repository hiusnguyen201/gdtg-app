<header class="transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="/">
                                    <img alt="" class="logo"
                                        src="{{ asset('gigaland-nft/images/logo-light.png') }}" />
                                    <img alt="" class="logo-2"
                                        src="{{ asset('gigaland-nft/images/logo.png') }}" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                        <div class="de-flex-col">
                            <input id="quick_search" class="xs-hide" name="quick_search"
                                placeholder="Tìm kiếm giao dịch..." type="text" />
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li>
                                <a href="/seller-create">Tạo GD bán<span></span></a>
                            </li>
                            <li>
                                <a href="/buyer-create">Tạo GD mua<span></span></a>
                            </li>
                            <li>
                                <a href="{{ route('deposit.render') }}">Nạp tiền<span></span></a>
                            </li>
                            <li>
                                <a href="#">Rút tiền<span></span></a>
                            </li>
                            @if (!auth()->check())
                                <li>
                                    <a href="{{ route('login.render') }}" class="ml-18 btn-main">Đăng
                                        nhập</a>
                                </li>
                            @else
                                <li class="menu-item-has-children has-child">
                                    <a href="javascript:void(0)"><i class="fa fa-user-circle"></i>
                                        {{ auth()->user()->name }}<span></span></a><span></span>
                                    <ul>
                                        <li class="nohover">
                                            <span class="balance-amount d-block">
                                                <span>Số dư tài khoản</span>
                                                <br>
                                                <b>@convertCurrency(auth()->user()->balance)</b>
                                                <a href="{{ route('deposit.render') }}"><i
                                                        class="fa fa-plus-circle"></i></a>
                                            </span>
                                        </li>
                                        <li><a href="icons-elegant.html">Quản lý tài khoản</a></li>
                                        <li><a href="{{ route('logout') }}">Đăng
                                                xuất</a></li>
                                    </ul>
                                </li>
                            @endif

                        </ul>
                        <div class="menu_side_area d-flex align-items-center">
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
