<?php

    $ID = 0;
    $nome = "";
    $whatsapp = "";

    foreach ($cadastros as $cadastro) {
        $ID =  $cadastro->id;
        $nome = $cadastro->nome;
        $whatsapp = $cadastro->whatsapp;
    }

    $path = "admin.php?page=config-plugin-sgbd";
    $url = admin_url($path);    
?>

<h1>Editar cadastro</h1>

<form method="post" action="<?php echo $url ?>" style="margin-top: 25px;">

    <div hidden>
        <input type="text" name="ID_alterar" required value="<?php echo $ID ?>">        
    </div>  

    <div style="margin-top: 10px;">
        <label for="nome">Nome</label>
        <input type="text" name="nome" required value="<?php echo $nome ?>">        
    </div>

    <div style="margin-top: 10px;">
        <label for="whatsapp">Whatsapp</label>
        <input type="number" name="whatsapp" required value="<?php echo $whatsapp ?>">        
    </div>

    <?php
        submit_button('Salvar');
    ?> 

</form>