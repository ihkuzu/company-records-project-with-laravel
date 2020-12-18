@extends('front.master')
@section('content')

    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">COMPANIES</h1><br>
                <a class="btn btn-primary js-scroll-trigger" href="#list">Start to List All Companies</a>
            </div>
        </div>
    </header>
    <section style="padding-top:40px;" id="list">
      <div class="mx-auto container" style="padding-bottom:200px;">
        <div class="row">
          <div class="container d-flex h-100 align-items-center">

            <div class="card-title">
            <div class="card-header">
              Companies<br><br>
              <a href="/add-company" class="btn-lg btn-success">Add New Company</a>
            </div>
            <div class="card-body">
              @if(Session::has('company_deleted'))
                <div class="alert alert-success" role="alert">
                {{Session::get('company_deleted')}}
              </div>
            @endif
              <table class="mx-auto table table-white"  style="width: 100%">
                <thread>
                  <tr>
                    <th>Company Name</th>
                    <th>HTML</th>
                    <th>Action</th>
                  </tr>
                </thread>
                <tbody>

                  @foreach($main as $m)
                    <tr>
                      <td>{{$m->companyname}}</td>
                      <td>{{$m->html}}</td>
                      <td>
                        <a href="/edit-company/{{$m->id}}" class=" btn-success btn-sm">Update</a>
                        <a href="/delete-company/{{$m->id}}" class="btn-danger btn-sm">Delete</a>
                        <a href="/staffmain/{{$m->id}}/" class="btn-primary btn-sm">List of Staff</a>
                        <a href="/add-person/{{$m->id}}/" class="btn-warning btn-sm">Add Person</a>
                        <a href="/adressmain/{{$m->id}}" class="btn-primary btn-sm">Companie's Address</a>
                        <a href="/add-adress/{{$m->id}}" class="btn-warning btn-sm">Add Address</a>
                      </td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </section>

@endsection
