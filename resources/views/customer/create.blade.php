@extends('layouts.master')
@section('customer', 'active')
@section('content')
    <section class="content-header">
        <h1 style="margin-top: 15px;">
        <a href="{{ route('customer.index') }}" style="color: black;">{{ __('breadcram.customer') }}</a> <span style="font-size: 18px;">| {{ __('breadcram.create') }}</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="{{ route('customer.index') }}"><button class="btn btn-danger"><i class="fas fa-arrow-left"></i> {{ __('button.back') }}</button></a></li>
        </ol>
    </section>
    <section class="content" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-12">
                <form action="#" method="POST">
                    @csrf
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ __('breadcram.create') }}</h3>
                        </div>
                        <div class="box-body row" style="padding: 10px;">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('form.name') }} <span class="text-danger" style="font-size: 10px;">*</span></label>
                                <input class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('form.address') }}</label>
                                <input class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">{{ __('form.image') }}</label>
                                <input type="file" id="exampleInputFile">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('form.phone') }}</label>
                                <input class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('form.description') }}</label>
                                <input class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-4">3</div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">{{ __('button.save') }}</button>
                      </div>
                </form>
            </div>
        </div>
    </section>
@endsection