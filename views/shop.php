
<?php 
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-57-precomposed.png">
<style id="__web-inspector-hide-shortcut-style__" type="text/css">
.__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after
{
    visibility: hidden !important;
}
<style type="text/css">
	
	input{
		direction:rtl;
	}
</style>
</style></head><!--/head-->

<body>
		<header id="header"><!--header-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="home"><img src="<?php echo base_url();?>assets/images/home/logo.png" alt="" height="50" width="100"></a>
                        </div>
                        
                    </div>
                   <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                           <?php 

								sec_session_start();
                                if (login_check($mysqli) == true) {?>
                                <li><a href="login/logout"><i class="fa fa-shopping-cart"></i>خروج</a></li>
                                <?php } ?>
								  <li><a href="cart"><i class="fa fa-shopping-cart"></i> سبد خرید</a></li>
								<li><a href="checkout"><i class="fa fa-crosshairs"></i> صورت حساب</a></li>
								<li><a href="profile"><i class="fa fa-user"></i> حساب کاربری</a></li>
								<li><a href="login"><i class="fa fa-lock"></i>ورود</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
        
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-14">
                        <div class="mainmenu pull-right">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="about">درباره ما</a></li>
								<li><a href="contact_us">تماس با ما</a></li>
								<li><a href="search">جستجو</a></li>
								<li><a href="shop">محصولات</a></li>
								<li><a href="home">خانه</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!--/header-bottom-->
	</header><!--/header-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3" style="float:right" >
					<div class="left-sidebar">
						<h2>دسته بندی</h2>
						<div class="panel-group category-products" id="accordian" style="direction:rtl;"><!--category-productsr-->
						
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-left"><i class="fa fa-plus"></i></span>
											آموزشی
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="shop.html">گروه سنی کودکان</a></li>
											<li><a href="shop.html">گروه سنی نوجوانان</a></li>
											<li><a href="shop.html">گروه سنی جوانان</a></li>
										
										</ul>
									</div>
								</div>
							</div>
							
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shop.html">پژوهشی</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shop.html">ادبیات</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shop.html">کودک و نوجوان</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shop.html">تاریخی</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shop.html">سلامت</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shop.html">رمان</a></h4>
								</div>
							</div>
						
							
						</div><!--/category-products-->
					
					</div>
				</div>
				


				
				<div class="col-sm-9 padding-right" >
					<div class="features_items" style=direction:rtl; ><!--features_items-->
						<h2 class="title text-center">کتب</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo base_url();?>assets/images/home/product1.jpg" alt="" >
											<h2>44 تومان</h2>
											<p>نام کتاب</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<div class="details">
												<a href="product-details.html"><h3>توضیحات بیشتر</h3></a>
												<p>نویسنده :</p>
												<p>ناشر :</p>
												<p>سال چاپ :</p>
												<p>خلاصه :</p>
												</div>
												<h2>44 تومان</h2>
												<p>نام کتاب</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
											</div>
										</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products" >
									<div class="productinfo text-center">
										<img src="<?php echo base_url();?>assets/images/home/product2.jpg" alt="" >
											<h2>44 تومان</h2>
											<p>نام کتاب</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<div class="details">
												<a href="product-details.html"><h3>توضیحات بیشتر</h3></a>
												<p>نویسنده :</p>
												<p>ناشر :</p>
												<p>سال چاپ :</p>
												<p>خلاصه :</p>
												</div>
												<h2>44 تومان</h2>
												<p>نام کتاب</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url();?>assets/images/home/product3.jpg" alt="" >
											<h2>44 تومان</h2>
											<p>نام کتاب</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<div class="details">
												<a href="product-details.html"><h3>توضیحات بیشتر</h3></a>
												<p>نویسنده :</p>
												<p>ناشر :</p>
												<p>سال چاپ :</p>
												<p>خلاصه :</p>
												</div>
												<h2>44 تومان</h2>
												<p>نام کتاب</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url();?>assets/images/home/product4.jpg" alt="" >
											<h2>44 تومان</h2>
											<p>نام کتاب</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<div class="details">
												<a href="product-details.html"><h3>توضیحات بیشتر</h3></a>
												<p>نویسنده :</p>
												<p>ناشر :</p>
												<p>سال چاپ :</p>
												<p>خلاصه :</p>
												</div>
												<h2>44 تومان</h2>
												<p>نام کتاب</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
									</div>
									<img src="images/home/new.png" class="new" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url();?>assets/images/home/product5.jpg" alt="" >
											<h2>44 تومان</h2>
											<p>نام کتاب</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<div class="details">
												<a href="product-details.html"><h3>توضیحات بیشتر</h3></a>
												<p>نویسنده :</p>
												<p>ناشر :</p>
												<p>سال چاپ :</p>
												<p>خلاصه :</p>
												</div>
												<h2>44 تومان</h2>
												<p>نام کتاب</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
									</div>
									<img src="<?php echo base_url();?>assets/images/home/sale.png" class="new" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url();?>assets/images/home/product6.jpg" alt="" >
											<h2>44 تومان</h2>
											<p>نام کتاب</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<div class="details">
												<a href="product-details.html"><h3>توضیحات بیشتر</h3></a>
												<p>نویسنده :</p>
												<p>ناشر :</p>
												<p>سال چاپ :</p>
												<p>خلاصه :</p>
												</div>
												<h2>44 تومان</h2>
												<p>نام کتاب</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>اضافه کردن به سبد خرید</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div><!--features_items-->
					
					<div class="recommended_items"><!--recommended_items-->
						
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				<div class="shopper-info" style="float: right; direction: rtl;">
                            <form>
                                <input type="name" placeholder="نام کتاب">
                                <input type="author" placeholder="نام نویسنده">
                                <input type="publish_year" placeholder="سال انتشار">
                                <input type="publisher" placeholder="نام انتشارات">
                                    <select>
                                        <option>-- دسته بندی --</option>
                                        <option>آموزشی</option>
                                        <option>پژوهشی</option>
                                        <option>ادبیات</option>
                                        <option>کودک و نوجوان</option>
                                        <option>تاریخی</option>
                                        <option>سلامت</option>
                                        <option>رمان</option>
                                    </select>
                                  <a class="btn btn-primary" href="" style="margin-right: 40px;">اضافه کردن کتاب</a>
                            </form>
                        </div>
				</div>
			
			</div>
		
		</div>
		
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top" >
			<div class="container" style=direction:rtl;>
				<div class="row" >		
					<div class="col-sm-3">
						<div class="address">
							<img src="<?php echo base_url();?>assets/images/home/map.png" alt="" />
							<p> آدرس شرکت</p>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="companyinfo" >
							<h2><span>کتاب-</span>آنلاین</h2>
							<p>توضیحات درباره کتاب-آنلاین</p>
						</div>
					</div>
				
					
					
				</div>
			</div>
		</div>
		
		
	</footer><!--/Footer-->
	

  
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/price-range.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-up"></i></a>

</body>
</html>