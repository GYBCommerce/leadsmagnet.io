<?php

/**
 * Plugin Name: LeadMagnet.io
 * Plugin URI: http://www.emonx.com
 * Description: LeadMagnet.io generator
 * Version: 1.0
 * Author: Muhammad Ilyas
 * Author URI: http://www.emonx.com
 * License: GPL2
 */
function james_adds_to_the_head() {
    wp_enqueue_script( 'chat-bot.js', 'https://api.chatbotapp.us/chatbot/live_chat.js', false );
    
}

add_action( 'wp_enqueue_scripts', 'james_adds_to_the_head' );

?>
