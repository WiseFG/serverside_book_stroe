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
    <title>Statusadmin | E-Shopper</title>
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
                            <a href="index.html"><img src="<?php echo base_url();?>assets/images/home/logo.png" alt="" height="50" width="100"></a>
                        </div>
                        
                    </div>
                   <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="login.html"><i class="fa fa-lock"></i>ورود</a></li>
                                <li><a href="profile.html"><i class="fa fa-user"></i> حساب کاربری</a></li>
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> صورت حساب</a></li>
                                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> سبد خرید</a></li>
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
                                <li><a href="index.html">خانه</a></li>
                                <li><a href="shop.html">محصولات</a></li>
                                <li><a href="search.html">جستجو</a></li>
                                <li><a href="contact_us.html">تماس با ما</a></li>
                                <li><a href="about.html">درباره ما</a></li>
                        
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->


    <section id="cart_items">
        <div class="container">

            <div class="shopper-informations">
                <div class="row" style="direction: rtl;">
                    <div class="col-sm-3" style="float: right;">
                        <div class="shopper-info">
                            <div class="radio" >
                                <label style="font-size:17px;">پیگیری وضعیت خرید</label>
                            </div>
                            
                            <form>
                                <select id="invoiceID" style="height:39px; margin-bottom: 10px;" onchange="loadInfo()">
                                    <option>-- کد رهگیری --</option>
                                    <option>1</option>
                                    <option>2</option>

                                </select>

                        
                            </form>
                            
                        </div>
                    </div>
                    <div class="col-sm-3 clearfix" style="float: right;" >
                        <div class="bill-to">
                            <div class="shopper-info">
                                <form>
                                    <select id="changed_status" style="height:39px; margin-bottom: 10px; margin-top: 44px;">
                                        <option>-- وضعیت --</option>
                                        <option>در حال بررسی</option>
                                        <option>آماده ارسال</option>
                                        <option>ارسال شده</option>
                                        <option>تحویل داده شده</option>
                                    </select>
                                    <input id="changed_place" type="text" style="margin-bottom: 10px;" placeholder="مکان">
                                        <a class="btn btn-default update" style="width: 100%;
                                            font-weight: 300;padding: 10px; margin-top: 0px;" onclick="save()">بروزرسانی وضعیت و مکان</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-payment" id="tableTitle" style="direction: rtl;">
                <h2>اطلاعات  و وضعیت خرید</h2>
            </div>

            <div class="table-responsive cart_info" style="direction: rtl;" id="tableInvoiceDetail">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu" align="center">
                            <td class="image">کتاب</td>
                            <td class="description">توضیحات</td>
                            <td class="price">قیمت</td>
                            <td class="quantity">تعداد</td>
                            <td class="total">مجموع</td>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>

                </table>
                <div id="totalTable">
                    <h2 class="title text-center">صورت حساب</h2>

                    <table class="table table-condensed total-result" style="margin-right:200px;">

                        <tr>
                            

                            <td><font size="5">جمع سبد خرید</font></td>
                            <td><font size="5">۵۹۰۰۰ تومان</font></td>
                        </tr>
                        <tr class="shipping-cost">
                            
                            <td><font size="5">هزینه حمل و نقل</font></td>
                            <td><font size="5">رایگان</font></td>
                        </tr>
                        <tr>
                            
                            <td><font size="5">مجموع</font></td>
                            <td><span><font size="5">۶۰۰۰۰ تومان</font></span></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </section> <!--/#cart_items-->

    
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
      
  window.onload = function (){

    document.getElementById("totalTable").style.display="none";
    
    
    


    loadInvoiceID();

  } 

function loadInvoiceID()
  {

     $.post('statusadmin/loadInvoiceID',
      function(data) {
      for(var i=0; i<data.length; i++)
      {
        var selectInvoiceID = document.getElementById("invoiceID");
        var option = document.createElement("option");
        option.value = data[i].invoiceID;
        selectInvoiceID.appendChild(option);
      }
     }, "json");

  }

 function loadInfo()
  {
     if(document.getElementById("invoiceID").value != "-- کد رهگیری --")
     {
        $("#tableInvoiceDetail tbody").empty();


        var selectedID = document.getElementById("invoiceID").value;
        $.post('statusadmin/loadInfo', {
        'invoiceID' :  selectedID},
        function(data) {


        var table_invoice = document.getElementById("tableInvoiceDetail");

        for(var i=0; i<data.length; i++)
        {
            var row = document.createElement('tr');
            
            var photo = document.createElement('td');
            var writer = document.createElement('td');
            var category = document.createElement('td');


            var photoText = document.createTextNode(data[i].photo);
            photo.appendChild(photoText);
        
            var writerText = document.createTextNode(data[i].writer);
            photo.appendChild(writerText);

            var categoryText = document.createTextNode(data[i].category);
            photo.appendChild(categoryText);

            row.appendChild(photo);
            row.appendChild(writer);
            row.appendChild(category);

            table_invoice.appendChild(row);
        }
     }, "json");
    }
  }
  function save()
  {
    var place=document.getElementById("changed_place").value;
    var status = document.getElementById("changed_status").value;
    var invoiceID = document.getElementById("invoiceID").value;
      
    if((invoiceID!="-- کد رهگیری --") && (place != "") && (status!="-- وضعیت --"))
    {
        
        $.post('statusadmin/update', {
        'place' : place , 'status' : status},
         function(data) {   

        }, "json");
        
        if(status == "تحویل داده شده")
        {
            $("#invoiceID option:selected").remove();
        }
    
        loadInfo();
    }

  }

 
  
  
  </script>


    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>


