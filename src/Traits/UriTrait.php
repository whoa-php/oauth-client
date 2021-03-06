<?php

/**
 * Copyright 2021 info@whoaphp.com
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

namespace Whoa\OAuthClient\Traits;

use Whoa\OAuthClient\Exceptions\InvalidArgumentException;

/**
 * @package Whoa\OAuthClient
 */
trait UriTrait
{
    /**
     * @param $uri
     * @return bool
     */
    protected function isValidUri($uri): bool
    {
        $validUriPattern = '%^(?:(?:https?|ftp)://)(?:\S+(?::\S*)?@|\d{1,3}(?:\.\d{1,3}){3}|(?:(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)(?:\.(?:[a-z\d\x{00a1}-\x{ffff}]+-?)*[a-z\d\x{00a1}-\x{ffff}]+)*(?:\.[a-z\x{00a1}-\x{ffff}]{2,6}))(?::\d+)?(?:[^\s]*)?$%ium';

        $isValid = filter_var($uri, FILTER_VALIDATE_URL) !== false && preg_match($validUriPattern, $uri) > 0;

        if ($isValid === false) {
            throw new InvalidArgumentException(InvalidArgumentException::ERROR_INVALID_URI);
        }

        return true;
    }
}
