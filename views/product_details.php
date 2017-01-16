
<?php 
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
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
	<style type="text/css">
	
	input{
		direction:rtl;
	}
</style>
</head><!--/head-->

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
                               		<li><a href="statusadmin"><i class="fa fa-map-marker"></i> رهگیری</a></li>
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
		<div class="container"  style="direction: rtl;">
			<div class="row">
				
				<div class="col-sm-9 padding-right" >
					<div class="product-details"><!--product-details-->
					<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo base_url();?>assets/images/product-details/1.jpg" alt="" style="height: 350px; width: 250px;">
							</div>

						</div>
						<div class="col-sm-7" style="direction: rtl; ">
							<div class="product-information"><!--/product-information-->
								<h2>نام کتاب</h2>
								<p>نام نویسنده</p>
								<p>انتشارات</p>
								<p>سال چاپ</p>
								<p>خلاصه</p>
								<span>
									<span>59 تومان</span>
									<label>تعداد : </label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										افزودن به سبد خرید
									</button>
								</span>
								<p><b>دسترس پذیری:</b> در انبار</p>
								<p><b>وضعیت:</b> جدید</p>
								
							</div><!--/product-information-->
						</div>
						
						
					</div>
				</div>
						
						
			</div>
		</div>
				
	</section>
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
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>کتاب-</span>آنلاین</h2>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="address">
							<img src="<?php echo base_url();?>assets/images/home/map.png" alt="" />
							<p>آدرس</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/price-range.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
<style type="text/css">
	table td{
		float: right;
	}
	input,textarea{
		direction:rtl;
	}
</style>
</html>
