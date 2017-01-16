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
                            <a href="index"><img src="<?php echo base_url();?>assets/images/home/logo.png" alt="" height="50" width="100"></a>
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
                                            font-weight: 300;padding: 10px; margin-top: 0px;" onclick=save();>بروزرسانی وضعیت و مکان</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-payment" id="tableTitle" style="direction: rtl;">
                <h2>اطلاعات  و وضعیت خرید</h2>
                <input id="place" style="margin-bottom: 10px;" placeholder="مکان" type="text" disabled="">
                <input id="sts" style="margin-bottom: 10px;" placeholder="مکان" type="text" disabled="">

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
    
    document.getElementById("place").style.display="none";
    document.getElementById("sts").style.display="none";


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
        option.appendChild(document.createTextNode(data[i]["invoiceID"]));
        selectInvoiceID.appendChild(option);
      }
     }, "json");

  }

 function loadInfo()
  {
     document.getElementById("place").placeholder = "";
    document.getElementById("sts").placeholder = "";

     document.getElementById("changed_place").value="";
     document.getElementById("changed_status").value="-- کد رهگیری --";

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
            //var row = document.createElement('tr');
            
            var name = data[i].name;
            var writer = data[i].writer;
            var category = data[i].category;
            var publishedDate = data[i].publishedDate;
            var publisher = data[i].publisher;
            var price = data[i].price;
            var counter = data[i].counter;
            var place;
            var sts;

            var total = price*counter;

            $.post('statusadmin/loadPlace', {
             'invoiceID' :  selectedID},
            function(data2) {

                place = data2[0].place;
                sts = data2[0].sts;

                document.getElementById("place").placeholder = place;
                document.getElementById("place").style.display="block";
                document.getElementById("sts").placeholder = sts;
                document.getElementById("sts").style.display="block";


            }, "json");






           
            var newRowContent = "<tr align=\"center\"><td style=\" padding-right:190px; margin-left: 200px;\"  class=\"cart_product\"><a>" + name + "</a></td> <td c style=\"padding-right: 30px;\" lass=\"cart_description\"><p>نام نویسنده: " + writer+ "</p><p>دسته بندی: " + writer + "</p><p>سال انتشار: " + publishedDate + "</p><p>ناشر: " + publisher + "</p></td><td style=\"padding-right: 180px;\" class=\"cart_price\"><p>" + price + " تومان" + "</p></td><td style=\"padding-right:140px;\" class=\"cart_quantity\"><div class=\"cart_quantity_button\"><input class=\"cart_quantity_input\" type=\"text\" name=\"quantity\" value= " + counter + " size=\"2\"></div></td><td style=\"padding-right:115px;\" class=\"cart_total\"><p class=\"cart_total_price\">" + total + " تومان"+ "</p></td></tr>";

            $(newRowContent).appendTo($("#tableInvoiceDetail"));  
        }

     }, "json");
    }
  }
  function save()
  {
    var place=document.getElementById("changed_place").value;
    var status = document.getElementById("changed_status").value;
    var invoiceID = document.getElementById("invoiceID").value;
      
   document.getElementById("place").placeholder = place;
      document.getElementById("sts").placeholder = status;


    if((invoiceID!="-- کد رهگیری --") && (place != "") && (status!="-- وضعیت --"))
    {
        
        $.post('statusadmin/updateInfo', {
        'place' : place , 'status' : status, 'invoiceID':invoiceID},
         function(data) {   

        }, "json");
        
        if(status == "تحویل داده شده")
        {
            $("#invoiceID option:selected").remove();
        }
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


