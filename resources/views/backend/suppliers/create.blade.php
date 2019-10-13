@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-users"></i> {{ __('Add New Supplier') }}
                    <a href="{{ url('supplier') }}" class="btn btn-primary float-right"><i class="fas fa-list"></i> Supplier List</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ url('supplier') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-2">
                                Status
                            </div>
                            <div class="col-md-2">
                                <label><input type="radio" name="status" value="potential" checked> Potential</label>
                            </div>
                            <div class="col-md-2">
                                <label><input type="radio" name="status" value="active"> Active</label>
                            </div>
                            <div class="col-md-2">
                                <label><input type="radio" name="status" value="deactivated"> Deactivated</label>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="contact_person" class="col-form-label text-md-right">{{ __('Contact Person') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="contact_person" type="text" minlength="3" class="form-control @error('contact_person') is-invalid @enderror" name="contact_person" value="{{ old('contact_person') }}" required autocomplete="contact_person" autofocus>

                                @error('contact_person')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="telephone" class="col-form-label text-md-right">{{ __('Telephone') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="telephone" type="text" minlength="3" class="form-control  @error('telephone') is-invalid @enderror" name="telephone" required autocomplete="telephone">
                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="mobile" class="col-form-label text-md-right">{{ __('Mobile') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="mobile" type="text" minlength="3" class="form-control  @error('mobile') is-invalid @enderror" name="mobile" required autocomplete="mobile">
                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="email" class="col-form-label text-md-right">{{ __('Email') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="street" class="col-form-label text-md-right">{{ __('Street') }}</label>
                            </div>

                            <div class="col-md-6">
                                <input id="street" type="text" minlength="3" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}" required autocomplete="street">

                                @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="brgy" class="col-form-label text-md-right">{{ __('Brgy') }}</label>
                            </div>

                            <div class="col-md-6">
                                <input id="brgy" type="text" minlength="3" class="form-control @error('brgy') is-invalid @enderror" name="brgy" value="{{ old('brgy') }}" required autocomplete="brgy">

                                @error('brgy')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="city" class="col-form-label text-md-right">{{ __('City') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="city" type="text" minlength="3" class="form-control  @error('city') is-invalid @enderror" name="city" required autocomplete="city">
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="zipcode" class="col-form-label text-md-right">{{ __('Zipcode') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="zipcode" type="text" minlength="3" class="form-control  @error('zipcode') is-invalid @enderror" name="zipcode" required autocomplete="zipcode">
                                @error('zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="region" class="col-form-label text-md-right">{{ __('Region') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="region" type="text" minlength="3" class="form-control  @error('region') is-invalid @enderror" name="region" required autocomplete="region">
                                @error('region')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="company" class="col-form-label text-md-right">{{ __('Company') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="company" type="text" minlength="3" class="form-control  @error('company') is-invalid @enderror" name="company" required autocomplete="company">
                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="position" class="col-form-label text-md-right">{{ __('Position') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="position" type="text" minlength="3" class="form-control  @error('position') is-invalid @enderror" name="position" required autocomplete="position">
                                @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-2 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
