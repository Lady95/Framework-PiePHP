<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PiePHP - Home</title>
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
                <?php if(empty($_SESSION['id'])):  ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/projet_perso/w2php502p1/user/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register">Register</a>
                    </li>
                <?php endif; ?>
                
                <?php if(isset($_SESSION['id'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/projet_perso/w2php502p1/user/">Home User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="read">Users</a>
                    </li>
                <?php endif; ?>
                    
                </ul>
            </div>
        </nav>
        <main class="container mt-5">
            <h1>Users</h1>
            <section class="m-3">
            <h4>Tables Users</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($tab as $key): ?>
                    <?php  extract($key); 
                    // if (empty($id)){
                    //     $id =null;
                    // }
                    // if (empty($email)){
                    //     $email =null;
                    // }if (empty($password)){
                    //     $password =null;
                    // }if (empty($status)){
                    //     $status =null;
                    // }
                    ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $password; ?></td>
                            <td><?php echo $status; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
            <section class="m-3">
                <h4>ID User Update</h4>
                <form method="post">
                    
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" name="id" id="id">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type ="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text"name="password" class="form-control" id="password">
                </div>
                    <input type="submit" class="btn btn-primary" value="Update">
                </form>
            </section>
            <section class="m-3">
                <h4>ID User Delete</h4>
                <form method="post">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" name="id" id="id">
                    </div>
                        <input type="submit" class="btn btn-primary" value="Delete">
                </form>
            </section>
        </main>
    </body>
</html>
