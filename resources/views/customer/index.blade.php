@extends('layouts.master')
@section('customer', 'active')
@section('content')
    <section class="content-header">
        <h1 style="margin-top: 15px;">
        <a href="{{ route('customer.index') }}" style="color: black;">{{ __('breadcram.customer') }}</a> <span style="font-size: 18px;">| {{ __('breadcram.list') }}</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="{{ route('customer.create') }}"><button class="btn btn-primary"><i class="fas fa-plus"></i> {{ __('button.create') }}</button></a></li>
        </ol>
    </section>
    
@endsection