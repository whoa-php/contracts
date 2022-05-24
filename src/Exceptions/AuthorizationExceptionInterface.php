<?php

/**
 * Copyright 2015-2019 info@neomerx.com
 * Modification Copyright 2021-2022 info@whoaphp.com
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

declare(strict_types=1);

namespace Whoa\Contracts\Exceptions;

/**
 * @package Whoa\Contracts
 */
interface AuthorizationExceptionInterface extends WhoaExceptionInterface
{
    /**
     * @return string
     */
    public function getAction(): string;

    /**
     * @return string|null
     */
    public function getResourceType(): ?string;

    /**
     * @return string|int|null
     */
    public function getResourceIdentity();

    /**
     * @return array
     */
    public function getExtraParameters(): array;
}