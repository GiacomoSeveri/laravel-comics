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