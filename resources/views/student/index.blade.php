<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>{{$title}}</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
                {{-- @foreach ( $user3 as  $user) --}}
            <tr>

                    <th>{{$user3->id}}</th>
                    <th>{{$user3->name}}</th>
                    <th>{{$user3->email}}</th>
            </tr>

                {{-- @endforeach --}}
        </tbody>
    </table>
</body>
</html>
