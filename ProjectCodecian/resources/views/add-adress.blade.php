@extends('front.master')
@section('content')
    <section style="padding-top:175px;">
      <div class="container" style="padding-bottom:180px;">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
            <div class="card-header">
              Add Adress
            </div>
            <div class="card-body">
              @if(Session::has('adress_created'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('adress_created')}}
                </div>
              @endif
              <form method="POST" action="{{route('adress.create')}}">
                @csrf
                @foreach($adress as $ad)
                <input type="hidden" name="comp_id" value="{{$ad->comp_id}}"/>
              @endforeach
                <div class="form-group">
                  <label for="title">Adress</label>
                  <textarea name="adress" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label for="body">Longitude</label>
                  <input type="decimal" name="long" class="form-control" placeholder="Enter Longitude Value" />
                </div>
                <div class="form-group">
                  <label for="body">Latitude</label>
                  <input type="decimal" name="lat" class="form-control" placeholder="Enter Latitude Value" />
                </div>
                <button type="submit" class="btn-lg btn-success">Add</button>  <a href="/main#list" class="btn-lg btn-info">Back to List</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   </section>

@endsection
