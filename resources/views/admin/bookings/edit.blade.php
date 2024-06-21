@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <x-form :action="route('admin.booking.update')" type="put" :validate="true">
                <x-input type="hidden" name="id" :value="$booking->id" />
                <div class="row justify-content-center">
                    @include('admin.bookings.forms.edit-left')
                    @include('admin.bookings.forms.edit-right')
                </div>
                @include('admin.forms.actions-fixed')
            </x-form>
        </div>
    </div>
@endsection
