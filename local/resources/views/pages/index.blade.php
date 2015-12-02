@extends('layouts.master')

@section('content')

<div class="page_wrapper">

    <div class="container">

        <div class="section_offset hidden">

            <div class="row">

                <div class="col-md-3 col-sm-6">

                    <section class="infoblock type_2 animated transparent" data-animation="fadeInDown">

                        <i class="icon-thumbs-up-1 hidden"></i>
                        <img src="{{url('images/banner/shop-online.png')}}" alt="เปิดร้านค้าออนไลน์" style="margin-bottom: 5px;">
                        <h4 class="caption"><strong>รับทำร้านค้าออนไลน์</strong></h4>
                        <ul class="detail-packet-seo">
                            <li><i class="fa fa-check"></i> บริการลงข้อมูล <span style="color: red;">ฟรี!</span></li>
                            <li><i class="fa fa-check"></i> ไม่จำกัดจำนวนสินค้า+แต่งภาพให้ <span style="color: red;">ฟรี!</span></li>
                            <li><i class="fa fa-check"></i> รองรับ Seo มั่นใจติดอันดับ Google</li>
                            <li><i class="fa fa-check"></i> โดดเด่นด้วยการออกแบบที่ไม่ซ้ำใคร</li>
                            <li><i class="fa fa-check"></i> หลายช่องทางการรับชำระเงิน</li>
                            <li><i class="fa fa-check"></i> ลงสินค้าได้เองตามความต้องการ</li>
                        </ul>
                        <a href="#" class="button_dark_grey middle_btn">ดูรายละเอียด</a>

                    </section><!--/ .infoblock.type_2-->

                </div><!--/ [col]-->
                <div class="col-md-3 col-sm-6">

                    <section class="infoblock type_2 animated transparent" data-animation="fadeInDown">

                        <i class="icon-thumbs-up-1 hidden"></i>
                        <img src="{{url('images/banner/company.jpg')}}" alt="รับทำเว็บไซต์บริษัท" style="margin-bottom: 5px;">
                        <h4 class="caption"><strong>รับทำเว็บไซต์บริษัท</strong></h4>
                        <ul class="detail-packet-seo">
                            <li><i class="fa fa-check"></i> เพิ่มความมั่นใจให้ลูกค้า</li>
                            <li><i class="fa fa-check"></i> สร้างยอดขายในธุรกิจ</li>
                            <li><i class="fa fa-check"></i> เพิ่มความรู้จักให้มากขึ้น</li>
                            <li><i class="fa fa-check"></i> รองรับ Seo มั่นใจติดอันดับ Google</li>
                            <li><i class="fa fa-check"></i> ออกแบบเรียบหรู แบบมีระดับ</li>
                            <li><i class="fa fa-check"></i> เพิ่มข้อมูลได้เองตามความต้องการ</li>
                        </ul>
                        <a href="#" class="button_dark_grey middle_btn">ดูรายละเอียด</a>

                    </section><!--/ .infoblock.type_2-->

                </div><!--/ [col]-->

                <div class="col-md-3 col-sm-6">

                    <section class="infoblock type_2 animated transparent" data-animation="fadeInDown" data-animation-delay="150">

                        <i class="icon-paper-plane hidden"></i>
                        <img src="{{url('images/banner/seo.jpg')}}" style="margin-bottom: 5px;" alt="รับทำ seo เชียงใหม่,ราคาไม่แพง,ราคาถูก">
                        <h4 class="caption"><b>รับทำ SEO เพื่อสร้างยอดขาย</b></h4>

                        <ul class="detail-packet-seo">
                            <li><i class="fa fa-check"></i> SEO เริ่มต้นเพียง 2,500 บาท/คีย์เวิร์ด</li>
                            <li><i class="fa fa-check"></i> วิเคราะห์คู่แข่ง + รายงานผล <span style="color: red;">ฟรี!</span></li>
                            <li><i class="fa fa-check"></i> ดูแลบริการลูกค้า SEO อย่างต่อเนื่อง</li>

                        </ul>

                        <a href="#" class="button_dark_grey middle_btn">ดูรายละเอียด</a>

                    </section><!--/ .infoblock.type_2-->

                </div><!--/ [col]-->
                <div class="col-md-3 col-sm-6">

                    <section class="infoblock type_2 animated transparent" data-animation="fadeInDown" data-animation-delay="150">

                        <i class="icon-paper-plane hidden"></i>
                        <img src="{{url('images/banner/responsive.jpg')}}" style="margin-bottom: 5px;" alt="รับทำเว็บไซต์ responsive 100%">
                        <h4 class="caption"><b>Responsive <br>แสดงผลทุกขนาดหน้าจอ</b></h4>

                        <ul class="detail-packet-seo">
                            <li><i class="fa fa-check"></i> ง่ายต่อการใช้งานในทุกขนาดจอ</li>
                            <li><i class="fa fa-check"></i> เพิ่มประสิทธิภาพในการใช้งาน</li>
                            <li><i class="fa fa-check"></i> มองเห็นพอดีกับสายตา</li>

                        </ul>

                        <a href="#" class="button_dark_grey middle_btn">ดูรายละเอียด</a>

                    </section><!--/ .infoblock.type_2-->

                </div><!--/ [col]-->

            </div><!--/ .row-->

        </div><!--/ .section_offset-->

        <section class="">
            <div class="row">
                <div class="col-md-3 text-center"><a href=""><img src="{{url('images/banner/why_ismartweb.jpg')}}" alt="ismart web logo" title="why_ismartweb.jpg" style="margin-top: 0px;"></a></div>
                <div class="col-md-3 text-center"><a href=""><img src="{{url('images/banner/faq.jpg')}}" alt="คำถามที่พบบ่อย" title="faq.jpg" style="margin-top: 0px;"></a></div>
                <div class="col-md-3 text-center">333</div>
                <div class="col-md-3 text-center">44</div>

            </div>
        </section>
        <div class="clearboth"></div>
        <div class="section_offset ">
            <div class="row other-srvices">

                <div class="col-md-12 live-more">

                    <div class="title" style="font-size: 38px;"><h2>บริการของเรา</h2></div>

                </div>
                <div class="col-md-3 service-item wow fadeInUp animated" data-wow-offset="50" data-wow-delay=".6s" style="visibility: visible;-webkit-animation-delay: .6s; -moz-animation-delay: .6s; animation-delay: .6s;">
                    <a href="" title="Web Designing" class="service-icons web-design">Web Designing</a>
                    <h4><a href="" title="Web Designing" itemprop="serviceType">Web Designing</a></h4>
                    <h4><a href="" title="ออกแบบเว็บไซต์สวยงาม" itemprop="serviceType">ออกแบบเว็บไซต์สวยงาม</a></h4>
                    <p>ด้วยการ<strong>ออกแบบอย่างมืออาชีพ</strong> มีความโดดเด่นและมี<strong>เอกลักษณ์</strong>เฉพาะตัว</p>
                    <a href="" title="Web Designing" class="know-more">รายละเอียด</a>
                </div>
                <div class="col-md-3 service-item wow fadeInUp animated" data-wow-offset="50" data-wow-delay=".8s" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s;">
                    <a href="" title="Web Development" class="service-icons web-development">Web Development</a>
                    <h4><a href="" title="Web Development" itemprop="serviceType">Web Development</a></h4>
                    <h4><a href="" title="รับพัฒนาเว็บไซต์" itemprop="serviceType">รับพัฒนาเว็บไซต์</a></h4>
                    <p> เรามีทีม<strong>พัฒนาระบบ</strong>ที่เต็มด้วย<strong>ประสบการณ์</strong>และเข้าใจการทำงานของเว็บอย่างดีเยี่ยม </p>
                    <a href="" title="Web Development" class="know-more">รายละเอียด</a>
                </div>

                <div class="col-md-3 service-item wow fadeInUp animated" data-wow-offset="50" data-wow-delay=".8s" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s;">
                    <a href="" title="Web Applications" class="service-icons web-application">Web Applications</a>
                    <h4><a href="" title="Web Applications" itemprop="serviceType">Web Applications</a></h4>
                    <h4><a href="" title="รับทำเว็บไซต์ตามความต้องการ" itemprop="serviceType">รับทำเว็บไซต์ตามความต้องการ</a></h4>
                    <p>วิสัยทัศน์ของเราคือสร้าง <strong><a href="" title="Web Applications" itemprop="serviceType">Web Applications</a></strong> ที่มีคุณภาพและ<strong>ใช้งานง่าย</strong>เพื่อเพิ่มความเป็นมืออาชีพให้กับ<strong>ธุรกิจ</strong>ของคุณ</p>
                    <a href="" title="Web Applications" class="know-more">รายละเอียด</a>
                </div>


                <div class="col-md-3 service-item wow fadeInUp animated" data-wow-offset="50" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s;">
                    <a href="" title="Search Engine Optimization" class="service-icons seo">Search Engine Optimization</a>
                    <h4><a href="" title="SEO" itemprop="serviceType">SEO</a></h4>
                    <h4><a href="" title="รับทำ SEO" itemprop="serviceType">รับทำ SEO</a></h4>
                    <p>หัวใจสำคัญของการสร้างเว็บคือการที่มีผู้คนเข้ามาชมเว็บ เราพร้อมจะ<strong>เพิ่ม Traffic </strong> ให้เว็บของคุณเพื่อธุรกิจที่เติบโต</p>
                    <a href="" title="Search Engine Optimization" class="know-more">รายละเอียด</a>
                </div>


            </div>
        </div>


        <section class="section_offset animated transparent" data-animation="fadeInDown"> 
            <div class="col-md-12 live-more">

                <div class="title">
                                <h2>ตัวอย่างธีม</h2>
        
                </div>

            </div>
            <div class="tabs type_2 products">

                <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

                <ul class="tabs_nav clearfix">

                    <li><a href="#tab-1">ธีมร้านค้าออนไลน์</a></li>
                    <li><a href="#tab-2">ธีมบริษัท</a></li>
                    <li><a href="#tab-3">ธีมธุรกิจ</a></li>
                    <li><a href="#tab-4">ธีมการศึกษา</a></li>
                    <li><a href="#tab-5">ธีมความบันเทิง</a></li>
                    <li><a href="#tab-6">ธีมวิทยาศาสตร์</a></li>
                </ul>

                <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

                <div class="tab_containers_wrap">

                    <div id="tab-1" class="tab_container">

                        <!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel carousel_in_tabs type_2">


                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="ธีมร้านขายเสื้อผ้า" itemprop="image" src="{{url('images/theme/shop_2.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://demo.jawtemplates.com/goodstore/goodstore03/homepage-3-variation-3/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">

                                    <h3 class="font-16">
                                        <b>ร้านขายเสื้อแฟชั่น</b>
                                    </h3>



                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="ธีมร้านขายเสื้อผ้า" itemprop="image" src="{{url('images/theme/shop_3.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://preview.yithemes.com/bazar/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">

                                    <h3 class="font-16"><b>ร้านขายเสื้อผ้าและอื่นๆ </b></h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="ร้านขายของทางการเกษตร" itemprop="image" src="{{url('images/theme/shop_5.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://seed.beautheme.com/farm/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>ร้านขายของทางการเกษตร</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="" itemprop="image" src="{{url('images/theme/shop_6.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://wp.smartaddons.com/themes/sw_maxshop/?page_id=4440&header_style=style3">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>ร้านขายโทรศัพท์หรืออุปกรณ์อิเล็คโทรนิคส์</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="ร้านขายหนังสือ" itemprop="image" src="{{url('images/theme/shop_7.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://demo.crunchpress.com/book-store/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>ร้านขายหนังสือ</b>
                                    </h3>
                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </div><!--/ .owl_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->

                    </div><!--/ #tab-1-->

                    <div id="tab-2" class="tab_container">

                        <!-- - - - - - - - - - - - - - Carousel of beauty products - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel carousel_in_tabs type_2">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์บริษัท" itemprop="image" src="{{url('images/theme/shop_8.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://lawyer.ancorathemes.com/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์บริษัท เรียบหรูมีสไตล์</b>
                                    </h3>
                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์บริษัทขนส่ง" itemprop="image" src="{{url('images/theme/shop_9.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://lawyer.ancorathemes.com/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์บริษัทขนส่ง</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์บริษัทเอกชน" itemprop="image" src="{{url('images/theme/shop_10.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://wordpress.thebebel.com/demo/8w/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">

                                    <h3 class="font-16">
                                        <b>เว็บไซต์บริษัทเอกชน</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์บริษัทเอกชน แบบทันสมัย" itemprop="image" src="{{url('images/theme/shop_11.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://wp-demo.indonez.com/?theme=Enix">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">

                                    <h3 class="font-16">
                                        <b>เว็บไซต์บริษัทเอกชน แบบทันสมัย</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์บริษัทจำหน่วยรถ" itemprop="image" src="{{url('images/theme/shop_12.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://autodealer.winterjuice.com/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์บริษัทจำหน่วยรถ</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </div><!--/ .owl_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of beauty products - - - - - - - - - - - - - - - - -->

                    </div><!--/ #tab-2-->

                    <div id="tab-3" class="tab_container">

                        <!-- - - - - - - - - - - - - - Carousel of personal care - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel carousel_in_tabs type_2">

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์ด้านความงาม" itemprop="image" src="{{url('images/theme/shop_13.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/prestashop_55005/index.php">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์ด้านความงาม</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์รับตกแต่งภายใน" itemprop="image" src="{{url('images/theme/shop_14.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/magento_53395/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์รับตกแต่งภายใน</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์จำหน่ายซอฟแวร์" itemprop="image" src="{{url('images/theme/shop_15.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/magento_53175">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์จำหน่ายซอฟแวร์</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์ติดตั้งกล้องวงจรปิด" itemprop="image" src="{{url('images/theme/shop_16.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/opencart_55040">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์ติดตั้งกล้องวงจรปิด</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์ให้บริการท่องเที่ยว" itemprop="image" src="{{url('images/theme/shop_17.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/opencart_54745">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์ให้บริการท่องเที่ยว</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </div><!--/ .owl_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of personal care - - - - - - - - - - - - - - - - -->

                    </div><!--/ #tab-3-->

                    <div id="tab-4" class="tab_container">

                        <!-- - - - - - - - - - - - - - Carousel of vitamins & supplements - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel carousel_in_tabs type_2">

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์การศึกษา" itemprop="image" src="{{url('images/theme/shop_18.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/drupal_53894/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์การศึกษา</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์การศึกษาเด็ก" itemprop="image" src="{{url('images/theme/shop_19.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/wt_53289/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์การศึกษาเด็ก</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์โรงเรียนกวดวิชา" itemprop="image" src="{{url('images/theme/shop_20.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://templates.cms-guide.com/51944">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์โรงเรียนกวดวิชา</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์โรงเรียนสอนดนตรี" itemprop="image" src="{{url('images/theme/shop_21.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://templates.cms-guide.com/50557/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์โรงเรียนสอนดนตรี</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                        </div><!--/ .owl_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of vitamins & supplements - - - - - - - - - - - - - - - - -->

                    </div><!--/ #tab-4-->

                    <div id="tab-5" class="tab_container">

                        <!-- - - - - - - - - - - - - - Carousel of baby needs products - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel carousel_in_tabs type_2">

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์ภาพยนตร์" itemprop="image" src="{{url('images/theme/shop_22.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/wordpress_52460/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์ภาพยนตร์</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์ดูหนังออนไลน์" itemprop="image" src="{{url('images/theme/shop_23.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/wordpress_44742">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์ดูหนังออนไลน์</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์เกมส์ออนไลน์" itemprop="image" src="{{url('images/theme/shop_24.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/woocommerce_54977">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์เกมส์ออนไลน์</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์ขายแผ่นหนัง" itemprop="image" src="{{url('images/theme/shop_25.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/prestashop_38504">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์ขายแผ่นหนัง</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </div><!--/ .owl_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of baby needs products - - - - - - - - - - - - - - - - -->

                    </div><!--/ #tab-5-->

                    <div id="tab-6" class="tab_container">

                        <!-- - - - - - - - - - - - - - Carousel of diet & fitness products - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel carousel_in_tabs type_2">

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์วิทยาศาสตร์" itemprop="image" src="{{url('images/theme/shop_26.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://templates.cms-guide.com/53508">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์วิทยาศาสตร์</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์สินค้าสมุนไพร" itemprop="image" src="{{url('images/theme/shop_27.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/prestashop_54592/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์สินค้าสมุนไพร</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์ผลผลิตทางการเกษตร" itemprop="image" src="{{url('images/theme/shop_28.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/joomla_50489/">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์ผลผลิตทางการเกษตร</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์ขายแผ่นหนัง" itemprop="image" src="{{url('images/theme/shop_25.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/prestashop_38504">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์ขายแผ่นหนัง</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img alt="เว็บไซต์ขายแผ่นหนัง" itemprop="image" src="{{url('images/theme/shop_25.png')}}">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a class="fancybox fancybox.iframe button_dark_grey middle_btn quick_view" href="http://livedemo00.template-help.com/prestashop_38504">ดูตัวอย่าง</a>

                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="label_offer percentage hidden">

                                    <div></div>

                                </div>

                                <div class="description">
                                    <h3 class="font-16">
                                        <b>เว็บไซต์ขายแผ่นหนัง</b>
                                    </h3>

                                    <div class="clearfix product_info">

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </div><!--/ .owl_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of diet & fitness products - - - - - - - - - - - - - - - - -->

                    </div><!--/ #tab-6-->

                    <div id="tab-7" class="tab_container">

                        <!-- - - - - - - - - - - - - - Carousel of sexual well-being - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel carousel_in_tabs type_2">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/tabs_img_2.jpg')}}" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>30%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Tellus Dolor Dapibus Eget 24 fl oz</a></p>

                                    <div class="clearfix product_info">

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                        <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/deals_img_2.jpg')}}" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>25%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Ut Tellus Dolor Dapibus Eg, Size 4 Diapers 29 ea</a></p>

                                    <div class="clearfix product_info">

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                        <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/tabs_img_3.jpg')}}" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>40%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="6" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Nemo Enim Ipsam Voluptaem Quia Lorem, 1000mg, Tablets, 120 ea</a></p>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/deals_img_4.jpg')}}" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>15%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Nam Elit Agna Enrerit Sit Amet Dolor Ipsum Amet, Deep Cleansing 1 each</a></p>

                                    <div class="clearfix product_info">

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                        <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/deals_img_5.jpg')}}" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>50%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="3" data-day="16" data-hours="11" data-minutes="10" data-seconds="10"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing ea</a></p>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </div><!--/ .owl_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of sexual well-being  - - - - - - - - - - - - - - - - -->

                    </div><!--/ #tab-7-->

                </div>

                <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

            </div>

        </section><!--/ .section_offset-->
        <section class="section_offset animated transparent" data-animation="fadeInDown"> 

            <div class="col-md-12 live-more">

                <div class="title" style="max-width: 300px;">
                    ผลงานส่วนหนึ่ง
                </div>

            </div>

            <div class="tabs type_2 products">

                <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

                <ul class="tabs_nav clearfix">
                    <li><a href="#tab-2" title="ระบบหลังร้าน">มีระบบหลังร้าน สามารถลงข้อมูลได้ด้วยตัวเอง</a></li>
                </ul>

                <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

                <div class="tab_containers_wrap">

                    <div id="tab-2" class="tab_container">

                        <!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel carousel_in_tabs type_2">


                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/portfolio/port_1.png')}}" alt="รับทำเว็บเชียงใหม่ ร้านค้าออนไลน์ ร้านขายของ">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">



                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="description">

                                    <h5 class="font-16"><b>เว็บขายอาหารเสริมคอลลาเจนและกาแฟลดน้ำหนัก</b></h5>
                                    <p><a href="http://online.nanobeautydrink.com/" target="_blank" rel="nofollow">online.nanobeautydrink.com</a></p>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/portfolio/port_5.png')}}" alt="รับทำเว็บเชียงใหม่ ร้านค้าออนไลน์ ร้านขายของ">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">



                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="description">

                                    <h5 class="font-16"><b>เว็บตัวแทนเมืองไทยประกันชีวิต</b></h5>
                                    <p><a href="http://www.muangthaigood.com/" title="เมืองไทยประกันชีวิต เชียงใหม่" target="_blank">muangthaigood.com</a></p>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/portfolio/port_7.png')}}" alt="รับทำเว็บเชียงใหม่ ร้านค้าออนไลน์ ร้านขายของ เว็บหน่วยงานภาครัฐ เว็บหน่วยงานภาคเอกชน ">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">
                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="description">

                                    <h5 class="font-16"><b>เว็บขายผ้าม่านเชียงใหม่</b></h5>
                                    <p><a href="http://www.xn--72cf8blzdf7evcb9a5jubxdkc.net/" target="_blank" rel="nofollow">ผ้าม่านเชียงใหม่.net</a></p>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/portfolio/port_11.png')}}" alt="รับทำเว็บเชียงใหม่ ร้านค้าออนไลน์ ร้านขายของ">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">



                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="description">

                                    <h5 class="font-16"><b>เว็บหน่วยงานภาครัฐ จ.สมุทรปราการ</b></h5>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/portfolio/port_8.png')}}" alt="รับทำเว็บเชียงใหม่ ร้านค้าออนไลน์ ร้านขายของ เว็บหน่วยงานภาครัฐ เว็บหน่วยงานภาคเอกชน ">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">
                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="description">

                                    <h5 class="font-16"><b>เว็บระบบจองห้องพัก</b></h5>
                                    <p><a href="http://www.sleepguesthouse.com/" target="_blank" rel="nofollow">sleepguesthouse.com</a></p>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->  
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/portfolio/port_6.png')}}" alt="รับทำเว็บเชียงใหม่ ร้านค้าออนไลน์ ร้านขายของ เว็บหน่วยงานภาครัฐ เว็บหน่วยงานภาคเอกชน ">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">



                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="description">

                                    <h5 class="font-16"><b>เว็บองค์การบริหารส่วนตำบลเมืองแปง จ.แม่ฮ่องสอน </b></h5>
                                    <p><a href="http://muangpang.go.th/" target="_blank" rel="nofollow">muangpang.go.th</a></p>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/portfolio/port_2.png')}}" alt="รับทำเว็บเชียงใหม่ ร้านค้าออนไลน์ ร้านขายของ เว็บหน่วยงานภาครัฐ เว็บหน่วยงานภาคเอกชน ">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">
                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="description">

                                    <h5 class="font-16"><b>เว็บสอนทำอาหาร เชียงใหม่</b></h5>
                                    <p><a href="http://changcookingcm.com/" target="_blank" rel="nofollow">changcookingcm.com</a></p>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->


                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/portfolio/port_4.png')}}" alt="รับทำเว็บเชียงใหม่ ร้านค้าออนไลน์ ร้านขายของ เว็บหน่วยงานภาครัฐ เว็บหน่วยงานภาคเอกชน ">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">
                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="description">

                                    <h5 class="font-16"><b>เว็บรับเหมาก่อสร้าง</b></h5>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/portfolio/port_9.png')}}" alt="รับทำเว็บเชียงใหม่ ร้านค้าออนไลน์ ร้านขายของ เว็บหน่วยงานภาครัฐ เว็บหน่วยงานภาคเอกชน ">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">
                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="description">

                                    <h5 class="font-16"><b>ระบบส่งเอกสาร ในหน่วยงาน</b></h5>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{url('images/portfolio/port_10.png')}}" alt="รับทำเว็บเชียงใหม่ ร้านค้าออนไลน์ ร้านขายของ เว็บหน่วยงานภาครัฐ เว็บหน่วยงานภาคเอกชน ">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">
                                        </div><!--/ .centered_buttons -->


                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <div class="description">

                                    <h5 class="font-16"><b>เว็บบ้านตานงศ์รีสอร์ท เชียงใหม่</b></h5>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->
                        </div><!--/ .owl_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->

                    </div><!--/ #tab-1-->


                </div>

                <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

            </div>

        </section><!--/ .section_offset-->

        <div class="section_offset portfolio">
            <div class="row other-srvices">

                <div class="col-md-12 live-more">

                    <div class="title" style="font-size: 38px;max-width: 300px;"><h2>ผลงานจัดทำเว็บไซต์ล่าสุด!</h2></div>

                </div>
                <div class="col-md-4 service-item wow fadeInUp animated" data-wow-offset="50" data-wow-delay=".6s" style="visibility: visible;-webkit-animation-delay: .6s; -moz-animation-delay: .6s; animation-delay: .6s;">
                    <a href="" title="ร้านค้าเสื้อผ้าแฟชั่น" class=""><img src="{{url('images/portfolio/e-commerce-1.jpg')}}" alt="ร้านค้าเสื้อผ้าแฟชั่น"  style="margin-bottom: 15px;"></a>
                    <h4>E-COMMERCE</h4>
                    <h4>เว็บไซต์ขายสินค้า มีระบบตระกร้าสินค้า</h4>
                    <p><strong>ร้านค้าขายอาหารเสริม กาแฟลดน้ำหนัก คอลลาเจน</strong></p>
       
                </div>
                <div class="col-md-4 service-item wow fadeInUp animated" data-wow-offset="50" data-wow-delay=".6s" style="visibility: visible;-webkit-animation-delay: .6s; -moz-animation-delay: .6s; animation-delay: .6s;">
                    <a href="" title="เว็บไซต์รีสอร์ท โฮมสเตย์ ห้องพักรายวันต่างอากาศ" class=""><img src="{{url('images/portfolio/e-commerce-2.jpg')}}" title="e-commerce-2" alt="เว็บไซต์รีสอร์ท โฮมสเตย์ ห้องพักรายวันต่างอากาศ"  style="margin-bottom: 15px;"></a>
                    <h4>CORPORATE WEBSITE</h4>
                    <h4>เว็บไซต์ธุรกิจ</h4>
                    <p><strong>เว็บไซต์รีสอร์ท โฮมสเตย์ ห้องพักรายวันต่างอากาศ</strong></p>
                
                </div>

                 <div class="col-md-4 service-item wow fadeInUp animated" data-wow-offset="50" data-wow-delay=".6s" style="visibility: visible;-webkit-animation-delay: .6s; -moz-animation-delay: .6s; animation-delay: .6s;">
                    <a href="" title="เว็บไซต์ร้านอาหาร" class=""><img src="{{url('images/portfolio/e-commerce-3.jpg')}}" title="e-commerce-2" alt="เว็บไซต์ร้านอาหาร"  style="margin-bottom: 15px;"></a>
                    <h4>CORPORATE WEBSITE</h4>
                    <h4>เว็บไซต์ร้านอาหาร</h4>
                    <p><strong>เว็บไซต์ร้านอาหาร สอนทำอาหาร</strong></p>
                
                </div>
                <div class="clearboth"></div>
                <div class="col-md-12 text-center">
                    <a href="" title="Web Applications" class="btn btn-default">ผลงานทั้งหมด</a>
                </div>


            </div>
        </div>

        @include('layouts.inc.service')

        <!-- - - - - - - - - - - - - - End of taday's deals - - - - - - - - - - - - - - - - -->


        <!-- - - - - - - - - - - - - - End of bestsellers - - - - - - - - - - - - - - - - -->

    </div><!--/ .container-->

</div><!--/ .page_wrapper-->


@stop

