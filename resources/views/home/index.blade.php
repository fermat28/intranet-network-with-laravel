@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
       <center> <h1>Dashboard</h1>
        <p class="lead">Welcome Back {{Auth::user()->username}}</p></center>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Bienvenue à la DevBattle , Veuillez vous connecter ou creer un compte pour acceder à la plateforme</p>
        @endguest
    </div>
@endsection
