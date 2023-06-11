<?php

/**
 * Creating Plans Array
 */
add_action('after_setup_theme', 'plans_settings_array');
function plans_settings_array()
{
    global $plans;
    $plans = array();

    while (have_rows('pp_plans_details', 'option')) {
        the_row();
        $i = 0;
        while (have_rows('plans_names')) {
            the_row();
            $plan_name = sanitize_text_field(get_sub_field('name'));
            $plans_names = array(
                'plans_names' => $plan_name,
                'plans_type' => array()
            );
            array_push($plans, $plans_names);
            $i++;
        }
        $j = 0;
        while ($j < $i) {
            $k = 0;
            while (have_rows('plans_types')) {
                the_row();
                $plan_type = sanitize_text_field(get_sub_field('type'));
                $plans[$j]['plans_type'][$k] = $plan_type;
                $k++;
            }
            $j++;
        }
    }
}

/**
 * Inserting Rows in the plans page 
 */
add_filter('acf/load_value/name=pp_plan_details', 'plans_settings_details', 10, 3);
function plans_settings_details($value, $post_id, $field)
{
    global $plans;
    // print("<pre>" . print_r($value, true) . "</pre>");
    $new_arr = array('field_6470c6c02ecc8' => array());

    foreach ($plans as $key => $plan) {
        $new_arr['field_6470c6c02ecc8'][] =  array();
        $new_arr['field_6470c6c02ecc8'][$key]['field_647360f7a5f60'] = array();
        $new_arr['field_6470c6c02ecc8'][$key]['field_64748b7cc740b'] = $value['field_6470c6c02ecc8'][$key]['field_64748b7cc740b'];
        foreach ($plan['plans_type'] as $index => $plan_type) {

            $the_value = (isset($value['field_6470c6c02ecc8'][$key]['field_647360f7a5f60'][$index]['field_6470c70e2ecca'])) ? $value['field_6470c6c02ecc8'][$key]['field_647360f7a5f60'][$index]['field_6470c70e2ecca'] : '';
            $new_arr['field_6470c6c02ecc8'][$key]['field_647360f7a5f60'][] = array(
                'field_6470c6ed2ecc9' => $plan_type,
                'field_6470c70e2ecca' => $the_value
            );
        }
    }
    // print("<pre>" . print_r($new_arr, true) . "</pre>");
    $value = $new_arr;
    return $value;
}

/**
 * Adding The Plan name label 
 */
add_action('acf/render_field/type=repeater', 'output_pricing_names', 8);
function output_pricing_names($field)
{
    global $plans;
    if ($field['_name'] == 'plans_types_sep') {
        // print("<pre>" . print_r($field, true) . "</pre>");
        foreach ($plans as $key => $plan) {
            if ($field['prefix'] == 'acf[field_6470c5902ecc6][field_6470c6c02ecc8][row-' . $key . ']') {
                printf('<div class="pricing-name-label"><h3>%s:</h3></div>', ucfirst($plan['plans_names']));
            }
        }
    }
}

/**
 * Adding features 
 */
add_filter('acf/load_field/name=plan_feature_select', 'features_insert');
function features_insert($field)
{
    $field['choices'] = array();

    if (have_rows('pp_plans_details', 'option')) {
        while (have_rows('pp_plans_details', 'option')) {
            the_row();
            if (have_rows('plans_features')) {
                $i = 1;
                while (have_rows('plans_features')) {
                    the_row();
                    $feature = sanitize_text_field(get_sub_field('features'));
                    $field['choices'][$i] = $feature;
                    $i++;
                }
            }
        }
    }
    return $field;
}

/**
 * Home Slider Services 
 */
add_filter('acf/load_field/name=hs_service', 'services_slider_items');
function services_slider_items($field)
{
    $field['choices'] = array();

    $services = get_posts(array(
        'post_type' => 'service',
        'numberposts' => -1,
        'post_status' => 'publish'
    ));

    if (is_array($services) && !empty($services)) {
        foreach ($services as $service) {
            $service_title = sanitize_text_field($service->post_title);
            $field['choices'][$service->ID] = $service_title;
        }
    }
    return $field;
}
/**
 * Home About Pages 
 */
add_filter('acf/load_field/name=ha_box_link_page', 'about_select_items');
function about_select_items($field)
{
    $field['choices'] = array();

    $services = get_posts(array(
        'post_type' => 'page',
        'numberposts' => -1,
        'post_status' => 'publish'
    ));

    if (is_array($services) && !empty($services)) {
        foreach ($services as $service) {
            $service_title = sanitize_text_field($service->post_title);
            $field['choices'][$service->ID] = $service_title;
        }
    }
    $field['choices']['portfolio'] = 'Portfolio';
    return $field;
}
/**
 * About Page Tabs
 */
add_filter('acf/load_field/name=about_tabs_button_link', 'about_button_items');
function about_button_items($field)
{
    $field['choices'] = array();

    $services = get_posts(array(
        'post_type' => 'page',
        'numberposts' => -1,
        'post_status' => 'publish'
    ));

    if (is_array($services) && !empty($services)) {
        foreach ($services as $service) {
            $service_title = sanitize_text_field($service->post_title);
            $field['choices'][$service->ID] = $service_title;
        }
    }
    $post_types = get_post_types(array('public' => true));
    if ($post_types) {
        foreach ($post_types as $post_type) {
            $field['choices'][$post_type] = $post_type;
        }
    }
    return $field;
}
