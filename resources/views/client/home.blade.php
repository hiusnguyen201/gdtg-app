@extends('layouts.client.index')
@section('content')
    <!-- section begin -->
    <section id="section-hero" aria-label="section" class="text-light overflow-hidden"
        data-bgimage="url(gigaland-nft/images/background/subheader.jpg) top">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text_top">
                        <div class="spacer-double"></div>
                        <h1>Create and sell your own unique NFTs.</h1>
                        <p class="lead">Easiest place to buy and sell cryptocurrency.<br>Sign up and get started today.
                        </p>
                        <div class="spacer-20"></div>
                        <a href="explore.html" class="btn-main">Explore</a>&nbsp;&nbsp;
                        <a href="login.html" class="btn-main btn-white">Create</a>
                        <div class="spacer-double"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <section id="section-nfts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Popular Items</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeIn">
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="de_countdown" data-year="2022" data-month="4" data-day="16" data-hour="8"></div>
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Monica Lucas">
                                <img class="lazy" src="images/author/author-1.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/static-1.jpg" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>Pinky Ocean</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.08 ETH<span>1/20</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>50</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Stacy Long">
                                <img class="lazy" src="images/author/author-10.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/static-2.jpg" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>Deep Sea Phantasy</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.06 ETH<span>1/22</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>80</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="de_countdown" data-year="2022" data-month="4" data-day="14" data-hour="8"></div>
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Ida Chapman">
                                <img class="lazy" src="images/author/author-11.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/static-3.jpg" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>Rainbow Style</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.05 ETH<span>1/11</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>97</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Fred Ryan">
                                <img class="lazy" src="images/author/author-12.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/static-4.jpg" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>Two Tigers</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.02 ETH<span>1/15</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>73</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Franklin Greer">
                                <img class="lazy" src="images/author/author-9.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/anim-4.webp" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>The Truth</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.06 ETH<span>1/20</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>26</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="de_countdown" data-year="2022" data-month="4" data-day="6" data-hour="8"></div>
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Mamie Barnett">
                                <img class="lazy" src="images/author/author-2.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/anim-2.webp" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>Running Puppets</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.03 ETH<span>1/24</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>45</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Nicholas Daniels">
                                <img class="lazy" src="images/author/author-3.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/anim-1.webp" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>USA Wordmation</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.09 ETH<span>1/25</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>76</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="de_countdown" data-year="2022" data-month="4" data-day="8" data-hour="8"></div>
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Lori Hart">
                                <img class="lazy" src="images/author/author-4.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/anim-5.webp" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>Loop Donut</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.09 ETH<span>1/14</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>94</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="de_countdown" data-year="2022" data-month="4" data-day="16" data-hour="8"></div>
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Jimmy Wright">
                                <img class="lazy" src="images/author/author-5.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/anim-3.webp" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>Lady Copter</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.08 ETH<span>1/21</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>75</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Gayle Hicks">
                                <img class="lazy" src="images/author/author-7.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/static-5.jpg" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>Purple Planet</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.02 ETH<span>1/18</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>93</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="de_countdown" data-year="2022" data-month="4" data-day="16" data-hour="8"></div>
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Karla Sharp">
                                <img class="lazy" src="images/author/author-6.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/anim-6.webp" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>Oh Yeah!</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.025 ETH<span>1/12</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>6</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Claude Banks">
                                <img class="lazy" src="images/author/author-8.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/anim-7.webp" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>This is Our Story</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.035 ETH<span>1/8</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>21</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Franklin Greer">
                                <img class="lazy" src="images/author/author-9.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/static-6.jpg" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>Pixel World</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.015 ETH<span>1/25</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>46</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Fred Ryan">
                                <img class="lazy" src="images/author/author-12.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/anim-8.webp" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>I Believe I Can Fly</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.055 ETH<span>1/4</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>54</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Lori Hart">
                                <img class="lazy" src="images/author/author-4.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/static-7.jpg" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>Cute Astronout</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.005 ETH<span>1/30</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>32</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nft item begin -->
                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="nft__item">
                        <div class="author_list_pp">
                            <a href="author.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Creator: Monica Lucas">
                                <img class="lazy" src="images/author/author-1.jpg" alt="">
                                <i class="fa fa-check"></i>
                            </a>
                        </div>
                        <div class="nft__item_wrap">
                            <div class="nft__item_extra">
                                <div class="nft__item_buttons">
                                    <button onclick="location.href='item-details.html'">Buy Now</button>
                                    <div class="nft__item_share">
                                        <h4>Share</h4>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://gigaland.io"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://gigaland.io"
                                            target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a
                                            href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://gigaland.io"><i
                                                class="fa fa-envelope fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="item-details.html">
                                <img src="images/items/static-8.jpg" class="lazy nft__item_preview" alt="">
                            </a>
                        </div>
                        <div class="nft__item_info">
                            <a href="item-details.html">
                                <h4>Teal Ocean</h4>
                            </a>
                            <div class="nft__item_click">
                                <span></span>
                            </div>
                            <div class="nft__item_price">
                                0.025 ETH<span>1/12</span>
                            </div>
                            <div class="nft__item_action">
                                <a href="#">Place a bid</a>
                            </div>
                            <div class="nft__item_like">
                                <i class="fa fa-heart"></i><span>24</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <a href="#" id="loadmore" class="btn-main wow fadeInUp lead">Load more</a>
                </div>
            </div>
        </div>
    </section>

    <section id="section-collections" data-bgcolor="#F7F4FD">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Hot Collections</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
                <div id="collection-carousel" class="owl-carousel wow fadeIn">

                    <div class="nft_coll">
                        <div class="nft_wrap">
                            <a href="collection.html"><img src="images/collections/coll-1.jpg" class="lazy img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="nft_coll_pp">
                            <a href="collection.html"><img class="lazy pp-coll" src="images/author/author-1.jpg"
                                    alt=""></a>
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="nft_coll_info">
                            <a href="collection.html">
                                <h4>Abstraction</h4>
                            </a>
                            <span>ERC-192</span>
                        </div>
                    </div>

                    <div class="nft_coll">
                        <div class="nft_wrap">
                            <a href="collection.html"><img src="images/collections/coll-2.jpg" class="lazy img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="nft_coll_pp">
                            <a href="collection.html"><img class="lazy pp-coll" src="images/author/author-2.jpg"
                                    alt=""></a>
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="nft_coll_info">
                            <a href="collection.html">
                                <h4>Patternlicious</h4>
                            </a>
                            <span>ERC-61</span>
                        </div>
                    </div>

                    <div class="nft_coll">
                        <div class="nft_wrap">
                            <a href="collection.html"><img src="images/collections/coll-3.jpg" class="lazy img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="nft_coll_pp">
                            <a href="collection.html"><img class="lazy pp-coll" src="images/author/author-3.jpg"
                                    alt=""></a>
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="nft_coll_info">
                            <a href="collection.html">
                                <h4>Skecthify</h4>
                            </a>
                            <span>ERC-126</span>
                        </div>
                    </div>

                    <div class="nft_coll">
                        <div class="nft_wrap">
                            <a href="collection.html"><img src="images/collections/coll-4.jpg" class="lazy img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="nft_coll_pp">
                            <a href="collection.html"><img class="lazy pp-coll" src="images/author/author-4.jpg"
                                    alt=""></a>
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="nft_coll_info">
                            <a href="collection.html">
                                <h4>Cartoonism</h4>
                            </a>
                            <span>ERC-73</span>
                        </div>
                    </div>

                    <div class="nft_coll">
                        <div class="nft_wrap">
                            <a href="collection.html"><img src="images/collections/coll-5.jpg" class="lazy img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="nft_coll_pp">
                            <a href="collection.html"><img class="lazy pp-coll" src="images/author/author-5.jpg"
                                    alt=""></a>
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="nft_coll_info">
                            <a href="collection.html">
                                <h4>Virtuland</h4>
                            </a>
                            <span>ERC-85</span>
                        </div>
                    </div>

                    <div class="nft_coll">
                        <div class="nft_wrap">
                            <a href="collection.html"><img src="images/collections/coll-6.jpg" class="lazy img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="nft_coll_pp">
                            <a href="collection.html"><img class="lazy pp-coll" src="images/author/author-6.jpg"
                                    alt=""></a>
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="nft_coll_info">
                            <a href="collection.html">
                                <h4>Papercut</h4>
                            </a>
                            <span>ERC-42</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="section-popular">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Top Sellers</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
                <div class="col-md-12 wow fadeIn">
                    <ol class="author_list">
                        <li>
                            <div class="author_list_pp">
                                <a href="author.html">
                                    <img class="lazy" src="images/author/author-1.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="author_list_info">
                                <a href="author.html">Monica Lucas</a>
                                <span>3.2 ETH</span>
                            </div>
                        </li>
                        <li>
                            <div class="author_list_pp">
                                <a href="author.html">
                                    <img class="lazy pp-author" src="images/author/author-2.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="author_list_info">
                                <a href="author.html">Mamie Barnett</a>
                                <span>2.8 ETH</span>
                            </div>
                        </li>
                        <li>
                            <div class="author_list_pp">
                                <a href="author.html">
                                    <img class="lazy pp-author" src="images/author/author-3.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="author_list_info">
                                <a href="author.html">Nicholas Daniels</a>
                                <span>2.5 ETH</span>
                            </div>
                        </li>
                        <li>
                            <div class="author_list_pp">
                                <a href="author.html">
                                    <img class="lazy pp-author" src="images/author/author-4.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="author_list_info">
                                <a href="author.html">Lori Hart</a>
                                <span>2.2 ETH</span>
                            </div>
                        </li>
                        <li>
                            <div class="author_list_pp">
                                <a href="author.html">
                                    <img class="lazy pp-author" src="images/author/author-5.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="author_list_info">
                                <a href="author.html">Jimmy Wright</a>
                                <span>1.9 ETH</span>
                            </div>
                        </li>
                        <li>
                            <div class="author_list_pp">
                                <a href="author.html">
                                    <img class="lazy pp-author" src="images/author/author-6.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="author_list_info">
                                <a href="author.html">Karla Sharp</a>
                                <span>1.6 ETH</span>
                            </div>
                        </li>
                        <li>
                            <div class="author_list_pp">
                                <a href="author.html">
                                    <img class="lazy pp-author" src="images/author/author-7.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="author_list_info">
                                <a href="author.html">Gayle Hicks</a>
                                <span>1.5 ETH</span>
                            </div>
                        </li>
                        <li>
                            <div class="author_list_pp">
                                <a href="author.html">
                                    <img class="lazy pp-author" src="images/author/author-8.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="author_list_info">
                                <a href="author.html">Claude Banks</a>
                                <span>1.3 ETH</span>
                            </div>
                        </li>
                        <li>
                            <div class="author_list_pp">
                                <a href="author.html">
                                    <img class="lazy pp-author" src="images/author/author-9.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="author_list_info">
                                <a href="author.html">Franklin Greer</a>
                                <span>0.9 ETH</span>
                            </div>
                        </li>
                        <li>
                            <div class="author_list_pp">
                                <a href="author.html">
                                    <img class="lazy pp-author" src="images/author/author-10.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="author_list_info">
                                <a href="author.html">Stacy Long</a>
                                <span>0.8 ETH</span>
                            </div>
                        </li>
                        <li>
                            <div class="author_list_pp">
                                <a href="author.html">
                                    <img class="lazy pp-author" src="images/author/author-11.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="author_list_info">
                                <a href="author.html">Ida Chapman</a>
                                <span>0.6 ETH</span>
                            </div>
                        </li>
                        <li>
                            <div class="author_list_pp">
                                <a href="author.html">
                                    <img class="lazy pp-author" src="images/author/author-12.jpg" alt="">
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                            <div class="author_list_info">
                                <a href="author.html">Fred Ryan</a>
                                <span>0.5 eth</span>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="section-steps" data-bgcolor="#F7F4FD">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Create and sell your NFTs</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_wallet"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Set up your wallet</h4>
                            <p class="wow fadeInUp" data-wow-delay=".25s">Sed ut perspiciatis unde omnis iste natus error
                                sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                        </div>
                        <i class="wm icon_wallet"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_cloud-upload_alt"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Add your NFT's</h4>
                            <p class="wow fadeInUp" data-wow-delay=".25s">Sed ut perspiciatis unde omnis iste natus error
                                sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                        </div>
                        <i class="wm icon_cloud-upload_alt"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_tags_alt"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Sell your NFT's</h4>
                            <p class="wow fadeInUp" data-wow-delay=".25s">Sed ut perspiciatis unde omnis iste natus error
                                sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                        </div>
                        <i class="wm icon_tags_alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
