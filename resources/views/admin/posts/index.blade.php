@extends('layouts.dashboard')

@section('content')
    <section>
        <h2>All posts</h2>

        <div class="row row-cols-2 g-5">
            @forelse ($posts as $post)
                <div class="col">
                    <div class="post_wrapper w-100 h-100 d-flex align-items-center">
                        <div class="card border border-2 border-dark">
                            {{-- <img src="..." class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <p class="card-text">{{Str::substr($post->content, 0, 50)}}</p>
                                <a href="{{route('admin.posts.show', ['post' => $post->id])}}" class="btn btn-secondary">Show</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h2>No posts were found</h2>
            @endforelse
        </div>
    </section>    
@endsection