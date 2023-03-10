@extends('layouts.landing')
@section('title','SMK NU 1 ISLAMIYAH KRAMAT TEGAL')
@section('content')
<style>
.isi{
  display: -webkit-box;
  -webkit-line-clamp: 6;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
<div class="row">
  <div class="col-md-12">
        <div class="site-section">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="row">
                        <div class="col-12">
                          <div class="section-title">
                            <h2>Informasi Lowongan Kerja</h2>
                          </div>
                        </div>
                      </div>
                        <div class="col-md-12">
                          @foreach($lowongan as $data)
                          <div class="post-entry-2 d-flex">
                            <div class="thumbnail zoom" style="border-radius:10px;background-image: url('image/InfoLowongan/{{$data->foto}}')"></div>
                            <div class="contents">
                              <h2><a href="/form-single-lowongan;{{$data->id}}">{{$data->judul}}</a></h2>
                              <div class="post-meta">
                              <p class="isi">{!!$data->isi!!}</p>
                                <span class="date-read">{{substr($data->updated_at,0,10)}}<span class="mx-1">&bullet;</span></span>
                              </div>
                            </div>
                          </div>
                          @endforeach

                          {{-- More --}}
                          <div class="row">
                            <div class="col-lg-6">
                              <ul class="custom-pagination list-unstyled">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                              </ul>
                            </div>
                          </div>
                          {{-- End More --}}

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END section -->
  </div>
</div>
{{-- End Loker --}}

@endsection