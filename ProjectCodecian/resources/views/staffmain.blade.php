@extends('front.master')
@section('content')
    <section style="padding-top:200px">
      <section style="padding-bottom:200px" id="about">
        <div class="container">
          <div class="row">
            <div class="container d-flex h-100 align-items-center">

              <div class="card-title">
              <div class="card-header">
              List of Staff
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
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Title</th>
                    <th>E-Mail</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                  </tr>
                </thread>
                <tbody>
                  <div class="col-md-25 offset-md-12">
                  @foreach($staffmain as $sm)
                    <tr>
                      <td>{{$sm->name}}</td>
                      <td>{{$sm->lastname}}</td>
                      <td>{{$sm->title}}</td>
                      <td>{{$sm->email}}</td>
                      <td>{{$sm->phonenumber}}</td>
                      <td>

                        <a href="/edit-person/{{$sm->id}}" class="btn-sm btn-success">Update Person</a>
                        <a href="/delete-person/{{$sm->id}}" class="btn-sm btn-danger">Delete Person</a>
                      </td>
                    </tr>
                  @endforeach
                </div>
                </tbody>
              </table>
              <a href="/main#list" class="btn-lg btn-primary">Back to Companies</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   </section>
@endsection
