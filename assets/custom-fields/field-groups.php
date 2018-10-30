<?php
/**
 * Created by PhpStorm.
 * User: breon
 * Date: 12/4/16
 * Time: 8:41 AM
 */

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_courses-custom-fields',
        'title' => 'Courses Custom Fields',
        'fields' => array (
            array (
                'key' => 'field_57f8e0c18721e',
                'label' => 'Course Number',
                'name' => 'course_number',
                'type' => 'text',
                'instructions' => 'Please enter a course number.',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_57f8e14d8721f',
                'label' => 'Course Instructor',
                'name' => 'course_instructor',
                'type' => 'text',
                'instructions' => 'Please enter a course instructor',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_5816345aa288e',
                'label' => 'Course Date',
                'name' => 'course_date',
                'type' => 'wysiwyg',
                'instructions' => 'Please enter the course date/time.',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array (
                'key' => 'field_581634f3a288f',
                'label' => 'Course Location',
                'name' => 'course_location',
                'type' => 'wysiwyg',
                'instructions' => 'Please enter the course location.',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array (
                'key' => 'field_581e164b135b0',
                'label' => 'Course Details',
                'name' => 'course_details',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'courses',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}
