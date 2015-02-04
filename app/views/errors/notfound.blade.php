@extends('layouts.master')

@section('body_content')
<div class="container topety">
	<div class="row center">
		<div class="col-md-12">
			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title">404</h1>
				</header>
				<div class="entry-content">
					<h2>Unfortunately the page you tried to access was unavailable due to an error.</h2>
					<p>
						Please {{ HTML::link('/', 'click here to return to the homepage.', array('rel'=>'home', 'id'=>'back')) }}					</p>
				</div>
			</article>
		</div>
	</div>
</div>
@stop