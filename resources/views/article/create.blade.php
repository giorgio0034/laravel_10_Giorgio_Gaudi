    <x-layout>

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        {{-- Snipped codice per creare errori di validazione --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <header class="header d-flex align-items-center">

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6">
                        <h1 class="text-center">Crea un nuovo articolo</h1>
                    </div>
                </div>
            </div>
 </header>






        <!-- Create Post Form -->



        <div class="container">
            <div class="row justify-content-center align-items-center mt-5">
                <div class="col-12 col-md-6">

                    <h2>Iscriviti</h2>
                    <form class="rounded-4 shadow bg-warning p-3" action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">  {{-- Inserire Enctype quando vogliamo inserire dati più complessi --}}
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo Articolo</label>
                            <input name="title" type="text" value="{{old('title')}}" class="form-control" id="title"
                            aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                        <label for="subtitle" class="form-label">sottotitolo</label>
                        <input name="subtitle" type="text" value="{{old('subtitle')}}"class="form-control" id="subtitle"
                        aria-describedby="emailHelp">
                         </div>
                        <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                        <textarea name="body"  value="{{old('body')}}" class="form-control" id="body"
                        aria-describedby="emailHelp"></textarea>
                         </div>
                        <div class="mb-3">
                        <label for="img" class="form-label">inserisci immagine </label>
                        <input name="img" type="file" class="form-control" id="img"
                        aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Crea Articolo</button>
                    </form>
                </div>
            </div>
        </div>

    </x-layout>
