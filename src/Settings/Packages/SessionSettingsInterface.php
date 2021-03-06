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
interface SessionSettingsInterface extends SettingsInterface
{
    /** Settings key */
    const KEY_SAVE_PATH = 'save_path';

    /** Settings key */
    const KEY_NAME = 'name';

    /** Settings key */
    const KEY_SAVE_HANDLER = 'save_handler';

    /** Settings key */
    const KEY_COOKIE_LIFETIME = 'cookie_lifetime';

    /** Settings key */
    const KEY_COOKIE_PATH = 'cookie_path';

    /** Settings key */
    const KEY_COOKIE_DOMAIN = 'cookie_domain';

    /** Settings key */
    const KEY_COOKIE_SECURE = 'cookie_secure';

    /** Settings key */
    const KEY_COOKIE_HTTP_ONLY = 'cookie_httponly';

    /** Settings key */
    const KEY_USE_STRICT_MODE = 'use_strict_mode';

    /** Settings key */
    const KEY_USE_COOKIES = 'use_cookies';

    /** Settings key */
    const KEY_USE_ONLY_COOKIES = 'use_only_cookies';

    /** Settings key */
    const KEY_CACHE_LIMITER = 'cache_limiter';

    /** Settings key */
    const KEY_CACHE_EXPIRE = 'cache_expire';
}
