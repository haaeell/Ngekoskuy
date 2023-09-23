
@extends ('layouts.dashboard')

@section('content')
@section('judul','Tabel Users')
@section('title','Dashboard Admin')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">Tambah</button>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Gambar</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
              @foreach ($users as $item)
                  
              <tr>
                <td >{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td >{{$item->email}}</td>
                <td>
                  <img alt="image" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                </td>
                <td><div class="badge badge-success">{{$item->role->name}}</div></td>
                <td>
                    <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalCenter">Edit</a>
                    <button href="#" class="btn btn-danger"   data-bs-toggle="modal" data-bs-target="#modalCenter">Delete</button>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
{{-- MODAL TAMBAH --}}
<div class="modal fade" tabindex="-1" role="dialog" id="modalCenter">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
