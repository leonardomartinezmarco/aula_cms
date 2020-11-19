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

if (!defined('WPINC')){
    die;
}

add_action( 'admin_menu', 'gera_item_no_menu' );

function gera_item_no_menu(){
    add_menu_page('Configurações SGDB','Config SGDB','administrator','config-plugin-sgbd','abre_config_plugin_menu','dashicons-database' );
}

function abre_config_plugin_menu(){
    global $wpdb;
    $tableName = $wpdb->prefix . "AGENDA";
    $msg = "";
    $gravou = "";

    if (isset( $_GET['editar'] ) and !isset( $_POST['ID'])){
        $ID =  preg_replace('/\D/', '',  $_GET['editar'] );
        $gravou = '';
        $cadastros = $wpdb->get_results(" SELECT * FROM $tableName where id = " . $ID);
        require 'sgbd_digitar_frontend.php';
    }

    if (isset($_GET['apagar']) and !isset( $_POST['nome'])){
        $ID =  preg_replace('/\D/', '',  $_GET['apagar'] );
        $wpdb->delete( $tableName, array( 'id' => $ID ) );
        $wpdb->delete( $tableName, array( 'id' => $ID ) );
        $msg = 'Apagado com sucesso!';
    }

    if (!isset( $_GET['editar'])){
        if ( isset( $_POST['ID_alterar'] ) and isset( $_POST['nome'] ) and isset( $_POST['whatsapp'] ) ){
            $ID = $_POST['ID_alterar'];
            $nome = $_POST['nome'];
            $whatsapp = $_POST['whatsapp'];
            $wpdb->update($tableName, array("nome"=> $nome,"whatsapp" => $whatsapp), array('id' => $ID));    
            $gravou = "sim"; 
        } 

        else {
            if (isset( $_POST['nome'] ) and isset( $_POST['whatsapp'] ) and !isset( $_GET['ID_alterar'] ) ){
                $nome = $_POST['nome'];
                $whatsapp = $_POST['whatsapp'];
                $wpdb->query( " INSERT INTO $tableName(nome, whatsapp)VALUES('$nome', $whatsapp)");
                $gravou = "sim";
            }            
        }        
        $contatos = $wpdb->get_results(" SELECT * FROM {$wpdb->prefix}AGENDA ");
        require 'sgbd_frontend.php';
    }

}  

function atualizar(){
    global $wpdb;
    $tableName = $wpdb->prefix . "AGENDA";
    $gravou = '';
}

register_activation_hook( __FILE__, 'criar_tabela' );

function criar_tabela(){
    global $wpdb;
    $tableName = $wpdb->prefix . "AGENDA";
    $wpdb->query("CREATE TABLE $tableName (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,nome VARCHAR(255) NOT NULL,whatsapp BIGINT UNSIGNED NOT NULL)");
    $page_title = 'Lista de Contatos 2';
    $page_name  = 'Contatos comerciais - Whatsapp ';
    $conteudo   = '[tela_dinamica_contatos]';
    $page    = get_page_by_title( $page_title );

    if (!$page){
        $post = ['post_title'=> $page_title,'post_content'=> $conteudo,'post_status'=> 'publish','post_type'=> 'page','comment_status'=> 'closed','ping_status' => 'closed','post_category'=> [1]];
        
        $page_id = wp_insert_post( $post );
    }
    else {
        $page->post_status = 'publish';
        $page->post_content = $conteudo;
        
        
    }
}

add_shortcode( 'tela_dinamica_contatos', 'tela_dinamica' );

function tela_dinamica(){
    global $wpdb;
    $tableName = $wpdb->prefix . "AGENDA";
    $contatos = $wpdb->get_results(" SELECT * FROM {$wpdb->prefix}AGENDA ");
    ob_start();
    include 'sgbd_tela_externa.php';
    return ob_get_clean();
}

register_deactivation_hook( __FILE__, 'destruir_tabela' );

function destruir_tabela(){
    global $wpdb;
    $tableName = $wpdb->prefix . "AGENDA";
    $wpdb->query( " DROP TABLE $tableName " );
}