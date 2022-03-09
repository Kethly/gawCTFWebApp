<?php
$value = isset($_GET['value']) ? $_GET['value'] : '[blank]';

echo 'user wrote this ' . $value;