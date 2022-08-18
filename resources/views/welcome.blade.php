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
        $('#modal-login-form').modal('show');
    });
    $('#contactForm').on('click',function () {
        var name = $('#name').val();
        var email = $('#email').val();
        $.ajax({
            type:"get",
            url:"{{url('contact')}}",
            data:{'name':name,'email':email},
            success:function (data) {
                $('#modal-login-form').modal('hide');
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
