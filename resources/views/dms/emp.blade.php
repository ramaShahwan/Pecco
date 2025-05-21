@extends('layout_dms.master')
@section('content')
<style>
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
    top: 50%;
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
         .bttn:hover{
        background-color:#2e8f9f;
        color: white;
        font-size: 17px;
        font-weight: 600;
    }
    .gf{
            background: #2e8f9f;
            padding: 10px 0px;
        }
        .h44{
            font-weight: 600;
            color: white;
        }
</style>



            <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">الموظفين </h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button onclick="togglePopuo()" class="m-0 font-weight-bold " style="background: #2e8f9f;
                              padding: 10px;color: white;border-radius: 20px;cursor: pointer;">اضافة موظف جديد</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>الاسم</th>
                                            <th>اسم المستخدم</th>
                                            <th>البريد الالكتروني</th>
                                            <th>الصورة</th>
                                            <th>الدور</th>
                                            <th>الهاتف</th>
                                            <th>العنوان</th>
                                            <th>الأحداث</th>


                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>الاسم</th>
                                            <th>اسم المستخدم</th>
                                            <th>البريد الالكتروني</th>
                                            <th>الصورة</th>
                                            <th>الدور</th>
                                            <th>الهاتف</th>
                                            <th>العنوان</th>
                                            <th>الأحداث</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td>2011/04/25</td>
                                            <td>
                                        <button  style="border: none;background: none;"><span class="las la-edit" style="font-size: 30px; color: #3f4046;"></span></button>
                                        <button  style="border: none;background: none;"><span class="las la-trash-alt" style="font-size: 30px; color: #f10f0f;"></span></button>

                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            </div>



            <div class="popup" id="popup-1">

                <div class="overlay"></div>

                <div class="content">
                <div class="gf">
                <div class="close-btn" onclick="togglePopuo()"><i class="las la-times-circle"></i></div>
                <h4 class="h44">اضافة   موظف جديد</h4>

                </div>
                <!-- <div class="containerr"> -->
                <form id="myForm" action="{{url('role/store')}}" method="post" enctype="multipart/form-data" style="padding: 20px;color: black;">
                @csrf
                      <div class="roww">
                        <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder=" الاسم الكامل  " name="full_name" class="@error('full_name') is-invalid @enderror" value="{{ old('full_name') }}"/>
                          @error('full_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <span class="invalid-feedback"></span>
                        </div>
                        <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder=" اسم المستخدم  " name="user_name" class="@error('user_name') is-invalid @enderror"  value="{{ old('user_name') }}"/>
                          @error('user_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <span class="invalid-feedback"></span>
                        </div>
                        <div class="input-groupp input-groupp-icon">
                          <input type="email" placeholder="البريد الالكتروني  " name="email" class="@error('email') is-invalid @enderror"  value="{{ old('email') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <span class="invalid-feedback"></span>
                        </div>
                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="رقم الهاتف   " name="phone" class="@error('phone') is-invalid @enderror"  value="{{ old('phone') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <span class="invalid-feedback"></span>
                        </div>
                        <!-- <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="كلمة السر    " name="tr_role_name_en" class="@error('tr_role_name_en') is-invalid @enderror"  value="{{ old('tr_role_name_en') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          @error('tr_role_name_en')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <span class="invalid-feedback"></span>
                        </div>
                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder=" تأكيد كلمة السر    " name="tr_role_name_en" class="@error('tr_role_name_en') is-invalid @enderror"  value="{{ old('tr_role_name_en') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          @error('tr_role_name_en')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <span class="invalid-feedback"></span>
                        </div> -->
                        <div class="input-groupp input-groupp-icon" style="position: relative;">
  <input type="password" placeholder="كلمة السر" id="password" name="password"
         class="@error('password') is-invalid @enderror" value="{{ old('password') }}"/>
  <div class="input-icon"><i class="fa-solid fa-lock"></i></div>

  <!-- أيقونة العين -->
  <span class="toggle-password" onclick="togglePassword()" style="position: absolute; top: 50%;  transform: translateY(-50%); cursor: pointer;">
    <i id="eyeIcon" class="fa-solid fa-eye"></i>
  </span>

  @error('password')
  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
  @enderror
</div>
<div class="input-groupp input-groupp-icon" style="position: relative;">
  <input type="password" placeholder="تأكيد كلمة السر" id="confirm_password" name="confirm_password"
         class="@error('confirm_password') is-invalid @enderror" value="{{ old('confirm_password') }}"/>
  <div class="input-icon"><i class="fa-solid fa-lock"></i></div>

  <span class="toggle-password" onclick="toggleConfirmPassword()" style="position: absolute; top: 50%;  transform: translateY(-50%); cursor: pointer;">
    <i id="eyeIconConfirm" class="fa-solid fa-eye"></i>
  </span>
</div>


                        <div class="input-groupp input-groupp-icon">
                            <input type="file"  placeholder="الصورة  " style="padding-bottom: 0;" name="image"/>
                            <div class="input-icon"><i class="fa-solid fa-image"></i></div>
                          </div>


                      </div>

                      <div class="roww">
                        <h4> الدور </h4>
                        <div class="input-groupp" style="display: flex;">
                          <input id="icard" type="radio" name="role" value="admin" {{ old('role') == 'admin' ? 'checked' : '' }}/>
                          <label for="icard"><span>ادمن</span></label>
                          <input id="ipaypal" type="radio" name="role" value="emp" {{ old('role') == 'emp' ? 'checked' : '' }}/>
                          <label for="ipaypal"> <span>موظف </span></label>

                        </div>
                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="العنوان" name="address"  value="{{ old('address') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>
                        </div>



                      </div>
                      <div class="roww">
                       <input type="submit" value="حفظ" class="bttn">
                      </div>
                    </form>
                  <!-- </div> -->

                </div>
            </div>


             <div class="popup" id="popuppo-1">
          <div class="overlay"></div>
         <div class="content">
         <div class="gf">
                <div class="close-btn" onclick="togglePopuoo()"><i class="las la-times-circle"></i></div>
                <h4 class="h44">   تعديل الدور</h4>

                </div>

         @if(isset($call))
         <form id="editForm" onsubmit="updateRole(event, {{ $call->id }})" style="padding: 20px;color: black;">
         @csrf
         <input type="hidden" name="id" value="{{ $call->id }}">
            <div class="roww">
                <h4 style="text-align:right;">الاسم الكامل  </h4>

                <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder=" الاسم الكامل  " name="full_name" class="@error('full_name') is-invalid @enderror" value="{{ old('full_name') }}"/>
                          @error('full_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <span class="invalid-feedback"></span>
                        </div>
                                        <h4 style="text-align:right;">اسم المستخدم   </h4>

                        <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder=" اسم المستخدم  " name="user_name" class="@error('user_name') is-invalid @enderror"  value="{{ old('user_name') }}"/>
                          @error('user_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <span class="invalid-feedback"></span>
                        </div>
                                        <h4 style="text-align:right;">البريد الالكتروني   </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="email" placeholder="البريد الالكتروني  " name="email" class="@error('email') is-invalid @enderror"  value="{{ old('email') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <span class="invalid-feedback"></span>
                        </div>
                                        <h4 style="text-align:right;">رقم الهاتف   </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="رقم الهاتف   " name="phone" class="@error('phone') is-invalid @enderror"  value="{{ old('phone') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <span class="invalid-feedback"></span>
                        </div>
            </div>

            <div class="roww">
                        <h4> الدور </h4>
                        <select name="role" id="role" class="@error('role') is-invalid @enderror" style="width: 400px;">
                         <option value="admin">admin  </option>
                        <option value="emp">emp</option>

                        </select>
                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="العنوان" name="address"  value="{{ old('address') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>
                        </div>



                      </div>

            <div class="roww">
                <input type="submit" value="حفظ" class="bttn">
            </div>
         </form>
         @else
            <p>لم يتم العثور على بيانات للتعديل</p>
         @endif
         </div>
        </div>
  <script>
           function togglePopuo(){
    let popup = document.getElementById("popup-1");

    if (popup.classList.contains("active")) {
        // إذا كان المودل مفتوحًا وأغلقناه، نقوم بمسح البيانات ورسائل الخطأ
        document.getElementById("myForm").reset(); // إعادة تعيين النموذج
        document.querySelectorAll('.invalid-feedback').forEach(error => {
            error.innerHTML = ''; // إخفاء رسائل الخطأ
        });
    }

    popup.classList.toggle("active"); // تبديل حالة المودل (فتح/إغلاق)
}

     </script>
      <script>
        document.getElementById("myForm").addEventListener("submit", function (e) {
    e.preventDefault(); // منع إعادة تحميل الصفحة

    var formData = new FormData(this); // جمع البيانات من النموذج
    let url = "{{ url('role/store') }}"; // URL الخاص بالـ POST

    fetch(url, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Accept': 'application/json' // هذا مهم لتجنب HTML response
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
            let pageWrapper = document.getElementById('page-wrapper');
            if (pageWrapper) {
                pageWrapper.prepend(messageDiv); // إضافة الرسالة في بداية #page-wrapper
            }

            // إعادة تعيين النموذج
            document.getElementById("myForm").reset();
            togglePopuo();
            // تأخير بسيط لإغلاق المودل بعد إرسال البيانات بنجاح
            setTimeout(() => {
    location.reload(); // تحديث الصفحة
}, 1000); // تأخير بسيط لإغلاق المودل بعد إرسال البيانات بنجاح
        }
    })
    .catch(error => console.error('Error:', error));
});

    </script>
     <script>
function togglePassword() {
    var passwordInput = document.getElementById("password");
    var eyeIcon = document.getElementById("eyeIcon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    }
}
</script>
<script>
function toggleConfirmPassword() {
    var passwordInput = document.getElementById("confirm_password");
    var eyeIcon = document.getElementById("eyeIconConfirm");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    }
}
</script>

@endsection
