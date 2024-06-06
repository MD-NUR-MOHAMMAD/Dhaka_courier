@extends('admin.layout', ['title' => 'employee transport create'])
@section('head')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card-body">
<<<<<<< HEAD
            <h1 class="card-title">Edit form :</h1>
            {{-- <p class="card-description">
                Basic form layout
            </p> --}}
=======
            <h4 class="card-title">Default form</h4>
            <p class="card-description">
                Basic form layout
            </p>
>>>>>>> 406187b7bd9fa82af0ec6be913aa3f18f51b2d9d
            <form action="{{ route('transport.update', $transport->id) }}" class="forms-sample" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputcompany1">Company</label>
                    <input name="company" type="text" class="form-control" id="exampleInputcompany1"
                        value="{{ $transport->company }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputdelivery_boy">Delivery Boy</label>
                    <input name="delivery_boy" type="text" class="form-control" id="exampleInputdelivery_boy"
                        value="{{ $transport->delivery_boy }}">
                </div>
                <div class="form-group">
<<<<<<< HEAD
                    <label for="exampleInputForm">From</label>
=======
                    <label for="exampleInputForm">Form</label>
>>>>>>> 406187b7bd9fa82af0ec6be913aa3f18f51b2d9d
                    <input name="address_from" type="text" class="form-control" id="exampleInputForm"
                        value="{{ $transport->address_from }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmTo">To</label>
                    <input name="address_to" type="text" class="form-control" id="exampleInputConfirmTo"
                        value="{{ $transport->address_to }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmTomobile">Mobile</label>
                    <input name="mobile" type="number" class="form-control" id="exampleInputConfirmTomobile"
                        value="{{ $transport->mobile }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmTomobilenid">NID</label>
                    <input name="nid" type="text" class="form-control" id="exampleInputConfirmTomobilenid"
                        value="{{ $transport->nid }}">
                </div>
                <button type="submit" class="btn btn-primary mr-2" name="submit" value="insert">Submit</button>
            </form>
        </div>
    </div>
@endsection
