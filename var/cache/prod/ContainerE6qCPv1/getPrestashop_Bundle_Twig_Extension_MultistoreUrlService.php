<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.bundle.twig.extension.multistore_url' shared service.

return $this->services['prestashop.bundle.twig.extension.multistore_url'] = new \PrestaShopBundle\Twig\Extension\MultistoreUrlExtension(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
