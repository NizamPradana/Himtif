@extends('layout.admin.layout')
@section('content')
    <section class="section">
      <div class="row">
        <div class="col-lg-4">
          <a href="/bph">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">BPH</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-primary">
                    <i class="bi bi-diagram-3-fill p-3 fs-4"></i>
                  </div>
                  <div class="ps-3">
                    <h5><span class="text-success small pt-1 fw-bold"> {{ $jumlah_bph }} </span> <span class="text-muted small pt-2 ps-1">Pengurus</span></h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-4">
          <a href="/divisi">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Divisi</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-primary">
                    <i class="bi bi-people-fill p-3 fs-4"></i>
                  </div>
                  <div class="ps-3">
                    <h5><span class="text-success small pt-1 fw-bold"> {{ $jumlah_divisi }} </span> <span class="text-muted small pt-2 ps-1">Divisi</span></h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-4">
          <a href="/divisi">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Anggota</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-primary">
                    <i class="bi bi-people-fill p-3 fs-4"></i>
                  </div>
                  <div class="ps-3">
                    <h5><span class="text-success small pt-1 fw-bold"> {{ $jumlah_anggota }} </span> <span class="text-muted small pt-2 ps-1">Anggota</span></h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sejarah</h5>
              <div class="text-justify">
                {!! $site_settings->sejarah !!}
              </div>
              
              <hr>

              <h5 class="card-title">Kontak</h5>
              <div class="text-justify">
                {!! $site_settings->kontak !!}
              </div>
            </div>
          </div>

        </div>


        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Visi & Misi</h5>
              
                <h6 class="text-center h3">Visi</h6>
                 {!! $site_settings->visi !!} 

                 <hr>

                <h6 class="text-center h3">Misi</h6>
                 {!! $site_settings->misi !!} 
              

              {{-- <form …>
                <label for="visi">Visi</label>
                <input id="visi" type="hidden" name="visi">
                <trix-editor input="visi"></trix-editor>
              </form> --}}

            </div>
          </div>

        </div>
      </div>
    </section>
@endsection