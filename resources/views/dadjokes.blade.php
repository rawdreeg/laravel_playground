<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel / Livewire Dadjokes</title>

    @livewireStyles
</head>
<body>
<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <livewire:dadjokes />
</div>
@livewireScripts
</body>

</html>
