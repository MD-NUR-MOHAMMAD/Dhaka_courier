@extends('admin.layout', ['title' => 'employee List'])
@section('head')
@endsection

@section('content')
    <div class="card-body">
<<<<<<< HEAD
        <h1 class="card-title">Index Table:</h1>
        {{-- <p class="card-description">
            Add class <code>.table-hover</code>
        </p> --}}
=======
        <h4 class="card-title">Hoverable Table</h4>
        <p class="card-description">
            Add class <code>.table-hover</code>
        </p>
>>>>>>> 406187b7bd9fa82af0ec6be913aa3f18f51b2d9d
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Company</th>
                        <th>Delivery Boy</th>
<<<<<<< HEAD
                        <th>From</th>
=======
                        <th>Form</th>
>>>>>>> 406187b7bd9fa82af0ec6be913aa3f18f51b2d9d
                        <th>To</th>
                        <th>Mobile</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transports as $transport)
                        <tr>
                            <td>{{ $transport->company }}</td>
                            <td>{{ $transport->delivery_boy }}</td>
                            <td>{{ $transport->address_from }}</td>
                            <td>{{ $transport->address_to }}</td>
<<<<<<< HEAD
                            <td>{{ $transport->mobile }}</td>
=======
                            <td>{{ $transport->mobile }}</td>   
>>>>>>> 406187b7bd9fa82af0ec6be913aa3f18f51b2d9d
                            <td>
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <div class="btn-group" role="group">
                                      <button id="btnGroupDrop1" type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa-solid fa-bars"></i>
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="{{route('transport.edit', $transport->id)}}">Edit</a>
                                        <form action="{{route('transport.destroy', $transport->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item">Delete</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
<<<<<<< HEAD
                            </td>
=======
                            </td>    
>>>>>>> 406187b7bd9fa82af0ec6be913aa3f18f51b2d9d
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No Data Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
