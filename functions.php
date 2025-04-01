<?php

require_once __DIR__ . '/vendor/autoload.php';

use Timber\Timber;
use Timber\Site;

Timber::init();
Timber::$dirname = ['templates', 'views'];

class OctaveSite extends Site
{
    public function __construct()
    {
        add_theme_support('menus');
        add_theme_support('post-thumbnails');

        add_action('after_setup_theme', [$this, 'register_menus']);
        add_action('init', [$this, 'register_taxonomies']);

        add_filter('timber/context', [$this, 'add_to_context']);

        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);

        parent::__construct();
    }

    public function enqueue_scripts()
    {
        // Fichier CSS généré par Tailwind
        wp_enqueue_style('tailwind', get_template_directory_uri() . '/static/style.css');


         
        //  JS plus tard
         
         
    }

    

    public function register_menus()
    {
        register_nav_menus([
            'primary' => __('Menu principal')
        ]);
    }

    public function register_taxonomies()
    {
      register_taxonomy(
        'zone',
        'post',
        [
          'label' => 'Zones du site',
          'hierarchical' => true,
          'public' => true,
          'show_ui' => true,
          'show_in_rest' => true,
          'rewrite' => ['slug' => 'zone'],
        ]
      );
    }



    public function add_to_context($context)
    {
        $context['menu'] = Timber::get_menu('primary');
        return $context;
    }
}

new OctaveSite();
