<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Document-commit 1,2</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family:sans-sarif;
        }
    </style>
</head>
<body>
     <?php 
       $books = [["name"=>"atomic habits ",
                    "author"=>"james clear"
       ],
       ["name"=>"prena nu zarnu",
       "author"=>"dr.jitendra adhiya"
       ]]; 
     ?>
     <ul>
      <?php foreach($books as $book): ?>

        <li>
              <?= $book["name"]?>
        </li>
      
     <?php endforeach; ?>


     </ul>
</body>
</html>