<div class="card trainee-card" style="width: 18rem;" gy-5>

    <img src="{{ asset('storage/'.$trainee->img) }}" class= "rounded-circle profile-img">
  <div class="card-body">
    <h5 class="card-title">{{ $trainee->name }}</h5>
    <p class="card-text">{{ $trainee->surname }}</p>

  </div>
</div>
