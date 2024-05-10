<header class="transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="index.html">
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
                                <a href="#">Tạo GD bán<span></span></a>
                            </li>
                            <li>
                                <a href="#">Tạo GD mua<span></span></a>
                            </li>
                            <li>
                                <a href="#">Nạp tiền<span></span></a>
                            </li>
                            <li>
                                <a href="#">Rút tiền<span></span></a>
                            </li>
                        </ul>
                        <div class="menu_side_area d-flex align-items-center">
                            <a href="{{ route('login.index') }}" class="btn-main btn-wallet"><i
                                    class="icon_wallet_alt"></i><span>Đăng
                                    nhập</span></a>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
