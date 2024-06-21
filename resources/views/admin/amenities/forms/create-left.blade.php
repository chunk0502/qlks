<div class="col-12 col-md-9">
    <div class="card">
        <div class="card-header justify-content-center">
        </div>
        <div class="row card-body">
            <!-- name -->
            <div class="col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('Tên tiện nghi'):</label>
                    <x-input name="name" :value="old('name')" :required="true" :placeholder="__('name')" />
                </div>
            </div>

            <!-- description -->
            <div class="col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('Mô tả')</label>
                    <textarea name="description" class="ckeditor visually-hidden">{{ old('description') }}</textarea>
                </div>
            </div>

        </div>
    </div>
</div>
