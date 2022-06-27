<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <h1 class="header">TRANSACTIONS<h1>
        <div class="createForm">
            <form method="POST" class="form-inline" action='store'>
                @csrf
                <div class="form-group">
                    <label for="sender">Name of sender:  </label>
                    <input type="text" id="sender" class="form-control" name="sender"><br>
                </div>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" id="amount" class="form-control" name="amount"><br>
                </div>
                <div class="form-group">
                    <label for="receiver">Who are you sending to:</label>
                    <input type="text" id="receiver" class="form-control"  name="receiver"><br>
                </div>
                <button type="submit" class="btn btn-success">SEND</button>
            </form>
        </div>
</body>
</html>