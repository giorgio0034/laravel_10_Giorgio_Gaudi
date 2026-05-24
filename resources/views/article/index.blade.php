<x-layout>

    <header class="header d-flex align-items-center">

        <div class="container">
            <div class="row justify-content-center align-items-center mt-5">
                <div class="col-12 col-md-6">
                    <h1 class="text-center">I miei articoli</h1>
                </div>
            </div>
        </div>

 </header>




<x-display-message/>


  <x-display-errors/>





<div class="container">
    <div class="row g-4 my-5">
        @foreach($articles as $article)
        <div class="col-12 col-md-4">
            <div class="card trainee-card gy-5" style="width: 18rem;" >

                <img src="{{Storage::url($article->img)}}" class= "rounded-circle profile-img">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-subtitle">{{ $article->subtitle }}</p>
                    <p class="card-text">{{ $article->body}}</p>
                    <a href="{{ route('article.show',compact('article')) }}" class="btn btn-primary"> Dettaglio Articolo </a>
                    <a href="{{ route('article.edit',compact('article')) }}" class="btn btn-warning"> Modifica  </a>


                    <form
                     action="{{ route('article.destroy',compact('article'))}}" method="POST">

                     @method('DELETE')
                     @csrf
                     <button class="btn btn-danger" type="submit">Elimina  </button>


                </div>
            </div>

        </div>
@endforeach

    </div>

</div>










</x-layout>
