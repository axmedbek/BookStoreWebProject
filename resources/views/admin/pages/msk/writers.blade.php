@extends('admin.base')
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Yazarlar</h4>

                    <a href="javascript:void(0)" class="btn btn-info" onclick="addWriter(this)" style="float: right;">Yeni</a>
                </div>
                <div class="card-body collapse in">
                    <div class="table-responsive">
                        <table class="table writer_table">
                            <thead class="bg-primary">
                            <tr>
                                <th>#</th>
                                <th>Adı</th>
                                <th style="float: right">Əməliyyat</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($writers as $writer)
                                <tr tr_id="{{ $writer->id }}">
                                    <td scope="row"></td>
                                    <td>{{ $writer->name }}</td>
                                    <td style="float: right;">
                                        <a href="javascript:void(0)" class="btn btn-primary" onclick="editWriter(this)">
                                            <i class="icon-pencil3"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-danger"
                                           onclick="deleteWriter(this)">
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
@section('title','Yazarlar')
@section('css')
@endsection
@section('js')
    <script>

        function addWriter(element) {
            if ($('.writer_table>tbody>tr').is('[tr_id="0"]')) return;
            $('.writer_table>tbody').prepend('' +
                '<tr tr_id="0">' +
                '<td></td>' +
                '<td>' +
                '<input type="text" name="name" class="form-control">' +
                '</td>' +
                '<td style="float: right;">' +
                '<a href="javascript:void(0)" class="btn btn-success" onclick="saveWriter(this)">\n' +
                '                                        <i class="icon-save"></i>\n' +
                '                                    </a>\n' +
                '                                    <button type="button" class="btn btn-warning cancelWriter">\n' +
                '                                        <i class="icon-remove"></i>\n' +
                '                                    </button>' +
                '</td>' +
                '</tr>');
            orderTable();

            $('.cancelWriter').on('click', function () {
                $(this).parents('tr:eq(0)').remove();
                orderTable();
            });
        }

        function editWriter(element) {
            var tr = $(element).parents('tr:eq(0)'),
                tr_id = tr.attr('tr_id'),
                name = tr.find('td:eq(1)').text();
            tr.html();
            tr.html(
                '<td></td>' +
                '<td>' +
                '<input type="text" name="name" class="form-control" value="' + name + '">' +
                '</td>' +
                '<td style="float: right;">' +
                '<a href="javascript:void(0)" class="btn btn-success" onclick="saveWriter(this)">' +
                '                                        <i class="icon-save"></i>' +
                '                                    </a>' +
                '                                     <button type="button" class="btn btn-warning cancelWriter">' +
                '                                                        <i class="icon-remove"></i>' +
                '                                                    </button>' +
                '</td>');
            orderTable();
            $('.cancelWriter').on('click', function () {
                tr.html();
                tr.html('<td scope="row"></td>\n' +
                    '                                <td>' + name + '</td>\n' +
                    '                                <td style="float: right;">\n' +
                    '                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="editWriter(this)">\n' +
                    '                                        <i class="icon-pencil3"></i>\n' +
                    '                                    </a>\n' +
                    '                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteWriter(this)">\n' +
                    '                                        <i class="icon-trash-o"></i>\n' +
                    '                                    </a>\n' +
                    '                                </td>');
                orderTable();
            });
        }

        function saveWriter(element) {
            var tr = $(element).parents('tr:eq(0)'),
                tr_id = tr.attr('tr_id'),
                name = tr.find('[name="name"]').val(),
                _token = "{{ csrf_token() }}";

            $.post('{{ route('msk_writers.save') }}', {id: tr_id, name: name, _token: _token}, function (response) {
                if (response.status == "ok") {
                    tr.html();
                    tr.html('<td scope="row"></td>\n' +
                        '                                <td>' + name + '</td>\n' +
                        '                                <td style="float: right;">\n' +
                        '                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="editWriter(this)">\n' +
                        '                                        <i class="icon-pencil3"></i>\n' +
                        '                                    </a>\n' +
                        '                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteWriter(this)">\n' +
                        '                                        <i class="icon-trash-o"></i>\n' +
                        '                                    </a>\n' +
                        '                                </td>');
                    orderTable();
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

        function deleteWriter(element) {
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
                    $.post('{{ route('msk_writers.delete') }}', {id: tr_id, _token: _token}, function (response) {
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

        //        function deleteWriter(element) {
        //            var tr = $(element).parents('tr:eq(0)');
        //            console.log(tr);
        //        }

        orderTable();

        function orderTable() {
            $(".writer_table>tbody>tr").each(function (i) {
                $(this).find("td:eq(0)").text(i + 1);
            });
        }
    </script>
@endsection