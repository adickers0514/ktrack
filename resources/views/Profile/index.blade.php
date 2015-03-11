@extends('layouts.contentpage')

@section('simplepagecontent')



    <h1 class="colorBlack">{{ Auth::user()->firstname}}'s Profile</h1>


    <h3>Your account details:</h3>


    <p>First name: {{Auth::user()->firstname}}</p>
    <p>last name: {{Auth::user()->lastname}}</p>

    @if (Auth::user()->tshirt)
        <p>T-Shirt: {{Auth::user()->tshirt }}</p>
    @endif


    <p>Email: {{Auth::user()->email}}</p>
        <p>Phone: {{Auth::user()->phone}}</p>

    <p class="inlineParagraphPadding">
    <button type="button" class="btn btn-primary logoutbutton">Log out</button>
</p>


<script src="/js/profile.js"></script>

@stop
