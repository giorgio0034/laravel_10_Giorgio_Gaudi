<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('trainee.list')}}">i Nostri Iscritti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">i miei articoli</a>
        </li>
@auth
{{-- Sarà visibile solo se l'utente è autenticato --}}
    <li class="nav-item">
          <a class="nav-link" href="{{route('trainee.subscribe')}}">Per iscriversi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">Crea Articolo</a>
        </li>
@endauth

@guest
{{-- Sarà visibile solo se l'utente non è autenticato --}}
@endguest




{{-- @dd(Auth::user()->email) --}}

{{-- Se l'utente non è autenticato --}}
        {{-- @if(!Auth::user()) --}}
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>

           <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Accedi</a>
        </li>
        @endguest

        {{-- @if(Auth::user()) --}}
        @auth
             <li class="nav-item">
          <a class="nav-link" href="#">Benvenut* Mario{{ Auth::user()->name }}</a>
        </li>
        <li class="nav-item">
          <form
          action="{{route('logout')}}"
          method="POST">
          @csrf
          <button class="nav-link" type="submit">Logout</button>
        </form>
        </li>
        @endauth
    </div>
  </div>
</nav>
