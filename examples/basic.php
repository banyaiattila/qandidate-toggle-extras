<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Polisys\QandidateToggleExtras\LoadToggle;


$loadToggle=new LoadToggle();
$loadToggle->createContext("yoursite.com");
$loadToggle->addSite("yoursite.com", "yoursite_com");



