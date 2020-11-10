<?php
/*
* Plugin Name: Plugin POO
* Plugin URI: https://google.com
* Description: Plugin orientado a objetos
* Version: 0.0.1
* Author: Leonardo Martinez
* Author URI: https://github.com/leonardomartinezmarco
* License: CC BY
*/

// Não permite acesso direto ao plugin, neste caso a constante abaixo não vai estar definida
if ( !defined('WPINC')){
    die;
}

class plugin {
    function __construct() {
        add_action( 'admin_init', array( $this, 'configs_plugin_menu')  );
        add_action( 'admin_menu', array( $this, 'gera_item_no_menu')   ) ;
    }

    // Utilizando a tabela _options
    function configs_plugin_menu ()
    {
        register_setting( 'configs-plugin-poo', 'url-api-auth-poo' );
        register_setting( 'configs-plugin-poo', 'url-api-endpoint1-poo' );
        register_setting( 'configs-plugin-poo', 'url-api-token-poo' );
    }    

    function gera_item_no_menu(){
        add_menu_page('Configurações do Plugin POO','Config Plugin POO','administrator','config-plugin-poo',array($this, 'abre_config_plugin_menu'),'dashicons-editor-kitchensink' );
    }
    
    function abre_config_plugin_menu(){
        require 'plugin_menu_configs_frontend.php';
    }    
}

new plugin;
