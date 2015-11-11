<?php
namespace Polisys\QandidateToggleExtras;

class SiteRegistry
{

    protected $sites;

    protected $currentSite;


    /**
     * @param Site $site
     */
    public function addSite(Site $site)
    {
        $this->sites[] = $site;
    }

    /**
     * @return Site[]
     */
    public function getSites()
    {
        return $this->sites;
    }

    /**
     * @param Site $site
     * @return bool
     */
    public function setCurrentSite(Site $site)
    {
        $site = $this->getCurrentSiteByKey($site->getKey());
        if ($site !== null) {
            $this->currentSite = $site;

            return true;
        }

        return false;
    }

    /**
     * @param $key string
     * @return null|Site
     */
    public function getCurrentSiteByKey($key)
    {
        $matches = array_filter($this->sites,
            function (/** @var Site $elem */$elem) use ($key) {
                if ($elem->getKey() == $key) {
                    return true;
                }
            });

        if (count($matches) == 1) {
            return array_pop($matches);
        }
    }

    /**
     * @return Site
     */
    public function getCurrentSite()
    {
        return $this->currentSite;
    }

    /**
     * @return string
     */
    public function getCurrentSiteKey()
    {
        return $this->getCurrentSite()->getKey();
    }

    /**
     * @return string
     */
    public function getCurrentSiteAssetDirectory()
    {
        return $this->getCurrentSite()->getAssetDirectory();
    }
}