@extends('layouts.admin-master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    {{ __('City Type') }}
                </div>
                @include('layouts.admin_messages')
                <div class="card-body">
                    <div class="row">
                        <a href="{{ route('citymasters.create') }}" class="btn btn-success m-2"><i class="cil-plus btn-icon mr-2"></i>{{ __('Add City') }}</a>
                    </div>
                    <br>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">City Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @forelse ($cities as $city)
                            <tr>
                                <th scope="row">{{ $city->id }}</th>
                                <td>{{ $city->city_name }}</td>
                                <td>
                                    <a href="{{ route('citymasters.show', $city->id) }}" class="btn btn-primary btn-sm"><i class="cil-zoom-in btn-icon mr-2"></i>View</a>
                                    <a href="{{ route('citymasters.edit', $city->id) }}" class="btn btn-success btn-sm"><i class="cil-pencil btn-icon mr-2"></i>Edit</a>
                                    <form class="form-delete" style="display: inline" action="{{ route('citymasters.destroy', $city->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure??')"><i class="cil-trash btn-icon mr-2"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-warning">
                                <h3><strong>Sorry!</strong> You Don't Have Any Record In This.</h3>
                            </div>
                            @endforelse
                        </tbody>   
                    </table>
                    {{ $cities->links() }}
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection