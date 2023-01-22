@extends('admin.layouts.main')
@section('pageTitle',$pageTitle)
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">{{ $pageTitle }}</div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">{{ $pageTitle }}</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.mail.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Sender</label>
                                <input name="sender" class="form-control" type="text" required>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Description</label>
                                <textarea name="description" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Destination</label>
                                <input name="destination" class="form-control" type="text" required>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Date Received</label>
                                <input name="date" class="form-control" type="date" required>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">File</label>
                                <input name="file" class="form-control" type="file" id="formFile" required>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit"> Save <i class="bx bx-save"></i> </button>
                                <button class="btn btn-danger" type="reset">Reset</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
@endsection
