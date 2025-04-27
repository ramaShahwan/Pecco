<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>محترفو الهندسة والبناء</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- <link rel="icon" href="imghome/p2.jpg"  /> -->
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="assetss/re.png" rel="icon">
  <link href="assetss/re.png" rel="apple-touch-icon">
  <!-- <link href="imghome/p2.jpg" rel="icon">
  <link href="imghome/p2.jpg" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="libhome/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="libhome/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="libhome/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="libhome/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="libhome/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="libhome/animate/animate.min.css" rel="stylesheet">
  <link href="libhome/venobox/venobox.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Changa:wght@200..800&family=Noto+Sans+Arabic:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Noto+Sans+Arabic:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Changa:wght@200..800&family=Noto+Sans+Arabic:wght@100..900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Noto+Sans+Arabic:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Nivo Slider Theme -->
  <link href="csshome/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="csshome/stylee.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="csshome/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <style>
  .header-area {
    position: absolute;
    /* top: 0; */
    left: 0;
    width: 100%;
    height: auto;
    background: rgba(0, 0, 0, 0.40);
    z-index: 9;
}
.containerr {
    width: 100%;
    height: 100vh;
    background-color: rgba(0,0,0,0.4);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}
.content {
    text-align: center;
    z-index: 2;
}
.content h1 {
    font-size: 95px;
    color: #fff;
    margin-bottom: 50px;
}
.content a {
    font-size: 23px;
    color: #fff;
    text-decoration: none;
    border: 2px solid #fff;
    padding: 15px 25px;
    border-radius: 50px;
    transition: 0.3s;
}
.content a:hover {
    background-color: #fff;
    color: #000;
}
.video-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.video-container video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: none; /* إخفاء الفيديوهات في البداية */
}
.video-container video.active {
    display: block; /* عرض الفيديو النشط */
}
.toggle-button {
    position: absolute;
    bottom: 30px;
    left: 30px;
    z-index: 3;
    font-size: 24px;
    color: #fff;
    background-color: rgba(0, 0, 0, 0.5);
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 50%;
    transition: 0.3s;
}
.toggle-button:hover {
    background-color: rgba(255, 255, 255, 0.8);
    color: #000;
}
.background-clipp {
    background-image: url(../imghome/hh.png);
    background-position: right;
    background-size: contain;
    background-repeat: no-repeat;
    width: 50%;
    height: 100%;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 1;
}

/* استعلامات الوسائط للشاشات الصغيرة */
@media (max-width: 768px) {
    .imgg{
    max-width: 50% !important;
    height: auto;
    margin-left: 25%;
}
        .header-area {
        height: 60px !important;
        /* background: #000; */
    }
    .containerr{
        height: 300px;
    }
    .content h1 {
        font-size: 48px; /* تقليل حجم النص */
        margin-bottom: 30px;
    }
    .content a {
        font-size: 18px; /* تقليل حجم النص */
        padding: 10px 20px; /* تقليل حجم الزر */
        margin-right: 100px;
    }
    .toggle-button {
        font-size: 18px; /* تقليل حجم الأيقونة */
        padding: 8px 16px; /* تقليل حجم الزر */
        bottom: 20px; /* تعديل موقع الزر */
        left: 20px;
    }
    .background-clipp {

        background-size: cover;
    }
}

@media (max-width: 480px) {
    .imgg{
    max-width: 50% !important;
    height: auto;
    margin-left: 25%;
}
    .containerr{
        height: 300px;
    }
    .content h1 {
        font-size: 36px; /* تقليل حجم النص أكثر */
        margin-bottom: 20px;
    }
    .content a {
        font-size: 20px; /* تقليل حجم النص أكثر */
        padding: 8px 16px; /* تقليل حجم الزر */
    }
    .toggle-button {
        font-size: 16px; /* تقليل حجم الأيقونة أكثر */
        padding: 6px 12px; /* تقليل حجم الزر أكثر */
        bottom: 15px; /* تعديل موقع الزر */
        left: 15px;
    }
    .background-clipp {

        background-size: cover;
    }
}
      .section-one {
  /* background-color: blue; لون الخلفية للقسم الأول */
  /* padding: 20px; التباعد الداخلي */
  display: block; /* تأكد من أن القسم يأخذ العرض الكامل */
  width: 100%; /* عرض 100% */
  box-sizing: border-box; /* لتجنب مشاكل العرض */
}

.section-two {
  clear: both;
  display: block;
  width: 100%;
  box-sizing: border-box;
  position: relative; /* الوضع الافتراضي في البداية */
  top: 0;
  z-index: 999;
  transition: position 0.3s ease, top 0.3s ease;
}


/* .navbar-collapse {
  float: none;
} */
.kk{
    /* margin-left: 54.3px; */
    margin-left: 51.3px;
    margin-right: 47.2px;


}
.hh{
    display: none;
}
@media (max-width: 767px) {
    .imgg{
    max-width: 50% !important;
    height: auto;
    margin-left: 25%;
}
    .header-area.stick{
        padding-top: 10px;
    }
        .header-area {
        height: 60px !important;
        /* background: #000; */
    }
    .ggg{
   margin-top: 10px !important;
}
    .gg{
        display: none;
    }
    .hh{
        display: inline;
        font-size: 15px;
        color: #fff;

    }
    .content a {
        margin-right:0px;
    }
}
.nav1{
    color: #d3d1cc;
}
.nav1:hover{
    text-decoration: none;
    background-color: #d3d1cc !important;
    color: #87847e !important;
    padding-top: 10px !important;
    margin-top: 5px;
    padding-bottom: 10px !important;
    border-radius: 20px;

}
.ggg{
   margin-top: 0px;
}
.ibar{
    font-family: "Abril Fatface", serif;
  font-weight: 400;
  font-style: normal;
}
.header-area.stick {
    /* background-color: #436b94 !important; */
    background: linear-gradient(to left, #436b94, rgb(214, 224, 235));
    height: 70px !important;
    position: fixed !important;
    top: 0 !important;
    width: 100% !important;
    z-index: 1000 !important;
    padding-top: 0px;

}

    </style>
</head>

<body data-spy="scroll" data-target="#navbar-example">

<div class="section-one">
<div class=" rr gg"  style="padding:0px;background: linear-gradient(to left, #283848, rgb(187 191 197));   height: 50px;">
                <ul class="nav navbar-nav navbar-right">

                  <li>
<div style="    display: flex;"> <img src="assetss/re.png" alt="" style="width:60px; height:50px;">
<div><h3 style="color: #fff; font-size:20px;    margin-bottom: 5px; " class="ibar">Professionals</h3>
<p style="color: #fff;margin-top: -10px;"  class="ibar">for Engineering and Constructions and Training</p></div>

</div>



                  </li>
                  <li class="kk">
                    <a class="page-scroll tt text1 nav1" href="#" >    تسجيل الدخول </a>
                  </li>
                  <li class="kk">
                    <a class="page-scroll tt text1 nav1" href="#footer" >    تواصل معنا</a>
                  </li>
                  <li class="kk">
                    <a class="page-scroll tt text1 nav1" href="#about" >  حول الشركة</a>
                  </li>

                  <li class="kk">
                    <a class="page-scroll tt text1 nav1" href="{{ route('home') }}" >   الرئيسية</a>
                  </li>
                  <li class="kk" style="    margin-right: 20px;">
                    <div>
                    <input type="search" name="" id="" style="    width: 100px;    border: none;margin-top: 10px;border-radius: 20px;background: #c1c7c7;">
                    <i class="fa-solid fa-magnifying-glass fa-flip-horizontal" style="margin-left: -20px; color:#fff;"></i>
                    </div>

                  </li>



                </ul>
              </div>
</div>
<div class="section-two">
<div id="preloader"></div>

<header>
  <!-- header-area start -->
  <div id="sticker" class="header-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 ggg" >

          <!-- Navigation -->
          <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <a href="#" class="hh"><img src="assetss/re.png" alt="" style="width:50px; height:50px;"></a>
            <!-- <a href="#" class="hh"><i class="fa-solid fa-language" style="    margin-left: 15px;"></i></a> -->
            <!-- <a href="#" class="hh"><i class="fa-solid fa-right-to-bracket" style="   margin-left: 15px; margin-top: 20px;"></i></a> -->
            <a href="#footer" class="hh"><i class="fa-solid fa-phone" style="    margin-left: 40px;"></i></a>
            <a href="#about" class="hh"><i class="fa-solid fa-circle-info" style="    margin-left: 40px;"></i></a>


            <a href="#" class="hh"><i class="fa-solid fa-house" style="    margin-left: 40px;"></i></a>

              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                      <span class="sr-only">Toggle navigation</span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                  </button>


            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1 rr" id="navbar-example" style="padding:0px;">
              <ul class="nav navbar-nav navbar-right">

                <li>
                  <a class="page-scroll tt text1" href="#">تصميم مواقع الانترنت</a>
                </li>
                <li>
                  <a class="page-scroll tt text1" href="#">  البحث  والتطوير العلمي </a>
                </li>
                <li>
                  <a class="page-scroll tt text1" href="https://proengaqar.com">تسويق العقار   </a>
                </li>
                <li>
                  <a class="page-scroll tt text1" href="{{ route('execution') }}">إدارة المشاريع</a>
                </li>
                <li>
                  <a class="page-scroll tt text1" href="{{ route('train_index') }}">التدريب و التأهيل و التنمية</a>
                  <p class="page-scroll tt pp" style="    padding: 0px;
                     margin-top: -20px;
                    text-align: end;
                    margin-right: -95px;
                    color:white;
                  ">
                  <!-- <span style="    letter-spacing: 13px;">BIMAR    </span> <strong>بــــيــــمــــار</strong> -->
                </p>
                </li>
                <li>
                  <a class="page-scroll tt text1" href="{{ route('moudel') }}"> النمذجة وتطوير المشاريع</a>
                </li>
                <li class="active">
                  <a class="page-scroll tt text1" href="{{ route('design') }}"> الدراسات الهندسية والإشراف</a>
                </li>



              </ul>
            </div>
            <!-- navbar-collapse -->
          </nav>
          <!-- END: Navigation -->
        </div>
      </div>
    </div>
  </div>
  <!-- header-area end -->
</header>
</div>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div class="containerr">
        <div class="video-container">
            <video id="video1" class="active" autoplay loop muted plays-inline>
                <source src="imghome/video.mp4" type="video/mp4">
            </video>
            <video id="video2" autoplay loop muted plays-inline>
                <source src="imghome/video.mp4" type="video/mp4">
            </video>
            <video id="video3" autoplay loop muted plays-inline>
                <source src="imghome/video.mp4" type="video/mp4">
            </video>
        </div>
        <div class="content">
            <h1>محترفو الهندسة والبناء</h1>
            <a href="#">أقسامنا</a>
        </div>
        <!-- إضافة زر التبديل مع أيقونة سهم -->
        <button class="toggle-button" onclick="toggleVideo()">
            <i class="fas fa-arrow-right"></i> <!-- أيقونة السهم -->
        </button>
        <div class="contente">
            <div class="background-clipp"></div>
        </div>
    </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding" style="margin-bottom: -90px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2 class="text2">حول الشركة </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="assetss/re.png" alt="" class="imgg">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#" style="text-align: end;">
                <h4 class="sec-head text11" style="    font-size: 14px;font-weight: 800;">معلومات عامة عن الشركة </h4>
              </a>
              <p style="text-align: end;font-size: 16px;" class="text3">
             شركتنا تقدم خدمات الدراسات الهندسية وإدارة الــمشــاريع بجودة عاليــــة مدعومــــة بالكفاءات الفنيـــــة والتكنولوجيـــــة لتلبيـــة احتياجات عملائنا وتحقيق التميز في جميع المشاريع وتطوير العمل الهندسي
             </p>
              <ul>
                <li style="text-align: end;" class="text3">
                  مواكبة التطور في مجال العلوم الهندسية
                  <i class="fa fa-check"></i>
                </li>
                <li style="text-align: end;" class="text3">
                  التوسع في الدراسة والتنفيذ والإشراف
                  <i class="fa fa-check"></i>
                </li>
                <li style="text-align: end;" class="text3">
                   المساهمة في تأهيل الكوادر الهندسية
                  <i class="fa fa-check"></i>
                </li>
                <li style="text-align: end;" class="text3">
                  تقديم الاستشارات الهندسية
                  <i class="fa fa-check"></i>
                </li>
                <li style="text-align: end;" class="text3">
                  دعم الخريجين الجدد وتأهيلهم
                  <i class="fa fa-check"></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->
  <div id="services" class="services-area area-padding .about-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline services-head text-center" style="margin-bottom: 60px;">
        <h2 class="text2">أقسامنا</h2>
          </div>
        </div>
      </div>
    @include('home.servies')
</div>
</div>
  <!-- End Service area -->
    <!-- Faq area start -->
  <div class="faq-area area-padding" style="margin-bottom: 60px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2 class="text2">أهدافنا وشركاؤنا</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="faq-details">
            <div class="panel-group" id="accordion">
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" class="active text2" data-parent="#accordion" href="#check1" style="text-align: end;">
                                                <span class="acc-icons"></span>قيمنا
											</a>
										</h4>
                </div>
                <div id="check1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p style="text-align: end; font-size: 16px;" class="text11">
                      التميز والابتكار والتنوع والاحترام والتأثير
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->

              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check2" style="text-align: end;" class="text2">
                                                <span class="acc-icons"></span> رؤيتنا
											</a>
										</h4>
                </div>
                <div id="check2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p style="text-align: end;font-size: 16px;" class="text11">
                      نتطلع للوصول إلى تطبيق معايير الهندسة والإدارة الهندسية العالمية في سوريا ، للإسهام في إعادة الإعمار بالطرق الحديثة وتطبيق المواصفات القياسية العالمية                    </p>

                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check3" style="text-align: end;" class="text2">
                                                <span class="acc-icons"></span>رسالتنا
											</a>
										</h4>
                </div>
                <div id="check3" class="panel-collapse collapse ">
                  <div class="panel-body">
                    <p style="text-align: end;font-size: 16px;" class="text11">
                      تلتزم شركتنا بتقديم خدمات الدراسات الهندسية وإدارة المشاريع بجودة عالية مدعومة بالكفاءات الفنية والتكنولوجية لتلبية احتياجات عملائنا وتحقيق التميز في جميع المشاريع وتطوير العمل الهندسي
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Panel Default -->
              <!-- Panel Default -->
              <!-- <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#check4">
                                                <span class="acc-icons"></span>Maiores alias accusamus
											</a>
										</h4>
                </div>
                <div id="check4" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>
                      Redug Lefes dolor sit amet, consectetur adipisicing elit. Aspernatur, tempore, commodi quas mollitia dolore magnam quidem repellat, culpa voluptates laboriosam maiores alias accusamus recusandae vero aperiam sint nulla beatae eos.
                    </p>
                  </div>
                </div>
              </div> -->
              <!-- End Panel Default -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="tab-menu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#p-view-1" role="tab" data-toggle="tab" class="text2">بيلدينغ رانك</a>
              </li>
              <li>
                <a href="#p-view-2" role="tab" data-toggle="tab" class="text2">سيريا بيم تيك</a>
              </li>
              <li>
                <a href="#p-view-3" role="tab" data-toggle="tab" class="text2">أوجيني للطاقات </a>
              </li>
              <li>
                <a href="#p-view-4" role="tab" data-toggle="tab" class="text2">الشركة العامة للدراسات</a>
              </li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" id="p-view-1">
              <div class="tab-inner">
                <div class="event-content head-team" style="text-align: end;">
                  <h4 class="text2">بيلدينغ رانك</h4>
                  <p style="font-size: 16px;" class="text11">
                    تقييم حالة البناء وحالة العقار وحالة المنشأة والحالة الهيكيلية ونظام الطاقة ومراقبة الجودة وضمان الجودة
                  </p>
                  <p style="font-size: 16px;" class="text11">
                    خدمة فحص التسريبات والرطوبة والعفن وإدارة مشروع
                  </p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-2">
              <div class="tab-inner">
                <div class="event-content head-team" style="text-align: end;">
                  <h4 class="text2">سيريا بيم تيك</h4>
                  <p style="font-size: 16px;" class="text11">
                    نمذجة إنشائية ومعمارية للنادي الرياضي في الخليج العربي - الدوحة وبناء النموذج الإنشائي لبرج المكاتب التجارية في لوسيل - الدوحة
                  </p>
                  <p style="font-size: 16px;" class="text11">
                    نمذجة إنشائية ومعمارية لمبنى كليات الهندسة الجديد في جامعة قطر وبناء النموذج الإنشائي ، المعماري ، الميكانيكي والمهربائي للمشفى السوري الألماني في اللاذقية
                  </p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-3">
              <div class="tab-inner">
                <div class="event-content head-team" style="text-align: end;">
                  <h4 class="text2">أوجيني للطاقات </h4>
                  <p style="font-size: 16px;" class="text11">
                    دراسة وتصميم منظومة توليد 1 ميغاواط والربط مع الشبكة وبيع الفائض لفندق أفاميا في اللاذقية ودراسة وتصميم منظومة توليد 10 ميغاواط والربط مع الشيكة لمجموعة أصدقاء محردة - حماة
                  </p>
                  <p style="font-size: 16px;" class="text11">
                    دراسة وتصميم 30 كيلو واط لمدجنة و55 كيلو واط لمفقس الوسام في طرطوس وبرنامج الإدارة والمراقبة لمحطة توليد طرطوس
                  </p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-4">
              <div class="tab-inner">
                <div class="event-content head-team" style="text-align: end;">
                  <h4 class="text2">الشركة العامة للدراسات الهندسية</h4>
                  <p style="font-size: 16px;" class="text11">
                    الإشراف على مشروع إعادة تأهيل وترميم مبنى المكتبة الظاهرية بدمشق ومحطة لمعالجة مياه الصرف الصحي في مدينة حماة
                  </p>
                  <p style="font-size: 16px;" class="text11">
                    تخطيط وتنظيم ضواحي سكنية في مدينة اللاذقية وديكور داخلي لمكتب وزير المالية ومدير المالية بمبنى مديرية مالية مدينة دمشق
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end Row -->
    </div>
  </div>
  <!-- End Faq Area -->
   <!-- start pricing area -->
    <div >
    @include('home.job')
    </div>

  <!-- End pricing table area -->


  <!-- Start Footer bottom Area -->
  <footer id="footer">
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <!-- <h2><span>e</span>Business</h2> -->
                </div>

                <p style="font-size: 15px;text-align: end;">
                تقدم الشركة خدمات الدراسات الهندسية وإدارة المشاريع بجودة عالية مدعومة بالكفاءات الفنية والتكنولوجية لتلبية احتياجات عملائنا وتحقيق التميز في جميع المشاريع وتطوير العمل الهندسي
                </p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>للتواصل</h4>
                <!-- <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p> -->
                <div class="footer-contacts">
                  <p><span>Tel:</span>0966333221</p>
                  <p><span>Email:</span>info@proengtrain.com
                  </p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Facebook</h4>
                <div class="flicker-img">
                  <a href="#"><img src="imghome/portfolio/download (1).jpeg" alt="" style="width: 117px;height: 94px;"></a>
                  <a href="#"><img src="imghome/portfolio/download.jpeg" alt="" style="width: 117px;height: 94px;"></a>
                  <a href="#"><img src="imghome/portfolio/p6.png" alt="" style="width: 117px;height: 94px;"></a>
                  <a href="#"><img src="imghome/portfolio/photo_2024-07-28_16-39-29.jpg" alt="" style="width: 117px;height: 94px;"></a>
                  <a href="#"><img src="imghome/portfolio/photo_2024-07-28_16-43-17.jpg" alt="" style="width: 117px;height: 94px;"></a>
                  <a href="#"><img src="imghome/portfolio/Screenshot (168).png" alt="" style="width: 117px;height: 94px;"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <!-- <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p> -->
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              <a href="{{ route('home') }}">محترفو الهندسة والبناء</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script>
window.onscroll = function() {
  var sectionOneHeight = document.querySelector('.section-one').offsetHeight;
  var sectionTwo = document.querySelector('.section-two');

  if (window.pageYOffset > sectionOneHeight) {
    sectionTwo.style.position = 'fixed';
    sectionTwo.style.top = '0';
  } else {
    sectionTwo.style.position = 'relative';
    sectionTwo.style.top = 'initial';
  }
};

    </script>
  <!-- JavaScript Libraries -->
  <script src="libhome/jquery/jquery.min.js"></script>
  <script src="libhome/bootstrap/js/bootstrap.min.js"></script>
  <script src="libhome/owlcarousel/owl.carousel.min.js"></script>
  <script src="libhome/venobox/venobox.min.js"></script>
  <script src="libhome/knob/jquery.knob.js"></script>
  <script src="libhome/wow/wow.min.js"></script>
  <script src="libhome/parallax/parallax.js"></script>
  <script src="libhome/easing/easing.min.js"></script>
  <script src="libhome/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="libhome/appear/jquery.appear.js"></script>
  <script src="libhome/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="jshome/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>
