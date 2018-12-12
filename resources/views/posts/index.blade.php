@extends('layouts.app')

@section('content')

@include ('posts/_search_form')

<div class="blog-articles">
	<div class="wrap">
		<div class="content-top-header">
			@if (request()->has('q'))
			<h2>{{ trans_choice('posts.search_results', $posts->count(), ['query' => request()->input('q')]) }}</h2>
			@else
			<h2>@lang('posts.last_posts')</h2>
			@endif
		</div>
		<div class="clear"> </div>
		@include ('posts/_list')
	</div>
</div>

@endsection
