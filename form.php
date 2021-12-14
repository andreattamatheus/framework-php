<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <div class="w-50 m-5">
        <form class="mb-3" action="./" method="post" enctype="multipart/form-data">
            <?= csrf_input() ?>
            <div class="mb-3">
                <label for="">Nome</label>
                <input class="form-control" type="name" name="name" id="name" value="<?= ($data->name ?? ""); ?>" >
            </div>
            <div class="mb-3">
                <label for="">Sobrenome</label>
                <input class="form-control" type="sobrenome" name="sobrenome" id="sobrenome" value="<?= ($data->sobrenome ?? ""); ?>" >
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input class="form-control" type="email" name="email" id="email" value="<?= ($data->email ?? ""); ?>" >
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>

</body>
</html>