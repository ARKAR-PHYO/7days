@extends('layouts.admin-master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">{{ __('Create Packages') }}</div>
                    <div class="card-body">
                        <form action="{{ route('packagemasters.store') }}" method="POST">
                            @include('admin.packages._form', ['buttonText' => "Save"])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection