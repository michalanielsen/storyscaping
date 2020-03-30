<?php
/*
* Plugin Name: Michala, Trine og Liv plugin
* Plugin URI: https://michalasoendergaard.dk/storyscaping
* Description: This is a WordPress Some Plugin based on HTML5, CSS, JS and PHP
* Version: 1.0.1
* Author: Michala, Trine og Liv
* Author: https://michalasoendergaard.dk/storyscaping
* License: GPL2
*/

function some_form()
{

    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    /*$content .= '<div class="login-face">'; */
    /* $content .= 'alt="login-face"></div>'; */
    $content .= '<div id="promotion-header">';
    $content .= '<h1 id="promotion-header-title"> FØLG KOGLE <br>PÅ SOCIALE MEDIER</br></h1></div>';
    $content .= '<section class="form">'; 
    $content .= '<form action="#">'; 
    $content .= '<div id="promotion-body">';
    $content .= '<p id="promotion-body-text">Ønsker du at se mere til Kogle i din hverdag, så følg os på sociale medier!</p>';
    $content .= '</div>';
    /* $content .= '<div class="input">';
    $content .= '<input type="text" id="username" placeholder="John Mckinsey" name="username" required><i class="fa fa-user fa-1x"></i>'; 
    $content .= '</div>';
     $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="mckinsey@hotmail.com" name="email" required><i class="fa fa-envelope fa-1x"></i>'; 
    $content .= '</div>';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitBtn" name="submitBtn" value="Subscribe Newsletter!">'; 
    $content .= '</div>'; */
    $content .= '<div id="promotion-footer">';
    $content .= '<p id="promotion-footer-text"></p>'; 
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
    
}
    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the some pop-up form 
    add_shortcode('show_someform','some_form');

    # Take action - activate it
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap');
        
        wp_enqueue_style('CustomFontRoboto','https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('someplugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('someplugin/js/script.js'), array('jquery'), null, true);
    }





