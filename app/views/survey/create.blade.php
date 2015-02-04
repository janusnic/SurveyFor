@extends('layouts.master')

@section('header')
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">SurveyFor</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">SurveyFor</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth:: user()->username;}} <b class="caret"></b></a>
          <ul class="dropdown-menu">
            @if(Auth::check())
                <li>{{ HTML::link('#', 'Edit Profile') }}</li>  
                <li>{{ HTML::link('users/logout', 'logout') }}</li>  
            @endif
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
@stop

@section('body_content')

<div class="container topety">
  <div class="row">
    <div class="col-md-12">
      <!--breadcrumbs start -->
      <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li class="active">Create Survey</li>
      </ul>
      <!--breadcrumbs end -->
    </div>
    <div class="col-md-6">
      <h1>Create Survey</h1>
      {{Form::open(array('url' => 'survey/create', 'method' => 'post'));}}
        <div class="form-group">
          <label for="title">Survey Title</label>
          {{ Form::text('title', null, array('class'=>'form-control', 'id'=>'title', 'placeholder'=>'Survey Title')) }}
          @if($errors->has())
          <p class="text-danger"><em>{{ $errors->first('title', ':message') }}</em></p>
          @endif
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          {{ Form::textarea('description', null, array('class'=>'form-control', 'id'=>'description', 'placeholder'=>'Enter Description')) }}
           @if($errors->has())
          <p class="text-danger"><em>{{ $errors->first('description', ':message') }}</em></p>
          @endif
        </div>
        <div class="form-group">
          <input type="submit" class="form-control" id="submit_button">
        </div>
      {{Form::close();}}
    </div>
  </div>
</div>
@stop

@section('footer')
<div id="footer">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <a class="" href="/">SurveyFor</a>
      </div>
      <div class="col-md-12">
        <p><small>COPYRIGHT © SurveyFor 2014</small></p>
      </div>
    </div>
    </div>
</div>
@stop