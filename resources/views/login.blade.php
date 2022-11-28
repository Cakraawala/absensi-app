<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <form action="/login" method="POST">
            @csrf
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        LOGIN
                    </div>
                    <div class="card-body">

                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" class="form-control" name="username" placeholder=" USERNAME ">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" id="Password" class="form-control" name="password" placeholder="*******">
                    <button class="btn btn-dark mt-4"> SUBMIT </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
