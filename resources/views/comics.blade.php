@extends('layouts/app')

@section('title', 'comics')

@section('content')
<main>
    <section id="comics" class="my">

        <div class="container">
            <ul>
                @foreach($comics as $comic)
                <li>
                <figure>
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </figure>
                    <p>{{$comic['title']}}</p>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="text-center">
            <button type="button" class="">SING-UP NOW</button>
        </div>
    </section>
</main>
@endsection