<?php

namespace Ikuzo\SyliusGoogleAdsPlugin\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;

class GoogleClicIDListener 
{
    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();

        if ($request->query->has('gclid') && $request->query->get('gclid') !== '') {
            $request->getSession()->set('gclid', $request->query->get('gclid'));
        }
    }
}