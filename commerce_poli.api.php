<?php

/**
 * @file
 * Documents hooks provided by the POLi Payments modules.
 */

/**
 * Allows modules to alter the HTTP request being made to the POLi Payments API.
 *
 * @param &$url
 * @param &$options
 * @param $context
 *
 * @see commerce_paypal_wps_order_form()
 */
function hook_commerce_poli_http_request_alter(&$url, &$options, $context) {
  // No example.
}
