<html>
    <head>

    </head>
    <body>
        <h1>Bienvenido a Tres en Raya</h1>
        <h3>Introduce una x en la casilla que quieras</h3>
        <form action="../index.php" method="POST">

            <table>
                <?php foreach ($tablero as $fila => $columnas) { ?>
                    <tr>
                        <?php foreach ($columnas as $columna => $casillas) {
                            if (!empty($casillas)) {
                                ?>
                                <td><input type="text" value="<?= $casillas ?>" name="<?= " tablero[$fila][$columna]" ?>" size="30" style="height: 90px"/></td>
                                <?php } else { ?>
                                <td><input type="text"  name="<?= " tablero[$fila][$columna]" ?>" size="30" style="height: 90px"/></td>
                        <?php }
                    } ?>
                    </tr>
              <?php } ?>
            </table>

            <input type="submit" name="enviajugada" value="Enviar Jugada"/>
        </form>
    </body>
</html>


