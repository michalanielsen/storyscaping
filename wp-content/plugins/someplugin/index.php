<?php
/*
* Plugin Name: Michala, Trine og Liv plugin
* Plugin URI: https://michalasoendergaard.dk/storyscaping
* Description: This is a WordPress Some Plugin based on HTML5, CSS, JS and PHP
* Version: 1.0.2
* Author: Michala, Trine og Liv
* Author: https://michalasoendergaard.dk/storyscaping
* License: GPL2
*/

function some_form()
{

    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>'; /* end popupclosebutton */ 
    $content .= '<div id="promotion-header">';
    $content .= '<h1 id="promotion-header-title"> FØLG KOGLE <br>PÅ SOCIALE MEDIER</br></h1></div>'; /* end promotion header */
    $content .= '<section class="form">'; 
    $content .= '<form action="#">'; 
    $content .= '<div id="promotion-body">';
    $content .= '<p id="promotion-body-text">Ønsker du at se mere til Kogle i din hverdag, så følg os på sociale medier!</p>';
    $content .= '</div>';
    /* end promotion body */
    
    $content .= '<section class="someikoner">';
    
    $content .= '<div id="facebook">';
    $content .= '<img src=" '.plugins_url("someplugin/img/facebook-ikon.png").'">';
    $content .= '</div>';
    /* end facebook div */
    
    $content .= '<div id="instagram">';
    $content .= '<img src=" '.plugins_url("someplugin/img/instagram-ikon.png").'">';
    $content .= '</div>';
    /* end instagram div */
    
    $content .= '<div id="linkedin">';
    $content .= '<img src=" '.plugins_url("someplugin/img/linkedin-ikon.png").'">';
    $content .= '</div>';
    /* end lindkin div */
   
    $content .= '</section>'; /* end someikoner */ 

    $content .= '<div id="promotion-footer">';
    $content .= '<p id="promotion-footer-text"></p>'; 
    $content .= '</div>'; /* end promotion footer */ 
    $content .= '</form>'; /* end form */ 
    $content .= '</section>'; /* end section form */ 
    $content .= '</div>'; /* end login-form */ 
    
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






