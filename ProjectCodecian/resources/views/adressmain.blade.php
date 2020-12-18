@extends('front.master')
@section('content')
  <head>
  <style type="text/css"> html, body, #mapFrame { width: 100%; height: 110%; margin: 0; padding: 0; } </style>
  <script src="http://sehirharitasi.ibb.gov.tr/api/map2.js"></script>
</head>
    <section style="padding-top:60px;">
      <div class="container">
        <div class="row=3">
          <div class="col-md-25 offset-md-12">
            <div class="card">
            <div class="card-header">
              Companie's Adresses
            </div>
            <div class="card-body">
              @if(Session::has('person_deleted'))
                <div class="alert alert-success" role="alert">
                {{Session::get('person_deleted')}}
              </div>
            @endif
              <table class="table table-striped">
                <thread>
                  <tr>
                    <th>Adress</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                  </tr>
                </thread>
                <tbody>
                  <div class="col-md-25 offset-md-12">
                  @foreach($adressmain as $am)
                    <tr>
                      <td>{{$am->Adress}}</td>
                      <td>{{$am->long}}</td>
                      <td>{{$am->lat}}</td>
                    </tr>
                  @endforeach
                </div>
                </tbody>
              </table>
              <a href="/main#list" class="btn btn-primary">Back to Companies</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   </section>



                  <iframe id="mapFrame" style="padding-left:200px; width:85%; height:40%; " src="http://sehirharitasi.ibb.gov.tr/">
                      <p>Tarayıcınız iframe özelliklerini desteklemiyor !</p>
                  </iframe>


              <script>
                var ibbMAP = new SehirHaritasiAPI({mapFrame:"mapFrame",apiKey:"..."}, function(){
                	ibbMAP.Nearby.Open({
                		lat: {{$am->lat}},
                		lon: {{$am->long}},
                		type: "eğitim,kamu",
                		distance: 300
                	});
                	ibbMAP.Nearby.Close();
                  ibbMAP.Map.OnClick(function (lat, lon, zoom ,clickDirection, pixelX, pixelY) {
              		alert(lat + "," + lon + ", " + zoom + ", "+clickDirection+ ", "+pixelX + ", "+pixelY );
              	});
                ibbMAP.Nearby.GetState(function (state) {
              		alert(state);
              	});
                });
              </script>



@endsection
