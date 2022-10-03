<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet" />
    <title>Pizzeria Pizze il Napolitano</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <header>
        <div id="header-container">
            <h1>
                <span class="red">PIZZE</span> <span class="black">IL</span>
                <span class="green">NAPOLITANO</span>
            </h1>
            <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="nosotros.html">NOSOTROS</a></li>
                    <li><a href="sucursales.html">SUCURSALES & DELIVERY</a></li>
                    <li><a href="contacto.html">CONTACTO</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="mainContent">
        <h2>NUESTRAS PIZZAS</h2>
        <ul class="gallery">
            <?php
            include_once("config_products.php");
            include_once("db.php");
            $link= new Db();
            $sql="SELECT p.product_name, p.price,date_format(p.start_date,'%d/%m/%y') as date, p.image, c.category_name from products p inner join categories c on c.id_category=p.id_category order by category_name;";
            $stmt=$link->prepare($sql);
            $stmt->execute();
            $data=$stmt->fetchAll();
            foreach($data as $row)
            {
             ?>
             <li>
                <div class="box">
                <figure>
                <img src="<?php echo $row['image']?>">
                <figcaption>
                <h3><?php echo $row['category_name']?> <?php echo $row['product_name']?></h3>
                <p>$<?php echo $row['price']?></p>
                <time><?php echo $row['date']?></time>
                </figcaption>
                </figure>
                <button class="button" value="5">
                Añadir al carro <span class="fa-solid fa-cart-plus"></span>
                </button>
                </div>
             </li>
             <?php
            }            
             ?>
        </ul>

    </div>
    <footer>
        <div id="link">
            <a href="login.html">Acceso privado</a>

            <p>&copy;2022</p>
        </div>
    </footer>
    <script>
        var cantidadBotones = document.querySelectorAll("button").length;
        for (var i = 0; i < cantidadBotones; i++) {
            document.querySelectorAll("button")[i].addEventListener("click", showValue);
        }

        function showValue() {
            console.log(this.value)
            alert("elegiste la pizza numero " + this.value)
        }
    </script>
</body>

</html>