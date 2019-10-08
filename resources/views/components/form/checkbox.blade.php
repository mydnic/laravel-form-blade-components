<input type="hidden" value="0" name="{{$name}}">
<label class="label" for="{{ $name }}">
    <input
        value="1"
        name="{{$name}}"
        id="{{$name}}"
        type="checkbox"
        class="checkbox {{ $errors->has($name) ? 'error' : '' }}"
        @if (old($name))
            checked="checked"
        @elseif (isset($object) and $object->{$name})
            checked="checked"
        @endif
        {{ isset($attributes) ? $attributes : '' }}
    >
    {{ $label }}
</label>
@if ($errors->has($name))
    <p class="helper-error">
        {{ $errors->first($name) }}
    </p>
@endif
