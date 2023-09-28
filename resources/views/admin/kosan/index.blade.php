
@extends ('layouts.dashboard')

@section('content')
@section('judul','Table kosan')
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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
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
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Fasilitas</th>
                        <th>Luas Kamar</th>
                        <th>Jarak Makan</th>
                        <th>Keamanan</th>
                        <th>Kategori</th>
                        <th>Sisa Kamar</th>
                        <th>Peraturan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kosans as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ Str::limit($item->alamat, 20) }}</td>

                        <td>
                            <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : ('https://cdn-icons-png.flaticon.com/512/149/149071.png') }}" alt="{{ $item->Nama }}" width="50">
                        </td>
                        <td>Rp {{ number_format($item->harga, 2) }}</td>
                        <td>{{ $item->fasilitas }}</td>
                        <td>{{ $item->luas_kamar }} m²</td>
                        <td>{{ $item->jarak_makan }} km</td>
                        <td>{{ $item->keamanan }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->sisa_kamar }}</td>
                        <td>{{ $item->peraturan }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-warning mx-1" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}">Edit</a>
                                <form action="{{ route('kosan.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" data-name="{{ $item->nama }}" class="btn btn-danger delete-button">Hapus</button>
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
            <form action="{{ route('kosan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama Kosan</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control"  name="harga" oninput="validateNumberInput(this)" required> 
                </div>
                <div class="form-group">
                    <label for="fasilitas">Fasilitas</label>
                    <textarea class="form-control" id="fasilitas" name="fasilitas" required></textarea>
                </div>
                <div class="form-group">
                    <label for="luas_kamar">Luas Kamar (m²)</label>
                    <input type="number" step="0.01" class="form-control" id="luas_kamar" name="luas_kamar" oninput="validateNumberInput(this)" required>
                </div>
                <div class="form-group">
                    <label for="jarak_makan">Jarak Makan (km)</label>
                    <input type="number" step="0.01" class="form-control" id="jarak_makan" name="jarak_makan" oninput="validateNumberInput(this)" required>
                </div>
                <div class="form-group">
                    <label for="keamanan">Keamanan</label>
                    <textarea class="form-control" id="keamanan" name="keamanan" required></textarea>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori" required>
                        <option value="campur">Campur</option>
                        <option value="cowo">Cowok</option>
                        <option value="cewe">Cewek</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sisa_kamar">Sisa Kamar</label>
                    <input type="number" class="form-control" id="sisa_kamar" name="sisa_kamar" oninput="validateNumberInput(this)"required>
                </div>
                <div class="form-group">
                    <label for="peraturan">Peraturan</label>
                    <textarea class="form-control" id="peraturan" name="peraturan" required></textarea>
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
@foreach ($kosans as $kosan)
  <div class="modal fade z-99" id="modalUpdate{{ $kosan->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('kosan.update', $kosan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nama">Nama Kosan</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $kosan->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $kosan->alamat }}" required>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ $kosan->harga }}"oninput="validateNumberInput(this)" required>
                    </div>
                    <div class="form-group">
                        <label for="fasilitas">Fasilitas</label>
                        <textarea class="form-control" id="fasilitas" name="fasilitas" required>{{ $kosan->fasilitas }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="luas_kamar">Luas Kamar (m²)</label>
                        <input type="number" step="0.01" class="form-control" id="luas_kamar" name="luas_kamar" value="{{ $kosan->luas_kamar }}"oninput="validateNumberInput(this)" required>
                    </div>
                    <div class="form-group">
                        <label for="jarak_makan">Jarak Makan (km)</label>
                        <input type="number" step="0.01" class="form-control" id="jarak_makan" name="jarak_makan" value="{{ $kosan->jarak_makan }}"oninput="validateNumberInput(this)" required>
                    </div>
                    <div class="form-group">
                        <label for="keamanan">Keamanan</label>
                        <textarea class="form-control" id="keamanan" name="keamanan" required>{{ $kosan->keamanan }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="kategori" name="kategori" required>
                            <option value="campur" {{ $kosan->kategori == 'campur' ? 'selected' : '' }}>Campur</option>
                            <option value="cowo" {{ $kosan->kategori == 'cowo' ? 'selected' : '' }}>Cowok</option>
                            <option value="cewe" {{ $kosan->kategori == 'cewe' ? 'selected' : '' }}>Cewek</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sisa_kamar">Sisa Kamar</label>
                        <input type="number" class="form-control" id="sisa_kamar" name="sisa_kamar" value="{{ $kosan->sisa_kamar }}"oninput="validateNumberInput(this)" required>
                    </div>
                    <div class="form-group">
                        <label for="peraturan">Peraturan</label>
                        <textarea class="form-control" id="peraturan" name="peraturan" required>{{ $kosan->peraturan }}</textarea>
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
  

  <script>
    // Fungsi untuk memeriksa input hanya berisi angka
    function validateNumberInput(inputElement) {
        inputElement.value = inputElement.value.replace(/[^0-9]/g, '');

    }
</script>
@endsection
