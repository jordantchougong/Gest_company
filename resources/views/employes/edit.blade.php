@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a employe</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('employes.update', $employe->id) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input name="_method" type="hidden" value="PATCH">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $employe->first_name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $employe->last_name }} />
            </div>

            <div class="form-group">
                <label for="email">employe email:</label>
                <input type="text" class="form-control" name="email" value={{ $employe->empl_email }} />
            </div>
            <div class="form-group">
                <label for="city">employe phone :</label>
                <input type="text" class="form-control" name="phone" value={{ $employe->empl_phone }} />
            </div>
            <div class="form-group">
              <label for="city">company_id :</label>
              <input type="text" class="form-control" name="id_company" value={{ $employe->company_id }} />
          </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection