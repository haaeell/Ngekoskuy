@extends ('layouts.dashboard')

@section('content')
@section('judul', 'Table Kriteria')
@section('title', 'Dashboard Admin')
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
                {{-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">Tambah</button> --}}

            </div>
            <div class="card-body">
                <div class="table-responsive">
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
                                            <a href="#" class="btn btn-warning mx-1" data-bs-toggle="modal"
                                                data-bs-target="#modalUpdate{{ $item->id }}">Edit</a>
                                            <form action="{{ route('kriteria.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" data-name="{{ $item->nama }}"
                                                    class="btn btn-danger delete-button">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

                <div>
                    <h2 class="text-bold text-center">
                        Total Bobot = {{ $totalBobot }}
                    </h2>
                    @if ($totalBobot > 100 || $totalBobot < 100)
                        <p class="text-center text-small">
                            <span class="text-danger">* Total Bobot harus = 100</span>
                        </p>
                    @else
                        <p class="text-center text-small text-success">
                            <span>Bobot Pas</span>
                        </p>
                    @endif

                </div>
                <div class="row my-5">

                    <div class="col-md-8">

                        <p class="fw-semibold text-center text-primary fw-bold">
                            Tingkat kepentingan setiap kriteria

                        </p>
                        <table class="table table-bordered  table-striped">
                            <thead>
                                <tr>
                                    <th>Kriteria</th>
                                    <th>Nilai</th>
                                    <th>Bobot</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>C1 Jarak ke Kampus</td>
                                    <td>
                                        C1 <= 500 m (1)<br>
                                            500 < C1 <=1000 m (2)<br>
                                                1000 < C1 <=1500 m(3)<br>
                                                    1500 < C1 <=2000 m (4)<br>
                                                        C1 > 2000 m (5)
                                    </td>
                                    <td>
                                        1 <br>
                                        2 <br>
                                        3 <br>
                                        4 <br>
                                        5 <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C2 Jarak ke warung
                                        makan</td>
                                    <td>
                                        C2 <= 100 m (1)<br>
                                            300 < C2 <=500 m (2)<br>
                                                500 < C2 <=700 m(3)<br>
                                                    700 < C2 <=900 m (4)<br>
                                                        C2 > 900 m (5)
                                    </td>
                                    <td>
                                        1 <br>
                                        2 <br>
                                        3 <br>
                                        4 <br>
                                        5 <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C3 Harga Sewa</td>
                                    <td>
                                        Rp 500.000 (1)<br>
                                        Rp 500.000 - Rp 650.000 (2)<br>
                                        Rp 650.000 - Rp 800.000 (3)<br>
                                        Rp 800.000 - Rp 950.000 (4)<br>
                                        Rp 950.000 (5)
                                    </td>
                                    <td>
                                        1 <br>
                                        2 <br>
                                        3 <br>
                                        4 <br>
                                        5 <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C4 Luas Kamar</td>
                                    <td>
                                        2 x 3 m<sup>2</sup> (1)<br>
                                        3 x 3 m<sup>2</sup> (2)<br>
                                        3 x 4 m<sup>2</sup> (3)<br>
                                        4 x 4 m<sup>2</sup> (4)<br>
                                        4 x 5 m<sup>2</sup> (5)
                                    </td>
                                    <td>
                                        1 <br>
                                        2 <br>
                                        3 <br>
                                        4 <br>
                                        5 <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C5 Fasilitas</td>
                                    <td>
                                        Kasur (1)<br>
                                        Kasur, lemari baju (2)<br>
                                        Kasur, lemari baju, meja belajar, wifi (3)<br>
                                        Kasur, lemari baju, meja belajar, kamar mandi dalam (4)<br>
                                        Kasur, lemari baju, meja belajar, kamar mandi dalam, wifi (5)
                                    </td>
                                    <td>
                                        1 <br>
                                        2 <br>
                                        3 <br>
                                        4 <br>
                                        5 <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C6 Keamanan</td>
                                    <td>
                                        Tidak ada pagar, parkir di dalam, tidak ada petugas keamanan (1)<br>
                                        Ada pagar, parkir di dalam, tidak ada petugas keamanan (3)<br>
                                        Ada pagar, parkir di dalam, ada petugas keamanan (5)
                                    </td>
                                    <td>
                                        1 <br>
                                        3 <br>
                                        5 <br>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <p class="fw-semibold text-center text-primary">
                            Tingkat kepentingan dalam bilangan fuzzy

                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sangat Rendah (SR)</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Rendah (R)</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Cukup (C)</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Tinggi (T)</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Sangat Tinggi (ST)</td>
                                    <td>5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <h2 class="fw-semibold text-center">
                        Normalisasi matriks:
                    </h2>
                    <p class="m-0">COST = NILAI MIN / NILAI FUZZY ALTERNATIF</p>
                    <p>BENEFIT = NILAI MAX / NILAI FUZZY ALTERNATIF</p>
                    <h2>Contoh :</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <p>Matrix data kos</p>
                                <div class="mx-5">
                                    <table>
                                        <tr>
                                            <td>4</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>5</td>
                                            <td>5</td>
                                        </tr>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4 class="text-danger">Data Ke 1 </h4>
                            <p>Mencari Normalisasi cost : F1 = Min(4,1,3,2)berarti min nya = <span
                                    class="text-danger fw-bold">1</span> . maka <span
                                    class="text-danger fw-bold">1</span>/4 = 0.25</p>
                            <p>Mencari Normalisasi cost : F1 = Min(1,1,1,2)berarti min nya = <span
                                    class="text-danger fw-bold">1</span> . maka <span
                                    class="text-danger fw-bold">1</span>/1 = 1</p>
                            <p>Mencari Normalisasi cost : F1 = Min(1,2,5,5)berarti min nya = <span
                                    class="text-danger fw-bold">1</span>. maka <span
                                    class="text-danger fw-bold">1</span>/1 = 1</p>
                            <p>Mencari Normalisasi benefit : F4 = Max(3,3,4,5)berarti max nya = <span
                                    class="text-danger fw-bold">5</span> . maka 3/<span
                                    class="text-danger fw-bold">5</span> = 0.6</p>
                            <p>Mencari Normalisasi benefit : F4 = Max(4,5,5,5)berarti max nya = <span
                                    class="text-danger fw-bold">5</span>. maka 4/<span
                                    class="text-danger fw-bold">5</span> = 0.8</p>
                            <p>Mencari Normalisasi benefit : F4 = Max(5,5,5,5)berarti max nya = <span
                                    class="text-danger fw-bold">5</span>. maka 3/<span
                                    class="text-danger fw-bold">5</span> = 1</p>
                        </div>
                    </div>

                </div>
                <div class="my-4">
                    <h2 class="fw-semibold text-center">
                        Perhitungan dengan bobot kriteria setelah di Normalisasi:
                    </h2>
                    <p>menghitung nilai preferensi (V) pada masing-masing alternatif. <br>
                        Nilai preferensi dihitung dengan penjumlahan dari hasil perkalian matriks W x R. </p>
                    <h2>Contoh :</h2>
                    <div class="row d-flex align-items-center">
                        <div class="col-md-4">
                            <table border="1">
                                <tr>
                                    <td>0.25</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>0.6</td>
                                    <td>0.8</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>0.5</td>
                                    <td>0.6</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>0.333</td>
                                    <td>1</td>
                                    <td>0.2</td>
                                    <td>0.8</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>0.5</td>
                                    <td>0.5</td>
                                    <td>0.2</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-8">
                            <p class="m-0">V1 =
                                (0,25 𝑥 20)+(1 𝑥 10)+(1 𝑥 20)+(0,6 𝑥 15)+(0,8 𝑥 20)+(1 𝑥 15 )/
                                100
                                = <span class="text-danger fw-bold fs-2">0.75</span>
                            </p>
                            <p class="m-0">V2 =
                                (1 𝑥 20)+(1 𝑥 10)+(0,5 𝑥 20)+(0,6 𝑥 15)+(1 𝑥 20)+(1 𝑥 15 )
                                100
                                = <span class="text-danger fw-bold fs-2">0,84</span>
                            </p>
                            <p class="m-0">V3 =
                                (0,333 𝑥 20)+(1 𝑥 10)+(0,2 𝑥 20)+(0,8 𝑥 15)+(1 𝑥 20)+(1 𝑥 15 )/100
                                = <span class="text-danger fw-bold fs-2">0,667</span>
                            </p>
                            <p class="m-0">V3 =

                                (0,5 𝑥 20)+(0,5 𝑥 10)+(0,2 𝑥 20)+(1 𝑥 15)+(1 𝑥 20)+(1 𝑥 15 )/100
                                = <span class="text-danger fw-bold fs-2">0,69</span>
                            </p>
                        </div>
                    </div>
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
                        <input type="number" class="form-control" id="bobot" name="bobot" min="1"
                            max="100" required oninput="validasiBobot(this)">
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
    <div class="modal fade z-99" id="modalUpdate{{ $kriteria->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kriteria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kriteria.update', $kriteria->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama">Nama Kriteria</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                value="{{ $kriteria->nama }}" required>
                        </div>

                        <!-- Bobot Kriteria -->
                        <div class="form-group">
                            <label for="bobot">Bobot Kriteria (1-100)</label>
                            <input type="number" class="form-control" id="bobot" name="bobot" min="1"
                                max="100" value="{{ old('bobot', $kriteria->bobot) }}" required
                                oninput="validasiBobot(this)">
                            <div class="text-danger" id="bobot-error"></div>
                        </div>

                        <!-- Jenis Kriteria (Cost/Benefit) -->
                        <div class="form-group">
                            <label for="jenis">Jenis Kriteria</label>
                            <select class="form-control" id="jenis" name="jenis" required>
                                <option value="Cost" {{ $kriteria->jenis === 'Cost' ? 'selected' : '' }}>Cost
                                </option>
                                <option value="Benefit" {{ $kriteria->jenis === 'Benefit' ? 'selected' : '' }}>Benefit
                                </option>
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
