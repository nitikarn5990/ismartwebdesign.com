@extends('layouts.master')

@section('content')
<div class="page_wrapper">

    <div class="container">

        <div class="section_offset">

            <div class="row">
                @include('layouts.inc.aside')
                <div class="col-md-9">

                    <article>
                        <h4 class="who header-service">ismartwebdesign.com เหมาะกับใคร</h4>
                        <div class="col-md-12 policy-content">
                            <p style="margin-bottom: 10px;">ทางเราให้ความสำคัญแก่ข้อมูลส่วนตัวของลูกค้า เราจึงมีนโยบายความเป็นส่วนตัวเพื่อป้องกันความปลอดภัยของข้อมูลส่วนตัวลูกค้า</p>
                            <section>
                                <h5><strong>การเก็บข้อมูลและการใช้ข้อมูลส่วนบุคคล</strong></h5>
                                <p style="font-size: 14px;margin-bottom: 0px;">• &nbsp;&nbsp;&nbsp;   การเก็บข้อมูลของท่าน เช่น ชื่อ, ที่อยู่, อีเมล์, ภาพ, เบอร์โทร เป็นต้น เพื่อใช้เป็นข้อมูลในการทำสถิติทางการตลาด</P>
                                <p style="font-size: 14px;margin-bottom: 10px;">•&nbsp; &nbsp; &nbsp;  เพื่อใช้แจ้งข่าวสาร / ประชาสัมพันธ์ เกี่ยวสินค้าและบริการใหม่ ของทางเรา</p>

                            </section>
                            <section>
                                <h5><strong>การเปิดเผยข้อมูลส่วนบุคคล</strong></h5>
                                <p style="font-size: 14px;margin-bottom: 0px;margin-bottom: 10px;">• &nbsp;&nbsp;&nbsp;    ทางเราจะไม่เปิดเผยข้อมูลส่วนบุคคลใดๆหากไม่ได้รับความยินยอม </P>
                            </section>
                            <section>
                                <h5><strong>การรักษาข้อมูล</strong></h5>
                                <p style="font-size: 14px;margin-bottom: 0px;margin-bottom: 10px;">• &nbsp;&nbsp;&nbsp;   ทางเราให้ความสำคัญของข้อมูลลูกค้ามาก จึงได้มีระบบป้องกันการเข้าถึงข้อมูลโดยไม่ได้รับอนุญาตจากบุคคลภายนอก</P>
                            </section>
                            </section>
                            <section>
                                <h5><strong>การเปลี่ยนแปลงนโยบายความเป็นส่วนตัว</strong></h5>
                                <p style="font-size: 14px;margin-bottom: 0px;margin-bottom: 10px;">• &nbsp;&nbsp;&nbsp;   ทางเราอาจทำการปรับปรุงหรือแก้ไขนโยบายความเป็นส่วนตัว โดยไม่ได้แจ้งให้คุณทราบล่วงหน้า ทั้งนี้ เพื่อความเหมาะสมและมีประสิทธิภาพในการให้บริการ </P>
                            </section>
                        </div>
                    </article>
                </div>

            </div><!--/ .row-->

        </div><!--/ .section_offset-->
    </div><!--/ .container-->

</div><!--/ .page_wrapper-->
<style>
    .policy-content{
        padding-top: 20px;
        padding-bottom: 20px;
        background-color: #fff;
        -webkit-box-shadow: 0px 0px 14px -2px rgba(0,0,0,0.24);
        -moz-box-shadow: 0px 0px 14px -2px rgba(0,0,0,0.24);
        box-shadow: 0px 0px 14px -2px rgba(0,0,0,0.24);

    }
    .who{
        background-image: url('../images/bg/who.png');
        background-repeat: no-repeat;
        height: 40px;
        text-indent: -9999px;
    }
</style>
@stop

