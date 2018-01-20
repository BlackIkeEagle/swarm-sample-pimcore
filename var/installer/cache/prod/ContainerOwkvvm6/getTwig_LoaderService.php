<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.loader' shared service.

$this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->load(__DIR__.'/getTemplating_LocatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, '/phpapp');

$instance->addPath('/phpapp/pimcore/lib/Pimcore/Install/Resources/views/Install', 'install');
$instance->addPath('/phpapp/pimcore/lib/Pimcore/Install/../Bundle/AdminBundle/Resources/views', 'PimcoreAdminBundle');
$instance->addPath('/phpapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', 'Framework');
$instance->addPath('/phpapp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', '!Framework');
$instance->addPath('/phpapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', 'Twig');
$instance->addPath('/phpapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', '!Twig');

return $instance;