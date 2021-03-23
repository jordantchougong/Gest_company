@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a company</h1>

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
        <form method="post" action="{{ route('companys.update', $company->id) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input name="_method" type="hidden" value="PATCH">
            <div class="form-group">

                <label for="first_name">Company Name:</label>
                <input type="text" class="form-control" name="Company_name" value={{ $company->company_name }} />
            </div>

            <div class="form-group">
                <label for="last_name">company email:</label>
                <input type="text" class="form-control" name="Company_email" value={{ $company->company_email }} />
            </div>

            <div class="form-group">
                <label for="email">company logo:</label>
                <input type="text" class="form-control" name="logo" value={{ $company->company_logo }} />
            </div>
            <div class="form-group">
                <label for="city">company_web_site:</label>
                <input type="text" class="form-control" name="website" value={{ $company->company_web_site }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection