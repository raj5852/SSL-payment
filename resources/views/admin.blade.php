@extends('admin.app')
@section('content')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"></div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">

                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <h1 class="text-center">Report</h1>
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Transaction ID</th>
                            <th>Package Name</th>
                            <th>Package Value</th>
                            <th>Customer Paid</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td> {{++$i}} </td>
                            <td> {{ $data->name }} </td>
                            <td> {{ $data->email }} </td>
                            <td> {{ $data->phone }} </td>
                            <td> {{ $data->address }} </td>
                            <td> {{ $data->status }} </td>
                            <td> {{ $data->transaction_id }} </td>
                            <td> {{ $data->packagename }} </td>
                            <td> {{ $data->packvalue }} </td>
                            <td> {{ $data->amount }} </td>
                            <td> <button class="btn btn-success btn-sm">Edit</button> </td>
                        </tr>

                        @endforeach
                    </tbody>

                </table>

            </div>

        </div>

    </main>
    <!--end page main-->
@endsection
