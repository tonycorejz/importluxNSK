<?php
//remove_action( 'storefront_header', 'storefront_product_search', 40);

add_action( 'after_setup_theme', 'remove_search');

function remove_search() {
  remove_action( 'storefront_header', 'storefront_product_search', 40);
  remove_action( 'storefront_header', 'storefront_header_cart', 60);
}

add_action( storefront_header, top_of_header, 0);

function top_of_header() {
  echo '<div class="col-full">';
  storefront_header_cart();
  echo '</div>';
}

add_action( storefront_header, search_header_add, 60);

function search_header_add() {
  storefront_product_search();
}