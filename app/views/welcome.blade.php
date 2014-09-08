@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="jumbotron">
      <h2>Welcome to Sugar Bug Tracker</h2>
      <br/><br/>
      <h4 class="centered">{{ link_to('/bugs/', "View Existing Tickets for Bugs") }}  |  {{ link_to('/bugs/create', "Create Ticket for a Bug") }}</h4>
    </div>
  </div>
@stop
