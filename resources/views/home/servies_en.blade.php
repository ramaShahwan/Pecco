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
                  <a class="services-icons" href="{{ route('design_en') }}" style="    text-align: center;">
                    <img src="assetss/re.png" alt="" style="height: 100px;
    width: 140px;
                        margin: auto;" >
                                        <h4 class="text2">  Engineering studies and supervision  </h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
               We provide all engineering services and solutions related to design, supervision of implementation, and project management with high quality, supported by technical and technological competencies to achieve excellence in all projects.    </p>
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
                  <a class="services-icons" href="{{ route('moudel_en') }}"  style="    text-align: center;">
                    <img src="assetss/re.png" alt="" style="height: 100px;
    width: 140px;
                       margin: auto;" >                    <h4 class="text2">  Modeling and Project Development</h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
                  We have a team specialized in modeling using the latest technologies and international standards. We adopt BIM technology as the latest method in our field and combine creativity and engineering to build the future.      </p>
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
                    <img src="assetss/re.png" alt="" style="height: 100px;
    width: 140px;
                        margin: auto;" >
                  <h4 class="text2">   Training, qualification and development</h4>

										</a>
                                        <p style="font-size: 16px;"class="text11">
            We provide specialized knowledge in all engineering disciplines through high-quality training aimed at qualifying engineers, developing their administrative and engineering skills, and achieving advanced levels in programs.             </p>

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
                  <a class="services-icons" href="{{ route('execution_en') }}"  style="    text-align: center;">
                    <img src="imghome/ccc.png" alt="" style="height: 100px;
    width: 140px;
                            margin: auto;" >
                        <h4 class="text2">
                    <h4 class="text2"> Project Management </h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
                 We have an engineering team specialized in the field of construction and building. We apply the highest quality standards in work with our commitment to timely delivery for customer satisfaction by providing distinguished services according to the highest standards.     </p>
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
                    <img src="assetss/re.png" alt="" style="height: 100px;
    width: 140px;
                        margin: auto;" >                    <h4 class="text2">  Interior design and decoration</h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
We offer specialized solutions to create the perfect environment for your home or workspace, from concept to implementation, through a wide range of services, including interior and exterior design, decoration, and furniture design and placement.                </div>
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
                    <img src="assetss/re.png" alt=""  style="height: 100px;
    width: 140px;
                        margin: auto;" >                    <h4 class="text2">  Scientific research and development  </h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
               Because we believe in the importance of scientific research in developing knowledge, we offer a range of services, including support for researchers in choosing their academic research and providing comprehensive support at all stages of research.  </p>
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
                    <img src="assetss/re.png" alt=""  style="height: 100px;
    width: 140px;
                       margin: auto;" >                    <h4 class="text2"> Web design</h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
We have a team specialized in developing and designing distinguished and high-quality websites that provide customers with professional service and unique design in addition to providing technical support and technical support services. </p>                </div>
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
                    <img src="imghome/iii.png" alt="" style="height: 80px" >                    <h4 class="text2">    Real estate development and marketing</h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
We are a website specialized in providing integrated real estate services such as buying, selling, and mortgaging real estate, providing real estate consultations and technical inspection with Building Rank Company, and providing a technical report on each property marketed through us. </p>              </div>
              <!-- end about-details -->
              </div>
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
                    <img src="assetss/re.png" alt=""  style="height: 100px;
    width: 140px;
                        margin: auto;" >
                    <h4 class="text2">  Industrial programming and control </h4>

										</a>
                  <p style="font-size: 16px;" class="text11">
We provide industrial control software solutions and help improve the efficiency of manufacturing processes and program panels to perform various tasks such as monitoring inputs and outputs, diagnosing faults, and analyzing errors.                  </p>
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
