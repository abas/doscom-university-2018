@extends('app-du') @section('content')


<div class="head">
    <i class=" glyphicon glyphicon-list-alt"></i>
    <br> Cari Informasi Anda
</div>

<div class="" style="padding: 50px;">

    @if(session('success'))
    <div class="alert alert-success" role="alert" id="alert-ragister">
        {{session('success')}}
        <p align="right" onclick="hide()" style="cursor:pointer">
            <b>X</b>
        </p>

    </div>
    @elseif(session('failed'))
    <div class="alert alert-danger" role="alert" id="alert-ragister">
        {{session('failed')}}
        <p align="right" onclick="hide()" style="cursor:pointer">
            <b>X</b>
        </p>

    </div>
    @elseif(session('iseng'))
    <div class="alert alert-warning" role="alert" id="alert-ragister">
        {{session('iseng')}}
        <p align="right" onclick="hide()" style="cursor:pointer">
            <b>X</b>
        </p>

    </div>
    @elseif(session('info'))
    <div class="alert alert-info" role="alert" id="alert-ragister">
        {{session('info')}}
        <p align="right" onclick="hide()" style="cursor:pointer">
            <b>X</b>
        </p>

    </div>
    @endif

    <script>
        function hide() {
            var divId = document.getElementById('alert-ragister');
            divId.style.display = "none";
        }
    </script>
    <br>
    <br>
    <form class="form-horizontal" action="{{route('post-informasi-peserta')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="email" class="bmd-label-floating">Email</label>
            <input name="email" type="email" class="form-control" required="required" id="email">
        </div>


        <span class="bmd-form-group">
            <!-- needed to match padding for floating labels -->
            <button type="submit" class="btn btn-info btn-raised">Cari</button>
            <a href="{{route('getDaftar')}}" class="btn btn-success btn-raised">Daftar</a>
        </span>
    </form>

</div>
@endsection