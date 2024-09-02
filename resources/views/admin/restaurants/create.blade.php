@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row pb-5 pt-3">
            <div class="col-12">
                <h1>Aggiungi il tuo Ristorante</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form method="POST" action="{{ route('admin.restaurants.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nome del Ristorante</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Indirizzo</label>
                        <input type="text" class="form-control" name="address" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Partita IVA</label>
                        <input type="text" class="form-control" name="p_iva" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Immagine</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label for="language" class="form-label fw-bold">Tipologia:</label>
                        <div class="check-box d-flex flex-wrap">
                            @foreach ($types as $type)
                                <span class="" style="width: 25% ">
                                    <input type="checkbox" name="types[]" value="{{ $type->id }}">
                                    <label>{{ $type->name }}</label>
                                </span>
                            @endforeach
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
