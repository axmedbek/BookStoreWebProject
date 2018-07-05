<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        {{--<form id="book_add_edit_form" action="{{ route('book.add_edit.action',['book' => $book]) }}"--}}
        {{--enctype="multipart/form-data" method="post">--}}
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Kitab {{ $book == 0 ? 'əlavə et' : 'düzəliş et' }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="book_add_edit_form" role="form" onsubmit="return false;" autocomplete="off" class="form-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image-upload" style="margin-left: 23%;margin-top: 8%;">
                            <label for="file-input">
                                <img src="{{ !empty($bookObj['book_img'] ) ? asset('images/front/images/book_images/'.$bookObj['book_img']) : asset('images\admin\book-placeholder.jpg') }}"
                                     style="width: 165px;height: 220px;">
                            </label>
                            <span style="font-size: 12px;color: tomato;"><span>*</span>Seçmək üçün üzərinə klikləyin</span>
                            <input id="file-input" type="file" accept="image/*" name="book_img"
                                   onchange="readURL(this)" style="visibility: hidden;"/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="bookName">Kitabın adı</label>
                            <input type="text" name="bookName" class="form-control border-primary"
                                   placeholder="Kitabın adını daxil edin" value="{{ $bookObj['name'] }}">
                        </div>
                        <div class="form-group">
                            <label for="writerName">Yazar adı</label>
                            <input type="text" class="full-width"
                                   name="writerName" multiple>
                        </div>
                        <div class="form-group">
                            <label for="writerName">Nəşriyyat adı</label>
                            <input type="text" class="full-width"
                                   name="publisher">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="category">Kateqoriya</label>
                            <input class="full-width" type="text" name="category">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sub_category">Alt Kateqoriya</label>
                            <input class="full-width" type="text" name="sub_category">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Statusu</label>
                            <input class="full-width" type="text" name="book_status">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Dili</label>
                            <input class="full-width" type="text" name="book_lang">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Qiyməti</label>
                            <input name="cost" class="form-control border-primary" type="number"
                                   placeholder="Qiyməti daxil edin" step="0.1" min="0" value="{{ $bookObj['cost'] }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Səhifə sayı</label>
                            <input name="pageCount" class="form-control border-primary" type="number"
                                   placeholder="Səhifə sayını daxil edin" min="1" value="{{ $bookObj['page_count'] }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Stock sayı</label>
                            <input name="stock_count" class="form-control border-primary" type="number"
                                   placeholder="Stock sayını daxil edin" min="0" value="{{ $bookObj['stock_count'] }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Dərc olunma tarixi</label>
                            <input name="publishing_date" class="form-control border-primary" type="text"
                                   placeholder="Dərc olunma tarixini daxil edin"
                                   value="{{ isset($bookObj['publishing_date']) ? date('d-m-Y',strtotime($bookObj['publishing_date'])) : '' }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ISBN</label>
                            <input class="form-control border-primary" type="number" name="isbn"
                                   placeholder="ISBN nömrəsini daxil edin" min="0" value="{{ $bookObj['isbn'] }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Dərc sayı</label>
                            <input name="publishing_count" class="form-control border-primary" type="number"
                                   placeholder="Dərc sayını daxil edin" min="1"
                                   value="{{ $bookObj['publishing_count'] }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="book_description">Haqqında</label>
                        <textarea id="book_description" rows="5" class="form-control border-primary"
                                  name="book_description"
                                  placeholder="Kitab haqqında qısa məlumat yazın">
                            {!! $bookObj['book_description'] !!}
                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                        <button typeof="submit" class="btn btn-primary saveModal">Yadda saxla</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('js/tinymce.min.js') }}"></script>
<script>

    $("#book_add_edit_form").submit(function () {
        let formData = new FormData(this),
            book_description_text = tinyMCE.editors[$('#book_description').attr('id')].getContent();
        formData.append('_token', "{{ csrf_token() }}");
        formData.append('book_description_text', book_description_text);


        $.ajax({
            url: "{{ route('book.add_edit.action',['book' => $book]) }}",
            type: "POST",
            data: formData,
            async: false,
            success: function (response) {
                if (response['status'] == 'error') console.log(response['errors']);
                else location.reload();
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });

    $('input[name="publishing_date"]').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true
    });

    tinymce.init({
        selector: 'textarea',
        height: 300,
        menubar: false,
        statusbar: false,
        plugins: [
            'textcolor',
            'advlist autolink lists link image charmap print preview anchor textcolor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code help wordcount'
        ],
        toolbar: 'insert | undo redo |  formatselect | bold italic forecolor backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css']
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(input).prev('label').children('img')
                    .attr('src', e.target.result)
                    .width(165)
                    .height(220);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    customSelect2($('input[name="writerName"]'), '{{ route('select_route') }}', 'get_writers', null, 'Yazıçı seçin', true);
    if (!_.isEmpty({!! $writerData !!})) {
        $('input[name="writerName"]').select2('data',{!! $writerData !!});
    }
    customSelect2($('input[name="publisher"]'), '{{ route('select_route') }}', 'get_publisher', null, 'Nəşriyyat seçin', false);
    if (!_.isEmpty({!! $publisherData !!})) {
        $('input[name="publisher"]').select2('data',{!! $publisherData !!});
    }

    customSelect2($('input[name="book_lang"]'), '{{ route('select_route') }}', 'get_book_langs', null, 'Kitab dilini seçin', false);
    if (!_.isEmpty({!! $bookLangData !!})) {
        $('input[name="book_lang"]').select2('data',{!! $bookLangData !!});
    }
    customSelect2($('input[name="book_status"]'), '{{ route('select_route') }}', 'get_book_statuses', null, 'Kitab statusu seçin', false);
    if (!_.isEmpty({!! $bookStatusData !!})) {
        $('input[name="book_status"]').select2('data',{!! $bookStatusData !!});
    }
    customSelect2($('input[name="sub_category"]'), '{{ route('select_route') }}', 'get_sub_categories', null, 'Alt kateqoriya seçin', false);
    $('input[name="sub_category"]').select2('disable');

    if (!_.isEmpty({!! $subCategoryData !!})) {
        $('input[name="sub_category"]').select2('data',{!! $subCategoryData !!});
        $('input[name="sub_category"]').select2('enable');
    }
    customSelect2($('input[name="category"]'), '{{ route('select_route') }}', 'get_categories', null, 'Kateqoriya seçin', false);

    $('input[name="category"]').change(function () {
        customSelect2($('input[name="sub_category"]'), '{{ route('select_route') }}', 'get_sub_categories', {
            'category_id': $(this).val()
        }, 'Alt kateqoriya seçin', false);
        $('input[name="sub_category"]').select2('enable');
    });

    if (!_.isEmpty({!! $categoryData !!})) {
        $('input[name="category"]').select2('data',{!! $categoryData !!});
        $('input[name="category"]').trigger('change');
    }

</script>
