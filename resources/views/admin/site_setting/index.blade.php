@extends('layout.admin.layout')
@section('content')
<section class="section">
    <div class="row">
      
      <div class="col-lg-8 col-md-8">
        
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Pengaturan Site</h5>
                <form action="/site" method="POST"> <!--  ********************* TAG PEMBUKA FORM ********************  -->
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
                  </form>  <!--  ********************* TAG PENUTUP FORM ********************  -->
              </div>
            </div>
      </div>
        <div class="col-lg-4 col-md-4">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Asset Foto</h5>
                
                  <form action="/site/update_foto" method="POST" enctype="multipart/form-data">
                    @csrf 
                    @method("PUT")

                    {{-- foto logo --}}
                    @if (!$site_settings->foto_logo)
                        <div class="alert alert-danger my-2">Belum ada aset foto Logo!</div>
                    @else
                      <img src="{{ asset('storage/'.$site_settings->foto_logo) }}" alt="Foto" class=" h-100 w-100 rounded">
                    @endif
                    
                    <label for="">Foto Logo</label>
                    <input type="file" class="form-control" value="hehehehe.jpg" name="foto_logo" >
                    <hr>



                    {{-- Foto angkata --}}
                    @if (!$site_settings->foto_angkatan)
                        <div class="alert alert-danger my-2">Belum ada aset foto Angkatan!</div>
                    @else
                      <img src="{{ asset('storage/'.$site_settings->foto_angkatan) }}" alt="Foto" class=" h-100 w-100 rounded">
                    @endif
                    
                    <label for="">Foto Angkatan</label>
                    <input type="file" class="form-control" name="foto_angkatan" >
                    <hr>



                    {{-- foto ketua --}}
                    @if (!$site_settings->foto_ketua)
                        <div class="alert alert-danger my-2">Belum ada aset foto Ketua!</div>
                    @else
                      <img src="{{ asset('storage/'.$site_settings->foto_ketua) }}" alt="Foto" class=" h-100 w-100 rounded">
                    @endif
                    
                    <label for="">Foto Ketua</label>
                    <input type="file" class="form-control" name="foto_ketua" >
                    <hr>

                    {{-- foto wakil --}}
                    @if (!$site_settings->foto_wakil)
                        <div class="alert alert-danger my-2">Belum ada aset foto Wakil!</div>
                    @else
                      <img src="{{ asset('storage/'.$site_settings->foto_wakil) }}" alt="Foto" class=" h-100 w-100 rounded">
                    @endif
                    
                    <label for="">Foto Wakil</label>
                    <input type="file" class="form-control" name="foto_wakil" >
                    <hr>
                    
                    {{-- foto bendahara --}}
                    @if (!$site_settings->foto_bendahara)
                        <div class="alert alert-danger my-2">Belum ada aset foto Bendahara!</div>
                    @else
                      <img src="{{ asset('storage/'.$site_settings->foto_bendahara) }}" alt="Foto" class=" h-100 w-100 rounded">
                    @endif
                    
                    <label for="">Foto Bendahara</label>
                    <input type="file" class="form-control" name="foto_bendahara" >
                    <hr>
                    
                    {{-- foto sekretaris --}}
                    @if (!$site_settings->foto_sekretaris)
                        <div class="alert alert-danger my-2">Belum ada aset foto Sekretaris!</div>
                    @else
                      <img src="{{ asset('storage/'.$site_settings->foto_sekretaris) }}" alt="Foto" class=" h-100 w-100 rounded">
                    @endif
                    
                    <label for="">Foto Sekretaris</label>
                    <input type="file" class="form-control" name="foto_sekretaris" >
                    <hr>  

                    <button type="submit" class="btn btn-primary mt-3">Update Asset Foto</button>

                  </form> 

              </div>
            </div>
          
        </div>



    </div>
  </section>
@endsection