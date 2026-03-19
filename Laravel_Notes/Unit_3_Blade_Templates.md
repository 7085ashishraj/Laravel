# Unit III: Blade Templates

## Creating Templates
Blade is the simple, yet powerful templating engine provided by Laravel. Unlike other PHP templating engines, Blade does not restrict you from using plain PHP code in your views. Blade files end in `.blade.php` and are stored in `resources/views`.

## PHP Output
You may display data passed to your Blade views by wrapping the variable in square brackets `{{ }}`. This automatically calls PHP's `htmlspecialchars` function to prevent XSS attacks.

**Example:**
```html
Hello, {{ $name }}.
```

To display unescaped data (e.g., HTML containing raw tags):
```html
{!! $htmlString !!}
```

## Control Structures
Blade provides convenient shortcuts for common PHP control structures.

**If Statements:**
```html
@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif
```

**Loops:**
```html
@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach

@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor
```

## Templates Inheritance
Blade allows you to define a layout and extend it in child pages.

**Layout File (`resources/views/layouts/app.blade.php`):**
```html
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
```

**Child Template (`resources/views/child.blade.php`):**
```html
@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <p>This is my body content.</p>
@endsection
```
