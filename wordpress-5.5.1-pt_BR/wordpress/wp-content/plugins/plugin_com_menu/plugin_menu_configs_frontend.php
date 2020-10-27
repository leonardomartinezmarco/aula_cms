<div class="wrap">
    <h1>Configurações do Plugin Exemplo com Menu</h1>

    <form action="options.php" method="post" style="margin-top: 25px;">
        <?php
            settings_fields('configs-plugin-menu');
            do_settings_sections('configs-plugin-menu');
        ?>

        <div style="margin-top: 10px;">
            <label for="url-api-auth">URL Autenticação</label>
            <input type="text" name="url-api-auth" value="<?php echo get_option('url-api-auth') ?>">        
        </div>

        <div style="margin-top: 10px;">
            <label for="url-api-endpoint1">URL End Point 1</label>
            <input type="text" name="url-api-endpoint1" value="<?php echo get_option('url-api-endpoint1') ?>">        
        </div>

        <div style="margin-top: 10px;">
            <label for="url-api-token">Token da API</label>
            <input type="text" name="url-api-token" value="<?php echo get_option('url-api-token') ?>">        
        </div>

        <?php
            submit_button();
        ?>        
    </form>
</div>