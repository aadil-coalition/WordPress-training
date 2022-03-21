<?php

function add_custom_block_colors() {

    add_theme_support('Default Style',
        array(
            array(
                'name' => 'red',
                'slug' => 'red', // I don't know what a slug is?
                'color' => 'red'
            ),
            array(
                'name' => 'green',
                'slug' => 'green', // I don't know what a slug is?
                'color' => 'green'
            ),
            array(
                'name' => 'blue',
                'slug' => 'blue', // I don't know what a slug is?
                'color' => 'blue'
            )
        )
    );
}

add_action( 'after_setup_theme', 'add_custom_block_colors' );
?>