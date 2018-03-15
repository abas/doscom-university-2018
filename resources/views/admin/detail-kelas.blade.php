@extends('layouts.app') @section('content')
<div class="container" style="margin-bottom:100px">
    <div class="row">
        <div class="card-header">
            <div class="card-title">
                <h1>
                <a class="btn btn-sm btn-raised btn-success" href="{{route('dashboard')}}"><<</a>
                Peserta</h1>
            </div>
        </div>
        <div class="card-body text-center">
            <div class="row">
                @foreach($peserta as $peserta)
                @if($peserta->status_pembayaran == 'lunas')
                <div class="col-md-3">
                    <div class=" card panel-default">
                        <div class="panel-body">
                            <h3 style="text-transform:capitalize">
                                <b>
                                    {{$peserta->nama}}
                                </b>
                            </h3>
                        </div>
                        <div class="panel-heading" class="bg-info">
                            <b>

                            </b>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection