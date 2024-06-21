<div class="col-12 col-md-9">
    <div class="card">
        <div class="row card-body">
            <!-- name -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('name'):</label>
                    <x-input name="name" :value="$service->name" :required="true" :placeholder="__('name')" />
                </div>
            </div>
            <!-- price -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('Giá'):</label>
                    <x-input type="text" :value="$service->price" name="price" :required="true" :placeholder="__('Giá')" />
                </div>
            </div>
            <!-- description -->
            <div class="col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('Mô tả'):</label>
                    <textarea name="description" class="ckeditor visually-hidden">{{ old('description') }}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>
