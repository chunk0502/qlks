<div class="col-12 col-md-9">
    <div class="card">
        <div class="card-header justify-content-center">
        </div>
        <div class="row card-body">
            <!-- username -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('name'):</label>
                    <x-input name="name" :value="old('name')" :required="true" :placeholder="__('name')" />
                </div>
            </div>

            <!-- roomtype -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Kiểu phòng') }}:</label>
                    <x-select name="id_roomtype" :required="true">
                        <x-select-option value="" :title="__('')" />
                        @foreach ($roomtype as $type => $value)
                            <x-select-option :value="$type" :title="__($value)" />
                        @endforeach
                    </x-select>
                </div>
            </div>

            <!-- location -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('Vị trí'):</label>
                    <x-input type="text" name="location" :required="true" :placeholder="__('Vị trí')"/>
                </div>
            </div>

            <!-- price -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('Giá'):</label>
                    <x-input type="text" name="price" :required="true" :placeholder="__('Giá')"/>
                </div>
            </div>
        </div>
    </div>
</div>
