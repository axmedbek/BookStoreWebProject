@extends('front.layouts.base')
@section('content')
    <div class="main">
        <div class="page-header custom larger mb50">
            <div class="container-fluid">
                <h1>Qeydİyyat</h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home_page')}}">Ana səhifə  </a></li>
                    <i class="fa fa-arrow-right" style="color: white;"></i>
                    <li class="active">  Qeydiyyat</li>
                </ol>
            </div><!-- End .container-fluid -->
        </div><!-- End .page-header -->

        <div class="container-fluid">
            <div class="row">
                <h2 style="text-align: center;">Şəxsi məlumatlarınız</h2>
                <div class="col-md-12">
                    <form action="{{ route('register_process') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row row-lg">
                            <div class="col-sm-4">
                                <!--style="border: 1px solid #51cdeb;"-->
                                <div class="image-upload">
                                    <label for="file-input">
                                        <img src="{{ asset('images\front\images\placeholder-user.svg') }}"
                                             style="margin-left: 25%;
                                             margin-bottom: 5px;
                                            margin-top: 5px;">
                                    </label>
                                    <input id="file-input" type="file" accept="image/*" onchange="readURL(this)"/>
                                </div>
                                <div class="form-group label-overlay" style="margin-top: 8px;">
                                    <input type="text" class="form-control {{ $errors->has("username") ? 'error-message' : '' }}" name="username" required >
                                    <label class="input-desc"><i class="icon input-icon input-user"></i>İstifadəçi adınızı daxil edin <span class="input-required">*</span></label>
                                    @if($errors->has("username")) <span style="color: tomato;">{{ $errors->first('username') }}</span> @endif
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control" name="name" required>
                                    <label class="input-desc"><i class="icon input-icon input-user"></i>Adınızı daxil edin
                                        <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                            </div><!-- End .col-sm-6 -->

                            <div class="mb40 visible-xs"></div><!-- margin -->

                            <div class="col-sm-4">
                                <div class="form-group label-overlay" style="margin-top: 10px;">
                                    <input type="text" class="form-control" name="lastname" required>
                                    <label class="input-desc"><i class="icon input-icon input-user"></i>Soyadınızı daxil edin
                                        <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="email" class="form-control" name="email" required>
                                    <label class="input-desc"><i class="icon input-icon input-email"></i>
                                        Email adresinizi daxil edin <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control datepicker" name="birthday" required style="padding-left: 15px;">
                                    <label class="input-desc"><i class="icon input-icon input-email"></i>Doğum tarixinizi daxil edin
                                        <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <select class="custom-select form-control" name="gender" required>
                                        <option value=""></option>
                                        <option value="1">Kişi</option>
                                        <option value="2">Qadın</option>
                                    </select>
                                    <label class="input-desc"><i class="icon input-icon input-flag"></i>Cinsiyyətinizi seçin
                                        <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="password" class="form-control" name="password" required>
                                    <label class="input-desc"><i class="icon input-icon input-password"></i>Şifrənizi daxil edin <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="password" class="form-control" name="password_confirmation" required>
                                    <label class="input-desc"><i class="icon input-icon input-password"></i>Şifrənizi təkrar daxil edin <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                            </div><!-- End .col-sm-6 -->

                            <div class="mb40 visible-xs"></div><!-- margin -->

                            <div class="col-sm-4">
                                <div class="form-group label-overlay" style="margin-top: 10px;">
                                    <input type="text" class="form-control" name="address" required>
                                    <label class="input-desc"><i class="icon input-icon input-pin"></i>Adresinizi daxil edin<span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control" name="mobil_phone" required>
                                    <label class="input-desc"><i class="icon input-icon input-phone"></i>Mobil telefonuzu daxil edin <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control" name="mobil_phone2">
                                    <label class="input-desc"><i class="icon input-icon input-phone"></i>Mobil telefonuzu daxil edin (2)
                                    </label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control" name="zip_code" required>
                                    <label class="input-desc"><i class="icon input-icon input-fax"></i>Poçt kodunu daxil edin
                                        <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <select class="custom-select form-control" name="city" required>
                                        <option value="">&nbsp;</option>
                                        <option value="1">Baki</option>
                                        <option value="2">Sheki</option>
                                        <option value="3">Quba</option>
                                    </select>
                                    <label class="input-desc"><i class="icon input-icon input-flag"></i>Yaşadığınız şəhəri seçin
                                        <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                                <div class="mb5"></div><!-- margin -->
                                <div class="checkbox">
                                    <label class="custom-checkbox-wrapper" style="margin-top: 13px;">
                                            <span class="custom-checkbox-container">
                                                <input type="checkbox" name="jeans" value="jeans">
                                                <span class="custom-checkbox-icon"></span>
                                            </span>
                                        <span><a href="javascript:void(0)">Gizlilik politikasını</a> oxudum və qəbul edirəm.</span>
                                    </label>
                                </div><!-- End .checkbox -->

                                <div class="mb5"></div><!-- margin -->
                            </div><!-- End .col-sm-6 -->
                            <button type="submit" class="btn btn-custom" style="margin-left: 45%;">QEYDİYYATI BİTİR</button>
                        </div><!-- End .row -->
                    </form>
                </div><!-- End .col-md-9 -->
                <div class="mb80 visible-sm visible-xs"></div><!-- margin -->
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
        <div class="mb40 visible-md visible-lg"></div><!-- margin -->
    </div><!-- End .main -->
    @include('front.layouts.footer_inline')
@endsection
@section('title','Qeydiyyat səhifəsi')
@section('description','Alfakitab-da indi qeydiyyatdan keç və fürsətləri əldən vermə.Kitabqurdlarına şiddətlə tövsiyyə olunur')
@section('keywords','alfakitab,kitab,online kitab satışı,kitab sat , ədəbiyyat,sərfəli qiymətə kitablar,kitab,azca kitab,türkcə kitab,rusca kitab,ingiliscə kitab,ingilisce kitab')
@section('css')
    <style>
        .image-upload > input
        {
            display: none;
        }
        .error-message{
            border: 1px solid tomato;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/front/plugins/inputmask.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker({
                autoclose : true,
                format : 'dd-mm-yyyy'
            });

            $('[name="mobil_phone"],[name="mobil_phone2"]').inputmask("(999)-999-99-99");
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(input).prev('label').children('img')
                        .attr('src', e.target.result)
                        .width(300)
                        .height(270);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
    <script type="text/javascript" src="{{ asset('js/front/plugins/inputmask.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/front/plugins/jquery.inputmask.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/front/plugins/inputmask.phone.extensions.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
@endsection