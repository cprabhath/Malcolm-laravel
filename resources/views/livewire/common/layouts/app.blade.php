<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Malcolm Lismore</title>
    <link rel="shortcut icon" href="{!! asset('images/favicon.ico') !!}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet"/>
    @include('livewire.common.libraries.styles')
</head>

<body>
    @include('livewire.common.components.header')
    <div>
        {{ $slot }}
    </div>
    @include('livewire.common.libraries.scripts')

</body>
</html>
