<!DOCTYPE html>
<html>

<head>
    <title>Shataj Soft, Soft Limited, Proyjon Online Shop Price List, Mobile: 01733919791</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Shataj Soft, Soft Limited, Proyjon Online Shop Price List : Contact 01733919791, 01610511106" />

    <script type="application/x-javascript">
        <!--
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

        function MM_preloadImages() { //v3.0
            var d = document;
            if (d.images) {
                if (!d.MM_p) d.MM_p = new Array();
                var i, j = d.MM_p.length,
                    a = MM_preloadImages.arguments;
                for (i = 0; i < a.length; i++)
                    if (a[i].indexOf("#") != 0) {
                        d.MM_p[j] = new Image;
                        d.MM_p[j++].src = a[i];
                    }
            }
        }

        function MM_swapImgRestore() { //v3.0
            var i, x, a = document.MM_sr;
            for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
        }

        function MM_findObj(n, d) { //v4.01
            var p, i, x;
            if (!d) d = document;
            if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                d = parent.frames[n.substring(p + 1)].document;
                n = n.substring(0, p);
            }
            if (!(x = d[n]) && d.all) x = d.all[n];
            for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
            for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
            if (!x && d.getElementById) x = d.getElementById(n);
            return x;
        }

        function MM_swapImage() { //v3.0
            var i, j = 0,
                x, a = MM_swapImage.arguments;
            document.MM_sr = new Array;
            for (i = 0; i < (a.length - 2); i += 3)
                if ((x = MM_findObj(a[i])) != null) {
                    document.MM_sr[j++] = x;
                    if (!x.oSrc) x.oSrc = x.src;
                    x.src = a[i + 2];
                }
        }
        //
        -->
    </script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--web font-->
    <link href="https://fonts.googleapis.com/css?family=Petit+Formal+Script" rel="stylesheet">


    <style type="text/css">
        .style1 {
            color: #FFFFFF;
            font-family: Arial, Helvetica, sans-serif;
        }

        .style2 {
            font-family: Arial, Helvetica, sans-serif
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">






</head>

<body
    onLoad="MM_preloadImages('{{ asset('images/mv-1a.png') }}','{{ asset('images/mw-1a.png') }}','{{ asset('images/mt-1a.png') }}','{{ asset('images/mp-1a.png') }}','{{ asset('images/ms-1a.png') }}')">
    <br>
    <div align="center">
        <a href="{{ route('soft') }}" onMouseOver="MM_swapImage('Image1','','{{ asset('images/mv-1a.png') }}',1)"
            onMouseOut="MM_swapImgRestore()">
            <img src="{{ asset('images/mv-1.png') }}" name="Image1" width="100" height="34" border="0"></a>
        <a href="{{ route('index') }}" onMouseOut="MM_swapImgRestore()"
            onMouseOver="MM_swapImage('Image2','','{{ asset('images/mw-1a.png') }}',1)">
            <img src="{{ asset('images/mw-1.png') }}" name="Image2" width="100" height="34"
                border="0"></a>
        <a href="{{ route('apps') }}" onMouseOut="MM_swapImgRestore()"
            onMouseOver="MM_swapImage('Image4','','{{ asset('images/mt-1a.png') }}',1)">
            <img src="{{ asset('images/mt-1.png') }}" name="Image4" width="100" height="34"
                border="0"></a>
        <a href="{{ route('marketing') }}" onMouseOut="MM_swapImgRestore()"
            onMouseOver="MM_swapImage('Image3','','{{ asset('images/mp-1a.png') }}',1)">
            <img src="{{ asset('images/mp-1.png') }}" name="Image3" width="100" height="34"
                border="0"></a>
        <a href="{{ route('database') }}" onMouseOut="MM_swapImgRestore()"
            onMouseOver="MM_swapImage('Image5','','{{ asset('images/ms-1a.png') }}',1)">
            <img src="{{ asset('images/ms-1.png') }}" name="Image5" width="100" height="34"
                border="0"></a>
    </div>

    @yield('content')
    <!-- //owl-carousel -->


    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-center text-success">Account Info *</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body" style="">
                    <form>
                        @csrf
                        <input type="hidden" name="packagename" id="packagename">
                        <input type="hidden" name="packagvalue" id="packagvalue">
                        <div class="d-flex justify-content-around">
                            <div>
                                <label for=""> <b>Full Name</b> </label>
                                <input class="form-control" type="text" name="fullname" id="fullname"
                                    placeholder="Full Name" required>
                            </div>
                            <div>
                                <label for=""> <b>Mobile</b> </label>
                                <input class="form-control" type="number" name="mobile" id="mobile"
                                    placeholder="Mobile" required>
                            </div>
                        </div><br>
                        <div class="d-flex justify-content-around">
                            <div>
                                <label for=""> <b>Email</b> </label>
                                <input class="form-control" type="email" name="email" id="email"
                                    placeholder="Email" required>
                            </div>
                            <div class="ml-2">
                                <label for=""> <b>Address</b> </label>
                                <textarea name="address" id="address" class="form-control " name="" id="" cols="30"
                                    rows="2" required>

                                </textarea>
                            </div>
                        </div>
                        <p><b> ------------------------------------------------------------------------</b></p>

                        <input type="radio" name="gender" value="male" checked> <img
                            src="https://www.sslcommerz.com/wp-content/uploads/2019/11/footer_logo.png"
                            style="width: 193px" alt="">
                        <input type="radio" name="gender" value="female"> <img
                            src="https://www.sslcommerz.com/wp-content/uploads/2019/11/footer_logo.png"
                            style="width: 193px" alt="">
                        <br><br>
                        <div class="d-flex justify-content-center">
                            <p> <b>Pay</b> </p>
                            <input type="number" style="width: 200px" name="pay" id="pay"
                                class="form-control"> <b> Taka</b>
                        </div>


                        <br>
                        {{-- <div class="d-flex justify-content-center">
                            <button class="btn btn-primary  text-center form-control">PayNow</button>

                        </div> --}}



                        <button   class="btn btn-primary btn-lg btn-block" id="sslczPayBtn"
                            token="if you have any token validation"
                            postdata="your javascript arrays or objects which requires in backend"
                            order="If you already have the transaction generated for current order"
                            endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
                        </button>

                    </form>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="copyright">
        <p>Contact By : <a href="http://shataj.com/" target="_blank">SHATAJ SOFT : 01733919791 <br> 13 No Moszid
                Market (2nd FL), Mirpur-13, Dhaka-1216 </a></p>
    </div>

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items: 5,
                itemsDesktop: [640, 5],
                itemsDesktopSmall: [414, 4]
            });
        });
    </script>
    <script>
        $(document).ready(function() {

        })
    </script>
    <script>
        var obj = {};
        obj.fullname = $('#fullname').val();
        obj.mobile = $('#mobile').val();
        obj.email = $('#email').val();
        obj.address = $('#address').val();
        obj.pay = $('#pay').val();
        obj.packagename = $('#packagename').val();
        obj.packagvalue = $('#packagvalue').val();



        $('.modalPopup').click(function() {
            var packname = $(this).attr('packname');
            var packval = $(this).attr('packprice');

            $('#pay').val(packval);
            $("#packagvalue").val(packval)
            $("#packagename").val(packname)


            obj.packagename = packname
            obj.packagvalue = packval
            obj.pay = packval

        })




        $("#fullname").change(function() {
            obj.fullname = $('#fullname').val();
        });
        $("#mobile").change(function() {
            obj.mobile = $('#mobile').val();
        });
        $("#email").change(function() {
            obj.email = $('#email').val();
        });
        $("#address").change(function() {
            obj.address = $('#address').val();
        });
        $("#pay").change(function() {
            obj.pay = $('#pay').val();
        });
        $("#packagename").change(function() {
            obj.packagename = $('#packagename').val();
        });
        $("#packagvalue").change(function() {
            obj.packagvalue = $('#packagvalue').val();
        });

        $('#sslczPayBtn').prop('postdata', obj);


    </script>
    <script>
        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36)
                    .substring(7);
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>

</body>

</html>
