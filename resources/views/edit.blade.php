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
        <h2 class="text-center col-md-7">Update Data</h2>
        <div class="card card-body col-md-7">

            <form action="{{ route('update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $find->id }}">
                <label for=""><b>Name</b> </label>
                <input required type="text" name="name" class="form-control" value="{{ $find->name }}">
                <label for=""><b>Email</b> </label>
                <input required type="email" name="email" class="form-control" value="{{ $find->email }}">
                <label for=""><b>Phone</b> </label>
                <input required type="text" name="phone" class="form-control" value="{{ $find->phone }}">
                <label for=""><b>Address</b> </label>
                <input required type="text" name="address" class="form-control" value="{{ $find->address }}">
                <label for=""><b>Status</b> </label>
                <input required type="text" name="status" class="form-control" value="{{ $find->status }}">
                <label for=""><b>Transaction_id</b> </label>
                <input required type="text" name="transaction_id" class="form-control" value="{{ $find->transaction_id }}">
                <label for=""><b>Packagename</b> </label>
                <input required type="text" name="packagename" class="form-control" value="{{ $find->packagename }}">
                <label for=""><b>Packvalue</b> </label>
                <input required type="text" name="packvalue" class="form-control" value="{{ $find->packvalue }}">
                <label for=""><b>Customer Paid</b> </label>
                <input required type="text" name="amount" class="form-control" value="{{ $find->amount }}">
                <br>
                <button class="form-control btn btn-primary" type="submit" value="Update">Update Now</button>
            </form>

        </div>

    </main>
    <!--end page main-->
@endsection
