@if (isset($label))
    <label class="label" for="{{ $name }}">{{ $label }}</label>
@endif
<select class="select {{ $errors->has($name) ? 'error' : '' }}"
    id="{{$name}}"
    name="{{$name}}"
    {{ isset($attributes) ? $attributes : '' }}
>
    @if (isset($placeholder))
        <option value="" disabled selected>{{ $placeholder }}</option>
    @endif
    @foreach ($options as $key => $option)
        <option
            value="{{ $key }}"
            @if (old($name) === $key)
                selected="selected"
            @elseif (isset($object) and $object->{$name} === $key)
                selected="selected"
            @endif
        >{{ $option }}</option>
    @endforeach
</select>
@if ($errors->has($name))
    <p class="helper-error">
        {{ $errors->first($name) }}
    </p>
@endif
