<style>
    label{
        font-weight: bold;
    }
</style>
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        {{--<form id="book_add_edit_form" action="{{ route('book.add_edit.action',['book' => $book]) }}"--}}
        {{--enctype="multipart/form-data" method="post">--}}
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Kitab haqqında</h5>
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
                                <img src="{{ asset('images/front/images/book_images/'.$bookObj->book_img) }}"
                                     style="width: 180px;height: 250px;">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="bookName">Kitabın adı : </label>
                            {{ $bookObj->name }}
                        </div>
                        <div class="form-group">
                            <label for="writerName">Yazar adı : </label>
                            @foreach($bookObj->book_writers as $key => $writer)
                                {{ $writer->name }} {{ sizeof($bookObj->book_writers) > $key + 1 ? ',' : ''}}
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="writerName">Nəşriyyat adı : </label>
                            {{ $bookObj->publisher->name }}
                        </div>
                        <div class="form-group">
                            <label for="category">Kateqoriya : </label>
                            {{ $bookObj->category->name }}
                        </div>
                        <div class="form-group">
                            <label for="sub_category">Alt Kateqoriya : </label>
                            {{ $bookObj->sub_category->name }}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Statusu : </label>
                            {{ $bookObj->book_status->name }}
                        </div>
                        <div class="form-group">
                            <label>Dili : </label>
                            {{ $bookObj->book_lang->name }}
                        </div>
                        <div class="form-group">
                            <label>Qiyməti : </label>
                            {{ $bookObj->cost }} Azn
                        </div>
                        <div class="form-group">
                            <label>Səhifə sayı : </label>
                            {{ $bookObj->page_count }}
                        </div>
                        <div class="form-group">
                            <label>Stock sayı : </label>
                            {{ $bookObj->stock_count }}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="book_description">Haqqında</label>
                            <p style="text-align: justify;">{!! $bookObj->book_description !!}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Dərc olunma tarixi : </label>
                            {{ date('d-m-Y',strtotime($bookObj->publishing_date)) }}
                        </div>
                        <div class="form-group">
                            <label>ISBN : </label>
                            {{ $bookObj->isbn }}
                        </div>
                        <div class="form-group">
                            <label>Dərc sayı : </label>
                            {{ $bookObj->publishing_count }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
