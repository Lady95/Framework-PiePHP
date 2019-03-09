<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PiePHP - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">PiePHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/projet_perso/w2php502p1/user/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projet_perso/w2php502p1/user/register">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="container mt-5">
            <h1>Register</h1>
            <form action="" method="post">
        
            <div class="form-group">
                <label for="email_register">Email</label>
                <input type="text" class="form-control" name="email_register" id="email_register">
            </div>

            <div class="form-group">
                <label for="password_register">Password</label>
                <input type="text" class="form-control" name="password_register" id="password_register">
            </div>

                <input type="submit" class="btn btn-primary" value="send">
            </form>
        </main>
    </body>
</html>