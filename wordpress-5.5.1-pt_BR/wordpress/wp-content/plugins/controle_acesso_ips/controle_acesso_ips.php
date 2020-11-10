<?php
/*
* Plugin Name: Controle de IPs
* Plugin URI: https://google.com
* Description: Controle de IP's externos de acessos da aplicação
* Version: 0.0.1
* Author: Leonardo Martinez
* Author URI: https://github.com/leonardomartinezmarco
* License: CC BY
*/

// Não permite acesso direto ao plugin, neste caso a constante abaixo não vai estar definida
if ( !defined('WPINC')){
    die;
}

// Adicionar menu
add_action( 'admin_menu', 'gerar_item_menu' );

function gerar_item_menu()
{
    add_submenu_page(   'options-general.php'
                        , 'Controle IP Externo'
                        ,'Controle IP Externo'
                        ,'administrator'
                        ,'config-controle-ip-menu'
                        ,'abre_config_controle_ip_menu'
                        ,3);
}

function abre_config_controle_ip_menu()
{
    require 'controle_acesso_ip_view.php';
}

// Criar options
add_action( 'admin_init', 'controle_ip' );

function controle_ip ()
{
    register_setting( 'ip_externo', 'ip1' );
    register_setting( 'ip_externo', 'ip2' );
}

