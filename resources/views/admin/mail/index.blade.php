@extends('admin.layouts.main')
@section('pageTitle',$pageTitle)
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">{{ $resource }}</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $action }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Sender</th>
                                <th>Description</th>
                                <th>Destination</th>
                                <th>Date</th>
                                <th>File</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mails as $index=>$mail )
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $mail->sender }}</td>
                                    <td>{{ $mail->description }}</td>
                                    <td>{{ $mail->destination }}</td>
                                    <td>{{ $mail->date }}</td>
                                    <td> <a href="{{ asset($mail->file) }}" class="bx bx-download" target="blank"></a></td>
                                    <td>{{ $mail->status == 0 ? "Pending" : "Read" }}</td>
                                </tr>                                
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Sender</th>
                                <th>Description</th>
                                <th>Destination</th>
                                <th>Date</th>
                                <th>File</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
