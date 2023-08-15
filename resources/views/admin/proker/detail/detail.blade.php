@extends('layout.admin.layout')
@section('content')
    <div class="pagetitle">
      <h1>{{ $title }}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active"><a href="/proker">Proker</a></li>
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
                    <div class="col-auto">
                        <h5>Kelola {{ $title }} <strong>{{ $proker->proker }} {{ $divisi->divisi }}</strong></h5>
                    </div>
                    <div class="col text-end">
                        {{-- <button href="" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus"><i class="bi bi-trash pe-2"></i>Hapus</button> --}}
                    </div>
                    <div class="col-2 text-end">
                        <button href="" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="bi bi-plus-square-fill pe-2"></i>Tambah</button>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-12 text-center mb-3">
                        @if (!$detail_proker)
                            <p>Data Masih Kosong Silahkan Ditambahkan</p>
                            
                        @endif
                        <p></p>
                    </div>

                    @if (!empty($detail_proker))
                    <div class="col-md-12">
                        <form action="/detail/update/{{ $proker->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <input type="hidden" name="id_detail_proker" value="{{ $detail_proker->id }}">
                            <input type="hidden" name="old_foto" value="{{ $detail_proker->foto }}">
                            
                            <label class="h4 mt-3" for="detail">Detail</label>
                            <input id="detail" type="hidden" name="detail" value="{{ $detail_proker->detail }}">
                            <trix-editor input="detail"></trix-editor>

                            <div class="row my-2">
                                @if ($foto == null)
                                    <div class="h3 text-danger text-center">* Tidak Ada Lampiran Foto. *</div>
                                
                                @else
                                    @foreach ($foto as $f)
                                    <div class="col-md-3 mt-1">
                                        <img src="{{ asset('storage/'.$f) }}" alt="Foto" class=" h-100 w-100 rounded">
                                    </div>
                                    @endforeach
                                @endif
                            </div>

                            <hr>

                            <label for="">Update semua Foto <small class="small text-danger">*akan menghapus semua foto sebelumnya</small></label>
                            <input name="foto[]" class="form-control" type="file" id="formFileMultiple" multiple>

                            <button type="submit" class="btn btn-primary mt-3">Update</button>
            
                        </form>

                    </div>
                    @endif

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
                    <h5 class="modal-title">Tambah Data {{ $title }} {{ $proker->proker }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" method="POST" action="/detail/store/{{ $proker->id}}" enctype="multipart/form-data" multiple>
                        @csrf
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="detail" class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Detail</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="formFileMultiple" class="form-label">Foto</label>
                            <input name="foto[]" class="form-control" type="file" id="formFileMultiple" multiple>
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



@endsection
