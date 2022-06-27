<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="/index">HISTORY</a></li>
                <li><a href="/create">SEND MONEY</a></li>
                <li><a href="/edit">EDIT</a></li>
            </ul>
        </div>
    </nav>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Sender</th>
                    <th>Amount</th>
                    <th>Receiver</th>
                    <th>Date of transaction</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->sender }}</td>
                        <td>{{ $transaction->amount }}</td>
                        <td>{{ $transaction->receiver }}</td>
                        <td>{{ $transaction->created_at}}</td>
                        <td>
                            <form action="{{ route('destroy', $transaction->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
