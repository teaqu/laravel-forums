@extends('forums.master')
@section('breadcrumbs', Breadcrumbs::render('forums.all'))

@section('content')
	<h1>{{ _('View all topics') }}</h1>

	<ul class="nav nav-pills navbar-right">
		<li>{{ HTML::linkRoute('forums.topics.new', _('New topic'), ['id' => 5, 'slug' => 'general']) }}</li>
	</ul>
	@include('forums._topics', ['topics' => $topics])
	<ul class="nav nav-pills navbar-right">
		<li>{{ HTML::linkRoute('forums.topics.new', _('New topic'), ['id' => 5, 'slug' => 'general']) }}</li>
	</ul>
@stop
