<?php

/**
 * Plugin Name: Pop! Entradas Populares para WordPress
 * Plugin URI: http://www.codigonexo.com/
 * Description: Permite recuperar las entradas más populares (más visitadas).
 * Author: Juan Viñas
 * Author URI: http://www.codigonexo.com/
 * Version: 1.2
 * License: GPLv2 or Later
 * 
 * Text Domain: pop
 * Domain path: /lang/

    Copyright (C) 2012, Codigonexo

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

    ---
    
    (Esta traducción es meramente informativa y carece de validez legal:)
    
    Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo 
    los términos de la Licencia Pública General de GNU según es publicada por la 
    Fundación para el Software Libre, bien de la versión 2 de dicha Licencia o 
    bien (según su elección) de cualquier versión posterior.

    Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA 
    GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la 
    CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de 
    GNU para más detalles.

    Debería haber recibido una copia de la Licencia Pública General junto con este 
    programa. Si no ha sido así, visite <http://www.gnu.org/licenses/>.

*/
 
/**
 * Instancia el Widget / Instance the Widget
 */
function pop_create_widget(){    
    include_once(plugin_dir_path( __FILE__ ).'/includes/widget.php');
    register_widget('pop_widget');
}
add_action('widgets_init','pop_create_widget'); 
 
/**
 * Carga la traducción / Loads the translation
 */
function pop_load_textdomain(){
    load_plugin_textdomain('pop',false,dirname(plugin_basename(__FILE__)).'/lang/');
}
add_action('plugins_loaded','pop_load_textdomain'); 
 
/**
 * Updates the database with the new view posts number. / Actualiza la base de datos con el nuevo número de visitas del post.
 */ 
function pop_set_post_views($post_id){
    $count_key = "pop_post_views";
    $count = get_post_meta($post_id,$count_key,true);
    if($count == ""){
        $count = 1;
        delete_post_meta($post_id,$count_key);
        add_post_meta($post_id,$count_key,$count);
    } else {
        $count++;
        update_post_meta($post_id,$count_key,$count);
    }
}

remove_action( 'wp_head','adjacent_posts_rel_link_wp_head',10,0);

function pop_track_post_views($post_id){
    if( !is_single() && !is_page() )
        return;
    if( empty($post_id) ){
        global $post;
        $post_id = $post->ID;
    }
    pop_set_post_views($post_id);
}
add_action ('wp_head','pop_track_post_views');

/**
 * Gets $num (default: 5) most popular posts (default type: post) / Obtiene los $num posts (de tipo $type) más populares.
 * @param $num: Number of posts (optional, default: 5) / Numero de posts (opcional, por defecto: 5)
 * @param $type: Post type (optional, default: post) / Tipo de entrada (opcional, por defecto: post)
 * @param $order: Order (optional, default: Descendant) / Ordenación (opcional, por defecto: Descendente)
 */
function pop_get_popular_posts($num=5,$type="post",$order="DESC"){
    global $wpdb;
    
    // Checking the order / Comprobando el orden
    $orden = strtoupper($order);
    if($orden != "DESC" && $orden != "ASC")
        $orden = "DESC";
    
    // Checking the num >= 0 / Comprobando que el número sea >= 0
    $limit = $num;
    if($limit < 0)
        $limit = 0;
    
    // Checking $type is a valid post type / Comprobando que el tipo sea un tipo válido
    $posttype = $type;
    $post_types = get_post_types();
    if(!in_array($posttype,$post_types))
        $posttype = "post";
    
    // Gets all IDs from $type / Recuperamos todas las IDs de ese tipo.
    $args = array(
        "post_type"=>$posttype,
        "numberposts"=>-1
    );
    $all_posts = get_posts($args);
    $postids = array();
    foreach($all_posts as $onepost){
        $postids[] = $onepost->ID;
    }
    $allpostsids = implode(",",$postids);

    // Gets the $limit posts, only from $allpostsids IDs, ordered by $orden / Obtenemos las $limit entradas, solo de las IDs $allpostsids, ordenadas por $orden   
    $query = "SELECT post_id FROM $wpdb->postmeta WHERE meta_key = 'pop_post_views' AND post_id IN (".$allpostsids.") ORDER BY meta_value*1 ".$orden." LIMIT ".$limit;
    $pposts = $wpdb->get_col($wpdb->prepare($query));
    $popularposts = array();
    foreach($pposts as $ppost){
        $popularposts[] = get_post($ppost);
    }
    
    // Returning posts / Devolvemos los posts
    return $popularposts;
}

/**
 * Returns string that shows views number / Devuelve un string con el número de visitas a ese post
 * @param $post_id: Post ID
 */
function pop_get_count($post_id){
    $count = get_post_meta($post_id,"pop_post_views",true);
    if($count == "0"){
        return __("0 Views","pop");
    } elseif ($count == "1"){
        return __("1 View","pop");
    } else {
        $string = sprintf( __('%s Views','pop'),$count);
        return $string;
    }
}

?>