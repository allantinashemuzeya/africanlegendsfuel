<header id="masthead"
        class=" tm-header-style-toplogo tm-header-overlay tm-main-menu-total-7 tm-main-menu-more-than-six tm-header-style-infostack">
    <div class="tm-header-block  tm-mmenu-active-color-skin tm-dmenu-active-color-skin tm-dmenu-sep-grey">
        <div id="site-header"
             class="site-header tm-bgcolor-custom tm-sticky-bgcolor-white tm-responsive-icon-white tm-mmmenu-override-yes tm-above-content-yes">
            <div class="site-header-main tm-wrap">

                <x-header-top-wrapper :data="$data"/>
                <div id="tm-stickable-header-w" class="tm-stickable-header-w tm-bgcolor-custom"
                     style="height:60px">
                    <div id="site-header-menu" class="site-header-menu">
                        <div
                            class="site-header-menu-inner tm-stickable-header  tm-header-menu-bg-color-custom tm-bgcolor-custom tm-sticky-bgcolor-darkgrey">
                            <div class="container tm-container-for-header ">
                                <div
                                    class="site-header-menu-middle  tm-header-menu-bg-color-custom tm-bgcolor-custom tm-sticky-bgcolor-darkgrey">
                                    <div>
                                        <nav id="site-navigation" class="main-navigation"
                                             aria-label="Primary Menu" data-sticky-height="70">

                                            <button id="menu-toggle" class="menu-toggle">
                                                <span class="tm-hide">Toggle menu</span><i
                                                    class="tm-tectxon-icon-bars"></i>
                                            </button>

                                            <x-navigation :current="$data['current']"/>

                                            <div class="kw-phone">
                                                <div class="tm-header-icons ">
                                                    <div class="tm-header-icon tm-header-search-link"><a
                                                            href="#"><i
                                                                class="tm-tectxon-icon-search"></i></a>
                                                        <div class="tm-search-overlay">
                                                            <form method="get" class="tm-site-searchform"
                                                                  action="https://themetechmount.com/wordpress/tectxon/demo3">
                                                                <div class="w-search-form-h">
                                                                    <div class="w-search-form-row">
                                                                        <div class="w-search-input"><input
                                                                                type="search"
                                                                                class="field searchform-s"
                                                                                name="s"
                                                                                placeholder="Type Word Then Enter.."/>
                                                                            <button
                                                                                type="submit"><span
                                                                                    class="tm-tectxon-icon-search"></span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ttm-custombutton">
                                                    <a href="{{route('contact')}}"
                                                       class="tm-cta-button">GET CONSULTING!</a>
                                                </div>
                                            </div>

                                        </nav><!-- .main-navigation -->

                                    </div>
                                </div>
                            </div>
                        </div><!-- .site-header-menu -->
                    </div>

                </div>
            </div><!-- .site-header-main -->
        </div>


        <div class="themetechmount-slider-wrapper">
            <div class="themetechmount-slider-wide">
                <!-- START mainslidercreativehomeslider REVOLUTION SLIDER 6.5.4 -->
                <p class="rs-p-wp-fix"></p>
                <rs-module-wrap id="rev_slider_2_1_wrapper" data-source="gallery"
                                style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                    <rs-module id="rev_slider_2_1" style="" data-version="6.5.4">
                        @foreach($data['revolution_slider'] as $slide)
                            <rs-slides>
                                <rs-slide data-key="rs-5" data-title="Slide"
                                      data-thumb="{{$slide['src']}}"
                                      data-in="o:0;" data-out="a:false;">
                                <img src="{{$slide['src']}}"
                                     title="slider-bg-two1.jpg" width="1920" height="974"
                                     class="rev-slidebg tp-rs-img rs-lazyload"
                                     data-lazyload="{{$slide['src']}}"
                                     data-no-retina>


                                <rs-layer id="slider-2-slide-5-layer-2" data-type="text" data-rsp_ch="on"
                                          data-xy="x:c;y:t,t,m,m;yo:454px,454px,-8px,-15px;"
                                          data-text="w:normal;s:70,70,45,30;l:76,76,47,40;fw:700;a:center;"
                                          data-frame_0="y:100%;"
                                          data-frame_1="e:power4.inOut;st:290;sp:800;sR:290;"
                                          data-frame_999="o:0;st:w;sR:7910;"
                                          style="z-index:9;font-family:Oswald;">
                                    <rs-bg-elem style="position:absolute; top:0px;left:0px;"></rs-bg-elem>
                                   {{$slide['title']}}
                                </rs-layer>
                                <!--

                -->

                                <!--

                --><a id="slider-2-slide-5-layer-4" class="rs-layer"
                      href="https://themetechmount.com/wordpress/axacus/contact-us/"
                      target="_self" data-type="text" data-rsp_ch="on"
                      data-xy="x:c;xo:-78px,-78px,0,0;y:m;yo:180px,180px,67px,50px;"
                      data-text="w:normal;s:14,14,14,12;l:14,14,14,12;fw:600;"
                      data-padding="t:17,17,16,13;r:33,33,30,25;b:17,17,16,13;l:33,33,30,25;"
                      data-border="bos:solid;boc:#fd972e;bow:1px,1px,1px,1px;"
                      data-frame_0="y:100%;"
                      data-frame_1="e:power4.inOut;st:540;sp:500;sR:540;"
                      data-frame_999="o:0;st:w;sR:7960;"
                      data-frame_hover="c:#fd972e;bgc:#fff;boc:#fff;bor:0px,0px,0px,0px;bos:solid;bow:1px,1px,1px,1px;"
                      style="z-index:11;background-color:#fd972e;font-family:Oswald;">
                                    <rs-bg-elem style="position:absolute; top:0px;left:0px;"></rs-bg-elem>
                                    GET CONSULTING!
                                </a>
                                <!--

                -->
                                <rs-layer id="slider-2-slide-5-layer-10" data-type="text" data-rsp_ch="on"
                                          data-xy="x:c;xo:0,0,633px,390px;y:b;yo:376px,376px,231px,142px;"
                                          data-text="w:normal;s:22,22,13,8;l:32,32,19,11;"
                                          data-frame_0="y:50,50,31,19;" data-frame_1="st:450;sp:500;"
                                          data-frame_999="o:0;st:w;"
                                          style="z-index:13;font-family:Oswald;text-transform:uppercase;">
                                    <rs-bg-elem style="position:absolute; top:0px;left:0px;"></rs-bg-elem>
                                    Quality Only Happens When you Care Enough To Do Your Best.
                                </rs-layer>
                                <!--

                --><a id="slider-2-slide-5-layer-14" class="rs-layer"
                      href="https://themetechmount.com/wordpress/axacus/contact-us/"
                      target="_self" data-type="text" data-rsp_ch="on"
                      data-xy="x:c;xo:98px,98px,580px,340px;y:m;yo:180px,180px,67px,60px;"
                      data-text="w:normal;s:14,14,14,12;l:14,14,14,12;fw:600;"
                      data-padding="t:17,17,16,13;r:33,33,30,25;b:17,17,16,13;l:33,33,30,25;"
                      data-border="bos:solid;boc:#ffffff;bow:1px,1px,1px,1px;"
                      data-frame_0="y:100%;"
                      data-frame_1="e:power4.inOut;st:550;sp:500;sR:540;"
                      data-frame_999="o:0;st:w;sR:7960;"
                      data-frame_hover="c:#fd972e;bgc:#fff;boc:#fff;bor:0px,0px,0px,0px;bos:solid;bow:1px,1px,1px,1px;"
                      style="z-index:10;font-family:Oswald;text-transform:uppercase;">
                                    <rs-bg-elem style="position:absolute; top:0px;left:0px;"></rs-bg-elem>
                                    Contact Us
                                </a>
                                <!--
-->
                            </rs-slide>
                            </rs-slides>
                        @endforeach
                    </rs-module>
                    <script>
                        setREVStartSize({
                            c: 'rev_slider_2_1',
                            rl: [1240, 1240, 778, 480],
                            el: [974, 974, 450, 350],
                            gw: [1240, 1240, 778, 480],
                            gh: [974, 974, 450, 350],
                            type: 'standard',
                            justify: '',
                            layout: 'fullwidth',
                            mh: "0"
                        });
                    </script>
                </rs-module-wrap>
                <!-- END REVOLUTION SLIDER -->
            </div>
        </div>


    </div>
</header><!-- .site-header -->
