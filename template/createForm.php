
  <!-- Afficher un formulaire pour ajouter une entrée dans la base de donnée -->
  <!DOCTYPE html>
  <html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    </head>
  
  
  <body>  
  
    <h2>Insertion d'un article.</h2>

  <form action="/formation/TP1/create.php" method="POST">
    <input type="text" name="title" value="un titre" />
    <input type="text" name="content" value="un contenu" />
    <input type="submit" value="ok"/>
  </form>

</body> 
</html>