@extends('layouts.apzi')

@section('content')

    <h1 style="width: 94%;margin-left: 3%;color: #000c4f;font-size: 30px;font-family: 'ITC Avant Garde Gothic Std Medium';border-bottom: 2px solid #000c4f;line-height: 27px;padding-top: 30%; ">Sitios Turísticos</h1><!-- Start: Bootstrap 4 - Photo Gallery --><div class="photo-gallery">
    @foreach ($directorio as $dir)
    <div class="container-fluid">
  <div class="px-lg-5">

    <div class="row">
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm" style="border:1px solid #000c4f !important;margin-bottom: 0; border-radius: 4px !important;"><h5 style=" margin-bottom: 0;background-color:#ffff00; border-radius: 4px 4px 0px 0px !important; border-bottom: 1px solid #000c4f; text-align:center; padding-bottom: 1%;"> <a href="#" class="text-dark" style="color:#000c4f !important;  font-size: 16px !important;font-family: 'ITC Avant Garde Gothic Std Demi';">{{$dir->nombre}}</a></h5><img src="https://drive.google.com/uc?id={{ $dir->imagen1 }}" alt="" class="img-fluid card-img-top" style="border-radius: 4px !important; width:94%!important; margin:3% !important; border:1px solid #000c4f;">
        <div class="row">
                        <div class="col" style="max-width:20%; padding:0;">
                          <i class="fa fa-circle" style="width: 100%;color: var(--green); text-align:end; vertical-align: text-top;"></i>
</div>
                          <div class="col" style="max-width:80%">   
                          <h1 style="width: 100%;font-size: 14px;font-family: 'Montserrat Regular';line-height: 1.5; color: #000c4f; text-align:start;">Abierto</h1>
                        </div>
                    </div>
        <div class="p-4" style="padding: 0rem!important;">
             <p class="small text-muted mb-0" style="margin-left:7%; margin-right:7%; font-size: 14px !important;color: #000c4f !important;font-family: 'Montserrat Regular'; text-align:justify;">{{$dir->descripcion}}</p>
             <a href="{{route('local',[$dir->id,$municipio->id])}}">
             <div class="d-flex align-items-center justify-content-between rounded-pill px-3 py-2 mt-4" style="justify-content: flex-end !important; border-radius: 0px 0px 4px 4px !important; margin-top:2% !important; background-color:#000c4f">
              <p class="small mb-0"><span class="font-weight-bold" style="color:white; font-family: 'Montserrat Regular'; text-align:right;">Ver Más Información&nbsp;&nbsp;&nbsp;</span></p>
             <i class="fa fa-arrow-circle-right float-right" style="color:white"></i>
            </div>
</a>
          </div>
        </div>
      </div>
      <!-- End -->  

    </div>
  </div>
</div>
</div><!-- End: Bootstrap 4 - Photo Gallery -->
@endforeach
{{ $directorio->links() }}
@include('front.menuturismo')
@endsection

