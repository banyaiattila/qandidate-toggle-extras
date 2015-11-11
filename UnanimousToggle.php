<?php


namespace Polisys\QandidateToggleExtras;


use Qandidate\Toggle\Context;

class UnanimousToggle extends AffirmativeToggle
{
    public function activeFor(Context $context)
    {
        if ($this->getStatus() === self::CONDITIONALLY_ACTIVE || $this->getStatus() === null) {
            return $this->allConditionsHold($context);
        }

        return parent::activeFor($context);
    }

    private function allConditionsHold($context)
    {
        foreach ($this->getConditions() as $condition) {
            if (!$condition->holdsFor($context)) {
                return false;
            }
        }

        return true;
    }
}