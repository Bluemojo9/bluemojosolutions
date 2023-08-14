<?php
if (!function_exists('techlon_core_custom_icons')) {
    function techlon_core_custom_icons($icons)
    {
        // Adding new Icons
        $icons[] = array(
            'title' => esc_html__('Techlon Icons', 'techlon-core'),
            'icons' => array(
                'icon-techlon-magnifying-glass',
                'icon-techlon-nanotechnology',
                'icon-techlon-consulting',
                'icon-techlon-developer',
                'icon-techlon-project-management',
                'icon-techlon-customer-review',
                'icon-techlon-new-product',
                'icon-techlon-chip',
                'icon-techlon-web-development',
                'icon-techlon-protection',
                'icon-techlon-analysis',
                'icon-techlon-right-quote',
                'icon-techlon-cloud',
                'icon-techlon-dashboard',
                'icon-techlon-group',
                'icon-techlon-system',
                'icon-techlon-cloud-data',
                'icon-techlon-data-visualization',
                'icon-techlon-web-design',
                'icon-techlon-software-engineer',
                'icon-techlon-smart-tv',
                'icon-techlon-link',
                'icon-techlon-technical-support',
                'icon-techlon-cctv',
                'icon-techlon-coding',
                'icon-techlon-apple',
                'icon-techlon-android',
                'icon-techlon-iot',
                'icon-techlon-smartband',
                'icon-techlon-tv',
                'icon-techlon-phone-ringing',
                'icon-techlon-right-arrow',
                'icon-techlon-up-arrow',
                'icon-techlon-left-arrow',
                'icon-techlon-down-arrow',
            ),
        );
        $icons = array_reverse($icons);
        return $icons;
    }
}
add_filter('csf_field_icon_add_icons', 'techlon_core_custom_icons');