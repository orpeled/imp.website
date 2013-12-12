<?php

/**
 * Widget que muestra las entradas más populares
 */
 
class pop_widget extends WP_Widget {
    
    function pop_widget(){
        $widget_ops = array('classname' => 'pop_widget', 'description' => __('Displays the most popular posts','pop') );
        $this->WP_Widget('pop_widget', __("Popular Posts","pop"), $widget_ops);
    }
    
    function widget($args,$instance){
        echo $before_widget;    
        ?>
        <aside id='popular_posts' class='widget pop_widget' style='overflow:hidden;'>
            <h3 class='widget-title'><?=$instance["pop_title"];?></h3>
            <?php 
                $populars = pop_get_popular_posts($instance['pop_num'],$instance['pop_post_type'],$instance['pop_order']); 
                if($populars){
                    echo("<ul>");
                    foreach($populars as $pop){
                        $excerpt = $pop->post_excerpt;
                        $content = $pop->post_content;
                        echo("<li><div class='popentry' style='float:left;width:100%;'>");
                            if($instance['pop_show_thumb']){
                                echo("<div class='popthumb' style='float:left; margin-right: 5px;'><a href='".get_permalink($pop->ID)."'>".get_the_post_thumbnail($pop->ID,array(50,50))."</a></div>");
                            }
                            echo("<div class='popcontent' style='float:left;'>");
                            echo("<div class='pop_title'><a href='".get_permalink($pop->ID)."'>".get_the_title($pop->ID)."</a> ".($instance["pop_show_count"] == "1" ? "<span class='pop_count'>(".pop_get_count($pop->ID).")</span></div> " : "</div> "));
                            
                            if($instance['pop_show_excerpt'] == "1"){
                                echo("<div class='pop_excerpt'>".($excerpt != "" ? $excerpt : limit_the_content(15,$content))."</div>");
                            }
                            echo("</div>");
                        echo("</div></li>");
                    }
                    echo("</ul>");
                }
            ?>
        </aside>
        <?php
        echo $after_widget;
    }
    
    function update($new_instance, $old_instance){
        // Save widget options  
        $instance = $old_instance;
        $instance["pop_title"] = strip_tags($new_instance["pop_title"]);
        $instance['pop_num'] = strip_tags($new_instance['pop_num']);
        $instance['pop_order'] = strip_tags($new_instance['pop_order']);
        $instance['pop_post_type'] = strip_tags($new_instance['pop_post_type']);
        $instance['pop_show_count'] = strip_tags($new_instance['pop_show_count']);
        $instance['pop_show_thumb'] = strip_tags($new_instance['pop_show_thumb']);
        $instance['pop_show_excerpt'] = strip_tags($new_instance['pop_show_excerpt']);
        return $instance;     
    }
    
    function form($instance){
        // Widget form.
        $title = esc_attr($instance["pop_title"]);
        if($title == "")
            $title = __("Popular Posts","pop");
        $num = esc_attr($instance['pop_num']);
        if($num == "")
            $num = "5"; 
        $order = esc_attr($instance['pop_order']);
        if($order == "")
            $order = "DESC";
        $post_type = esc_attr($instance['pop_post_type']);
        if($post_type == "")
            $post_type = "post";
        $shownum = esc_attr($instance['pop_show_count']);
        if($shownum == "")
            $shownum = 0;
        $showthumb = esc_attr($instance['pop_show_thumb']);
        if($showthumb == "")
            $showthumb = 0;
        $showexc = esc_attr($instance['pop_show_excerpt']);
        if($showexc == "")
            $showexc = 0;
        ?>
         <p>
            <label for="<?php echo $this->get_field_id('pop_title'); ?>"><?= __('Widget Title','pop'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('pop_title'); ?>" name="<?php echo $this->get_field_name('pop_title'); ?>" type="text" value="<?php echo $title; ?>" />
         </p>  
         <p>
            <label for="<?php echo $this->get_field_id('pop_num'); ?>"><?= __('Max. Posts to show','pop'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('pop_num'); ?>" name="<?php echo $this->get_field_name('pop_num'); ?>" type="text" value="<?php echo $num; ?>" />
         </p>    
         <p>
            <label for="<?php echo $this->get_field_id('pop_order'); ?>"><?= __('Order','pop'); ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id('pop_order'); ?>" name="<?php echo $this->get_field_name('pop_order'); ?>">
                <option value="DESC" <?=($order == "DESC" ? "selected='selected'" : "")?> ><?=__('Descendant','pop')?></option>
                <option value="ASC" <?=($order == "ASC" ? "selected='selected'" : "")?> ><?=__('Ascendant','pop')?></option>
            </select>
         </p>      
         <p>
            <label for="<?php echo $this->get_field_id('pop_post_type'); ?>"><?= __('Post type','pop'); ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id('pop_post_type'); ?>" name="<?php echo $this->get_field_name('pop_post_type'); ?>">
                <option value='post'>-- <?=__('Select a post type','pop')?> --</option>
                <?php
                    $ptypes = get_post_types(array('public'=>'true'),"object");
                    foreach($ptypes as $type){
                        if($type->name != "attachment")
                            echo("<option value='".$type->name."' ".(($type->name == $post_type) ? "selected='selected'" : "").">".$type->labels->name."</option>");
                    }
                ?>
            </select>
         </p>       
         <p>
            <input type='checkbox' id='<?=$this->get_field_id('pop_show_count')?>' name='<?=$this->get_field_name('pop_show_count')?>' value='1' <?php if($shownum == 1) echo "checked='checked'"; ?> >
            <label for="<?php echo $this->get_field_id('pop_show_count'); ?>"><?= __('Show count','pop'); ?></label>
         </p>    
         <p>
            <input type='checkbox' id='<?=$this->get_field_id('pop_show_thumb')?>' name='<?=$this->get_field_name('pop_show_thumb')?>' value='1' <?php if($showthumb == 1) echo "checked='checked'"; ?> >
            <label for="<?php echo $this->get_field_id('pop_show_thumb'); ?>"><?= __('Show thumbnail','pop'); ?></label>
         </p>    
         <p>
            <input type='checkbox' id='<?=$this->get_field_id('pop_show_excerpt')?>' name='<?=$this->get_field_name('pop_show_excerpt')?>' value='1' <?php if($showexc == 1) echo "checked='checked'"; ?> >
            <label for="<?php echo $this->get_field_id('pop_show_excerpt'); ?>"><?= __('Show excerpt','pop'); ?></label>
         </p> 
         <?php
    }    
} 

function limit_the_content($num, $content) {
    $theContent = $content;
    $output = preg_replace('/<img[^>]+./','', $theContent);
    $output = preg_replace( '/<blockquote>.*<\/blockquote>/', '', $output );
    $output = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $output );
    $limit = $num+1;
    $content = explode(' ', $output, $limit);
    array_pop($content);
    $content = implode(" ",$content)."...";
    return $content;
}

?>
