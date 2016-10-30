<html>
    <head>
        
    </head>
    <body>
        <center>
            <h1>Liste des produits</h1>
        <table border="1" >
            <tr>
                <td>
                    id_produit
                </td>
                <td>
                    nbr_stock
                </td>
                <td>
                    label
                </td>
                <td>
                    description
                </td>
            </tr>
            <?php foreach ($products as $product): ?>
            <tr>
                <td>
                    <?php echo $product->id_produit ?>
                </td>
                <td>
                    <?php echo $product->nbr_stock ?>
                </td>
                <td>
                    <?php echo $product->label ?>
                </td>
                <td>
                    <?php echo $product->description ?>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
            </center>
    </body>
</html>