@if (isset($label))
    <label class="label" for="{{ $name }}">{{ $label }}</label>
@endif

<textarea id="{{$name}}"
    class="textarea {{ $errors->has($name) ? 'error' : '' }}"
    name="{{$name}}"
    rows="4"
    placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
    {{ isset($attributes) ? $attributes : '' }}>{{ old($name) ?: (isset($object) ? $object->{$name} : '') }}</textarea>

@if ($errors->has($name))
    <p class="helper-error">
        {{ $errors->first($name) }}
    </p>
@endif
