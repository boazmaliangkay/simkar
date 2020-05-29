@extends('layouts.admin.admin')

@section('content')

    <div class="container-fluid">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Tambah Jabatan</button>
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="{{route('jabatan-post')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="jabatan" class="col-form-label">Jabatan:</label>
                                <input type="text" name="jabatan" class="form-control" id="jabatan">
                            </div>
                            <div class="tombol" style="float: right">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="{{route('jabatan-post')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="jabatan" class="col-form-label">Jabatan:</label>
                                <input type="text" name="jabatan" class="form-control" id="jabatan">
                            </div>
                            <div class="tombol" style="float: right">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped table-dark mt-3 text-center">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @php
            $i = 1;
            @endphp
            @foreach($jabatan as $jabat)
              <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$jabat->nama_jabatan}}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$jabat->id}}" data-whatever="@mdo">Edit</button>
                    <div class="modal fade" id="exampleModal{{$jabat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$jabat->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form action="{{route('jabatan-edit')}}/{{$jabat->id}}">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="jabatan" class="col-form-label">Jabatan:</label>
                                            <input type="text" name="jabatan" value="{{$jabat->nama_jabatan}}" class="form-control" id="jabatan">
                                        </div>
                                        <div class="tombol" style="float: right">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('jabatan-delete')}}/{{$jabat->id}}">
                        <button type="button" class="btn btn-danger" data-toggle="modal"  data-whatever="@mdo">Hapus</button>
                    </a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>

@endsection
