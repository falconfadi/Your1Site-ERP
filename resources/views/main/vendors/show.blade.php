@extends('layouts/contentLayoutMaster')

@section('title')
    {{-- {{ __('locale.Show') }} {{ __('locale.Material') }} --}}
    {{ $vendor->first_name }}
@endsection

@section('content')
    <section id="card-content-types">
        <div class="card-head mb-1 row">
            <h4 class="col-10">{{ __('locale.Show') }}</h4>
            <div class="col-2">
                <button class="btn btn-sm btn-outline-danger w-100" 
                    onclick="
                        if(confirm('{{__('locale.Delete')}} ?')){
                            document.getElementById('deleteVendorForm').submit();
                        }
                    " >
                    {{ __('locale.Delete') }}
                </button>
                <form id="deleteVendorForm" 
                    method="Post" 
                    action="{{route('vendor.delete',['vendor'=>$vendor])}}">
                    @csrf @method('delete')
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h5>{{__('locale.Details')}}</h5>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            {{__('locale.First name')}} :
                            {{ $vendor->first_name }}
                        </h4>
                        <div class="card-text">
                            {{__('locale.Last name')}} : 
                            {{ $vendor->last_name }}
                        </div>
                        <div class="card-text">
                            {{__('locale.Email')}} : 
                            {{ $vendor->email }}
                        </div>
                        <div class="card-text">
                            {{__('locale.Phone')}} : 
                            {{ $vendor->phone }}
                        </div>
                        <p class="card-text">
                            {{__('locale.Created at')}}
                            {{ $vendor->created_at->diffForHumans() }}
                        </p>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>{{__('locale.Name')}}</th>
                                </tr>
                            </thead>
                            <tbody class="table-hover">
                                    <tr>
                                        <td>
                                            <span class="badge rounded-pill badge-light-success me-1">
                                               something
                                            </span>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
