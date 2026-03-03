@extends('admin.layout.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman Beranda</h1>
        </div>
        <div class="card">
            <div class="section-body">
                <div class="card-header">
                    <h4 class="text-dark">Form Tambah Sekolah</h4>
                </div>
                <div class="card-body">
                   <div class="form">
                    <form action="{{route('sekolah.store')}}" method="POST">
                        @csrf
                          <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Sekolah</label>
                                <input type="text" class="form-control" id="nama_sekolah"
                                    placeholder="Masukan Nama Sekolah" name="nama_sekolah">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" id="email"
                                    placeholder="Masukan Email" name="email">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="telp">Nomor Telepon</label>
                                <input type="number" class="form-control" id="no_tlp"
                                    placeholder="Masukan Nomor Telepon" name="no_tlp">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat Anda...."></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                        </div>
                    </div>
                    </form>
                   
                   </div>


    </section>
</div>
@endsection