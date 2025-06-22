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
      .bttnn:hover{
        background-color:#9f2e48;
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
        <div class="alert alert-info" role="alert" style="text-align:start;font-size: 20px; ">
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
                              padding: 10px;color: white;border-radius: 20px;cursor: pointer;">اضافة مناقصة جديدة</button>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>الأسم</th>
                                            <th>ملاحظات</th>
                                            <th>تاريخ بداية المناقصة </th>
                                            <th>تاريخ نهاية المناقصة</th>
                                            <th>تاريخ الزيارة</th>
                                            <th>حالة الزيارة</th>
                                            <th>المنظمة</th>
                                            <th>حالة المناقصة</th>

                                            <th>الأحداث</th>


                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>الأسم</th>
                                            <th>ملاحظات</th>
                                            <th>تاريخ بداية المناقصة </th>
                                            <th>تاريخ نهاية المناقصة</th>
                                            <th>تاريخ الزيارة</th>
                                            <th>حالة الزيارة</th>
                                            <th>المنظمة</th>
                                            <th>حالة المناقصة</th>

                                            <th>الأحداث</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                         @foreach($data as $call)
                                        <tr>
                                            <td>{{$call->project_name}}  </td>
                                            <td>{{$call->note}}  </td>
                                            <td>{{$call->start_date}}  </td>
                                            <td>{{$call->end_date}}</td>
                                            <td>{{$call->visit_date}}  </td>
                                            <td>{{$call->visit_status}}  </td>
                                            <td>{{$call->organization}}  </td>
                                            <td>{{$call->tender_status}}  </td>

                                            <td>
                                        <button  style="border: none;background: none;" onclick="showEditPopup({{ $call->id }})"><span class="las la-edit" style="font-size: 30px; color: #3f4046;"></span></button>
                                        <button  style="border: none;background: none;" onclick="togglePopuoxqw({{ $call->id }})"><span class="las la-trash-alt" style="font-size: 30px; color: #f10f0f;"></span></button>
 <button onclick="togglePopuoxq({{ $call->id }})"
        class="fables-second-text-color border fables-second-border-color fables-btn-rounded text-center white-color p-2 font-14 fables-second-hover-background-color">
        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
        <i class="las la-key"></i>
    </button>
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
                                <h4 class="h44">اضافة   مناقصة جديدة</h4>

                </div>

                <!-- <div class="containerr"> -->
              <form id="myForm" enctype="multipart/form-data" style="padding:20px;color:black">
                @csrf
                <div class="roww">

                        <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder="الاسم المناقصة " name="project_name" value="{{ old('project_name') }}" class="@error('project_name') is-invalid @enderror"/>
                          <!-- @error('project_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  ملاحظات المناقصة " name="note" value="{{ old('note') }}" class="@error('note') is-invalid @enderror"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <!-- @error('note')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="تاريخ بداية المناقصة   " name="start_date" class="@error('start_date') is-invalid @enderror"  value="{{ old('start_date') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>

                      <span class="invalid-feedback"></span>
                        </div>
                       <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="تاريخ نهاية المناقصة    " name="end_date" class="@error('end_date') is-invalid @enderror"  value="{{ old('end_date') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>

                      <span class="invalid-feedback"></span>
                        </div>
                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="تاريخ  الزيارة    " name="visit_date" class="@error('visit_date') is-invalid @enderror"  value="{{ old('visit_date') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>

                      <span class="invalid-feedback"></span>
                        </div>



                      </div>

                      <div class="roww">
                        <!-- <h4> حالة الزيارة </h4> -->
                        <div class="input-groupp" style="display: flex;">
                           <select name="visit_status" id="visit_status" class="@error('visit_status') is-invalid @enderror" style="width: 400px;">
                         <option value=" ">اختر حالة الزيارة   </option>

                           <option value="تمت الزيارة">تمت الزيارة  </option>
                        <option value="لم تتم الزيارة">لم تتم الزيارة</option>
                        <option value="لا يوجد زيارة لها">لا يوجد زيارة لها  </option>


                        </select>


                        </div>
                          <div class="input-groupp" style="display: flex;">
                           <select name="tender_status" id="tender_status" class="@error('tender_status') is-invalid @enderror" style="width: 400px;">
                         <option value=" ">اختر حالة المناقصة   </option>

                           <option value=" مقبولة">مقبولة   </option>
                        <option value="  مرفوضة">مرفوضة  </option>
                        <option value="   لم تقدم">لم تقدم     </option>


                        </select>


                        </div>
                         <span class="invalid-feedback"></span>
                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="اسم المنظمة" name="organization"  value="{{ old('organization') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>
                                             <span class="invalid-feedback"></span>

                        </div>
  <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="الرقم المرجعي للمناقصة " name="reference_number"  value="{{ old('reference_number') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>
                                             <span class="invalid-feedback"></span>

                        </div>
                         <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  قيمة الشيك " name="check_value"  value="{{ old('check_value') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>
                                             <span class="invalid-feedback"></span>

                        </div>
                             <div class="input-groupp" style="display: flex;">
                           <select name="check_status" id="check_status" class="@error('check_status') is-invalid @enderror" style="width: 400px;">
                         <option value=" ">اختر حالة الشيك   </option>

                           <option value=" مقبولة">مقبولة   </option>
                        <option value="  مرفوضة">مرفوضة  </option>
                        <option value="   لم تقدم">لم تقدم     </option>


                        </select>


                        </div>
                              <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  مسار الملف  " name="url"  value="{{ old('url') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>
                                             <span class="invalid-feedback"></span>

                        </div>
                         <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  عنوان المناقصة   " name="address"  value="{{ old('address') }}"/>
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
        const url   = "{{ route('dms_tender.store') }}";
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
         <form id="editForm" enctype="multipart/form-data" style="padding: 20px;color: black;">
         @csrf
   <input type="hidden" name="id" id="manager_id" value="{{ $call->id }}">            <div class="roww">
                <h4 style="text-align:right;">الاسم الكامل  </h4>

                <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder=" الاسم الكامل  " name="project_name" id="project_name" class="@error('project_name') is-invalid @enderror" value="{{ $call->project_name }}"/>
                          <!-- @error('project_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                                        <h4 style="text-align:right;">اسم المستخدم   </h4>

                        <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder=" اسم المستخدم  " name="note" id="note" class="@error('note') is-invalid @enderror"  value="{{ $call->note }}"/>
                          <!-- @error('note')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                                        <h4 style="text-align:right;">البريد الالكتروني   </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="start_date" placeholder="البريد الالكتروني  " name="start_date" id="start_date" class="@error('start_date') is-invalid @enderror"  value="{{ $call->start_date }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <!-- @error('start_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                                        <h4 style="text-align:right;">رقم الهاتف   </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="رقم الهاتف   " id="end_date" name="end_date" class="@error('end_date') is-invalid @enderror"  value="{{ $call->end_date }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <!-- @error('end_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
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
                        <option value="manager" {{ $call->role == 'manager'   ? 'selected' : '' }}>manager</option>

                        </select>
                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="العنوان" name="organization" id="organization"  value="{{ $call->organization }}"/>
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
/* ========== DEBUG helper ========== */
function log(s){console.log('%c'+s,'color:#0a0;font-weight:bold')}

/* ========== فتح / إغلاق المودال ========== */
function togglePopuoo(){
  const pop=document.getElementById('popuppo-1');
  if(pop.classList.contains('active')){
    document.getElementById('editForm').reset();
    pop.querySelectorAll('.invalid-feedback').forEach(el=>el.textContent='')
  }
  pop.classList.toggle('active')
}

/* ========== تعبئة النموذج ========== */
function showEditPopup(id){
  log('🔍 fetch record #'+id)
  fetch(`/dms_user/edit/${id}`)
    .then(r=>r.json())
    .then(d=>{
      log('✅ data fetched')
      const f=document.getElementById('editForm');
      f.manager_id.value      = d.id
      f.project_name.value   = d.project_name
      f.note.value   = d.note
      f.start_date.value       = d.start_date
      f.end_date.value       = d.end_date
      f.organization.value     = d.organization
      f.role.value        = d.role
      const img=document.getElementById('current_program_img')
      img.src = d.image?`/img/manager/${d.image}`:''
      img.style.display=d.image?'block':'none'
      togglePopuoo()
    })
    .catch(err=>console.error(err))
}

/* ========== إرسال التعديل ========== */
// document.addEventListener('DOMContentLoaded',()=>{
//   log('🟢 DOM ready, attaching listener')
//   const form=document.getElementById('editForm')
//   form.addEventListener('submit',e=>{
//      e.preventDefault()
//      log('📤 submit captured')
//      const id   =form.manager_id.value
//      const fd   =new FormData(form)
//      fd.append('_method','PUT')
//      fetch(`/dms_user/update/${id}`,{
//         method:'POST',
//         headers:{
//           'X-CSRF-TOKEN':document.querySelector('meta[name="csrf-token"]').content,
//           'Accept':'application/json'
//         },
//         body:fd
//      })
//      .then(async resp=>{
//         const data=await resp.json()
//         log('↩️ response '+resp.status)
//         /* مسح أخطاء قديمة */
//         form.querySelectorAll('.invalid-feedback').forEach(s=>s.textContent='')
//         form.querySelectorAll('.is-invalid').forEach(i=>i.classList.remove('is-invalid'))

//         if(!resp.ok){             // 422
//            Object.entries(data.errors).forEach(([k,v])=>{
//              const inp=form.querySelector(`[name="${k}"]`)
//              const span=inp?.parentElement.querySelector('.invalid-feedback')
//              if(span){span.textContent=v[0];inp.classList.add('is-invalid')}
//            })
//            return
//         }

//         // 200 OK
//         alert(data.message)       // أبسط إشعار
//         togglePopuoo()
//         location.reload()
//      })
//      .catch(err=>console.error(err))

//   })
// })
document.addEventListener('DOMContentLoaded', () => {
  log('🟢 DOM ready, attaching listener');

  const form = document.getElementById('editForm');

  form.addEventListener('submit', e => {
    e.preventDefault();
    log('📤 submit captured');

    const id = form.manager_id.value;
    const fd = new FormData(form);
    fd.append('_method', 'PUT');

    fetch(`/dms_user/update/${id}`, {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        'Accept': 'application/json'
      },
      body: fd
    })
      .then(async resp => {
        const res = await resp.json();              // لاحظ استعمال res الآن
        log('↩️ response ' + resp.status);

        /* مسح الأخطاء القديمة */
        form.querySelectorAll('.invalid-feedback').forEach(s => s.textContent = '');
        form.querySelectorAll('.is-invalid').forEach(i => i.classList.remove('is-invalid'));

        if (!resp.ok) {                             // 422 => أخطاء فاليديشن
          Object.entries(res.errors).forEach(([k, v]) => {
            const input = form.querySelector(`[name="${k}"]`);
            const span  = input?.parentElement.querySelector('.invalid-feedback');
            if (span) span.innerHTML = `<strong style="color:red;">${v[0]}</strong>`;
            input?.classList.add('is-invalid');
          });
          return;                                   // ابقِ المودال مفتوحًا
        }

        /* 200 OK => نجاح */
        const msg = document.createElement('div');
        msg.className = 'alert alert-info';
        msg.style.textAlign = 'end';
        msg.style.fontSize  = '20px';
        msg.textContent = res.message || 'تم التعديل بنجاح';
        document.getElementById('page-wrapper').prepend(msg);

        form.reset();                               // أفرغ الحقول
        togglePopuoo();                             // أغلق المودال (دالة بحرفَين o)
        setTimeout(() => location.reload(), 800);   // انتظر 0.8 ث ثم حدث الصفحة
      })
      .catch(err => console.error(err));
  });
});
</script>
 <div class="popup" id="popupxq-1">
    <div class="overlay"></div>
    <div class="content yyy" style="height: 380px; width: 580px;">
        <div class="gf">
            <div class="close-btn" onclick="togglePopuoxq()">&times;</div>
            <h4 class="h44">تغيير كلمة السر</h4>
        </div>

        <form id="myFormMq" method="POST" style="padding: 20px; color: black;">
            @csrf
            <input type="hidden" id="user_id" name="user_id">


            <div class="input-groupp input-groupp-icon" style="margin-top: 10px;">
                <div class="input-icon"><i class="fa-solid fa-lock"></i></div>
                <input type="password" placeholder="كلمة السر" name="password" id="password"
                    class="form-control" />
                <div class="toggle-password" onclick="togglePassword('password', this)">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <span class="invalid-feedback" style="display: block;"></span>
            </div>

            <div class="input-groupp input-groupp-icon">
                <input type="password" placeholder="تأكيد كلمة السر" name="password_confirmation"
                    id="password_confirmation" class="form-control" />
                <div class="input-icon"><i class="fa-solid fa-lock"></i></div>
                <div class="toggle-password" onclick="togglePassword('password_confirmation', this)">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <span class="invalid-feedback" style="display: block;"></span>
            </div>

            <div class="roww">
                <input type="submit" value="حفظ" class="bttn" style="border: 1px solid #6db1bc;">
            </div>
        </form>
    </div>
</div>


  <script>
function togglePopuoxq(id = null) {
    const popup = document.getElementById("popupxq-1");
    if (id !== null) {
        document.getElementById("user_id").value = id;
    }
    popup.classList.toggle("active");
}

// عرض/إخفاء كلمة المرور
// function togglePassword(fieldId, el) {
//     const input = document.getElementById(fieldId);
//     const icon = el.querySelector('i');
//     if (input.type === "password") {
//         input.type = "text";
//         icon.classList.remove('fa-eye');
//         icon.classList.add('fa-eye-slash');
//     } else {
//         input.type = "password";
//         icon.classList.add('fa-eye');
//         icon.classList.remove('fa-eye-slash');
//     }
// }

// إرسال النموذج Ajax
document.getElementById("myFormMq").addEventListener("submit", function (e) {
    e.preventDefault();
    const userId = document.getElementById("user_id").value;
    const formData = new FormData(this);
    const url = `/dms_user/changePassword/${userId}`;

    fetch(url, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Accept': 'application/json'
        }
    })
    .then(async response => {
        const data = await response.json();

        // مسح الأخطاء السابقة
        document.querySelectorAll('.invalid-feedback').forEach(el => el.innerHTML = '');

        if (response.status === 422) {
            // عرض الأخطاء تحت الحقول
            Object.keys(data.errors).forEach(key => {
                const input = document.querySelector(`[name="${key}"]`);
                const errorSpan = input?.parentElement.querySelector('.invalid-feedback');
                if (errorSpan) {
                    errorSpan.innerHTML = `<strong style="color:red;">${data.errors[key][0]}</strong>`;
                }
            });
        } else {
            // عرض رسالة النجاح
            const msg = document.createElement('div');
            msg.classList.add('alert', 'alert-info');
            msg.setAttribute('role', 'alert');
            msg.style.textAlign = 'end';
            msg.style.fontSize = '20px';
            msg.innerHTML = data.message;
            document.getElementById('page-wrapper')?.prepend(msg);

            // إغلاق المودال
            document.getElementById("myFormMq").reset();
            togglePopuoxq();

            // إعادة التوجيه بعد 2 ثانية
            // بعد إظهار رسالة "تم تغيير كلمة السر"
setTimeout(() => {
    location.reload();     // تحديث الصفحة الحالية فقط
}, 2000);                  // (اختياري) تأخير حتى يرى المستخدم الرسالة

        }
    })
    .catch(err => console.error(err));
});
</script>
<div class="popup" id="popupxqw-1">
    <div class="overlay"></div>
    <div class="content yyy" style="height: 180px;
    width: 480px;">
        <div class="gf" style="background: #9f2e48;">
            <div class="close-btn" onclick="togglePopuoxqw()">&times;</div>
            <h4 class="h44">    هل تريد الحذف </h4>
        </div>

        <form id="myFormMqw" method="POST" style="padding: 20px; color: black;">
            @csrf
            <input type="hidden" id="user_id" name="user_id">

            <div class="roww">
                <input type="submit" value="حذف" class="bttnn" style="border: 1px solidrgb(225, 18, 18);">
            </div>
        </form>
    </div>
</div>
<script>
function togglePopuoxqw(id = null) {
    const popup = document.getElementById("popupxqw-1");
    if (id !== null) {
        document.getElementById("user_id").value = id;
    }
    popup.classList.toggle("active");
}


// إرسال النموذج Ajax
document.getElementById("myFormMqw").addEventListener("submit", function (e) {
    e.preventDefault();
    const userId = document.getElementById("user_id").value;
    const formData = new FormData(this);
    const url = `/dms_user/destroy/${userId}`;

    fetch(url, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Accept': 'application/json'
        }
    })
    .then(async response => {
        const data = await response.json();

        // مسح الأخطاء السابقة
        document.querySelectorAll('.invalid-feedback').forEach(el => el.innerHTML = '');

        if (response.status === 422) {
            // عرض الأخطاء تحت الحقول
            Object.keys(data.errors).forEach(key => {
                const input = document.querySelector(`[name="${key}"]`);
                const errorSpan = input?.parentElement.querySelector('.invalid-feedback');
                if (errorSpan) {
                    errorSpan.innerHTML = `<strong style="color:red;">${data.errors[key][0]}</strong>`;
                }
            });
        } else {
            // عرض رسالة النجاح
            const msg = document.createElement('div');
            msg.classList.add('alert', 'alert-info');
            msg.setAttribute('role', 'alert');
            msg.style.textAlign = 'end';
            msg.style.fontSize = '20px';
            msg.innerHTML = data.message;
            document.getElementById('page-wrapper')?.prepend(msg);

            // إغلاق المودال
            document.getElementById("myFormMqw").reset();
            togglePopuoxqw();

            // إعادة التوجيه بعد 2 ثانية
            // بعد إظهار رسالة "تم تغيير كلمة السر"
setTimeout(() => {
    location.reload();     // تحديث الصفحة الحالية فقط
}, 2000);                  // (اختياري) تأخير حتى يرى المستخدم الرسالة

        }
    })
    .catch(err => console.error(err));
});
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
//       function showEditPopup(id) {
//     fetch(`/dms_user/edit/${id}`)
//         .then(response => response.json())
//         .then(data => {
//             console.log('Data received:', data);

//             // Assign the values to the correct fields
//             document.getElementById('manager_id').value = data.id; // ضبط معرف الكورس

//             document.getElementById('project_name').value = data.project_name; // Arabic name

//             document.getElementById('note').value = data.note; // Arabic name
//             document.getElementById('start_date').value = data.start_date; // English name
//             document.getElementById('end_date').value = data.end_date; // Arabic name
//             document.getElementById('organization').value = data.organization; // Arabic name
//  document.getElementById('role').value      = data.role;
//  if (data.image) {
//                 document.getElementById('current_program_img').src = `/img/manager/${data.image}`;
//                 document.getElementById('current_program_img').style.display = 'block';
//             } else {
//                 document.getElementById('current_program_img').style.display = 'none';
//             }
//             // Update the radio button for type status

//             // Assign the ID in a hidden field
//             // document.querySelector('input[name="id"]').value = id;

//             // Show the popup
//             togglePopuoo();
//         })
//         .catch(error => console.error('Error:', error));
// }

// function updateBank(event) {
//     event.preventDefault(); // منع إعادة تحميل الصفحة

//     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

//    const formData = new FormData();
//     formData.append('project_name', document.getElementById('project_name').value);
//     formData.append('note', document.getElementById('note').value);
//     formData.append('start_date', document.getElementById('start_date').value);
//     formData.append('end_date', document.getElementById('end_date').value);
//     formData.append('role', document.getElementById('role').value);
//     formData.append('organization', document.getElementById('organization').value);


//     let managerid = document.querySelector('input[name="id"]');
// let manager_id = managerid ? managerid.value : null;
// console.log("Program ID:", manager_id);

//     console.log("Program ID:", manager_id);

//     const newImage = document.getElementById('image').files[0];
//     if (newImage) {
//         formData.append('image', newImage);
//     }

//     let url = `/dms_user/update/${manager_id}`;
//     console.log("URL:", url);
//     fetch(url, {
//         method: 'PUT',
//         headers: {
//             'X-CSRF-TOKEN': csrfToken,
//             'Accept': 'application/json' // هذا مهم لتجنب HTML response

//         },
//         body: formData
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.errors) {
//             Object.keys(data.errors).forEach(key => {
//                 let input = document.getElementById(key);
//                 if (input) {
//                     let errorSpan = input.nextElementSibling;
//                     if (!errorSpan || !errorSpan.classList.contains('invalid-feedback')) {
//                         errorSpan = document.createElement('span');
//                         errorSpan.classList.add('invalid-feedback');
//                         input.parentNode.appendChild(errorSpan);
//                     }
//                     errorSpan.innerHTML = `<strong style="color:red;">${data.errors[key][0]}</strong>`;
//                 }
//             });
//         } else {
//             let messageDiv = document.createElement('div');
//             messageDiv.classList.add('alert', 'alert-info');
//             messageDiv.setAttribute('role', 'alert');
//             messageDiv.style.textAlign = 'end';
//             messageDiv.style.fontSize = '20px';
//             messageDiv.innerHTML = data.message; // عرض رسالة النجاح

//             // إضافة الرسالة إلى #page-wrapper
//             let pageWrapper = document.getElementById('page-wrapper');
//             if (pageWrapper) {
//                 pageWrapper.prepend(messageDiv); // إضافة الرسالة في بداية #page-wrapper
//             }
//             togglePopuoo();
//             setTimeout(() => {
//     location.reload(); // تحديث الصفحة
// }, 1000);

//         }
//     })
//     .catch(error => console.error('Error:', error));
// }

    </script>

@endsection
