@extends('admin.layout', ['title' => 'employee transport create'])
@section('head')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card-body">
            <h4 class="card-title">Default form</h4>
            <p class="card-description">
                Basic form layout
            </p>
            <form action="{{ route('transport.store') }}" class="forms-sample" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputcompany1">Company</label>
                    <input name="company" type="text" class="form-control" id="exampleInputcompany1"
                        value="{{ old('company') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputdelivery_boy">Delivery Boy</label>
                    <input name="delivery_boy" type="text" class="form-control" id="exampleInputdelivery_boy"
                        value="{{ old('delivery_boy') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputForm">Form</label>
                    <input name="address_from" type="text" class="form-control" id="exampleInputForm"
                        value="{{ old('address_from') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmTo">To</label>
                    <input name="address_to" type="text" class="form-control" id="exampleInputConfirmTo"
                        value="{{ old('address_to') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmTomobile">Mobile</label>
                    <input name="mobile" type="number" class="form-control" id="exampleInputConfirmTomobile"
                        value="{{ old('mobile') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmTomobilenid">NID</label>
                    <input name="nid" type="text" class="form-control" id="exampleInputConfirmTomobilenid"
                        value="{{ old('nid') }}">
                </div>
                <button type="submit" class="btn btn-primary mr-2" name="submit" value="insert">Submit</button>
            </form>
        </div>
    </div>
@endsection
