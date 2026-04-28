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

<!-- Create Post Form -->



    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-12 col-md-6">

                <h2>Iscriviti</h2>
                <form class="rounded-4 shadow bg-warning p-3" action="{{ route('trainee.signup') }}" method="POST" enctype="multipart/form-data">  {{-- Inserire Enctype quando vogliamo inserire dati più complessi --}}
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" value="{{old('name')}}" class="form-control" id="name"
                            aria-describedby="emailHelp">
                    </div>
                        <label for="surname" class="form-label">Cognome </label>
                        <input name="surname" type="text" class="form-control" id="surname"
                            aria-describedby="emailHelp">
                    <label for="img" class="form-label">inserisci immagine </label>
                        <input name="img" type="file" class="form-control" id="img"
                            aria-describedby="emailHelp">


                            <label for="age" class="form-label">Età</label>
                        <input name="age" type="number" class="form-control" id="age"
                            aria-describedby="emailHelp">
                        <label for="email" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="email"
                            aria-describedby="emailHelp">

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
