@extends("front.layouts.base")
@section("title","Ana səhifə")
@section("description","Azərbaycanda ən sərfəli qiymətə türk, rus, ingilis dillərində bədii, dərs və digər kitablar və vəsaitləri Alfakitabdan əldə edə bilərsiniz")
@section("keywords","kitab,online kitab,rus dilində kitablar,türkcə kitablar,kitablar,azərbaycanca kitablar,bədii kitablar,ucuz kitablar,pdf kitablar")
@section("content")
<div class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-md-push-3">

                <div id="rev_slider_wrapper" class="rev_slider_bgcheck rev_slider_wrapper rev_container_1 fullwidthbanner-container" data-alias="classicslider1">
                    <div id="rev_slider" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-1" data-transition="slideright" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1200"  data-thumb="{{ asset('images/front/images/homesliders/index/slide1.jpg') }}"  data-rotate="0"  data-saveperformance="on"  data-title="Corporate">

                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('images/front/images/homesliders/index/slide1.jpg') }}"  alt="Slider bg 1"  data-bgposition="center center" data-duration="11000" data-ease="Linear.easeNone" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption revslider-title v2 text-uppercase tp-resizeme rs-parallaxlevel-0"
                                     id="slide-1-layer-1"
                                     data-x="['left','left','left','left','left']" data-hoffset="['760','460','400','390', '250']"
                                     data-y="['middle','middle','middle','middle','middle']" data-voffset="['-58','-50','-44','-40','-10']"
                                     data-fontsize="['100','80','68','60','32']"
                                     data-lineheight="['80','70','58','50','24']"
                                     data-fontweight="700"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:[-50%];o:0;z:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="x:[50%];o:0;s:1000;s:1000;e:Power2.easeInOut;"
                                     data-start="800"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-elementdelay="0.1"
                                     style="z-index: 5; white-space: nowrap;">have<br>a nice<br>sale
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption revslider-subtitle text-uppercase v2 tp-resizeme rs-parallaxlevel-0"
                                     id="slide-1-layer-2"
                                     data-x="['left','left','left','left','left']" data-hoffset="['760','460','400','390', '250']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-209','-180','-149','-136','-60']"
                                     data-width="none"
                                     data-height="none"
                                     data-fontsize="['18','16','14','14','11']"
                                     data-lineheight="['18','16','14','14','11']"
                                     data-fontweight="600"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1300"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 6; white-space: nowrap;">Online Exclusive
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption revslider-text tp-resizeme rs-parallaxlevel-0"
                                     id="slide-1-layer-3"
                                     data-x="['left','left','left','left','left']" data-hoffset="['760','460','400','390', '250']"
                                     data-y="['middle','middle','middle','middle','middle']" data-voffset="['93','80','65','60','30']"
                                     data-width="['250px','200px','180px','150px','130px']"
                                     data-height="none"
                                     data-fontsize="['17','16','14','14','10']"
                                     data-lineheight="['22','21','19','19','15']"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1300"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 6;">Free delivery and returns on all USA orders.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <a class="tp-caption btn btn-custom tp-resizeme rs-parallaxlevel-0"
                                   id="slide-1-layer-4"
                                   data-x="['left','left','left','left','left']" data-hoffset="['760','460','400','390', '250']"
                                   data-y="['middle','middle','middle','middle','middle']" data-voffset="['155','140','120','110','45']"
                                   data-width="['156px','156px', '138px', '120px', 80px']"
                                   data-fontsize="['15','14','13','12','9']"
                                   data-paddingtop="['13','13','11','9','5']"
                                   data-paddingbottom="['10','10','7','6','2']"
                                   data-height="none"
                                   data-whitespace="nowrap"
                                   data-transform_idle="o:1;"
                                   data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                   data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                   data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                   data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                   data-start="2000"
                                   data-splitin="none"
                                   data-splitout="none"
                                   data-responsive_offset="on"
                                   style="z-index: 6; white-space: nowrap;"
                                   href="#">Take a look
                                </a>

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption tp-resizeme furtherclasses"
                                     id="slide-1-layer-5"
                                     data-x="['left','left','left','left','left']" data-hoffset="['100','40','58','50','60']"
                                     data-y="['middle','middle','middle','middle','middle']" data-voffset="['0','0','0','0','0']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1200"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 1;">
                                    <img src="{{ asset('images/front/images/homesliders/index/item1.png') }}" alt="Slider item" width="355" height="661" data-ww="['355px', '225px', '180px','180px','100px']" data-hh="['661px', '418px', '335px','335px','197px']" data-no-retina>
                                </div>

                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption tp-resizeme furtherclasses"
                                     id="slide-1-layer-6"
                                     data-x="['left','left','left','left','left']" data-hoffset="['420','240','224','220','150']"
                                     data-y="['middle','middle','middle','middle','middle']" data-voffset="['0','0','0','0','0']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="900"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 1;">
                                    <img src="{{ asset('images/front/images/homesliders/index/item2.png') }}" alt="Slider item" width="252" height="605" data-ww="['252px', '150px', '120px','120px','70px']" data-hh="['605px', '360px', '288px','288px','168px']" data-no-retina>
                                </div>
                            </li>

                            <!-- SLIDE  -->
                            <li data-index="rs-2" data-transition="slideright" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1200" data-thumb="{{ asset('images/front/images/homesliders/index/slide2.jpg') }}" data-rotate="0" data-saveperformance="on" data-title="Business">

                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('images/front/images/homesliders/index/slide2.jpg') }}"  alt="Slider bg 2"  data-bgposition="center center" data-duration="11000" data-ease="Linear.easeNone" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption revslider-title v2 text-uppercase tp-resizeme rs-parallaxlevel-0"
                                     id="slide-2-layer-1"
                                     data-x="['left','left','left','left','left']" data-hoffset="['760','460','400','390', '250']"
                                     data-y="['middle','middle','middle','middle','middle']" data-voffset="['-58','-50','-44','-40','-10']"
                                     data-fontsize="['100','80','68','60','32']"
                                     data-lineheight="['80','70','58','50','24']"
                                     data-fontweight="700"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:[-50%];o:0;z:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="x:[50%];o:0;s:1000;s:1000;e:Power2.easeInOut;"
                                     data-start="800"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-elementdelay="0.1"
                                     style="z-index: 5; white-space: nowrap;">100+<br>weekly<br>deals
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption revslider-subtitle text-uppercase tp-resizeme rs-parallaxlevel-0"
                                     id="slide-2-layer-2"
                                     data-x="['left','left','left','left','left']" data-hoffset="['760','460','400','390', '250']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-209','-180','-149','-136','-60']"
                                     data-width="none"
                                     data-height="none"
                                     data-fontsize="['18','16','14','14','11']"
                                     data-lineheight="['18','16','14','14','11']"
                                     data-fontweight="600"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1300"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 6; white-space: nowrap;">The Latest
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption revslider-text tp-resizeme rs-parallaxlevel-0"
                                     id="slide-2-layer-3"
                                     data-x="['left','left','left','left','left']" data-hoffset="['760','460','400','390', '250']"
                                     data-y="['middle','middle','middle','middle','middle']" data-voffset="['93','80','65','60','30']"
                                     data-width="['200px','190px','180px','150px','130px']"
                                     data-height="none"
                                     data-fontsize="['17','16','14','14','10']"
                                     data-lineheight="['22','21','19','19','15']"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1300"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 6;">Sweet new deals every sunday.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <a class="tp-caption btn btn-custom tp-resizeme rs-parallaxlevel-0"
                                   id="slide-2-layer-4"
                                   data-x="['left','left','left','left','left']" data-hoffset="['760','460','400','390', '250']"
                                   data-y="['middle','middle','middle','middle','middle']" data-voffset="['155','140','120','110','45']"
                                   data-width="['156px','156px', '138px', '120px', 80px']"
                                   data-fontsize="['15','14','13','12','9']"
                                   data-paddingtop="['13','13','11','9','5']"
                                   data-paddingbottom="['10','10','7','6','2']"
                                   data-height="none"
                                   data-whitespace="nowrap"
                                   data-transform_idle="o:1;"
                                   data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                   data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                   data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                   data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                   data-start="2000"
                                   data-splitin="none"
                                   data-splitout="none"
                                   data-responsive_offset="on"
                                   style="z-index: 6; white-space: nowrap;"
                                   href="#">Shop Deals
                                </a>
                            </li>

                            <!-- SLIDE  -->
                            <li data-index="rs-3" data-transition="slideright" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1200"  data-thumb="{{ asset('images/front/images/homesliders/index/slide3.jpg') }}"  data-rotate="0"  data-saveperformance="on"  data-title="Corporate">

                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('images/front/images/homesliders/index/slide3.jpg') }}"  alt="Slider bg 3"  data-bgposition="center center" data-duration="11000" data-ease="Linear.easeNone" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption revslider-title v2 text-uppercase tp-resizeme rs-parallaxlevel-0"
                                     id="slide-3-layer-1"
                                     data-x="['left','left','left','left','left']" data-hoffset="['110','40','40','40', '30']"
                                     data-y="['middle','middle','middle','middle','middle']" data-voffset="['-58','-50','-44','-40','-10']"
                                     data-fontsize="['100','80','68','60','32']"
                                     data-lineheight="['80','70','58','50','24']"
                                     data-fontweight="700"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:[-50%];o:0;z:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="x:[50%];o:0;s:1000;s:1000;e:Power2.easeInOut;"
                                     data-start="800"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-elementdelay="0.1"
                                     style="z-index: 5; white-space: nowrap;">New<br>reason<br>to save
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption revslider-subtitle text-uppercase tp-resizeme rs-parallaxlevel-0"
                                     id="slide-3-layer-2"
                                     data-x="['left','left','left','left','left']" data-hoffset="['110','40','40','40', '30']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-209','-180','-149','-136','-60']"
                                     data-width="none"
                                     data-height="none"
                                     data-fontsize="['18','16','14','14','11']"
                                     data-lineheight="['18','16','14','14','11']"
                                     data-fontweight="500"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1300"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 6; white-space: nowrap;">New Season.
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption revslider-text tp-resizeme rs-parallaxlevel-0"
                                     id="slide-3-layer-3"
                                     data-x="['left','left','left','left','left']" data-hoffset="['110','40','40','40', '30']"
                                     data-y="['middle','middle','middle','middle','middle']" data-voffset="['93','80','65','60','30']"
                                     data-width="['260px','240px','200px','190px','150px']"
                                     data-height="none"
                                     data-fontsize="['17','16','14','14','10']"
                                     data-lineheight="['22','21','19','19','15']"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1300"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 6;">Nulla a aliquam ipsum. Vivamus condimentum nibh arcu.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <a class="tp-caption btn btn-custom tp-resizeme rs-parallaxlevel-0"
                                   id="slide-3-layer-4"
                                   data-x="['left','left','left','left','left']" data-hoffset="['110','40','40','40', '30']"
                                   data-y="['middle','middle','middle','middle','middle']" data-voffset="['155','140','120','110','45']"
                                   data-width="['156px','156px', '138px', '120px', 80px']"
                                   data-fontsize="['15','14','13','12','9']"
                                   data-paddingtop="['13','13','11','9','5']"
                                   data-paddingbottom="['10','10','7','6','2']"
                                   data-height="none"
                                   data-whitespace="nowrap"
                                   data-transform_idle="o:1;"
                                   data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                   data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                   data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                   data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                   data-start="2000"
                                   data-splitin="none"
                                   data-splitout="none"
                                   data-responsive_offset="on"
                                   style="z-index: 6; white-space: nowrap;"
                                   href="#">Shop New
                                </a>
                            </li>
                        </ul>
                        <div class="tp-bannertimer" style="height: 4px; background-color: rgba(255, 255, 255, 0.5);"></div>
                    </div><!-- End rev_slider -->
                </div><!-- End rev_slider_wrapper -->

                <div class="mb30 mb20-sm"></div><!-- margin -->


                <div class="mb35 mb20-sm"></div><!-- margin -->

                <div class="products-tab" role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-bordered simple-tabs text-center text-uppercase" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab-special" aria-controls="tab-special" role="tab" data-toggle="tab">
                                Yenİ
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#tab-latest" aria-controls="tab-latest" role="tab" data-toggle="tab">
                                Ən çox satılan
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#tab-bestsellers" aria-controls="tab-bestsellers" role="tab" data-toggle="tab">
                                Endİrİmdə olanlar
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#tab-features" aria-controls="tab-features" role="tab" data-toggle="tab">
                                Bİzİm seçdİklərİmİz
                            </a>
                        </li>
                    </ul>

                    <!-- Tab Panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab-special">
                            <div class="row product-container-row">
                                <div class="products-container max-col-3" data-layoutmode="fitRows">
                                    <div class="product-column">
                                        <div class="product product2">
                                            <span class="product-label discount">-25%</span>
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product1.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-brand">
                                                    <a href="#">Samsung</a>
                                                </div><!-- End .product-brand -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Prince of wales check blazer</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$180.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product2.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-brand">
                                                    <a href="#">BenQ</a>
                                                </div><!-- End .product-brand -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Draped wrap white blouse</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$588.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <span class="product-label">New</span>
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product3.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-colors">
                                                    <span style="background-color: #e3e3e5;"></span>
                                                    <span style="background-color: #91d7e5;"></span>
                                                    <span style="background-color: #897e83;"></span>
                                                    <span style="background-color: #fac67c;"></span>
                                                </div><!-- End .product-colors -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Draped sleeve detail shirt</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$280.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product5.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-colors">
                                                    <span style="background-color: #fac67c;"></span>
                                                    <span style="background-color: #565656;"></span>
                                                    <span style="background-color: #ececec;"></span>
                                                </div><!-- End .product-colors -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Long v-neck cardigan</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$630.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <span class="product-label outofstock">Out of<br>Stock</span>
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product9.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-brand">
                                                    <a href="#">Philips</a>
                                                </div><!-- End .product-brand -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Cropped panel jacket</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$180.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product4.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-colors">
                                                    <span style="background-color: #dfe0e2;"></span>
                                                    <span style="background-color: #525257;"></span>
                                                    <span style="background-color: #515b78;"></span>
                                                </div><!-- End .product-colors -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Striped skinny trousers</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-old-price">$1500.00</span>
                                                <span class="product-price">$750.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->
                                </div><!-- End .product-container-->
                            </div><!-- End .row -->
                        </div><!-- End .tab-pane -->

                        <div role="tabpanel" class="tab-pane" id="tab-latest">
                            <div class="row product-container-row">
                                <div class="products-container max-col-3" data-layoutmode="fitRows">
                                    <div class="product-column">
                                        <div class="product product2">
                                            <span class="product-label discount">-25%</span>
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product20.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-brand">
                                                    <a href="#">Samsung</a>
                                                </div><!-- End .product-brand -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Prince of wales check blazer</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$180.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product4.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-brand">
                                                    <a href="#">BenQ</a>
                                                </div><!-- End .product-brand -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Draped wrap white blouse</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$588.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <span class="product-label discount">-20%</span>
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product13.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-colors">
                                                    <span style="background-color: #e3e3e5;"></span>
                                                    <span style="background-color: #91d7e5;"></span>
                                                    <span style="background-color: #897e83;"></span>
                                                    <span style="background-color: #fac67c;"></span>
                                                </div><!-- End .product-colors -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Draped sleeve detail shirt</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$280.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product15.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-colors">
                                                    <span style="background-color: #fac67c;"></span>
                                                    <span style="background-color: #565656;"></span>
                                                    <span style="background-color: #ececec;"></span>
                                                </div><!-- End .product-colors -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Long v-neck cardigan</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$630.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <span class="product-label">New</span>
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product19.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-brand">
                                                    <a href="#">Philips</a>
                                                </div><!-- End .product-brand -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Cropped panel jacket</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$180.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product14.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-colors">
                                                    <span style="background-color: #dfe0e2;"></span>
                                                    <span style="background-color: #525257;"></span>
                                                    <span style="background-color: #515b78;"></span>
                                                </div><!-- End .product-colors -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Striped skinny trousers</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-old-price">$1500.00</span>
                                                <span class="product-price">$750.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->
                                </div><!-- End .product-container-->
                            </div><!-- End .row -->
                        </div><!-- End .tab-pane -->

                        <div role="tabpanel" class="tab-pane" id="tab-bestsellers">
                            <div class="row product-container-row">
                                <div class="products-container max-col-3" data-layoutmode="fitRows">
                                    <div class="product-column">
                                        <div class="product product2">
                                            <span class="product-label outofstock">Out of<br>Stock</span>
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product17.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-brand">
                                                    <a href="#">Samsung</a>
                                                </div><!-- End .product-brand -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Prince of wales check blazer</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$180.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product16.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-brand">
                                                    <a href="#">BenQ</a>
                                                </div><!-- End .product-brand -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Draped wrap white blouse</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$588.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <span class="product-label">New</span>
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product13.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-colors">
                                                    <span style="background-color: #e3e3e5;"></span>
                                                    <span style="background-color: #91d7e5;"></span>
                                                    <span style="background-color: #897e83;"></span>
                                                    <span style="background-color: #fac67c;"></span>
                                                </div><!-- End .product-colors -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Draped sleeve detail shirt</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$280.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product3.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-colors">
                                                    <span style="background-color: #fac67c;"></span>
                                                    <span style="background-color: #565656;"></span>
                                                    <span style="background-color: #ececec;"></span>
                                                </div><!-- End .product-colors -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Long v-neck cardigan</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$630.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <span class="product-label outofstock">Out of<br>Stock</span>
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product5.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-brand">
                                                    <a href="#">Philips</a>
                                                </div><!-- End .product-brand -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Cropped panel jacket</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$180.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product6.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-colors">
                                                    <span style="background-color: #dfe0e2;"></span>
                                                    <span style="background-color: #525257;"></span>
                                                    <span style="background-color: #515b78;"></span>
                                                </div><!-- End .product-colors -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Striped skinny trousers</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-old-price">$1500.00</span>
                                                <span class="product-price">$750.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->
                                </div><!-- End .product-container-->
                            </div><!-- End .row -->
                        </div><!-- End .tab-pane -->

                        <div role="tabpanel" class="tab-pane" id="tab-features">
                            <div class="row product-container-row">
                                <div class="products-container max-col-3" data-layoutmode="fitRows">
                                    <div class="product-column">
                                        <div class="product product2">
                                            <span class="product-label">New</span>
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product14.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-brand">
                                                    <a href="#">Samsung</a>
                                                </div><!-- End .product-brand -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Prince of wales check blazer</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$180.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product12.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-brand">
                                                    <a href="#">BenQ</a>
                                                </div><!-- End .product-brand -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Draped wrap white blouse</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$588.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product11.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-colors">
                                                    <span style="background-color: #e3e3e5;"></span>
                                                    <span style="background-color: #91d7e5;"></span>
                                                    <span style="background-color: #897e83;"></span>
                                                    <span style="background-color: #fac67c;"></span>
                                                </div><!-- End .product-colors -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Draped sleeve detail shirt</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$280.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product9.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-colors">
                                                    <span style="background-color: #fac67c;"></span>
                                                    <span style="background-color: #565656;"></span>
                                                    <span style="background-color: #ececec;"></span>
                                                </div><!-- End .product-colors -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Long v-neck cardigan</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$630.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <span class="product-label discount">-25%</span>
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product7.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-brand">
                                                    <a href="#">Philips</a>
                                                </div><!-- End .product-brand -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Cropped panel jacket</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-price">$180.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->

                                    <div class="product-column">
                                        <div class="product product2">
                                            <div class="product-top">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{ asset('images/front/images/products/product6.jpg') }}" alt="Product Image">
                                                    </a>
                                                </figure>
                                            </div><!-- End .product-top -->

                                            <div class="product-meta">
                                                <div class="product-colors">
                                                    <span style="background-color: #dfe0e2;"></span>
                                                    <span style="background-color: #525257;"></span>
                                                    <span style="background-color: #515b78;"></span>
                                                </div><!-- End .product-colors -->
                                                <div class="ratings-container">
                                                    <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .product-meta -->

                                            <h3 class="product-title">
                                                <a href="#">Striped skinny trousers</a>
                                            </h3>

                                            <div class="product-price-container">
                                                <span class="product-old-price">$1500.00</span>
                                                <span class="product-price">$750.00</span>
                                            </div><!-- End .product-price-container -->

                                            <div class="product-action">
                                                <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                                <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                                <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                            </div><!-- End .product-action -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->
                                </div><!-- End .product-container-->
                            </div><!-- End .row -->
                        </div><!-- End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End role="tabpanel" -->

                <div class="mb50 mb30-sm mb20-xs"></div><!-- margin -->

                <div class="banner bigger">
                    <a href="#">
                        <img src="{{ asset('images/front/images/banners/index/banner3.jpg') }}" alt="Banner">
                    </a>
                    <div class="banner-content">
                        <h4 class="wow zoomIn">Next is here</h4>
                        <h3 class="wow zoomIn" data-wow-delay="0.2s">galaxy s6 <br>available now</h3>
                        <a href="#" class="btn btn-custom wow zoomIn" data-wow-delay="0.4s">Find out more</a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->

                <div class="mb60 mb40-sm mb40-xs"></div><!-- margin -->

                <div class="deal-carousel-container">
                    <h2 class="carousel-title text-center">DEAL OF THE DAY</h2>
                    <div class="swiper-container dealoftheday-carousel v2">
                        <!-- Add Navigation -->
                        <div class="swiper-nav-wrapper">
                            <div class="swiper-button-prev icon"></div><!-- End .button-prev -->
                            <div class="swiper-button-next icon"></div><!-- End .button-next -->
                        </div><!-- End .swiper-nav-wrapper -->

                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product product2">
                                    <span class="product-label discount">-25%</span>
                                    <div class="product-top">
                                        <figure>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/products/product1.jpg') }}" alt="Product Image">
                                            </a>
                                        </figure>
                                    </div><!-- End .product-top -->

                                    <div class="product-meta">
                                        <div class="product-brand">
                                            <a href="#">Samsung</a>
                                        </div><!-- End .product-brand -->
                                        <div class="ratings-container">
                                            <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                        </div><!-- End .ratings -->
                                    </div><!-- End .product-meta -->

                                    <h3 class="product-title">
                                        <a href="#">Prince of wales check</a>
                                    </h3>

                                    <div class="product-price-container">
                                        <span class="product-price">$180.00</span>
                                    </div><!-- End .product-price-container -->

                                    <div class="product-action">
                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                        <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                        <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->

                                <div class="product product2">
                                    <div class="product-top">
                                        <figure>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/products/product2.jpg') }}" alt="Product Image">
                                            </a>
                                        </figure>
                                    </div><!-- End .product-top -->

                                    <div class="product-meta">
                                        <div class="product-brand">
                                            <a href="#">Philips</a>
                                        </div><!-- End .product-brand -->
                                        <div class="ratings-container">
                                            <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                        </div><!-- End .ratings -->
                                    </div><!-- End .product-meta -->

                                    <h3 class="product-title">
                                        <a href="#">Striped skinny trouser</a>
                                    </h3>

                                    <div class="product-price-container">
                                        <span class="product-price">$1030.00</span>
                                    </div><!-- End .product-price-container -->

                                    <div class="product-action">
                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                        <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                        <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="product product2">
                                    <div class="product-top">
                                        <figure>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/products/product3.jpg') }}" alt="Product Image">
                                            </a>
                                        </figure>
                                    </div><!-- End .product-top -->

                                    <div class="product-meta">
                                        <div class="product-brand">
                                            <a href="#">Sony</a>
                                        </div><!-- End .product-brand -->
                                        <div class="ratings-container">
                                            <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                        </div><!-- End .ratings -->
                                    </div><!-- End .product-meta -->

                                    <h3 class="product-title">
                                        <a href="#">Long v-neck cardigan</a>
                                    </h3>

                                    <div class="product-price-container">
                                        <span class="product-price">$472.00</span>
                                    </div><!-- End .product-price-container -->

                                    <div class="product-action">
                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                        <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                        <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->

                                <div class="product product2">
                                    <span class="product-label">New</span>
                                    <div class="product-top">
                                        <figure>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/products/product4.jpg') }}" alt="Product Image">
                                            </a>
                                        </figure>
                                    </div><!-- End .product-top -->

                                    <div class="product-meta">
                                        <div class="product-colors">
                                            <span style="background-color: #e3e3e5;"></span>
                                            <span style="background-color: #91d7e5;"></span>
                                            <span style="background-color: #897e83;"></span>
                                        </div><!-- End .product-colors -->
                                        <div class="ratings-container">
                                            <div class="ratings" style="width: 60%;"></div><!-- End .ratings -->
                                        </div><!-- End .ratings -->
                                    </div><!-- End .product-meta -->

                                    <h3 class="product-title">
                                        <a href="#">Cropped panel jacket</a>
                                    </h3>

                                    <div class="product-price-container">
                                        <span class="product-price">$380.00</span>
                                    </div><!-- End .product-price-container -->

                                    <div class="product-action">
                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                        <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                        <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide double">
                                <div class="product product2 wide">
                                    <span class="product-label discount">-25%</span>
                                    <div class="product-top">
                                        <figure>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/products/product-big2.jpg') }}" alt="Product Image">
                                            </a>
                                        </figure>
                                    </div><!-- End .product-top -->

                                    <div class="product-meta">
                                        <div class="product-brand">
                                            <a href="#">Samsung</a>
                                        </div><!-- End .product-brand -->
                                        <div class="ratings-container">
                                            <div class="ratings" style="width: 80%;"></div><!-- End .ratings -->
                                        </div><!-- End .ratings -->
                                    </div><!-- End .product-meta -->

                                    <h3 class="product-title">
                                        <a href="#">Draped wrap white blouse</a>
                                    </h3>

                                    <div class="product-price-container">
                                        <span class="product-old-price">$586.00</span>
                                        <span class="product-price">$450.00</span>
                                    </div><!-- End .product-price-container -->

                                    <div class="product-countdown countdown-sep"></div><!-- End .product-countdown -->

                                    <div class="product-action">
                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                        <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                        <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="product product2">
                                    <div class="product-top">
                                        <figure>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/products/product5.jpg') }}" alt="Product Image">
                                            </a>
                                        </figure>
                                    </div><!-- End .product-top -->

                                    <div class="product-meta">
                                        <div class="product-brand">
                                            <a href="#">Samsung</a>
                                        </div><!-- End .product-brand -->
                                        <div class="ratings-container">
                                            <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                        </div><!-- End .ratings -->
                                    </div><!-- End .product-meta -->

                                    <h3 class="product-title">
                                        <a href="#">Prince of wales check blazer</a>
                                    </h3>

                                    <div class="product-price-container">
                                        <span class="product-price">$180.00</span>
                                    </div><!-- End .product-price-container -->

                                    <div class="product-action">
                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                        <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                        <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->

                                <div class="product product2">
                                    <span class="product-label discount">-25%</span>
                                    <div class="product-top">
                                        <figure>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/products/product7.jpg') }}" alt="Product Image">
                                            </a>
                                        </figure>
                                    </div><!-- End .product-top -->

                                    <div class="product-meta">
                                        <div class="product-brand">
                                            <a href="#">Samsung</a>
                                        </div><!-- End .product-brand -->
                                        <div class="ratings-container">
                                            <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                        </div><!-- End .ratings -->
                                    </div><!-- End .product-meta -->

                                    <h3 class="product-title">
                                        <a href="#">Prince of wales check blazer</a>
                                    </h3>

                                    <div class="product-price-container">
                                        <span class="product-price">$180.00</span>
                                    </div><!-- End .product-price-container -->

                                    <div class="product-action">
                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                        <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                        <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="product product2">
                                    <span class="product-label">New</span>
                                    <div class="product-top">
                                        <figure>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/products/product8.jpg') }}" alt="Product Image">
                                            </a>
                                        </figure>
                                    </div><!-- End .product-top -->

                                    <div class="product-meta">
                                        <div class="product-brand">
                                            <a href="#">Samsung</a>
                                        </div><!-- End .product-brand -->
                                        <div class="ratings-container">
                                            <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                        </div><!-- End .ratings -->
                                    </div><!-- End .product-meta -->

                                    <h3 class="product-title">
                                        <a href="#">Prince of wales check blazer</a>
                                    </h3>

                                    <div class="product-price-container">
                                        <span class="product-price">$180.00</span>
                                    </div><!-- End .product-price-container -->

                                    <div class="product-action">
                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                        <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                        <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->

                                <div class="product product2">
                                    <div class="product-top">
                                        <figure>
                                            <a href="#">
                                                <img src="{{ asset('images/front/images/products/product10.jpg') }}" alt="Product Image">
                                            </a>
                                        </figure>
                                    </div><!-- End .product-top -->

                                    <div class="product-meta">
                                        <div class="product-brand">
                                            <a href="#">Samsung</a>
                                        </div><!-- End .product-brand -->
                                        <div class="ratings-container">
                                            <div class="ratings" style="width: 100%;"></div><!-- End .ratings -->
                                        </div><!-- End .ratings -->
                                    </div><!-- End .product-meta -->

                                    <h3 class="product-title">
                                        <a href="#">Prince of wales check blazer</a>
                                    </h3>

                                    <div class="product-price-container">
                                        <span class="product-price">$180.00</span>
                                    </div><!-- End .product-price-container -->

                                    <div class="product-action">
                                        <a href="#" class="btn-add-cart" title="Add to Cart"><i class="icon icon-cart2"></i> <span>Add To Cart</span></a>
                                        <a href="#" class="btn-add-wishlist" title="Add to Wishlist"><i class="icon icon-wishlist2"></i> <span>Add To Wishlist</span></a>
                                        <a href="#" class="btn-add-compare" title="Add to Compare"><i class="icon icon-compare2"></i> <span>Add To Compare</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .swiper-slide -->
                        </div><!-- End .swiper-wrapper -->
                    </div><!-- End .swiper-container -->
                </div><!-- End .deal-carousel-container -->

                <div class="mb70 mb50-sm mb40-xs"></div><!-- margin -->

                <div class="banner newsletter-banner ">
                    <img src="{{ asset('images/front/images/banners/index/banner4.jpg') }}" alt="Banner">
                    <div class="banner-content">
                        <h4>Times a ticking</h4>
                        <h3>don’t miss out</h3>
                        <p>Subscribe for the latest styles and sales, plus get 25% off your first order.</p>
                        <form>
                            <input type="email" class="form-control" placeholder="your@email.com" required>
                            <button type="submit" class="btn btn-custom">Sign Up</button>
                        </form>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->

                <h2 class="carousel-title text-center">FROM THE BLOG</h2>
                <div class="swiper-container fromblog-smaller-carousel">
                    <!-- Add Navigation -->
                    <div class="swiper-nav-wrapper">
                        <div class="swiper-button-prev icon"></div><!-- End .button-prev -->
                        <div class="swiper-button-next icon"></div><!-- End .button-next -->
                    </div><!-- End .swiper-nav-wrapper -->

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article class="entry entry-small">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="{{ asset('images/front/images/blog/index2/post1.jpg') }}" alt="Entry">
                                    </a>
                                </figure>
                                <div class="entry-content-wrapper">
                                    <span class="entry-date">12 November</span>
                                    <h2 class="entry-title">
                                        <a href="single.html">Curabitur Faucibus Aliquam Felis</a>
                                    </h2>
                                    <div class="entry-content">
                                        <p>Vivamus mollis varius metus in egestas. Vestibulum blandit auctor dolor. Praesent iaculis ultrices accumsan. Integer sollicitu din consectetur lectus, vitae vulputate velit pharetra sed. Nunc ac lobortis velit, eu tempus tellus.</p>
                                    </div><!-- End .entry-excerpt -->
                                    <a href="sigle.html" class="btn btn-custom btn-readmore">READ MORE</a>
                                </div><!-- End .entry-content-wrapper -->
                            </article>
                        </div><!-- End .swiper-slide -->

                        <div class="swiper-slide">
                            <article class="entry entry-small">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="{{ asset('images/front/images/blog/index2/post2.jpg') }}" alt="Entry">
                                    </a>
                                </figure>
                                <div class="entry-content-wrapper">
                                    <span class="entry-date">25 November</span>
                                    <h2 class="entry-title">
                                        <a href="single.html">Suspendisse Laoreet Sagittis</a>
                                    </h2>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate convallis nulla at faucibus tellus commodo id. Sed metus eros, dapibus id porttitor ac, viverra vitae urna Integer interdum ultricies malesuada. Donec nisl lorem, dictum sit amet lectus.</p>
                                    </div><!-- End .entry-excerpt -->
                                    <a href="sigle.html" class="btn btn-custom btn-readmore">READ MORE</a>
                                </div><!-- End .entry-content-wrapper -->
                            </article>
                        </div><!-- End .swiper-slide -->

                        <div class="swiper-slide">
                            <article class="entry entry-small">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="{{ asset('images/front/images/blog/index2/post3.jpg') }}" alt="Entry">
                                    </a>
                                </figure>
                                <div class="entry-content-wrapper">
                                    <span class="entry-date">06 December</span>
                                    <h2 class="entry-title">
                                        <a href="single.html">volutpat sit felis mollis</a>
                                    </h2>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate convallis nulla at faucibus tellus commodo id. Sed metus eros, dapibus id porttitor ac, viverra vitae urna Integer interdum ultricies malesuada. Donec nisl lorem, dictum sit amet lectus.</p>
                                    </div><!-- End .entry-excerpt -->
                                    <a href="sigle.html" class="btn btn-custom btn-readmore">READ MORE</a>
                                </div><!-- End .entry-content-wrapper -->
                            </article>
                        </div><!-- End .swiper-slide -->

                        <div class="swiper-slide">
                            <article class="entry entry-small">
                                <figure class="entry-media">
                                    <a href="single.html">
                                        <img src="{{ asset('images/front/images/blog/index2/post4.jpg') }}" alt="Entry">
                                    </a>
                                </figure>
                                <div class="entry-content-wrapper">
                                    <span class="entry-date">10 October</span>
                                    <h2 class="entry-title">
                                        <a href="single.html">Nullam vulp utate conval</a>
                                    </h2>
                                    <div class="entry-content">
                                        <p>Vivamus mollis varius metus in egestas. Vestibulum blandit auctor dolor. Praesent iaculis ultrices accumsan. Integer sollicitu din consectetur lectus, vitae vulputate velit pharetra sed. Nunc ac lobortis velit, eu tempus tellus.</p>
                                    </div><!-- End .entry-excerpt -->
                                    <a href="sigle.html" class="btn btn-custom btn-readmore">READ MORE</a>
                                </div><!-- End .entry-content-wrapper -->
                            </article>
                        </div><!-- End .swiper-slide -->
                    </div><!-- End .swiper-wrapper -->
                </div><!-- End .swiper-container -->

                <div class="mb20 mb5-xs"></div><!-- margin -->

                <h2 class="carousel-title text-center">MANUFACTURERS</h2>
                <div class="swiper-container partners-small-carousel">
                    <!-- Add Navigation -->
                    <div class="swiper-nav-wrapper">
                        <div class="swiper-button-prev icon"></div><!-- End .button-prev -->
                        <div class="swiper-button-next icon"></div><!-- End .button-next -->
                    </div><!-- End .swiper-nav-wrapper -->

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="partner">
                                <a href="#" title="Partner Name">
                                    <img src="{{ asset('images/front/images/partners/dark/partner1.png') }}" alt="Partner">
                                </a>
                            </div><!-- End .partner -->
                        </div><!-- End .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="partner">
                                <a href="#" title="Partner Name">
                                    <img src="{{ asset('images/front/images/partners/dark/partner2.png') }}" alt="Partner">
                                </a>
                            </div><!-- End .partner -->
                        </div><!-- End .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="partner">
                                <a href="#" title="Partner Name">
                                    <img src="{{ asset('images/front/images/partners/dark/partner3.png') }}" alt="Partner">
                                </a>
                            </div><!-- End .partner -->
                        </div><!-- End .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="partner">
                                <a href="#" title="Partner Name">
                                    <img src="{{ asset('images/front/images/partners/dark/partner4.png') }}" alt="Partner">
                                </a>
                            </div><!-- End .partner -->
                        </div><!-- End .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="partner">
                                <a href="#" title="Partner Name">
                                    <img src="{{ asset('images/front/images/partners/dark/partner5.png') }}" alt="Partner">
                                </a>
                            </div><!-- End .partner -->
                        </div><!-- End .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="partner">
                                <a href="#" title="Partner Name">
                                    <img src="{{ asset('images/front/images/partners/dark/partner6.png') }}" alt="Partner">
                                </a>
                            </div><!-- End .partner -->
                        </div><!-- End .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="partner">
                                <a href="#" title="Partner Name">
                                    <img src="{{ asset('images/front/images/partners/dark/partner7.png') }}" alt="Partner">
                                </a>
                            </div><!-- End .partner -->
                        </div><!-- End .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="partner">
                                <a href="#" title="Partner Name">
                                    <img src="{{ asset('images/front/images/partners/dark/partner1.png') }}" alt="Partner">
                                </a>
                            </div><!-- End .partner -->
                        </div><!-- End .swiper-slide -->
                    </div><!-- End .swiper-wrapper -->
                </div><!-- End .swiper-container -->

                <div class="mb140 mb100-sm mb80-xs"></div><!-- margin -->
            </div><!-- End .col-md-9 -->

            @include('front.layouts.sidebar')
        </div><!-- End .row -->
    </div><!-- End .container-fluid -->
</div><!-- End .main -->
    @endsection()

@section("css")
    @endsection
@section("js")
    <script type="text/javascript">
        (function() {
            "use strict";

            $(document).ready(function() {
                var revapi;
                if ($("#rev_slider").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider");
                } else {
                    revapi = $("#rev_slider").show().revolution({
                        sliderType:"standard",
                        jsFileLocation:"assets/js/",
                        sliderLayout:"auto",
                        dottedOverlay:"none",
                        delay:10000,
                        disableProgressBar: "on",
                        navigation: {
                            keyboardNavigation: "on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "custom",
                                enable: true,
                                hide_onmobile: false,
                                hide_under: 768,
                                hide_onleave: false,
                                tmp: '',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 20,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 20,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: false,
                                hide_under: 767,
                                style: "custom",
                                hide_onleave: false,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 15
                            }
                        },
                        viewPort: {
                            enable:true,
                            outof:"pause",
                            visible_area:"80%"
                        },
                        responsiveLevels:[1800,1600,1200,992,767],
                        gridwidth:[1350,800,720,720,480],
                        gridheight:[800,440,520,520,240],
                        lazyType:"single",
                        parallax: {
                            type:"mouse",
                            origo:"slidercenter",
                            speed:2000,
                            levels:[2,3,4,5,6,7,12,16,10,50],
                        },
                        shadow:0,
                        spinner:"on",
                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,
                        shuffle:"off",
                        autoHeight:"off",
                        hideThumbsOnMobile:"off",
                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        debugMode:false,
                        fallbacks: {
                            simplifyAll:"off",
                            nextSlideOnWindowFocus:"off",
                            disableFocusListener:false,
                        }
                    });


                    $("#rev_slider").bind("revolution.slide.onloaded",function (e) {
                        BackgroundCheck.init({
                            targets: '.tparrows, .tp-bullets, .tp-caption',
                            images: '.tp-bgimg'
                        });
                    });

                    $("#rev_slider").bind("revolution.slide.onafterswap",function (e,data) {
                        BackgroundCheck.refresh();
                    });
                }
            });

        })();
    </script>
    @endsection