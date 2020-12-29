<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <!-- Styles -->
        <style>

        </style>

        <livewire:styles/>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased m-3">
        <div class="row">
            <div class="col">
                <h1 class="display-2">Modal Dialog Demo</h1>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Click to open
                </button>

                <livewire:modal-demo/>
            </div>
        </div>

        <livewire:scripts/>
        <script src="{{ asset('/js/app.js') }}"></script>
        <script type="text/javascript">
            window.livewire.on('onCloseModal', (selector) => {
                $(selector).modal('hide');
            });
        </script>
    </body>
</html>
