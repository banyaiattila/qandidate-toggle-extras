<?php

namespace Polisys\QandidateToggleExtras;

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

    /**@var SiteRegistry $siteRegistry */
    protected $siteRegistry;

    /**@var string $site */
    protected $site;

    public function __construct()
    {
        $this->manager = new ToggleManager(new InMemoryCollection());
        $this->context = new Context();
        $this->siteRegistry = new SiteRegistry();
    }

    /**
     * @return Context
     */
    public function createContext($site){
        $this->site=$site;
        $this->context->set("site", $this->site);
        $this->context->set("now",new \DateTime());

        return $this->context;
    }

    /**
     * @return ToggleManager
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @return mixed
     */
    public function getSiteRegistry()
    {
        return $this->siteRegistry;
    }

    /**
     * @return Context
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @return mixed
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param mixed $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }


}
