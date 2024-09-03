@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- User registration fields -->
                        <div class="mb-4 row">
                            <label for="email" class="col-md-4 col-form-label text-md-right **fw-bold**">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control **w-100** @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right **fw-bold**">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control **w-100** @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }} *</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right **fw-bold**">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control **w-100**" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <!-- Restaurant fields -->
                            <div class="mb-3">
                                <label class="form-label **fw-bold**">Nome del Ristorante*</label>
                                <input type="text" class="form-control **w-100**" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label **fw-bold**">Indirizzo*</label>
                                <input type="text" class="form-control **w-100**" name="address" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label **fw-bold**">Partita IVA*</label>
                                <input type="text" class="form-control **w-100** @error('p_iva') is-invalid @enderror" name="p_iva" required maxlength="11" minlength="11">
                                @error('p_iva')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label **fw-bold**">Immagine*</label>
                                <input type="file" class="form-control **w-100**" name="image">
                            </div>
                            <div class="form-group">
                                <label for="language" class="form-label **fw-bold**">Tipologia:*</label>
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
    </div>
</div>
@endsection