@extends('layouts.admin.admin')

@section('content')

    <div class="container-fluid">
        <form metho="post" action="{{route('karyawan-post')}}">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input value="aris" type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Jabatan</label>
              <input value="web dev" type="text" class="form-control" name="jabatan" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control"name="status"  id="exampleFormControlSelect1">
                  <option value="Karyawan Tetap">Karyawan Tetap</option>s
                  <option value="Freelance">Freelance</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select class="form-control" name="jenis-kelamin" id="exampleFormControlSelect1">
                  <option value="laki-laki">Laki-laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Nomer telepon</label>
              <input value="0899999999" type="text" class="form-control" name="nomor-telepon" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">umur</label>
                <input value="10" type="text" class="form-control"  name="umur" id="exampleInputEmail1" aria-describedby="emailHelp">

              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Pendidikan</label>
                <input value="smk" type="text" class="form-control" id="exampleInputEmail1">

              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal masuk</label>
                <input type="date" class="form-control" id="exampleInputEmail1">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
