@extends('admin.base')
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Nəşriyyatlar</h4>

                    <a href="javascript:void(0)" class="btn btn-info" onclick="addPublisher(this)"
                       style="float: right;">Yeni</a>
                </div>
                <div class="card-body collapse in">
                    <div class="table-responsive">
                        <table class="table publisher_table">
                            <thead class="bg-primary">
                            <tr>
                                <th>#</th>
                                <th>Adı</th>
                                <th>Logo</th>
                                <th style="float: right">Əməliyyat</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($publishers as $publisher)
                                <tr tr_id="{{ $publisher->id }}">
                                    <td scope="row"></td>
                                    <td>{{ $publisher->name }}</td>
                                    <td>
                                        <img src="{{ asset('images/front/images/publisher_images/'.$publisher->publisher_img) }}"
                                             alt="{{ $publisher->name }} logo" style="width: 50px;">
                                    </td>
                                    <td style="float: right;">
                                        <a href="javascript:void(0)" class="btn btn-primary"
                                           onclick="editPublisher(this)">
                                            <i class="icon-pencil3"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-danger"
                                           onclick="deletePublisher(this)">
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
@section('title','Nəşriyyatlar')
@section('css')
    <style>

    </style>
@endsection
@section('js')
    <script>

        function addPublisher(element) {
            if ($('.publisher_table>tbody>tr').is('[tr_id="0"]')) return;
            $('.publisher_table>tbody').prepend('' +
                '<tr tr_id="0">' +
                '<td></td>' +
                '<td>' +
                '<input type="text" name="name" class="form-control">' +
                '</td>' +
                '<td>' +
                '<input type="file" name="publisher_img" class="form-control">' +
                '</td>' +
                '<td style="float: right;">' +
                '<a href="javascript:void(0)" class="btn btn-success" onclick="savePublisher(this)">\n' +
                '                                        <i class="icon-save"></i>\n' +
                '                                    </a>\n' +
                '                                    <button type="button" class="btn btn-warning cancelPublisher">\n' +
                '                                        <i class="icon-remove"></i>\n' +
                '                                    </button>' +
                '</td>' +
                '</tr>');
            orderTable('.publisher_table');

            $('.cancelPublisher').on('click', function () {
                $(this).parents('tr:eq(0)').remove();
                orderTable('.publisher_table');
            });
        }

        function editPublisher(element) {
            var tr = $(element).parents('tr:eq(0)'),
                tr_id = tr.attr('tr_id'),
                name = tr.find('td:eq(1)').text();

            tr.html();
            tr.html(
                '<td></td>' +
                '<td>' +
                '<input type="text" name="name" class="form-control" value="' + name + '">' +
                '</td>' +
                '<td>' +
                '<input type="file" name="publisher_img" class="form-control">' +
                '</td>' +
                '<td style="float: right;">' +
                '<a href="javascript:void(0)" class="btn btn-success" onclick="savePublisher(this)">' +
                '                                        <i class="icon-save"></i>' +
                '                                    </a>' +
                '                                     <button type="button" class="btn btn-warning cancelPublisher">' +
                '                                                        <i class="icon-remove"></i>' +
                '                                                    </button>' +
                '</td>');
            orderTable('.publisher_table');

            $('.cancelPublisher').on('click', function () {
                tr.html();
                tr.html('<td scope="row"></td>\n' +
                    '                                <td>' + name + '</td>\n' +
                    '                                <td><img src="" alt="' + name + ' logo"></td>\n' +
                    '                                <td style="float: right;">\n' +
                    '                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="editPublisher(this)">\n' +
                    '                                        <i class="icon-pencil3"></i>\n' +
                    '                                    </a>\n' +
                    '                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="deletePublisher(this)">\n' +
                    '                                        <i class="icon-trash-o"></i>\n' +
                    '                                    </a>\n' +
                    '                                </td>');
                orderTable('.publisher_table');
            });
        }

        function savePublisher(element) {
            var tr = $(element).parents('tr:eq(0)'),
                tr_id = tr.attr('tr_id'),
                name = tr.find('[name="name"]').val(),
                publisher_img = tr.find('[name="publisher_img"]').get(0).files[0],
                _token = "{{ csrf_token() }}",
                formData = new FormData();

            formData.append('id', tr_id);
            formData.append('name', name);
            formData.append('publisher_img', publisher_img);
            formData.append('_token', _token);


            $.ajax({
                type: "POST",
                url: "{{ route('publisher.save') }}",
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                dataType: 'json',
                data: formData,
                success: function (response) {
                    if (response.status == "ok") {

                        tr.html();
                        tr.html('<td scope="row"></td>\n' +
                            '                                <td>' + name + '</td>\n' +
                            '                                <td></td>\n' +
                            '                                <td style="float: right;">\n' +
                            '                                    <a href="javascript:void(0)" class="btn btn-primary" onclick="editPublisher(this)">\n' +
                            '                                        <i class="icon-pencil3"></i>\n' +
                            '                                    </a>\n' +
                            '                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="deletePublisher(this)">\n' +
                            '                                        <i class="icon-trash-o"></i>\n' +
                            '                                    </a>\n' +
                            '                                </td>');
                        orderTable('.publisher_table');
                        tr.attr('tr_id', response.data.id);
                    }
                    else {
                        tr.find('[name="name"]').css('border', '1px solid red');
                        swal({
                            'title': response.errors.name,
                            'icon': 'error',
                        });
                    }
                }
            });
        }

        function deletePublisher(element) {
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
                    $.post('{{ route('publisher.delete') }}', {id: tr_id, _token: _token}, function (response) {
                        if (response.status == 'ok') {
                            swal("Məlumat uğurla silindi!", {
                                icon: "success",
                            });
                            tr.remove();
                            orderTable('.publisher_table');
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

        orderTable('.publisher_table');

        function orderTable(tableName) {
            $(tableName + ">tbody>tr").each(function (i) {
                $(this).find("td:eq(0)").text(i + 1);
            });
        }

    </script>
@endsection