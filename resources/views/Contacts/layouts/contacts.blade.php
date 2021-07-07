<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Contacts</title>
</head>

<div class="font-sans text-center text-5xl uppercase text-green-400 font-bold mt-5">Contacts</div>

<body class="font-sans text-sm" style="background: #edf2f7;">
    <div class="w-1/2 text-center row">
        <div class="col form-inline">
            Per Page: &nbsp;
            <select class="form-control">
                <option>10</option>
                <option>15</option>
                <option>20</option>
            </select>
        </div>
    </div>
    @livewire('contacts-table')
</body>

<footer>
    @livewireScripts
</footer>

</html>