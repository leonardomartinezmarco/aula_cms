<?php
/*
* Plugin Name: Olá Mundo, meu primerio plug-in
* Plugin URI: https://sp.senac.br
* Description: Um plug-in muito simples que apenas coloca um "Olá mundo" nos posts
* Version: 0.0.1
* Author: Leonardo Martinez
* Author URI: https://www.youtube.com/watch?v=Ps_eAJJQjJQ
* License: CC BY
*/


// Não permite acesso direto ao plugin, neste caso a constante abaixo não vai estar definida
if ( !defined('WPINC')){
    die;
}

// Exemplo de como utilizar um filter hook
add_filter('login_errors', 'nova_mensagem_de_erro');

function nova_mensagem_de_erro() {
    return 'Credenciais Inválidas!';
}

// Exemplo de como utilizar um action hook
add_action('wp-head', 'coloca_comentario');

function coloca_comentario() {
    if(is_single()) {
        echo '\\n \\n';
        echo '<meta property="og:title" content="' . get_the_title() .'">';
        $title = wp_title('', false);
        echo '<meta property="og:site_name" content="' . $title .'">';
        echo '<meta property="og:url" content="' . get_permalink( get_the_ID() ) .'">';
        echo '\\n \\n';
    }
}
