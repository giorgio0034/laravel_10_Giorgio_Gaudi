<x-layout>



 <x-masthead title="I miei iscritti"></x-masthead>



<x-display-message/>


  <x-display-errors/>





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
