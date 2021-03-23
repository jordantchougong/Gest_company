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
    <h1 class="display-3">Employe</h1>  
      <div>
    <a style="margin: 19px;" href="{{ route('employes.create')}}" class="btn btn-primary">New Employe</a>
    </div>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>first_name</td>
          <td>last_name</td>
          <td>empl_email</td>
          <td>empl_phone</td>
          <td>company_id</td>
          <td>Actions</td>
          <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($employes as $employe)
        <tr>
            <td>{{$employe->id}}</td>
            <td>{{$employe->first_name}} </td>
            <td> {{$employe->last_name}}</td>
            <td>{{$employe->empl_email}}</td>
            <td>{{$employe->empl_phone}}</td>
            <td>{{$employe->company_id}}</td>
            <td>
                <a href="{{ route('employes.edit',$employe->id)}}" class="btn btn-primary">Edit</a>
            </td>
            
            <td>
                <form action="{{ route('employes.destroy', $employe->id)}}" method="post">
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