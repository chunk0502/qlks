@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <x-form :action="route('admin.service.update')" type="put" :validate="true">
                <x-input type="hidden" name="id" :value="$service->id" />
                <div class="row justify-content-center">
                    @include('admin.services.forms.edit-left')
                    @include('admin.services.forms.edit-right')
                </div>
                @include('admin.forms.actions-fixed')
            </x-form>
        </div>
    </div>
@endsection
<script src="{{ asset('/libs/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/libs/ckeditor/adapters/jquery.js') }}"></script>
