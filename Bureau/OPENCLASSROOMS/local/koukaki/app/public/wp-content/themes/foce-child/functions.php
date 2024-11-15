<?php
function theme_enqueue_scripts() {
    // Charger le style du thème parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Charger le style du thème enfant
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/main.css' );

    // Charger jQuery
    wp_enqueue_script( 'jquery' );

    // Enregistrer le fichier variables.js comme module ES6
    wp_enqueue_script(
        'foce-child-variables', // Nom unique pour ce script
        get_stylesheet_directory_uri() . '/js/variables.js', // Chemin vers variables.js
        array(), // Pas de dépendances
        null,    // Pas de version
        true     // Charger dans le footer
    );

    // Charger le fichier main.js comme module ES6 avec variables.js comme dépendance
    wp_enqueue_script( 'child-main',
        get_stylesheet_directory_uri() . '/js/main.js',  // Chemin vers main.js
        array('jquery', 'foce-child-variables'),  // Dépendances
        null,
        true  // Charger dans le footer
    );

    // Ajouter l'attribut type="module" aux scripts
    add_filter('script_loader_tag', 'add_module_type', 10, 2);
}

function add_module_type($tag, $handle) {
    if (in_array($handle, ['foce-child-variables', 'child-main'])) {
        return str_replace('script', 'script type="module"', $tag);
    }
    return $tag;
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
