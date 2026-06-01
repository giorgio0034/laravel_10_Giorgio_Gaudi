   <x-layout>



<x-display-message/>


  <x-display-errors/>




 <x-masthead title="Modifica Articolo: {{ $article->title }}"></x-masthead>



        <div class="container">
            <div class="row justify-content-center align-items-center mt-5">
                <div class="col-12 col-md-6">

                    <h2>Iscriviti</h2>
                    <form class="rounded-4 shadow bg-warning p-3" action="{{ route('article.update', compact('article')) }}" method="POST" enctype="multipart/form-data">  {{-- Inserire Enctype quando vogliamo inserire dati più complessi --}}

                        @method('PUT'){{-- Override del metodo quindi sovrascrivendo il metodo originale che era POST,Spoofing --}}
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo Articolo</label>
                            <input name="title" type="text" value="{{$article->title}}" class="form-control" id="title"
                            aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                        <label for="subtitle" class="form-label">sottotitolo</label>
                        <input name="subtitle" type="text" value="{{$article->subtitle}}"class="form-control" id="subtitle"
                        aria-describedby="emailHelp">
                         </div>
                        <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                        <textarea name="body"  class="form-control" id="body"
                        aria-describedby="emailHelp">{{$article->body}}</textarea>
                         </div>
                        <div class="mb-3">
                        @foreach($tags as $tag)
                         <div class="form-check">
                            <input class="form-check-input" name="tags[]" type="checkbox" value="{{$tag->id }}" id="checkDefault" @if ($article->tags->contains($tag)) checked @endif>
                            <label class="form-check-label" for="checkDefault">
                                {{ $tag->name }}
                            </label>
                        </div>
                        @endforeach


                        <span class="form-label">Immagine attuale </span>
                        <img src="{{Storage::url($article->img)  }}" alt="{{ $article->title }}" width="400" height="200" srcset="">

                        </div>
                        <div class="mb-3">
                        <label for="img" class="form-label">inserisci immagine </label>
                        <input name="img" type="file" class="form-control" id="img">
                        </div>
                        <button type="submit" class="btn btn-primary">Modifica Articolo</button>
                    </form>
                </div>
            </div>
        </div>

    </x-layout>
