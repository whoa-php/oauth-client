<?php

/**
 * Copyright 2021-2022 info@whoaphp.com
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

namespace Whoa\Tests\OAuthClient\Data\Azure\Version2;

/**
 * @package Whoa\Tests\OAuthClient
 */
class OAuthClientSettings extends \Whoa\OAuthClient\Package\OAuthClientSettings
{
    /**
     * @inheritDoc
     */
    protected function getSettings(): array
    {
        return [
                static::KEY_CLIENT_IDENTIFIER => '03f6e001-8322-4e47-aca1-5a8835ae132b',
                static::KEY_TENANT_IDENTIFIER => '6a15c203-0ee9-4136-bac2-838cc929709b',
            ] + parent::getSettings();
    }
}
