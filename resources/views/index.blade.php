@extends('app')
@section('content')
    <div class="main">
        <h1> ওয়েবসাইট তৈরীর মূল্য তালিকা</h1>
        <p align="center" class="style1"> ডোমেইন, হোষ্টিং ও ডিজাইনসহ ফুল প্যাকেজ </p>
        <div align="center">

            <?php
            if (isset($_POST['btn_submit'])) {
                $msg = $request->create($_POST);
                if (isset($msg)) {
                    echo $msg;
                }
            } ?>
        </div>

        <div class="main-agileinfo">
            <div id="owl-demo" class="owl-carousel owl-theme">

                <!-- owl-carousel -->
                <div class="item">
                    <div class="pricing pricing-two">
                        <div class="pricing-top top-two">
                            <h3>স্ট্যাটিক ওয়েবসাইট <br>৫,০০০/-টাকা </h3>
                        </div>
                        <div class="pricing-bottom">
                            <p>Top Lavel Domain</p>
                            <p>500 MB Hosting</p>
                            <p>5 Page Design </p>
                            <p>2 Days Delivery </p>
                            <p>1 web module</p>
                            <p>500/- Next per page</p>
                            <div class="agileits-buy"><a packprice="5000"  packname="স্ট্যাটিক ওয়েবসাইট ৫,০০০/-টাকা"  data-toggle="modal" data-target="#myModal" class="modalPopup"   href="#small-dialog1">Buy
                                    Now</a><br><br>
                                <a href="http://maqpaperltd.com/web/static/" target="_blank">DEMO</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="pricing">
                        <div class="pricing-top">
                            <h3>ডায়নামিক ওয়েবসাইট <br>৮,০০০/-টাকা </h3>
                        </div>
                        <div class="pricing-bottom">
                            <p>Top Lavel Domain</p>
                            <p>500 MB Hosting</p>
                            <p>10 Page Design </p>
                            <p>2 Days Delivery </p>
                            <p>Admin/Editing Panel</p>
                            <p>500/- Next per page</p>
                            <div class="agileits-buy"><a  packprice="8000"  packname="ডায়নামিক ওয়েবসাইট ৮,০০০/-টাকা"  data-toggle="modal" data-target="#myModal" class="modalPopup" href="#small-dialog2">Buy
                                    Now</a><br><br>
                                <a href="http://maqpaperltd.com/web/dynamic/" target="_blank">DEMO</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="pricing pricing-four">
                        <div class="pricing-top top-four">
                            <h3>ইকামার্স ওয়েবসাইট<br>১৫,০০০/-টাকা </h3>
                        </div>
                        <div class="pricing-bottom wthree">
                            <p>Top Lavel Domain</p>
                            <p>1 GB Hosting</p>
                            <p>10 Categories</p>
                            <p>3 Days Delivery </p>
                            <p>3 web module</p>
                            <p>2000/- Next module</p>
                            <div class="agileits-buy"><a packprice="15000"  packname="ইকামার্স ওয়েবসাইট ১৫,০০০/-টাকা"  data-toggle="modal" data-target="#myModal" class="modalPopup"  href="#small-dialog3">Buy
                                    Now</a><br><br>
                                <a href="http://maqpaperltd.com/web/ecom/" target="_blank">DEMO</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="pricing pricing-three agileits">
                        <div class="pricing-top top-three">
                            <h3>রেডিও, টিভি ও পত্রিকা<br>২০,০০০/-টাকা </h3>
                        </div>
                        <div class="pricing-bottom">
                            <p>Top Lavel Domain</p>
                            <p>1 GB Hosting</p>
                            <p>10 Categories</p>
                            <p>7 Days Delivery </p>
                            <p>3 web module</p>
                            <p>2000/- Next module</p>
                            <div class="agileits-buy"><a packprice="20000"  packname="রেডিও, টিভি ও পত্রিকা ২০,০০০/-টাকা "  data-toggle="modal" data-target="#myModal" class="modalPopup"  href="#small-dialog4">Buy
                                    Now</a><br><br>
                                <a href="http://maqpaperltd.com/web/newstv/" target="_blank">DEMO</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="pricing pricing-five">
                        <div class="pricing-top top-five">
                            <h3>ক্লাসিফাইড/স্যোশাল<br>২৫,০০০/-টাকা </h3>
                        </div>
                        <div class="pricing-bottom w3ls">
                            <p>Top Lavel Domain</p>
                            <p>2 GB Hosting</p>
                            <p>Full Design </p>
                            <p>7 Days Delivery </p>
                            <p>3 web module</p>
                            <p>2000/- Next module</p>
                            <div class="agileits-buy"><a packprice="25000"  packname="ক্লাসিফাইড/স্যোশাল ২৫,০০০/-টাকা "  data-toggle="modal" data-target="#myModal" class="modalPopup"  href="#small-dialog5">Buy
                                    Now</a><br><br>
                                <a href="http://maqpaperltd.com/web/social/" target="_blank">DEMO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
