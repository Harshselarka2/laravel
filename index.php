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
       $books = ["atomic habits ",
       "prena nu zarnu",
        " 7 habits of highly influnteal ppl"];
     ?>
    <h1>you have read <?=$books[2]?></h1>
     <ul>
        <?php
         foreach($books as $book){
            echo "you have read $book". "<br>";
        }
        ?>
     </ul>
</body>
</html>