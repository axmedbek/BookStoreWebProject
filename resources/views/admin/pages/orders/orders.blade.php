@extends('admin.base')
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('messages.sidebar.orders') }}</h4>

                    <a type="button" href="javascript:openModal('{{ route('book.add_edit.modal',['book' => 0]) }}')"
                       class="btn btn-success" style="float: right;"><i class="icon-android-add"></i></a>
                </div>
                <div class="card-body collapse in">
                    <div class="table-responsive">
                        <table class="table mb-0 orders_table">
                            <thead class="bg-teal bg-lighten-4">
                            <tr>
                                <th>#</th>
                                <th>Kitab</th>
                                <th>Sifarişçi</th>
                                <th style="float: right;">Əməliyyat</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row" style="font-weight: bold;"></td>
                                    <td>Corc Oruel - Heyvanıstan</td>
                                    <td>Ahmad Mammadli</td>
                                    <td style="float: right;">
                                        <a type="button"
                                           href="javascript:void(0)"
                                           class="btn btn-info btn-sm"><i class="icon-information-circled"></i></a>
                                        </a>
                                        <a type="button"
                                           href="javascript:void(0)"
                                           class="btn btn-success btn-sm"><i
                                                    class="icon-pencil3"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm"
                                           onclick="deleteBook(this)">
                                            <i class="icon-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('title',trans('messages.sidebar.orders'))
@section('css')

@endsection
@section('js')
    <script>
        orderTable();

        function orderTable() {
            $(".orders_table>tbody>tr").each(function (i) {
                $(this).find("td:eq(0)").text(i + 1);
            });
        }
    </script>
@endsection