@extends('base')

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Company</h1>  
      <div>
    <a style="margin: 19px;" href="{{ route('companys.create')}}" class="btn btn-primary">New Company</a>
    </div>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>company_name</td>
          <td>company_email</td>
          <td>company_logo</td>
          <td>company_web_site</td>
          <td>Actions</td>
          <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($companys as $company)
        <tr>
            <td>{{$company->id}}</td>
            <td>{{$company->company_name}} </td>
            <td> {{$company->company_email}}</td>
            <td>{{$company->company_logo}}</td>
            <td>{{$company->company_web_site}}</td>
            <td>
                <a href="{{ route('companys.edit',$company->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('companys.destroy', $company->id)}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input name="_method" type="hidden" value="PATCH">
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

@endsection