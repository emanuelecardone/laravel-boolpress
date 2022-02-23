@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="row row-cols-1">
            <div class="col">
                <div class="single_post_wrapper w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="fs-1 text-uppercase mb-5">{{$post->title}}</h2>

                    <h3 class="mb-3 fw-bold">Slug: {{$post->slug}}</h3>

                    <p class="fs-3">{{$post->content}}</p>

                    <div>
                        <a class="btn btn-primary my-3" href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Edit</a>
                    </div>
            
                    <div>
                        <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
            
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>    
@endsection