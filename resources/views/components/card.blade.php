<div class="card trainee-card gy-5" style="width: 18rem;" >

    <img src="@if($trainee->img){{Storage::url($trainee->img)}} @else{{Storage::url('public/img/default.jpg')}} @endif " class= "rounded-circle profile-img">
  <div class="card-body">
    <h5 class="card-title">{{ $trainee->name }}</h5>
    <p class="card-text">Creato dall'utente {{ $trainee->user->name}}</p>{{-- TRAVERSAL MODEl: la capacità dei modelli di recuperare le informazioni
     dei modelli relazionati --}}
    <p class="card-text">{{ $trainee->surname }}</p>

  </div>
</div>

