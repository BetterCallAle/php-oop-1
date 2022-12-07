<?php
require_once __DIR__ . "./partials/db.php";

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
    <header>
        <div class="container d-flex align-items-center">
            <h1>FakeFix</h1>
            <small>Abbiamo solo tre film, ma sono belli</small>
        </div>
    </header>
    <main>
        <section id="cards-section" class="py-5">
            <div class="container">
                <div class="row row-cols-3">
                    <?php include __DIR__ . "./partials/cols.php" ?>
                </div>
            </div>
        </section>
    </main>


 </body>
 </html>