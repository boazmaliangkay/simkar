@extends('layouts.admin.admin')

@section('content')

    <div class="container-fluid">
        <button type="button" class="btn btn-success">Add Data</button>

        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Pendidikan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td><button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                </td>
              
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>jo</td>
                <td><button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                </td>
               
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td><button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                </td>
      
              </tr>
            </tbody>
          </table>

    </div>

@endsection