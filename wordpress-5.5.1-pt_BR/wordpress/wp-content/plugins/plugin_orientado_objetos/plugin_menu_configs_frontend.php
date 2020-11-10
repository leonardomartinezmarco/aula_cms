<div class="wrap">

    <h1>Configurações do Plugin Exemplo com Menu</h1>

    <form action="options.php" method="post" style="margin-top: 25px;">
        <?php
            settings_fields('configs-plugin-poo');
            do_settings_sections('configs-plugin-poo');
        ?>

        <div style="margin-top: 10px;">
            <label for="url-api-auth">URL Autenticação</label>
            <input type="text" name="url-api-auth-poo" value="<?php echo get_option('url-api-auth-poo') ?>">        
        </div>

        <div style="margin-top: 10px;">
            <label for="url-api-endpoint1">URL End Point 1</label>
            <input type="text" name="url-api-endpoint1-poo" value="<?php echo get_option('url-api-endpoint1-poo') ?>">        
        </div>

        <div style="margin-top: 10px;">
            <label for="url-api-token">Token da API</label>
            <input type="text" name="url-api-token-poo" value="<?php echo get_option('url-api-token-poo') ?>">        
        </div>

        <?php
            submit_button();
        ?>        
    </form>
</div>