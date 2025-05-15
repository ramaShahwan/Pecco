 <style>
   .bbtn{
        border: none;
    padding: 10px;
    background-color: #6db1bc;
    color: white;
    border-radius: 20px;
    }
    .bttn:hover{
        background-color: #6db1bc;
        color: white;
        font-size: 17px;
        font-weight: 600;
    }
    .gf{
            background: rgb(109 177 188);
            padding: 10px 0px;
        }
        .h44{
            font-weight: 600;
            color: white;
        }
        .popup .overlay{
             position: fixed;
            top: 0px;
            left: 0px;
            width: 100vw;
            height: 100vw;
            background: rgba(0, 0, 0, 0.7);
            z-index: 100;
            display: none;
        }
        .popup .content{
                max-width: 38em;
    /* padding: 1em 3em 2em 3em; */
    /* margin: 0em auto; */
    background-color: #fff;
    /* border-radius: 4.2px; */
    /* box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2); */
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    background: #fff;
    width: 450px;
    height: 600px;
    overflow: auto;
    /* height: 220px; */
    z-index: 200;
    text-align: center;
    /* padding: 20px; */
    box-sizing: border-box;
    box-shadow: inset 0px 1px 19px 1px #23a794;
        }
        .popup .close-btn{
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 10px;
            width: 30px;
            height: 30px;
            color: white;
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
        .fables-nav .nav-link:hover {
    color: #6db1bc !important;
}
.btco-hover-menu .active a, .btco-hover-menu .active a:focus, .btco-hover-menu .active a:hover, .btco-hover-menu li a:hover, .btco-hover-menu li a:focus, .navbar>.show>a, .navbar>.show>a:focus, .navbar>.show>a:hover {
    color:  #76c8be !important;
    background: transparent;
    outline: 0;}
    .btco-hover-menu .collapse ul > li:hover > a {
    background: transparent;
    color: #76c8be !important;
}
.navv{
    margin-left: 0px;
    margin-right: -50px;

}
.yyy{
    width: 660px ;
    height: 320px;
}
@media screen and (max-width: 398px ){
    /* .navbar-nav .dropdown-menu {
        float: left;
    } */
    .navv{
    margin-left: 0px;
    margin-right: 0px;
    text-align: right;

}
.nnna{
    text-align: right;
    margin-right: 30px !important;
}
.yyy{
            width: 350px;
        }
        .popup .overlay{
            height: 150vw;
        }
        .popup .content{
            width: 350px;
        }
}
.input-groupp {
    position: relative;
    /* display: flex; */
    align-items: center;
}
/* .input-groupp input {
    padding-right: 40px;
} */
.toggle-password {
    position: absolute;
    left: 10px;
    top: 22px;
    cursor: pointer;
    color: #666;
}

.toggle-password:hover {
    color: #000;
}
.input-groupp-icon .input-icon:before{
    display: none;
}
/* .input-groupp-icon .input-icon{
    top: 16px;
} */
.form-control{
            height: 3.4em;
            background-color: #f9f9f9;
            border: 2px solid #e5e5e5 ;
    }
    .input-groupp-icon input {
    text-align: right;
    padding-right: 4.4em;
}
 </style>

 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group" style="direction: ltr;">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="    text-align: right;
    direction: rtl;">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="    text-align: right;
    direction: rtl;">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="    text-align: right;
                                  direction: rtl;">
                                <i class="fas fa-envelope fa-fw"></i>
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="style/img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="style/img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="style/img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li> -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="    text-align: right;
    direction: ltr;">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">UserName</span>
                                <img class="img-profile rounded-circle"
                                    src="style/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown" style="text-align: right;">
                                <a class="dropdown-item" href="{{route('profile_emp')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a> -->
                                 <button onclick="togglePopuox()"class="fables-second-text-color border fables-second-border-color fables-btn-rounded text-center white-color p-2  font-14 fables-second-hover-background-color"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password   </button>

                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>


                <div class="popup" id="popupx-1">
            <div class="overlay"></div>
            <div class="content yyy" style="height: 380px; width: 580px;">
                <div class="gf">
                <div class="close-btn" onclick="togglePopuox()">&times;</div>
                <h4 class="h44">تغيير كلمة السر</h4>
                </div>

                <!-- <div class="containerr"> -->
                <form id="myForm" action="" method="post" enctype="multipart/form-data" style="    padding: 20px;color: black;">
    @csrf
    <div class="roww">

        <h6 style="margin-top:10px;">ملاحظة: بعد عملية تعديل كلمة السر يجب إعادة تسجيل الدخول</h6>

        <!-- كلمة المرور الجديدة -->
        <div class="input-groupp input-groupp-icon" style="margin-top: 10px;">
            <div class="input-icon"><i class="fa-solid fa-lock"></i></div>
            <input type="password" placeholder=" كلمة السر و يجب ان تحتوي على احرف كبيرة وصغيرة وارقام و محارف " name="trainee_pass" id="trainee_pass" class="@error('trainee_pass') is-invalid @enderror" style="    font-family: sans-serif !important;"/>
            <!-- @error('trainee_pass')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror -->
            <div class="toggle-password" onclick="togglePassword('trainee_pass', this)">
        <i class="fa-solid fa-eye"></i>
    </div>
            <span class="invalid-feedback" style="display: block;font-family: sans-serif;"></span>
        </div>

        <!-- تأكيد كلمة المرور -->
        <div class="input-groupp input-groupp-icon">
        <input type="password" placeholder=" تأكيد كلمة السر " name="trainee_pass_confirmation" id="trainee_pass_confirmation" class="@error('trainee_pass_confirmation') is-invalid @enderror" style="    font-family: sans-serif !important;"/>
        <div class="input-icon"><i class="fa-solid fa-lock"></i></div>
            <!-- @error('trainee_pass_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror -->
            <div class="toggle-password" onclick="togglePassword('trainee_pass_confirmation', this)">
        <i class="fa-solid fa-eye"></i>
    </div>
            <span class="invalid-feedback" style="display: block;font-family: sans-serif;"></span>
        </div>
    </div>

    <div class="roww">
        <input type="submit" value="حفظ" class="bttn" style="border: 1px solid #6db1bc;">
    </div>
</form>

                  <!-- </div> -->

            </div>
        </div>

                   <script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     @if ($errors->any())
    //     togglePopuo();
    //     @endif
    // });

    function togglePopuox(){
            document.getElementById("popupx-1").classList.toggle("active");
        }
</script>
<script>
 document.getElementById("myForm").addEventListener("submit", function (e) {
    e.preventDefault(); // منع إعادة تحميل الصفحة

    var formData = new FormData(this); // جمع البيانات من النموذج
    let url = "#"; // URL الخاص بالـ POST

    fetch(url, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        // إزالة الأخطاء السابقة من الحقول
        document.querySelectorAll('.invalid-feedback').forEach(error => {
            error.innerHTML = ''; // تفريغ الأخطاء السابقة
        });

        if (data.errors) {
            // عرض الأخطاء الجديدة تحت الحقول
            Object.keys(data.errors).forEach(key => {
                let input = document.querySelector(`[name="${key}"]`);
                if (input) {
                    // نبحث عن العنصر الذي يحتوي على class invalid-feedback
                    let errorSpan = input.parentElement.querySelector('.invalid-feedback');
                    if (errorSpan) {
                        errorSpan.innerHTML = `<strong style="color:red;">${data.errors[key][0]}</strong>`; // عرض الخطأ
                    }
                }
            });
        } else {
            // عرض الرسالة بنجاح داخل الـ #page-wrapper
            let messageDiv = document.createElement('div');
            messageDiv.classList.add('alert', 'alert-info');
            messageDiv.setAttribute('role', 'alert');
            messageDiv.style.textAlign = 'end';
            messageDiv.style.fontSize = '20px';
            messageDiv.innerHTML = data.message; // عرض رسالة النجاح

            // إضافة الرسالة إلى #page-wrapper
            let pageWrapper = document.getElementById('gg');
            if (pageWrapper) {
                pageWrapper.prepend(messageDiv); // إضافة الرسالة في بداية #page-wrapper
            }

            // إعادة تعيين النموذج
            document.getElementById("myForm").reset();
            togglePopuox();
            // تأخير بسيط لإغلاق المودل بعد إرسال البيانات بنجاح
            setTimeout(() => {
    window.location.href = "{{ route('login_trainee') }}"; // الانتقال إلى واجهة تسجيل الدخول
}, 2000); // تأخير بسيط لإغلاق المودل بعد إرسال البيانات بنجاح
        }
    })
    .catch(error => console.error('Error:', error));
});
</script>
<script>
function togglePassword(inputId, iconElement) {
    var inputField = document.getElementById(inputId);
    var icon = iconElement.querySelector("i");

    if (inputField.type === "password") {
        inputField.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        inputField.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}
</script>
