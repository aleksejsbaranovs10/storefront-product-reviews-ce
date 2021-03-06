<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\ReviewsStorefront\Model\Storage;

use Magento\ReviewsStorefront\Model\Storage\Client\Config;

/**
 * State represents the current metadata information of Storage.
 */
class State
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * Get current alias name of storage.
     *
     * @return string
     */
    public function getAliasName(): string
    {
        return $this->config->getAliasName();
    }

    /**
     * Get current data source name of storage taking into account version of the data source.
     *
     * @param array $scopes
     *
     * @return string
     */
    public function getCurrentDataSourceName(array $scopes): string
    {
        return $this->config->getSourcePrefix() . $this->config->getCurrentSourceVersion() . '_'
            . \ltrim(\implode('_', $scopes), '_');
    }
}
