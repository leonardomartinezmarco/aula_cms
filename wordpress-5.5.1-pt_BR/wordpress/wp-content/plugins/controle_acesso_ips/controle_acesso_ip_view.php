<div class="wrap">
    <h1>Configurações Controle de acesso IP Externo</h1>

    <form action="options.php" method="post" style="margin-top: 25px;">
        <?php
            settings_fields('ip_externo');
            do_settings_sections('ip_externo');
        ?>

        <div style="margin-top: 10px;">
            <label for="ip1">IP Externo 1</label>
            <input type="text" name="ip1" value="<?php echo get_option('ip1') ?>">        
        </div>

        <div style="margin-top: 10px;">
            <label for="ip2">IP Externo 2</label>
            <input type="text" name="ip2" value="<?php echo get_option('ip2') ?>">        
        </div>

        <?php
            submit_button();
        ?>        
    </form>
</div>