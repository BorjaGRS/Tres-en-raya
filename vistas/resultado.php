<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1><?= $resultado ?></h1>
        <form action="../index.php" method="POST">
            <table>
                <?php foreach ($tablero as $fila => $columnas) { ?>
                    <tr>
                        <?php foreach ($columnas as $columna => $casillas) { ?>
                            <td><input type="text" value="<?= $casillas ?>" size="30" style="height: 90px" readonly/></td>
                            <?php } ?>
                    </tr>
                <?php } ?>
            </table>
            <input type="submit" value="Volver a Jugar" name="volver"/>
        </form>
    </body>
</html>