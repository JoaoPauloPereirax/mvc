<!DOCTYPE html>
<html lang="pt-br">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Adicionar Usuário</title>
</head>
<body>
       <h1>Adicionar novo usuário</h1>
       <hr/>
       
       <form action="<?=$base?>/new" method="post">
              <label>
                     Nome: <br/>
                     <input type="text" name="name">
              </label><br/><br/>
              <label>
                     Email: <br/>
                     <input type="email" name="email">
              </label><br/><br/>
              <input type="submit" value="Adicionar">
       </form>

       <hr/>
       <?php $render('footer'); ?>
</body>
</html>