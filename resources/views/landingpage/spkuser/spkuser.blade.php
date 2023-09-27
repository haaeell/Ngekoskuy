@extends('layouts.landingpage')

@section('content')
<div style="height: 100px"></div>
    <div class="container">
        <div class="mt-4">
            <h2>Pengertian Sistem Pendukung Keputusan (SPK)</h2>
            <p>
                Sistem Pendukung Keputusan (SPK) adalah suatu sistem atau alat yang membantu individu atau organisasi dalam
                membuat keputusan yang lebih baik dan tepat. SPK membantu menganalisis informasi yang tersedia dan menyajikan
                hasil evaluasi terhadap berbagai alternatif keputusan. SPK membantu pemakai dalam menyusun preferensi dan
                nilai-nilai untuk setiap kriteria yang terkait dengan suatu masalah, sehingga dapat memberikan rekomendasi
                atau rangking terhadap alternatif keputusan yang ada.
            </p>

            <h2>Metode Simple Additive Weighting (SAW)</h2>
            <p>
                Metode Simple Additive Weighting (SAW) adalah salah satu metode yang digunakan dalam Sistem Pendukung Keputusan
                (SPK). Metode ini merupakan metode yang sederhana dan sering digunakan untuk melakukan pemilihan alternatif
                dengan mempertimbangkan berbagai kriteria yang relevan. Metode SAW menggunakan pendekatan penjumlahan bobot
                terbobot, di mana setiap kriteria diberi bobot relatif sesuai dengan tingkat pentingannya dalam pengambilan
                keputusan.
            </p>
            </div>
            <div class="alert alert-primary mt-4" role="alert" >
                Pencarian hasil keputusan berhasil
              </div>
        <h1 class="my-4">Tabel Kriteria dan Pembobotan</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Kriteria</th>
                    <th scope="col">Pembobotan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kriteria 1</td>
                    <td>0.2</td>
                    <td>
                        <a href class="btn btn-primary">Edit</a>
                        <a href class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kriteria 2</td>
                    <td>0.3</td>
                    <td>
                        <a href class="btn btn-primary">Edit</a>
                        <a href class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Kriteria 3</td>
                    <td>0.5</td>
                    <td>
                        <a href class="btn btn-primary">Edit</a>
                        <a href class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="#" class="btn btn-primary d-block py-3 fw-semibold my-5">SUBMIT</a>

@endsection
