<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todo Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        
    </head>
    <body>

    <div class="overflow-x-auto">
    <table class="table">
    <thead>
        <tr>
            <th></th>
            <th>Task</th>
            <th>Status</th>
            <th>User</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr class="hover">
                <th>1</th>
                <td class="text-red-500 font-bold">{{$task}}</td>
                <td class="text-red-500">Incomplete</td>
                <td class="text-red-500">Pedro</td>

            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </body>
</html>
