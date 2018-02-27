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
<!-- Container  for 10 post -->
  <div class="column is-two-thirds">
    <div class="column">
    <h2 class="subtitle">Top 10 Resent Blogs</h2>
      <div class="card">
          <header class="card-header">
            <p class="card-header-title">
            <a href="#">1 Blog title</a>
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
<!--______________________________________ ** **___________________________________________________-->
<br>
      <h2 class="subtitle">Top 10 Resent Blogs</h2>
        <div class="card">
            <header class="card-header">
              <p class="card-header-title">
              <a href="#">1 Blog title</a>
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

<div class="column "></div>
</div>




@endsection
