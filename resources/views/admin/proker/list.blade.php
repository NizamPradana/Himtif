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
                                <th scope="col">Proker</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Tanggal Pelaksanaan</th>
                                <th scope="col">Divisi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1
                            @endphp
                            @foreach ($proker as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->proker }}</td>
                                <td>
                                    <img src="{{ asset('storage/'.$row->thumbnail) }}" width="100" class="rounded bordered" alt="">
                                </td>
                                <td>{{ date('d M Y', strtotime($row->tanggal_pelaksanaan)) }}</td>
                                <td>{{ $row->divisi }}</td>
                                <td>
                                    <a href="/detail/{{ $row->id }}/{{ $row->id_divisi }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
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
                <h5 class="modal-title">Tambah Data {{ $title }} Divisi HIMTIF</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="POST" action="/proker/store" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Proker</label>
                        <input type="text" name="proker" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-12">
                        <label for="inputNanme6"  class="form-label">Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control" id="inputNanme6" required>
                    </div>
                    <div class="col-12">
                        <label for="inputNanme5" class="form-label">Tanggal Pelaksanaan</label>
                        <input type="date" name="tanggal_pelaksanaan" class="form-control" id="inputNanme5">
                    </div>
                    <div class="col-12">
                        <label for="inputSelect" class="form-label">Divisi</label>
                        <select name="id_divisi" class="form-select" aria-label="Default select example" required>
                            <option selected>-- Pilih Divisi --</option>
                            @foreach ($divisi as $s)
                                <option value="{{ $s->id }}">{{ $s->divisi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-end">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    @foreach ($proker as $row)
    <div class="modal fade" id="modalEdit{{ $row->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data {{ $title }} HIMTIF</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="POST" action="/proker/update/{{ $row->id }}">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Proker</label>
                        <input type="text" name="proker" class="form-control" id="inputNanme4" value="{{ $row->proker }}" required>
                    </div>
                    <div class="col-12">
                        <label for="inputNanme5" class="form-label">Tanggal Pelaksanaan</label>
                        <input type="date" name="tgl_pelaksanaan" class="form-control" id="inputNanme5" value="{{ $row->tanggal_pelaksanaan }}" required>
                    </div>
                    <div class="col-12">
                        <label for="inputSelect" class="form-label">Divisi</label>
                        <select name="divisi" class="form-select" aria-label="Default select example" required>
                            @foreach ($divisi as $s)
                                <option value="{{ $s->id }}" <?php if($s->id == $row->id_divisi) {echo "selected";} ?>>{{ $s->divisi }}</option>
                            @endforeach
                        </select>
                    </div>
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

    @foreach ($proker as $row)
    <div class="modal fade" id="modalHapus{{ $row->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data {{ $title }} HIMTIF</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="GET" action="/proker/destroy/{{ $row->id }}">
                    @csrf
                    <div class="col-12">
                        <h5>Yakin Ingin Menghapus Data {{ $row->proker }}?</h5>
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
