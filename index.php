<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="_assets/_css/style.css">
    <title>Acadêmia | in</title>
</head>
<body>

    <form action="_routes/acesso.php" method="POST" id="login" class="form-label">
        <input type="text" name="user[]"  class="form-control" placeholder="usuário" required>
        <input type="password" name="user[]" class="form-control" placeholder="senha" required>
        <input type="submit" value="LogIn" class="btn btn-danger">
    </form>

</body>
</html>