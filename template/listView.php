<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>


<body>  

  <h2>Liste des articles </h2>
  <ul>
    <?php foreach($posts as $post) { ?>
      <li>
          <a href="/formation/TP1/index.php/show?id=<?=$post['id']?>">
            <?=$post['title']?>
          </a> 
      </li>
    <?php } ?>
  </ul>

</body> 