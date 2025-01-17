<div class="col-12 col-md-3">
    <div class="card mb-3">
        <div class="card-header">
            @lang('action')
        </div>

        <div class="card-body p-2">
            <div class="d-flex align-items-center h-100 gap-2">
                <x-button.submit :title="__('save')" name="submitter" value="save" />
                <x-button type="submit" name="submitter" value="saveAndExit">
                    @lang('save&exit')
                </x-button>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            {{ __('Hình ảnh') }}
        </div>
        <div class="card-body p-2">
            <x-input-image-ckfinder name="feature_image" showImage="featureImage"/>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            {{ __('Danh sách ảnh') }}
        </div>
        <div class="card-body p-2">
            <x-input-gallery-ckfinder name="list_image" type="multiple" />
        </div>
    </div>
</div>
