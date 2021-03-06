<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\ReviewsStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

/**
 * Autogenerated description for CustomerProductReviewRequest class
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.UnusedPrivateField)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
final class CustomerProductReviewRequestMapper
{
    /**
     * @var string
     */
    private static $dtoClassName = CustomerProductReviewRequestInterface::class;

    /**
     * @var mixed
     */
    private $data;

    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
    * Set the data to populate the DTO
    *
    * @param mixed $data
    * @return $this
    */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
    * Build new DTO populated with the data
    *
    * @return CustomerProductReviewRequest
    */
    public function build()
    {
        $dto = $this->objectManager->create(self::$dtoClassName);
        foreach ($this->data as $key => $valueData) {
            if ($valueData === null) {
                continue;
            }
            $this->setByKey($dto, $key, $valueData);
        }
        return $dto;
    }

    /**
    * Set the value of the key using setters.
    *
    * In case if the field is object, the corresponding Mapper would be create and DTO representing the field data
    * would be built
    *
    * @param CustomerProductReviewRequest $dto
    * @param string $key
    * @param mixed $value
    */
    private function setByKey(CustomerProductReviewRequest $dto, string $key, $value): void
    {
        switch ($key) {
            case "customer_id":
                $dto->setCustomerId((string) $value);
                break;
            case "store":
                $dto->setStore((string) $value);
                break;
            case "pagination":
                $dto->setPagination(
                    $this->objectManager
                       ->create(\Magento\ReviewsStorefrontApi\Api\Data\PaginationRequestMapper::class)
                       ->setData($value)
                       ->build()
                );
                break;
        }
    }
}
