@extends('layouts.admin.admin')

@section('content')

    <div class="container-fluid">
        <form metho="post" action="{{route('karyawan-post')}}">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <select class="form-control" name="jabatan" id="jabatan">
                    <option value="{{null}}"> - </option>
                    @foreach($jabatan as $jbt)
                        <option value="{{$jbt->nama_jabatan}}">{{$jbt->nama_jabatan}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jabatan">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="jabatan">Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control"name="status"  id="exampleFormControlSelect1">
                    <option value="{{null}}"> - </option>
                    @foreach($status as $sts)
                        <option value="{{$sts->nama_status}}">{{$sts->nama_status}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option value="laki-laki">Laki-laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Nomer telepon</label>
              <input type="text" class="form-control" name="nomor_telepon" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">umur</label>
                <input type="text" class="form-control"  name="umur" id="exampleInputEmail1" aria-describedby="emailHelp">

              </div>
            <div class="form-group">
                <label for="Pendidikan-terkakhir">Pendidikan Terkakhir</label>
                <select class="form-control"name="pendidikan">
                    <option value="{{null}}"> - </option>
                    @foreach($pendidikan as $pnd)
                        <option value="{{$pnd->pendidikan_terakhir}}">{{$pnd->pendidikan_terakhir}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahit\r</label>
                <input type="date" class="form-control" name="tgl_lahir">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal masuk</label>
                <input type="date" class="form-control" name="tgl_masuk">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
