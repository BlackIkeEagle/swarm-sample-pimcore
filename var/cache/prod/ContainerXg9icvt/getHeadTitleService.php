<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Templating\Helper\HeadTitle' shared autowired service.

return $this->services['Pimcore\Templating\Helper\HeadTitle'] = new \Pimcore\Templating\Helper\HeadTitle(${($_ = isset($this->services['pimcore.templating.view_helper.placeholder.container_service']) ? $this->services['pimcore.templating.view_helper.placeholder.container_service'] : $this->services['pimcore.templating.view_helper.placeholder.container_service'] = new \Pimcore\Templating\Helper\Placeholder\ContainerService()) && false ?: '_'});
