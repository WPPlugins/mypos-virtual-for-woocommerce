<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Settings for myPOS Checkout
 */
return array(
    'enabled' => array(
        'title'   => __( 'Enable/Disable', 'woocommerce' ),
        'label'   => __( 'Enable myPOS Checkout Payment', 'woocommerce' ),
        'type'    => 'checkbox',
        'default' => 'yes',
    ),
    'title' => array(
        'title'       => __( 'Title', 'woocommerce' ),
        'description' => __( 'This controls the title which the user sees during checkout.', 'woocommerce' ),
        'default'     => __( 'myPOS Checkout', 'woocommerce' ),
        'type'        => 'text',
        'desc_tip'    => true,
    ),
    'description' => array(
        'title'       => __( 'Description', 'woocommerce' ),
        'type'        => 'text',
        'desc_tip'    => true,
        'description' => __( 'This controls the description which the user sees during checkout.', 'woocommerce' ),
        'default'     => __( 'Pay via myPOS Checkout. You can pay using your Debit/Credit card.', 'woocommerce' )
    ),
    'test' => array(
        'title'   => __( 'Test Mode', 'woocommerce' ),
        'label'   => __( 'Enable test mode', 'woocommerce' ),
        'type'    => 'checkbox',
        'default' => 'yes',
    ),
    'debug' => array(
        'title'   => __( 'Logging', 'woocommerce' ),
        'label'   => __( 'Enable logging', 'woocommerce' ),
        'type'    => 'checkbox',
        'default' => 'yes',
    ),
    'developer_options' => array(
        'title'       => __( 'Developer options', 'woocommerce' ),
        'type'        => 'title',
        'description' => '',
    ),
    'developer_sid' => array(
        'title'       => __( 'Store ID', 'woocommerce' ),
        'type'        => 'text',
        'description' => __( 'Store ID is given when you add a new online store. It could be reviewed in your online banking at www.mypos.eu > menu Online > Online stores.', 'woocommerce' ),
        'desc_tip'    => true,
    ),
    'developer_wallet_number' => array(
        'title'       => __( 'Client Number', 'woocommerce' ),
        'type'        => 'text',
        'description' => __( 'You can view your myPOS Client number in your online banking at www.mypos.eu', 'woocommerce' ),
        'desc_tip'    => true,
    ),
    'developer_private_key' => array(
        'title'       => __( 'Private Key', 'woocommerce' ),
        'type'        => 'textarea',
        'description' => __( 'The Private Key for your store is generated in your online banking at www.mypos.eu > menu Online > Online stores > Keys.', 'woocommerce' ),
        'desc_tip'    => true,
    ),
    'developer_public_certificate' => array(
        'title'       => __( 'myPOS Public Certificate', 'woocommerce' ),
        'type'        => 'textarea',
        'description' => __( 'The myPOS Public Certificate is available for download in your online banking at www.mypos.eu > menu Online > Online stores > Keys.', 'woocommerce' ),
        'desc_tip'    => true,
    ),
    'developer_url' => array(
        'title'       => __( 'Developer URL', 'woocommerce' ),
        'type'        => 'text',
        'default'     => 'https://www.mypos.eu/vmp/checkout-test',
    ),
    'developer_keyindex' => array(
        'title'       => __( 'Developer Key Index', 'woocommerce' ),
        'type'        => 'text',
        'description' => __('The Key Index assigned to the certificate could be reviewed in your online banking at www.mypos.eu > menu Online > Online stores > Keys.', 'woocommerce'),
        'desc_tip'    => true,
    ),
    'production_options' => array(
        'title'       => __( 'Production options', 'woocommerce' ),
        'type'        => 'title',
        'description' => '',
    ),
    'production_sid' => array(
        'title'       => __( 'Store ID', 'woocommerce' ),
        'type'        => 'text',
        'description' => __( 'Store ID is given when you add a new online store. It could be reviewed in your online banking at www.mypos.eu > menu Online > Online stores.', 'woocommerce' ),
        'desc_tip'    => true,
    ),
    'production_wallet_number' => array(
        'title'       => __( 'Client Number', 'woocommerce' ),
        'type'        => 'text',
        'description' => __( 'You can view your myPOS Client number in your online banking at www.mypos.eu', 'woocommerce' ),
        'desc_tip'    => true,
    ),
    'production_private_key' => array(
        'title'       => __( 'Private Key', 'woocommerce' ),
        'type'        => 'textarea',
        'description' => __( 'The Private Key for your store is generated in your online banking at www.mypos.eu > menu Online > Online stores > Keys.', 'woocommerce' ),
        'desc_tip'    => true,
    ),
    'production_public_certificate' => array(
        'title'       => __( 'myPOS Public Certificate', 'woocommerce' ),
        'type'        => 'textarea',
        'description' => __( 'The myPOS Public Certificate is available for download in your online banking at www.mypos.eu > menu Online > Online stores > Keys.', 'woocommerce' ),
        'desc_tip'    => true,
    ),
    'production_url' => array(
        'title'       => __( 'Production URL', 'woocommerce' ),
        'type'        => 'text',
        'default'     => 'https://www.mypos.eu/vmp/checkout',
    ),
    'production_keyindex' => array(
        'title'       => __( 'Production Key Index', 'woocommerce' ),
        'type'        => 'text',
        'description' => __('The Key Index assigned to the certificate could be reviewed in your online banking at www.mypos.eu > menu Online > Online stores > Keys.', 'woocommerce'),
        'desc_tip'    => true,
    ),
);
