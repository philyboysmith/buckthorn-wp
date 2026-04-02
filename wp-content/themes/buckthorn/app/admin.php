<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

/**
 * Register ACF Field Group for About Block
 */
add_action('acf/init', function() {
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group([
            'key' => 'group_about_block',
            'title' => 'About Block',
            'fields' => [
                [
                    'key' => 'field_about_title',
                    'label' => 'Title',
                    'name' => 'about_title',
                    'type' => 'text',
                    'required' => 1,
                ],
                [
                    'key' => 'field_about_body',
                    'label' => 'Body',
                    'name' => 'about_body',
                    'type' => 'wysiwyg',
                    'required' => 1,
                    'media_upload' => 1,
                    'toolbar' => 'full',
                ],
                [
                    'key' => 'field_about_stats',
                    'label' => 'Stats',
                    'name' => 'about_stats',
                    'type' => 'repeater',
                    'required' => 0,
                    'layout' => 'block',
                    'button_label' => 'Add Stat',
                    'sub_fields' => [
                        [
                            'key' => 'field_stat_logo',
                            'label' => 'Logo',
                            'name' => 'logo',
                            'type' => 'image',
                            'required' => 1,
                            'return_format' => 'array',
                            'preview_size' => 'thumbnail',
                        ],
                        [
                            'key' => 'field_stat_first_line',
                            'label' => 'First Line',
                            'name' => 'first_line',
                            'type' => 'text',
                            'required' => 1,
                        ],
                        [
                            'key' => 'field_stat_second_line',
                            'label' => 'Second Line',
                            'name' => 'second_line',
                            'type' => 'text',
                            'required' => 1,
                        ],
                        [
                            'key' => 'field_stat_colour',
                            'label' => 'Colour',
                            'name' => 'colour',
                            'type' => 'color_picker',
                            'required' => 1,
                            'default_value' => '#000000',
                        ],
                    ],
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'page',
                        'operator' => '==',
                        'value' => get_option('page_on_front'),
                    ],
                ],
            ],
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
        ]);
    }
});
