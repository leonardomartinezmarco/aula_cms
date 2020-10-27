<?php
/*
* Plugin Name: Menu do Admin
* Plugin URI: https://google.com
* Description: Exemplo de Como trabalhar com o menu do Admin
* Version: 0.0.1
* Author: Leonardo Martinez
* Author URI: https://github.com/leonardomartinezmarco
* License: CC BY
*/

add_action( 'admin_init', 'configs_plugin_menu' );

function configs_plugin_menu ()
{
    register_setting( 'configs-plugin-menu', 'url-api-auth' );
    register_setting( 'configs-plugin-menu', 'url-api-endpoint1' );
    register_setting( 'configs-plugin-menu', 'url-api-token' );
}


add_action( 'admin_menu', 'gera_item_no_menu' );

function gera_item_no_menu()
{
    // Exemplo de adicionar novo menu ao menu principal do admmin
    // add_menu_page('Configurações do Plugin Menu'
    //                 , 'Config Plugin Menu'
    //                 , 'administrator'
    //                 , 'config-plugin-menu'
    //                 , 'abre_config_plugin_menu'
    //                 , 'dashicons-editor-kitchensink' );

    // Exemplo para adicionar em outro menu já existente
    add_submenu_page(   'options-general.php'
                        , 'Configurações do Plugin Menu'
                        ,'Config Plugin Menu'
                        ,'administrator'
                        ,'config-plugin-menu'
                        ,'abre_config_plugin_menu'
                        ,2);
}

function abre_config_plugin_menu()
{
    require 'plugin_menu_configs_frontend.php';
}