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

declare (strict_types=1);

namespace Whoa\OAuthClient\Contracts\Clients\Azure\Version2;

use Whoa\OAuthClient\Contracts\IdentityPlatform\IdentityPlatformInterface;
use Whoa\OAuthClient\Contracts\JsonWebToken\Azure\Version2\AzureJwtClaimInterface;
use Whoa\OAuthClient\Contracts\JsonWebToken\Azure\Version2\AzureJwtHeaderInterface;

/**
 * @package Whoa\OAuthClient
 */
interface AzureClientInterface extends IdentityPlatformInterface
{
    /** @var string[] */
    public const MANDATORY_JWT_CLAIMS = [
        AzureJwtClaimInterface::KEY_USER_IDENTIFIER,
        AzureJwtClaimInterface::KEY_ISSUED_AT,
        AzureJwtClaimInterface::KEY_NOT_BEFORE,
        AzureJwtClaimInterface::KEY_EXPIRATION_TIME,
        AzureJwtClaimInterface::KEY_AUDIENCE,
        AzureJwtClaimInterface::KEY_TENANT_IDENTIFIER,
        AzureJwtClaimInterface::KEY_USERNAME,
    ];

    public const MANDATORY_JWT_HEADERS = [
        AzureJwtHeaderInterface::KEY_PUBLIC_KEY_THUMBPRINT,
    ];

    /**
     * @param string $providerIdentifier
     *
     * @return AzureClientInterface
     */
    public function setProviderIdentifier(string $providerIdentifier): AzureClientInterface;

    /**
     * @param string $providerName
     *
     * @return AzureClientInterface
     */
    public function setProviderName(string $providerName): AzureClientInterface;

    /**
     * @param string $clientIdentifier
     *
     * @return AzureClientInterface
     */
    public function setClientIdentifier(string $clientIdentifier): AzureClientInterface;

    /**
     * @param string $tenantIdentifier
     *
     * @return AzureClientInterface
     */
    public function setTenantIdentifier(string $tenantIdentifier): AzureClientInterface;

    /**
     * @param string $discoveryDocumentUri
     *
     * @return AzureClientInterface
     */
    public function setDiscoveryDocumentUri(string $discoveryDocumentUri): AzureClientInterface;

    /**
     * @param string $jwkSetUriKey
     *
     * @return AzureClientInterface
     */
    public function setJwkSetUriKey(string $jwkSetUriKey): AzureClientInterface;

    /**
     * @param string $jwkSetUri
     *
     * @return AzureClientInterface
     */
    public function setJwkSetUri(string $jwkSetUri): AzureClientInterface;

    /**
     * @param string $jwkUri
     *
     * @return AzureClientInterface
     */
    public function setJwkUri(string $jwkUri): AzureClientInterface;

    /**
     * @param $keys
     *
     * @return AzureClientInterface
     */
    public function setJwkSet($keys): AzureClientInterface;

    /**
     * @param $values
     *
     * @return AzureClientInterface
     */
    public function setJwk($values): AzureClientInterface;

    /**
     * @param array $mandatoryJwtHeaders
     *
     * @return AzureClientInterface
     */
    public function setMandatoryJwtHeaders(array $mandatoryJwtHeaders): AzureClientInterface;

    /**
     * @param array $mandatoryJwtClaims
     *
     * @return AzureClientInterface
     */
    public function setMandatoryJwtClaims(array $mandatoryJwtClaims): AzureClientInterface;

    /**
     * @param bool $enableVerification
     *
     * @return AzureClientInterface
     */
    public function enableVerification(bool $enableVerification = true): AzureClientInterface;

    /**
     * @param string $serializeJwt
     *
     * @return AzureClientInterface
     */
    public function setSerializeJwt(string $serializeJwt): AzureClientInterface;

    /**
     * @param int $format
     *
     * @return mixed
     */
    public function getJwt(int $format = IdentityPlatformInterface::KEY_DESERIALIZE_JWT);

    /**
     * @return array|null
     */
    public function getJwtPayload(): ?array;

    /**
     * @return array|null
     */
    public function getJwtIdentities(): ?array;
}
