@extends('front.master')
@section('content')
    <section style="padding-top:60px;">
      <div class="container" style="padding-bottom:150px;">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
            <div class="card-header">
              Update Person
            </div>
            <div class="card-body">
              @if(Session::has('person_updated'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('person_updated')}}
                </div>
              @endif
              <form method="POST" action="{{route('person.update')}}">
                @csrf
                <input type="hidden" name="id" value="{{$staff->id}}" />
                <input type="hidden" name="comp_id" value="{{$staff->comp_id}}" />
                <div class="form-group">
                  <label for="title">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$staff->name}}" />
                </div>
                <div class="form-group">
                  <label for="body">LastName</label>
                  <input type="text" name="lastname" class="form-control" placeholder="Enter Lastname" value="{{$staff->lastname}}" />
                </div>
                <div class="form-group">
                  <label for="body">Title</label>
                  <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{$staff->title}}" />
                </div>
                <div class="form-group">
                  <label for="body">E-Mail</label>
                  <input type="text" name="email" class="form-control" placeholder="Enter E-Mail" value="{{$staff->email}}" />
                </div>
                <div class="form-group">
                  <label for="body">Phone Number</label>
                  <input type="text" name="phonenumber" class="form-control" placeholder="Enter Phone Number" value="{{$staff->phonenumber}}" />
                </div>
                <button type="submit" class="btn-lg btn-success">Update</button>  <a href="/staffmain/{{$staff->comp_id}}" class="btn-lg btn-info">Back to List</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   </section>
@endsection
