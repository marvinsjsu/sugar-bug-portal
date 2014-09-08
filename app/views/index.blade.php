@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-xs-7">
      <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th class="number">No.</th>
            <th class="subject">Subject</th>
            <th class="status">Status</th>
            <th class="type">Type</th>
            <th class="priority">Priority</th>
            <th class="controls">Controls</th>
          </tr>
        </thead>
      </table>
      <div class="table-scroll">
        <table class="table table-striped table-hover ">
          <tbody>
            @foreach ($bugs as $bug)
              <tr class="warning">
                <td class="number"><a href="/bugs/{{$bug->id}}" data-id="/bugs/{{$bug->id}}">{{$bug->number}}</a></td>
                <td class="subject"><a href="/bugs/{{$bug->id}}" data-id="/bugs/{{$bug->id}}">{{$bug->subject}}</a></td>
                <td class="status">{{$bug->status}}</td>
                <td class="type">{{$bug->type}}</td>
                <td class="priority">{{$bug->priority}}</td>
                <td class="controls"><a href="" data-id="{{$bug->id}}"><img class="controls" src={{asset('images/eye.png')}}></a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-xs-5">
      <h4>Details</h4>
      <br/>
      <div id="bug-details" class="well">

      </div>
    </div>
  </div>
@stop
