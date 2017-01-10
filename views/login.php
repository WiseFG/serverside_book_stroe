
<?php 
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';


sec_session_start();

if (login_check($mysqli) == true) {
    header("Location: home");
} else {
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
    <!--  add this  -->
    <link href="<?php echo base_url();?>assets/css/myStyle.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-57-precomposed.png">
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
                                <li><a href="login"><i class="fa fa-lock"></i>ورود</a></li>
                                <li><a href="profile"><i class="fa fa-user"></i> حساب کاربری</a></li>
                                <li><a href="checkout"><i class="fa fa-crosshairs"></i> صورت حساب</a></li>
                                <li><a href="cart"><i class="fa fa-shopping-cart"></i> سبد خرید</a></li>
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
                                <li><a href="home">خانه</a></li>
                                <li><a href="shop">محصولات</a></li>
                                <li><a href="search">جستجو</a></li>
                                <li><a href="contact_us">تماس با ما</a></li>
                                <li><a href="about">درباره ما</a></li>
                        
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!--/header-bottom-->
	</header><!--/header-->

	<section id="form" style="margin-top:50px;m"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1"style="direction: rtl">
					<div class="login-form"><!--login form-->
						<h2>ورود به حساب کاربری</h2>
						<form action="login/pro_login" method="post">
							<input type="text" placeholder="نام کاربری" name="login_user" id="login_user"/>
							<input type="text" placeholder="رمز عبور" name="login_pass" id="login_pass"/>
							
							<button type="submit" class="btn btn-default" style="width:100px;">ورود</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">یا</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form" style="direction: rtl;"><!--sign up form-->
						<h2>ایجاد حساب کاربری</h2>
						<form action="login/register" method="post">
							<input type="text" placeholder="نام" id="reg_name" name="reg_name" />
							<input type="text" placeholder="نام خانوادگی" id="reg_fname" name="reg_fname" />
                            <input type="text" placeholder="نام کاربری" id="reg_user" name="reg_user" />
                            <input type="password" placeholder="رمز عبور" id="reg_pass" name="reg_pass" />
                            
                            <input type="email" placeholder="آدرس ایمیل" id="reg_mail" name="reg_mail" />
                            <input type="text" placeholder="تلفن" id="reg_tel" name="reg_tel" />
                            <input type="text" placeholder="آدرس" id="reg_address" name="reg_address" />
                            
<!--
                              <span style="float:right">
                                    <label class="col-md-10 control-label" style="right:15px;">جنسیت</label>
                                    <div class="col-md-6" style="right:20px;">
                                        <div class="radio col-md-2" style="right:20px;">
                                          <input type="radio" name="hosting" value="yes" />
                                            <label style="float:right;position:relative;right: -20px;">
                                                 آقا
                                            </label>
                                        </div>
                                        <div class="radio col-md-2" style="right:20px;">
                                          <input type="radio" name="hosting" value="no" />
                                            <label style="float:right;position:relative;right: -20px;">
                                                خانم
                                            </label>

                                        </div>
                                    </div>
                              </span>
-->






							<button type="submit" class="btn btn-default" style="width:100px;">ثبت نام</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
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
				
		<div class="footer-bottom">
        </div>
		
	</footer><!--/Footer-->
	

  
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/price-range.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>
