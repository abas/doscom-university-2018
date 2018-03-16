@extends('layouts.app') @section('content')
<div class="container" style="margin-bottom:100px">
    <div class="row">
        <div class="card-header">
            <div class="card-title">
                <h1>
                    <a class="btn btn-sm btn-raised btn-success" href="{{route('dashboard')}}">
                        <<</a>
                            Peserta</h1>
            </div>
        </div>
        <div class="card-body text-center">
            <div class="row">

                <div id="admin" class="col-md-12">
                    <div class="card material-table">
                        <div class="table-header">
                            <span class="table-title">Total Semua Peserta :
                                <b></b>
                            </span>
                        </div>
                        <table id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Nomor Hp</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Nomor Hp</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($peserta as $peserta)
                                <tr style="text-align:left">
                                    <td>{{$peserta->nama}}</td>
                                    <td>{{$peserta->email}}</td>
                                    <td>{{$peserta->nohp}}</td>
                                    <td style="width:3%">
                                        <a href="{{route('delete-peserta',$peserta->id)}}" class="btn btn-sm btn-raised btn-danger">
                                            <b>kick</b>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection