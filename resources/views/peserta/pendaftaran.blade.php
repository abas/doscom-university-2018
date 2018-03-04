@extends('app-du') @section('content')


<div class="head">
    <i class=" glyphicon glyphicon-list-alt"></i>
    <br> Doscom University
</div>

<div class="" style="padding: 50px;">

    @if(session('success'))
    <div class="alert alert-success" role="alert" id="alert-ragister">
        {{session('success')}} <p align="right" onclick="hide()" style="cursor:pointer"><b>X</b></p>
        
    </div>
    @elseif(session('failed'))
    <div class="alert alert-danger" role="alert" id="alert-ragister">
        {{session('failed')}}  <p align="right" onclick="hide()" style="cursor:pointer"><b>X</b></p>
        
    </div>
    @elseif(session('iseng'))
    <div class="alert alert-warning" role="alert" id="alert-ragister">
        {{session('iseng')}}  <p align="right" onclick="hide()" style="cursor:pointer"><b>X</b></p>
        
    </div>
    @endif

    <script>
        function hide() {
            var divId = document.getElementById('alert-ragister');
            divId.style.display = "none";
        }
    </script>
    <br><br>
    <form class="form-horizontal" action="{{route('postDaftar')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="nama" class="bmd-label-floating">Nama</label>
            <input name="nama" type="text" class="form-control" required="required" id="nama">
        </div>

        <div class="form-group">
            <label for="email" class="bmd-label-floating">Email</label>
            <input name="email" type="email" class="form-control" required="required" id="email">
        </div>

        <div class="form-group">
            <label for="nohp" class="bmd-label-floating">Nomor Handphone</label>
            <input name="nohp" type="text" class="form-control" required="required" id="nohp">
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" name="status_peserta" required="required">
                <option value="umum">Umum</option>
                <option value="pelajar">Pelajar</option>
                <option value="mahasiswa">Mahasiswa</option>
            </select>
        </div>


        <div class="form-group">
            <label class="bmd-label-floating">
                <b>Join Kelas</b>
            </label>
            <br>

            <div class="checkbox 
            @if($kelas[0]->status=='penuh')
                disabled
            @endif">
                <label class="bmd-label-floating">
                    <input name="web" type="checkbox" value="join" 
                    @if($kelas[0]->status=='penuh')
                        disabled title="kelas penuh"
                    @endif> Web Programming
                </label>
            </div>

            <div class="checkbox 
            @if($kelas[1]->status=='penuh')
                disabled
            @endif">
                <label class="bmd-label-floating">
                    <input name="femdev" type="checkbox" value="join"
                    @if($kelas[1]->status=='penuh')
                        disabled title="kelas penuh"
                    @endif> Female Dev
                </label>
            </div>

            <div class="checkbox 
            @if($kelas[2]->status=='penuh')
                disabled
            @endif">
                <label class="bmd-label-floating">
                    <input name="mobile" type="checkbox" value="join"
                    @if($kelas[2]->status=='penuh')
                        disabled title="kelas penuh"
                    @endif> Mobile Programming
                </label>
            </div>

            <div class="checkbox 
            @if($kelas[3]->status=='penuh')
                disabled
            @endif">
                <label class="bmd-label-floating">
                    <input name="linux" type="checkbox" value="join"
                    @if($kelas[3]->status=='penuh')
                        disabled title="kelas penuh"
                    @endif> Linux Fundamental
                </label>
            </div>

            <div class="checkbox 
            @if($kelas[4]->status=='penuh')
                disabled
            @endif">
                <label class="bmd-label-floating">
                    <input name="net" type="checkbox" value="join"
                    @if($kelas[4]->status=='penuh')
                        disabled title="kelas penuh"
                    @endif> Jaringan Komputer
                </label>
            </div>

            <div class="checkbox 
            @if($kelas[5]->status=='penuh')
                disabled
            @endif">
                <label class="bmd-label-floating">
                    <input name="inkscape" type="checkbox" value="join"
                    @if($kelas[5]->status=='penuh')
                        disabled title="kelas penuh"
                    @endif> Inkscape
                </label>
            </div>

            <div class="checkbox 
            @if($kelas[6]->status=='penuh')
                disabled
            @endif">
                <label class="bmd-label-floating">
                    <input name="godot" type="checkbox" value="join"
                    @if($kelas[6]->status=='penuh')
                        disabled title="kelas penuh"
                    @endif> Godot Game Engine
                </label>
            </div>
            <br>
            <div class="panel-footer">
                <i>Note:</i>
                <br> - boleh join lebih dari 1 kelas
                <br> - <b>Female Dev</b> hanya untuk peserta perempuan
                <br> - kelas yang <b>tidak bisa dipilih</b> berarti kelas tersebut telah <b>penuh</b>
            </div>
        </div>

        <div class="form-group">
            <label for="alasan" class="bmd-label-floating">Alasan Mengapa Mengikuti Workshop</label>
            <input name="alasan" type="text" class="form-control" id="alasan" required="required">
        </div>

        <span class="bmd-form-group">
            <!-- needed to match padding for floating labels -->
            <button type="submit" class="btn btn-info btn-raised">Submit</button>
            <a href="{{url('/')}}" class="btn btn-success btn-raised">Home</a>
        </span>
    </form>

</div>
@endsection