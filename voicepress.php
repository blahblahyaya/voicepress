<?php
/*
Plugin Name: VoicePress Plugin
*/
/**
 * Register a skill post type, with REST API support
 *
 * Based on example at: https://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action( 'init', 'my_skill_cpt' );
function my_skill_cpt() {
    $args = array(
      'public'       => true,
      'show_in_rest' => true,
      'rest_base'    => 'skills',
      'label'        => 'Skills'
    );
    register_post_type( 'skill', $args );
}
