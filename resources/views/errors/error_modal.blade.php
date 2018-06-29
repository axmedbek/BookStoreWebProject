@if(count($errors))
    <div class="alert alert-danger">
        @foreach($errors as $error)
            $error
        @endif
    </div>
@endif