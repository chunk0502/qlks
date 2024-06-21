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

            <!-- location -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('Vị trí'):</label>
                    <x-input type="text" name="location" :required="true" />
                </div>
            </div>

            <!-- status -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Trạng thái') }}:</label>
                    <x-select name="status">
                        <x-select-option value="1" title="Sẵn sàng" />
                        <x-select-option value="2" title="Dọn dẹp" />
                        <x-select-option value="3" title="Sửa chữa" />
                    </x-select>
                </div>
            </div>

            <!-- price -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('Giá'):</label>
                    <x-input type="text" name="price" :required="true" />
                </div>
            </div>
        </div>
    </div>
</div>
