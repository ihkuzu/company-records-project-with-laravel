@extends('front.master')
@section('content')
    <section class="mx-auto " style="padding-top:200px;">
      <div class="container" style="padding-bottom:275px;">
        <div class=" row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
            <div class="card-header">
              Add Company
            </div>
            <div class="card-body">
              @if(Session::has('company_created'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('company_created')}}
                </div>
              @endif
              <form method="POST" action="{{route('company.create')}}">
                @csrf
                <div class="form-group">
                  <label for="title">Post Company</label>
                  <input type="text" name="companyname" class="form-control" placeholder="Enter Company Name" />
                </div>
                <div class="form-group">
                  <label for="body">Post HTML</label>
                  <input type="text" name="html" class="form-control" placeholder="Enter Company HTML" />
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
