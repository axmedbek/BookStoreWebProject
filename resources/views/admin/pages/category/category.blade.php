@extends('admin.base')
@section('content')

    <div class="row">
        <div class="col-xs-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kateqoriya</h4>

                    <a href="javascript:void(0)" class="btn btn-info" onclick="addCategory(this)" style="float: right;">Yeni</a>
                </div>
                <div class="card-body collapse in">
                    <div class="table-responsive">
                        <table class="table category_table">
                            <thead class="bg-primary">
                            <tr>
                                <th>#</th>
                                <th>Adı</th>
                                <th>Icon</th>
                                <th style="float: right">Əməliyyat</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr tr_id="{{ $category->id }}">
                                    <td scope="row"></td>
                                    <td>{{ $category->name }}</td>
                                    <td><i class="{{ $category->icon }}"></i></td>
                                    <td style="float: right;">
                                        <a href="javascript:void(0)" class="btn btn-primary"
                                           onclick="editCategory(this)">
                                            <i class="icon-pencil3"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-danger"
                                           onclick="deleteCategory(this)">
                                            <i class="icon-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6" style="display: none;">
            <div class="card">
                <div class="loader" style="
                display: none;
                position: absolute;
                width: 100%;
                height: 100%;
                background: rgba(150, 122, 220, 0.29);">
                    <img src="{{ asset('images\front\images\loager.gif') }}" alt="alfakitab_loader" style="
                    margin-left: 40%;
                    margin-top: 18%;
                    width: 100px;">
                </div>
                <div class="card-header">
                    <h4 class="card-title">Alt kateqoriya</h4>
                    <a href="javascript:void(0)" class="btn btn-info" onclick="addSubCategory(this)"
                       style="float: right;">Yeni</a>
                </div>
                <div class="card-body collapse in">
                    <div class="table-responsive">
                        <table class="table sub_category_table">
                            <thead class="bg-primary">
                            <tr>
                                <th>#</th>
                                <th>Adı</th>
                                <th>Icon</th>
                                <th style="float: right">Əməliyyat</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('title','Kateqoriyalar')
@section('css')
    <style>
        .activeTr {
            background-color: bisque;
        }
    </style>
@endsection
@section('js')
    <script>

        function addCategory(element) {
            if ($('.category_table>tbody>tr').is('[tr_id="0"]')) return;
            $('.category_table>tbody').prepend('' +
                '<tr tr_id="0">' +
                '<td></td>' +
                '<td>' +
                '<input type="text" name="name" class="form-control">' +
                '</td>' +
                '<td>' +
                '<input type="text" name="icon" class="form-control">' +
                '</td>' +
                '<td style="float: right;">' +
                '<a href="javascript:void(0)" class="btn btn-success" onclick="saveCategory(this)">\n' +
                '                                        <i class="icon-save"></i>\n' +
                '                                    </a>\n' +
                '                                    <button type="button" class="btn btn-warning cancelCategory">\n' +
                '                                        <i class="icon-remove"></i>\n' +
                '                                    </button>' +
                '</td>' +
                '</tr>');
            orderTable('.category_table');

            $('.cancelCategory').on('click', function () {
                $(this).parents('tr:eq(0)').remove();
                orderTable('.category_table');
            });
        }

        function editCategory(element) {
            var tr = $(element).parents('tr:eq(0)'),
                tr_id = tr.attr('tr_id'),
                name = tr.find('td:eq(1)').text(),
                icon = tr.find('td:eq(2)>i').attr('class');
            tr.html();
            tr.html(
                '<td></td>' +
                '<td>' +
                '<input type="text" name="name" class="form-control" value="' + name + '">' +
                '</td>' +
                '<td>' +
                '<input type="text" name="icon" class="form-control" value="' + icon + '">' +
                '</td>' +
                '<td style="float: right;">' +
                '<a href="javascript:void(0)" class="btn btn-success" onclick="saveCategory(this)">' +
                '                                        <i class="icon-save"></i>' +
                '                                    </a>' +
                '                                     <button type="button" class="btn btn-warning cancelCategory">' +
                '                                                        <i class="icon-remove"></i>' +
                '                                                    </button>' +
                '</td>');
            orderTable('.category_table');

            $('.cancelCategory').on('click', function () {
                tr.html();
                tr.html('<td scope="row"></td>\n' +
                    '                                <td>' + name + '</td>\n' +
                    '                                <td><i class="' + icon + '"></i></td>\n' +
                    '                                <td style="float: right;">\n' +
                    '                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="editCategory(this)">\n' +
                    '                                        <i class="icon-pencil3"></i>\n' +
                    '                                    </a>\n' +
                    '                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteCategory(this)">\n' +
                    '                                        <i class="icon-trash-o"></i>\n' +
                    '                                    </a>\n' +
                    '                                </td>');
                orderTable('.category_table');
            });
        }

        function cancelCategory(element) {
            var tr = $(element).parents('tr:eq(0)');
            tr.html();
            tr.html('<td scope="row"></td>\n' +
                '                                <td>' + name + '</td>\n' +
                '                                <td><i class="' + icon + '"></i></td>\n' +
                '                                <td style="float: right;">\n' +
                '                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="editCategory(this)">\n' +
                '                                        <i class="icon-pencil3"></i>\n' +
                '                                    </a>\n' +
                '                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteCategory(this)">\n' +
                '                                        <i class="icon-trash-o"></i>\n' +
                '                                    </a>\n' +
                '                                </td>');
            orderTable('.category_table');
        }

        function saveCategory(element) {
            var tr = $(element).parents('tr:eq(0)'),
                tr_id = tr.attr('tr_id'),
                name = tr.find('[name="name"]').val(),
                icon = tr.find('[name="icon"]').val(),
                sira = tr.find('td:eq(0)').text(),
                _token = "{{ csrf_token() }}";

            $.post('{{ route('category.save') }}', {
                id: tr_id,
                name: name,
                icon: icon,
                sira: sira,
                _token: _token
            }, function (response) {
                if (response.status == "ok") {
                    tr.html();
                    tr.html('<td scope="row"></td>\n' +
                        '                                <td>' + name + '</td>\n' +
                        '                                <td><i class="' + icon + '"></i></td>\n' +
                        '                                <td style="float: right;">\n' +
                        '                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="editCategory(this)">\n' +
                        '                                        <i class="icon-pencil3"></i>\n' +
                        '                                    </a>\n' +
                        '                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteCategory(this)">\n' +
                        '                                        <i class="icon-trash-o"></i>\n' +
                        '                                    </a>\n' +
                        '                                </td>');
                    orderTable('.category_table');
                    tr.attr('tr_id', response.data.id);
                }
                else {
                    tr.find('[name="name"]').css('border', '1px solid red');
                    swal({
                        'title': response.errors.name,
                        'icon': 'error',
                    });

                }
            });

        }

        function deleteCategory(element) {
            var tr = $(element).parents('tr:eq(0)'),
                tr_id = tr.attr('tr_id'),
                _token = "{{ csrf_token() }}";

            swal({
                title: "Silmək istədiyinizə əminsiniz?",
                text: "Bu məlumatı sildikdən sonra geri qaytarmaq mümkün olmayacaq!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.post('{{ route('category.delete') }}', {id: tr_id, _token: _token}, function (response) {
                        if (response.status == 'ok') {
                            swal("Məlumat uğurla silindi!", {
                                icon: "success",
                            });
                            tr.remove();
                            orderTable('.category_table');
                        } else {
                            swal("Məlumat silinmədi!");
                        }
                    });
                }
                else {
                    swal("Məlumat silinmədi!");
                }
            });
        }

        function addSubCategory(element) {
            if ($('.sub_category_table>tbody>tr').is('[tr_id="0"]')) return;
            $('.sub_category_table>tbody').prepend('' +
                '<tr tr_id="0" cat_id="'+$('.category_table>tbody').find('.activeTr').attr('tr_id')+'">' +
                '<td></td>' +
                '<td>' +
                '<input type="text" name="name" class="form-control">' +
                '</td>' +
                '<td>' +
                '<input type="text" name="icon" class="form-control">' +
                '</td>' +
                '<td style="float: right;">' +
                '<a href="javascript:void(0)" class="btn btn-success" onclick="saveSubCategory(this)">\n' +
                '                                        <i class="icon-save"></i>\n' +
                '                                    </a>\n' +
                '                                    <button type="button" class="btn btn-warning cancelSubCategory">\n' +
                '                                        <i class="icon-remove"></i>\n' +
                '                                    </button>' +
                '</td>' +
                '</tr>');
            orderTable('.sub_category_table');

            $('.cancelSubCategory').on('click', function () {
                $(this).parents('tr:eq(0)').remove();
                orderTable('.sub_category_table');
            });
        }

        function editSubCategory(element) {
            var tr = $(element).parents('tr:eq(0)'),
                tr_id = tr.attr('tr_id'),
                name = tr.find('td:eq(1)').text(),
                icon = tr.find('td:eq(2)>i').attr('class');
            tr.html();
            tr.html(
                '<td></td>' +
                '<td>' +
                '<input type="text" name="name" class="form-control" value="' + name + '">' +
                '</td>' +
                '<td>' +
                '<input type="text" name="icon" class="form-control" value="' + icon + '">' +
                '</td>' +
                '<td style="float: right;">' +
                '<a href="javascript:void(0)" class="btn btn-success" onclick="saveSubCategory(this)">' +
                '                                        <i class="icon-save"></i>' +
                '                                    </a>' +
                '                                     <button type="button" class="btn btn-warning cancelSubCategory">' +
                '                                                        <i class="icon-remove"></i>' +
                '                                                    </button>' +
                '</td>');
            orderTable('.sub_category_table');

            $('.cancelSubCategory').on('click', function () {
                tr.html();
                tr.html('<td scope="row"></td>\n' +
                    '                                <td>' + name + '</td>\n' +
                    '                                <td><i class="' + icon + '"></i></td>\n' +
                    '                                <td style="float: right;">\n' +
                    '                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="editSubCategory(this)">\n' +
                    '                                        <i class="icon-pencil3"></i>\n' +
                    '                                    </a>\n' +
                    '                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteSubCategory(this)">\n' +
                    '                                        <i class="icon-trash-o"></i>\n' +
                    '                                    </a>\n' +
                    '                                </td>');
                orderTable('.sub_category_table');
            });
        }

        function cancelSubCategory(element) {
            var tr = $(element).parents('tr:eq(0)');
            tr.html();
            tr.html('<td scope="row"></td>\n' +
                '                                <td>' + name + '</td>\n' +
                '                                <td><i class="' + icon + '"></i></td>\n' +
                '                                <td style="float: right;">\n' +
                '                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="editSubCategory(this)">\n' +
                '                                        <i class="icon-pencil3"></i>\n' +
                '                                    </a>\n' +
                '                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteSubCategory(this)">\n' +
                '                                        <i class="icon-trash-o"></i>\n' +
                '                                    </a>\n' +
                '                                </td>');
            orderTable('.sub_category_table');
        }

        function saveSubCategory(element) {
            var tr = $(element).parents('tr:eq(0)'),
                tr_id = tr.attr('tr_id'),
                cat_id = tr.attr('cat_id'),
                name = tr.find('[name="name"]').val(),
                icon = tr.find('[name="icon"]').val(),
                sira = tr.find('td:eq(0)').text(),
                _token = "{{ csrf_token() }}";

            $.post('{{ route('subcategory.save') }}', {
                id: tr_id,
                category_id : cat_id,
                name: name,
                icon: icon,
                sira: sira,
                _token: _token
            }, function (response) {
                if (response.status == "ok") {
                    tr.html();
                    tr.html('<td scope="row"></td>\n' +
                        '                                <td>' + name + '</td>\n' +
                        '                                <td><i class="' + icon + '"></i></td>\n' +
                        '                                <td style="float: right;">\n' +
                        '                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="editSubCategory(this)">\n' +
                        '                                        <i class="icon-pencil3"></i>\n' +
                        '                                    </a>\n' +
                        '                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteSubCategory(this)">\n' +
                        '                                        <i class="icon-trash-o"></i>\n' +
                        '                                    </a>\n' +
                        '                                </td>');
                    orderTable('.sub_category_table');
                    tr.attr('tr_id', response.data.id);
                    tr.attr('cat_id',cat_id);
                }
                else {
                    tr.find('[name="name"]').css('border', '1px solid red');
                    swal({
                        'title': response.errors.name,
                        'icon': 'error',
                    });

                }
            });

        }

        function deleteSubCategory(element) {
            var tr = $(element).parents('tr:eq(0)'),
                tr_id = tr.attr('tr_id'),
                _token = "{{ csrf_token() }}";

            swal({
                title: "Silmək istədiyinizə əminsiniz?",
                text: "Bu məlumatı sildikdən sonra geri qaytarmaq mümkün olmayacaq!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.post('{{ route('subcategory.delete') }}', {id: tr_id, _token: _token}, function (response) {
                        if (response.status == 'ok') {
                            swal("Məlumat uğurla silindi!", {
                                icon: "success",
                            });
                            tr.remove();
                            orderTable('.sub_category_table');
                        } else {
                            swal("Məlumat silinmədi!");
                        }
                    });
                }
                else {
                    swal("Məlumat silinmədi!");
                }
            });
        }

        $('.category_table>tbody>tr').on('click', function () {
            let cat_id = $(this).attr('tr_id'),
                _token = "{{ csrf_token() }}";
            doActiveAndDeActive(this);
            loader(1);
            $.post('{{ route('subcategory.get') }}', {cat_id: cat_id, _token: _token}, function (response) {
                if (response.status == "ok") {
                    loader(0);
                    $(".sub_category_table").parents("div:eq(3)").show();
                    $(".sub_category_table>tbody").html('');
                    for (let i = 0; i < response.data.length; i++) {
                        $(".sub_category_table>tbody").prepend('  <tr tr_id="'+response.data[i].id+'" cat_id="'+response.data[i].category_id + '">\n' +
                            '                            <td scope="row"></td>\n' +
                            '                            <td>'+response.data[i].name+'</td>\n' +
                            '                            <td><i class="'+ response.data[i].icon +'"></i></td>\n' +
                            '                        <td style="float: right;">\n' +
                            '                            <a href="javascript:void(0)" class="btn btn-primary" onclick="editSubCategory(this)">\n' +
                            '                            <i class="icon-pencil3"></i>\n' +
                            '                            </a>\n' +
                            '                            <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteSubCategory(this)">\n' +
                            '                            <i class="icon-trash-o"></i>\n' +
                            '                            </a>\n' +
                            '                            </td>\n' +
                            '                            </tr>');
                    }
                    orderTable('.sub_category_table');
                    if (response.data.length < 1) $(".sub_category_table>tbody").html('');
                }
            });
        });

        orderTable('.category_table');

        function orderTable(tableName) {
            $(tableName + ">tbody>tr").each(function (i) {
                $(this).find("td:eq(0)").text(i + 1);
            });
        }

        function doActiveAndDeActive(element){
            $(element).parent('tbody').find('tr').each(function(){
                if($(this).hasClass('activeTr')){
                    $(this).removeClass('activeTr');
                }
            });
            $(element).addClass('activeTr');
        }

        function loader(status){
            if (status){
                $('.loader').show();
            }
            else{
                $('.loader').hide();
            }
        }
    </script>
@endsection