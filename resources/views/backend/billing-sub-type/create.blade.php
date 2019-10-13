@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-donate"></i> {{ __('Add New Billing') }}
                    <a href="{{ url('billing') }}" class="btn btn-primary float-right"><i class="fas fa-list"></i> Billing List</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ url('billing') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-1">
                                <label for="title" class="col-form-label text-md-right">{{ __('Title') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="amount" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1">
                                <label for="title" class="col-form-label text-md-right">{{ __('Type') }}</label>
                            </div>
                            <div class="col-md-6">
                                <select name="billing_type" id="billingType" class="form-control" class="form-control @error('title') is-invalid @enderror" required autocomplete="amount" autofocus>
                                    <option disabled selected>Chooses Billing Type</option>
                                    @foreach($types as $type)
                                        <option value="{{ $type->title}}">{{ $type->title}}</option>
                                    @endforeach
                                </select>
                            

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1">
                                <label for="title" class="col-form-label text-md-right">{{ __('Amount') }}</label>
                            </div>

                            <div class="col-md-6">
                                <input id="amount" type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount">

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1">
                                <label for="title" class="col-form-label text-md-right">{{ __('Description') }}</label>
                            </div>
                            <div class="col-md-6">
                                <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ old('description') }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1">
                                <label for="title" class="col-form-label text-md-right">{{ __('Date') }}</label>
                            </div>
                            <div class="col-md-6">
                                <input id="date" type="text" class="form-control datepicker @error('date') is-invalid @enderror" name="date" required autocomplete="date">
                                @error('date')
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
