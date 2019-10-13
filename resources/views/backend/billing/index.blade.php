@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-donate"></i> {{ __('Billing List') }}
                    <a href="{{ url('billing/create') }}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add New</a>
                </div>

                <div class="card-body">
                    <table class="table table-hovered" id="dataTable">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Billing Type</th>
                                <th>Billing Sub Type</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Uploaded By</th>
                                <th>Action</th>
                            </tr>
                            <tbody>
                                
                                    @foreach($billings as $billing)
                                        <tr>
                                            <td>
                                                {{ $billing->title}}
                                            </td>
                                            <td>
                                                {{ $billing->amount}}
                                            </td>
                                            <td>
                                                {{ $billing->billingType->title}}
                                            </td>
                                            <td>
                                                {{ $billing->billingSubType->title}}
                                            </td>
                                            <td>
                                                {{ $billing->description}}
                                            </td>
                                            <td>
                                                {{ $billing->date}}
                                            </td>
                                            <td>
                                                {{ $billing->user->name}}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ url('billing/'.$billing->id.'/edit') }}" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fas fa-edit"></i></a>
                                                |
                                                <a href="#" onclick="event.preventDefault(); document.getElementById('remove-record').submit();" data-toggle="tooltip" data-placement="right" title="Remove">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                
                                                <form id="remove-record" action="{{ route('billing.destroy', $billing->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
