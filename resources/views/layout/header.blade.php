<style>
.fables-nav .nav-link:hover {
    color: rgb(32 161 144) !important;
}</style>
<div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <form method="post" action="#" class="w-50">
            <div class="row">
                <div class="col-10">
                    <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." />
                </div>
                <div class="col-2 mt-3">
                     <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>

</div>

<!-- Loading Screen -->
<div id="ju-loading-screen">
  <div class="sk-double-bounce">
    <div class="sk-child sk-double-bounce1"></div>
    <div class="sk-child sk-double-bounce2"></div>
  </div>
</div>


<!-- Start Top Header -->
<div class="fables-forth-background-color fables-top-header-signin" style="height: 60px;background: linear-gradient(171deg, #f7f7f7, transparent);">
    <div class="container">
        <div class="row" id="top-row">
            <div class="col-12 col-sm-2 col-lg-5" style="    margin-top: 10px;">
                <div class="dropdown">
                  <!-- <button class="btn btn-secondary dropdown-toggle border-0 bg-transparent font-13 lang-dropdown-btn pl-0" type="button" id="dropdownLangButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   language
                  </button>
                  <div class="dropdown-menu p-0 fables-forth-background-color rounded-0 m-0 border-0 lang-dropdown" aria-labelledby="dropdownLangButton">
                        <a class="dropdown-item white-color font-13 fables-second-hover-color" href="#">
                        <img src="{{asset('assetss/custom/images/england.png')}}" alt="england flag" class="mr-1"> English</a>
                        <a class="dropdown-item white-color font-13 fables-second-hover-color" href="#">
                        <img src="{{asset('assetss/custom/images/France.png')}}" alt="england flag" class="mr-1"> عربي</a>
                  </div> -->
                  <a class="navbar-brand pl-0" href="{{ route('home') }}" style="padding: 0;"><img src="{{asset('assetss/re.png')}}" alt="Fables Template" class="fables-logo" style="    width: 60px;"></a>

                </div>

            </div>
            <div class="col-12 col-sm-5 col-lg-4 text-right" style="    margin-top: 10px;">
                <p class="fables-third-text-color font-13" style="color:#DDDDDD;"><span class="fables-iconphone"></span> Phone : (011) 611 2040</p>
            </div>
            <div class="col-12 col-sm-5 col-lg-3 text-right" style="    margin-top: 10px;">
                <p class="fables-third-text-color font-13"  style="color:#DDDDDD;"><span class="fables-iconemail"></span> Email: bimar@proengtrain.com</p>
            </div>
            <!-- <div class="col-12 col-sm-5 col-lg-3 text-right" style="    margin-top: 10px;">

            <a class="nav-link " href="{{ route('home') }}">
            الرئيسية
                                        </a>
            </div> -->
            @if(Auth::guard('trainee')->check())

        <a href="{{ route('trainee_logout') }}" onclick="event.preventDefault(); document.getElementById('trainee_logout-form').submit();" class="gg">
            تسجيل خروج
        </a>

    <form id="trainee_logout-form" action="{{ route('trainee_logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@else
    <a href="{{ route('login_trainee') }}" class="gg" style="display:none;">تسجيل دخول</a>
@endif

        </div>
    </div>
</div>

<!-- /End Top Header -->

<!-- Start Fables Navigation -->
<!-- <div class="fables-navigation fables-main-background-color py-3 py-lg-0">
    <div class="container">
               <div class="row">
                   <div class="col-12 col-md-10 col-lg-9 pr-md-0">
                       <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">

                       <a class="navbar-brand pl-0" href="" style="padding: 0;"><img src="{{asset('assetss/re.png')}}" alt="Fables Template" class="fables-logo" style="    width: 60px;"></a>
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fables-iconmenu-icon text-white font-16"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="fablesNavDropdown"style="direction: rtl;margin-left: 40px;    text-align: right;">

                            <ul class="navbar-nav mx-auto fables-nav">
                                    <li >
                                        <a class="nav-link " href="{{ route('home') }}">
                                            بيمار
                                        </a>

                                    </li>

                                    <li>
                                        <a class="nav-link " href="#" >
                                            منصة التدريب
                                        </a>

                                    </li>
                                    <li >
                                        <a class="nav-link " href="{{ route('bim') }}" >
                                            BIM
                                        </a>

                                    </li>
                                    <li >
                                        <a class="nav-link " href="#" >
                                            خدمات واستشارات
                                        </a>

                                    </li>
                                    <li >
                                        <a class="nav-link " href="#">
                                              مدونة
                                        </a>

                                    </li>
                                    <li class="nav-item dropdown">


                                    </li>
                                    <li class="nav-item dropdown">


                                    </li>
                                    @if(Auth::guard('trainee')->check())
               <li>
                   <a href="{{ route('trainee_logout') }}" onclick="event.preventDefault(); document.getElementById('trainee_logout-form').submit();" class="gg">
                     تسجيل خروج
                   </a>
                      </li>
                   <form id="trainee_logout-form" action="{{ route('trainee_logout') }}" method="POST" style="display: none;">
                       @csrf
                         </form>
                    @else
                     <li><a href="{{ route('login_trainee') }}" class="gg" style="display:none;">تسجيل دخول</a></li>
                      @endif

                                </ul>

                    </div>
                </nav>
                   </div>
                   <div class="col-12 col-md-2 col-lg-3 pr-md-0 icons-header-mobile">

                    <div class="fables-header-icons">

                         <a href="#" class="open-search fables-third-text-color right  top-header-link px-3 px-md-2 px-lg-4 fables-second-hover-color border-0 max-line-height">
                            <span class="fables-iconsearch-icon"></span>
                        </a>



                    </div>
                   </div>
               </div>
    </div>
</div> -->
