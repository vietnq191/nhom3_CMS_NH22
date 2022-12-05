<?php
        if(!function_exists('glw_enqueue')){
    function glw_enqueue(){
        $ver = time();
        if(is_single( ) && comments_open( ) && get_option( 'thread_comments' ) ){
            wp_enqueue_script( 'comment-reply' );
        }
    }
        }
?>