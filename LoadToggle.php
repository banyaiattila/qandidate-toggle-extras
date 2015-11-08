<?php

namespace Polisys\GandidateToggleExtras;

use Qandidate\Toggle\Context;
use Qandidate\Toggle\Operator\LessThan;
use Qandidate\Toggle\OperatorCondition;
use Qandidate\Toggle\Toggle;
use Qandidate\Toggle\ToggleCollection\InMemoryCollection;
use Qandidate\Toggle\ToggleManager;
use Qandidate\Toggle\Operator\InSet;


class LoadToggle
{
    /**@var ToggleManager $manager */
    protected $manager;

    /**@var Context $context */
    protected $context;



    /**
     * @return ToggleManager
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @return Context
     */
    public function getContext()
    {
        return $this->context;
    }

}