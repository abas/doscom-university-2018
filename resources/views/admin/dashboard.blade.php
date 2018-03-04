@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('msg'))
            <div class="alert alert-warning" role="alert" id="alert-ragister">
                <h4>
                    {{session('msg')}}
                </h4>
                <p align="right" onclick="hide()" style="cursor:pointer">
                    <b>X</b>
                </p>
            </div>
            @endif
        </div>
        <script>
            function hide() {
                var divId = document.getElementById('alert-ragister');
                divId.style.display = "none";
            }
        </script>
        @foreach($kelas as $kelas)
        <div class="col-md-3">
            <div class="panel card panel-default">
                <div class="panel-heading" class="bg-info">
                    <b>
                        <h3 style="text-transform:capitalize">{{$kelas->nama}}</h3>
                    </b>
                </div>
                <div class="panel-body">
                    Status :
                    <b>@if($kelas->jumlah != 0 and $kelas->status == 'penuh') Ditutup @else {{$kelas->status}} @endif
                    </b>
                    <br> tersedia
                    <b>{{$kelas->jumlah}} peserta</b>
                </div>
                <div class="panel-footer" style="text-align:right">
                    @if($kelas->status == 'sisa')
                    <a href="{{route('tutup-kelas',$kelas->nama)}}" class="btn btn-sm btn-raised btn-danger">Tutup</a>
                    @elseif($kelas->status == 'penuh')
                    <a href="{{route('buka-kelas',$kelas->nama)}}" class="btn btn-sm btn-raised btn-info">Buka</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Peserta</h3>
                </div>
                <div class="panel-body">

                    <table id="table-participant" class="data-table table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>NoHp</th>
                                <th>Status</th>
                                <th>Transaksi</th>
                                <th>Status Pembayaran</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>NoHp</th>
                                <th>Status</th>
                                <th>Transaksi</th>
                                <th>Status Pembayaran</th>
                                <th>Kelas</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($peserta as $peserta)
                            <tr id="@php $nametag=strtolower($peserta->nama); @endphp{{$nametag}}">
                                <td>{{$peserta->nama}}</td>
                                <td>{{$peserta->email}}</td>
                                <td>{{$peserta->nohp}}</td>
                                <td>{{$peserta->status_peserta}}</td>
                                <td>
                                    <b>[ tot ]</b> Rp {{$peserta->total_pembayaran}}
                                    <br>
                                    <b>[ kekurangan ]</b> Rp {{$peserta->kekurangan_pembayaran}}
                                </td>
                                <td>

                                    @if($peserta->status_pembayaran != 'lunas')
                                    <a href="{{route('pelunasan',$peserta->id)}}" class="btn btn-sm btn-warning">
                                        {{$peserta->status_pembayaran}}
                                    </a>
                                    @else
                                    <p href="" class="btn btn-sm btn-success">
                                        {{$peserta->status_pembayaran}}
                                    </p>
                                    @endif
                                </td>
                                <td>
                                    @foreach(\App\Peserta::getKelas($peserta->id) as $kelas) @if($peserta->status_pembayaran != 'lunas')
                                    <p class="btn btn-sm btn-raised btn-danger">
                                        {{$kelas}}
                                    </p>
                                    @else
                                    <p class="btn btn-raised btn-sm btn-success">
                                        {{$kelas}}
                                    </p>
                                    @endif @endforeach
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
@endsection