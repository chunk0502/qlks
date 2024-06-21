<div class="col-12 col-md-9">
    <div class="card">
        <div class="row card-body">
            <!-- roomname  -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('name'):</label>
                    <x-input name="name" :value="$room->name" :required="true" :placeholder="__('name')" />
                </div>
            </div>

            <!-- roomtype -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">{{ __('Kiểu phòng') }}:</label>
                    <x-select name="id_roomtype" :required="true">
                        <x-select-option value="" :title="__('')" />
                        @foreach ($roomtype as $type => $value)
                            <x-select-option :option="$room->$roomtype" :value="$type" :title="__($value)" />
                        @endforeach
                    </x-select>
                </div>
            </div>

            <!-- location -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('location'):</label>
                    <x-input type="text" :value="$room->location"  name="location" :required="true" />
                </div>
            </div>

            <!-- price -->
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label class="control-label">@lang('price'):</label>
                    <x-input type="text" :value="$room->price" name="price" :required="true" />
                </div>
            </div>
        </div>
    </div>
</div>
