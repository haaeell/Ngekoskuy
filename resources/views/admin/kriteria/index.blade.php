
@extends ('layouts.dashboard')

@section('content')
@section('judul','Table Kriteria')
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
                        <th>Nama</th>
                        <th>Bobot</th>
                        <th>jenis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kriteria as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->bobot }}</td>
                        <td>{{ $item->jenis }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-warning mx-1" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}">Edit</a>
                                <form action="{{ route('kriteria.destroy', $item->id) }}" method="POST">
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
            <form action="{{ route('kriteria.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama Kriteria</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                
                <!-- Bobot Kriteria -->
                <div class="form-group">
                    <label for="bobot">Bobot Kriteria (1-100)</label>
                    <input type="number" class="form-control" id="bobot" name="bobot" min="1" max="100" required oninput="validasiBobot(this)">
                    <div class="text-danger" id="bobot-error"></div>
                </div>
                
                <!-- Jenis Kriteria (Cost/Benefit) -->
                <div class="form-group">
                    <label for="jenis">Jenis Kriteria</label>
                    <select class="form-control" id="jenis" name="jenis" required>
                        <option value="Cost">Cost</option>
                        <option value="Benefit">Benefit</option>
                    </select>
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
  @foreach ($kriteria as $kriteria)
  <div class="modal fade z-99" id="modalUpdate{{ $kriteria->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('kriteria.update', $kriteria->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nama">Nama Kriteria</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $kriteria->nama }}" required>
                    </div>
                    
                    <!-- Bobot Kriteria -->
                    <div class="form-group">
                        <label for="bobot">Bobot Kriteria (1-100)</label>
                        <input type="number" class="form-control" id="bobot" name="bobot" min="1" max="100" value="{{ old('bobot', $kriteria->bobot) }}" required oninput="validasiBobot(this)">
                        <div class="text-danger" id="bobot-error"></div>
                    </div>
                    
                    <!-- Jenis Kriteria (Cost/Benefit) -->
                    <div class="form-group">
                        <label for="jenis">Jenis Kriteria</label>
                        <select class="form-control" id="jenis" name="jenis" required>
                            <option value="Cost" {{ $kriteria->jenis === 'Cost' ? 'selected' : '' }}>Cost</option>
                            <option value="Benefit" {{ $kriteria->jenis === 'Benefit' ? 'selected' : '' }}>Benefit</option>
                        </select>
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
    // Ambil elemen input bobot dan pesan kesalahan
    const bobotInput = document.querySelector('#bobot');
    const bobotError = document.querySelector('#bobot-error');

    // Fungsi untuk menampilkan pesan kesalahan
    function showError(message) {
        bobotError.textContent = message;
    }

    // Fungsi untuk validasi bobot
    function validasiBobot(input) {
        const bobotValue = input.value;
        if (!/^\d+$/.test(bobotValue)) {
            input.value = bobotValue.replace(/[^\d]/g, ''); // Hapus karakter selain angka
            showError('Bobot harus berisi hanya angka.');
        } else if (bobotValue > 100) {
            input.value = '100'; // Batasi nilai maksimum menjadi 100
            showError('Bobot maksimum adalah 100.');    
        } else {
            bobotError.textContent = ''; // Menghapus pesan kesalahan jika validasi berhasil
        }
    }
</script>
@endsection
