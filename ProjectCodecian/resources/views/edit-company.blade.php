@extends('front.master')
@section('content')
    <section style="padding-top:200px;">
      <div class="container" style="padding-bottom:275px;">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
            <div class="card-header">
              Update Company
            </div>
            <div class="card-body">
              @if(Session::has('company_updated'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('company_updated')}}
                </div>
              @endif
              <form method="POST" action="{{route('company.update')}}">
                @csrf
                <input type="hidden" name="id" value="{{$companies->id}}" />
                <div class="form-group">
                  <label for="title">Post Company</label>
                  <input type="text" name="companyname" class="form-control" placeholder="Enter Company Name" value="{{$companies->companyname}}" />
                </div>
                <div class="form-group">
                  <label for="body">Post HTML</label>
                  <input type="text" name="html" class="form-control" placeholder="Enter Company HTML" value="{{$companies->html}}" />
                </div>
                <button type="submit" class="btn-lg btn-success">Update</button>  <a href="/main#list" class="btn-lg btn-info">Back to List</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   </section>
@endsection
