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

namespace Whoa\Contracts\Commands;

use Psr\Container\ContainerInterface;

/**
 * @package Whoa\Contracts
 */
interface CommandInterface
{
    /** @var string Command's handler method name */
    const COMMAND_METHOD_NAME = 'execute';

    /** Data argument key */
    const ARGUMENT_NAME = 0;

    /** Data argument key */
    const ARGUMENT_DESCRIPTION = self::ARGUMENT_NAME + 1;

    /** Data argument key */
    const ARGUMENT_DEFAULT = self::ARGUMENT_DESCRIPTION + 1;

    /** Data argument key */
    const ARGUMENT_MODE = self::ARGUMENT_DEFAULT + 1;

    /** Data argument key */
    const ARGUMENT_MODE__REQUIRED = 1;

    /** Data argument key */
    const ARGUMENT_MODE__OPTIONAL = 2;

    /** Data argument key */
    const ARGUMENT_MODE__IS_ARRAY = 4;

    /** Data option key */
    const OPTION_NAME = 0;

    /** Data option key */
    const OPTION_SHORTCUT = self::OPTION_NAME + 1;

    /** Data option key */
    const OPTION_DESCRIPTION = self::OPTION_SHORTCUT + 1;

    /** Data option key */
    const OPTION_DEFAULT = self::OPTION_DESCRIPTION + 1;

    /** Data option key */
    const OPTION_MODE = self::OPTION_DEFAULT + 1;

    /** Data option key */
    const OPTION_MODE__NONE = 1;

    /** Data option key */
    const OPTION_MODE__REQUIRED = 2;

    /** Data option key */
    const OPTION_MODE__OPTIONAL = 4;

    /** Data option key */
    const OPTION_MODE__IS_ARRAY = 8;

    /**
     * @return string
     */
    public static function getName(): string;

    /**
     * @return string
     */
    public static function getDescription(): string;

    /**
     * @return string
     */
    public static function getHelp(): string;

    /**
     * @return array
     */
    public static function getArguments(): array;

    /**
     * @return array
     */
    public static function getOptions(): array;

    /**
     * @param ContainerInterface $container
     * @param IoInterface        $inOut
     *
     * @return void
     */
    public static function execute(ContainerInterface $container, IoInterface $inOut): void;
}
