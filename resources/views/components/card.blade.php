<div class="card trainee-card gy-5" style="width: 18rem;" >

    <img src="{{Storage::url($trainee->img)}}" class= "rounded-circle profile-img">
  <div class="card-body">
    <h5 class="card-title">{{ $trainee->name }}</h5>
    <p class="card-text">Creato dall'utente {{ $trainee->user->name}}</p>
    <p class="card-text">{{ $trainee->surname }}</p>

  </div>
</div>

