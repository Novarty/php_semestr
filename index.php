<?php

require_once ('facebook_api.php');

$facebook = new facebook_api();
$facebook->get_facebook_data( $facebook->get_facebook_data_array(), $facebook->getFp() );
