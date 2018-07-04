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
                    <form action="{{ route('register_process') }}" method="post" enctype="multipart/form-data">
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
                                    <input id="file-input" type="file" accept="image/*" name="profile_img" onchange="readURL(this)"/>
                                </div>
                                <div class="form-group label-overlay" style="margin-top: 8px;">
                                    <input type="text" class="form-control {{ $errors->has("username") ? 'error-message' : '' }}" name="username">
                                    <label class="input-desc"><i class="icon input-icon input-user"></i>İstifadəçi adınızı daxil edin <span class="input-required">*</span></label>
                                    @if($errors->has("username")) <span style="color: tomato;">{{ $errors->first('username') }}</span> @endif
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control {{ $errors->has("name") ? 'error-message' : '' }}" name="name">
                                    <label class="input-desc"><i class="icon input-icon input-user"></i>Adınızı daxil edin
                                        <span class="input-required">*</span></label>
                                    @if($errors->has("name")) <span style="color: tomato;">{{ $errors->first('name') }}</span> @endif
                                </div><!-- End .form-group -->
                            </div><!-- End .col-sm-6 -->

                            <div class="mb40 visible-xs"></div><!-- margin -->

                            <div class="col-sm-4">
                                <div class="form-group label-overlay" style="margin-top: 10px;">
                                    <input type="text" class="form-control {{ $errors->has("lastname") ? 'error-message' : '' }}" name="lastname">
                                    <label class="input-desc"><i class="icon input-icon input-user"></i>Soyadınızı daxil edin
                                        <span class="input-required">*</span></label>
                                    @if($errors->has("username")) <span style="color: tomato;">{{ $errors->first('username') }}</span> @endif
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="email" class="form-control {{ $errors->has("email") ? 'error-message' : '' }}" name="email">
                                    <label class="input-desc"><i class="icon input-icon input-email"></i>
                                        Email adresinizi daxil edin <span class="input-required">*</span></label>
                                    @if($errors->has("email")) <span style="color: tomato;">{{ $errors->first('email') }}</span> @endif
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control datepicker {{ $errors->has("birthday") ? 'error-message' : '' }}" name="birthday" style="padding-left: 15px;">
                                    <label class="input-desc"><i class="icon input-icon input-email"></i>Doğum tarixinizi daxil edin
                                        <span class="input-required">*</span></label>
                                    @if($errors->has("birthday")) <span style="color: tomato;">{{ $errors->first('birthday') }}</span> @endif
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay {{ $errors->has("gender") ? 'error-message' : '' }}">
                                    <select class="custom-select form-control" name="gender">
                                        <option value=""></option>
                                        <option value="1">Kişi</option>
                                        <option value="2">Qadın</option>
                                    </select>
                                    <label class="input-desc"><i class="icon input-icon input-flag"></i>Cinsiyyətinizi seçin
                                        <span class="input-required">*</span></label>
                                    @if($errors->has("gender")) <span style="color: tomato;">{{ $errors->first('gender') }}</span> @endif
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="password" class="form-control {{ $errors->has("password") ? 'error-message' : '' }}" name="password">
                                    <label class="input-desc"><i class="icon input-icon input-password"></i>Şifrənizi daxil edin <span class="input-required">*</span></label>
                                    @if($errors->has("password")) <span style="color: tomato;">{{ $errors->first('password') }}</span> @endif
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="password" class="form-control" name="password_confirmation">
                                    <label class="input-desc"><i class="icon input-icon input-password"></i>Şifrənizi təkrar daxil edin <span class="input-required">*</span></label>
                                </div><!-- End .form-group -->
                            </div><!-- End .col-sm-6 -->

                            <div class="mb40 visible-xs"></div><!-- margin -->

                            <div class="col-sm-4">
                                <div class="form-group label-overlay" style="margin-top: 10px;">
                                    <input type="text" class="form-control {{ $errors->has("address") ? 'error-message' : '' }}" name="address">
                                    <label class="input-desc"><i class="icon input-icon input-pin"></i>Adresinizi daxil edin<span class="input-required">*</span></label>
                                    @if($errors->has("address")) <span style="color: tomato;">{{ $errors->first('address') }}</span> @endif
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control {{ $errors->has("mobil_phone") ? 'error-message' : '' }}" name="mobil_phone">
                                    <label class="input-desc"><i class="icon input-icon input-phone"></i>Mobil telefonuzu daxil edin <span class="input-required">*</span></label>
                                    @if($errors->has("mobil_phone")) <span style="color: tomato;">{{ $errors->first('mobil_phone') }}</span> @endif
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control {{ $errors->has("mobil_phone2") ? 'error-message' : '' }}" name="mobil_phone2">
                                    <label class="input-desc"><i class="icon input-icon input-phone"></i>Mobil telefonuzu daxil edin (2)
                                    </label>
                                    @if($errors->has("mobil_phone2")) <span style="color: tomato;">{{ $errors->first('mobil_phone2') }}</span> @endif
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" class="form-control {{ $errors->has("zip_code") ? 'error-message' : '' }}" name="zip_code">
                                    <label class="input-desc"><i class="icon input-icon input-fax"></i>Poçt kodunu daxil edin
                                        <span class="input-required">*</span></label>
                                    @if($errors->has("zip_code")) <span style="color: tomato;">{{ $errors->first('zip_code') }}</span> @endif
                                </div><!-- End .form-group -->
                                <div class="form-group label-overlay">
                                    <input type="text" name="city" class="form-control {{ $errors->has("city") ? 'error-message' : '' }}">
                                    <label class="input-desc"><i class="icon input-icon input-flag"></i>Yaşadığınız şəhəri seçin
                                        <span class="input-required">*</span></label>
                                    @if($errors->has("city")) <span style="color: tomato;">{{ $errors->first('city') }}</span> @endif
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

        customSelect2($("input[name='city']"),"{{ route('select_route') }}","get_cities");


    </script>
    <script type="text/javascript" src="{{ asset('js/front/plugins/inputmask.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/front/plugins/jquery.inputmask.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/front/plugins/inputmask.phone.extensions.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
@endsection