<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.util.url.url_file_checker' shared service.

return $this->services['prestashop.core.util.url.url_file_checker'] = new \PrestaShop\PrestaShop\Core\Util\Url\UrlFileChecker(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("_PS_ROOT_DIR_"));
