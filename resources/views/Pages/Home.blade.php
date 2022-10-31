@extends('layouts.app')
@section('content')

    <article id="post-4702" class="post-4702 page type-page status-publish hentry">


        <header class="single-entry-header tm-hide">
            <h2 class="entry-title">Home</h2>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <div data-vc-full-width="true" data-vc-full-width-init="false"
                 class="tm-row wpb_row vc_row-fluid vc_custom_1625204864341 tm-responsive-custom-19074194 tm-zindex-0 tm-bgcolor-grey tm-bgimage-position-center_center">

                <div class="vc_row container">
                    <div
                        class="wpb_column tm-column vc_column_container vc_col-sm-12 tm-overlap-row tm-zindex-0">
                        <div
                            class="vc_column-inner vc_custom_1623834254284 tm-responsive-custom-37913351">
                            <div class="wpb_wrapper">

                                <div
                                    class="tm-row-inner vc_row wpb_row vc_inner vc_row-fluid break-991-colum tm-zindex-0">

                                    @foreach($data['services'] as $key => $service)

                                        @if($key < 3)
                                        <div
                                            class="wpb_column tm-column-inner vc_column_container vc_col-sm-4 tm-zindex-0">
                                            <div
                                                class="vc_column-inner  tm-responsive-custom-29112493">

                                                <div class="wpb_wrapper">
                                                    <div
                                                        class="themetechmount-iconbox themetechmount-iconbox-styletwo ">
                                                        <div
                                                            class="themetechmount-iconbox-inner">
                                                            <div class="tm-number">
                                                               {{'0'.$key + 1}}
                                                            </div>
                                                            <div
                                                                class="tm-iconbox-wrapper tm-wrap ">
                                                                <div
                                                                    class="themetechmount-iconbox-icon tm-wrap-cell ">
                                                                    <div class="tm-box-icon"><i
                                                                            class="kw_tectxon flaticon-factory-1"></i>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="themetechmount-iconbox-heading tm-wrap-cell">
                                                                    <div
                                                                        class="tm-vc_general tm-vc_cta3 tm-cta3-only tm-vc_cta3-style-classic tm-vc_cta3-shape-rounded tm-vc_cta3-align-left tm-vc_cta3-color-transparent tm-vc_cta3-icon-size-md tm-vc_cta3-actions-no tm-cta3-without-desc">
                                                                        <div
                                                                            class="tm-vc_cta3_content-container">
                                                                            <div
                                                                                class="tm-vc_cta3-content">
                                                                                <div
                                                                                    class="tm-vc_cta3-headers tm-wrap-cell">
                                                                                    <h2
                                                                                        class="tm-custom-heading ">
                                                                                       {{$service['title']}}
                                                                                    </h2>
                                                                                </div>
                                                                                <div
                                                                                    class="heading-seperator">
                                                                                    <span></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="tm-cta3-content-wrapper">
                                                                {!! \Illuminate\Support\Str::limit($service['description'], 150, $end= '<a style="color: orange; font-weight:bold;" href="/services">   ...</a>')  !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach





                                </div>


                                <div
                                    class="tm-row-inner vc_row wpb_row vc_inner vc_row-fluid vc_custom_1625204895919 tm-responsive-custom-77751971 tm-zindex-0">

                                    <div
                                        class="wpb_column tm-column-inner vc_column_container vc_col-sm-12 tm-zindex-0">
                                        <div
                                            class="vc_column-inner vc_custom_1623823958015 tm-responsive-custom-39256821">

                                            <div class="wpb_wrapper">
                                                <div
                                                    class="themetechmount-boxes themetechmount-boxes-client themetechmount-boxes-view-carousel themetechmount-boxes-col-five themetechmount-boxes-sortable- themetechmount-boxes-textalign-center themetechmount-boxes-sortablebutton- tm-boxes-carousel-arrow- tm-boxes-carousel-arrows-side"
                                                    data-tm-speed="1500"
                                                    data-tm-autoplay="0"
                                                    data-tm-autoplayspeed="4500"
                                                    data-tm-loop="1" data-tm-dots="0"
                                                    data-tm-nav="hide"
                                                    data-tm-centermode="0"
                                                    data-tm-pauseonfocus="1"
                                                    data-tm-pauseonhover="1"
                                                    data-tm-slidestoscroll="column"
                                                    data-tm-effecttype="slide">
                                                    <div
                                                        class="themetechmount-boxes-inner themetechmount-boxes-client-inner ">
                                                        <div
                                                            class="themetechmount-box-heading-wrapper tm-element-align-center">
                                                            <div
                                                                class="tm-element-heading-wrapper tm-heading-inner tm-element-align-center tm-seperator-none tm-heading-style-vertical ">
                                                                <section
                                                                    class="tm-vc_cta3-container">
                                                                    <div
                                                                        class="tm-vc_general tm-vc_cta3 tm-cta3-only tm-vc_cta3-style-classic tm-vc_cta3-shape-rounded tm-vc_cta3-align-center tm-vc_cta3-color-transparent tm-vc_cta3-icon-size-md tm-vc_cta3-actions-no tm-cta3-without-desc">
                                                                        <div
                                                                            class="tm-vc_cta3_content-container">
                                                                            <div
                                                                                class="tm-vc_cta3-content">
                                                                                <header
                                                                                    class="tm-vc_cta3-content-header tm-wrap">
                                                                                    <div
                                                                                        class="tm-vc_cta3-headers tm-wrap-cell">
                                                                                        <h2 style="font-size:32px;"
                                                                                            class="tm-custom-heading ">
                                                                                            Trusted
                                                                                            by
                                                                                            200+
                                                                                            Forward
                                                                                            Thinking
                                                                                            Companies
                                                                                        </h2>
                                                                                    </div>
                                                                                    <div
                                                                                        class="heading-seperator">
                                                                                        <span></span>
                                                                                    </div>
                                                                                </header>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                            <!-- .tm-element-heading-wrapper container -->
                                                        </div>
                                                        <!-- .tm-element-heading-wrapper container -->

                                                        <div
                                                            class="row multi-columns-row themetechmount-boxes-row-wrapper">
                                                            <div
                                                                class="tm-box-col-wrapper col-lg-20percent col-sm-4 col-md-4 col-xs-12 ">
                                                                <div
                                                                    class="tm-client-logo-box-w">
                                                                    <a class="tm-client-logo-link"
                                                                       href="#"><span
                                                                            class="themetechmount-box themetechmount-box-client themetechmount-box-view-simple-logo themetechmount-client-box-view-simple-logo tm-greyscle-style">

                                                                        <span
                                                                            class="themetechmount-item-thumbnail">
                                                                            <span
                                                                                class="themetechmount-item-thumbnail-inner">
                                                                                <img width="162"
                                                                                     height="65"
                                                                                     src="wp-content/uploads/sites/3/2018/05/client01.png"
                                                                                     class="attachment-full size-full wp-post-image"
                                                                                     alt=""/>
                                                                            </span>
                                                                        </span></span>
                                                                    </a></div>
                                                                <!-- .tm-client-logo-box-w -->
                                                            </div>
                                                            <div
                                                                class="tm-box-col-wrapper col-lg-20percent col-sm-4 col-md-4 col-xs-12 ">
                                                                <div
                                                                    class="tm-client-logo-box-w">
                                                                    <a class="tm-client-logo-link"
                                                                       href="#"><span
                                                                            class="themetechmount-box themetechmount-box-client themetechmount-box-view-simple-logo themetechmount-client-box-view-simple-logo tm-greyscle-style">

                                                                        <span
                                                                            class="themetechmount-item-thumbnail">
                                                                            <span
                                                                                class="themetechmount-item-thumbnail-inner">
                                                                                <img width="119"
                                                                                     height="65"
                                                                                     src="wp-content/uploads/sites/3/2018/05/client02.png"
                                                                                     class="attachment-full size-full wp-post-image"
                                                                                     alt=""/>
                                                                            </span>
                                                                        </span></span>
                                                                    </a></div>
                                                                <!-- .tm-client-logo-box-w -->
                                                            </div>
                                                            <div
                                                                class="tm-box-col-wrapper col-lg-20percent col-sm-4 col-md-4 col-xs-12 ">
                                                                <div
                                                                    class="tm-client-logo-box-w">
                                                                    <a class="tm-client-logo-link"
                                                                       href="#"><span
                                                                            class="themetechmount-box themetechmount-box-client themetechmount-box-view-simple-logo themetechmount-client-box-view-simple-logo tm-greyscle-style">

                                                                        <span
                                                                            class="themetechmount-item-thumbnail">
                                                                            <span
                                                                                class="themetechmount-item-thumbnail-inner">
                                                                                <img width="155"
                                                                                     height="65"
                                                                                     src="wp-content/uploads/sites/3/2018/05/client03.png"
                                                                                     class="attachment-full size-full wp-post-image"
                                                                                     alt=""/>
                                                                            </span>
                                                                        </span></span>
                                                                    </a></div>
                                                                <!-- .tm-client-logo-box-w -->
                                                            </div>
                                                            <div
                                                                class="tm-box-col-wrapper col-lg-20percent col-sm-4 col-md-4 col-xs-12 ">
                                                                <div
                                                                    class="tm-client-logo-box-w">
                                                                    <a class="tm-client-logo-link"
                                                                       href="#"><span
                                                                            class="themetechmount-box themetechmount-box-client themetechmount-box-view-simple-logo themetechmount-client-box-view-simple-logo tm-greyscle-style">

                                                                        <span
                                                                            class="themetechmount-item-thumbnail">
                                                                            <span
                                                                                class="themetechmount-item-thumbnail-inner">
                                                                                <img width="134"
                                                                                     height="65"
                                                                                     src="wp-content/uploads/sites/3/2018/05/client04.png"
                                                                                     class="attachment-full size-full wp-post-image"
                                                                                     alt=""/>
                                                                            </span>
                                                                        </span></span>
                                                                    </a></div>
                                                                <!-- .tm-client-logo-box-w -->
                                                            </div>
                                                            <div
                                                                class="tm-box-col-wrapper col-lg-20percent col-sm-4 col-md-4 col-xs-12 ">
                                                                <div
                                                                    class="tm-client-logo-box-w">
                                                                    <a class="tm-client-logo-link"
                                                                       href="#"><span
                                                                            class="themetechmount-box themetechmount-box-client themetechmount-box-view-simple-logo themetechmount-client-box-view-simple-logo tm-greyscle-style">

                                                                        <span
                                                                            class="themetechmount-item-thumbnail">
                                                                            <span
                                                                                class="themetechmount-item-thumbnail-inner">
                                                                                <img width="84"
                                                                                     height="65"
                                                                                     src="wp-content/uploads/sites/3/2018/05/client05.png"
                                                                                     class="attachment-full size-full wp-post-image"
                                                                                     alt=""/>
                                                                            </span>
                                                                        </span></span>
                                                                    </a></div>
                                                                <!-- .tm-client-logo-box-w -->
                                                            </div>
                                                            <div
                                                                class="tm-box-col-wrapper col-lg-20percent col-sm-4 col-md-4 col-xs-12 ">
                                                                <div
                                                                    class="tm-client-logo-box-w">
                                                                <span
                                                                    class="themetechmount-box themetechmount-box-client themetechmount-box-view-simple-logo themetechmount-client-box-view-simple-logo tm-greyscle-style">

                                                                    <span
                                                                        class="themetechmount-item-thumbnail">
                                                                        <span
                                                                            class="themetechmount-item-thumbnail-inner">
                                                                            <img width="119"
                                                                                 height="65"
                                                                                 src="wp-content/uploads/sites/3/2018/05/client02.png"
                                                                                 class="attachment-full size-full wp-post-image"
                                                                                 alt=""/>
                                                                        </span>
                                                                    </span></span>
                                                                </div>
                                                                <!-- .tm-client-logo-box-w -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .themetechmount-boxes-inner -->
                                                </div><!-- .themetechmount-boxes -->
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <div class="vc_row-full-width vc_clearfix"></div>


            <div data-vc-full-width="true" data-vc-full-width-init="false"
                 class="tm-row wpb_row vc_row-fluid vc_custom_1623824118148 tm-responsive-custom-12876847 break-991-colum tm-zindex-0 tm-bgcolor-white tm-bgimage-position-center_center">


                <div class="vc_row container">


                    <div
                        class="wpb_column tm-column vc_column_container vc_col-sm-6 tm-zindex-0">
                        <div class="vc_column-inner  ">
                            <div class="wpb_wrapper">

                                <div
                                    class="wpb_single_image wpb_content_element vc_align_left">

                                    <figure class="wpb_wrapper vc_figure">
                                        <div
                                            class="vc_single_image-wrapper   vc_box_border_grey">
                                            <img width="538" height="648"
                                                 src="wp-content/uploads/sites/3/2021/08/about-us1.jpg"
                                                 class="vc_single_image-img attachment-full"
                                                 alt="" loading="lazy"
                                                 srcset="https://themetechmount.com/wordpress/tectxon/demo3/wp-content/uploads/sites/3/2021/08/about-us1.jpg 538w, https://themetechmount.com/wordpress/tectxon/demo3/wp-content/uploads/sites/3/2021/08/about-us1-249x300.jpg 249w"
                                                 sizes="(max-width: 538px) 100vw, 538px"
                                                 data-id="4825"/></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div
                        class="wpb_column tm-column vc_column_container vc_col-sm-6 tm-zindex-0">
                        <div
                            class="vc_column-inner vc_custom_1623824153305 tm-responsive-custom-63348887">
                            <div class="wpb_wrapper">
                                <div
                                    class="tm-element-heading-wrapper tm-heading-inner tm-element-align-left tm-seperator-none tm-heading-style-vertical ">
                                    <section class="tm-vc_cta3-container">
                                        <div
                                            class="tm-vc_general tm-vc_cta3 tm-cta3-only tm-vc_cta3-style-classic tm-vc_cta3-shape-rounded tm-vc_cta3-align-left tm-vc_cta3-color-transparent tm-vc_cta3-icon-size-md tm-vc_cta3-actions-no tm-cta3-with-desc">
                                            <div class="tm-vc_cta3_content-container">
                                                <div class="tm-vc_cta3-content">
                                                    <header
                                                        class="tm-vc_cta3-content-header tm-wrap">
                                                        <div
                                                            class="tm-vc_cta3-headers tm-wrap-cell">
                                                            <h4 class="tm-custom-heading ">
                                                                ABOUT AFRICAN LEGENDS FUELS</h4>
                                                            <h2 class="tm-custom-heading ">
                                                               {{$data['about_section']['title']}}</h2>
                                                        </div>
                                                        <div class="heading-seperator">
                                                            <span></span></div>
                                                    </header>
                                                    <div class="tm-cta3-content-wrapper">
                                                        <p>
                                                            {!! $data['about_section']['description'] !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div> <!-- .tm-element-heading-wrapper container -->

                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <div class="vc_row-full-width vc_clearfix"></div>


            <div
                class="tm-row wpb_row vc_row-fluid vc_custom_1623824970377 tm-responsive-custom-71528996 tm-zindex-0 vc_row container tm-bgimage-position-center_center">


                <div
                    class="wpb_column tm-column vc_column_container vc_col-sm-12 tm-zindex-0">
                    <div class="vc_column-inner  ">
                        <div class="wpb_wrapper">
                            <div
                                class="tm-element-heading-wrapper tm-heading-inner tm-element-align-center tm-seperator-none tm-heading-style-vertical ">
                                <section class="tm-vc_cta3-container">
                                    <div
                                        class="tm-vc_general tm-vc_cta3 tm-cta3-only tm-vc_cta3-style-classic tm-vc_cta3-shape-rounded tm-vc_cta3-align-center tm-vc_cta3-color-transparent tm-vc_cta3-icon-size-md tm-vc_cta3-actions-no tm-cta3-without-desc">
                                        <div class="tm-vc_cta3_content-container">
                                            <div class="tm-vc_cta3-content">
                                                <header
                                                    class="tm-vc_cta3-content-header tm-wrap">
                                                    <div
                                                        class="tm-vc_cta3-headers tm-wrap-cell">
                                                        <h4 class="tm-custom-heading ">WHAT
                                                            WE DO</h4>
                                                        <h2 class="tm-custom-heading ">
                                                            OIL Services For Your
                                                            Business</h2>
                                                    </div>
                                                    <div class="heading-seperator">
                                                        <span></span></div>
                                                </header>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div> <!-- .tm-element-heading-wrapper container -->
                        </div>
                    </div>
                </div>


            </div>


            <div
                class="tm-row wpb_row vc_row-fluid vc_custom_1625207010730 tm-responsive-custom-44764047 break-991-colum tm-zindex-0 vc_row container tm-bgimage-position-center_center">


                <div class="vc_row-o-equal-height vc_row-flex">


                    <div
                        class="wpb_column tm-column vc_column_container vc_col-sm-6 tm-zindex-1">
                        <div class="vc_column-inner  ">
                            <div class="wpb_wrapper">

                                <div
                                    class="tm-row-inner vc_row wpb_row vc_inner vc_row-fluid vc_custom_1625206952212 tm-responsive-custom-84053319 tm-zindex-0">

                                    @foreach($data['services'] as $key => $service)
                                        @if($key < 2)
                                            <div
                                                class="wpb_column tm-column-inner vc_column_container vc_col-sm-6 tm-zindex-0">
                                                <div
                                                    class="vc_column-inner vc_custom_1623474676842 ">

                                                    <div class="wpb_wrapper">
                                                        <div
                                                            class="themetechmount-iconbox themetechmount-iconbox-stylethree ">
                                                            <div
                                                                class="themetechmount-iconbox-inner tm-textalign-center">
                                                                <div class="tm-iconbox-wrapper">
                                                                    <div
                                                                        class="themetechmount-iconbox-icon">
                                                                        <div class="tm-box-icon"><i
                                                                                class="kw_tectxon flaticon-container"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="themetechmount-iconbox-heading">
                                                                        <div
                                                                            class="tm-vc_general tm-vc_cta3 tm-cta3-only tm-vc_cta3-style-classic tm-vc_cta3-shape-rounded tm-vc_cta3-align-left tm-vc_cta3-color-transparent tm-vc_cta3-icon-size-md tm-vc_cta3-actions-no tm-cta3-without-desc">
                                                                            <div
                                                                                class="tm-vc_cta3_content-container">
                                                                                <div
                                                                                    class="tm-vc_cta3-content">
                                                                                    <div
                                                                                        class="tm-vc_cta3-headers tm-wrap-cell">
                                                                                        <h4
                                                                                            class="tm-custom-heading ">
                                                                                            {{$service['title']}}
                                                                                        </h4>
                                                                                        <h2
                                                                                            class="tm-custom-heading ">
                                                                                            {{$service['title']}}
                                                                                        </h2>
                                                                                    </div>
                                                                                    <div
                                                                                        class="heading-seperator">
                                                                                        <span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    @endforeach

                                </div>

                                <div
                                    class="tm-row-inner vc_row wpb_row vc_inner vc_row-fluid vc_custom_1625206952212 tm-responsive-custom-84053319 tm-zindex-0">

                                    @foreach($data['services'] as $key => $service)
                                        @if($key >= 2 && $key !== 'overview')
                                            <div
                                                class="wpb_column tm-column-inner vc_column_container vc_col-sm-6 tm-zindex-0">
                                                <div
                                                    class="vc_column-inner vc_custom_1623474676842 ">

                                                    <div class="wpb_wrapper">
                                                        <div
                                                            class="themetechmount-iconbox themetechmount-iconbox-stylethree ">
                                                            <div
                                                                class="themetechmount-iconbox-inner tm-textalign-center">
                                                                <div class="tm-iconbox-wrapper">
                                                                    <div
                                                                        class="themetechmount-iconbox-icon">
                                                                        <div class="tm-box-icon"><i
                                                                                class="kw_tectxon flaticon-container"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="themetechmount-iconbox-heading">
                                                                        <div
                                                                            class="tm-vc_general tm-vc_cta3 tm-cta3-only tm-vc_cta3-style-classic tm-vc_cta3-shape-rounded tm-vc_cta3-align-left tm-vc_cta3-color-transparent tm-vc_cta3-icon-size-md tm-vc_cta3-actions-no tm-cta3-without-desc">
                                                                            <div
                                                                                class="tm-vc_cta3_content-container">
                                                                                <div
                                                                                    class="tm-vc_cta3-content">
                                                                                    <div
                                                                                        class="tm-vc_cta3-headers tm-wrap-cell">
                                                                                        <h4
                                                                                            class="tm-custom-heading ">
                                                                                            {{$service['title']}}
                                                                                        </h4>
                                                                                        <h2
                                                                                            class="tm-custom-heading ">
                                                                                            {{$service['title']}}
                                                                                        </h2>
                                                                                    </div>
                                                                                    <div
                                                                                        class="heading-seperator">
                                                                                        <span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    @endforeach

                                </div>


                            </div>
                        </div>
                    </div>


                    <div
                        class="wpb_column tm-column vc_column_container vc_col-sm-6 vc_col-has-fill tm-zindex-0">
                        <div
                            class="vc_column-inner vc_custom_1630138205530 tm-col-bgimage-yes tm-responsive-custom-58304094">
                            <div
                                class="tm-col-wrapper-bg-layer tm-bg-layer tm-bgimage-position-center_center">
                                <div class="tm-bg-layer-inner"></div>
                            </div>
                            <div class="wpb_wrapper">

                                <div
                                    class="tm-row-inner vc_row wpb_row vc_inner vc_row-fluid tm-zindex-0">

                                    <div
                                        class="wpb_column tm-column-inner vc_column_container vc_col-sm-12 tm-zindex-0">
                                        <div class="vc_column-inner  ">

                                            <div class="wpb_wrapper">
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div
                                    class="tm-row-inner vc_row wpb_row vc_inner vc_row-fluid tm-zindex-0">

                                    <div
                                        class="colbg-opacity-full wpb_column tm-column-inner vc_column_container vc_col-sm-8 vc_col-has-fill tm-zindex-2">
                                        <div
                                            class="vc_column-inner vc_custom_1625298609709 tm-col-bgcolor- tm-col-bgcolor-yes tm-responsive-custom-32591190">
                                            <div
                                                class="tm-col-wrapper-bg-layer tm-bg-layer">
                                                <div class="tm-bg-layer-inner"></div>
                                            </div>
                                            <div class="wpb_wrapper">

                                                <div
                                                    class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>{!! $data['services']['overview']['description'] !!}</p>
                                                    </div>
                                                </div>
                                                <h2 style="text-align:left;font-size:14px;"
                                                    class="tm-custom-heading vc_custom_1625291636308">
                                                    <a href="{{route('services')}}">VIEW
                                                        SERVICES!</a></h2>
                                            </div>
                                        </div>
                                    </div>


                                    <div
                                        class="wpb_column tm-column-inner vc_column_container vc_col-sm-4 tm-zindex-0">
                                        <div class="vc_column-inner  ">

                                            <div class="wpb_wrapper">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <div data-vc-full-width="true" data-vc-full-width-init="false"
                 data-vc-stretch-content="true"
                 class="tm-row wpb_row vc_row-fluid tm-textimonial-color vc_custom_1630138389414 tm-responsive-custom-95771377 vc_row-has-fill break-991-colum tm-zindex-2 tm-bgimage-position-center_center tm-bg tm-bgimage-yes">

                <div class="tm-row-wrapper-bg-layer tm-bg-layer"></div>
                <!-- ThemetechMount custom DIV added -->

                <div class="vc_row vc_row-no-padding">


                    <div
                        class="wpb_column tm-column vc_column_container vc_col-sm-6 tm-overlap-row tm-span tm-left-span tm-zindex-2">
                        <div
                            class="vc_column-inner vc_custom_1625208247645 tm-col-bgcolor-skincolor tm-col-bgcolor-yes tm-responsive-custom-71762741">
                            <div
                                class="tm-col-wrapper-bg-layer tm-bg-layer tm-bgimage-position-center_center">
                                <div class="tm-bg-layer-inner"></div>
                            </div>
                            <div class="wpb_wrapper">
                                <div
                                    class="tm-element-heading-wrapper tm-heading-inner tm-element-align-left tm-seperator-none tm-heading-style-vertical  vc_custom_1625130638607">
                                    <section class="tm-vc_cta3-container">
                                        <div
                                            class="tm-vc_general tm-vc_cta3 tm-cta3-only tm-vc_cta3-style-classic tm-vc_cta3-shape-rounded tm-vc_cta3-align-left tm-vc_cta3-color-transparent tm-vc_cta3-icon-size-md tm-vc_cta3-actions-no tm-cta3-without-desc">
                                            <div class="tm-vc_cta3_content-container">
                                                <div class="tm-vc_cta3-content">
                                                    <header
                                                        class="tm-vc_cta3-content-header tm-wrap">
                                                        <div
                                                            class="tm-vc_cta3-headers tm-wrap-cell">
                                                            <h4 class="tm-custom-heading ">
                                                                TESTIMONIALS</h4>
                                                            <h2 class="tm-custom-heading ">
                                                                What Our Clients Say!</h2>
                                                        </div>
                                                        <div class="heading-seperator">
                                                            <span></span></div>
                                                    </header>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div> <!-- .tm-element-heading-wrapper container -->
                                <div
                                    class="themetechmount-boxes themetechmount-boxes-testimonial themetechmount-boxes-view-carousel themetechmount-boxes-col-one themetechmount-boxes-sortable-no themetechmount-boxes-textalign-left themetechmount-boxes-sortablebutton- tm-boxes-carousel-arrow- tm-boxes-carousel-arrows-side tm-hideslick-arrow tm-fontweight-medium"
                                    data-tm-speed="1500" data-tm-autoplay="1"
                                    data-tm-autoplayspeed="4500" data-tm-loop="1"
                                    data-tm-dots="0" data-tm-nav="hide"
                                    data-tm-centermode="0" data-tm-pauseonfocus="1"
                                    data-tm-pauseonhover="1" data-tm-slidestoscroll="column"
                                    data-tm-effecttype="slide">
                                    <div
                                        class="themetechmount-boxes-inner themetechmount-boxes-testimonial-inner ">

                                        <div
                                            class="row multi-columns-row themetechmount-boxes-row-wrapper">

                                            @foreach($data['testimonials'] as $testimonial)
                                                <div
                                                    class="tm-box-col-wrapper col-lg-12 col-sm-12 col-md-12 col-xs-12 ">
                                                    <article
                                                        class="themetechmount-box themetechmount-box-testimonial themetechmount-box-view-default themetechmount-testimonial-box-view-left-image">
                                                        <div class="themetechmount-post-item">
                                                            <div
                                                                class="themetechmount-box-content tm-wrap">
                                                                <div
                                                                    class="themetechmount-box-desc">
                                                                    <div
                                                                        class="themetechmount-box-title">
                                                                        <div
                                                                            class="themetechmount-box-img tm-wrap-cell">
                                                                    <span
                                                                        class="themetechmount-item-thumbnail">
                                                                        <span
                                                                            class="themetechmount-item-thumbnail-inner">
                                                                            <img width="179"
                                                                                 height="183"
                                                                                 src="{{$testimonial['Client_Icon']}}"
                                                                                 class="attachment-themetechmount-img-testimonial size-themetechmount-img-testimonial wp-post-image"
                                                                                 alt=""
                                                                                 loading="lazy"
                                                                                 data-id="4813"/>
                                                                        </span>
                                                                    </span>
                                                                        </div>
                                                                        <h3
                                                                            class="themetechmount-author-name">
                                                                            {{$testimonial['Client_name']}}</h3>
                                                                        <span
                                                                            class="themetechmount-box-footer">{{$testimonial['Client_Position']}}</span>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="themetechmount-box-author tm-wrap-cell">
                                                                    <blockquote
                                                                        class="themetechmount-testimonial-text">
                                                                      {!! $testimonial['Testimonial'] !!}
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div><!-- .themetechmount-boxes-inner -->
                                </div><!-- .themetechmount-boxes -->
                            </div>
                        </div>
                    </div>


                    <div
                        class="wpb_column tm-column vc_column_container vc_col-sm-6 tm-zindex-0">
                        <div class="vc_column-inner  ">
                            <div class="wpb_wrapper">

                                <div
                                    class="tm-row-inner vc_row wpb_row vc_inner vc_row-fluid tm-zindex-0">

                                    <div
                                        class="wpb_column tm-column-inner vc_column_container vc_col-sm-12 tm-zindex-0">
                                        <div class="vc_column-inner  ">

                                            <div class="wpb_wrapper">
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div
                                    class="tm-row-inner vc_row wpb_row vc_inner vc_row-fluid tm-zindex-0">

                                    <div
                                        class="wpb_column tm-column-inner vc_column_container vc_col-sm-12 tm-zindex-0">
                                        <div
                                            class="vc_column-inner vc_custom_1625207094092 tm-responsive-custom-91333733">

                                            <div class="wpb_wrapper">
                                                <div
                                                    class="tm-vc_icon_element tm-vc_icon_element-outer tm-vc_icon_element-align-center  tm-vc_icon_element-have-style tm_prettyphoto">
                                                    <div
                                                        class="tm-vc_icon_element-inner  tm-vc_icon_element-have-style-inner tm-vc_icon_element-color-white tm-vc_icon_element-size-lg tm-vc_icon_element-style-rounded tm-vc_icon_element-background tm-vc_icon_element-background-color-skincolor">
                                                    <span
                                                        class="tm-vc_icon_element-icon fa fa-play"></span><a
                                                            class="tm-vc_icon_element-link"
                                                            href="https://youtu.be/MdLVzXf7v5E"
                                                            title="" target="_self"></a>
                                                    </div>
                                                </div>
                                                <h2 style="text-align:center;font-size:16px;color:#ffffff;"
                                                    class="tm-custom-heading vc_custom_1623479382399">
                                                    Watch Video!</h2>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="vc_row-full-width vc_clearfix"></div>
        </div><!-- .entry-content -->


    </article><!-- #post-## -->

@endsection
