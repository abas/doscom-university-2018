@extends('app-du') @section('content')


<div class="head">
    <i class=" glyphicon glyphicon-list-alt"></i>
    <br> Informasi Anda
</div>

<div class="" style="padding: 50px;">

    <div class="form-horizontal">

        <div class="form-group">
            <label class="bmd-label-floating">Nama</label>
            <p class="form-control">{{$peserta->nama}}</p>
        </div>
        <div class="form-group">
            <label class="bmd-label-floating">Email</label>
            <p class="form-control">{{$peserta->email}}</p>
        </div>
        <div class="form-group">
            <label class="bmd-label-floating">Nomor Hp</label>
            <p class="form-control">{{$peserta->nohp}}</p>
        </div>
        <div class="form-group">
            <label class="bmd-label-floating">Status Peserta</label>
            <p class="form-control">{{$peserta->status_peserta}}</p>
        </div>
        <div class="form-group">
            <label class="bmd-label-floating">Alasan Mengikuti Workshop</label>
            <p class="form-control">{{$peserta->alasan}}</p>
        </div>
        <div class="form-group">
            <label class="bmd-label-floating">Total Pembayaran</label>
            <p class="form-control">{{$peserta->total_pembayaran}}</p>
        </div>
        <div class="form-group">
            <label class="bmd-label-floating">Terdaftar Pada</label>
            <p class="form-control">{{$peserta->created_at}}</p>
        </div>

        <div class="form-group">
            <label class="bmd-label-floating">Kelas yang di ikuti</label>
            @foreach($kelas as $key => $val) @if($val == 'true')
            <button class="btn btn-sm btn-success">
                <b>{{$key}}</b>
            </button>
            @endif @endforeach

        </div>

        <span class="bmd-form-group">
            <!-- needed to match padding for floating labels -->
            <a href="{{route('get-informasi-peserta')}}" class="btn btn-info btn-raised">Back</a>
            <a href="{{route('getDaftar')}}" class="btn btn-warning btn-raised">Daftar</a>
        </span>
    </div>

</div>
@endsection