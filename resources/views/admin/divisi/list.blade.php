@extends('layout.admin.layout')
@section('content')
    <div class="pagetitle">
      <h1>{{ $title }}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">{{ $title }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <div class="row card-title">
                    <div class="col-md-6">
                        <h5>Kelola {{ $title }}</h5>
                    </div>
                    <div class="col-md-6 text-end">
                        <button href="" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="bi bi-plus-square-fill pe-2"></i>Tambah</button>
                    </div>

                </div>
                <div class="row">
                    
                    <table class="table table-striped table-hover datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Divisi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1
                            @endphp
                            @foreach ($data_divisi as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->divisi }}</td>
                                <td>
                                    <a href="/anggota/{{ $row->id }}" class="btn btn-info"><i class="bi bi-people-fill"></i></a>
                                    <a href="#modalEdit{{ $row->id }}" class="btn btn-warning" data-bs-toggle="modal"><i class="bi bi-pencil-square"></i></a>
                                    <a href="#modalHapus{{ $row->id }}" class="btn btn-danger" data-bs-toggle="modal"><i class="bi bi-trash"></i></a>
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
    </section>

    <div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data {{ $title }} HIMTIF</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="POST" action="/divisi/store" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Divisi</label>
                        <input type="text" name="divisi" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Logo Divisi</label>
                        <input type="file" name="logo_divisi" class="form-control" id="">
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Foto Divisi</label>
                        <input type="file" name="foto_divisi" class="form-control" id="">
                    </div>
                    
                    <label class="p mt-3" for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" cols="10" rows="5"></textarea>


                    <div class="text-end">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    @foreach ($data_divisi as $row)
    <div class="modal fade" id="modalEdit{{ $row->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data {{ $title }} HIMTIF</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="POST" action="/divisi/update/{{ $row->id }}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{ $row->id }}">

                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Divisi</label>
                        <input type="text" name="divisi" class="form-control" id="inputNanme4" value="{{ $row->divisi }}" required>
                    </div>
                    <div class="col-12">
                        <img class="w-50 d-block border-1 my-2 rounded" src="{{ asset('storage/'.$row->logo_divisi) }}" alt="">
                        <label for="" class="form-label">Ubah Logo Divisi</label>
                        <input type="file" name="logo_divisi" class="form-control" id="">
                    </div>
                    <div class="col-12">
                        <img class="w-50 d-block border-1 my-2 rounded" src="{{ asset('storage/'.$row->foto_divisi) }}" alt="">
                        <label for="" class="form-label">Ubah Foto Divisi</label>
                        <input type="file" name="foto_divisi" class="form-control" id="">
                    </div>
                    
                    <label class="p mt-3" for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" cols="10" rows="5">{{ $row->deskripsi }}</textarea>

                    <div class="text-end">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    @endforeach

    @foreach ($data_divisi as $row)
    <div class="modal fade" id="modalHapus{{ $row->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data {{ $title }} HIMTIF</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="GET" action="/divisi/destroy/{{ $row->id }}">
                    @csrf
                    <div class="col-12">
                        <h5>Yakin Ingin Menghapus Data {{ $row->divisi }}?</h5>
                    </div>
                    <div class="text-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    @endforeach

@endsection
