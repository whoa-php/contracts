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

namespace Whoa\Contracts\Settings\Packages;

use Whoa\Contracts\Settings\SettingsInterface;

/**
 * Provides individual settings for a component.
 *
 * @package Whoa\Contracts
 */
interface MonologFileSettingsInterface extends SettingsInterface
{
    /** Settings key */
    const KEY_IS_ENABLED = 0;

    /** Settings key */
    const KEY_LOG_PATH = self::KEY_IS_ENABLED + 1;

    /** Settings key */
    const KEY_LOG_FOLDER = self::KEY_LOG_PATH + 1;

    /** Settings key */
    const KEY_LOG_FILE = self::KEY_LOG_FOLDER + 1;

    /** Settings key */
    const KEY_LOG_LEVEL = self::KEY_LOG_FILE + 1;

    /** Settings key */
    const KEY_LAST = self::KEY_LOG_LEVEL;
}
