<?php

namespace Ikuzo\SyliusGoogleAdsPlugin\EventListener;

use Ikuzo\SyliusGoogleAdsPlugin\Model\GoogleAdsOrderInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class OrderEventListener 
{
    public function __construct(private RequestStack $requestStack)
    {
    }

    public function _check($object)
    {
        if ($object instanceof GoogleAdsOrderInterface)
        {
            $this->_process($object);
        }
    }

    private function _process(GoogleAdsOrderInterface $order)
    {
        $session = $this->requestStack->getSession();

        if ($order->getGoogleClid() === null && $session->has('gclid') && $session->get('gclid') != '')
        {
            $order->setIsGoogleAdsTracked(true);
            $order->setGoogleClid($session->get('gclid'));
        }
    }
}