<?php

declare(strict_types=1);

namespace Tests\Ikuzo\SyliusGoogleAdsPlugin\Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ikuzo\SyliusGoogleAdsPlugin\Model\GoogleAdsOrderInterface;
use Ikuzo\SyliusGoogleAdsPlugin\Model\GoogleAdsOrderTrait;
use Sylius\Component\Core\Model\Order as BaseOrder;

/**
 * @ORM\Table(name="sylius_order")
 * @ORM\Entity()
 */
class Order extends BaseOrder implements GoogleAdsOrderInterface
{
    use GoogleAdsOrderTrait;
}