<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.logout_listener.admin' shared service.

return $this->services['security.logout_listener.admin'] = new \Symfony\Component\Security\Http\Firewall\LogoutListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load(__DIR__.'/getSecurity_HttpUtilsService.php')) && false ?: '_'}, ${($_ = isset($this->services['pimcore_admin.security.logout_success_handler']) ? $this->services['pimcore_admin.security.logout_success_handler'] : $this->load(__DIR__.'/getPimcoreAdmin_Security_LogoutSuccessHandlerService.php')) && false ?: '_'}, array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/admin/logout'));
