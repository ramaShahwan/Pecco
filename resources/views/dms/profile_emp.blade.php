@extends('layout_dms.master')
@section('content')
<style>
    .containerr{
        padding: 0;
        box-shadow: inset 0px 1px 19px 1px rgb(109 177 188);
    }
    .gf{
            background: rgb(109 177 188);
            padding: 20px 0px;
        }
        .h44{
            font-weight: 600;
            color: white;
        }
        h4{
    text-align: center;
}
.input-groupp-icon input {
    text-align: right;
    padding-right: 4.4em;
}
</style>
 <div class="container-fluid">

                 @if(session()->has('message'))
    <div class="alert alert-info" role="alert" style="font-size: 20px;
    direction: rtl;">
        {!! session()->get('message') !!}
    </div>
@endif
            <div class="containerr">
            <h4 class="h44 gf"> الملف الشخصي  </h4>

            <form action=" " method="Post" enctype="multipart/form-data" style="padding: 20px;color: black;">
            @csrf
            @method('PUT')

              <div class="roww">
                        <h4 style="text-align: right;margin-bottom: 12px;"> الاسم   </h4>
                        <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder="الاسم   " value="عتع" name="full_name" id="full_name" class="@error('full_name') is-invalid @enderror"/>
                          @error('full_name')
                          <span class="invalid-feedback" role="alert">
                              <strong style="color:red;">{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                         <h4 style="text-align: right;margin-bottom: 12px;"> اسم المستخدم   </h4>
                        <div class="input-groupp input-groupp-icon">
                            <div class="input-icon"><i class="fa-solid fa-signature"></i></div>
                          <input type="text" placeholder="الاسم   " value="عتع" name="user_name" id="user_name" class="@error('user_name') is-invalid @enderror"/>
                          @error('user_name')
                          <span class="invalid-feedback" role="alert">
                              <strong style="color:red;">{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>





                        <h4 style="text-align: right;margin-bottom: 12px;"> رقم الموبايل   </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  رقم الموبايل  " value="0241" name="phone" id="phone" class="@error('phone') is-invalid @enderror"/>
                          <div class="input-icon"><i class="fa-solid fa-phone"></i></div>
                          @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong style="color:red;">{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                        <h4 style="text-align: right;margin-bottom: 12px;"> البريد الالكتروني   </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="email" placeholder="  البريد الكتروني   " value="سءيشسي" name="email" id="email" class="@error('email') is-invalid @enderror"/>
                          <div class="input-icon">  <i class="fa-solid fa-envelope"></i></div>
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong style="color:red;">{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                        <h4 style="text-align: right; margin-bottom: 12px;"> العنوان   </h4>

                        <div class="input-groupp input-groupp-icon">
                          <input type="text" placeholder="  العنوان    " value="ءسش" name="address" id="address" class="@error('address') is-invalid @enderror"/>
                          <div class="input-icon"><i class="fa-solid fa-location-dot"></i></div>
                          @error('address')
                          <span class="invalid-feedback" role="alert">
                              <strong style="color:red;">{{ $message }}</strong>
                          </span>
                      @enderror
                        </div>
                        <div class="">
                        <img src="style/img/re.png" width="200px" style="margin-left: 120px;">

                            <input type="file" placeholder="الصورة" style="padding-bottom: 0;" name="image" id="image"/>
                          </div>
                      </div>

                      <div class="roww">
                       <input type="submit" value="حفظ" class="bttn">
                      </div>
                    </form>




              </div>



            </div>

            @endsection
