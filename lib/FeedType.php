<?php

namespace SellingPartnerApi;

/**************/
/* Feed types */
/**************/

class FeedType
{
    // Listings feeds
    const JSON_LISTINGS_FEED = [
        'contentType' => ContentType::JSON,
        'name' => 'JSON_LISTINGS_FEED'
    ];
    const POST_PRODUCT_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_PRODUCT_DATA'
    ];
    const POST_INVENTORY_AVAILABILITY_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_INVENTORY_AVAILABILITY_DATA'
    ];
    const POST_PRODUCT_OVERRIDES_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_PRODUCT_OVERRIDES_DATA'
    ];
    const POST_PRODUCT_PRICING_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_PRODUCT_PRICING_DATA'
    ];
    const POST_PRODUCT_IMAGE_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_PRODUCT_IMAGE_DATA'
    ];
    const POST_PRODUCT_RELATIONSHIP_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_PRODUCT_RELATIONSHIP_DATA'
    ];
    const POST_FLAT_FILE_INVLOADER_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_INVLOADER_DATA'
    ];
    const POST_FLAT_FILE_LISTINGS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_LISTINGS_DATA'
    ];
    const POST_FLAT_FILE_BOOKLOADER_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_BOOKLOADER_DATA'
    ];
    const POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA'
    ];
    const POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA'
    ];
    const POST_UIEE_BOOKLOADER_DATA = [
        'contentType' => ContentType::PLAIN,
        'name' => 'POST_UIEE_BOOKLOADER_DATA'
    ];
    const POST_STD_ACES_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_STD_ACES_DATA'
    ];


    // Order feeds
    const POST_ORDER_ACKNOWLEDGEMENT_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_ORDER_ACKNOWLEDGEMENT_DATA'
    ];
    const POST_PAYMENT_ADJUSTMENT_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_PAYMENT_ADJUSTMENT_DATA'
    ];
    const POST_ORDER_FULFILLMENT_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_ORDER_FULFILLMENT_DATA'
    ];
    const POST_INVOICE_CONFIRMATION_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_INVOICE_CONFIRMATION_DATA'
    ];
    // Japan only
    const POST_EXPECTED_SHIP_DATE_SOD = [
        'contentType' => ContentType::XML,
        'name' => 'POST_EXPECTED_SHIP_DATE_SOD'
    ];
    const POST_FLAT_FILE_ORDER_ACKNOWLEDGEMENT_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_ORDER_ACKNOWLEDGEMENT_DATA'
    ];
    const POST_FLAT_FILE_PAYMENT_ADJUSTMENT_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_PAYMENT_ADJUSTMENT_DATA'
    ];
    const POST_FLAT_FILE_FULFILLMENT_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_FULFILLMENT_DATA'
    ];
    // Japan only
    const POST_EXPECTED_SHIP_DATE_SOD_FLAT_FILE = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_EXPECTED_SHIP_DATE_SOD_FLAT_FILE'
    ];


    // FBA feeds
    const POST_FULFILLMENT_ORDER_REQUEST_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_FULFILLMENT_ORDER_REQUEST_DATA'
    ];
    const POST_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'POST_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA'
    ];
    const POST_FBA_INBOUND_CARTON_CONTENTS = [
        'contentType' => ContentType::XML,
        'name' => 'POST_FBA_INBOUND_CARTON_CONTENTS'
    ];
    const POST_FLAT_FILE_FULFILLMENT_ORDER_REQUEST_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_FULFILLMENT_ORDER_REQUEST_DATA'
    ];
    const POST_FLAT_FILE_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA'
    ];
    const POST_FLAT_FILE_FBA_CREATE_INBOUND_PLAN = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_FBA_CREATE_INBOUND_PLAN'
    ];
    const POST_FLAT_FILE_FBA_UPDATE_INBOUND_PLAN = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_FBA_UPDATE_INBOUND_PLAN'
    ];
    const POST_FLAT_FILE_FBA_CREATE_REMOVAL = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_FLAT_FILE_FBA_CREATE_REMOVAL'
    ];


    // Business feed
    const RFQ_UPLOAD_FEED = [
        'contentType' => ContentType::TAB,
        'name' => 'RFQ_UPLOAD_FEED'
    ];


    // Easy ship feed
    const POST_EASYSHIP_DOCUMENTS = [
        'contentType' => ContentType::TAB,
        'name' => 'POST_EASYSHIP_DOCUMENTS'
    ];    
    
    // VAT Invoice Upload feed
    const UPLOAD_VAT_INVOICE = [
        'contentType' => ContentType::PDF,
        'name' => 'UPLOAD_VAT_INVOICE'
    ];

}
