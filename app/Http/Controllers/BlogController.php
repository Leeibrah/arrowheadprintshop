<?php

namespace App\Http\Controllers;

use App\Jobs\BlogIndexData;
use App\Http\Requests;
use App\Post;
use App\Services\RssFeed;
use App\Services\SiteMap;
use App\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(Request $request)
    {
        $page_title = "Vinestalk Credit Kenya Limited | Your Credit and Financial Consultancy Partner";
        $page_description = "Vinestalk :: Home Page";
        
        $tag = $request->get('tag');
        $data = $this->dispatch(new BlogIndexData($tag));
        $layout = $tag ? Tag::layout($tag) : 'pages.blog.index';
        

        return view($layout, $data, compact('page_title', 'page_description'));
    }

    public function indexp(Request $request)
    {
        
        $tag = $request->get('tag');
        $data = $this->dispatch(new BlogIndexData($tag));
        $layout = $tag ? Tag::layout($tag) : 'blog.layouts.index';

        return view($layout, $data, compact('page_title', 'page_description'));
    }

    public function showPost($slug, Request $request)
    {
        $page_title = "Vinestalk Credit Kenya Limited | Your Credit and Financial Consultancy Partner";
        $page_description = "Vinestalk :: Blog";

        // $post = Post::whereSlug($slug)->firstOrFail();
        $post = Post::with('tags')->whereSlug($slug)->firstOrFail();
        $tag = $request->get('tag');
        if ($tag) {
            $tag = Tag::whereTag($tag)->firstOrFail();
        }

        return view('pages.blog.post', compact('page_title', 'page_description', 'post', 'tag'));
        // return view($post->layout, compact('post', 'tag'));
    }

    public function rss(RssFeed $feed)
    {
        $rss = $feed->getRSS();

        return response($rss)
            ->header('Content-type', 'application/rss+xml');
    }

    public function siteMap(SiteMap $siteMap)
    {
        $map = $siteMap->getSiteMap();

        return response($map)
            ->header('Content-type', 'text/xml');
    }
}
