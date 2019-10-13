@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-users"></i> {{ __('Client List') }}
                    <a href="{{ url('client/create') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add New</a>
                </div>

                <div class="card-body">
                    <table class="table table-hovered">
                        <thead>
                            <tr>
                                <th>Full name</th>
                                <th>Company</th>
                                <th>Telephone</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Street</th>
                                <th>Brgy</th>
                                <th>City</th>
                                <th>Zipcode</th>
                                <th>Region</th>
                                <th>Position</th>
                            </tr>
                            <tbody>
                                @if($clients->isNotEmpty())
                                    @foreach($clients as $item)
                                        <tr>
                                            <td>
                                                {{ $item->fullname}}
                                            </td>
                                            <td>
                                                {{ $item->company}}
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
                                                {{ $item->brgy}}
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
                                            <td>
                                                {{ $item->position}}
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
                    {{ $clients->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
