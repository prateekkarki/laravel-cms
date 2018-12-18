@extends('layouts.app')

@section('content')


<div class="slider">
    <div class="wrap"> 
        <div class="slider-left">
            <h1>Laravel Blog Demo</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <label>Join our mailling list!</label>
            <form>
                <input type="text" class="textbox" value="Email address.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address..';}"><input type="submit" value="Sign up" />
            </form>
        </div>
        <div class="slider-right">
            <img src="{{ asset('images/slider-img.png') }}" alt="" />
        </div>
        <div class="clear"> </div>
    </div>
</div>

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
