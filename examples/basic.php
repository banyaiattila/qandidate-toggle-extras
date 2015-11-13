<?php

use Polisys\QandidateToggleExtras\LoadToggle;
use Qandidate\Toggle\Toggle;
use Qandidate\Toggle\Operator\InSet;
use Qandidate\Toggle\OperatorCondition;


$loadToggle = new LoadToggle();
$loadToggle->createContext("yoursite.com");
$loadToggle->addSite("yoursite.com", "yoursite_com");

$yoursite = [new OperatorCondition("site", new InSet(["yoursite.com"]))];
$loadToggle->getManager()->add(new Toggle("your_feature", $yoursite));


if ($loadToggle->getManager()->active("your_feature", $loadToggle->getContext())) {
    // load feature...

}

