@extends('admin.app')
@section('css')
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
    <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"></div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">

                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <h1 class="text-center">Report</h1>
        @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }} </div>

        @endif
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table table-bordered yajra-datatable">
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
                    </tbody>

                </table>

            </div>

        </div>

    </main>
    <!--end page main-->
@endsection
@section('js')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('ajax') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },

                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'transaction_id',
                        name: 'transaction_id'
                    },
                    {
                        data: 'packagename',
                        name: 'packagename'
                    },
                    {
                        data: 'packvalue',
                        name: 'packvalue'
                    },
                    {
                        data: 'amount',
                        name: 'amount'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    },


                    // {
                    //     data: 'created_at',
                    //     name: 'created_at'
                    // },
                    // {
                    //     data: 'action',
                    //     name: 'action',
                    //     orderable: false
                    // },
                ],
                order: [
                    [0, 'desc']
                ]
            });

        });
    </script>
@endsection
