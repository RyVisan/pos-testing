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
        <div class="box" style="padding: 5px;">
            <table id="table_id" class="table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" width="5%">{{ __('table.no') }}</th>
                        <th class="text-center">{{ __('table.name') }}</th>
                        <th class="text-center" width="15%">{{ __('table.phone') }}</th>
                        <th class="text-center" width="10%">{{ __('table.status') }}</th>
                        <th class="text-center" width="15%">{{ __('table.action') }}</th>
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
                                    <span class="badge bg-success">{{ __('table.active') }}</span>
                                @else
                                    <span class="badge bg-danger">{{ __('table.inactive') }}</span>
                                @endif
                            <td class="text-center">
                                <a href="#">Show</a> |
                                <a href="#">Edit</a> |
                                <a href="#">Delete</a>
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