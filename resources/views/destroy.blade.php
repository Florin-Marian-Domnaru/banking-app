<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="/index">HISTORY</a></li>
                <li><a href="/create">SEND MONEY</a></li>
                <li><a href="/destroy">DELETE</a></li>
                <li><a href="/edit">EDIT</a></li>
            </ul>
        </div>
    </nav>
    <div class=createForm>
        <form method="POST" action="destroy">
            @csrf
            @method('delete')
            <label for="id">Please select ID to delete:</label>
            <select name="transaction" id="id"><br>
                @foreach ($transactions as $transaction)
                    <option value="{{ $transaction->id }}">{{ $transaction->id }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
</body>

</html>
