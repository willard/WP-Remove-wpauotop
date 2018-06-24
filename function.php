<?php 

add_filter( 'the_content', 'remove_autop_for_by_page_id', 0 );

function remove_autop_for_by_page_id( $content )
{
    $id = 4157;
    if(is_page($id)){
      remove_filter( 'the_content', 'wpautop' );
      remove_filter( 'the_excerpt', 'wpautop' );
    }
    return $content;
}