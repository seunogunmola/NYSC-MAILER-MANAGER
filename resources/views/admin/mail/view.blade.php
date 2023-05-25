@extends('admin.layouts.main')
@section('pageTitle',$pageTitle)
@section('content')
<div class="page-content">
    <!--start email wrapper-->
    <div class="email-wrapper" style="min-height:1200px!important;">
        <div class="">
            <div class="email-read-box p-3">
                <h4>Subject : {{ $mail->subject}}</h4>
                <hr>
                <table class="table table-striped">
                    <tr>
                        <td>Sender</td>
                        <td>{{ $mail->sender }}</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>{{ $mail->description }}</td>
                    </tr>                    
                    <tr>
                        <td>Category</td>
                        <td>{{ $mail->category->category_name }}</td>
                    </tr>
                    <tr>
                        <td>Destination</td>
                        <td>{{ $mail->destination->destination_name }}</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>{{ $mail->date }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                                @switch($mail->status)
                                    @case("0")
                                    <span class="badge bg-danger"> Pending </span>
                                    @break
                                    @case("1")
                                    <span class="badge bg-success"> Away </span>
                                    @break

                                    @default
                                @endswitch
                        </td>
                    </tr>
                </table>
                <br>
                <div class="">
                    <iframe style="width:100%;height:1200px;" src="{{ asset($mail->file) }}" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection