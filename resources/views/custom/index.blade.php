@extends('custom.layout', ['title' => 'custom List'])
@section('head')
@endsection

@section('content')
    <div class="container-scroller">
        @include('custom.inc.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('custom.inc.tsetting')
            @include('custom.inc.right-sidebar')
            @include('custom.inc.side-nav')
            <div class="main-panel">
                <div class="content-wrapper">
                    @include('custom.inc.main-row')
                    @include('custom.inc.card')
                    @include('custom.inc.order')

                </div>
            </div>
        </div>
    </div>
@endsection
