<!DOCTYPE html><!--[if IE 8]>
<html class="ie8"><![endif]--><!--[if IE 9]>
<html class="ie9"><![endif]--><!--[if !IE]><!-->
<html><!--<![endif]-->
<!-- Mirrored from portotheme.com/html/venedor/green/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jul 2022 06:17:07 GMT -->
<head>
    <meta charset="utf-8">
    <title>Venedor - Responsive eCommerce Template</title>
    <meta name="description" content="Responsive modern ecommerce Html5 Template">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link
        href="http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300"
        rel="stylesheet" id="googlefont">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/colpick.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery.selectbox.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="image/png" href="http://www.portotheme.com/html/venedor/green/images/icons/icon.png">
    <link rel="apple-touch-icon" sizes="57x57"
          href="http://www.portotheme.com/html/venedor/green/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="http://www.portotheme.com/html/venedor/green/images/icons/apple-icon-72x72.png">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>');</script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script><![endif]-->
    <style id="custom-style"></style>
</head>
<body>
<div id="wrapper">
    <header id="header">
        <div id="inner-header">
            <div id="main-nav-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 clearfix">
                            <nav id="main-nav">
                                <div id="responsive-nav">
                                    <div id="responsive-nav-button">Menu <span id="responsive-nav-button-icon"></span>
                                    </div>
                                </div>
                                <ul class="menu clearfix">
                                    <li><a href="{{url('/')}}" style="color:green">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="{{url('blog')}}">Blog</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                            <div id="quick-access">
                                <form class="form-inline quick-search-form" role="form" action="#">
                                    <div class="form-group"><input type="text" class="form-control"
                                                                   placeholder="Search here"></div>
                                    <button type="submit" id="quick-search" class="btn btn-custom"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('flash-message')
    <br>
    <div class="alert alert-success" role="alert" id="success_tic">
        <strong>Hello <i id="nam"></i>, Sign up Success</strong>
    </div>
    <style>
        .alert {
            width: 80%;
            margin: 20px auto;
        }

    </style>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="xs-margin"></div>
                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table cart-table">
                                <thead>
                                <tr>
                                    <th class="table-title">Product Name</th>
                                    <th class="table-title">Product Description</th>
                                    <th class="table-title">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td class="item-name-col">
                                        <figure><a href="{{$content->product_link}}"><img src="{{asset('uploads/product/'.$content->image_one)}}"
                                                                 alt="Lowlands Lace Blouse"></a></figure>
                                        <header class="item-name"><a href="{{$content->product_link}}">{{$content->product_name}}</a></header>
                                    </td>
                                    <td class="item-code">{{$content->product_desc}}</td>
                                        <td class="item-total-col"><a href="{{$content->amazon_link}}"><button class="btn btn-warning">AMAZON PRICE</button></a> <hr><a href="{{$content->ebay_link}}"><button class="btn btn-danger">EBAY PRICE</button></a> </td>
                                </tr>
                                    <tr>
                                        <td class="item-name-col">
                                            <figure><a href="{{$two->product_link}}"><img src="{{asset('uploads/product/'.$two->image_one)}}"
                                                                     alt="Lowlands Lace Blouse"></a></figure>
                                            <header class="item-name"><a href="{{$two->product_link}}">{{$two->product_name}}</a></header>
                                        </td>
                                        <td class="item-code">{{$two->product_desc}}</td>
                                        <td class="item-total-col"><a href="{{$two->amazon_link}}"><button class="btn btn-warning">AMAZON PRICE</button></a> <hr><a href="{{$content->ebay_link}}"><button class="btn btn-danger">EBAY PRICE</button></a> </td>
                                    </tr>
                                    <tr>
                                        <td class="item-name-col">
                                            <figure><a href="{{$three->product_link}}"><img src="{{asset('uploads/product/'.$three->image_one)}}"
                                                                     alt="Lowlands Lace Blouse"></a></figure>
                                            <header class="item-name"><a href="{{$three->product_link}}">{{$three->product_name}}</a></header>
                                        </td>
                                        <td class="item-code">{{$three->product_desc}}</td>
                                        <td class="item-total-col"><a href="{{$three->amazon_link}}"><button class="btn btn-warning">AMAZON PRICE</button></a> <hr><a href="{{$content->ebay_link}}"><button class="btn btn-danger">EBAY PRICE</button></a> </td>
                                    </tr>
                                    <tr>
                                        <td class="item-name-col">
                                            <figure><a href="{{$four->product_link}}"><img src="{{asset('uploads/product/'.$four->image_one)}}"
                                                                     alt="Lowlands Lace Blouse"></a></figure>
                                            <header class="item-name"><a href="{{$four->product_link}}">{{$four->product_name}}</a></header>
                                        </td>
                                        <td class="item-code">{{$four->product_desc}}</td>
                                        <td class="item-total-col"><a href="{{$four->amazon_link}}"><button class="btn btn-warning">AMAZON PRICE</button></a> <hr><a href="{{$content->ebay_link}}"><button class="btn btn-danger">EBAY PRICE</button></a> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="lg-margin"></div>
                    <div class="md-margin2x"></div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">
                        <ul class="social-links clearfix">
                            <li><a href="#" class="social-icon icon-facebook"></a></li>
                            <li><a href="#" class="social-icon icon-twitter"></a></li>
                            <li><a href="#" class="social-icon icon-rss"></a></li>
                            <li><a href="#" class="social-icon icon-delicious"></a></li>
                            <li><a href="#" class="social-icon icon-linkedin"></a></li>
                            <li><a href="#" class="social-icon icon-flickr"></a></li>
                            <li><a href="#" class="social-icon icon-skype"></a></li>
                            <li><a href="#" class="social-icon icon-email"></a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12 footer-text-container"><p>&copy; 2014 Powered by Company&trade;.
                            All Rights Reserved.</p></div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- basic modal -->
<!-- Modal Login Form-->
<div class="modal fade" id="modal-login-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel1">SIGN UP</h4>
                </div><!-- End .modal-header -->
                <div class="modal-body">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Name&#42;</span></span>
                        <input type="text" required class="form-control input-lg" id="name" placeholder="Enter Name" aria-required="">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>
                        <input type="email" required class="form-control input-lg" id="email" placeholder="Your Email" aria-required="">
                    </div><!-- End .input-group -->
                   <!-- End .input-group -->



                </div><!-- End .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom" data-dismiss="modal">CLOSE</button>
                    <button class="btn btn-custom-2" id="contactForm">SIGN UP</button>
                </div><!-- End .modal-footer -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
</div><!-- End .modal -->
<div class="modal fade" id="loader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="content">
                    <h3>Please Wait...
                            <!-- Loading 4 don't work on firefox because of the border-radius and the "dashed" style. -->
                            <div class="load-4">
                                <div class="ring-1"></div>
                            </div>
                    </h3>

                </div>
                <style>
                    /* -----------------------------------------
  =Default css to make the demo more pretty
-------------------------------------------- */

                    .content {
                        padding: 15px;
                        overflow: hidden;
                        background-color: #e7e7e7;
                        background-color: rgba(0, 0, 0, 0.06);
                    }

                    h1 {
                        padding-bottom: 15px;
                        border-bottom: 1px solid #d8d8d8;
                        font-weight: 600;
                    }

                    h1 span {
                        font-family: monospace, serif;
                    }

                    h3 {
                        padding-bottom: 20px;
                        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), 0 2px 0 rgba(255, 255, 255, 0.9);
                    }

                    p {
                        margin: 0;
                        padding: 10px 0;
                        color: #777;
                    }

                    .clear {
                        clear: both;
                    }

                    /* -----------------------------------------
                      =CSS3 Loading animations
                    -------------------------------------------- */

                    /* =Elements style
                    ---------------------- */
                    .load-wrapp {
                        float: left;
                        width: 100px;
                        height: 100px;
                        margin: 0 10px 10px 0;
                        padding: 20px 20px 20px;
                        border-radius: 5px;
                        text-align: center;
                        background-color: #d8d8d8;
                    }

                    .load-wrapp p {
                        padding: 0 0 20px;
                    }
                    .load-wrapp:last-child {
                        margin-right: 0;
                    }

                    .line {
                        display: inline-block;
                        width: 15px;
                        height: 15px;
                        border-radius: 15px;
                        background-color: #4b9cdb;
                    }

                    .ring-1 {
                        width: 10px;
                        height: 10px;
                        margin: 0 auto;
                        padding: 10px;
                        border: 7px dashed #4b9cdb;
                        border-radius: 100%;
                    }

                    .ring-2 {
                        position: relative;
                        width: 45px;
                        height: 45px;
                        margin: 0 auto;
                        border: 4px solid #4b9cdb;
                        border-radius: 100%;
                    }

                    .ball-holder {
                        position: absolute;
                        width: 12px;
                        height: 45px;
                        left: 17px;
                        top: 0px;
                    }

                    .ball {
                        position: absolute;
                        top: -11px;
                        left: 0;
                        width: 16px;
                        height: 16px;
                        border-radius: 100%;
                        background: #4282b3;
                    }

                    .letter-holder {
                        padding: 16px;
                    }

                    .letter {
                        float: left;
                        font-size: 14px;
                        color: #777;
                    }

                    .square {
                        width: 12px;
                        height: 12px;
                        border-radius: 4px;
                        background-color: #4b9cdb;
                    }

                    .spinner {
                        position: relative;
                        width: 45px;
                        height: 45px;
                        margin: 0 auto;
                    }

                    .bubble-1,
                    .bubble-2 {
                        position: absolute;
                        top: 0;
                        width: 25px;
                        height: 25px;
                        border-radius: 100%;
                        background-color: #4b9cdb;
                    }

                    .bubble-2 {
                        top: auto;
                        bottom: 0;
                    }

                    .bar {
                        float: left;
                        width: 15px;
                        height: 6px;
                        border-radius: 2px;
                        background-color: #4b9cdb;
                    }

                    /* =Animate the stuff
                    ------------------------ */
                    .load-1 .line:nth-last-child(1) {
                        animation: loadingA 1.5s 1s infinite;
                    }
                    .load-1 .line:nth-last-child(2) {
                        animation: loadingA 1.5s 0.5s infinite;
                    }
                    .load-1 .line:nth-last-child(3) {
                        animation: loadingA 1.5s 0s infinite;
                    }

                    .load-2 .line:nth-last-child(1) {
                        animation: loadingB 1.5s 1s infinite;
                    }
                    .load-2 .line:nth-last-child(2) {
                        animation: loadingB 1.5s 0.5s infinite;
                    }
                    .load-2 .line:nth-last-child(3) {
                        animation: loadingB 1.5s 0s infinite;
                    }

                    .load-3 .line:nth-last-child(1) {
                        animation: loadingC 0.6s 0.1s linear infinite;
                    }
                    .load-3 .line:nth-last-child(2) {
                        animation: loadingC 0.6s 0.2s linear infinite;
                    }
                    .load-3 .line:nth-last-child(3) {
                        animation: loadingC 0.6s 0.3s linear infinite;
                    }

                    .load-4 .ring-1 {
                        animation: loadingD 1.5s 0.3s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
                    }

                    .load-5 .ball-holder {
                        animation: loadingE 1.3s linear infinite;
                    }

                    .load-6 .letter {
                        animation-name: loadingF;
                        animation-duration: 1.6s;
                        animation-iteration-count: infinite;
                        animation-direction: linear;
                    }

                    .l-1 {
                        animation-delay: 0.48s;
                    }
                    .l-2 {
                        animation-delay: 0.6s;
                    }
                    .l-3 {
                        animation-delay: 0.72s;
                    }
                    .l-4 {
                        animation-delay: 0.84s;
                    }
                    .l-5 {
                        animation-delay: 0.96s;
                    }
                    .l-6 {
                        animation-delay: 1.08s;
                    }
                    .l-7 {
                        animation-delay: 1.2s;
                    }
                    .l-8 {
                        animation-delay: 1.32s;
                    }
                    .l-9 {
                        animation-delay: 1.44s;
                    }
                    .l-10 {
                        animation-delay: 1.56s;
                    }

                    .load-7 .square {
                        animation: loadingG 1.5s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
                    }

                    .load-8 .line {
                        animation: loadingH 1.5s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
                    }

                    .load-9 .spinner {
                        animation: loadingI 2s linear infinite;
                    }
                    .load-9 .bubble-1,
                    .load-9 .bubble-2 {
                        animation: bounce 2s ease-in-out infinite;
                    }
                    .load-9 .bubble-2 {
                        animation-delay: -1s;
                    }

                    .load-10 .bar {
                        animation: loadingJ 2s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
                    }

                    @keyframes loadingA {
                    0 {
                        height: 15px;
                    }
                    50% {
                        height: 35px;
                    }
                    100% {
                        height: 15px;
                    }
                    }

                    @keyframes loadingB {
                    0 {
                        width: 15px;
                    }
                    50% {
                        width: 35px;
                    }
                    100% {
                        width: 15px;
                    }
                    }

                    @keyframes loadingC {
                    0 {
                        transform: translate(0, 0);
                    }
                    50% {
                        transform: translate(0, 15px);
                    }
                    100% {
                        transform: translate(0, 0);
                    }
                    }

                    @keyframes loadingD {
                    0 {
                        transform: rotate(0deg);
                    }
                    50% {
                        transform: rotate(180deg);
                    }
                    100% {
                        transform: rotate(360deg);
                    }
                    }

                    @keyframes loadingE {
                    0 {
                        transform: rotate(0deg);
                    }
                    100% {
                        transform: rotate(360deg);
                    }
                    }

                    @keyframes loadingF {
                        0% {
                            opacity: 0;
                        }
                        100% {
                            opacity: 1;
                        }
                    }

                    @keyframes loadingG {
                        0% {
                            transform: translate(0, 0) rotate(0deg);
                        }
                        50% {
                            transform: translate(70px, 0) rotate(360deg);
                        }
                        100% {
                            transform: translate(0, 0) rotate(0deg);
                        }
                    }

                    @keyframes loadingH {
                        0% {
                            width: 15px;
                        }
                        50% {
                            width: 35px;
                            padding: 4px;
                        }
                        100% {
                            width: 15px;
                        }
                    }

                    @keyframes loadingI {
                        100% {
                            transform: rotate(360deg);
                        }
                    }

                    @keyframes bounce {
                        0%,
                        100% {
                            transform: scale(0);
                        }
                        50% {
                            transform: scale(1);
                        }
                    }

                    @keyframes loadingJ {
                        0%,
                        100% {
                            transform: translate(0, 0);
                        }

                        50% {
                            transform: translate(80px, 0);
                            background-color: #f5634a;
                            width: 25px;
                        }
                    }

                </style>
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
</div><!-- End .modal -->
<a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.debouncedresize.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/jquery.hoverIntent.min.js"></script>
<script src="js/twitter/jquery.tweet.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.selectbox.min.js"></script>
<script src="js/colpick.js"></script>
<script src="js/main.js"></script>
</body>
<script>
    $(document).ready(function () {
        $('#success_tic').hide();
    });
    $(window).on('load', function() {
        var is_already_show = sessionStorage.getItem('alreadyShow');
        if(is_already_show != 'alredy shown'){
            sessionStorage.setItem('alreadyShow','alredy shown')
            $('#modal-login-form').modal('show');
        }
        else{
            console.log(is_already_show);
        }
    });
    $('#contactForm').on('click',function () {
        $('#modal-login-form').modal('hide');
        $('#loader').modal('show');
        var name = $('#name').val();
        var email = $('#email').val();
        $.ajax({
            type:"get",
            url:"{{url('contact')}}",
            data:{'name':name,'email':email},
            success:function (data) {
                $('#loader').modal('hide');
                $('#success_tic').show();
                $('#nam').text(name);
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
</script>
<!-- Mirrored from portotheme.com/html/venedor/green/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jul 2022 06:17:17 GMT -->
</html>
