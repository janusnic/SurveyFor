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
<div class="jumbotron">
	<div class="container topforty">
	  <h1>Hello, world!</h1>
	  <div class="row">
	  	<div class="col-md-8">
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		  <p>{{ HTML::linkRoute('register', 'SIGN UP FOR FREE', array(), array('class' => 'btn btn-primary btn-lg','role' => 'button')) }}</p>
	  	</div>
	  </div>
	  
  </div>
</div>
@stop

@section('body_content')

<div class="container topforty">
	<div class="row usage">
	  <div class="col-sm-6 col-md-4 col-md-offset-2">
	  	<h3>Anywhere Any Device</h3>
	  	<p>QuotedFor is an online on-demand quotation tool. No need 
	  	to wait to get back to the office, create quotations from 
	  	your mobile phone or table device whilst on-site, on the 
	  	move or having a coffee break.</p>
	  </div>
	  <div class="col-sm-6 col-md-4">
	  	<img src="img/cross-device1.png" class="img-responsive">
	  </div>
	</div>
	<div class="row usage">
	  <div class="col-sm-6 col-md-4 col-md-offset-2">
	  	<img src="img/time-money1.png" class="img-responsive">
	  </div>
	  <div class="col-sm-6 col-md-4">
	  	<h3>Save Time and Money</h3>
	  	<p>No more pulling together Word documents, scraps of paper
	  	 or re-typing details from old surveys. Simply create your
	  	 survey and publish to your audience with a click.
	  	 </p>
	  	 <p>SurveyFor isn't part of a larger accounts package, its 
	  	 a dedicated survey tool with an interface built for speed 
	  	 and simplicity. We are all about getting surveys produced and 
	  	 back to users as quickly as possible, without sacrificing quality.</p>
	  </div>
	</div>
	<div class="row usage">
	  <div class="col-sm-6 col-md-4 col-md-offset-2">
	  	<h3>See your Results</h3>
	  	<p>Get stats on published surveys, the result from
	  	surveys taken and gives you a visualization of your result in pies chart. 
	  	SurveyFor offers a 360 degree view of your survey efforts.</p>
	  </div>
	  <div class="col-sm-6 col-md-4">
	  	<img src="img/reporting-graph1.png" class="img-responsive">
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