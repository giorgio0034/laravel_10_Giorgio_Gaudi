<x-layout>

    <header class="header d-flex align-items-center">

        <div class="container">
            <div class="row justify-content-center align-items-center mt-5">
                <div class="col-12 col-md-6">
                    <h1 class="text-center">I miei iscritti</h1>
                </div>
            </div>
        </div>









    </header>





    <div class="container">
        <div class="row g-4">
            @foreach ($trainees as $trainee)
                <div class="col-12 col-md-4">
                    <x-card
                     :trainee="$trainee"
                    />
                </div>
            @endforeach
        </div>

    </div>










</x-layout>
