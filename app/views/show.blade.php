@extends('layouts.master')

@section('content')

  <div class="panel panel-default main-bug-panel">
    <div class="panel-heading">
      <h3 class="panel-title">Subject:  <span class="subject-title">{{$bug->subject}}</span></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-xs-6">
          <div class="panel panel-default bug-info">
            <div class="panel-heading">Bug Number</div>
            <div class="panel-body">
              <p>{{$bug->number}}</p>
            </div>
          </div>
          <div class="panel panel-default bug-info">
            <div class="panel-heading">Priority</div>
            <div class="panel-body">
              <p>{{$bug->priority}}</p>
            </div>
          </div>
          <div class="panel panel-default bug-info">
            <div class="panel-heading">Status</div>
            <div class="panel-body">
              <p>{{$bug->status}}</p>
            </div>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="panel panel-default bug-info">
            <div class="panel-heading">Type</div>
            <div class="panel-body">
              <p>{{$bug->type}}</p>
            </div>
          </div>
          <div class="panel panel-default bug-info">
            <div class="panel-heading">Category</div>
            <div class="panel-body">
              <p>{{$bug->category}}</p>
            </div>
          </div>
          <div class="panel panel-default bug-info">
            <div class="panel-heading">Resolution</div>
            <div class="panel-body">
              <p>{{$bug->resolution}}</p>
            </div>
          </div>
          <div class="panel panel-default bug-info">
            <div class="panel-heading">Description</div>
            <div class="panel-body">
              <p>{{$bug->description}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
