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
                                <a href="#">Nạp tiền<span></span></a>
                            </li>
                            <li>
                                <a href="{{ route('topup.render') }}">Rút tiền<span></span></a>
                            </li>
                            <li>
                                @if (!auth()->check())
                                    <a href="{{ route('login.render') }}" class="ml-18 btn-main">Đăng
                                        nhập</a>
                                @else
                                    <a href="{{ route('logout') }}" class="ml-18 btn-main">Đăng
                                        xuất</a>
                                @endif

                            </li>
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
