<?php 

$mb[] = array(
    'id' => 'timr',
    'title' => __( 'Indstillinger', 'rwmb' ),
    'pages' => array('post'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'nedtællingstid', 'rwmb' ),
            'id'    => "timr",
            'type' => 'datetime',
            ),
        
        array(
            'name'  => __( 'pretekst', 'rwmb' ),
            'id'    => "pretext",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'posttekst', 'rwmb' ),
            'id'    => "posttext",
            'type' => 'text',
        ),
    ),
);