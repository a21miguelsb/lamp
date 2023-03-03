<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.order.query_handler.get_order_preview_handler' shared service.

return $this->services['prestashop.adapter.order.query_handler.get_order_preview_handler'] = new \PrestaShop\PrestaShop\Adapter\Order\QueryHandler\GetOrderPreviewHandler(($this->services['prestashop.core.localization.locale.repository'] ?? $this->getPrestashop_Core_Localization_Locale_RepositoryService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->language->getLocale(), ($this->services['prestashop.adapter.address.formatter'] ?? ($this->services['prestashop.adapter.address.formatter'] = new \PrestaShop\PrestaShop\Adapter\Address\AddressFormatter())));