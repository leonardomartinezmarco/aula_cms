<?php
    $buscaAtual = "";

    if (isset( $buscar)){
        if (!empty($buscar)){
            $buscaAtual =  $buscar;
        }
    }    
?>

<form method="get">
    <input type="text" placeholder="Buscar" name="termo" value="<?php echo $buscaAtual ?>">
    <input type="submit" name="buscar" value="GO!">
</form>

<?php 
    if (count($contatos) > 0){

        echo "<table border='1'> 
            <tr> 
                <td>Nome</td> 
                <td>Whatsapp</td> 
            </tr>";

        foreach ($contatos as $contato){
            echo "  <tr> 
                        <td>{$contato->nome}</td> 
                        <td>{$contato->whatsapp}</td>
                    </tr>
                ";
        }

        echo "</table>";
    }
    
?>