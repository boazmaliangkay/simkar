@extends('layouts.admin.admin')

@section('content')

    <div class="container-fluid">

        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Jabatan</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Karyawan Tetap</option>
                  <option>Freelance</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Nomer telepon</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">umur</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Pendidikan</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal masuk</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
            

            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

@endsection
