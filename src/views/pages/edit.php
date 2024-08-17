<!DOCTYPE html>
<html lang="pt-br">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Adicionar Usuário</title>
</head>
<body>
       <h1>Editar usuário</h1>
       <hr/>
       
       <form action="<?=$base?>/user/<?=$user['id']?>/edit" method="post">
              <label>
                     Nome: <br/>
                     <input type="text" name="name" value="<?=$user['name']?>">
              </label><br/><br/>
              <label>
                     Email: <br/>
                     <input type="email" name="email" value="<?=$user['email']?>">
              </label><br/><br/>
              <input type="submit" value="Salvar">
       </form>

       <hr/>
       <?php $render('footer'); ?>
</body>
</html>