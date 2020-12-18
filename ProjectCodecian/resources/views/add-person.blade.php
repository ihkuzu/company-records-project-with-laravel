@extends('front.master')
@section('content')
    <section style="padding-top:100px;">
      <div class="container" style="padding-bottom:150px;">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
            <div class="card-header">
              Add Person
            </div>
            <div class="card-body">
              @if(Session::has('person_created'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('person_created')}}
                </div>
              @endif
              <form method="POST" action="{{route('person.create')}}">
                @csrf
                @foreach($comid as $ca)
                <input type="hidden" name="comp_id" value="{{$ca->comp_id}}" />
              @endforeach
                <div class="form-group">
                  <label for="title">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Name" />
                </div>
                <div class="form-group">
                  <label for="body">Lastname</label>
                  <input type="text" name="lastname" class="form-control" placeholder="Enter Lastname" />
                </div>
                <div class="form-group">
                  <label for="body">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="Enter Title" />
                </div>
                <div class="form-group">
                  <label for="body">E-Mail</label>
                  <input type="text" name="email" class="form-control" placeholder="Enter E-Mail" />
                </div>
                <div class="form-group">
                  <label for="body">Phone Number</label>
                  <input type="text" name="phonenumber" class="form-control" placeholder="Enter Phone Number" />
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
