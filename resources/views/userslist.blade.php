@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listes des utilisateurs</div>
                    
                    <a class="btn btn-secondary" href="{{ url('/users') }}">Retour</a>
                    <br />
                    <table style="padding: 10px;">
                      <tr>
                        <th> Id </th>
                        <th> First name </th>
                        <th> Last name </th>
                        <th> E-mail </th>
                      </tr>
                      @foreach($user as $us)
                          <tr>
                            <td> {{ $us->id }} </td>
                            <td> {{ $us->firstname }} </td>
                            <td> {{ $us->lastname }} </td>
                            <td> {{ $us->email }} </td>
                          </tr>
                      @endforeach
                      
                    </table>
                    
            </div>
        </div>
    </div>
</div>
@endsection