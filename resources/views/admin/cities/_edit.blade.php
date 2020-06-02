@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Edit City
                    </div>
                    <div class="card-body">
                        <form action="{{ route('citymasters.update', $citymaster->id) }}" method="POST">)
                            @method('PUT')
                            @include('everlists._form', ['buttonText' => "Update"])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection