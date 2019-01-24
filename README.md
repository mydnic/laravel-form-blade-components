# A Collection of Blade Components for Clean Forms

## Installation

You can install this package via composer using this command:

```bash
composer require mydnic/laravel-form-blade-components
```

The package will automatically register itself

You then must publish the components with:

```bash
php artisan vendor:publish --provider="Mydnic\FormBladeComponents\FormBladeComponentsServiceProvider" --tag="blade-components"
```

This will copy the blade components in **resources/views/components/form** and will be automatically registered.

You can customize them the way you want.

## Usage

In your blade views you can now add form elements in a very clean way.

### Input

Include an `<input>` element into your views.

```html
@input([
    'name' => 'first_name',
    'type' => 'text',
    'label' => 'First Name',
    'attributes' => 'required',
    'placeholder' => 'Some placeholder',
])@endinput
```

### Textarea

Include a `<textarea>` element into your views.

```html
@textarea([
    'name' => 'description',
    'label' => 'Description',
    'placeholder' => 'Some placeholder',
])@endtextarea
```

### Checkbox

Include an `<input type="checkbox">` element into your views.

```html
@checkbox([
    'name' => 'is_enabled',
    'label' => 'Enabled',
    'object' => $user
])@endcheckbox
```

### Select

Include a `<select>` element into your views.

```html
@checkbox([
    'name' => 'is_enabled',
    'label' => 'Enabled',
    'object' => $user
])@endcheckbox
```

## Pre Filling Values

By default the input are not filled with any value, like any empty input elements.

### Force filling

You can force fill an attribute by providing a `value` like this:

```html
@input([
    'name' => 'first_name',
    'label' => 'First Name',
    'value' => 'Clément',
])@endinput
```

### Object filling

You can fill an input value using an object attribute by providing an `object`. This is very helpful when editing a resource.

```html
@input([
    'name' => 'first_name',
    'label' => 'First Name',
    'object' => $user,
])@endinput
```

### "Old" value filling

All components make use of the `old()` helper from laravel, allowing the input to be filled in by previous value when submitting a form. This is done automatically and do not need any additional attribute.

## Styling

You can customize the css classes on each element by editing the blade components once they are published.

By default, each element use some default classes:

### Label (all components)

```html
<label class="label"></label>
```

### Input

Default state:

```html
<input class="input">
```

Error state:

```html
<input class="input error">
<p class="helper-error"></p>
```

### Textarea

Default state:

```html
<textarea class="textarea">
```

Error state:

```html
<textarea class="textarea error"></textarea>
<p class="helper-error"></p>
```

### Checkbox

Default state:

```html
<input type="checkbox" class="checkbox">
```

Error state:

```html
<input type="checkbox" class="checkbox error">
<p class="helper-error"></p>
```

### Select

Default state:

```html
<select class="select"></select>
```

Error state:

```html
<select class="select error"></select>
<p class="helper-error"></p>
```
