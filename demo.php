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
       $books = [
            [       
                   "name"=>"atomic habits ",
                    "author"=>"james clear",
                    "releaseyear"=>'1989',
                    "purchase"=>'http://example.com'
       ],

            [   
                  "name"=>"prena nu zarnu",
                  "author"=>"dr.jitendra adhiya",
                  "releaseyear"=>'2004',
                  "purchase"=>'http://example.com'
            ],

            [   
              "name"=>"black hole",
              "author"=>"harsh selarka",
              "releaseyear"=>'2029',
              "purchase"=>'http://example.com'
        ],
            [   
          "name"=>"the art od=f decipline",
          "author"=>"harsh selarka",
          "releaseyear"=>'2056',
          "purchase"=>'http://example.com'
    ],


       ]; 
     ?>
     <ul>
      <?php foreach($books as $book): ?>

        <li>
          <a href="$book['purchase']">
            <?= $book["name"]?>
          </a>
              <?= $book["releaseyear"]."<br>";?>
        </li>
      
     <?php endforeach; ?>


     </ul>
</body>
</html>