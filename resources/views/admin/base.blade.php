@include("admin.layouts.header")
@include("admin.layouts.sidebar")

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- stats -->
@yield('content')

            @include('admin.modals.modal_template')
        </div>
    </div>
</div>
@include("admin.layouts.footer")