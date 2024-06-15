@extends('layouts.tableLayout')

@section('title')
    {{ __('locale.Purchase') }}
@endsection

@section('content')
    <section id="card-content-types">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="card-head row w-100">
                            <div class="col-3">
                                <button
                                    class="btn btn-sm  btn-primary w-100 {{ $purchase->bill->status == 0 ?: 'disabled' }}"
                                    data-bs-toggle="modal" type="button" data-bs-target="#addItem">
                                    {{ __('locale.Add Item') }}
                                </button>
                                <div class="modal fade" id="addItem" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                @include('utils.purchase_new_material_form')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 px-auto">
                                <button type="button"
                                    class="btn btn-sm btn-success
                                    {{ $purchase->bill->status == 0 && $purchase->materials()->count() > 0 ?: 'disabled' }}"
                                    onclick="document.getElementById('savePurchaseForm').submit();">
                                    {{ __('locale.Save') }}
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-outline-primary 
                                    {{ $purchase->bill->status == 1 ? 'btn-primary' : 'disabled' }}"
                                    onclick="document.getElementById('checkPurchaseForm').submit();">
                                    {{ __('locale.Check') }}
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-outline-primary 
                                    {{ $purchase->bill->status == 2 ? 'btn-primary' : 'disabled' }}"
                                    onclick="document.getElementById('auditPurchaseForm').submit();">
                                    {{ __('locale.Audit') }}
                                </button>
                                <button type="button"
                                    class="btn btn-sm btn-outline-danger 
                                    {{ $purchase->bill->status == 0 ?: 'disabled' }}"
                                    onclick="document.getElementById('deletePurchaseForm').submit();">
                                    {{ __('locale.Delete') }}
                                </button>
                                <form hidden id="savePurchaseForm" method="POST"
                                    action="{{ route('purchase.save', ['id' => $purchase->id]) }}">
                                    @csrf
                                </form>
                                <form hidden id="checkPurchaseForm" method="POST"
                                    action="{{ route('purchase.check', ['id' => $purchase->id]) }}">
                                    @csrf
                                </form>
                                <form hidden id="auditPurchaseForm" method="POST"
                                    action="{{ route('purchase.audit', ['id' => $purchase->id]) }}">
                                    @csrf
                                </form>
                                <form hidden id="deletePurchaseForm" method="POST"
                                    action="{{ route('purchase.delete', ['id' => $purchase->id]) }}">
                                    @csrf @method('delete')
                                </form>
                            </div>

                            <div class="col-3 row">
                                <div class="col-4">
                                    @php
                                        $color = match ($purchase->bill->status) {
                                            0 => 'danger',
                                            1 => 'success',
                                            2 => 'info',
                                            default => 'primary',
                                        };
                                    @endphp
                                    <span class="badge badge-light-{{ $color }}">
                                        {{ $purchase->bill->get_status }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="min-height:5rem">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>{{ __('locale.Bill') }}</th>
                                        <th>{{ __('locale.Vendor') }}</th>
                                        <th>{{ __('locale.Inventory') }}</th>
                                        <th>{{ __('locale.Discount') }}</th>
                                        <th>{{ __('locale.Note') }}</th>
                                        <th>{{ __('locale.Mark') }}</th>
                                        <th>{{ __('locale.Level') }}</th>
                                        <th>{{ __('locale.User') }}</th>
                                        <th>{{ __('locale.Created at') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $purchase->id }}</td>
                                        <td>{{ $purchase->bill?->serial }}</td>
                                        <td>{{ $purchase->vendor?->fullName }}</td>
                                        <td>{{ $purchase->inventory?->name }}</td>
                                        <td>{{ $purchase->discount }}</td>
                                        <td>{{ $purchase->note }}</td>
                                        <td>{{ $purchase->mark }}</td>
                                        <td>{{ $purchase->level }}</td>
                                        <td>{{ $purchase->user?->username }}</td>
                                        <td>{{ $purchase->created_at->format('Y-m-d') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive" style="min-height:10rem">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>{{ __('locale.Material') }}</th>
                                        <th>{{ __('locale.Quantity') }}</th>
                                        <th>{{ __('locale.Unit') }}</th>
                                        <th>{{ __('locale.Cost') }}</th>
                                        <th>{{ __('locale.Currency') }}</th>
                                        <th>{{ __('locale.Rate') }}</th>
                                        <th>{{ __('locale.Rate_to') }}</th>
                                        <th>{{ __('locale.Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($purchase->materials as $material)
                                        <tr>
                                            <td>{{ $material->id }}</td>
                                            <td>{{ $material->name }}</td>
                                            <td>{{ $material->pivot->quantity }}</td>
                                            <td>{{ $material->pivot->unit?->name }}</td>
                                            <td>{{ $material->pivot->cost }}</td>
                                            <td>{{ $material->pivot->currency?->name }}</td>
                                            <td>{{ $material->pivot->rate }}</td>
                                            <td>{{ $material->pivot->rateTo?->name }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button"
                                                        class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                                        data-bs-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            onclick="document.getElementById('purchaseDeleteMaterial').submit();">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                        <form id="purchaseDeleteMaterial"
                                                            action="{{ route('purchase.deleteMaterial', ['id' => $purchase->id]) }}"
                                                            method="POST">
                                                            @csrf @method('delete')
                                                            <input type="hidden" name="material_id" value="{{$material->id}}">
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('page-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
<script>
    $(document).ready(function() {
        $(function() {
            'use strict';
            $('.items-repeater').repeater({
                isFirstItemUndeletable: true,
                initEmpty: false,
                show: function() {
                    $(this).slideDown();
                },
                hide: function(deleteElement) {
                    if (confirm(
                            "{{ __('Are you sure you want to delete this element?') }}"
                        )) {
                        $(this).slideUp(deleteElement);
                    }
                },
            });
        });
    });
</script>
@endsection