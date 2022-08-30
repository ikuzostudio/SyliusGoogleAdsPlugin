<?php

declare(strict_types=1);

namespace Ikuzo\SyliusGoogleAdsPlugin\Model;

trait GoogleAdsOrderTrait
{
    /**
     * @ORM\Column(name="google_ads_is_tracked", type="boolean")
     */
    protected $isGoogleAdsTracked = false;

    /**
     * @ORM\Column(name="google_ads_clid", type="string", length="255", nullable="true")
     */
    protected $googleClid = null;

    public function getIsGoogleAdsTracked(): bool
    {
        return $this->isGoogleAdsTracked;
    }

    public function setIsGoogleAdsTracked(bool $isGoogleAdsTracked): void
    {
        $this->isGoogleAdsTracked = $isGoogleAdsTracked;
    }

    public function getGoogleClid(): ?string
    {
        return $this->googleClid;
    }

    public function setGoogleClid(?string $googleClid): void
    {
        $this->googleClid = $googleClid;
    }
}
