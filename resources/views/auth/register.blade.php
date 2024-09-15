@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registrati') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Email -->
                            <div class="mb-3 ">
                                <label for="email" class="col-form-label"><b>{{ __('E-Mail') }} *</b></label>
                                <div class="">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="mb-3 ">
                                <label for="password" class="col-form-label"><b>{{ __('Password') }} *</b></label>
                                <div class="">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }} *</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password Confirmation -->
                            <div class="mb-3 ">
                                <label for="password-confirm" class="col-form-label"><b>{{ __('Conferma Password') }}</b></label>
                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <!-- Nome Ristorante -->
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="name">Nome del Ristorante *</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required minlength="4">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Indirizzo -->
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="address">Indirizzo *</label>
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required minlength="5">
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Partita IVA -->
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="p_iva">Partita IVA *</label>
                                <input id="p_iva" type="text" class="form-control" name="p_iva" value="{{ old('p_iva') }}" required minlength="11" maxlength="11">
                                @error('p_iva')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Immagine -->
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="image">Immagine *</label>
                                <input id="image" type="file" class="form-control" name="image" value="{{ old('image') }}" required>
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tipologia -->
                            <div class="form-group">
                                <label for="types" class="form-label fw-bold">Tipologia: *</label>
                                <div class="check-box d-flex flex-wrap" id="tipologia-checkbox">
                                    @foreach ($types as $type)
                                        <span class="" style="width: 25% ">
                                            <input id="type-{{ $type->id }}" type="checkbox" name="types[]" value="{{ $type->id }}" @if (in_array($type->id, old('types', []))) checked @endif>
                                            <label>{{ $type->name }}</label>
                                        </span>
                                    @endforeach
                                </div>
                                @error('types')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-3" style="color: gray">I campi contenenti <b style="color: black">*</b> sono obbligatori</div>

                            <div class="mb-4 row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrati') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/validateUser.js') }}"></script>
@endsection
