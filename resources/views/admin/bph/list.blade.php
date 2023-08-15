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
                    <div class="col">
                        <h5>Kelola {{ $title }}</h5>
                    </div>
                    <div class="col text-end">
                        <button href="" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="bi bi-plus-square-fill pe-2"></i>Tambah</button>
                    </div>
                </div>
                <div class="row">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">periode</th>
                                <th scope="col">status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1
                            @endphp
                            @foreach ($data_bph as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->jabatan }}</td>
                                <td>{{ $row->periode }}</td>
                                <td>{{ $row->status }}</td>
                                <td>
                                    <a href="#modalView{{ $row->id }}" class="btn btn-info" data-bs-toggle="modal"><i class="bi bi-eye"></i></a>
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

    {{-- mdoal Tambah --}}
    <div class="modal fade" id="modalTambah" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data {{ $title }} HIMTIF</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" method="POST" enctype="multipart/form-data" action="/bph/store">
                        @csrf
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="inputNanme4" required>
                        </div>
                        <div class="col-12">
                            <label for="inputNanme5" class="form-label">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" id="inputNanme5" required>
                        </div>
                        <div class="col-12">
                            <label for="inputNanme6" class="form-label">Periode</label>
                            <input type="text" name="periode" class="form-control" id="inputNanme6" required>
                        </div>
                        <div class="col-12">
                            <label for="inputSelect" class="form-label">Status</label>
                            <select name="id_status" class="form-select" aria-label="Default select example" required>
                                <option selected>-- Pilih Status --</option>
                                @foreach ($status as $s)
                                    <option value="{{ $s->id }}">{{ $s->status }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="formFileMultiple" class="form-label">Foto</label>
                            <input name="foto_bph" class="form-control" type="file" id="formFileMultiple">
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
    {{-- end modal Tambah --}}


    {{-- modal edit --}}
    @foreach ($data_bph as $row)
    <div class="modal fade" id="modalEdit{{ $row->id }}" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data {{ $title }} HIMTIF</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" method="POST" enctype="multipart/form-data" action="/bph/update/{{ $row->id }}">
                        @csrf
                        <input type="hidden" name="old_foto_bph" value="{{ $row->foto_bph }}">
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="inputNanme4" value="{{ $row->nama }}" required>
                        </div>
                        <div class="col-12">
                            <label for="inputNanme5" class="form-label">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" id="inputNanme5" value="{{ $row->jabatan }}" required>
                        </div>
                        <div class="col-12">
                            <label for="inputNanme6" class="form-label">Periode</label>
                            <input type="text" name="periode" class="form-control" id="inputNanme6" value="{{ $row->periode}}" required>
                        </div>
                        <div class="col-12">
                            <label for="inputSelect" class="form-label">Status</label>
                            <select name="id_status" class="form-select" aria-label="Default select example" required>
                                @foreach ($status as $s)
                                    <option value="{{ $s->id }}" <?php if($s->id == $row->id_status) {echo "selected";} ?>>{{ $s->status }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="formFileMultiple" class="form-label">Foto</label>
                            <input name="new_foto_bph" class="form-control" type="file" id="formFileMultiple">
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
    {{-- end modal edit --}}

    
    {{-- Modal detail --}}
    @foreach ($data_bph as $row)
    <div class="modal fade" id="modalView{{ $row->id }}" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Data {{ $title }} HIMTIF</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <img src="{{ asset('storage/'.$row->foto_bph) }}" class="w-100 rounded">
                        </div>
                        @csrf
                        <div class="col-12">
                            <table>
                                <tr>
                                    <td scope="col-2">Nama</td>
                                    <td scope="col">:</td>
                                    <td scope="col">{{ $row->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td>{{ $row->jabatan }}</td>
                                </tr>
                                <tr>
                                    <td>Periode</td>
                                    <td>:</td>
                                    <td>{{ $row->periode }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>{{ $row->status }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{-- end modal detail --}}


    {{-- modal Hapus --}}
    @foreach ($data_bph as $row)
        <div class="modal fade" id="modalHapus{{ $row->id }}" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Data {{ $title }} HIMTIF</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" method="GET" action="/bph/destroy/{{ $row->id }}">
                            @csrf
                            <div class="col-12">
                                <h5>Yakin Ingin Menghapus Data {{ $row->nama }}?</h5>
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
    {{-- end modal hapus --}}

@endsection
