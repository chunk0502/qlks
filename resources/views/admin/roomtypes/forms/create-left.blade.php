<div class="col-12 col-md-9">
    <div class="card">
        <div class="card-header justify-content-center">
        </div>
        <div class="row card-body">
            <!-- name -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('name'):</label>
                    <x-input name="name" :value="old('name')" :required="true" :placeholder="__('name')" />
                </div>
            </div>

            <!-- capacity -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('Sức chứa'):</label>
                    <x-input type="text" name="capacity" :required="true" :placeholder="__('Sức chứa')"/>
                </div>
            </div>

             <!-- bedroom -->
             <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('Giường'):</label>
                    <x-input type="text" name="bedroom" :required="true" :placeholder="__('Số lượng giường ngủ')"/>
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
