<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\ReviewsStorefrontApi\Api\Data;

/**
 * Autogenerated description for RatingMetadata class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD)
 * @SuppressWarnings(PHPCPD)
 */
final class RatingMetadata implements RatingMetadataInterface
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $values;
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getId(): string
    {
        return (string) $this->id;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setId(string $value): void
    {
        $this->id = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getName(): string
    {
        return (string) $this->name;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setName(string $value): void
    {
        $this->name = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\ReviewsStorefrontApi\Api\Data\RatingValueInterface[]
     */
    public function getValues(): array
    {
        return (array) $this->values;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\ReviewsStorefrontApi\Api\Data\RatingValueInterface[] $value
     * @return void
     */
    public function setValues(array $value): void
    {
        $this->values = $value;
    }
}
