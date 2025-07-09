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
                    <h1 class="h3 mb-2 text-gray-800">المناقصات </h1>
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
                                            <th>مسار الملف</th>
                                            <th>تاريخ بداية المناقصة </th>
                                            <th>تاريخ نهاية المناقصة</th>
                                            <th>تاريخ الزيارة</th>
                                            <th>حالة الزيارة</th>
                                            <th>المنظمة</th>
                                            <th>حالة المناقصة</th>
                                            <th>المستخدم الذي قام بانشاء الملف    </th>

                                            <th>الأحداث</th>


                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>الأسم</th>
                                            <th>ملاحظات</th>
                                            <th>مسار الملف</th>
                                            <th>تاريخ بداية المناقصة </th>
                                            <th>تاريخ نهاية المناقصة</th>
                                            <th>تاريخ الزيارة</th>
                                            <th>حالة الزيارة</th>
                                            <th>المنظمة</th>
                                            <th>حالة المناقصة</th>
                                            <th>المستخدم الذي قام بانشاء الملف    </th>


                                            <th>الأحداث</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                         @foreach($data as $call)
                                        <tr>
                                            <td>{{$call->project_name}}  </td>
                                            <td>{{$call->note}}  </td>
                                            <td><a href="{{$call->url}}" target="_blank">مسار الملف</a></td>
                                            <td>{{$call->start_date}}  </td>
                                            <td>{{$call->end_date}}</td>
                                            <td>{{$call->visit_date}}  </td>
                                            <td>{{$call->visit_status}}  </td>
                                            <td>{{$call->organization}}  </td>
                                            <td>{{$call->tender_status}}  </td>
                                            <td>{{$call->User->full_name}}</td>
                                            <td>
                                        <button  style="border: none;background: none;" onclick="showEditPopup({{ $call->id }})"><span class="las la-edit" style="font-size: 30px; color: #3f4046;"></span></button>
                                        <button  style="border: none;background: none;" onclick="showEditPopupe({{ $call->id }})"><span class="las la-eye" style="font-size: 30px; color:rgb(12, 222, 156);"></span></button>
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

                        </div>
                        <h4 style="font-size: 20px;">تاريخ اعلان المناقصة </h4>
                        <div class="input-groupp input-groupp-icon">
                          <input type="date" placeholder="تاريخ اعلان المناقصة    " name="start_date" class="@error('start_date') is-invalid @enderror"  value="{{ old('start_date') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>

                      <span class="invalid-feedback"></span>
                        </div>
                        <h4 style="font-size: 20px;">تاريخ تسليم المناقصة </h4>

                       <div class="input-groupp input-groupp-icon">
                          <input type="date" placeholder="تاريخ تسليم المناقصة     " name="end_date" class="@error('end_date') is-invalid @enderror"  value="{{ old('end_date') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>

                      <span class="invalid-feedback"></span>
                        </div>                         <h4 style="font-size: 20px;">تاريخ  الزيارة </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="date" placeholder="تاريخ  الزيارة    " name="visit_date" class="@error('visit_date') is-invalid @enderror"  value="{{ old('visit_date') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>


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

    <span class="invalid-feedback"></span>
                        </div>

                          <div class="input-groupp" style="display: flex;">
                           <select name="tender_status" id="tender_status" class="@error('tender_status') is-invalid @enderror" style="width: 400px;">
                         <option value=" ">اختر حالة المناقصة   </option>
                           <option value=" جاري التقديم">جاري التقديم   </option>

                           <option value=" مقبولة">مقبولة   </option>
                        <option value="  مرفوضة">مرفوضة  </option>
                        <option value="   لم تقدم">لم تقدم     </option>


                        </select>

<span class="invalid-feedback"></span>
                        </div>


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

                        </div>
                             <div class="input-groupp" style="display: flex;">
                           <select name="check_status" id="check_status" class="@error('check_status') is-invalid @enderror" style="width: 400px;">
                         <option value=" ">اختر حالة الشيك   </option>

                           <option value=" مقبول">مقبول   </option>
                        <option value="  مرفوض">مرفوض  </option>
                        <option value="   لم يقدم">لم يقدم     </option>


                        </select>
<span class="invalid-feedback"></span>

                        </div>

                              <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  مسار الملف  " name="url"  value="{{ old('url') }}"/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>
                                             <span class="invalid-feedback"></span>

                        </div>
                         <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  عنوان المناقصة   " name="address"  value="{{ old('address') }}"/>
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
                <h4 class="h44">   تعديل بيانات المناقصة</h4>

                </div>

         @if(isset($call))
         <form id="editForm" enctype="multipart/form-data" style="padding: 20px;color: black;">
         @csrf
   <input type="hidden" name="id" id="tender_id" value="{{ $call->id }}">            <div class="roww">
                <h4 style="text-align:right;">الاسم المناقصة  </h4>

                <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder=" الاسم المناقصة  " name="project_name" id="project_name" class="@error('project_name') is-invalid @enderror" value="{{ $call->project_name }}"/>
                          <!-- @error('project_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                                        <h4 style="text-align:right;"> ملاحظات المناقصة   </h4>

                        <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder="  ملاحظات المناقصة  " name="note" id="note" class="@error('note') is-invalid @enderror"  value="{{ $call->note }}"/>
                          <!-- @error('note')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                         <h4 style="font-size: 20px;">تاريخ اعلان المناقصة </h4>


                        <div class="input-groupp input-groupp-icon">
                          <input type="date" placeholder="تاريخ اعلان المناقصة  " name="start_date" id="start_date" class="@error('start_date') is-invalid @enderror"  value="{{ $call->start_date }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <!-- @error('start_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                                         <h4 style="font-size: 20px;">تاريخ تسليم المناقصة </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="date" placeholder="تاريخ تسليم المناقصة    " id="end_date" name="end_date" class="@error('end_date') is-invalid @enderror"  value="{{ $call->end_date }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <!-- @error('end_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                        <h4 style="font-size: 20px;">تاريخ  الزيارة </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="date" placeholder="تاريخ  الزيارة    " name="visit_date" class="@error('visit_date') is-invalid @enderror"  value="{{ $call->visit_date }}"/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>


                        </div>



            </div>

            <div class="roww">
                                         <h4 style="font-size: 20px;">حالة الزيارة  </h4>

                        <div class="input-groupp" style="display: flex;">
                           <select name="visit_status" id="visit_status" class="@error('visit_status') is-invalid @enderror" style="width: 400px;">


                           <option value="تمت الزيارة" {{ $call->visit_status == 'تمت الزيارة' ? 'selected' : '' }}>تمت الزيارة  </option>
                        <option value="لم تتم الزيارة" {{ $call->visit_status == 'لم تتم الزيارة' ? 'selected' : '' }}>لم تتم الزيارة</option>
                        <option value="لا يوجد زيارة لها" {{ $call->visit_status == 'لا يوجد زيارة لها' ? 'selected' : '' }}>لا يوجد زيارة لها  </option>


                        </select>

    <span class="invalid-feedback"></span>
                        </div>
                         <h4 style="font-size: 20px;">حالة المناقصة </h4>

                          <div class="input-groupp" style="display: flex;">
                           <select name="tender_status" id="tender_status" class="@error('tender_status') is-invalid @enderror" style="width: 400px;">

                           <option value="جاري التقديم" {{ $call->tender_status == 'جاري التقديم' ? 'selected' : '' }}>جاري التقديم   </option>

                           <option value="مقبولة" {{ $call->tender_status == 'مقبولة' ? 'selected' : '' }}>مقبولة   </option>
                        <option value="مرفوضة" {{ $call->tender_status == 'مرفوضة' ? 'selected' : '' }}>مرفوضة  </option>
                        <option value="لم تقدم" {{ $call->tender_status == 'لم تقدم' ? 'selected' : '' }}>لم تقدم     </option>


                        </select>

<span class="invalid-feedback"></span>
                        </div>

                         <h4 style="font-size: 20px;"> اسم المنظمة </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="اسم المنظمة" name="organization"  value="{{ $call->organization }}"/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>
                                             <span class="invalid-feedback"></span>

                        </div>
                                                 <h4 style="font-size: 20px;">الرقم المرجعي للمناقصة   </h4>

  <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="الرقم المرجعي للمناقصة " name="reference_number"  value="{{ $call->reference_number }}"/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>
                                             <span class="invalid-feedback"></span>

                        </div>
                                                 <h4 style="font-size: 20px;">  قيمة الشيك </h4>

                         <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  قيمة الشيك " name="check_value"  value="{{ $call->check_value }}"/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>

                        </div>
                                                 <h4 style="font-size: 20px;"> حالة الشيك </h4>

                             <div class="input-groupp" style="display: flex;">
                           <select name="check_status" id="check_status" class="@error('check_status') is-invalid @enderror" style="width: 400px;">


                           <option value="مقبول" {{ $call->check_status == 'مقبول' ? 'selected' : '' }}>مقبول   </option>
                        <option value="مرفوض" {{ $call->check_status == 'مرفوض' ? 'selected' : '' }}>مرفوض  </option>
                        <option value="لم يقدم" {{ $call->check_status == 'لم يقدم' ? 'selected' : '' }}>لم يقدم     </option>


                        </select>
<span class="invalid-feedback"></span>

                        </div>
                         <h4 style="font-size: 20px;"> مسار الملف </h4>

                              <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  مسار الملف  " name="url"  value="{{ $call->url }}"/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>
                                             <span class="invalid-feedback"></span>

                        </div>
                         <h4 style="font-size: 20px;">عنوان المناقصة </h4>
                         <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  عنوان المناقصة   " name="address"  value="{{ $call->address }}"/>
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
  fetch(`/dms_tender/edit/${id}`)
    .then(r=>r.json())
    .then(d=>{
      log('✅ data fetched')
      const f=document.getElementById('editForm');
      const iso = s => (s ? new Date(s).toISOString().slice(0,10) : '');
      f.tender_id.value      = d.id
      f.project_name.value   = d.project_name
      f.note.value   = d.note
      f.start_date.value       = iso(d.start_date);
      f.end_date.value       = iso(d.end_date);
      f.organization.value     = d.organization
      f.visit_date.value     = iso(d.visit_date);
      f.visit_status.value     = d.visit_status
      f.tender_status.value     = d.tender_status
      f.reference_number.value     = d.reference_number
      f.check_value.value     = d.check_value
      f.check_status.value     = d.check_status
      f.url.value     = d.url
      f.address.value     = d.address
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
//      const id   =form.tender_id.value
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

    const id = form.tender_id.value;
    const fd = new FormData(form);
    fd.append('_method', 'PUT');

    fetch(`/dms_tender/update/${id}`, {
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
 <div class="popup" id="popuppoe-1">
          <div class="overlay"></div>
         <div class="content">
         <div class="gf">
                <div class="close-btn" onclick="togglePopuooe()"><i class="las la-times-circle"></i></div>
                <h4 class="h44">   عرض بيانات المناقصة</h4>

                </div>

         @if(isset($call))
         <form id="editForme" enctype="multipart/form-data" style="padding: 20px;color: black;">
         @csrf
   <input type="hidden" name="id" id="tender_id" value="{{ $call->id }}">            <div class="roww">
                <h4 style="text-align:right;">الاسم المناقصة  </h4>

                <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder=" الاسم المناقصة  " name="project_name" id="project_name" class="@error('project_name') is-invalid @enderror" value="{{ $call->project_name }}" readonly/>
                          <!-- @error('project_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                                        <h4 style="text-align:right;"> ملاحظات المناقصة   </h4>

                        <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder="  ملاحظات المناقصة  " name="note" id="note" class="@error('note') is-invalid @enderror"  value="{{ $call->note }}" readonly/>
                          <!-- @error('note')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                         <h4 style="font-size: 20px;">تاريخ اعلان المناقصة </h4>


                        <div class="input-groupp input-groupp-icon">
                          <input type="date" placeholder="تاريخ اعلان المناقصة  " name="start_date" id="start_date" class="@error('start_date') is-invalid @enderror"  value="{{ $call->start_date }}" readonly/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <!-- @error('start_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                                         <h4 style="font-size: 20px;">تاريخ تسليم المناقصة </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="date" placeholder="تاريخ تسليم المناقصة    " id="end_date" name="end_date" class="@error('end_date') is-invalid @enderror"  value="{{ $call->end_date }}" readonly/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <!-- @error('end_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror -->
                      <span class="invalid-feedback"></span>
                        </div>
                        <h4 style="font-size: 20px;">تاريخ  الزيارة </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="date" placeholder="تاريخ  الزيارة    " name="visit_date" class="@error('visit_date') is-invalid @enderror"  value="{{ $call->visit_date }}" readonly/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>


                        </div>



            </div>

            <div class="roww">
                                         <h4 style="font-size: 20px;">حالة الزيارة  </h4>

                        <div class="input-groupp input-groupp-icon" >
                           <!-- <select name="visit_status" id="visit_status" class="@error('visit_status') is-invalid @enderror" style="width: 400px;">


                           <option value="تمت الزيارة" {{ $call->visit_status == 'تمت الزيارة' ? 'selected' : '' }}>تمت الزيارة  </option>
                        <option value="لم تتم الزيارة" {{ $call->visit_status == 'لم تتم الزيارة' ? 'selected' : '' }}>لم تتم الزيارة</option>
                        <option value="لا يوجد زيارة لها" {{ $call->visit_status == 'لا يوجد زيارة لها' ? 'selected' : '' }}>لا يوجد زيارة لها  </option>


                        </select> -->
                        <input type="text" placeholder="تاريخ تسليم المناقصة    " id="visit_status" name="visit_status" class="@error('visit_status') is-invalid @enderror"  value="{{ $call->visit_status }}" readonly/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>

    <span class="invalid-feedback"></span>
                        </div>
                         <h4 style="font-size: 20px;">حالة المناقصة </h4>

                          <div class="input-groupp input-groupp-icon" >
                           <!-- <select name="tender_status" id="tender_status" class="@error('tender_status') is-invalid @enderror" style="width: 400px;">

                           <option value="جاري التقديم" {{ $call->tender_status == 'جاري التقديم' ? 'selected' : '' }}>جاري التقديم   </option>

                           <option value="مقبولة" {{ $call->tender_status == 'مقبولة' ? 'selected' : '' }}>مقبولة   </option>
                        <option value="مرفوضة" {{ $call->tender_status == 'مرفوضة' ? 'selected' : '' }}>مرفوضة  </option>
                        <option value="لم تقدم" {{ $call->tender_status == 'لم تقدم' ? 'selected' : '' }}>لم تقدم     </option>


                        </select> -->
                        <input type="text" placeholder="      " id="tender_status" name="tender_status" class="@error('tender_status') is-invalid @enderror"  value="{{ $call->tender_status }}" readonly/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>

<span class="invalid-feedback"></span>
                        </div>

                         <h4 style="font-size: 20px;"> اسم المنظمة </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="اسم المنظمة" name="organization"  value="{{ $call->organization }}" readonly/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>
                                             <span class="invalid-feedback"></span>

                        </div>
                                                 <h4 style="font-size: 20px;">الرقم المرجعي للمناقصة   </h4>

  <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="الرقم المرجعي للمناقصة " name="reference_number"  value="{{ $call->reference_number }}" readonly/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>
                                             <span class="invalid-feedback"></span>

                        </div>
                                                 <h4 style="font-size: 20px;">  قيمة الشيك </h4>

                         <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  قيمة الشيك " name="check_value"  value="{{ $call->check_value }}" readonly/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>

                        </div>
                                                 <h4 style="font-size: 20px;"> حالة الشيك </h4>

                             <div class="input-groupp input-groupp-icon" >
                           <!-- <select name="check_status" id="check_status" class="@error('check_status') is-invalid @enderror" style="width: 400px;">


                           <option value="مقبول" {{ $call->check_status == 'مقبول' ? 'selected' : '' }}>مقبول   </option>
                        <option value="مرفوض" {{ $call->check_status == 'مرفوض' ? 'selected' : '' }}>مرفوض  </option>
                        <option value="لم يقدم" {{ $call->check_status == 'لم يقدم' ? 'selected' : '' }}>لم يقدم     </option>


                        </select> -->
                        <input type="text" placeholder="      " id="check_status" name="check_status" class="@error('check_status') is-invalid @enderror"  value="{{ $call->check_status }}" readonly/>
                          <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
<span class="invalid-feedback"></span>

                        </div>
                         <h4 style="font-size: 20px;"> مسار الملف </h4>

                              <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  مسار الملف  " name="url"  value="{{ $call->url }}" readonly/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>
                                             <span class="invalid-feedback"></span>

                        </div>
                         <h4 style="font-size: 20px;">عنوان المناقصة </h4>
                         <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  عنوان المناقصة   " name="address"  value="{{ $call->address }}" readonly/>
                          <div class="input-icon"><i class="fa-solid fa-audio-description"></i></div>

                        </div>


                      </div>

            <div class="roww">
                <!-- <input type="submit"  onclick="togglePopuooe()" value="حفظ" class="bttn"> -->
                <button onclick="togglePopuooe()" class="bttn bb">اغلاق</button>
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
function togglePopuooe(){
  const pop=document.getElementById('popuppoe-1');
  if(pop.classList.contains('active')){
    document.getElementById('editForme').reset();
    pop.querySelectorAll('.invalid-feedback').forEach(el=>el.textContent='')
  }
  pop.classList.toggle('active')
}

/* ========== تعبئة النموذج ========== */
function showEditPopupe(id){
  log('🔍 fetch record #'+id)
  fetch(`/dms_tender/show/${id}`)
    .then(r=>r.json())
    .then(d=>{
      log('✅ data fetched')
      const f=document.getElementById('editForme');
      const iso = s => (s ? new Date(s).toISOString().slice(0,10) : '');
      f.tender_id.value      = d.id
      f.project_name.value   = d.project_name
      f.note.value   = d.note
      f.start_date.value       = iso(d.start_date);
      f.end_date.value       = iso(d.end_date);
      f.organization.value     = d.organization
      f.visit_date.value     = iso(d.visit_date);
      f.visit_status.value     = d.visit_status
      f.tender_status.value     = d.tender_status
      f.reference_number.value     = d.reference_number
      f.check_value.value     = d.check_value
      f.check_status.value     = d.check_status
      f.url.value     = d.url
      f.address.value     = d.address
      togglePopuooe()
    })
    .catch(err=>console.error(err))
}
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
            <input type="hidden" id="tenders_id" name="tenders_id">

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
        document.getElementById("tenders_id").value = id;
    }
    popup.classList.toggle("active");
}


// إرسال النموذج Ajax
document.getElementById("myFormMqw").addEventListener("submit", function (e) {
    e.preventDefault();
    const userId = document.getElementById("tenders_id").value;
    const formData = new FormData(this);
    const url = `/dms_tender/destroy/${userId}`;

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
//             document.getElementById('tender_id').value = data.id; // ضبط معرف الكورس

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
// let tender_id = managerid ? managerid.value : null;
// console.log("Program ID:", tender_id);

//     console.log("Program ID:", tender_id);

//     const newImage = document.getElementById('image').files[0];
//     if (newImage) {
//         formData.append('image', newImage);
//     }

//     let url = `/dms_user/update/${tender_id}`;
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
      @endif
@endsection
