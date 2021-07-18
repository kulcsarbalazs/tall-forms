<div x-data="{ radio: @entangle($field->key){{$field->deferString}} }">
    <fieldset>
@foreach($field->options as $value => $label)
    <x-tall-radio
        :field="$field"
        :value="$value"
        :label="$label"
        wire:key="{{ md5($field->key.$value.$label.$loop->index) }}" />
@endforeach
    </fieldset>
</div>
