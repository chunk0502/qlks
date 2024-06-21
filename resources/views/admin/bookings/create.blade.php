@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <x-form :action="route('admin.booking.store')" type="post" :validate="true">
                <div class="row justify-content-center">
                    @include('admin.bookings.forms.create-left')
                    @include('admin.bookings.forms.create-right')
                </div>
                @include('admin.forms.actions-fixed')
            </x-form>
        </div>
    </div>
@endsection
