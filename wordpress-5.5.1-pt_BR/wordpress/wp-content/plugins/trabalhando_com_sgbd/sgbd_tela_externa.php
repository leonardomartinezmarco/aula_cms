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