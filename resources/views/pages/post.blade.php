@extends('layouts.app')

@section('content')
<div class="container">
    <artical class="card post-single">
                   <!-- image -->
      <div class="img-container" style="background-image: url('{{$post->image}}')">

      </div>
                   <!-- card cotnent -->
     <div class="card-content">

                   <!-- title -->
     <header class="post-header">
         <h1>{{$post->title}}</h1>

            <!-- byline -->
         <div class="byline">
             {{$post->author->name}}
         </div>
     </header>




                   <!-- show of hide if premium post -->


                   <!-- content -->

                   {!! $post->content !!}

      </div>
    </artical>
</div>

@endsection('content')