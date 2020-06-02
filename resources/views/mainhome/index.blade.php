@extends('layouts.master')
@section('content')
<section class="hero version_1">
    <div class="wrapper">
        <div class="container">
            <h1>{{ __("Golden Land Myanmar") }}</h1>
        </div>
    </div>
</section>

@include('mainhome._why')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <card3d />
            <small>require card-3d component</small>
        </div>
    </div>
    <hr class="large">
</div>

@include('mainhome._awards')
@include('mainhome._social')

@endsection
