<!doctype html>
<html lang="en">
    <head>
        <!-- Basic page needs
        ============================================ -->
        <title>iSmart Web Design | Home</title>
        <meta charset="utf-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- Mobile specific metas
        ============================================ -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{url('images/favicon.ico')}}">

        <!-- Google web fonts
        ============================================ -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <!-- Libs CSS
        ============================================ -->
        <link rel="stylesheet" href="{{url('css/animate.css')}}">
        <link rel="stylesheet" href="{{url('css/fontello.css')}}">
        <link rel="stylesheet" href="{{url('css/font.css')}}">
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

        <!-- Theme CSS
        ============================================ -->
        <link rel="stylesheet" href="{{url('js/rs-plugin/css/settings.css')}}">
        <link rel="stylesheet" href="{{url('js/owlcarousel/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{url('js/arcticmodal/jquery.arcticmodal.css')}}">
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <link rel="stylesheet" href="{{url('css/colorbox.css')}}">

        <link rel="stylesheet" href="{{url('js/layerslider/css/layerslider.css')}}">


        <!-- JS Libs
        ============================================ -->
        <script src="{{url('js/modernizr.js')}}"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <!-- Old IE stylesheet
        ============================================ -->
        <!--[if lte IE 9]>
                <link rel="stylesheet" type="text/css" href="{{url('css/oldie.css')}}">
        <![endif]-->

        <!-- Add mousewheel plugin (this is optional) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="{{url('js/jquery.colorbox.js')}}"></script>


        <!-- fancubox-->
        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="{{url('lib/jquery.mousewheel-3.0.6.pack.js')}}"></script>

        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="{{url('source/jquery.fancybox.js?v=2.1.5')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{url('source/jquery.fancybox.css?v=2.1.5')}}" media="screen" />

        <!-- Add Button helper (this is optional) -->
        <link rel="stylesheet" type="text/css" href="{{url('source/helpers/jquery.fancybox-buttons.css?v=1.0.5')}}" />
        <script type="text/javascript" src="{{url('source/helpers/jquery.fancybox-buttons.js?v=1.0.5')}}"></script>

        <!-- Add Thumbnail helper (this is optional) -->
        <link rel="stylesheet" type="text/css" href="{{url('source/helpers/jquery.fancybox-thumbs.css?v=1.0.7')}}" />
        <script type="text/javascript" src="{{url('source/helpers/jquery.fancybox-thumbs.js?v=1.0.7')}}"></script>

        <!-- Add Media helper (this is optional) -->
        <script type="text/javascript" src="{{url('source/helpers/jquery.fancybox-media.js?v=1.0.6')}}"></script>
    
         <script type="text/javascript" src="{{url('js/flowtype.js')}}"></script>
        <!-- cufont -->
        <script type="text/javascript" src="{{url('js/cufon-yui.js')}}"></script>
        <script type="text/javascript" src="{{url('js/cufontext_400.font.js')}}"></script>
        <script type="text/javascript" src="{{url('js/ismart.js')}}"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    
        <script>
/*!
 * jquery.counterup.js 1.0
 *
 * Copyright 2013, Benjamin Intal http://gambit.ph @bfintal
 * Released under the GPL v2 License
 *
 * Date: Nov 26, 2013
 */
(function ($) {
    "use strict";

    $.fn.counterUp = function (options) {

        // Defaults
        var settings = $.extend({
            'time': 400,
            'delay': 10
        }, options);

        return this.each(function () {

            // Store the object
            var $this = $(this);
            var $settings = settings;

            var counterUpper = function () {
                var nums = [];
                var divisions = $settings.time / $settings.delay;
                var num = $this.text();
                var isComma = /[0-9]+,[0-9]+/.test(num);
                num = num.replace(/,/g, '');
                var isInt = /^[0-9]+$/.test(num);
                var isFloat = /^[0-9]+\.[0-9]+$/.test(num);
                var decimalPlaces = isFloat ? (num.split('.')[1] || []).length : 0;

                // Generate list of incremental numbers to display
                for (var i = divisions; i >= 1; i--) {

                    // Preserve as int if input was int
                    var newNum = parseInt(num / divisions * i);

                    // Preserve float if input was float
                    if (isFloat) {
                        newNum = parseFloat(num / divisions * i).toFixed(decimalPlaces);
                    }

                    // Preserve commas if input had commas
                    if (isComma) {
                        while (/(\d+)(\d{3})/.test(newNum.toString())) {
                            newNum = newNum.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
                        }
                    }

                    nums.unshift(newNum);
                }

                $this.data('counterup-nums', nums);
                $this.text('0');

                // Updates the number until we're done
                var f = function () {
                    $this.text($this.data('counterup-nums').shift());
                    if ($this.data('counterup-nums').length) {
                        setTimeout($this.data('counterup-func'), $settings.delay);
                    } else {
                        delete $this.data('counterup-nums');
                        $this.data('counterup-nums', null);
                        $this.data('counterup-func', null);
                    }
                };
                $this.data('counterup-func', f);

                // Start the count up
                setTimeout($this.data('counterup-func'), $settings.delay);
            };

            // Perform counts when the element gets into view
            $this.waypoint(counterUpper, {offset: '100%', triggerOnce: true});
        });

    };

})(jQuery);</script>




        <!--Start of Zopim Live Chat Script-->
        <script type="text/javascript">
            window.$zopim || (function (d, s) {
                var z = $zopim = function (c) {
                    z._.push(c)
                }, $ = z.s =
                        d.createElement(s), e = d.getElementsByTagName(s)[0];
                z.set = function (o) {
                    z.set.
                            _.push(o)
                };
                z._ = [];
                z.set._ = [];
                $.async = !0;
                $.setAttribute("charset", "utf-8");
                $.src = "//v2.zopim.com/?3EYLiFo7aMW5WT7DT9NbWOpLWnQNI4OZ";
                z.t = +new Date;
                $.
                        type = "text/javascript";
                e.parentNode.insertBefore($, e)
            })(document, "script");
        </script>
        <!--End of Zopim Live Chat Script-->
    </head>
    <body class="front_page">
   

        <!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->

        <div class="wide_layout ">

            <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

            <header id="header" class="type_2">

                <!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

                @include('layouts.inc.header_1')

                <!--/ .bottom_part -->

                <!-- - - - - - - - - - - - - - End of bottom part - - - - - - - - - - - - - - - - -->

            </header>

            <!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
            @include('layouts.inc.slider')

            @yield('content')


            <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Footer section- - - - - - - - - - - - - - - - -->


            <footer>


                <!-- - - - - - - - - - - - - - End footer section- - - - - - - - - - - - - - - - -->



                <!-- - - - - - - - - - - - - - Footer section- - - - - - - - - - - - - - - - -->

                <div class="footer_section">

                    <div class="container">

                        <div class="row">

                            <div class="col-md-3 col-sm-6">

                                <!-- - - - - - - - - - - - - - Information widget - - - - - - - - - - - - - - - - -->

                                <section class="widget font-14">

                                    <h4>สินค้าและบริการ</h4>

                                    <ul class="list_of_links">

                                        <li><a href="#">บริการออกแบบเว็บไซต์</a></li>
                                        <li><a href="#">บริการทำ SEO</a></li>
                                        <li><a href="#">ismartwebdesign เหมาะกับใคร</a></li>
                                        <li><a href="#">ขั้นตอนการทำเว็บ</a></li>
                                        <li><a href="{{url('/about-ismartwebdesign/คำถามที่พบบ่อย')}}">คำถามที่พบบ่อย</a></li>

                                    </ul>

                                </section>

                                <!-- - - - - - - - - - - - - - End information widget - - - - - - - - - - - - - - - - -->

                            </div><!--/ [col]-->

                            <div class="col-md-3 col-sm-6">

                                <!-- - - - - - - - - - - - - - Account's links widget - - - - - - - - - - - - - - - - -->

                                <section class="widget font-14">

                                    <h4>หมวดหมู่</h4>

                                    <ul class="list_of_links">

                                        <li><a href="#">ตัวอย่างผลงาน</a></li>
                                        <li><a href="#">ตัวอย่างธีม</a></li>

                                    </ul>

                                </section><!--/ .widget-->

                                <!-- - - - - - - - - - - - - - End of account's links widget - - - - - - - - - - - - - - - - -->

                            </div><!--/ [col]-->

                            <div class="col-md-3 col-sm-6">

                                <!-- - - - - - - - - - - - - - Subscribe widget - - - - - - - - - - - - - - - - -->

                                <section class="widget font-16">

                                    <h4>สมัครรับข่าวสารจากเรา</h4>

                                    <form class="newsletter subscribe clearfix" novalidate>

                                        <input type="email" name="sc_email" placeholder="Enter your email address">

                                        <button class="button_blue def_icon_btn"></button>

                                    </form>

                                </section><!--/ .widget-->

                                <!-- - - - - - - - - - - - - - End of subscribe widget - - - - - - - - - - - - - - - - -->

                            </div><!--/ [col]-->

                            <div class="col-md-3 col-sm-6">

                                <!-- - - - - - - - - - - - - - Contact Us widget - - - - - - - - - - - - - - - - -->

                                <section class="widget">

                                    <h4>ติดต่อเรา</h4>

                                    <ul class="c_info_list font-16">

                                        <li class="c_info_location">12/6 ถ.เชียงใหม่-ลำพูน ต.วัดเกต <br>อ.เมือง จ.เชียงใหม่ 50000</li>
                                        <li class="c_info_phone">088-154-5990, 052089519</li>
                                        <li class="c_info_mail"><a href="mailto:#">info@ismartwebdesign.com</a></li>
                                        <li class="c_info_schedule">

                                            <ul>
                                                <li>จันทร์-อาทิตย์: 7.00-24.00 น.</li>

                                            </ul>

                                        </li>

                                    </ul>

                                </section><!--/ .widget-->

                                <!-- - - - - - - - - - - - - - End of contact us widget - - - - - - - - - - - - - - - - -->

                            </div>

                        </div><!--/ .row-->

                    </div><!--/ .container-->

                </div><!--/ .footer_section_2-->

                <!-- - - - - - - - - - - - - - End footer section- - - - - - - - - - - - - - - - -->



                <!-- - - - - - - - - - - - - - Footer section - - - - - - - - - - - - - - - - -->

                <div class="footer_section_3 align_center">

                    <div class="container">


                        <nav class="footer_nav">

                            <ul class="bottombar">

                                <li><a href="#" title="หน้าแรก">หน้าแรก</a></li>
                                <li><a href="#" title="ออกแบบเว็บไซต์">ออกแบบเว็บไซต์</a></li>
                                <li><a href="#" title="แพคเกจเว็บไซต์">แพคเกจเว็บไซต์</a></li>

                                <li><a href="#" title="ผลงานที่ผ่านมา">ผลงานที่ผ่านมา</a></li>
                                <li><a href="#" title="ติดต่อเรา">ติดต่อเรา</a></li>

                            </ul>

                        </nav>

                        <!-- - - - - - - - - - - - - - End of footer navigation - - - - - - - - - - - - - - - - -->
                        <p style="font-size: 16px;color:#018bc8;">
                            <b><a href="{{url('about-ismartwebdesign/PrivacyPolicy')}}" title="นโยบายความเป็นส่วนตัว">นโยบายความเป็นส่วนตัว </a><b>
                                    </p>
                                    <p class="copyright" style="font-size: 11px;margin-bottom: 5px;">Copyright &copy; 2015 
                                        <a href="" title="iSmartWebDesign.com ทำเว็บเชียงใหม่ สร้างเว็บไซต์ ออกแบบเว็บ ทำเว็บ เว็บสำเร็จรูปเชียงใหม่ เว็บฟรีเว็บไซต์ฟรี ร้านค้าออนไลน์เชียงใหม่ ขายของออนไลน์ ออกแบบเว็บไซต์เชียงใหม่ เว็บขายของ โปรแกรมร้านค้าเชียงใหม่">
                                            iSmartWebDesign.com ทำเว็บเชียงใหม่ สร้างเว็บไซต์ ออกแบบเว็บ ทำเว็บ เว็บสำเร็จรูปเชียงใหม่ เว็บฟรีเว็บไซต์ฟรี ร้านค้าออนไลน์เชียงใหม่ ขายของออนไลน์ ออกแบบเว็บไซต์เชียงใหม่ เว็บขายของ โปรแกรมร้านค้าเชียงใหม่
                                        </a>
                                    </p>


                                    </div><!--/ .container-->

                                    </div><!--/ .footer_section-->

                                    <!-- - - - - - - - - - - - - - End footer section - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - End Footer - - - - - - - - - - - - - - - - -->
                                    </footer>
                                    </div><!--/ [layout]-->

                                    <!-- - - - - - - - - - - - - - End Main Wrapper - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Social feeds - - - - - - - - - - - - - - - - -->



                                    <!-- - - - - - - - - - - - - - End Social feeds - - - - - - - - - - - - - - - - -->

                                    <!-- Include Libs & Plugins
                                    ============================================ -->
                                  
                                    <script src="{{url('js/queryloader2.min.js')}}"></script>
                                    <script src="{{url('js/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
                                    <script src="{{url('js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
                                    <script src="{{url('js/jquery.appear.js')}}"></script>
                                    <script src="{{url('js/owlcarousel/owl.carousel.min.js')}}"></script>
                                    <script src="{{url('js/royalslider/jquery.easing-1.3.js')}}"></script>
                                    <script src="{{url('js/jquery.countdown.plugin.min.js')}}"></script>
                                    <script src="{{url('js/jquery.countdown.min.js')}}"></script>
                                    <script src="{{url('js/arcticmodal/jquery.arcticmodal.js')}}"></script>
                                    <script src="{{url('twitter/jquery.tweet.min.js')}}"></script>
                                    <script src="{{url('js/colorpicker/colorpicker.js')}}"></script>
                                    <script src="{{url('js/retina.min.js')}}"></script>
                                    <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js"></script>

                                    <script src="{{url('js/layerslider/js/greensock.js')}}"></script>
                                    <script src="{{url('js/layerslider/js/layerslider.transitions.js')}}"></script>
                                    <script src="{{url('js/layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>

                                    <!-- Theme files
                                    ============================================ -->
                                    <script src="{{url('js/theme.plugins.js')}}"></script>
                                    <script src="{{url('js/theme.core.js')}}"></script>

                                    <script type="text/javascript">
            $('.fancybox').fancybox({
                scrolling: 'auto',
                preload: true,
                width: '100%',
                height: '100%',
            });

            $(document).ready(function () {
                $(".tabs_nav > li").removeClass('active');
                $('.number').counterUp({
                    delay: 10,
                    time: 1000
                });

            });



                                    </script>
                                    <style>

                                        footer{
                                            width: 100%;
                                            background: url(<?= url('images/bg/bg_footer.jpg') ?>) no-repeat center top #000;
                                            padding-top: 15px;
                                        }

                                    </style>


                                    </body>
                                    </html>