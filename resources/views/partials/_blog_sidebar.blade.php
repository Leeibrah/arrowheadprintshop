<!-- SIDEBAR -->
<div class="sidebar col-md-3">
	<!-- SEARCH WIDGET -->
	<!-- <div class="widget search-widget">
		<h6 class="widget-title">Search this site</h6>
		<form>
			<div class="form-group">
				<input type="text" class="form-control" id="search" placeholder="Enter your keyword...">
			</div>
		</form>
	</div> -->
	<!-- /. SEARCH WIDGET -->
	
	<!-- RECENT POST WIDGET -->
	<div class="widget recent-widget">
		<!-- WIDGET TITLE -->
		<h6 class="widget-title">Recent posts</h6>
		
		<!-- ARTICLE -->
		@foreach ($posts as $post)
		<article class="post post-list media hv-wrapper">
			<div class="media-left">
				<!-- POST THUMB -->
				<div class="post-thumbnail overlay-container">
					<!-- POST IMG -->
					<a href="#">
						<div class="dark-overlay"></div>
						<img src="{!! page_image($post->page_image) !!}" class="media-object" alt="post-img">
					</a>
				</div>
			</div>
			<div class="media-body">
				<!-- POST TITLE -->
				<h6 class="post-title">
					<a href="#">
						{!! $post->title !!}
					</a>
				</h6>
				<!-- POST DATE -->
				<p class="post-date">
					{!! $post->published_at->format('F j, Y') !!}
				</p>
			</div>
		</article>
		@endforeach
		<!-- /. ARTICLE -->
		
	</div><!-- /. RECENT POST  -->
	
	<!-- MENU WIDGET -->
	<div class="widget menu-widget">
		<!-- WIDGET TITLE -->
		<h6 class="widget-title">Tags</h6>
		<ul>

			@foreach ($posts as $post)
				@if ($post->tags->count())
	                <li>
						<a href="#">
							{!! join(', ', $post->tagLinks()) !!}
						</a>
					</li>
	            @endif
            @endforeach
			
		</ul>
	</div>
	<!-- /. MENU WIDGET -->
	
	
</div>
<!-- /. SIDEBAR -->