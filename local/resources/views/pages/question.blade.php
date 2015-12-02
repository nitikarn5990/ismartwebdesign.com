@extends('layouts.master')

@section('content')
<div class="page_wrapper">

    <div class="container">

        <div class="section_offset">

            <div class="row">

                @include('layouts.inc.aside')
                <div class="col-md-9">
               
                        <h4 class="question header-service-sub">คำถามที่พบบ่อย</h4>
                     
                        <div class="col-md-12 question-content">
                                
                                 <div style="text-align: center;"> 
                                     <img src="{{url('images/banner/head_q.jpg')}}" style="max-width: 100%;">
                                 </div>
                            <div class="clear"></div>
                                <div class="ismart-Q">
                                    <div class="numberCircle">01</div>
                                    <div class="ismart-L">
                                        <div class="ismart-title">เว็บสำเร็จรูป  คืออะไร?</div>
                                    </div>
                                </div>
                                <div class="ismart-A">
                                    <img src="http://localhost/ismartweb/images/bg/cc.png" class="ismart-img">
                                    <div class="ismart-R">
                                        <div class="ismart-answer" style="float: right;"><span style="font-style: italic;text-decoration: underline;font-weight: bold;">ตอบ</span>  ไม่ยากเลยครับ ขอเพียงแค่เคยใช้อินเทอร์เน็ต ส่งอีเมลเป็น สามารถใช้คอมพิวเตอร์เบื้องต้นได้ เช่น Microsoft word ,Excel ก็สามารถใช้ได้ครับ ไม่ต้องรู้เรื่อง โปรแกรม, html ไม่ต้องรู้เรื่องทางเทคนิคต่างๆ เพราะเรามีแบบฟอร์มออนไลน์ที่ใช้ใส่ข้อมูลและรูปภาพ เข้าในเว็บของคุณได้อย่างง่ายดาย ลักษณะการใช้งานจะคล้ายการส่ง อีเมล ปัจจุบันเรามีสมาชิกหลายท่านที่ไม่ได้มีความรู้ในการสร้างเว็บใดๆ มาก่อน แต่สามารถทำเว็บไซต์ให้ประสบความสำเร็จได้</div>
                                    </div>
                                </div>  
                                <div class="clear"></div>
                                 <div class="ismart-Q">
                                    <div class="numberCircle">01</div>
                                    <div class="ismart-L">
                                        <div class="ismart-title">เว็บสำเร็จรูป  คืออะไร?</div>
                                    </div>
                                </div>
                                <div class="ismart-A">
                                    <img src="http://localhost/ismartweb/images/bg/cc.png" class="ismart-img">
                                    <div class="ismart-R">
                                        <div class="ismart-answer" style="float: right;"><span style="font-style: italic;text-decoration: underline;font-weight: bold;">ตอบ</span>  ไม่ยากเลยครับ ขอเพียงแค่เคยใช้อินเทอร์เน็ต ส่งอีเมลเป็น สามารถใช้คอมพิวเตอร์เบื้องต้นได้ เช่น Microsoft word ,Excel ก็สามารถใช้ได้ครับ ไม่ต้องรู้เรื่อง โปรแกรม, html ไม่ต้องรู้เรื่องทางเทคนิคต่างๆ เพราะเรามีแบบฟอร์มออนไลน์ที่ใช้ใส่ข้อมูลและรูปภาพ เข้าในเว็บของคุณได้อย่างง่ายดาย ลักษณะการใช้งานจะคล้ายการส่ง อีเมล ปัจจุบันเรามีสมาชิกหลายท่านที่ไม่ได้มีความรู้ในการสร้างเว็บใดๆ มาก่อน แต่สามารถทำเว็บไซต์ให้ประสบความสำเร็จได้</div>
                                    </div>
                                </div>  
                                <div class="clear"></div>
                                 <div class="ismart-Q">
                                    <div class="numberCircle">01</div>
                                    <div class="ismart-L">
                                        <div class="ismart-title">เว็บสำเร็จรูป ReadyPlanet คืออะไร?</div>
                                    </div>
                                </div>
                                <div class="ismart-A">
                                    <img src="http://localhost/ismartweb/images/bg/cc.png" class="ismart-img">
                                    <div class="ismart-R">
                                        <div class="ismart-answer" style="float: right;"><span style="font-style: italic;text-decoration: underline;font-weight: bold;">ตอบ</span>  ไม่ยากเลยครับ ขอเพียงแค่เคยใช้อินเทอร์เน็ต ส่งอีเมลเป็น สามารถใช้คอมพิวเตอร์เบื้องต้นได้ เช่น Microsoft word ,Excel ก็สามารถใช้ได้ครับ ไม่ต้องรู้เรื่อง โปรแกรม, html ไม่ต้องรู้เรื่องทางเทคนิคต่างๆ เพราะเรามีแบบฟอร์มออนไลน์ที่ใช้ใส่ข้อมูลและรูปภาพ เข้าในเว็บของคุณได้อย่างง่ายดาย ลักษณะการใช้งานจะคล้ายการส่ง อีเมล ปัจจุบันเรามีสมาชิกหลายท่านที่ไม่ได้มีความรู้ในการสร้างเว็บใดๆ มาก่อน แต่สามารถทำเว็บไซต์ให้ประสบความสำเร็จได้</div>
                                    </div>
                                </div>  
                                <div class="clear"></div>
                                 <a href="{{URL::previous()}}" class="btn-back"><< กลับก่อนหน้า</a>
                        </div>
                        <div class="col-md-12"></div>
                     
                </div>
              

            </div><!--/ .row-->

        </div><!--/ .section_offset-->
    </div><!--/ .container-->

</div><!--/ .page_wrapper-->
<style>
    .question-content{
        padding-top: 20px;
        padding-bottom: 20px;
        background-color: #fff;
        -webkit-box-shadow:  0px 0px 14px -2px rgba(151, 151, 151, 0.24);
        -moz-box-shadow:  0px 0px 14px -2px rgba(151, 151, 151, 0.24);
        box-shadow: 0px 0px 14px -2px rgba(151, 151, 151, 0.24);
        border: 1px solid #D6D6D6;
    }
    .question{
        background-image: url('../images/bg/head_question.png');
        background-repeat: no-repeat;
        height: 50px;
        text-indent: -9999px;

    }

    .header
    {
        font-size:26px;
        margin:0 auto;
        text-align:center;
        color:#9F6905;
        font-weight:lighter;
        background-color:#f0f0f0;
        height:50px;
        line-height:50px;
        border-bottom:1px solid #9F6905;
        background-image: url('../images/bg/head_question.png');
        background-repeat: no-repeat;
        height: 40px;
        text-indent: -9999px;

    }

    .Area
    {
        margin:0 auto;
        width:90%;
        background-color:rgba(240, 240, 240, 0.2);
        display:table;
        padding:5px;
        border-radius:5px;
        margin-bottom:10px;
    }
    .L
    {
        float:left;
    }
    .Area img
    {
        width:100px;
        height:100px;
        border-radius:50%;
        border:2px solid #f0f0ff;
        padding:5px;    
    }

    .R
    {
        float:right;
    }
    .text
    {
        color: #a4a4a4;
        font-family: tahoma;
        font-size: 14px;
        font-weight:lighter;
        line-height: 30px;
        width:50%;
        border:1px solid #f0f0f0;
        background-color:rgba(255, 255, 255, 0.6);
        margin-top:10px;
        border-radius:5px;
        padding:5px;  
    }
    .Area textarea
    {
        font-size:12px;
        width:90%;
        max-width:90%;
        min-width:90%;
        padding:5%;
        border-radius:5px;
        border:1px solid #f0f0f1;
        max-height:50px;
        height:50px;
        min-height:50px;
        background-color:#333;
        color:#fff;
        outline:none;
        border:1px solid transparent;
        resize:none;
    }
    .Area textarea:focus
    {
        color:#333;
        border:1px solid #ccc;
        -webkit-transition: all 1.5s;
        -moz-transition: all 1.5s;
        transition: all 1.5s;
        background-color:#fff;
    }
    .Area .note
    {
        color:#9F6905;
        font-size:10px;
    }
    .R .tooltip
    {
        font-size:10px;
        position:absolute;
        background-color:#fff;
        padding:5px;
        border-radius:5px;
        border:2px solid #9F6905;
        margin-left:70px;
        margin-top:-70px;
        display:none;
        color:#545454;
    }
    .R .tooltip:before
    {
        content: '';
        position: absolute;
        width: 1px;
        height: 1px;
        border: 5px solid transparent;
        border-right-color: #9F6905;
        margin-top: 10px;
        margin-left: -17px;
    }
    .R:hover .tooltip
    {
        display:block;
    }

    .L .tooltip
    {
        font-size:10px;
        position:absolute;
        background-color:#fff;
        padding:5px;
        border-radius:5px;
        border:2px solid #9F6905;
        margin-left:70px;
        margin-top:-70px;
        display:none;  
        color:#545454;
    }
    .L .tooltip:before
    {
        content: '';
        position: absolute;
        width: 1px;
        height: 1px;
        border: 5px solid transparent;
        border-right-color: #9F6905;
        margin-top: 10px;
        margin-left: -17px;
    }
    .L:hover .tooltip
    {
        display:block;
    }
    a
    {
        text-decoration:none;
    }


    .Area input[type=button]
    {
        font-size:12px;
        padding:5px;
        border-radius:5px;
        border:1px solid #f0f0f1;
        background-color:#333;
        color:#fff;
        outline:none;
        border:1px solid transparent;
        float:left;
    }
    .Area input[type=button]:hover
    {
        color:#fff;
        border:1px solid #ccc;
        -webkit-transition: all 1.5s;
        -moz-transition: all 1.5s;
        transition: all 1.5s;
        background-color:#9F6905;
    } 
    .validation
    {
        float:left;
        background-color:#ccc;
        border-radius:5px;
        padding:5px;
        font-size:12px;
        line-height:14px;
        height:0px;
        margin-left:5px;
        display:none;
    }
    br
    {
        clear:both;
        height:20px;
    }

    .numberCircle {
        border-radius: 50%;
        behavior: url(PIE.htc);
        width: 65px;
        height: 65px;
        padding: 15px;
        background: #018BC8;
        /* border: 2px solid #666; */
        color: #FCFCFC;
        text-align: center;
        font: 32px Arial, sans-serif;
        float: left;
    }

    .ismart-R {
      
        float: right;
        padding-left: 6px;
        width: 80%;
    }
    .ismart-L{

        float: left;
        padding-left: 6px;
        width: 80%;
    }
    .ismart-title {
     
        text-align: center;
    
        font-size: 16px!important;
        color: #FFFFFF;
        background-color: #018BC8;
        border-radius: 20px;
        padding:15px 10px;
        float: left;
    }
    .ismart-answer {
        background-color: #F0F0F0;
        border-radius: 20px;
        padding: 5px 10px;
        min-height: 40px;
    }
    .ismart-img{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 2px solid #f0f0ff;
        padding: 5px;
        float: right;
    }
    .ismart-Q{
        width: 100%;position: relative;float: left;
        margin-bottom: 10px;
    }
    .ismart-A{
        width: 100%;position: relative;float: right;
        margin-bottom: 10px;
    }
    .clear {
        clear: both;
        margin-bottom: 30px;
    }
</style>
@stop

