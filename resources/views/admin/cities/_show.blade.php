@extends('layouts.admin-master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    {{ __('City') }}
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">City Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $cities->id }}</th>
                                <td>{{ $cities->city_name }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p><small>Created date:: <strong class="text-muted">{{ $cities->created_date }}</strong></small></p>
                        <p><small>Updated date:: <strong class="text-muted">{{ $cities->updated_date }}</strong></small></p>
                        <p><small>By:: <a href="{{ $cities->user->url }}">{{ $cities->user->name }}</a></small></p>
                    </div>
                    <a href="{{ route('citymasters.index') }}" class="btn btn-danger ml-3">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection