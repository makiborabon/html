@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-donate"></i> {{ __('Add New Inventory') }}
                    <a href="{{ url('billing') }}" class="btn btn-primary float-right"><i class="fas fa-list"></i> Billing List</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ url('inventory') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="date_recieved" class="col-form-label text-md-right">{{ __('Date Recieved') }}</label>
                            </div>
                            <div class="col-md-6">
                                
                                <div class="input-group mb-3">
                                        <input id="date_recieved" type="text" class="form-control datepicker @error('date_recieved') is-invalid @enderror" name="date_recieved" required autocomplete="date_recieved">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                @error('date_recieved')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="supplier_id" class="col-form-label text-md-right">{{ __('Supplier') }}</label>
                            </div>
                            <div class="col-md-6">
                                <select name="supplier_id" id="supplier_id"  class="form-control @error('supplier_id') is-invalid @enderror" autofocus required>
                                    <option disabled selected>Choose Supplier</option>
                                    @foreach($suppliers as $item)
                                        <option value="{{ $item->id }}">{{ $item->company_name }}</option>
                                    @endforeach
                                </select>
                                
                                @error('supplier_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="product_category_id" class="col-form-label text-md-right">{{ __('Product Type') }}</label>
                            </div>
                            <div class="col-md-6">
                                <select name="product_category_id" id="product_category_id"  class="form-control @error('product_category_id') is-invalid @enderror" required autocomplete="product_category_id" required>
                                    <option disabled selected>Choose Product Category</option>
                                    @foreach($product_category as $item)
                                        <option value="{{ $item->id}}">{{ $item->title}}</option>
                                    @endforeach
                                </select>

                                @error('product_category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="title" class="col-form-label text-md-right">{{ __('Title') }}</label>
                                </div>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" >
    
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="price" class="col-form-label text-md-right">{{ __('Price') }}</label>
                            </div>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="sku" class="col-form-label text-md-right">{{ __('SKU') }}</label>
                            </div>

                            <div class="col-md-6">
                                <input id="sku" type="text" class="form-control @error('sku') is-invalid @enderror" name="sku" value="{{ old('sku') }}" required autocomplete="sku">

                                @error('sku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="barcode" class="col-form-label text-md-right">{{ __('Barcode') }}</label>
                            </div>

                            <div class="col-md-6">
                                <input id="barcode" type="text" class="form-control @error('barcode') is-invalid @enderror" name="barcode" value="{{ old('barcode') }}" required autocomplete="barcode">

                                @error('barcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="quantity" class="col-form-label text-md-right">{{ __('Quantity') }}</label>
                            </div>

                            <div class="col-md-6">
                                <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity">

                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="description" class="col-form-label text-md-right">{{ __('Description') }}</label>
                            </div>
                            <div class="col-md-6">
                                <textarea name="description" id="description" class="form-control" cols="30" rows="5">{{ old('description') }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="remarks" class="col-form-label text-md-right">{{ __('Remarks') }}</label>
                            </div>

                            <div class="col-md-6">
                                    <textarea name="remarks" id="remarks" class="form-control" cols="30" rows="3">{{ old('remarks') }}</textarea>
                                @error('remarks')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="status" class="col-form-label text-md-right">{{ __('Status') }}</label>
                            </div>

                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status">

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-2 offset-md-7">
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
