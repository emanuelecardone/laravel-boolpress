@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <h1>Benvenuto/a {{ $user->name }} </h1>
        </div>
    </section>
@endsection