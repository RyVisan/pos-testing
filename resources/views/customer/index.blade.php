@extends('layouts.master')
@section('title-project', 'Customer')
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
    <section class="content" style="margin-top: 10px;">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h5> <i class="icon fa fa-check"></i> {{ Session::get('success') }}</h5>
            </div>
        @endif
        <div class="box box-primary" style="padding: 5px;">
            <table id="table_id" class="table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" width="5%">{{ __('table.no') }}</th>
                        <th class="text-center">{{ __('table.name') }}</th>
                        <th class="text-center" width="13%">{{ __('table.phone') }}</th>
                        <th class="text-center" width="10%">{{ __('table.status') }}</th>
                        <th class="text-center" width="10%">{{ __('table.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $key => $customer)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td>{{ $customer->name }}</td>
                            <td class="text-center">{{ $customer->phone }}</td>
                            <td class="text-center">
                                @if ($customer->status==1)
                                    <span style="color: green;"><b>{{ __('table.active') }}</b></span>
                                @else
                                    <span style="color: red;"><b>{{ __('table.inactive') }}</b></span>
                                @endif
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="far fa-eye"></i> <b>Show</b></a></li>
                                      <li><a href="#"><i class="far fa-edit"></i> <b>Edit</b></a></li>
                                      <li><a href="{{ route('customer.destroy', $customer) }}"><i class="far fa-trash-alt"></i> <b>Delete</b></a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</section>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#table_id').DataTable();
        });
    </script>
@endsection