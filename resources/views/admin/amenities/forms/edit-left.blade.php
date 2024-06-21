<div class="col-12 col-md-9">
    <div class="card">
        <div class="row card-body">
            <!-- name -->
            <div class="col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('name'):</label>
                    <x-input name="name" :value="old('name')" :required="true" :placeholder="__('name')" />
                </div>
            </div>

            <!-- description -->
            <div class="col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('Mô tả'):</label>
                    <x-input type="text" name="description" :required="true" />
                </div>
            </div>
        </div>
    </div>
</div>
