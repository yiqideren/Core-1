<?php

// Create a possibly missing "display_name_source" setting.

if (!defined('PHORUM_ADMIN')) return;

if (!isset($PHORUM['display_name_source'])) {
    $PHORUM['DB']->update_settings(array('display_name_source' => 'username'));
}

?>
