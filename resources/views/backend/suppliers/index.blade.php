@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-users"></i> {{ __('Supplier List') }}
                    <a href="{{ url('supplier/create') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add New</a>
                </div>

                <div class="card-body">
                    <table class="table table-hovered">
                        <thead>
                            <tr>
                                <th>Contact Person</th>
                                <th>Position</th>
                                <th>Company</th>
                                <th>Status</th>
                                <th>Telephone</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Street</th>
                                <th>Brgy</th>
                                <th>City</th>
                                <th>Zipcode</th>
                                <th>Region</th>
                            </tr>
                            <tbody>
                                @if($suppliers->isNotEmpty())
                                    @foreach($suppliers as $item)
                                        <tr>
                                            <td>
                                                {{ $item->contact_person}}
                                            </td>
                                            <td>
                                                {{ $item->position}}
                                            </td>
                                            <td>
                                                {{ $item->status}}
                                            </td>
                                            <td>
                                                {{ $item->company_name }}
                                            </td>
                                            <td>
                                                {{ $item->telephone}}
                                            </td>
                                            <td>
                                                {{ $item->mobile}}
                                            </td>
                                            <td>
                                                {{ $item->email}}
                                            </td>
                                            <td>
                                                {{ $item->street}}
                                            </td>
                                            <td>
                                                {{ $item->city}}
                                            </td>
                                            <td>
                                                {{ $item->city}}
                                            </td>
                                            <td>
                                                {{ $item->zipcode}}
                                            </td>
                                            <td>
                                                {{ $item->region}}
                                            </td>
                                        </tr>
                                    @endforeach

                                @else
                                    <tr>
                                        <td colspan="12" class="text-center">No Record Found!</td>
                                    </tr>
                                @endif
                            </tbody>
                        </thead>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $suppliers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
