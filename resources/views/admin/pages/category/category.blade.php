@extends('admin.base')
@section('content')

    <div class="row">
        <div class="col-xs-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kateqoriya əlavə et , düzəlt  və ya sil</h4>

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
                                        <a href="javascript:void(0)" class="btn btn-primary" onclick="editCategory(this)">
                                            <i class="icon-pencil3"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteCategory(this)">
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
    </div>


@endsection
@section('title','Kateqoriyalar')
@section('css')
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
            orderTable();

            $('.cancelCategory').on('click', function () {
                $(this).parents('tr:eq(0)').remove();
                orderTable();
            });
        }

        function editCategory(element) {
            var tr = $(element).parents('tr:eq(0)'),
                tr_id = tr.attr('tr_id'),
                name = tr.find('td:eq(1)').text(),
                icon = tr.find('td:eq(2)').text();
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
            orderTable();

            $('.cancelCategory').on('click', function () {
                tr.html();
                tr.html('<td scope="row"></td>\n' +
                    '                                <td>' + name + '</td>\n' +
                    '                                <td><i class="'+icon+'"></i></td>\n' +
                    '                                <td style="float: right;">\n' +
                    '                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="editCategory(this)">\n' +
                    '                                        <i class="icon-pencil3"></i>\n' +
                    '                                    </a>\n' +
                    '                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteCategory(this)">\n' +
                    '                                        <i class="icon-trash-o"></i>\n' +
                    '                                    </a>\n' +
                    '                                </td>');
                orderTable();
            });
        }

        function cancelCategory(element) {
            var tr = $(element).parents('tr:eq(0)');
            tr.html();
            tr.html('<td scope="row"></td>\n' +
                '                                <td>' + name + '</td>\n' +
                '                                <td><i class="'+icon+'"></i></td>\n' +
                '                                <td style="float: right;">\n' +
                '                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="editCategory(this)">\n' +
                '                                        <i class="icon-pencil3"></i>\n' +
                '                                    </a>\n' +
                '                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteCategory(this)">\n' +
                '                                        <i class="icon-trash-o"></i>\n' +
                '                                    </a>\n' +
                '                                </td>');
            orderTable();
        }

        function saveCategory(element) {
            var tr = $(element).parents('tr:eq(0)'),
                tr_id = tr.attr('tr_id'),
                name = tr.find('[name="name"]').val(),
                icon = tr.find('[name="icon"]').val(),
                sira = tr.find('td:eq(0)').text(),
                _token = "{{ csrf_token() }}";

            $.post('{{ route('category.save') }}', {id: tr_id, name: name, icon:icon, sira:sira, _token: _token}, function (response) {
                if (response.status == "ok") {
                    tr.html();
                    tr.html('<td scope="row"></td>\n' +
                        '                                <td>' + name + '</td>\n' +
                        '                                <td><i class="' + icon +'"></i></td>\n' +
                        '                                <td style="float: right;">\n' +
                        '                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="editCategory(this)">\n' +
                        '                                        <i class="icon-pencil3"></i>\n' +
                        '                                    </a>\n' +
                        '                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteCategory(this)">\n' +
                        '                                        <i class="icon-trash-o"></i>\n' +
                        '                                    </a>\n' +
                        '                                </td>');
                    orderTable();
                    tr.attr('tr_id',response.data.id);
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
                    $.post('{{ route('category.delete') }}', {id: tr_id,_token:_token}, function (response) {
                        if (response.status == 'ok') {
                            swal("Məlumat uğurla silindi!", {
                                icon: "success",
                            });
                            tr.remove();
                            orderTable();
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

        orderTable();

        function orderTable() {
            $(".category_table>tbody>tr").each(function (i) {
                $(this).find("td:eq(0)").text(i + 1);
            });
        }
    </script>
@endsection