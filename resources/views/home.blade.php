@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">MENU PRINCIPAL<div class="text-right">Bienvenue {{ Auth::user()->name }}!</div></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    


                    <div>
                        <a style="margin: 19px;" href="{{ route('employes.index')}}" class="btn btn-primary">GESTION DES EMPLOYES</a>
                        <a style="margin: 19px;" href="{{ route('companys.index')}}" class="btn btn-danger">GESTION DES ENTREPRISES</a>
                    </div>      

                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
