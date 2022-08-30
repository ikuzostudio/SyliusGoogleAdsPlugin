<?php

declare(strict_types=1);

namespace Ikuzo\SyliusGoogleAdsPlugin\Model;

interface GoogleAdsOrderInterface {
    public function getIsGoogleAdsTracked(): bool;
    public function setIsGoogleAdsTracked(bool $input): void;
    public function getGoogleClid(): ?string;
    public function setGoogleClid(?string $input): void;

}