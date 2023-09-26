
@extends ('layouts.dashboard')

@section('content')
@section('judul','Table Members')
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
        <div class="">

            <span class="text-danger fw-bold">CATATAN*</span> 
            <ul>
                <li>
                    <small >PREVIEW-IMAGE DI MODAL UPDATE</small>
                </li>
                <li>
                    <small >INPUT ERROR VALIDATION</small>
                </li>
                <li>
                    <small >SWEET ALERT SUCCESS</small>
                </li>
                <li>
                    <small >CONFIRM UPDATE SWEET ALERT</small>
                </li>
                <li>
                    <small >DETAIL PAGE</small>
                </li>
                <li>
                    <small >RULES MESSAGE VALIDATION INPUT</small>
                </li>
                <li>
                    <small >RESPONSIVE MOTTO </small>
                </li>
            </ul>
        </div>
        <div class="card-header">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">Tambah</button>
          
        </div>
        <div class="card-body"> 
          <div class="table-responsive" >
            <table id="table_id" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Posisi</th>
                        <th>Gambar</th>
                        <th>Motto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->Nama }}</td>
                        <td>{{ $item->Email }}</td>
                        <td>{{ $item->posisi }}</td>
                        <td>
                            <img src="{{ $item->image ? asset('storage/' . $item->image) : ('https://cdn-icons-png.flaticon.com/512/149/149071.png') }}" alt="{{ $item->Nama }}" width="50">
                        </td>
                        <td>{{ $item->motto }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}">View</a>
                                <a href="#" class="btn btn-warning mx-1" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}">Edit</a>
                                <form action="{{ route('members.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" data-name="{{ $item->Nama }}" class="btn btn-danger delete-button">Hapus</button>
                                </form>
                            </div>
                        </td>
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
{{-- MODAL TAMBAH --}}
<div class="modal fade" tabindex="-1" role="dialog" id="modalCenter">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control" id="Nama" name="Nama" required>
                </div>

                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" id="Email" name="Email" required>
                </div>

                <div class="form-group">
                    <label for="posisi">Posisi</label>
                    <input type="text" class="form-control" id="posisi" name="posisi" required>
                </div>

                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="image" accept="image/*" onchange="previewImage()" required>
                    <img class="img-preview" src="#" alt="Preview Gambar" style="display: none; max-width: 200px;">
                </div>

                <div class="form-group">
                    <label for="motto">Motto</label>
                    <textarea class="form-control" id="motto" name="motto" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="github">GitHub</label>
                    <input type="text" class="form-control" id="github" name="github" required>
                </div>

                <div class="form-group">
                    <label for="linkedin">LinkedIn</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" required>
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" required>
                </div>
            
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  {{-- MODAL EDIT --}}
  @foreach ($members as $member)
  <div class="modal fade z-99" id="modalUpdate{{ $member->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" id="Nama" name="Nama" value="{{ $member->Nama }}" required>
                    </div>

                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" id="Email" name="Email" value="{{ $member->Email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="posisi">Posisi</label>
                        <input type="text" class="form-control" id="posisi" name="posisi"  value="{{ $member->posisi }}" required>
                    </div>
    
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="image" accept="image/*" onchange="previewImage()">
                        @if($member->image)
                            <img class="img-preview" src="{{ asset('storage/' . $member->image) }}" style="width:200px" alt="Preview Gambar" style="max-wclassth: 100%;">
                        @else
                            <img id="img-preview" src="#" alt="Preview Gambar" style="display: none; max-width: 200px;">
                        @endif
                    
                    </div>
                    
    
                    <div class="form-group">
                        <label for="motto">Motto</label>
                        <textarea class="form-control" id="motto" name="motto" rows="3" required> {{ $member->motto }}"</textarea>
                    </div>
    
                    <div class="form-group">
                        <label for="github">GitHub</label>
                        <input type="text" class="form-control" id="github"  value="{{ $member->github }}" name="github" required>
                    </div>
    
                    <div class="form-group">
                        <label for="linkedin">LinkedIn</label>
                        <input type="text" class="form-control" id="linkedin"  value="{{ $member->linkedin }}" name="linkedin" required>
                    </div>
    
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control" id="instagram"  value="{{ $member->instagram }}" name="instagram" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
  @endforeach
  
@endsection
