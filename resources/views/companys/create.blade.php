@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a company</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('companys.store') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">    
              <label for="first_name">Company Name:</label>
              <input type="text" class="form-control" name="Company_name"/>
          </div>

          <div class="form-group">
              <label for="last_name">company email:</label>
              <input type="text" class="form-control" name="Company_email"/>
          </div>

          <div class="form-group">
              <label for="email">company logo:</label>
              <input type="text" class="form-control" name="logo"/>
          </div>
          <div class="form-group">
              <label for="city">company_web_site :</label>
              <input type="text" class="form-control" name="website"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add company</button>
      </form>
  </div>
</div>
</div>
@endsection