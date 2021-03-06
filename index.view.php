<!DOCTYPE html>

<html>

    <head>
        <meta charset='utf-8'>
        <title>Liste de courses</title>
    </head>

    <body>

        <form method="post" action="ajouter_produit.php">
            <p>

                <label for="quantite"></label>
                <input type="number" name="quantite" id="quantite" min="1" />

                x

                <label for="produit"></label>
                <input type="text" name="produit" id="produit" placeholder="Produit" />

                <input type="submit" value="Ajouter" />
            
            </p>
        </form>

        <ul>
            <?php

                foreach($achats as $achat) {

                    echo '<li>';

                        if ($achat->pris) {
                            echo '<strike>'.$achat->quantite.' x '.$achat->produit.'</strike>';
                        } else {
                            echo '<a href="prendre.php?id='.$achat->id.'">&check;</a>' . $achat->quantite.' x '.$achat->produit;
                        }
                    
                    echo '</li>';
                }

            ?>
        </ul>

        <form method="post" action="supprimer_produits.php">

            <input type="submit" name="supprimer_pris" value="Supprimer les produits pris" />

            <input type="submit" name="supprimer_liste" value="Supprimer la liste" />

        </form>
    </body>

</html>