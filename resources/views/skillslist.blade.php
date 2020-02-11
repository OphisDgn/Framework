@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listes des competences</div>
                    
                    <a class="btn btn-secondary" href="{{ url('/') }}">Retour</a>
                    <br />
                    <table style="padding: 10px;">
                      <tr>
                        <th> Id </th>
                        <th> Name </th>
                        <th> Biography </th>
                        <th> Niveau moyen </th>
                      </tr>
                      @foreach($skills as $sk)
                          <tr>
                            <td> {{ $sk->id }} </td>
                            <td> {{ $sk->nom }} </td>
                            <td> {{ $sk->description }} </td>
                          </tr>
                      @endforeach
                      
                    </table>
                    
            </div>
        </div>
    </div>
</div>
@endsection