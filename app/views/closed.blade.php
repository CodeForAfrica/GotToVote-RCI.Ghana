@extends('layouts.frontend')

@section('top-nav')
  <li><a href="/">Home</a></li>
  <li class="active"><a href="/verify"><b>VERIFY</b></a></li>
  <li><a href="/about">About</a></li>
@stop

@section('content')

  <div class="marketing text-center">
    <div class="page-header">
      <h2>Verification is Closed</h2>
    </div>
    <p class="lead">Thank you for visiting GotToVote. Verification is closed at the moment.</p>
    <p><a href="/about" class="btn btn-lg btn-info">Go To About</a></p>

    <br /><br />


  </div>

@stop

@section('footer-top')
  <div class="container">
    <hr />
  </div>
@stop
