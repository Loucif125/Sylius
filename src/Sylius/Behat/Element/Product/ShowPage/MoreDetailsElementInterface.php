<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Behat\Element\Product\ShowPage;

interface MoreDetailsElementInterface
{
    public function getName(): string;

    public function getProductDescription(): string;

    public function getProductMetaKeywords(): string;

    public function getProductShortDescription(): string;

    public function getProductMetaDescription(): string;

    public function getProductSlug(): string;
}
