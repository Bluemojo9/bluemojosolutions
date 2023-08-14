<?php
/*
 * Adding custom icons to icon control in Elementor
 */

function techlon_register_custom_icon_library($tabs = array())
{

    $techlon_icons = array(
     
          'consultant',
          'help',
          'quotes',
          'magnifying-glass',
         'consulting',
         'new-product',
         'chip',
         'web-development',
        'protection',
        'analysis',
        'right-quote',
        'cloud',
        'dashboard',
        'group',
        'system',
        'cloud-data',
        'data-visualization',
        'web-design',
        'software-engineer',
        'smart-tv',
        'link',
        'technical-support',
        'cctv',
        'coding',
        'apple',
        'android',
        'iot',
        'smartband',
        'tv',
        'phone-ringing',
        'right-arrow',
        'up-arrow',
        'left-arrow',
        'down-arrow',
        'nanotechnology',
        'ustomer-review',
        'project-management',
        'developer',

      
           

    );
    $tabs['techlon-icons'] = array(
        'name' => 'techlon-icons',
        'label' => esc_html__('Techlon Icons', 'techlon-core'),
        'labelIcon' => 'fas fa-icons',
        'prefix' => 'icon-techlon-',
        'displayPrefix' => 'icon-techlon',
        'icons' => $techlon_icons,
        'url' => get_theme_file_uri('assets/vendors/techlon-icons/style.css'),
        'ver' => '1.2.2',
    );

  

    return $tabs;
}

add_filter('elementor/icons_manager/additional_tabs', 'techlon_register_custom_icon_library');
