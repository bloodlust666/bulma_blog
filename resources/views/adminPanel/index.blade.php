@extends('layouts.app')
 @section('title')
 @section('content')

<section class="hero is-dark">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Welcome to Admin panel
      </h1>
      <h2 class="subtitle">
        Do whatever you want !
      </h2>
    </div>
  </div>
</section>
<!--_______________________  columns ______________________ -->
<div class="columns ">
  <div class="column"></div>
  <div class="column is-three-quarters" >
   <br>
     <a class="button is-outlined is-pulled-right is-primary" href="{{route ('posts.create') }}">Add new blog</a><br>
     <table class="table table is-fullwidth is-bordered is-striped is-narrow is-hoverable is-fullwidth "><br>
       <thead>
         <th>id</th>
         <th>title</th>
         <th>body</th>
         <th>edit</th>
         <th>delete</th>
       </thead>
       <tbody>
          @foreach($posts as $post)
          <tr>
         <th>{{$post->id}}</th>
         <td>{{$post->titre}}</td>
         <td>{{$post->body}}</td>
         <td><a class="button is-outlined is-info " href="#">Edit</a></td>
         <td><a class="button is-outlined is-danger" href="#">Delet</a></td>
       </tr>
         @endforeach
       </tbody>
     </table>
  </div>
  <div class="column"></div>

</div>

 @endsection
