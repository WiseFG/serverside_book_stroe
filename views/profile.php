
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
    <title>Profile | E-Booker</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/profile-stylesheet.css" rel="stylesheet">
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
				<li><a href="statusadmin"><i class="fa fa-map-marker"></i> رهگیری</a></li>

                                <?php 
                                sec_session_start();
                                if (login_check($mysqli) == true) {?>
                                <li><a href="login/logout"><i class="fa fa-shopping-cart"></i>خروج</a></li>
                                <?php } ?>
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

<section>

<div class="container" style="margin-top: 30px;" >
<div class="profile-head">
<span class=" col-sm-4 " style="float:right">
<img src="" class="img-responsive" />
<h6>نام شخص</h6>
</span><!--col-md-4 col-sm-4 col-xs-12 close-->


<span class=" col-sm-5 " style="direction:rtl;float:right;">
<h5>نام شخص</h5>
<ul>
<li><span class="glyphicon glyphicon-home" style="margin-left:15px;"></span> <a href="#"  style="margin-right:10px;" title="call">آدرس شخص</a></li>
<li><span class="glyphicon glyphicon-phone" style="margin-left:15px;"></span> <a href="#"  style="margin-right:10px;" title="call">تلفن شخص</a></li>
<li><span class="glyphicon glyphicon-envelope" style="margin-left:15px;"></span><a href="#" style="margin-right:10px;" title="mail">ایمیل شخص</a></li>

</ul>


</span><!--col-md-8 col-sm-8 col-xs-12 close-->




</div><!--profile-head close-->
</div><!--container close-->


<div id="sticky" class="container" >
    
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-menu" role="tablist" style="float:right;">
      <li class="active">
          <a href="#profile" role="tab" data-toggle="tab">
              <i class="fa fa-male"></i> مشخصات
          </a>
      </li>
      <li><a href="#change" role="tab" data-toggle="tab" onclick="fillEdit()">
          <i class="fa fa-key"></i> ویرایش مشخصات
          </a>
      </li>
    </ul><!--nav-tabs close-->
    
    <!-- Tab panes -->
    <div class="tab-content">
    <div class="tab-pane fade active in" id="profile">
    <div class="container">
<div class="col-sm-11" style="float:left;">

</div><!--col-sm-12 close-->
<br clear="all" />
<div class="row" style="float:right;direction:rtl;margin-right:30px;">
<div class="col-md-12">
<h4 class="pro-title">مشخصات</h4>
</div><!--col-md-12 close-->


<div class="col-md-6">

<div class="table-responsive responsiv-table" >
  <table class="table bio-table">
      <tbody>

    </tbody>
  </table>
  </div><!--table-responsive close-->
</div><!--col-md-6 close-->

<div class="col-md-6" style="width:90%;">

<div class="table-responsive responsiv-table" >
  <table class="table bio-table">
      <tbody>
        <tr>      
        <td>نام :</td>

        <td id="name"></td>
     </tr>
         <tr>      
        <td>نام خانوادگی :</td>

        <td id="fname"></td>
     </tr>
     <tr>    
        <td>ایمیل :</td> 
        <td id="email"></td>   
     </tr>
     <tr>    
        <td>تلفن :</td>   
         <td id="tel"></td>   
    </tr>
     <tr>  
        <td>آدرس :</td>
         <td id="address"></td>
     </tr>
     
    </tbody>
  </table>
  </div><!--table-responsive close-->
</div><!--col-md-6 close-->

</div><!--row close-->




</div><!--container close-->
</div><!--tab-pane close-->
      
      
<div class="tab-pane fade" id="change">
<div class="container fom-main">
<div class="row">
<div class="col-sm-12" >
<h2 class="register">ویرایش مشخصات</h2>
</div><!--col-sm-12 close-->

</div><!--row close-->
<br />
<div class="row">

<form class="form-horizontal main_form text-left" action=" " method="post"  id="contact_form">
<fieldset>


<div class="form-group col-md-12">
  <!--<label class="col-md-10 control-label">نام</label>  -->
  <div class="col-md-12 inputGroupContainer">
  <div class="input-group" >
  <input  name="first_name" id="changed_name" placeholder="نام" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group col-md-12">
 <!-- <label class="col-md-10 control-label" >نام خانوادگی</label> -->
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <input name="last_name" id="changed_last_name" placeholder="نام خانوادگی" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group col-md-12" >
  <!--<label class="col-md-10 control-label">ایمیل</label>  -->
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <input name="email" id="changed_email" placeholder="ایمیل" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group col-md-12" >
 <!-- <label class="col-md-10 control-label">شماره تلفن</label>  -->
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <input name="phone" id="changed_tel" placeholder="شماره تلفن" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
 <div class="form-group col-md-12" >
 <!-- <label class="col-md-10 control-label">آدرس</label>-->
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
            <textarea class="form-control" name="comment" id="changed_address" placeholder="آدرس"></textarea>
  </div>
  </div>
</div>







<!-- Button -->
<div class="form-group col-md-2" style="float:right; position: relative; right: 600px;">
  <div class="col-md-6">
    <button type="submit" class="btn btn-warning submit-button" onclick="save()" >ذخیره</button>
    <button type="submit" class="btn btn-warning submit-button" >لغو</button>

  </div>
</div>
</fieldset>
</form>
</div><!--row close-->
</div><!--container close -->          
</div><!--tab-pane close-->
</div><!--tab-content close-->
</div><!--container close-->

</section><!--section close-->

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
  <script type="text/javascript">
 
     var username=<?php echo json_encode(get_username()); ?> 
     
  window.onload = function (){
    loadInfo();
  }

  function fillEdit()
  {
     $.post('profile/select', {
      'username' : username },
      function(data) {
      document.getElementById("changed_name").value=data[0].name;
      document.getElementById("changed_last_name").value=data[0].fname;
      document.getElementById("changed_address").value=data[0].address;
      document.getElementById("changed_email").value=data[0].email;
      document.getElementById("changed_tel").value=data[0].phoneNumber;
     }, "json");
   
          
  }
  function save()
  {
      
      var name=document.getElementById("changed_name").value;
      var fname = document.getElementById("changed_last_name").value;
      var address = document.getElementById("changed_address").value;
      var email = document.getElementById("changed_email").value;
      var tel = document.getElementById("changed_tel").value;
    $.post('profile/update', {
     'username' : username , 'name' : name, 'fname' : fname, 'address' : address, 'email' : email, 'tel' : tel },
      function(data) {
    
     

     }, "json");
    loadInfo();

  }
  function loadInfo()
  {
     $.post('profile/select', {
      'username' : username },
      function(data) {
      document.getElementById("name").innerHTML=data[0].name;
      document.getElementById("fname").innerHTML=data[0].fname;
      document.getElementById("address").innerHTML=data[0].address;
      document.getElementById("email").innerHTML=data[0].email;
      document.getElementById("tel").innerHTML=data[0].phoneNumber;
     }, "json");

  }
  
  </script>


    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
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
