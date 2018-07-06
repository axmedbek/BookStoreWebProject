@extends('admin.base')
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">İstifadəçilər</h4>

                    <a type="button" href="javascript:openModal('{{ route('book.add_edit.modal',['book' => 0]) }}')"
                       class="btn btn-success" style="float: right;">Yeni</a>
                </div>
                <div class="card-body collapse in">
                    <div class="table-responsive">
                        <table class="table mb-0 users_table">
                            <thead class="bg-teal bg-lighten-4">
                            <tr>
                                <th>#</th>
                                <th>Adı/Soyadı</th>
                                <th>Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td scope="row" style="font-weight: bold;"></td>
                                    <td>{{ $user->name." ".$user->surname }}</td>
                                    @php
                                        $color = "";
                                        switch ($user->role_id){
                                            case 1 : $color = "danger";
                                            break;
                                            case 2 : $color = "success";
                                            break;
                                            case 3 : $color = "warning";
                                            break;
                                        }
                                    @endphp
                                    <td><span class="tag tag-{{ $color }}" style="width: 80px;">{{ $user->role->name }}</span></td>
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
@section('title','İstifadəçilər')
@section('css')

@endsection
@section('js')
    <script>
        orderTable();

        function orderTable() {
            $(".users_table>tbody>tr").each(function (i) {
                $(this).find("td:eq(0)").text(i + 1);
            });
        }
    </script>
@endsection