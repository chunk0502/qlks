@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <x-form :action="route('admin.roomtype.update')" type="put" :validate="true">
                <x-input type="hidden" name="id" :value="$roomtype->id" />
                <div class="row justify-content-center">
                    @include('admin.roomtypes.forms.edit-left')
                    @include('admin.roomtypes.forms.edit-right')
                </div>
                @include('admin.forms.actions-fixed')
            </x-form>
        </div>
    </div>
@endsection
<script src="{{ asset('/libs/ckeditor/ckeditor.js') }}">
    CKEDITOR.replace('editor1', {
        extraPlugins: 'uploadimage'
    });
</script>
<script src="{{ asset('/libs/ckeditor/adapters/jquery.js') }}"></script>
