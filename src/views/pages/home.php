<!DOCTYPE html>
<html lang="pt-br">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Lista</title>
</head>
<body>
       <?php $render('header'); ?>
       <hr/>
       
       <a href="<?= $base ?>/new">Novo Usuário</a>
       <hr/>
       <table border="1" width="100%">
              <tr>
                     <th>ID</th>
                     <th>NOME</th>
                     <th>EMAIL</th>
                     <th>AÇÕES</th>
              </tr>
              <?php foreach($data as $user): ?>
                     <tr>
                            <td><?= $user['id']; ?></td>
                            <td><?= $user['name']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td>
                                   <a href="<?=$base?>/user/<?=$user['id']?>/edit">[Editar]</a>
                                   <a href="<?=$base?>/user/<?=$user['id']?>/del">[Excluir]</a>
                            </td>
                     </tr>
              <?php endforeach; ?>
       </table>
       <hr/>
       <?php $render('footer'); ?>
</body>
</html>