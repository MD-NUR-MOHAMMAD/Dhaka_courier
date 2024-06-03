@extends('admin.layout', ['title' => 'admin List'])
@section('head')
@endsection

@section('content')
    <div class="container-scroller">
        @include('admin.inc.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.inc.tsetting')
            @include('admin.inc.right-sidebar')
            @include('admin.inc.side-nav')
            <div class="main-panel">ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                <div class="content-wrapper">
                    @include('admin.inc.main-row')
                    @include('admin.inc.card')
                    @include('admin.inc.order')
                    @include('admin.inc.report')
                    @include('admin.inc.product')
                    @include('admin.inc.project')
                    @include('admin.inc.table')
                </div>
                @include('admin.inc.footer')
            </div>
        </div>
    </div>
@endsection
