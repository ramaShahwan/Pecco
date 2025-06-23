@extends('layout_dms.master')
@section('content')
@if(session('user_data'))
    @php
        $userData = session('user_data');


    @endphp
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
        .bb{
            width: 100%;
    padding: 1em;
    line-height: 1.4;
    background-color: #f9f9f9;
    border: 2px solid #e5e5e5;
    border-radius: 3px;
    -webkit-transition: 0.35s ease-in-out;
    -moz-transition: 0.35s ease-in-out;
    -o-transition: 0.35s ease-in-out;
    transition: 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
        }
</style>



            <div class="container-fluid" id="page-wrapper">
@if(session()->has('message'))
        <div class="alert alert-info" role="alert" style="text-align:start;font-size: 20px; ">
          {{session()->get('message')}}
        </div>
@endif
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">CV </h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button onclick="togglePopuo()" type="button" class="m-0 font-weight-bold " style="background: #2e8f9f;
                              padding: 10px;color: white;border-radius: 20px;cursor: pointer;">اضافة سيفي جديد</button>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>الأسم</th>
                                            <th>نوع المستند</th>
                                            <th>مسار المستند  </th>
                                            <th>الاختصاص   </th>


                                            <th>الأحداث</th>


                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>الأسم</th>
                                            <th>نوع المستند</th>
                                            <th>مسار المستند  </th>
                                            <th>الاختصاص   </th>

                                            <th>الأحداث</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                         @foreach($data as $call)
                                        <tr>
                                            <td>{{$call->name}}  </td>
                                            <td>{{$call->filename}}  </td>
                                            <td>{{$call->filepath}}  </td>
                                            <td>{{$call->specialization}}</td>


                                            <td>
                                        <button  style="border: none;background: none;" onclick="showEditPopup({{ $call->id }})"><span class="las la-edit" style="font-size: 30px; color: #3f4046;"></span></button>
                                        <!-- <button  style="border: none;background: none;" onclick="showEditPopupe({{ $call->id }})"><span class="las la-eye" style="font-size: 30px; color:rgb(12, 222, 156);"></span></button> -->
   @if ($userData->role=="admin")
                                        <button  style="border: none;background: none;" onclick="togglePopuoxqw({{ $call->id }})"><span class="las la-trash-alt" style="font-size: 30px; color: #f10f0f;"></span></button>
 @endif
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
            <div class="content" style="height: 530px;">
                <div class="gf">
                <div class="close-btn" onclick="togglePopuo()"><i class="las la-times-circle"></i></div>
                                <h4 class="h44">اضافة   سيفي جديد</h4>

                </div>

                <!-- <div class="containerr"> -->
              <form id="myForm" enctype="multipart/form-data" style="padding:20px;color:black">
                @csrf
                <div class="roww">

                        <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder="الاسم  " name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror"/>
                          <!-- @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  نوع المستند  " name="filename" value="{{ old('filename') }}" class="@error('filename') is-invalid @enderror"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <!-- @error('filename')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->

                        </div>
                         <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  مسار المستند  " name="filepath" value="{{ old('filepath') }}" class="@error('filepath') is-invalid @enderror"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <!-- @error('filepath')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
 <span class="invalid-feedback"></span>
                        </div>
                        <!-- <h4 style="font-size: 20px;">تاريخ  المستند </h4> -->
                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="الاختصاص      " name="specialization" class="@error('specialization') is-invalid @enderror"  value="{{ old('specialization') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>

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
        const url   = "{{ route('dms_document.store') }}";
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
         <div class="content" style="height: 570px;">
         <div class="gf">
                <div class="close-btn" onclick="togglePopuoo()"><i class="las la-times-circle"></i></div>
                <h4 class="h44">   تعديل بيانات سيفي</h4>

                </div>

         @if(isset($call))
         <form id="editForm" enctype="multipart/form-data" style="padding: 20px;color: black;">
         @csrf
   <input type="hidden" name="id" id="document_id" value="{{ $call->id }}">            <div class="roww">
                <h4 style="text-align:right;">الاسم   </h4>

                <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder=" الاسم   " name="name" id="name" class="@error('name') is-invalid @enderror" value="{{ $call->name }}"/>
                          <!-- @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                                        <h4 style="text-align:right;"> نوع الملف   </h4>

                        <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder="  نوع الملف  " name="filename" id="filename" class="@error('filename') is-invalid @enderror"  value="{{ $call->filename }}"/>
                          <!-- @error('filename')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                                        <h4 style="text-align:right;"> مسار الملف   </h4>

                         <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  مسار الملف  " name="filepath" value="{{ $call->filepath }}" class="@error('filepath') is-invalid @enderror"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <!-- @error('filepath')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
 <span class="invalid-feedback"></span>
                        </div>

                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="الاختصاص      " name="specialization" class="@error('specialization') is-invalid @enderror"  value="{{ $call->specialization }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>

                      <span class="invalid-feedback"></span>
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
  fetch(`/dms_document/edit/${id}`)
    .then(r=>r.json())
    .then(d=>{
      log('✅ data fetched')
      const f=document.getElementById('editForm');

      f.document_id.value      = d.id
      f.name.value   = d.name
      f.filename.value   = d.filename
      f.filepath.value   = d.filepath

      f.specialization.value       = d.specialization;

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
//      const id   =form.document_id.value
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

    const id = form.document_id.value;
    const fd = new FormData(form);
    fd.append('_method', 'PUT');

    fetch(`/dms_document/update/${id}`, {
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
        msg.style.textAlign = 'start';
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
            <input type="hidden" id="documents_id" name="documents_id">

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
        document.getElementById("documents_id").value = id;
    }
    popup.classList.toggle("active");
}


// إرسال النموذج Ajax
document.getElementById("myFormMqw").addEventListener("submit", function (e) {
    e.preventDefault();
    const userId = document.getElementById("documents_id").value;
    const formData = new FormData(this);
    const url = `/dms_document/destroy/${userId}`;

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
            msg.style.textAlign = 'start';
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


      @endif
@endsection
