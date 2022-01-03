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
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h5> <i class="icon fa fa-check"></i> {{ Session::get('success') }}</h5>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                @foreach ($errors->all() as $error)
                    <h5> <i class="icon fa fa-warning"></i> {{ $error }}</h4>
                @endforeach
            </div>
        @endif
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">{{ __('breadcram.create') }}</h3>
                        </div>
                        <div class="box-body row" style="padding: 10px;">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('form.name') }} <span style="font-size: 10px; color: red;">*</span></label>
                                <input name="name" value="{{ old('name') }}" required autofocus autocomplete="off" class="form-control">
                                @error('name')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('form.address') }}</label>
                                <input name="address" value="{{ old('address') }}" autocomplete="off" class="form-control">
                                @error('address')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('form.phone') }}</label>
                                <input name="phone" value="{{ old('phone') }}" autocomplete="off" class="form-control">
                                @error('phone')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="margin-bottom: 10px;">{{ __('form.status') }}</label><br>
                                <input type="radio" name="status" value="1" checked>
                                <label for="exampleInputEmail1">{{ __('form.active') }}</label>
                                &emsp;&emsp;<input type="radio" name="status" value="0">
                                <label for="exampleInputEmail1">{{ __('form.inactive') }}</label>
                            </div>                            
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="exampleInputFile">{{ __('form.image') }}</label>
                                <input type="file" name="image" id="exampleInputFile">
                                @error('image')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding: 0px 10px;">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ __('form.description') }}</label>
                                <textarea name="description" cols="30" rows="2" class="form-control">{{ old('description') }}</textarea>
                                @error('description')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="radio" value="save_new" name="save_opt" checked> <label for="exampleInputEmail1">{{ __('form.save&create_new') }}</label>
                                &emsp;&emsp;<input type="radio" value="save_edit" name="save_opt"> <label for="exampleInputEmail1">{{ __('form.save&edit') }}</label>
                                &emsp;&emsp;<input type="radio" value="save_list" name="save_opt"> <label for="exampleInputEmail1">{{ __('form.save&list') }}</label>
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> {{ __('button.save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection