<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Contacts</title>
</head>

<div class="font-sans text-center text-5xl uppercase text-green-400 font-bold mt-5">Contacts</div>

<body class="font-sans text-sm relative" style="background: #edf2f7;">
    @livewire('contacts-table')
</body>

<footer>
    @livewireScripts
</footer>

</html>