<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      /* height: 100%; */
    }

    body {
      /* background: #eee; */
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      margin-top: 40px;
    width: 100%;
    /* border: 3px solid #a3a3b6; */
      width: 100%;
      /* padding-top: 50px;
      padding-bottom: 50px; */
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      border-radius: 24px;

      /* height: 300px; */
    }
    .swiper-slide:hover{
        border: 4px solid #3EC1D5 !important;
    border-radius: 24px !important;
    box-shadow: none !important;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
    }
    .services-detailss {
  /* padding-top: 40px; */
  transition: all 0.5s ease 0s;
}

.single-servicess>h4 {
  color: #444;
  font-size: 24px;
  font-weight: 500;
}

.single-servicess>p {
  color: #4f4a4a;
  margin-bottom: 30px;
  margin-top: 20px;
  font-size: 14px;
}
.services-icons {
  color: #444;
  display: inline-block;
  font-size: 36px;
  line-height: 36px;
  text-decoration: none;
  /* margin-bottom: 20px; */
}
.text2{
    font-family: "Cairo", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  font-variation-settings:
    "slnt" 0;
}
.text11{
    font-family: "Changa", sans-serif;
    font-optical-sizing: auto;
    font-weight: 500;
    font-style: normal;

}
p {
    margin: 0 0 15px;
    color: #444;
}
h4 {
    font-size: 24px;
    line-height: 26px;
}
h4:hover{
    color: #3EC1D5;
}
/* .swiper-wrapper{
    border: 4px solid #3EC1D5;
    border-radius: 24px;
    box-shadow: none;
} */

  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper" style="    margin-bottom: 30px;">
      <div class="swiper-slide"style="background: #e2e7e4;border-radius: 20px; border: 1px solid #c3b9b9;box-shadow: 2px 1px 1px #a69d9d;    padding: 2px;">
        <div class=" "  style="    text-align: center;">
            <!-- end  -->
            <div class=" " style="margin-top: 20px;">
              <div class="services-detailss">
                <div class="single-servicess">
                  <a class="services-icons" href="{{ route('design') }}" style="    text-align: center;">
                    <img src="imghome/cc.png" alt="" style="height: 90px;
                    width: 90px;
                        margin-left: 100px;" >
                                        <h4 class="text2">الدراسات الهندسية والإشراف  </h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
                  نقدم كافة الخدمات والحلول الهندسية بكل ما يتعلق بالتصميم والاشراف على التنفيذ وإدارة المشاريع بجودة عالية مدعومة بالكفاءات الفنية والتكنولوجية لتحقيق التميز في جميع المشاريع            </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>

      </div>
      <div class="swiper-slide"style="background: #e2e7e4;border-radius: 20px; border: 1px solid #c3b9b9;box-shadow: 2px 1px 1px #a69d9d;    padding: 2px;">
        <div class=" "  style="    text-align: center;">
            <div class="" style="margin-top: 12px;">
              <div class="services-detailss" >
                <div class="single-servicess">
                  <a class="services-icons" href="{{ route('moudel') }}"  style="    text-align: center;">
                    <img src="imghome/cc.png" alt="" style="height: 90px;
                    width: 90px;
                       margin-left: 80px;" >                    <h4 class="text2">  النمذجة وتطوير المشاريع</h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
                  لدينا فريق متخصص في النمذجة باستخدام أحدث التقنيات والمعايير العالمية ونعتمد تقنية BIM كأحدث الأساليب في مجالنا ونجمع بين الابداع والهندسة لبناء المستقبل                   </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>

      </div>
      <div class="swiper-slide" style="background: #e2e7e4;border-radius: 20px;border: 1px solid #c3b9b9;box-shadow: 2px 1px 1px #a69d9d;    padding: 2px;">
        <div class=" "  style="    text-align: center;">
            <div class="" style="margin-top: 12px;">
              <div class="services-detailss" >
                <div class="single-servicess">
                  <a class="services-icons" href="{{ route('train_index') }}"  style="    text-align: center;">
                    <img src="imghome/cc.png" alt="" style="height: 90px;
                    width: 90px;
                        margin-left: 80px;" >
                  <h4 class="text2">   التدريب والتأهيل والتنمية</h4>

										</a>
                                        <p style="font-size: 16px;"class="text11">
                  نقدم المعرفة المتخصصة في المجال الهندسي بجميع تخصصاته من خلال تدريب عالي الجودة بهدف تأهيل المهندسين وتطوير مهاراتهم الإدارية والهندسية وتحقيق مستويات متقدمة في  البرامج                       </p>

                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
      </div>
      <div class="swiper-slide" style="background: #e2e7e4;border-radius: 20px; border: 1px solid #c3b9b9;box-shadow: 2px 1px 1px #a69d9d;    padding: 2px;">
        <div class=" "  style="    text-align: center;">
            <!-- end  -->
            <div class=" " style="margin-top: 20px;">
              <div class="services-detailss" >
                <div class="single-servicess">
                  <a class="services-icons" href="{{ route('execution') }}"  style="    text-align: center;">
                    <img src="imghome/ccc.png" alt="" style="height: 90px;
                        width: 90px;
                            margin-left: 70px;" >
                        <h4 class="text2">
                    <h4 class="text2">إدارة مشاريع </h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
                  لدينا فريق هندسي متخصص في مجال البناء والتشييد، نحن نطبق أعلى معايير الجودة في العمل مع التزامنا بالتسليم في الوقت المحدد لرضا العملاء من خلال تقديم خدمات مميزة وفقا لأعلى معايير                   </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
      </div>
      <div class="swiper-slide" style="background: #e2e7e4;border-radius: 20px; border: 1px solid #c3b9b9;box-shadow: 2px 1px 1px #a69d9d;    padding: 2px;">
        <div class=" "  style="    text-align: center;">
            <!-- end  -->
            <div class=" " style="margin-top: 20px;">
              <div class="services-detailss" >
                <div class="single-servicess">
                  <a class="services-icons" href="#"  style="    text-align: center;">
                    <img src="imghome/cc.png" alt="" style="height: 90px;
                    width: 90px;
                        margin-left: 80px;" >                    <h4 class="text2">  التصميم الداخلي والديكور</h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
                  نقدم حلول متخصصة لتهيئة البيئة المثالية لمنزلك او مساحة عملك من الفكرة للتنفيذ وذلك من خلال
 مجموعة واسعة من الخدمات بما فيها التصميم الداخلي والخارجي، الديكور، تصميم الأثاث ووضعه </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
      </div>
      <div class="swiper-slide"  style="background: #e2e7e4;border-radius: 20px; border: 1px solid #c3b9b9;box-shadow: 2px 1px 1px #a69d9d;    padding: 2px;">
        <div class=" "  style="    text-align: center;">
            <!-- end  -->
            <div class=" " style="margin-top: 20px;">
              <div class="services-detailss">
                <div class="single-servicess">
                  <a class="services-icons" href="#"  style="    text-align: center;">
                    <img src="imghome/cc.png" alt=""  style="height: 90px;
                    width: 90px;
                        margin-left: 70px;" >                    <h4 class="text2">   البحث والتطوير العلمي    </h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
                  نظرا لإيماننا بأهمية البحث العلمي في تطوير المعرفة نقدم مجموعة من الخدمات من دعم للباحثين في اختيار ابحاثهم الاكاديمية وتقديم الدعم المتكامل في جميع مراحل البحث        </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
      </div>
      <div class="swiper-slide" style="background: #e2e7e4;border-radius: 20px; border: 1px solid #c3b9b9;box-shadow: 2px 1px 1px #a69d9d;    padding: 2px;">
        <div class=" "  style="    text-align: center;">
            <!-- end  -->
            <div class=" " style="margin-top: 20px;">
              <div class="services-detailss" >
                <div class="single-servicess">
                  <a class="services-icons" href="#"  style="    text-align: center;">
                    <img src="imghome/cc.png" alt=""  style="height: 90px;
                    width: 90px;
                        margin-left: 60px;" >                    <h4 class="text2">    تصميم مواقع الويب </h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
                  لدينا فريق متخصص في تطوير وتصميم المواقع الالكترونية المتميزة وعالية الجودة التي تقدم للعملاء الخدمة الاحترافية والتصميم الفريد بالإضافة لتقديم خدمات الدعم الفني والدعم التقني </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
      </div>
      <div class="swiper-slide" style="background: #e2e7e4;border-radius: 20px; border: 1px solid #c3b9b9;box-shadow: 2px 1px 1px #a69d9d;    padding: 2px;">
        <div class=" "  style="    text-align: center;">
            <!-- end  -->
            <div class=" " style="margin-top: 20px;">
              <div class="services-detailss" >
                <div class="single-servicess">
                  <a class="services-icons" href="https://proengaqar.com"  style="    text-align: center;">
                    <img src="imghome/iii.png" alt="" style="height: 80px" >                    <h4 class="text2">    تطوير وتسويق العقار </h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
نحن موقع متخصص في تقديم الخدمات العقارية المتكاملة كبيع وشراء ورهن العقارات وتقديم استشارات عقارية وفحصها فنياً مع شركة بلدنغ رانك وتقديم تقرير فني عن كل عقار يتم تسويقه من خلالنا                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
      </div>
      <div class="swiper-slide" style="background: #e2e7e4;border-radius: 20px; border: 1px solid #c3b9b9;box-shadow: 2px 1px 1px #a69d9d;    padding: 2px;">
        <div class=" "  style="    text-align: center;">
            <!-- end  -->
            <div class="  rrr" style="margin-top: 20px;">
              <div class="services-detailss" >
                <div class="single-servicess">
                  <a class="services-icons" href="#"  style="    text-align: center;">
                    <img src="imghome/cc.png" alt=""  style="height: 90px;
                    width: 90px;
                        margin-left: 80px;" >
                    <h4 class="text2">البرمجة والتحكم الصناعي </h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
                    نقدم حلول برمجية للتحك الصناعي ونساعد في تحسين كفاءة العمليات التصنيعية وبرمجة اللوحات لأداء مهام مختلفة مثل مراقبة المدخلات و المخرجات وتشخيص الاعطال وتحليل الاخطاء
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <!-- <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script> -->
  <!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    autoplay: {
      delay: 1000, // Time between transitions (in milliseconds)
      disableOnInteraction: false, // Keep autoplay even after user interactions
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>

</body>

</html>
