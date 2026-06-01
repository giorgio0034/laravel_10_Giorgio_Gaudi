<x-layout>

 <x-masthead title="I miei Articoli"></x-masthead>



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
                    @if(($article->tags->isNotEmpty()))
                    <div class=mb-3>
                        @foreach($article->tags as $tag)
                    <span class="badge text-bg-primary">#{{ $tag->name }}</span>
                    @endforeach
                    </div>
                     @endif


                    <a href="{{ route('article.show',compact('article')) }}" class="btn btn-primary"> Dettaglio Articolo </a>

                    @auth
                    <a href="{{ route('article.edit',compact('article')) }}" class="btn btn-warning"> Modifica  </a>


                    <form
                     action="{{ route('article.destroy',compact('article'))}}" method="POST">

                     @method('DELETE')
                     @csrf
                     <button class="btn btn-danger" type="submit">Elimina  </button>
                    @endauth

                </div>
            </div>

        </div>
@endforeach

    </div>

</div>










</x-layout>
