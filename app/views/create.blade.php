@extends('layouts.master')

@section('content')
<form class="form-horizontal col-xs-10">
  <fieldset>
    <legend>Create Bug</legend>
    <div class="form-group">
      <label for="subject" class="col-lg-1 control-label">Subject</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="subject" name="bug[subject]" placeholder="subject" required>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-5 col-xs-offset-1">
        <div class="form-group">
          <label for="status" class="col-lg-2 control-label">Status</label>
          <div class="col-lg-10">
            <select class="form-control" id="status" name="bug[status]">
              <option value="New">New</option>
              <option value="Assigned">Assigned</option>
              <option value="Closed">Closed</option>
              <option value="Pending">Pending</option>
              <option value="Rejected">Rejected</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="source" class="col-lg-2 control-label">Source</label>
          <div class="col-lg-10">
            <select class="form-control" id="source" name="bug[source]" placeholder="select ... ">
              <option value=" "> </option>
              <option value="Internal">Internal</option>
              <option value="Forum">Forum</option>
              <option value="Web">Web</option>
              <option value="Email">Email</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="resolution" class="col-lg-2 control-label">Resolution</label>
          <div class="col-lg-10">
            <select class="form-control" id="resolution" name="bug[resolution]" placeholder="select ... ">
              <option value=" "> </option>
              <option value="Accepted">Accepted</option>
              <option value="Duplicate">Assigned</option>
              <option value="Fixed">Closed</option>
              <option value="Out of Date">Pending</option>
              <option value="Invalid">Rejected</option>
              <option value="Later">Later</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-xs-5">
        <div class="form-group">
          <label for="priority" class="col-lg-2 control-label">Priority</label>
          <div class="col-lg-10">
            <select class="form-control" id="priority" name="bug[priority]">
              <option value="Urgent">Urgent</option>
              <option value="High">High</option>
              <option value="Medium">Medium</option>
              <option value="Low">Low</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="type" class="col-lg-2 control-label">Type</label>
          <div class="col-lg-10">
            <select class="form-control" id="type" name="bug[type]">
              <option value="Defect">Defect</option>
              <option value="Feature">Feature</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="category" class="col-lg-2 control-label">Category</label>
          <div class="col-lg-10">
            <select class="form-control" id="category" name="bug[category]">
              <option value=" "> </option>
              <option value="Accounts">Account</option>
              <option value="Activities">Activities</option>
              <option value="Bug Tracker">Bug Tracker</option>
              <option value="Calendar">Calendar</option>
              <option value="Calls">Calls</option>
              <option value="Campaigns">Campaigns</option>
              <option value="Cases">Cases</option>
              <option value="Contacts">Contacts</option>
              <option value="Currencies">Currencies</option>
              <option value="Dashboard">Dashboard</option>
              <option value="Documents">Documents</option>
              <option value="Emails">Emails</option>
              <option value="Campaigns">Feeds</option>
              <option value="Forecasts">Forecasts</option>
              <option value="Help">Help</option>
              <option value="Home">Home</option>
              <option value="Leads">Leads</option>
              <option value="Meetings">Meetings</option>
              <option value="Opportunities">Opportunities</option>
              <option value="Outlook Plugin">Outlook Plugin</option>
              <option value="Product Catalog">Product Catalog</option>
              <option value="Quoted Line Items">Quoted Line Items</option>
              <option value="Revenue Line Items">Revenue Line Items</option>
              <option value="Quotes">Quotes</option>
              <option value="Releases">Releases</option>
              <option value="RSS">RSS</option>
              <option value="Studio">Studio</option>
              <option value="Upgrade">Upgrade</option>
              <option value="Users">Users</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="description" class="col-lg-1 control-label">Description</label>
      <div class="col-lg-10">
        <textarea class="form-control" id="description" name="bug[description]" rows="7" cols="15">
        </textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-5 col-lg-offset-1">
        <button class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

@stop
