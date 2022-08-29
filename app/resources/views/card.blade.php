<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="http://localhost/newenv/styles/customstyles.css" rel="stylesheet">
</head>
<body>
    <ul class="cards" style="width: 100px; height: 300px">
        <li>
          <div class="card">
            <img src="http://localhost/newenv<?php echo $pizzaIMG; ?>" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <div class="card__header-text">
                  <h3 class="card__title"><?php echo $pizzaName; ?></h3>
                  <span class="card__status"><button>Add to cart!</button></span>
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
</body>
</html>
