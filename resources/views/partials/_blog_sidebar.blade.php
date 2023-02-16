<div class="col-lg-4">
    <div class="blog_sidebar ps-xl-4">

        <div class="widget widget_recent_entries">
            <h3 class="widget_title">Recent Posts</h3>
            <ul class="list-unstyled">
                @foreach ($posts as $post)
                <li>
                    <div class="recent_post_item">
                        <a href="blog-single.html"><img src="assets/img/blog/blog_two/recent_post1.webp"
                                alt=""></a>
                        <div class="recent_post_content">
                            <a href="blog-single.html">
                                <h5>
                                    {!! $post->title !!}
                                </h5>
                            </a>
                            <a href="blog-single.html" class="post_date">{!! $post->created_at!!}</a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- <div class="widget widget_categories">
            <h3 class="widget_title">Categories</h3>
            <ul class="list-unstyled">
                <li class="cat-item">
                    <a href="blog-single.html">Fashion <span>(24)</span></a>
                </li>
                <li class="cat-item">
                    <a href="blog-single.html">Food for thought <span>(24)</span></a>
                </li>
                <li class="cat-item">
                    <a href="blog-single.html">Gaming <span>(93)</span></a>
                </li>
                <li class="cat-item">
                    <a href="blog-single.html">Uncategorized <span>(04)</span></a>
                </li>
                <li class="cat-item">
                    <a href="blog-single.html">SaasLand <span>(24)</span></a>
                </li>
                <li class="cat-item">
                    <a href="blog-single.html">Project Management <span>(104)</span></a>
                </li>
            </ul>
        </div> -->
        <div class="widget widget_tag_cloud">
            <h3 class="widget_title">Tag Cloud</h3>
            <div class="tagcloud">
                @foreach ($tags as $tag)
                    <a href="#">
                        {!! $tag->title !!}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>