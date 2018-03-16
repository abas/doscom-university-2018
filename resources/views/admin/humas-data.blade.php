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
                            <span class="table-title">Total Semua Peserta : {{$peserta->count()}}
                                <b></b>
                            </span>
                        </div>
                        <table id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Hp</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Hp</th>
                                    <th>Email</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($peserta as $peserta)
                                <tr style="text-align:left">
                                    <td>{{$peserta->nama}}</td>
                                    <td>{{$peserta->nohp}}</td>
                                    <td>{{$peserta->email}}</td>
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