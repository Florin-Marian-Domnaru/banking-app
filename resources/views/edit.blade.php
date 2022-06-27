<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                <li><a href="/edit">EDIT</a></li>
            </ul>
        </div>
    </nav>
    <div class="createForm">
        <form method="POST" class="form-inline" action="update">
            @csrf
            <div class="form-group">
                <label for="id">Please select ID to edit:</label>
                    <select name="transaction" id="id"><br>
                        @foreach ($transactions as $transaction)
                        <option value="{{ $transaction->id }}">{{ $transaction->id }}</option>
                    @endforeach
                    </select><br>
            </div>

            <div class="form-group">
                <label for="sender">New sender: </label>

                <input 
                    type="text" 
                    id="sender" 
                    name="sender"
                    >
            </div>

            <div class="form-group">
                <label for="amount">New Amount:</label>

                <input 
                    type="number" 
                    id="amount" 
                    name="amount"
                >
            </div>

            <div class="form-group">
                <label for="receiver">New Receiver:</label>

                <input 
                    type="text" 
                    id="receiver" 
                    name="receiver">
                <button type="submit" class="btn btn-success">EDIT</button>
            </div>
        </form>
    </div>
</body>

</html>
