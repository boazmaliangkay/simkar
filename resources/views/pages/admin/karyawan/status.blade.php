@extends('layouts.admin.admin')

@section('content')

    <div class="container-fluid">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Data
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Status</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Status</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Add Data</button>
                </div>
              </div>
            </div>
          </div>

        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Status</th>
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