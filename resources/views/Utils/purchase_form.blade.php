<form id="purchase_form" method="POST" action="{{ route('purchase.store') }}" class="form form-vertical">
    @csrf
    {{-- <input type="hidden" name="bill_id" value="{{ $bill->id }}"> --}}
    <div class="card mb-1">
        <div class="card-header p-1">
            <h4>
                Basic info
            </h4>
        </div>
        <div class="card-body p-0 px-1">
            <div class="row">
                <div class="col-2">
                    <div class="mb-1">
                        <label class="form-label" for="inventory_list">{{ __('locale.Inventory') }}</label>
                        <select id="inventory_list" name="inventory_id" class="form-select"
                            @error('inventory_id') border-danger @enderror>
                            <option value="">{{ __('locale.Chose') }}</option>
                            @foreach ($inventories as $inventory)
                                <option value="{{ $inventory->id }}"
                                    {{ old('inventory_id') == $inventory->id || $inventory->is_default == true ? 'selected':'' }}>
                                    {{ $inventory->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-1">
                        <label class="form-label" for="vendor">{{ __('locale.Vendor') }}</label>
                        <select id="vendor" name="vendor_id" required
                            class="form-select @error('vendor') border-danger @enderror">
                            <option value="">{{ __('locale.Chose') }}</option>
                            @foreach ($vendors as $vendor)
                                <option value="{{ $vendor->id }}"
                                    {{old('vendor_id') == $vendor->id ? 'selected':''}} >
                                    {{ $vendor->full_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-1">
                        <label class="form-label" for="discount">{{ __('locale.Discount') }}</label>
                        <input type="number" id="discount" name="discount"
                            class="form-control @error('discount') border-danger @enderror"
                            placeholder="{{ __('locale.Discount') }}" value="{{ old('discount') }}" />
                    </div>
                </div>                           
                <div class="col-2">
                    <div class="mb-1">
                        <label for="note" class="form-label">{{ __('locale.Note') }}</label>
                        <input name="note" id="note" placeholder="{{ __('locale.Note') }}"
                            class="form-control" value="{{old('note')}}">
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-1">
                        <label for="mark" class="form-label">{{ __('locale.Mark') }}</label>
                        <select id="mark" name="mark" required
                            class="form-select @error('mark') border-danger @enderror">
                            <option value="">{{ __('locale.Chose') }}</option>
                            <option value="0" {{old('mark') == 0 ?'selected':''}}>
                                {{ __('locale.None') }}
                            </option>
                            <option value="1" {{old('mark') == 1 ?'selected':''}}>
                                {{ __('locale.Audited') }}
                            </option>
                            <option value="2" {{old('mark') == 2 ?'selected':''}}>
                                {{ __('locale.Checked') }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-1">
                        <label for="level" class="form-label">{{ __('locale.Level') }}</label>
                        <select id="level" name="level" required
                            class="form-select @error('level') border-danger @enderror">
                            <option value="">
                                {{ __('locale.Chose') }}
                            </option>
                            <option value="0" {{old('level') == 0 ? 'selected':''}}>
                                {{ __('locale.None') }}
                            </option>
                            <option value="1" {{old('level') == 1 ? 'selected':''}}>
                                {{ __('locale.Closed') }}
                            </option>
                            <option value="2" {{old('level') == 2 ? 'selected':''}}>
                                {{ __('locale.Secret') }}
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div x-data="{
        currencies: {{ $currencies->keyBy('id')->toJson() }},
        materials: {{ $materials->keyBy('id')->toJson() }},
    }" class="items-repeater">
        <div class="row">
            <div class="col-12">
                <div class="card mb-1">
                    @if ($errors->any())
                        <div class="alert alert-danger m-1">
                            <ul class="m-0">
                                @foreach ($errors->all() as $error)
                                    <li class="pb-1">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-header p-1">
                        <h4>
                            {{__('locale.Materials')}}
                        </h4>
                    </div>
                    <div class="card-body p-0 px-1">
                        <div data-repeater-list="purchases">
                            <div data-repeater-item x-data='{
                                material_id:0,
                                currency_id:0,
                                cost:0,
                                total:0,
                                materialUnits:{},
                                setMaterialUnits(id){
                                    this.materialUnits = this.materials[id].units;
                                },
                                setTotal(id){
                                    this.total = 0;
                                    return this.total = (this.cost * this.currencies[id].rate_to_default).toFixed(2);
                                },
                            }' class="row"> 
                                <div class="col-2">
                                    <div class="mb-1">
                                        <label class="form-label" for="material_list">{{ __('locale.Materials') }}</label>
                                        <select x-model="material_id" id="material_list" name="material_id" required
                                            class="form-select" @error('material_id') border-danger @enderror
                                            x-init="$watch('material_id', value => setMaterialUnits(value))">
                                            <option value="">{{ __('locale.Chose') }}</option>
                                            @foreach ($materials as $material)
                                                <option value="{{ $material->id }}"
                                                    @if (old('material_id') == $material->id) selected @endif>
                                                    {{ $material->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-1">
                                        <label class="form-label"
                                            for="material_quantity">{{ __('locale.Quantity') }}</label>
                                        <input type="number" id="material_quantity" name="quantity"
                                            class="form-control @error('quantity') border-danger @enderror"
                                            placeholder="{{ __('locale.Quantity') }}" value="{{ old('quantity') }}"
                                            required />
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-1">
                                        <label class="form-label" for="units_list">{{ __('locale.Units') }}</label>
                                        <select id="units_list" name="unit_id" 
                                            class="form-select @error('unit_id') border-danger @enderror ">
                                            <option value="">{{ __('locale.Chose') }}</option>
                                            <template x-for="unit in materialUnits" :key="unit.id">
                                                <option :value="unit.id" 
                                                x-text="
                                                unit.name+'-'+unit.pivot.rate_to_main_unit+'-'+
                                                unit.pivot.is_default " 
                                                :selected="unit.pivot.is_default == 1">
                                                </option>
                                            </template>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-1">
                                        <label class="form-label" for="cost">{{ __('locale.Cost') }}</label>
                                        <input type="number" id="cost" name="cost"
                                            class="form-control @error('cost') border-danger @enderror"
                                            placeholder="{{ __('locale.Cost') }}" value="{{ old('cost') }}" required
                                            x-model="cost" />
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-1">
                                        <label class="form-label" for="currency">
                                            {{ __('locale.Currency') }}
                                        </label>
                                        <select id="currency" name="currency_id" required x-model="currency_id"
                                            x-init="$watch('currency_id', value => setTotal(value))"
                                            class="form-select @error('currency_id') border-danger @enderror">
                                            <option value="">{{ __('locale.Chose') }}</option>
                                            @foreach ($currencies as $currency)
                                                <option value="{{ $currency->id }}"
                                                    {{old('currency_id') == $currency->id || 
                                                    $currency->is_default == true ? 'selected':'' }}>
                                                    {{ $currency->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-1">
                                        <label class="form-label" for="total">{{ __('locale.Total') }}</label>
                                        <input type="number" id="total" name="total"
                                            class="form-control @error('total') border-danger @enderror" required readonly
                                            value="" x-model="total" value="{{ old('total') }}" />
                                    </div>
                                </div>
                                <div class="col-12 pb-1">
                                    <button type="button" class="btn btn-danger w-100" data-repeater-delete>
                                        {{__('locale.Delete')}}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 py-1">
                            <button type="button" class="btn btn-primary w-100" data-repeater-create>
                                {{__('locale.Add')}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-1">
            <div class="card-body p-1">
                <div class="row">
                    <div class="col-12">
                        <button typex="submit"
                            class="btn btn-primary w-50">
                            {{ __('locale.Store') }}
                        </button>
                        <button type="reset"
                            class="btn btn-outline-primary">
                            {{ __('locale.Reset') }}
                        </button>
                        <a class="btn btn-outline-dark"
                            data-bs-dismiss="modal" aria-label="Close">
                            {{ __('locale.Cancel') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>