@extends('admin.base')
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('messages.sidebar.books') }}</h4>

                    <a type="button" href="javascript:openModal('{{ route('book.add_edit.modal',['book' => 0]) }}')"
                       class="btn btn-success" style="float: right;"><i class=""></i></a>
                </div>
                <div class="card-body collapse in">
                    <div class="table-responsive">
                        <table class="table book_table">
                            <thead class="bg-primary">
                            <tr>
                                <th>#</th>
                                <th>{{ trans('messages.books.table.name') }}</th>
                                <th>{{ trans('messages.books.table.image') }}</th>
                                <th>{{ trans('messages.books.table.category') }}</th>
                                <th>{{ trans('messages.books.table.writer') }}</th>
                                <th>{{ trans('messages.books.table.cost') }}</th>
                                <th>{{ trans('messages.books.table.status') }}</th>
                                <th style="float: right;min-width: 170px;">{{ trans('messages.books.table.operation') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                                <tr tr_id="{{ $book->id }}">
                                    <td scope="row"></td>
                                    <td>{{ $book->name }}</td>
                                    <td><img src="{{ asset('images/front/images/book_images/'.$book->book_img) }}"
                                             alt="{{ str_slug($book->name) }} image" width="60px"></td>
                                    <td>{{ $book->category->name }}/{{ $book->sub_category->name }}</td>
                                    <td>
                                        @foreach($book->book_writers as $key => $writer)
                                            {{ $writer->name }} {{ sizeof($book->book_writers) > $key + 1 ? ',' : ''}}
                                        @endforeach
                                    </td>
                                    <td>{{ sprintf("%.2f",$book->cost) }} Azn</td>
                                    <td>
                                        <div class="tag tag-default" style="background-color: {{ $book->book_status['color'] }};width: 80px;">{{ $book->book_status['name'] }}</div>
                                    </td>
                                    <td style="float: right;">
                                        <a type="button"
                                           href="javascript:openModal('{{ route('book.info.modal',['book' => $book->id]) }}')"
                                           class="btn btn-info btn-sm"><i class="icon-information-circled"></i></a>
                                        </a>
                                        <a type="button"
                                           href="javascript:openModal('{{ route('book.add_edit.modal',['book' => $book->id]) }}')"
                                           class="btn btn-success btn-sm"><i
                                                    class="icon-pencil3"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm"
                                           onclick="deleteBook(this)">
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
@section('title',trans('messages.sidebar.books'))
@section('css')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
@endsection
@section('js')
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>

        function deleteBook(element) {
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
                    $.post('{{ route('book.delete') }}', {id: tr_id, _token: _token}, function (response) {
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
            $(".book_table>tbody>tr").each(function (i) {
                $(this).find("td:eq(0)").text(i + 1);
            });
        }
    </script>
@endsection