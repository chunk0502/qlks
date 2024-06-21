<div class="col-12 col-md-3">
    <div class="card">
        <div class="card-header">
            @lang('action')
        </div>
        <div class="card-body p-2 d-flex justify-content-between">
            <div class="d-flex align-items-center h-100 gap-2">
                <x-button.submit :title="__('save')" name="submitter" value="save" />
                <x-button type="submit" name="submitter" value="saveAndExit">
                    @lang('save&exit')
                </x-button>
            </div>
            <x-button.modal-delete data-route="{{ route('admin.room.delete', $room->id) }}" :title="__('delete')" />
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            {{ __('Hình ảnh') }}
        </div>
        <div class="card-body p-2">
            <x-input-image-ckfinder name="feature_image" showImage="featureImage"  type="multiple" />
        </div>=
    </div>
</div>
