@if (isset($label))
    <label class="label" for="{{ $name }}">{{ $label }}</label>
@endif

<input id="{{$name}}"
    type="{{ isset($type) ? $type : 'text' }}"
    class="input {{ $errors->has($name) ? 'error' : '' }}"
    name="{{$name}}"
    @if (isset($value))
        value="{{ $value }}"
    @elseif (isset($type) and $type === 'date')
        value="{{
            old($name) ?: (isset($object) ? $object->{$name}->format('Y-m-d') : '')
        }}"
    @else
        value="{{
            old($name) ?: (isset($object) ? $object->{$name} : '')
        }}"
    @endif
    placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
    {{ isset($attributes) ? $attributes : '' }}>

@if ($errors->has($name))
    <p class="helper-error">
        {{ $errors->first($name) }}
    </p>
@endif
