<?php 
	// Write a helper for this
	$strippedPost = trim(preg_replace('/\s+/',' ', strip_tags($post->content))); 
?>
<div class="blog-article-grid">
	@if ($post->hasThumbnail())
		<div class="blog-article-grid-pic">
			<a href="{{ route('posts.show', $post)}}">
				{{ Html::image($post->thumbnail->getUrl('thumb'), $post->thumbnail->name, ['class' => 'card-img-top']) }}
			</a>
		</div>
	@endif
	<div class="blog-article-grid-info">
		<h3 v-pre >{{ link_to_route('posts.show', $post->title, $post) }}</h3>
		<ul>
			<li><p>posted on {{ humanize_date($post->posted_at, 'd F, Y') }}</p></li>
			<li>{{ link_to_route('users.show', $post->author->fullname, $post->author) }}</li>
			<li><a href="#"> Technology</a></li>
			<small class="text-muted">
				<i class="fa fa-comments-o" aria-hidden="true"></i> {{ $post->comments_count }}
				<like
					likes_count="{{ $post->likes_count }}"
					liked="{{ $post->isLiked() }}"
					item_id="{{ $post->id }}"
					item_type="posts"
					logged_in="{{ Auth::check() }}"
				>
				</like>
			</small>
			<p class="article-para">
				@if ($strippedPost>260)
					{{ substr($strippedPost, 0, strpos($strippedPost, ' ', 260))  }}...
				@else
					{{ $strippedPost }}
				@endif
			</p>
			{{ link_to_route('posts.show', 'Read More', $post) }}
		</ul>
	</div>
	<div class="clear"> </div>
</div>

