@extends('layout_user.mester')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    select{
        width: 100%;
    }
    .bbtn{
        border: none;
    padding: 10px;
    background-color: #61baaf;
    color: white;
    border-radius: 20px;
    }
    .bttn:hover{
        background-color: #61baaf;
        color: white;
        font-size: 17px;
        font-weight: 600;
    }
    .popup .overlay{
        position: fixed;
            top: 0px;
            left: 0px;
            width: 100vw;
            height: 100vw;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1500;
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
    /* height: 600px; */
    overflow: auto;
    height: 220px;
    z-index: 2000;
    text-align: center;
    /* padding: 20px; */
    box-sizing: border-box;
    box-shadow: inset 0px 1px 19px 1px rgb(109 177 188);

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
    .card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .25rem;
}
.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, .03);
    border-bottom: 1px solid rgba(0, 0, 0, .125);
}
.table td, .table th {
    text-align: center;
    font-size: 17px;
    padding: .75rem !important;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
.popup .overlay{
    position: fixed;
            top: 0px;
            left: 0px;
            width: 100vw;
            height: 100vw;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1500;
            display: none;
        }
        .gf{
            background: rgb(109 177 188);
            padding: 10px 0px;
        }
        .h44{
            font-weight: 600;
            color: white;
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
    /* height: 600px; */
    overflow: auto;
    height: 220px;
    z-index: 2000;
    text-align: center;
    /* padding: 20px; */
    box-sizing: border-box;
    box-shadow: inset 0px 1px 19px 1px rgb(109 177 188);

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
          /* شكل المفتاح */
          .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* شريط الخلفية */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        /* اللون الأخضر عند التفعيل */
        input:checked + .slider {
            background-color: green;
        }

        /* تحريك الزر عند التفعيل */
        input:checked + .slider:before {
            transform: translateX(26px);
        }

input[type="radio"]:checked + label,
input:checked + label:active {
  /* background-color: #f0a500; */
  background-color: #61baaf;
  color: #fff;
  /* border-color: #bd8200; */
  border-color: #61baaf;
}
body{
    color: #403e3e;
}
.input-groupp-icon input {
    text-align: end;
    padding-right: 4.4em;
}
.gg{
    font-size: 20px;
    border: none;
    background: none;
    border-radius: none;
    color: #ff0404;
    padding: 0;
}
.gg:hover{
    font-size: 20px;
    border: none;
    background: none;
    border-radius: none;
    color: #ff0404;
}
.table-responsive {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; /* يجعل التمرير سلسًا */
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    text-align: center;
    padding: 8px;
}

@media screen and (max-width: 768px) {
    table {
        font-size: 12px; /* تقليل حجم النص */
    }

    th, td {
        padding: 4px; /* تقليل المسافات بين النصوص */
    }
}
.active-row {
    background-color: #d4edda;
}
.table-bordered > thead > tr > th,.table-bordered > tbody > tr > td{
    border:none;
}
.table-bordered{
    border:none;
}
/* .table-bordered > tbody > tr:hover{
    background: rgb(109 177 188);
    color: white;
} */
.ttr{
    border-bottom: 1px solid #bdd7d3;
}
.ttr:hover{
    background: rgb(109 177 188) !important;
    color: #101010;
    box-shadow: 0px 0px 7px 0px rgb(109 177 188);
}
.table-striped > tbody > tr:nth-child(odd) > td{
    background:none;
}
.bttnP{
        border: 2px solid red;
    padding: 10px;
    /* background-color: #61baaf; */
    color: black;
    border-radius: 20px;
    }
    .bttnP:hover{
        background-color: red;
        color: white;
        font-size: 17px;
        font-weight: 600;
    }
</style>




        <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
    @if(session()->has('message'))
        <div class="alert alert-info" role="alert" style="text-align:end;font-size: 20px; ">
          {{session()->get('message')}}
        </div>
@endif
        <div class="row" style="    margin: 80px 30px; direction: rtl;">
            <div class="col-lg-12">
                <div class="card" style="    border: 1px solid rgb(109 177 188);
    box-shadow: 1px 1px 7px 0px rgb(109 177 188);">
                        <div class="card-header" style="text-align: start;font-size: 20px;display: flex;justify-content: space-between;align-items: center; background: #bdd7d3;
    color: white;">
                            <h3><i class="fa-solid fa-file-invoice"></i> جميع الايصالات</h3>
                            <!-- <button onclick="togglePopuo()" class="bbtn">اضافة سنة</button> -->
                        </div>
                        <div class="card-block">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-condensed">
            <thead style="text-align: center;background: rgb(109 177 188);
    color: white;">
                <tr>
                <th>#</th>
                    <th>رقم الايصال </th>
                    <th>اسم الكامل </th>
                    <th>اسم الدورة التدريبية</th>
                    <th>حالة الوصل</th>
                    <th>السعر بعد الحسم</th>
                    <th>تاريخ التسجيل عللى الدورة التدريبية</th>
                    <th>التفاصيل</th>
                    <th>الحذف</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
            <?php $i = 1 ?>
                @foreach($data as $call)
                <tr class="ttr">
                <td>{{$i++}}</td>
                    <td>{{$call->id}}</td>
                    <td>{{$call->bimar_trainee->trainee_fname_ar}} <span style="margin-right: 2px;">{{$call->bimar_trainee->trainee_lname_ar}}</span></td>
                    <td>{{$call->bimar_course_enrollment->bimar_training_course->tr_course_name_ar}}</td>
                    <td>{{$call->bimar_payment_status->tr_pay_status_name_ar}}</td>
                    <td>{{$call->tr_enrol_pay_net_price}}</td>
                    <td>{{$call->tr_enrol_pay_reg_date}}</td>
                    <td>
                        <a href="{{url('user_trainee/bill_courses',$call->id)}}" class="btn btn-sm" style="color: #686363; border-color: #686363;">التفاصيل</a>
                    </td>
                    <td>

                        <!-- <form action="{{url('user_trainee/cancle_bill',$call->id)}}" method="post">
                            @csrf
                            <input type="submit" class="gg" value="X" onclick="return confirm('هل تريد الحذف')">
                        </form> -->
                        @if($call->bimar_payment_status_id == "1" )
                                        <button onclick="showEditPopupcancal({{ $call->id }})" style="border: none;background: none; " class="gg">X </button>
@else
<button  style="border: none;background: none; color:green; " class="gg"><i class="fa-solid fa-check"></i></button>
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
            <!-- /. PAGE INNER  -->
        </div>


        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div class="popup" id="popuppoo-1">
            <div class="overlay"></div>
            <div class="content">
                <div class="close-btn" onclick="togglePopuooo()">&times;</div>
                <!-- <div class="containerr"> -->
                <form id="disactiveForm" onsubmit="submitDisactive(); return false;">
    @csrf
    <input type="hidden" id="disactive_id" name="id">
                      <div class="roww">
                        <h4> الغاء التسجيل   </h4>

                        <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-sharp fa-solid fa-calendar-week"></i></div>
                          <input type="text" placeholder=" شرح و ملاحظات الغاء التسجيل   " name="tr_enrol_pay_deactivate_desc" class="@error('tr_enrol_pay_deactivate_desc') is-invalid @enderror" id="tr_enrol_pay_deactivate_desc"/>
                          @error('tr_enrol_pay_deactivate_desc')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>





                      </div>


                      <div class="roww">
                       <input type="submit" value="حفظ" class="bttn" >
                      </div>
                    </form>
                  <!-- </div> -->

            </div>
        </div>

 <div class="popup" id="popuppooP-1">
            <div class="overlay"></div>
            <div class="content" style="padding: 0px;">
                <div class="gf">
               <div class="close-btn" style="    background: none;" onclick="togglePopuoop()"><i class="las la-times-circle"></i></div>
               <h4 class="h44">الحذف  </h4>
               </div>
                <!-- <div class="containerr"> -->
                <form id="cancalForm" onsubmit="submitcancal(); return false;" style="padding: 20px;color: black;">
                @csrf
                <!-- <form action="{{url('bank/store')}}" method="post" enctype="multipart/form-data">
                @csrf -->
                <input type="hidden" name="id" id="id">
                <!-- input type="hidden" id="active_id" name="id"> -->
                      <div class="roww">
                        <h4 class="pp"> هل تريد الحذف    </h4>
                      </div>
                      <div class="roww">
                       <input type="submit" value="حفظ" class="bttnP">
                      </div>
                    </form>
                  <!-- </div> -->

            </div>
        </div>


    <!-- /. FOOTER  -->
    <script>
        function togglePopuo(){
            document.getElementById("popup-1").classList.toggle("active");
        }
        function togglePopuoo(){
            document.getElementById("popuppo-1").classList.toggle("active");
        }
        function togglePopuoop(){
            document.getElementById("popuppooP-1").classList.toggle("active");
        }
    </script>
    <script>
        function showEditPopupcancal(id) {
    // فتح نافذة التعديل
    togglePopuoop();

    // إرسال طلب AJAX لجلب البيانات
    fetch(`/user_trainee/deactivate_cancle/${id}`)
        .then(response => response.json())
        .then(data => {
            // تعبئة الحقول بالبيانات
            // تأكد من أن الاستجابة تحتوي على البيانات المطلوبة
            document.getElementById('cancalForm').querySelector('input[name="id"]').value = data.id;
        })
        .catch(error => console.error('خطأ في جلب البيانات:', error));
}

function togglePopuoop(){
            document.getElementById("popuppooP-1").classList.toggle("active");
        }
        function submitcancal() {
    const form = document.getElementById('cancalForm');
    const formData = new FormData(form);

    fetch(`/user_trainee/cancle_bill/${formData.get('id')}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: formData
    })
    // .then(response => response.json())
    // .then(data => {
    //     if (data.success) {
    //         alert('تم الغاء التفعيل بنجاح');
    //         window.location.href = '/bill/all'; // تحديث الصفحة بعد إتمام العملية
    //     } else {
    //         alert(data.message || 'حدث خطأ');
    //     }
    // })
    // .catch(error => {
    //     console.error('خطأ في الطلب:', error);
    //     alert('حدث خطأ غير متوقع');
    // });
    .then(response => response.json())
    .then(data => {
        console.log("Response Data:", data);

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

            let pageWrapper = document.getElementById('page-wrapper');
            if (pageWrapper) {
                pageWrapper.prepend(messageDiv);
            }

            // إغلاق النافذة وتحديث الصفحة بعد 1 ثانية
            togglePopuoop();
            setTimeout(() => {
                location.reload();
            }, 1000);
        }
    })
    .catch(error => console.error('Error:', error));
}

    </script>
    <script>
        // JavaScript to handle toggle switch behavior
    document.querySelectorAll('.toggle-switch input').forEach((toggle) => {
        toggle.addEventListener('change', function() {
            if (this.checked) {
                this.parentElement.parentElement.classList.add('highlight');
            } else {
                this.parentElement.parentElement.classList.remove('highlight');
            }
        });
    });
    //switch
    document.querySelector('input[type="checkbox"]').addEventListener('change', function() {
      if(this.checked) {
        console.log("مفعل");
      } else {
        console.log("غير مفعل");
      }
    });

    </script>
    <script>

//deactive

    function showEditPopupdisactive(id) {
        togglePopuooo();

        fetch(`/user_trainee/mydeactivate_show/${id}`)
            .then(response => response.json())
            .then(data => {
                console.log('Data:', data); // سجل التصحيح
                document.getElementById('disactive_id').value = id;
                document.getElementById('tr_enrol_pay_deactivate_desc').value = data.tr_enrol_pay_deactivate_desc || '';
            })
            .catch(error => console.error('خطأ في جلب البيانات:', error));
    }

    function togglePopuooo() {
        document.getElementById("popuppoo-1").classList.toggle("active");
    }

    function submitDisactive() {
    const form = document.getElementById('disactiveForm');
    const formData = new FormData(form);

    // منع إرسال النموذج بشكل افتراضي
    event.preventDefault();

    fetch(`/user_trainee/deactivate_my_bill/${formData.get('id')}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: formData,
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                alert('تم الغاء التسجيل بنجاح');
                // إعادة توجيه المستخدم إلى صفحة الفواتير
                window.location.href = '/user_trainee/get_bills';
            } else {
                alert(data.message || 'حدث خطأ');
            }
        })
        .catch((error) => {
            console.error('خطأ في الطلب:', error);
            alert('حدث خطأ غير متوقع');
        });
}

    </script>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
@endsection
