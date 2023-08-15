@extends('layout.admin.layout')
@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-8">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pengaturan Site</h5>
            <form action="/site" method="POST">
                @csrf
                @method('put')

                <input type="hidden" value="{{ $site_settings->id }}" name="id">
                
                <label class="h4 mt-3" for="sejarah">Sejarah</label>
                <input id="sejarah" type="hidden" name="sejarah" value="{{ $site_settings->sejarah }}">
                <trix-editor input="sejarah"></trix-editor>

                <label class="h4 mt-3" for="visi">Visi</label>
                <input id="visi" type="hidden" name="visi" value="{{ $site_settings->visi }}">
                <trix-editor input="visi"></trix-editor>
                
                <label class="h4 mt-3" for="misi">Misi</label>
                <input id="misi" type="hidden" name="misi" value="{{ $site_settings->misi }}">
                <trix-editor input="misi"></trix-editor>
                
                <label class="h4 mt-3" for="kontak">Kontak</label>
                <input id="kontak" type="hidden" name="kontak" value="{{ $site_settings->kontak }}">
                <trix-editor input="kontak"></trix-editor>
                
                <button type="submit" class="btn btn-primary mt-3">Update</button>

            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection