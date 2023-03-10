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

    <section id="icon" class="my">
        <div class="container flex-icon">
            <figcaption>
                <img class="custom-img" src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                <span>DIGITAL COMICS</span>
            </figcaption>
            <figcaption>
                <img class="custom-img" src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                <span>DC MERCHANDISE</span>
            </figcaption>
            <figcaption>
                <img class="custom-img" src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                <span>SUBSCRIPTION</span>
            </figcaption>
            <figcaption>
                <img class="custom-img position" src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                <span>COMICS SHOP LOCATOR</span>
            </figcaption>
            <figcaption>
                <img class="custom-img" src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                <span>DC POWER VISA</span>
            </figcaption>
        </div>
    </section>
</main>
@endsection