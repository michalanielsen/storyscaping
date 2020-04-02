<?php
/*
* Plugin Name: Michala, Trine og Liv plugin
* Plugin URI: https://michalasoendergaard.dk/storyscaping
* Description: This is a WordPress Some Plugin based on HTML5, CSS, JS and PHP
* Version: 1.0.3
* Author: Michala, Trine og Liv
* Author: https://michalasoendergaard.dk/storyscaping
* License: GPL2
*/

/*Funtionen til pop-up*/

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
    $content .= '<p id="promotion-body-text">Ønsker du at se mere til Kogle i din hverdag? Så følg os på sociale medier! <br> <br>
    Her kan du følge med i, hvad der sker bag kulissen og lære mere omkring Kogles univers. </p>';
    $content .= '</div>';
    /* end promotion body */
    
    /*Ikoner*/
    $content .= '<section class="someikoner">';
    
    $content .= '<div id="facebook">';
    $content .= '<a href="https://www.facebook.com/koglebryg/"><img src=" '.plugins_url("someplugin/img/facebook-ikon.png").'"></a>';
    $content .= '</div>';
    /* end facebook div */
    
    $content .= '<div id="instagram">';
    $content .= '<a href="https://www.instagram.com/koglebryg/"><img src=" '.plugins_url("someplugin/img/instagram-ikon.png").'"></a>';
    $content .= '</div>';
    /* end instagram div */
    
    $content .= '</section>'; 
    /* end someikoner */
    
/* Dette har vi valgt ikke at slette, da det ændrer på vores overskrifter på hele WP siden. Derfor er det et tomt p-tag*/
    $content .= '<div id="promotion-footer">';
    $content .= '<p id="promotion-footer-text"></p>'; 
    $content .= '</div>'; /* end promotion footer */ 
    $content .= '</form>'; /* end form */ 
    $content .= '</section>'; /* end section form */ 
    $content .= '</div>'; /* end login-form */ 
    
    return $content;
    
}
    #Det første parameter er navnet på shortcoden, som skal defineres, når plug-in'et skal vises. Ved det næste parameter kalder vi på funktionen, som vi har skrevet øverst. Det fremfører pop-up'en
    add_shortcode('show_someform','some_form');

    #Her aktiveres hele plug-innet. To parametre; det første er, hvor der linkes til scripts. Det næste er en funktionen, vi selv definerer. Funktionen kommer under.
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');

    #Her linkes til style. Indeholder også to parametre: ('et unikt navn', 'stien/url som linker til det man ønsker') 
    function register_styles_and_scripts_for_plugin() 
    {
       /* wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');*/
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap');
        
       /* wp_enqueue_style('CustomFontRoboto','https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap');*/
       
        #Her linkes til css'en i vores plug-in mappe
        wp_enqueue_style('CustomStylesheet', plugins_url('someplugin/css/style.css'));
        
        #Man fjerner det oprindelige link til jquery, som WP har linket til inden
        wp_deregister_script('jquery');
        
        #Her indsætter vi vores eget jquery link. Der er fem parametre: 1. et navn. 2. linket. 3.array - er her ikke afhængigt af noget inden det læses. 4. versionsnummer - her skriver vi null. 5. Fortæller hvor man ønsker at loade. True loader i footeren. 
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        #Her linkes til js. Igen fem parametre: 1. Navn. 2. Stien. 3. Array - JS er afhængigt af, at jquery læses først. 4. versionsnummer. 5. Loades i footeren. 
        wp_enqueue_script('CustomScript', plugins_url('someplugin/js/script.js'), array('jquery'), null, true);
    }






