@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-donate"></i> {{ __('Billing List') }}
                    <a href="{{ url('billing/create') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add New</a>
                </div>

                <div class="card-body">
                    <table class="table table-hovered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Billing type</th>
                                <th>Description</th>
                                <th>Date</th>
                            </tr>
                            <tbody>
                                @if($billings->isNotEmpty())
                                    @foreach($billings as $billing)
                                        <tr>
                                            <td>
                                                {{ $billing->title}}
                                            </td>
                                            <td>
                                                {{ $billing->amount}}
                                            </td>
                                            <td>
                                                {{ $billing->billing_type}}
                                            </td>
                                            <td>
                                                {{ $billing->description}}
                                            </td>
                                            <td>
                                                {{ $billing->date}}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">No Record Found!</td>
                                    </tr>
                                @endif
                            </tbody>
                        </thead>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $billings->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
