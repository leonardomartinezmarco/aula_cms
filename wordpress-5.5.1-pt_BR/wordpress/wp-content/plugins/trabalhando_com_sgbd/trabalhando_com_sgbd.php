<?php
/*
* Plugin Name: SGBD
* Plugin URI: https://google.com
* Description: Exemplo Trabalhando com SGBD - Sistema gerenciador de banco de dados
* Version: 0.0.1
* Author: Leonardo Martinez
* Author URI: https://github.com/leonardomartinezmarco
* License: CC BY
*/

// Não permite acesso direto ao plugin, neste caso a constante abaixo não vai estar definida
if ( !defined( 'WPINC' ) ){
    die;
}

add_action( 'admin_menu', 'gera_item_no_menu' );

function gera_item_no_menu(){
    add_menu_page('Configurações SGDB','Config SGDB','administrator','config-plugin-sgbd','abre_config_plugin_menu','dashicons-database' );
}

function abre_config_plugin_menu(){
    global $wpdb;

    if (isset( $_POST['nome'] ) and isset( $_POST['whatsapp'])){
        $nome = $_POST['nome'];
        $whatsapp = $_POST['whatsapp'];
        $wpdb->query("INSERT INTO {$wpdb->prefix}AGENDA(nome,whatsapp)VALUES('$nome', $whatsapp)");
    }
    $contatos = $wpdb->get_results(" SELECT * FROM {$wpdb->prefix}AGENDA ");
    require 'sgbd_frontend.php';
}   

register_activation_hook( __FILE__, 'criar_tabela' );

function criar_tabela(){
    global $wpdb;
    $tableName = $wpdb->prefix . "AGENDA";
    $wpdb->query("CREATE TABLE $tableName(id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,nome VARCHAR(255) NOT NULL,whatsapp BIGINT UNSIGNED NOT NULL)");
}

register_deactivation_hook( __FILE__, 'destruir_tabela' );

function destruir_tabela(){
    global $wpdb;
    $tableName = $wpdb->prefix . "AGENDA";
    $wpdb->query( " DROP TABLE $tableName " );
}