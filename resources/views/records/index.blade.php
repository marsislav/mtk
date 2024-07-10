<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <h1>Records</h1>
    <table id="records-table" class="display">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th><input type="text" placeholder="Search ID" /></th>
            <th><input type="text" placeholder="Search Name" /></th>
            <th><input type="text" placeholder="Search Age" /></th>
            <th><input type="text" placeholder="Search Email" /></th>
        </tr>,
        
        </tfoot>
        <tbody>
        @foreach($records as $record)
            <tr>
                <td>{{ $record->id }}</td>
                <td>{{ $record->name }}</td>
                <td>{{ $record->age }}</td>
                <td>{{ $record->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="{{asset('js/app.js') }}" type="module"></script>
</body>
</html>


