<?php namespace Limoncello\Auth\Authorization\PolicyDecision;

/**
 * Copyright 2015-2016 info@neomerx.com (www.neomerx.com)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

use Limoncello\Auth\Authorization\PolicyDecision\Algorithms\PoliciesOrSetsDenyOverrides;
use Limoncello\Auth\Authorization\PolicyDecision\Algorithms\PoliciesOrSetsDenyUnlessPermit;
use Limoncello\Auth\Authorization\PolicyDecision\Algorithms\PoliciesOrSetsFirstApplicable;
use Limoncello\Auth\Authorization\PolicyDecision\Algorithms\PoliciesOrSetsPermitOverrides;
use Limoncello\Auth\Authorization\PolicyDecision\Algorithms\PoliciesOrSetsPermitUnlessDeny;
use Limoncello\Auth\Contracts\Authorization\PolicyAdministration\PolicyCombiningAlgorithmInterface;

/**
 * @package Limoncello\Auth
 */
abstract class PolicyAlgorithm
{
    /**
     * @return PolicyCombiningAlgorithmInterface
     */
    public static function firstApplicable()
    {
        return new PoliciesOrSetsFirstApplicable();
    }

    /**
     * @return PolicyCombiningAlgorithmInterface
     */
    public static function denyOverrides()
    {
        return new PoliciesOrSetsDenyOverrides();
    }

    /**
     * @return PolicyCombiningAlgorithmInterface
     */
    public static function permitOverrides()
    {
        return new PoliciesOrSetsPermitOverrides();
    }

    /**
     * @return PolicyCombiningAlgorithmInterface
     */
    public static function denyUnlessPermit()
    {
        return new PoliciesOrSetsDenyUnlessPermit();
    }

    /**
     * @return PolicyCombiningAlgorithmInterface
     */
    public static function permitUnlessDeny()
    {
        return new PoliciesOrSetsPermitUnlessDeny();
    }
}