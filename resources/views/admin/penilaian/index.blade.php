
@extends ('layouts.dashboard')

@section('content')
@section('judul','Table penilaian')
@section('title','Dashboard Admin')
<div class="row">
    <div class="col-12">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    
      <div class="card p-4">
        <div class="card-header">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">Tambah</button>
          
        </div>
        <div class="card-body"> 
          <div class="table-responsive" >
            <table id="table_id" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kosan</th>
                        <th>Kriteria</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penilaianKosan as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->kosan->nama }}</td>
                        <td>{{ $item->kriteria->nama }}</td>
                        <td>{{ $item->nilai }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection
