<div class="wrap">
    <h1>Configurações SGBD</h1>

<?php  
    if ( count( $contatos ) > 0){
    echo "<table border='1'><tr> <td>Nome</td> <td>Whatsapp</td></tr>";
        foreach ($contatos as $contato) {
            echo "<tr><td>{$contato->nome}</td> <td>{$contato->whatsapp}</td></tr>";
        }
        echo "</table>";
    }
?>

<form method="post" style="margin-top: 25px;">

<div style="margin-top: 10px;">
    <label for="nome">Nome</label>
    <input type="text" name="nome" required value="<?php  ?>">        
</div>

<div style="margin-top: 10px;">
    <label for="whatsapp">Whatsapp</label>
    <input type="number" name="whatsapp" required value="<?php  ?>">        
</div>

    <?php
        submit_button('Gravar Novo');
        ?> 
    </form>
</div>