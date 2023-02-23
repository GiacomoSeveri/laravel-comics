<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    <title>{{ env('APP_NAME') }} | comics</title>

    @vite('resources/js/app.js')

</head>

<body>
    <header class="my">
        <div class="container flex-header">
            <figure>
                <img src="{{ asset('img/dc-logo.png') }}" alt="">
            </figure>
            <ul>
                <li><a href="{{  route('characters')  }}">CHARACTERS</a></li>
                <li><a href="{{  url('/')  }}">COMICS</a></li>
                <li><a href="{{  route('movies')  }}">MOVIES</a></li>
                <li><a href="{{  route('tv')  }}">TV</a></li>
                <li><a href="{{  route('games')  }}">GAMES</a></li>
                <li><a href="{{  route('collectibles')  }}">COLLECTIBLES</a></li>
                <li><a href="{{  route('videos')  }}">VIDEOS</a></li>
                <li><a href="{{  route('fans')  }}">FANS</a></li>
                <li><a href="{{  route('news')  }}">NEWS</a></li>
                <li><a href="{{  route('shop')  }}">SHOP</a></li>
            </ul>
            <input type="text" name="serch" placeholder="serch">
        </div>
    </header>

    <main class="my">
        <div class="container text-center">
            <h1>COMICS</h1>
            <p>bellissimi</p>
        </div>
    </main>

    <footer class="my">
        <div class="container flex-footer">
            <button type="button" class="">SING-UP NOW</button>
            <div class="flex-footer">
                <p>FOLLOW US</p>
                <img src="{{ asset('img/footer-facebook.png') }}" alt="">
                <img src="{{ asset('img/footer-twitter.png') }}" alt="">
                <img src="{{ asset('img/footer-youtube.png') }}" alt="">
                <img src="{{ asset('img/footer-pinterest.png') }}" alt="">
                <img src="{{ asset('img/footer-periscope.png') }}" alt="">
            </div>
        </div>
    </footer>
</body>

</html>