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
        <li><a href="#">About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
          <ul class="dropdown-menu" id="login-form">
            {{Form::open(array('url' => 'login', 'method' => 'post'));}}
			  <div class="form-group">
			    <label for="email">Email address</label>
			    {{ Form::text('email', null, array('class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email Address')) }}
			  </div>
			  <div class="form-group">
			    <label for="Password">Password</label>
			    {{ Form::password('password', array('class'=>'form-control', 'id'=>'password', 'placeholder'=>'Password')) }}
			  </div>
			  <div class="checkbox">
		        <label>
		        	{{ Form::checkbox('remember', "true") }}
		        	Remember me.
		        </label>
		      </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			{{Form::close();}}
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
@stop

@section('slider')

@stop

@section('body_content')
<div class="container topety">
	<div class="row">
		<div class="col-md-6 col-md-offset-6">
			{{Form::open(array('url' => 'users/register', 'method' => 'post'));}}
			@if(Session::has('message') && Session::has('class'))
			  <div class="alert {{Session::get('class')}} alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{Session::get('message')}}
			  </div>
			@endif
			  <h1>Register</h1>
			  <div class="form-group">
			    <label for="username">Username</label>
			    {{ Form::text('username', null, array('class'=>'form-control', 'id'=>'username', 'placeholder'=>'Enter Username')) }}
			    @if($errors->has())
			    <p class="text-danger"><em>{{ $errors->first('username', ':message') }}</em></p>
			    @endif
			  </div>
			  <div class="form-group">
			    <label for="email">Email address</label>
			    {{ Form::text('email', null, array('class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email Address')) }}
			    @if($errors->has())
			    <p class="text-danger"><em>{{ $errors->first('email', ':message') }}</em></p>
			    @endif
			  </div>
			  <div class="form-group">
			    <label for="Password1">Password</label>
			    {{ Form::password('password1', array('class'=>'form-control', 'id'=>'Password1', 'placeholder'=>'Password')) }}
			    @if($errors->has())
			    <p class="text-danger"><em>{{ $errors->first('password1', ':message') }}</em></p>
			    @endif
			  </div>
			  <div class="form-group">
			    <label for="Password2">Retype Password</label>
			    {{ Form::password('password2', array('class'=>'form-control', 'id'=>'Password2', 'placeholder'=>'Retype Password')) }}
			    @if($errors->has())
			    <p class="text-danger"><em>{{ $errors->first('password2', ':message') }}</em></p>
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