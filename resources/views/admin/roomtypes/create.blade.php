@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <x-form :action="route('admin.roomtype.store')" type="post" :validate="true">
                <div class="row justify-content-center">
                    @include('admin.roomtypes.forms.create-left')
                    @include('admin.roomtypes.forms.create-right')
                </div>
                @include('admin.forms.actions-fixed')
            </x-form>
        </div>
    </div>
@endsection
<script src="{{ asset('/libs/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/libs/ckeditor/adapters/jquery.js') }}"></script>
