@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-donate"></i> {{ __('Update Billing') }}
                    <a href="{{ url('billing') }}" class="btn btn-primary float-right"><i class="fas fa-list"></i> Billing List</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ url('billing', $billing->id) }}" >
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <div class="col-md-2 offset-md-1">
                                <label for="title" class="col-form-label text-md-right">{{ __('Date') }}</label>
                            </div>
                            <div class="col-md-8">
                                <div class="input-group mb-3">
                                <input id="date" type="text" placeholder="Select Date" class="form-control datepicker @error('date') is-invalid @enderror" value="{{ old('date', $billing->date) }}" name="date" required aria-label="Select Date"  autocomplete="off" >
                                    
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2 offset-md-1">
                                <label for="title" class="col-form-label text-md-right">{{ __('Title') }}</label>
                            </div>
                            <div class="col-md-8">
                                <input id="title" type="text" placeholder="..." class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $billing->title) }}" required autocomplete="amount" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2 offset-md-1">
                                <label for="billing_type_id" class="col-form-label text-md-right">{{ __('Type') }}</label>
                            </div>
                            <div class="col-md-8">
                                <select name="billing_type_id" id="billingType" disabled  class="form-control @error('billing_type_id') is-invalid @enderror" required autocomplete="billing_type_id" autofocus>
                                    <option disabled selected>Chooses Billing Type</option>
                                    @foreach($billing_types as $type)
                                        <option  {{ $billing->billing_type_id == $type->id ? 'selected="selected"' : '' }} value="{{ $type->id}}" >{{ $type->title}}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="billing_type_id" id="" value="{{ $billing->billing_type_id }}">
                                

                                @error('billing_type_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2 offset-md-1">
                                <label for="billing_sub_type_id" class="col-form-label text-md-right">{{ __('Sub Type') }}</label>
                            </div>
                            <div class="col-md-8">
                                <select name="billing_sub_type_id" id="billing_sub_type_id"  class="form-control @error('billing_sub_type_id') is-invalid @enderror" required autocomplete="amount" autofocus>
                                    <option disabled selected>Chooses Billing Sub Type</option>
                                    @foreach($billing_sub_types as $sub_type)
                                        <option  {{ $billing->billing_sub_type_id == $sub_type->id ? 'selected="selected"' : '' }} value="{{ $sub_type->id}}" >{{ $sub_type->title}}</option>
                                    @endforeach
                                </select>
                                
                                @error('billing_sub_type_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2 offset-md-1">
                                <label for="title" class="col-form-label text-md-right">{{ __('Amount') }}</label>
                            </div>

                            <div class="col-md-8">
                                <input id="amount" type="number" placeholder="0.00" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount', $billing->amount) }}" required autocomplete="amount">

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2 offset-md-1">
                                <label for="title" class="col-form-label text-md-right">{{ __('Description') }}</label>
                            </div>
                            <div class="col-md-8">
                                <textarea name="description" placeholder="Write any remarks.." id="description" class="form-control" cols="30" rows="10">{{ old('description', $billing->description) }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-2 offset-md-3">
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
