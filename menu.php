<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="minicrud css/MiniCRUD.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php
            include "includes/header.php";
        ?>
    </header>
    <main>
            <h4>Hier onze menu!</h4>
            <div class="menu">
                <div class="menu-item1">
                    <div class="menu-foto1">
                        <img src="afbeeldingen/pizza margherita.jpg" alt="Pizza Margherita">
                        <div class="naam">
                            Pizza Margherita
                            <div class="beschrijving">
                                Tomaat, mozzarella, verse basilicum.
                            </div>
                            <div class="prijs">
                                €5,99
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-item2">
                    <div class="menu-foto">
                        <img src="afbeeldingen/Pizza Marinara.jpg" alt="Pizza Marinara">
                        <div class="naam">
                            Pizza Marinara
                            <div class="beschrijving">
                                Tomaat, knoflook, oregano en extra vergine olijfolie.
                            </div>
                            <div class="prijs">
                                €7,99
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-item3">
                    <div class="menu-foto">
                        <img src="afbeeldingen/pizza alla diavola.jpg" alt="Pizza alla Diavola">
                        <div class="naam">
                            Pizza alla Diavola
                            <div class="beschrijving">
                                Tomaat, mozzarella, oregano, salami en extra vierge olijfolie.
                            </div>
                            <div class="prijs">
                                €7,99
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-item4">
                    <div class="menu-foto">
                        <img src="afbeeldingen/Pizza tonno.jpg" alt="Pizza Tonno">
                        <div class="naam">
                            Pizza Tonno
                            <div class="beschrijving">
                                Rode ui, mozzarella, tonijn, pesto rosso, rucola en extra vierge olijfolie.
                            </div>
                            <div class="prijs">
                                €7,99
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-item5">
                    <div class="menu-foto">
                        <img src="afbeeldingen/pizza vegetariana.jpg" alt="Pizza Vegetariana">
                        <div class="naam">
                            Pizza Vegetariana
                            <div class="beschrijving">
                                Rode ui, paprika, courgette, feta en verse basilicum.
                            </div>
                            <div class="prijs">
                                €5,99
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-item6">
                    <div class="menu-foto">
                        <img src="afbeeldingen/calzone-met-gehakt.png" alt="Calzone Pizza">
                        <div class="naam">
                            Calzone Pizza
                            <div class="beschrijving">
                                Salami, paprika, Italiaanse kruiden, mozzarella en olijfolie.
                            </div>
                            <div class="prijs">
                                €8,99
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    </main>
    <footer>
        <?php
            include "includes/footer.php";
        ?>
    </footer>
    <script src="javascript/menu.js"></script>
</body>
</html>