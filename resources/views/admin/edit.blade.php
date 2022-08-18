<!DOCTYPE html><!--[if IE 8]>
<html class="ie8"><![endif]--><!--[if IE 9]>
<html class="ie9"><![endif]--><!--[if !IE]><!-->
<html><!--<![endif]-->
<!-- Mirrored from portotheme.com/html/venedor/green/register-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jul 2022 06:19:07 GMT -->
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
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{asset('css/colpick.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.selectbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="icon" type="image/png" href="http://www.portotheme.com/html/venedor/green/images/icons/icon.png">
    <link rel="apple-touch-icon" sizes="57x57"
          href="http://www.portotheme.com/html/venedor/green/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="http://www.portotheme.com/html/venedor/green/images/icons/apple-icon-72x72.png">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{asset('js/jquery-1.11.1.min.js')}}"><\/script>');</script>
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script><![endif]-->
    <style id="custom-style"></style>
</head>
<body>
<div id="option-panel">
    <div id="option-panel-wrapper">
        <div id="option-panel-btn"></div>
        <div id="option-panel-container">
            <ul id="option-panel-tabs-container" class="clearfix">
                <li class="active"><a href="#panel-layout" data-toggle="tab" data-panel-title="Layout"></a></li>
                <li><a href="#panel-home" data-toggle="tab" data-panel-title="Background Settings"></a></li>
                <li><a href="#panel-color" data-toggle="tab" data-panel-title="Color Settings"></a></li>
                <li><a href="#panel-font" data-toggle="tab" data-panel-title="Font Settings"></a></li>
                <li><a id="option-close" href="#"></a></li>
            </ul>
            <div id="option-panel-title" class="clearfix"><span>Layout</span> <a href="#"
                                                                                 id="option-panel-reset">Reset</a></div>
            <div id="option-panel-content" class="tab-content">
                <div class="tab-pane fade in active" id="panel-layout">
                    <div id="panel-option-layout" class="panel-group custom-accordion sm-accordion">
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Layout</span></div>
                                <a class="accordion-btn opened" data-toggle="collapse" data-target="#document-layout"
                                   data-parent="#panel-option-layout"></a></div>
                            <div id="document-layout" class="collapse in">
                                <div class="panel-body">
                                    <ul class="layout-style-list clearfix">
                                        <li data-layout="fullwidth"><img src="images/panel/fullwidth.png"
                                                                         alt="Fullwidth">
                                            <p>Fullwidth</p></li>
                                        <li data-layout="boxed"><img src="images/panel/boxed.png" alt="Boxed">
                                            <p>Boxed</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="panel-home">
                    <div id="panel-home-accordion" class="panel-group custom-accordion sm-accordion">
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Basic Color</span></div>
                                <a class="accordion-btn opened" data-toggle="collapse"
                                   data-target="#body-background-color" data-parent="#panel-home-accordion"></a></div>
                            <div id="body-background-color" class="collapse in">
                                <div class="panel-body">
                                    <div id="panel-color-picker"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="panel-color">
                    <div id="panel-color-accordion" class="panel-group custom-accordion sm-accordion">
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Green Mode</span></div>
                                <a class="accordion-btn opened" data-toggle="collapse" data-target="#color-mode"
                                   data-parent="#panel-color-accordion"></a></div>
                            <ul class="colorbox-list clearfix collapse in" id="color-mode">
                                <li>
                                    <div class="color-box first-color"><span></span></div>
                                    <p>First Color</p></li>
                                <li>
                                    <div class="color-box second-color"><span></span></div>
                                    <p>Second Color</p></li>
                                <li>
                                    <div class="color-box third-color"><span></span></div>
                                    <p>Third Color</p></li>
                                <li>
                                    <div class="color-box fourth-color"><span></span></div>
                                    <p>Fourth Color</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                    <li><a class="active" href="{{url('admin')}}">Admin</a></li>
                                    <li><a href="{{url('products')}}" style="color:green"   >Products</a></li>
                                    <li><a href="{{url('admin/blog')}}">Blog</a></li>
                                    <li><a href="{{url('signUp')}}">Sign Ups</a></li>

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
    <section id="content">
        <div id="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{url('admin')}}">Admin</a></li>
                    <li class="active">Edit Content</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="xs-margin"></div>
                    <form action="{{url('editC')}}" id="register-form" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{$edit->id}}" name="id">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <fieldset><h2 class="sub-title">EDIT PRODUCT</h2>
                                    <div class="input-group"><span class="input-group-addon"><span class="input-text">Placement</span></span>
                                        <div class="large-selectbox clearfix"><select id="country" name="placement" class="selectbox">
                                                @if($edit->placement==null)
                                                    <option value="">Select Placement</option>
                                                @else
                                                    <option value="{{$edit->placement}}">{{$edit->placement}}</option>
                                                @endif
                                                @if($edit->placement=='one')
                                                    @else
                                                        <option value="one">One</option>
                                                    @endif
                                                    @if($edit->placement=='two')
                                                    @else
                                                        <option value="two">Two</option>
                                                    @endif
                                                    @if($edit->placement=='three')
                                                    @else
                                                        <option value="three">Three</option>
                                                    @endif
                                                    @if($edit->placement=='four')
                                                    @else
                                                        <option value="four">Four</option>
                                                    @endif
                                                    @if($edit->placement!=null)
                                                        <option value="">No Placement</option>
                                                    @endif

                                            </select></div>
                                    </div>
                                    <div class="input-group"><span class="input-group-addon"><span class="input-text">Product Name</span></span>
                                        <input type="text" required class="form-control input-lg" value="{{$edit->product_name}}" name="product_name">
                                    </div>
                                    <div class="input-group"><span class="input-group-addon"><span class="input-text">Product Desc</span></span>
                                        <input type="text" required class="form-control input-lg" value="{{$edit->product_desc}}" name="product_desc">
                                    </div>
                                    <div class="input-group"><span class="input-group-addon"><span class="input-text">Amazon Link</span></span>
                                        <input type="text" required class="form-control input-lg" value="{{$edit->amazon_link}}" name="amazon_link">
                                    </div>
                                    <div class="input-group"><span class="input-group-addon"><span class="input-text">Ebay Link</span></span>
                                        <input type="text" required class="form-control input-lg" value="{{$edit->ebay_link}}" name="ebay_link">
                                    </div>
                                    <div class="input-group"><span class="input-group-addon"><span class="input-text">Product Link</span></span>
                                        <input type="text" required class="form-control input-lg" value="{{$edit->product_link}}" name="product_link">
                                    </div>
                                    <div class="input-group"><span class="input-group-addon"><span class="input-text">Image1</span></span>
                                        <input type="file" class="form-control input-lg" name="image_one">
                                    </div>
                                    <div class="input-group"><span class="input-group-addon"><span class="input-text">Image2</span></span>
                                        <input type="file" class="form-control input-lg" name="image_two">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Save</button>

                                </fieldset>
                            </div>

                        </div>
                    </form>
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
<a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
<script src="{{asset('js/jquery.debouncedresize.js')}}"></script>
<script src="{{asset('js/retina.min.js')}}"></script>
<script src="{{asset('js/jquery.placeholder.js')}}"></script>
<script src="{{asset('js/jquery.hoverIntent.min.js')}}"></script>
<script src="{{asset('js/twitter/jquery.tweet.min.js')}}"></script>
<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('js/jquery.selectbox.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/colpick.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
<!-- Mirrored from portotheme.com/html/venedor/green/register-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jul 2022 06:19:07 GMT -->
</html>
