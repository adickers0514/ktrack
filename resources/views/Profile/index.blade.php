@extends('layouts.contentpage')

@section('simplepagecontent')



    <h1 class="colorBlack">{{ Auth::user()->firstname}}'s Profile</h1>


    <p>We're still building functionality here. Check back for more soon.</p>


    <p>First name: {{Auth::user()->firstname}}</p>
    <p>last name: {{Auth::user()->lastname}}</p>
    <p>birth date: {{Auth::user()->birthdate}}</p>
    <p>Email: {{Auth::user()->email}}</p>
        <p>Phone: {{Auth::user()->phone}}</p>

    <p class="inlineParagraphPadding">
    <button type="button" class="btn btn-primary logoutbutton">Log out</button>
</p>


<script src="/js/profile.js"></script>

@stop
