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



            <div class="container-fluid" id="page-wrapper">
@if(session()->has('message'))
        <div class="alert alert-info" role="alert" style="text-align:end;font-size: 20px; ">
          {{session()->get('message')}}
        </div>
@endif
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">الموظفين </h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button onclick="togglePopuo()" type="button" class="m-0 font-weight-bold " style="background: #2e8f9f;
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
                                         @foreach($data as $call)
                                        <tr>
                                            <td>{{$call->full_name}}  </td>
                                            <td>{{$call->user_name}}  </td>
                                            <td>{{$call->email}}  </td>
                                            <td><img src="{{URL::asset('/img/manager/'.$call->image)}}" alt="" class="bg-img" height="40px" width="40px"> </td>
                                            <td>{{$call->role}}  </td>
                                            <td>{{$call->phone}}  </td>
                                            <td>{{$call->address}}  </td>
                                            <td>
                                        <button  style="border: none;background: none;" onclick="showEditPopup({{ $call->id }})"><span class="las la-edit" style="font-size: 30px; color: #3f4046;"></span></button>
                                        <button  style="border: none;background: none;"><span class="las la-trash-alt" style="font-size: 30px; color: #f10f0f;"></span></button>

                                            </td>
                                        </tr>
                                         @endforeach


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
              <form id="myForm" enctype="multipart/form-data" style="padding:20px;color:black">
                @csrf
                <div class="roww">

                        <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder="الاسم الكامل " name="full_name" value="{{ old('full_name') }}" class="@error('full_name') is-invalid @enderror"/>
                          <!-- @error('full_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  اسم المستخدم" name="user_name" value="{{ old('user_name') }}" class="@error('user_name') is-invalid @enderror"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <!-- @error('user_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                        <div class="input-groupp input-groupp-icon">
                          <input type="email" placeholder="البريد الالكتروني  " name="email" class="@error('email') is-invalid @enderror"  value="{{ old('email') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>

                      <span class="invalid-feedback"></span>
                        </div>
                       <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="رقم الهاتف   " name="phone" class="@error('phone') is-invalid @enderror"  value="{{ old('phone') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>

                      <span class="invalid-feedback"></span>
                        </div>
                         <div class="input-groupp input-groupp-icon" style="position: relative;">
  <input type="password" placeholder="كلمة السر" id="password" name="password"
         class="@error('password') is-invalid @enderror" value="{{ old('password') }}"/>
  <div class="input-icon"><i class="fa-solid fa-lock"></i></div>

  <!-- أيقونة العين -->
  <span class="toggle-password" onclick="togglePassword()" style="position: absolute; top: 50%;  transform: translateY(-50%); cursor: pointer;">
    <i id="eyeIcon" class="fa-solid fa-eye"></i>
  </span>

                       <span class="invalid-feedback"></span>

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
                         <span class="invalid-feedback"></span>
                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="العنوان" name="address"  value="{{ old('address') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>
                                             <span class="invalid-feedback"></span>

                        </div>


                      </div>
                      <div class="roww">
                       <input type="submit" value="حفظ" class="bttn">
                      </div>
                    </form>
                  <!-- </div> -->

            </div>
        </div>

<script>
/* فتح / إغلاق المودال */
function togglePopuo() {
    const pop = document.getElementById('popup-1');
    if (pop.classList.contains('active')) {
        document.getElementById('myForm').reset();
        document.querySelectorAll('.invalid-feedback').forEach(s => s.textContent = '');
    }
    pop.classList.toggle('active');
}

/* التفويض: استمع لكل عمليات submit على مستوى الوثيقة */
document.addEventListener('submit', function (e) {
    // نتحقّق أن النموذج هو المطلوب بالضبط
    if (e.target && e.target.id === 'myForm') {
        e.preventDefault();                              // أوقف التحديث
        console.log('✅ myForm submit captured');        // DEBUG واضح

        const form  = e.target;
        const url   = "{{ route('dms_user.store') }}";
        const token = document.querySelector('meta[name="csrf-token"]').content;

        fetch(url, {
            method : 'POST',
            headers: {
                'X-CSRF-TOKEN': token,
                'Accept'      : 'application/json'
            },
            body   : new FormData(form)
        })
        .then(async resp => {
            const res = await resp.json();

            // امسح الأخطاء القديمة
            form.querySelectorAll('.invalid-feedback').forEach(s => {
                s.textContent = '';
                s.closest('.input-groupp')
                 ?.querySelector('input')?.classList.remove('is-invalid');
            });

            if (!resp.ok) {            // أخطاء الفاليديشن
                Object.entries(res.errors).forEach(([k,v]) => {
                    const input = form.querySelector(`[name="${k}"]`);
                    const span  = input?.parentElement.querySelector('.invalid-feedback');
                    if (span) span.innerHTML = `<strong style="color:red;">${v[0]}</strong>`;
                    input?.classList.add('is-invalid');
                });
            } else {                   // نجاح
                const msg = document.createElement('div');
                msg.className = 'alert alert-info';
                msg.textContent = res.message;
                document.getElementById('page-wrapper').prepend(msg);

                form.reset();
                togglePopuo();
                setTimeout(()=>location.reload(), 700);
            }
        })
        .catch(err => console.error(err));
    }
});
</script>


             <div class="popup" id="popuppo-1">
          <div class="overlay"></div>
         <div class="content">
         <div class="gf">
                <div class="close-btn" onclick="togglePopuoo()"><i class="las la-times-circle"></i></div>
                <h4 class="h44">   تعديل بيانات الموظف</h4>

                </div>

         @if(isset($call))
         <form id="editForm" onsubmit="updateBank(event, {{ $call->id }})" style="padding: 20px;color: black;">
         @csrf
   <input type="hidden" name="id" id="emp_id" value="{{ $call->id }}">            <div class="roww">
                <h4 style="text-align:right;">الاسم الكامل  </h4>

                <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder=" الاسم الكامل  " name="full_name" id="full_name" class="@error('full_name') is-invalid @enderror" value="{{ $call->full_name }}"/>
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
                          <input type="text" placeholder=" اسم المستخدم  " name="user_name" id="user_name" class="@error('user_name') is-invalid @enderror"  value="{{ $call->user_name }}"/>
                          @error('user_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <span class="invalid-feedback"></span>
                        </div>
                                        <h4 style="text-align:right;">البريد الالكتروني   </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="email" placeholder="البريد الالكتروني  " name="email" id="email" class="@error('email') is-invalid @enderror"  value="{{ $call->email }}"/>
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
                          <input type="text" placeholder="رقم الهاتف   " id="phone" name="phone" class="@error('phone') is-invalid @enderror"  value="{{ $call->phone }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <span class="invalid-feedback"></span>
                        </div>
                         <h4 style="text-align:right;">الصورة</h4>
                <div>
                    <img id="current_program_img" src="{{ URL::asset('/img/manager/' . $call->image) }}" class="bg-img" height="170px" width="170px">
                    <input type="file" name="image" id="image"/>
                </div>
            </div>

            <div class="roww">
                        <h4> الدور </h4>
                        <select name="role" id="role" class="@error('role') is-invalid @enderror" style="width: 400px;">
                         <option value="admin" {{ $call->role == 'admin' ? 'selected' : '' }}>admin  </option>
                        <option value="emp" {{ $call->role == 'emp'   ? 'selected' : '' }}>emp</option>

                        </select>
                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="العنوان" name="address" id="address"  value="{{ $call->address }}"/>
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
//       function togglePopuo() {
//     const pop = document.getElementById('popup-1');
//     if (pop.classList.contains('active')) {
//         document.getElementById('myForm').reset();
//         document.querySelectorAll('.invalid-feedback').forEach(s => s.innerHTML = '');
//     }
//     pop.classList.toggle('active');
// }
 function togglePopuoo(){
    let popuppo = document.getElementById("popuppo-1");

    if (popuppo.classList.contains("active")) {
        // إذا كان المودل مفتوحًا وأغلقناه، نقوم بمسح البيانات ورسائل الخطأ
        document.getElementById("editForm").reset(); // إعادة تعيين النموذج
        document.querySelectorAll('.invalid-feedback').forEach(error => {
            error.innerHTML = ''; // إخفاء رسائل الخطأ
        });
    }

    popuppo.classList.toggle("active"); // تبديل حالة المودل (فتح/إغلاق)
}

     </script>

      <!-- <script>
document.addEventListener('DOMContentLoaded', () => {
    const form  = document.getElementById('myForm');
    const url   = "{{ route('dms_user.store') }}";
    const token = document.querySelector('meta[name="csrf-token"]').content;
console.log(data);
    form.addEventListener('submit', e => {
        e.preventDefault();   // إيقاف الإرسال الطبيعى
              // (تأمين زائد) يمنع أى Bubbling يُعيد الإرسال

        /* الكود لن يصل هنا إذا كسرنا شيئاً فوق … */
        const data = new FormData(form);

        fetch(url, {
            method : 'POST',
            headers: {
                'X-CSRF-TOKEN': token,
                'Accept'      : 'application/json'
            },
            body   : data
        })
        .then(async resp => {
            const res = await resp.json();

            // نظف الأخطاء القديمة
            document.querySelectorAll('.invalid-feedback').forEach(s => {
                s.innerHTML = '';
                s.closest('.input-groupp')?.querySelector('input')?.classList.remove('is-invalid');
            });

            if (!resp.ok) {           // أخطاء فاليديشن
                Object.entries(res.errors).forEach(([k,v]) => {
                    const input = document.querySelector(`[name="${k}"]`);
                    const span  = input?.parentElement.querySelector('.invalid-feedback');
                    input.classList.add('is-invalid');
                    if (span) span.innerHTML = `<strong style="color:red;">${v[0]}</strong>`;
                });
            } else {                  // نجاح
                const msg = document.createElement('div');
                msg.className = 'alert alert-info';
                msg.textContent = res.message;
                document.getElementById('page-wrapper').prepend(msg);

                form.reset();
                togglePopuo();
                setTimeout(()=>location.reload(), 700);
            }
        })
        .catch(err => console.error(err));
    });
});
    </script> -->
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
<script>
      function showEditPopup(id) {
    fetch(`/dms_user/edit/${id}`)
        .then(response => response.json())
        .then(data => {
            console.log('Data received:', data);

            // Assign the values to the correct fields
            document.getElementById('emp_id').value = data.id; // ضبط معرف الكورس

            document.getElementById('full_name').value = data.full_name; // Arabic name

            document.getElementById('user_name').value = data.user_name; // Arabic name
            document.getElementById('email').value = data.email; // English name
            document.getElementById('phone').value = data.phone; // Arabic name
            document.getElementById('address').value = data.address; // Arabic name
 document.getElementById('role').value      = data.role;
 if (data.image) {
                document.getElementById('current_program_img').src = `/img/manager/${data.image}`;
                document.getElementById('current_program_img').style.display = 'block';
            } else {
                document.getElementById('current_program_img').style.display = 'none';
            }
            // Update the radio button for type status

            // Assign the ID in a hidden field
            // document.querySelector('input[name="id"]').value = id;

            // Show the popup
            togglePopuoo();
        })
        .catch(error => console.error('Error:', error));
}

function updateBank(event) {
    event.preventDefault(); // منع إعادة تحميل الصفحة

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

   const formData = new FormData();
    formData.append('full_name', document.getElementById('full_name').value);
    formData.append('user_name', document.getElementById('user_name').value);
    formData.append('email', document.getElementById('email').value);
    formData.append('phone', document.getElementById('phone').value);
    formData.append('role', document.getElementById('role').value);
    formData.append('address', document.getElementById('address').value);


    let empid = document.querySelector('input[name="id"]');
let emp_id = empid ? empid.value : null;
console.log("Program ID:", emp_id);

    console.log("Program ID:", emp_id);

    const newImage = document.getElementById('image').files[0];
    if (newImage) {
        formData.append('image', newImage);
    }

    let url = `/dms_user/update/${emp_id}`;
    console.log("URL:", url);
    fetch(url, {
        method: 'PUT',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'Accept': 'application/json' // هذا مهم لتجنب HTML response

        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.errors) {
            Object.keys(data.errors).forEach(key => {
                let input = document.getElementById(key);
                if (input) {
                    let errorSpan = input.nextElementSibling;
                    if (!errorSpan || !errorSpan.classList.contains('invalid-feedback')) {
                        errorSpan = document.createElement('span');
                        errorSpan.classList.add('invalid-feedback');
                        input.parentNode.appendChild(errorSpan);
                    }
                    errorSpan.innerHTML = `<strong style="color:red;">${data.errors[key][0]}</strong>`;
                }
            });
        } else {
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
            togglePopuoo();
            setTimeout(() => {
    location.reload(); // تحديث الصفحة
}, 1000);

        }
    })
    .catch(error => console.error('Error:', error));
}

    </script>

@endsection
