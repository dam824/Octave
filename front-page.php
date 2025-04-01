<?php

/**
 * Template Name: Accueil
 * Description: A Page Template with a darker design.
 */


use Timber\Timber;

$context = Timber::context();
$context['post'] = Timber::get_post();


//post zone header
$header_post = Timber::get_posts([
    'post_type' => 'post',
    'tax_query' => [
        [
            'taxonomy' => 'zone',
            'field' => 'slug',
            'terms' => 'header',
        ],
    ],
    'posts_per_page' => 1
]);

$context['header_post'] = $header_post[0] ?? null;

 

Timber::render('home.twig', $context)




 ?>