<?php
/********* DO NOT COPY THE PARTS ABOVE THIS LINE *********/

/*
Draft Preview URL Duration
source: https://wordpress.org/plugins/public-post-preview/#48%20hours%20are%20not%20enough%20to%20me.%20can%20i%20extend%20the%20nonce%20time%3F
*/

add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
    return 60 * 60 * 24 * 7; // Last Number = Days
}
