@extends('layouts.app')
 @section('title')
 @section('content')

<section class="hero is-dark">
   <div class="hero-body">
     <div class="container">
       <h1 class="title">
         Welcome to add new Post
       </h1>
       <h2 class="subtitle">
         Post whatever you want !
       </h2>
     </div>
   </div>
 </section>
 <!--_______________________  columns ______________________ -->
 <div class="columns ">
   <div class="column"></div>
   <div class="column is-three-quarters">
     <br>
     <div class="card ">
       <header class="card-header">
          <p class="card-header-title">Add new Post </p>
       </header>
       <div class="card-content">
         <div class="content">
            <form method="POST" action="{{ route('posts.store') }}">
               <div class="field">
                 <label class="label">Title</label>
                 <div class="control">
                   <input class="input" type="text" placeholder="Text input">
                 </div>
              </div>
              <div class="field">
                 <label class="label">Body</label>
                 <div class="control">
                   <textarea class="textarea" placeholder="Textarea"></textarea>
                 </div>
               </div>
               <a type="submit" href="{{route('posts.index')}}" class="button is-pulled-left"> Go Back </a>
               <a type="submit" class="button is-primary is-pulled-right"> Add </a><br>
           </form>
          </div>
        </div>
    </div>
  </div>
<div class="column"></div>
</div>

@endsection
