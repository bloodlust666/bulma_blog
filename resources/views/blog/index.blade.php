@extends('layouts.app')
 @section('content')

<section class="hero is-info">
   <div class="hero-body">
      <div class="container">
        <h1 class="title is-1">welcome to the Blog</h1>
        <h2 class="subtitle">post your favorit</h2>
      </div>
   </div>
</section>
<!--_______________________  columns ______________________ -->
<br>
<div class="columns ">
<!-- Menu for different post category organisation-->
<div class="column" >
<aside class="menu ">
  @if(Auth::check())
    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li><a>Dashboard</a></li>
      <li><a href="{{route('posts.index')}}">Manage Blog posts</a></li>
    </ul>
  @endif
  <p class="menu-label">
    Top 10
  </p>
  <ul class="menu-list">
    <li><a>liked Posts</a></li>
    <li><a> Commented Posts</a></li>
    <li><a> Visited Posts</a></li>
  </ul>
</aside>
</div>
<!--_______________________ Container  for 10 post ________________________ -->
  <div class="column is-two-thirds">
    <div class="column">
    <h2 class="subtitle">Top 10 Resent Blogs</h2>
<div class="column" >
@foreach($posts as $post)
      <div class="card">
          <header class="card-header">
            <p class="card-header-title">
            <a href="#">{{$post->titre}}</a>
            </p>
          </header>
          <div class="card-content">
            <div class="content">
              {{$post->body}}
              <br>
              <time datetime="2016-1-1">{{$post->updated_at}}</time>
            </div>
          </div>
          <footer class="card-footer">
            <a href="#" class="card-footer-item">Save</a>
            <a href="#" class="card-footer-item">Edit</a>
            <a href="#" class="card-footer-item">Delete</a>
          </footer>
      </div>
@endforeach<br>
<div class="columns ">
<div class="column  is-two-fifths"></div><div class="column ">{{ $posts->links() }}</div><div class="column "></div></div>
</div>
<!--______________________________________ ** **___________________________________________________-->
<br>
      <h2 class="subtitle">Top 10 liked Blogs</h2>
<div class="column" >
        <div class="card">
            <header class="card-header">
              <p class="card-header-title">
              <a href="#">2 Blog title</a>
              </p>
            </header>
            <div class="card-content">
              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
              <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                <br>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              </div>
            </div>
            <footer class="card-footer">
              <a href="#" class="card-footer-item">Save</a>
              <a href="#" class="card-footer-item">Edit</a>
              <a href="#" class="card-footer-item">Delete</a>
            </footer>
        </div>
</div>
<!--______________________________________ ** **___________________________________________________-->
<br>
      <h2 class="subtitle">Top 10 commented Blogs</h2>
<div class="column" >
        <div class="card">
            <header class="card-header">
              <p class="card-header-title">
              <a href="#">2 Blog title</a>
              </p>
            </header>
            <div class="card-content">
              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
              <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                <br>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              </div>
            </div>
            <footer class="card-footer">
              <a href="#" class="card-footer-item">Save</a>
              <a href="#" class="card-footer-item">Edit</a>
              <a href="#" class="card-footer-item">Delete</a>
            </footer>
        </div>
</div>
<!--______________________________________ ** **___________________________________________________-->
<br>
      <h2 class="subtitle">Top 10 visited Blogs</h2>
<div class="column" >
        <div class="card">
            <header class="card-header">
              <p class="card-header-title">
              <a href="#">2 Blog title</a>
              </p>
            </header>
            <div class="card-content">
              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
              <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                <br>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
              </div>
            </div>
            <footer class="card-footer">
              <a href="#" class="card-footer-item">Save</a>
              <a href="#" class="card-footer-item">Edit</a>
              <a href="#" class="card-footer-item">Delete</a>
            </footer>
        </div>
</div>
    </div>
  </div>

<div class="column "></div>
</div>

<footer class="footer">
  <div class="container">
    <div class="content has-text-centered">
      <p>
        <strong>Blog v1</strong> by <a href="https://http://127.0.0.1:8000/blog">Lotfi jilal</a>. The source code is licensed
        <a href="https://github.com/bloodlust666/bulma_blog">MIT</a>. The website content
        is licensed <a href="https://github.com/bloodlust666">CC BY NC SA 4.0</a>.
      </p>
    </div>
  </div>
</footer>

@endsection
