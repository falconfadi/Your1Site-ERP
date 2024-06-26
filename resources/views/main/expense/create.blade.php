@extends('layouts/contentLayoutMaster')
@section('title')
    {{ __('locale.New Expense') }}
@endsection

@section('content')
    <section>
        <form method="POST" action="{{ route('expense.store') }}" class="form form-vertical">
            @csrf
            <div class="card row">
                @if ($errors->any())
                    <div class="alert alert-danger m-1">
                        <ul class="m-0">
                            @foreach ($errors->all() as $error)
                                <li class="p-1">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-header">
                    <h4 class="card-title">{{ __('locale.New Expense') }}</h4>
                </div>
                <div class="card-body expenses-repeater">
                    <div data-repeater-list="names" class="col-12">
                        <div data-repeater-item class="row my-1">
                            <div class="col-6">
                                <div class="mb-6">
                                    <label class="form-label" for="name">{{ __('locale.Name') }}</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control @error('name') border-danger @enderror" 
                                        placeholder="{{ __('locale.Name') }}" 
                                        value="{{ old('name') }}" required  />
                                </div>
                            </div>
                            <div class="col-6" data-repeater-delete>
                                <div class="mb-1">
                                    <label class="form-label" for="rate">{{ __('locale.Delete') }}</label>
                                    <button type="button" class="btn btn-icon btn-danger w-100">
                                        <span>{{ __('locale.Delete') }}</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-1">
                        <div class="row">
                            <div class="col-6" data-repeater-create>
                                <button type="button" class="btn btn-sm  btn-primary w-100">
                                    {{ __('locale.Add') }}
                                </button>
                            </div>
                            <div class="col-6">
                                <div class="pt-0">
                                    <button type="submit" class="btn btn-primary btn-sm w-50">
                                        {{ __('locale.Store') }}
                                    </button>
                                    <button type="reset" class="btn btn-outline-primary btn-sm">
                                        {{ __('locale.Reset') }}
                                    </button>
                                    <a href="{{ url('/') }}"class="btn btn-outline-dark btn-sm">
                                        {{ __('locale.Cancel') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
@section('page-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
    <script>
        $(document).ready(function() {
            $(function() {
                'use strict';
                // form repeater jquery
                $('.expenses-repeater').repeater({
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
