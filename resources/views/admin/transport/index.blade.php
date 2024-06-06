@extends('admin.layout', ['title' => 'employee List'])
@section('head')
@endsection

@section('content')
    <div class="card-body">
        <h1 class="card-title">Index Table:</h1>
        {{-- <p class="card-description">
            Add class <code>.table-hover</code>
        </p> --}}
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Company</th>
                        <th>Delivery Boy</th>
                        <th>From</th>
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
                            <td>{{ $transport->mobile }}</td>
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
                            </td>
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
