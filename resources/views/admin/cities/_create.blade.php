@extends('layouts.admin-master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">{{ __('Create City') }}</div>
                    <div class="card-body">
                        <form action="{{ route('citymasters.store') }}" method="POST">
                            @include('admin.cities._form', ['buttonText' => "Save"])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection