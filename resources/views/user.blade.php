@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Informations</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    
                    <h2> Utilisateurs </h2>
                    <p> Id : {{ $user->id }} </p>
                    <p> First Name : {{ $user->firstname }} </p>
                    <p> Last Name : {{ $user->lastname }} </p>
                    <p> E-mail : {{ $user->email }} </p>
                    
                    <h2> Competences </h2>
                    
                    
                    
                    <a class="btn btn-dark" href="{{ route('adding') }}"> Ajouter</a>
                    <a class="btn btn-dark" href="#"> Modifier</a>
                    <a class="btn btn-dark" href="#"> Supprimer</a>
                    <a class="btn btn-dark" href="{{ url('/home') }}">Retour</a>
                    
            </div>
        </div>
    </div>
</div>
@endsection