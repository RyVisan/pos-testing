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
    <section class="content" style="margin-top: 10px;">
            <table id="table_id" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Row 1 Data 1</td>
                        <td>Row 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>Row 2 Data 1</td>
                        <td>Row 2 Data 2</td>
                    </tr>
                    <tr>
                        <td>Row 1 Data 1</td>
                        <td>Row 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>Row 2 Data 1</td>
                        <td>Row 2 Data 2</td>
                    </tr>
                    <tr>
                        <td>Row 1 Data 1</td>
                        <td>Row 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>Row 2 Data 1</td>
                        <td>Row 2 Data 2</td>
                    </tr>
                </tbody>
            </table>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#table_id').DataTable();
        });
    </script>
@endsection