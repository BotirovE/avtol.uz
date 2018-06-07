@extends('layouts.admin-app')
@section('content')
    <!-- content -->
    <div class="container">
        <div class="tab-content">
            @include('admin-partials.all')
            @include('admin-partials.products')    
            @include('admin-partials.brands')
        </div>
    </div>
@endsection