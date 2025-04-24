@extends('layout.master')
@section('content')
<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
<link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css" >
<style>
        .popup .overlay{
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100vw;
            height: 100vw;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
            display: none;
        }
        .popup .content{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%) scale(0);
            background: #fff;
            width: 450px;
            height: 220px;
            z-index: 500;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 140px 0px 110px;
                        box-shadow: inset 1px 1px 14px 0px rgb(109 177 188);
        }
        .popup .close-btn{
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 20px;
            width: 30px;
            height: 30px;

            font-size: 35px;
            font-weight: 600;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
        }
        .popup.active .overlay{
            display: block;
        }
        .popup.active .content{
            transition: all 300ms ease-in-out;
            transform: translate(-50%,-50%) scale(1);

        }
        .ggd{
            width: 540px !important;
        }
        @media (min-width:768px){
            .ggd{
            width: 450px;
        }
        }
        @media (min-width:379px) and (max-width:265px){
            .ggd{
            width: 450px ;
        }
}
@media (max-width:768px) {}
.ggd{
            width: 350px !important;
        }
        .popup .content{
            width: 350px;
        }
        .half-width-testimonial {
    background-image: none;
    margin-bottom: 11% !important;
}
.fables-after-overlay::after {
    background-color: rgb(255 255 255 / 80%);
}
.white-color {
    color: #6d7985;
}
.fables-second-text-color {
    color: #3d93a1;
}
.fables-third-text-color {
    color: #737f8a;
}
    </style>
<!--Video Section-->
<!-- <div class="containerr">
    <div class="video-container">

        <video id="video1" class="active" autoplay loop muted playsinline>
            <source src="{{asset('assetss/H19.mp4')}}" type="video/mp4">
        </video>


        <video id="video2" autoplay loop muted playsinline>
            <source src="{{asset('assetss/Timeline 1.mp4')}}" type="video/mp4">
        </video>


        <div class="fables-header fables-after-overlay overlay-lighter index-traingle bg-rules" style="background-image: url(assetss/p6.png);" id="video3">

            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-7 mr-auto index-carousel">
                          <div class="owl-carousel owl-theme default-carousel nav-0 z-index mt-md-4 mt-xl-5 pt-md-4 pt-xl-5 dots-0 pb-md-5">
                              <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                  <h1 class="fables-main-text-color font-weight-bold mb-1">CONSULTING SERVICE FOR ALL
                                     <span class="fables-second-text-color">KIND OF BUSINESSES</span>
                                  </h1>
                                  <p class="fables-forth-text-colo mb-3 light-font fables-header-slider-details">
                                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                  </p>
                                  <a href="#" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-3 px-md-4 py-2 bg-hover-transparent fables-second-hover-color">Our Services</a>
                                  <a href="#" class="btn fables-second-border-color fables-second-text-color rounded-0 px-3 px-md-4 py-2 fables-second-hover-background-color">Learn More</a>
                              </div>
                              <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".8s">
                                  <h1 class="fables-main-text-color font-weight-bold mb-1">CONSULTING SERVICE FOR ALL
                                     <span class="fables-second-text-color">KIND OF BUSINESSES</span>
                                  </h1>
                                  <p class="fables-forth-text-colo mb-3 light-font fables-header-slider-details">
                                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                  </p>
                                  <a href="#" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-3 px-md-4 py-2 bg-hover-transparent fables-second-hover-color">Our Services</a>
                                  <a href="#" class="btn fables-second-border-color fables-second-text-color rounded-0 px-3 px-md-4 py-2 fables-second-hover-background-color">Learn More</a>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <button class="toggle-button left" onclick="toggleVideo('prev')">
        <i class="fas fa-arrow-left"></i>
    </button>
    <button class="toggle-button right" onclick="toggleVideo('next')">
        <i class="fas fa-arrow-right"></i>
    </button>
</div> -->


<!--Video Section Ends Here-->
<!-- <div class="container">
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
            <h2 class="fables-second-text-color font-35 font-weight-bold my-3 mt-md-5 mb-md-4">BIMAR  </h2>

        </div>
    </div>
    <div class="col-12 my-4 wow fadeIn" data-wow-delay="1.8s">

       <div class="position-relative">
    <img src="{{asset('assetss/custom/images/conference-room-768441_1920.jpg')}}" alt="" class="w-100">
    <div class="demo-gallery-poster fables-main-gradient" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <video controls style="width: 100%; height: 100%; object-fit: cover;">
            <source src="{{asset('assetss/Untitled (9).mp4')}}" type="video/mp4">
            متصفحك لا يدعم عرض الفيديو.
        </video>
    </div>
</div> -->



   <!-- </div>
</div> -->


<!-- Start page content -->


       <div class="fables-testimonial fables-after-overlay py-4 py-md-5 my-4 my-lg-5 half-width-testimonial bg-rules">
            <div class="container z-index position-relative">
                <div class="row">
                    <div class="col-12 col-md-6 wow fadeIn" data-wow-duration="2.5s" data-wow-delay=".4s" style="text-align: end;">
                           <p class="white-color font-25 mb-2"> المنصة التدريبية</p>
                           <h2 class="fables-second-text-color font-35 font-weight-bold">  <span class="white-color"> معلومات حول </span>المنصة</h2>
                           <p class="fables-third-text-color mt-4 mb-4">
                              تقدم المنصة مجموعة من البرامج التدريبية والتي تحتوي على كورسات تدريبي يستطيع المستخدم الدخول الى المنصة والتسجيل على الكورسات التي يريدها وحضورها عن بعد عن طريق احدى المنصات
                           </p>
                           <!-- <div class="owl-carousel owl-theme dots-0 nav-default" id="fables-testimonial-carousel">
                              <div class="text-center">
                                   <div>
                                      <div class="image-container shine-effect d-inline-block rounded-circle">
                                          <img src="assets/custom/images/testimonial-img.png" alt="Fables Template" class="fables-testimonial-carousel-img my-0 mx-auto rounded-circle">
                                      </div>
                                      <h3 class="font-14 semi-font  white-color mt-3">Billy Richards</h3>
                                      <h3 class="font-13 font-italic white-color mt-2 mb-4">Chief Manager, Simba Co</h3>
                                   </div>
                                   <div class="fables-testimonial-carousel-item fables-rounded p-3">
                                        <div class="fables-testimonial-detail font-15 font-italic white-color position-relative">
                                            No matter what issue or questions pops up, you are always there to
                                            assist me. Thank you so much for your excellent assistance and great
                                            customer support through years.
                                        </div>
                                   </div>
                              </div>
                              <div class="text-center">
                                   <div>
                                      <div class="image-container shine-effect d-inline-block rounded-circle">
                                          <img src="assets/custom/images/testimonial-img.png" alt="Fables Template" class="fables-testimonial-carousel-img my-0 mx-auto rounded-circle">
                                      </div>
                                      <h3 class="font-14 semi-font  white-color mt-3">Billy Richards</h3>
                                      <h3 class="font-13 font-italic white-color mt-2 mb-4">Chief Manager, Simba Co</h3>
                                   </div>
                                   <div class="fables-testimonial-carousel-item fables-rounded p-3">
                                        <div class="fables-testimonial-detail font-15 font-italic white-color position-relative">
                                            No matter what issue or questions pops up, you are always there to
                                            assist me. Thank you so much for your excellent assistance and great
                                            customer support through years.
                                        </div>
                                   </div>
                              </div>


                     </div> -->

                    <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopuo()"><i class="las la-times-circle"></i></div>

            <a href="{{ route('login_trainee') }}" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2  btn-bg-hover " style="DISPLAY: block;
    margin-top: 50px;">
                        <span class="white-color-hover"> متدرب</span>
                    </a>
                    <a href="{{ route('login_user') }}" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2  btn-bg-hover " style="DISPLAY: block;
   " >
                        <span class="white-color-hover"> موظف</span>
                    </a>

        </div>
    </div>

                    <button onclick="togglePopuo()" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2  btn-bg-hover ggd" style="display: block;margin-bottom: 20px; margin-top: 160px;color: white;background-color: rgb(109 177 188) !important;">تسجيل الدخول </button>
                    <a href="{{route('trainee_register_get')}}" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2  btn-bg-hover ggd" style="display: block;margin-bottom: 20px;color: white;background-color: rgb(109 177 188) !important;">
                        <span class="white-color-hover"> إنشاء حساب للمتدرب</span>
                    </a>
                    </div>
                    <div class="col-12 col-md-6 wow fadeIn mt-4 mt-md-5 mt-lg-0" data-wow-duration="2.5s" data-wow-delay=".4s">
                       <div class="position-relative image-container zoomIn-effect">
                              <img src="{{asset('assetss/custom/images/index-video.jpg')}}" alt="" class="img-fluid">
                              <div class="demo-gallery-poster fables-main-gradient">
                                <a data-fancybox href="https://www.youtube.com/watch?v=meBbDqAXago">
                                   <img src="{{asset('assetss/custom/images/play-button.png')}}" alt="play button" class="img-fluid">
                                </a>
                             </div>
                        </div>

                    </div>
                </div>

            </div>
       </div>
     

    </div>



    <div class="container">
        <div class="row overflow-hidden">
            <div class="col-12 col-md-10 offset-md-1 mt-5">

                <div class="mt-0 mb-5 my-md-5">
                    <h3 class="font-35 font-weight-bold fables-main-text-color text-center">الشكاوى</h3>
                    <p class="mt-3 fables-forth-text-color  text-center">                        تسعى الشركة لتكون مرجعاً موثوقاً ومعتمداً في مجال الرقمنة والهندسة من خلال تقديم برامج تدريبية شاملة ومبتكرة                                                  تسعى الشركة لتكون مرجعاً موثوقاً ومعتمداً في مجال الرقمنة والهندسة من خلال تقديم برامج تدريبية شاملة ومبتكرة

                </p>

                </div>


            </div>
        </div>

    <div class="row mb-4 mb-md-5 overflow-hidden">
            <div class="col-12 col-sm-6 wow fadeInLeft">
                <form class="fables-contact-form">
                  <div class="form-group">
                    <input type="text" class="form-control p-3"  placeholder="الأسم" style="text-align: end;border-radius: 20px;">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control p-3" placeholder="البريد الالكتروني" style="text-align: end;border-radius: 20px;">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control p-3" placeholder="الموضوع" style="text-align: end;border-radius: 20px;">
                  </div>
                  <div class="form-group">
                      <textarea class="form-control  p-3" placeholder="الرسالة" rows="3" style="text-align: end;border-radius: 20px;"></textarea>
                  </div>
                  <button type="submit" class="btn fables-second-background-color text-white btn-block p-3" style="border-radius: 20px;">ارسال</button>
                </form>
            </div>
            <div class="col-12 col-lg-6 px-6 py-3 py-md-5 wow fadeInRight" style="        margin-top: -30px;text-align: end;" data-wow-delay="1s" data-wow-duration="1.5s">
                <h2 class="font-30 font-weight-bold fables-second-text-color">الاسئلة الشائعة؟ </h2>
                <br>
                <!-- <p class="fables-main-text-color font-14 my-3">
                   أن تصبح بيمار للتطوير والتدريب الشركة الرائدة في مجال التدريب والتطوير الرقمي والهندسي على المستوى الإقليمي،وتوفير الحلول التدريبية الأكثر تطوراً لدعم الكفاءات المهنية والشركات في العالم العربي
               </p> -->
                <div id="accordion">
                      <div class="card border-0 mb-2">
                        <div class="card-header p-0 border bg-transparent rounded-0" id="headingOne">
                          <h5 class="mb-0 position-relative">
                            <span class="fables-second-background-color white-color d-inline-block
   position-absolute fables-lus-icon pt-2 text-center">
                                <i class="fas fa-plus"></i>
                            </span>
                            <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pr-6 pt-2 pb-2 w-100 border-0 text-truncate" style="text-align: end;" data-toggle="collapse" data-target="#collapseOneo" aria-expanded="true" aria-controls="collapseOneo">
                                كيف اضبط الاعدادات؟                            </button>
                          </h5>
                        </div>

                        <div id="collapseOneo" class="collapse show" aria-labelledby="headingOneo" data-parent="#accordion">
                          <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pr-6 ">
                           تسعى الشركة لتكون مرجعاً موثوقاً ومعتمداً في مجال الرقمنة والهندسة من خلال تقديم برامج تدريبية شاملة ومبتكرة                           </p>
                       </div>
                        </div>
                      </div>
                      <div class="card border-0 mb-2">
                        <div class="card-header bg-transparent p-0 border rounded-0" id="headingTwo">
                          <h5 class="mb-0 position-relative">
                            <span class="fables-second-background-color white-color d-inline-block
   position-absolute fables-lus-icon pt-2 text-center">
                                <i class="fas fa-plus"></i>
                            </span>
                            <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pr-6 pt-2 pb-2 w-100 border-0 text-truncate collapsed" style="text-align: end;" data-toggle="collapse" data-target="#collapseTwoo" aria-expanded="false" aria-controls="collapseTwoo">
                                كيف اضبط الاعدادات؟
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwoo" data-parent="#accordion">
                          <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pr-6 ">
                           بناء شراكات استراتيجية مع الجامعات والمؤسسات الدولية لتعزيز جودة البرامج المقدمة وزيادة الاعتراف الأكاديمي بها                       </p>
                       </div>
                        </div>
                      </div>
                      <div class="card border-0 mb-2">
                       <div class="card-header p-0 border bg-transparent rounded-0" id="headingfour">
                         <h5 class="mb-0 position-relative">
                           <span class="fables-second-background-color white-color d-inline-block
   position-absolute fables-lus-icon pt-2 text-center">
                               <i class="fas fa-plus"></i>
                           </span>
                           <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pr-6 pt-2 pb-2 w-100 border-0 text-truncate collapsed" style="text-align: end;" data-toggle="collapse" data-target="#collapseFouro" aria-expanded="false" aria-controls="collapseFouro">
                            كيف اضبط الاعدادات؟
                           </button>
                         </h5>
                       </div>
                       <div id="collapseFouro" class="collapse" aria-labelledby="headingfouro" data-parent="#accordion">
                         <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pr-6 ">
   تحقيق الاعتراف الدولي بجودة البرامج التدريبية والتطويرية المقدمة من قبل بيمار ،وأن تصبح بيمار المرجع الأول في تقديم الحلول التدريبية للشركات والمؤسسات الكبيرة في المنطقة                      </div>
                       </div>
                     </div>
                      <div class="card border-0 mb-2">
                        <div class="card-header p-0 border bg-transparent rounded-0" id="headingThree">
                          <h5 class="mb-0 position-relative">
                            <span class="fables-second-background-color white-color d-inline-block
   position-absolute fables-lus-icon pt-2 text-center">
                                <i class="fas fa-plus"></i>
                            </span>
                            <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pr-6 pt-2 pb-2 w-100 border-0 text-truncate collapsed" style="text-align: end;" data-toggle="collapse" data-target="#collapseThreeo" aria-expanded="false" aria-controls="collapseThreeo">
                             كيف اضبط الاعدادات؟
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThreeo" class="collapse" aria-labelledby="headingThreeo" data-parent="#accordion">
                          <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pr-6 ">
   تسعى بيمار للتطوير والتدريب لتزويد المهنيين والطلاب بأحدث المهارات والمعرفةاللازمة للنجاح في سوق العمل، من خلال توفير دورات تدريبية مبتكرة ومتكاملة في مجالات النمذجة الرقمية                       </div>
                        </div>
                      </div>

                    </div>
            </div>
            <!-- <div class="col-12 col-sm-6 wow fadeInRight">
                <h3 class=" font-weight-bold fables-main-text-color " style=" text-align: center;
                color: #1b9789;
                font-size: 25px;">الاسئلة الشائعة؟  </h3>
               <br>
                <h3 class=" font-weight-bold fables-main-text-color " style=" text-align: end; color: #1b9789; font-size: 20px;">كيف اضبط الاعدادات؟</h3>
                <p class="mt-3 fables-forth-text-color " style=" text-align: end; ">                        تسعى الشركة لتكون مرجعاً موثوقاً ومعتمداً في مجال الرقمنة والهندسة من خلال تقديم برامج تدريبية شاملة ومبتكرة
                </p>
                <br>
               <h3 class=" font-weight-bold fables-main-text-color " style=" text-align: end; color: #1b9789; font-size: 20px;">كيف اضبط الاعدادات؟</h3>
               <p class="mt-3 fables-forth-text-color " style=" text-align: end; ">                        تسعى الشركة لتكون مرجعاً موثوقاً ومعتمداً في مجال الرقمنة والهندسة من خلال تقديم برامج تدريبية شاملة ومبتكرة
                </p>
               <br>
                <h3 class=" font-weight-bold fables-main-text-color " style=" text-align: end; color: #1b9789; font-size: 20px;">كيف اضبط الاعدادات؟</h3>
              <p class="mt-3 fables-forth-text-color " style=" text-align: end; ">                        تسعى الشركة لتكون مرجعاً موثوقاً ومعتمداً في مجال الرقمنة والهندسة من خلال تقديم برامج تدريبية شاملة ومبتكرة
                </p>
            </div>
    </div>         -->
</div>
    </div>

    <script>
        function togglePopuo(){
            document.getElementById("popup-1").classList.toggle("active");
        }
    </script>


    @endsection
