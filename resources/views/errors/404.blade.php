@extends('layouts.master')

@section('bodytag')

  <body id='errorpage'>

@endsection

@section('content')

  <h2>Error 404!</h2>
  <hr />
  <p>Sorry, there isn't anything here yet. The only pages that were created for the final project were:</p>
  <ul>
      <li><a href="/p4/public/">Home</a></li>
      <li><a href="/p4/public/profile">Profile</a></li>
      <li><a href="/p4/public/location">Locations (a store profile)</a></li>
  </ul>

@endsection
