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
          <li><a href="/survey/create">Create Survey</a></li>
          <li class="active">Add Question</li>
      </ul>
      <!--breadcrumbs end -->
    </div>
    <div class="col-md-6">
      @if($errors->has())
        @foreach ($errors->all() as $error)
          <p class="text-danger"><em>{{ $error }}</em></p>  
        @endforeach
      @endif
      <h1>Add Question</h1>
      {{Form::open();}}
        <div class="form-group">
        @if(Session::has('message') && Session::has('class'))
          <div class="alert {{Session::get('class')}} alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {{Session::get('message')}}
          </div>
        @endif
          <label for="question">Question</label>
          {{ Form::text('question', null, array('class'=>'form-control', 'id'=>'question', 'placeholder'=>'Question')) }}
        </div>
        <div class="form-group">
          <label for="question_type">Question Type</label>
            {{ Form::select('question_type', [
             'select' => 'Select one below',
             'text' => 'Text',
             'textarea' => 'Textarea',
             'radio' => 'Radio Button',
             'checkbox' => 'Checkbox'],
             null, 
             ['class' => 'form-control', 'id' => 'question_type',]
            )}}
        </div>
        <div class="form-group form-g">
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
