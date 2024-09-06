@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('admin.dishes.update', $dish->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group p-3">
<<<<<<< HEAD
            <label for="name" class="form-label">Nome:*</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $dish->name }}"required
                maxlength="255" minlength="3">
=======
            <label for="name" class="form-label">Name:*</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $dish->name }}" required
                   maxlength="255" minlength="3">
            <div id="name-error"></div> <!-- Add this element to display the error message -->
>>>>>>> b41c58b40dae9e6475e215e60f6523374da2d76a
            @error('name')
                @if ($message == 'You must enter the name of the dish.')
                    <div class="alert alert-danger">Devi inserire il nome del piatto.</div>
                @elseif($message == 'The name can only contain letters and spaces.')
                    <div class="alert alert-danger">Il nome può contenere solo lettere e spazi.</div>
                @endif
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="image" class="form-label">Immagine:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{ $dish->image }}">
            @error('image')
                @if ($message == 'The image file cannot be larger than 2MB.')
                    <div class="alert alert-danger">Il file immagine non può essere più grande di 2 MB.</div>
                @endif
            @enderror
        </div>
        <div class="form-group p-3">
<<<<<<< HEAD
            <label for="ingredient" class="form-label">Ingredienti:*</label>
            <textarea class="form-control" id="description" name="ingredient" required minlength="5">{{ $dish->ingredient }}</textarea>
=======
            <label for="ingredient" class="form-label">Ingredient:*</label>
            <textarea class="form-control" id="ingredient" name="ingredient" required minlength="5">{{ $dish->ingredient }}</textarea>
            <div id="message"></div> <!-- Add this element -->
>>>>>>> b41c58b40dae9e6475e215e60f6523374da2d76a
            @error('ingredient')
                @if ($message == 'Please enter an ingredient.')
                    <div class="alert alert-danger">Inserisci un ingrediente.</div>
                @elseif($message == 'Please enter at least one ingredient.')
                    <div class="alert alert-danger">Inserisci almeno un ingrediente.</div>
                @elseif($message == 'Ingredient can only contain letters, numbers, and spaces.')
                    <div class="alert alert-danger">L'ingrediente contiene caratteri proibiti. Inserisci solo caratteri alfanumerici e spazi.</div>
                @endif
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="price" class="form-label">Prezzo:*</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $dish->price }}" required>
            @error('price')
                @if ($message == 'The price must be greater than 0.')
                    <div class="alert alert-danger">Il prezzo deve essere maggiore di 0.</div>
                @endif
            @enderror
        </div>
        <div class="form-group p-3">
            <label for="availability" class="form-label">Disponibilità:*</label>
            <select class="form-control" id="availability" name="availability">
                <option value="1" {{ $dish->availability == 1 ? 'selected' : '' }}>Disponibile</option>
                <option value="0" {{ $dish->availability == 0 ? 'selected' : '' }}>Non disponibile</option>
            </select>
            @error('availability')
                @if ($message == 'The selected availability is invalid.')
                    <div class="alert alert-danger">La disponibilità selezionata non è valida.</div>
                @endif
            @enderror
        </div>
        <div class="mt-3 p-3" style="color: gray">I campi contenenti <b style="color: black">*</b> sono
            obbligatori </div>
        <button type="submit" class="btn btn-primary m-3">Modificare</button>
    </form>
    <script src="{{ asset('js/validate_dish_edit.js') }}"></script>

@endsection
