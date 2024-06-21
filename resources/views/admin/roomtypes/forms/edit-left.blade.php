<div class="col-12 col-md-9">
    <div class="card">
        <div class="row card-body">
            <!-- name -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('name'):</label>
                    <x-input name="name" :value="$roomtype->name" :required="true" :placeholder="__('name')" />
                </div>
            </div>

            <!-- capacity -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('Sức chứa'):</label>
                    <x-input type="text" name="capacity" :value="$roomtype->capacity" :required="true" />
                </div>
            </div>

             <!-- bedroom -->
             <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('Số lượng giường ngủ'):</label>
                    <x-input type="text" name="bedroom" :value="$roomtype->bedroom" :required="true" />
                </div>
            </div>
            <!-- description -->
            <div class="col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('Mô tả')</label>
                    <textarea name="description" :value="$roomtype->desc" class="ckeditor visually-hidden">{{ old('description') }}</textarea>
                </div>
            </div>
        </div>
    </div>
</div>
