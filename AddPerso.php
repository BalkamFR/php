<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>    
            <img src="img/logo_2.png" alt="">
            <div class="menu">

            </div>

    </header>
    <section class='page_add'>
            <form action="" method="post" class="form_add_perso">
                <h1>Ajouter perso</h1>
                <div>
                    <label for="perso_name">Ajouter le nom</label>
                    <input type="text" name="perso_name" id="perso_name">
                </div>
                <div>
                    <label for="pv_perso">pv du personnage</label>
                    <input type="text" name="pv_perso" id="pv_perso">
                </div>
                <div>
                    <label for="type_perso">Type du personnage</label>
                    <input type="text" name="type_perso" id="type_perso">
                </div>
                <div>
                    <label for="puissance_perso">puissance du personnage</label>
                    <input type="text" name="puissance_perso" id="puissance_perso">
                </div>
                <input type="submit" value="Envoyer" id="btn_envoie">
            </form>
    </section>
</body>
</html>