@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pb-5 pt-3">
            <div class="col-12">
                <h1 class="text-center">Aggiungi il tuo Ristorante</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-10 col-12">
                <form method="POST" action="{{ route('admin.restaurants.store') }}" enctype="multipart/form-data">
                    @csrf

                    {{-- Nome Ristorante --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nome del Ristorante *</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required
                            minlength="4">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Indirizzo --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Indirizzo *</label>
                        <input type="text" class="form-control" name="address" value="{{ old('address') }}" required
                            minlength="5">
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Partita IVA --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Partita IVA *</label>
                        <input type="text" class="form-control" name="p_iva" value="{{ old('p_iva') }}" required
                            minlength="11" maxlength="11">
                        @error('p_iva')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Immagine --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Immagine *</label>
                        <input type="file" class="form-control" name="image" value="{{ old('image') }}" required>
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Tipologia --}}
                    <div class="form-group">
                        <label for="language" class="form-label fw-bold">Tipologia: *</label>
                        <div class="check-box d-flex flex-wrap" id="tipologia-checkbox">
                            @foreach ($types as $type)
                                <span class="col-md-3 col-sm-4 col-6">
                                    <input type="checkbox" name="types[]" value="{{ $type->id }}"
                                        @if (in_array($type->id, old('types', []))) checked @endif>
                                    <label>{{ $type->name }}</label>
                                </span>
                            @endforeach
                        </div>
                        @error('types')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-3" style="color: gray">I campi contenenti <b style="color: black">*</b> sono
                        obbligatori </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
