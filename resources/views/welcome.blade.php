@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Benvenuto in DeliveBoo</h1>
    <div class="row">
        <div class="col-md-4">
            <select id="typeSelect" class="form-select" aria-label="Seleziona Tipologia">
                <option selected>Scegli una tipologia...</option>
                @foreach (\App\Models\Type::all() as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div id="restaurantsContainer" class="row mt-4">
        <!-- I ristoranti filtrati appariranno qui -->
    </div>
</div>

<script>
document.getElementById('typeSelect').addEventListener('change', function () {
    fetch(`/admin/search?type=${this.value}`)
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById('restaurantsContainer');
            container.innerHTML = '';
            data.forEach(restaurant => {
                container.innerHTML += `
                    <div class="card mb-4">
                        <img src="${restaurant.image || 'path/to/default/image.png'}" class="card-img-top" alt="${restaurant.name}">
                        <div class="card-body">
                            <h5 class="card-title">${restaurant.name}</h5>
                            <p class="card-text">${restaurant.description || ''}</p>
                            <a href="/menu/${restaurant.id}" class="btn btn-primary">View Menu</a>
                        </div>
                    </div>
                `;
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});
</script>
@endsection