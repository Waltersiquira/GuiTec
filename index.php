<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiTec</title>
</head>
<body>
    <h1>GuiTec</h1>
    <hr>
    <table>
        <?php 
        require_once 'includes/lojas.php';
        $busca = $l->query('select * from tec');
        if (!$busca){
            echo 'erro';
        } else {
            if ($busca->num_rows == 0){
                echo 'erro';
            } else {
                while ($reg=$busca->fetch_object()){
                    echo "<tr><td><a href='p1.php?i=$reg->id'><img src='$reg->imagem' width='220'></a></td><td>$reg->nome</td></tr>";
                }
            }
        }
        ?>
    </table>
</body>
</html>