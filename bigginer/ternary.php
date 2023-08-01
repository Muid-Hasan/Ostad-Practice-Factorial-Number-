<?php 
$tuition = 20000;

$commission = ($tuition > 20000) ? (0.25 * $tuition) :
              (($tuition > 10000) ? (0.20 * $tuition) :
              (($tuition > 7000) ? (0.15 * $tuition) :
              'Invalid data'));

if ($commission != 'Invalid data') {
    echo 'The commission is $' . $commission;
} else {
    echo $commission;
}
