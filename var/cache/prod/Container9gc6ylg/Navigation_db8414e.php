<?php

class Navigation_db8414e extends \Pimcore\Templating\Helper\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5a637132b43ac505978375 = null;
    private $initializer5a637132b4424875025576 = null;
    private static $publicProperties5a637132b434e564393087 = array(
        
    );
    public function getName()
    {
        $this->initializer5a637132b4424875025576 && ($this->initializer5a637132b4424875025576->__invoke($valueHolder5a637132b43ac505978375, $this, 'getName', array(), $this->initializer5a637132b4424875025576) || 1) && $this->valueHolder5a637132b43ac505978375 = $valueHolder5a637132b43ac505978375;
        return $this->valueHolder5a637132b43ac505978375->getName();
    }
    public function buildNavigation(\Pimcore\Model\Document $activeDocument, ?\Pimcore\Model\Document $navigationRootDocument = null, ?string $htmlMenuPrefix = null, ?callable $pageCallback = null, $cache = true) : \Pimcore\Navigation\Container
    {
        $this->initializer5a637132b4424875025576 && ($this->initializer5a637132b4424875025576->__invoke($valueHolder5a637132b43ac505978375, $this, 'buildNavigation', array('activeDocument' => $activeDocument, 'navigationRootDocument' => $navigationRootDocument, 'htmlMenuPrefix' => $htmlMenuPrefix, 'pageCallback' => $pageCallback, 'cache' => $cache), $this->initializer5a637132b4424875025576) || 1) && $this->valueHolder5a637132b43ac505978375 = $valueHolder5a637132b43ac505978375;
        return $this->valueHolder5a637132b43ac505978375->buildNavigation($activeDocument, $navigationRootDocument, $htmlMenuPrefix, $pageCallback, $cache);
    }
    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer5a637132b4424875025576 && ($this->initializer5a637132b4424875025576->__invoke($valueHolder5a637132b43ac505978375, $this, 'getRenderer', array('alias' => $alias), $this->initializer5a637132b4424875025576) || 1) && $this->valueHolder5a637132b43ac505978375 = $valueHolder5a637132b43ac505978375;
        return $this->valueHolder5a637132b43ac505978375->getRenderer($alias);
    }
    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializer5a637132b4424875025576 && ($this->initializer5a637132b4424875025576->__invoke($valueHolder5a637132b43ac505978375, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializer5a637132b4424875025576) || 1) && $this->valueHolder5a637132b43ac505978375 = $valueHolder5a637132b43ac505978375;
        return $this->valueHolder5a637132b43ac505978375->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }
    public function __call($method, array $arguments = array()) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer5a637132b4424875025576 && ($this->initializer5a637132b4424875025576->__invoke($valueHolder5a637132b43ac505978375, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer5a637132b4424875025576) || 1) && $this->valueHolder5a637132b43ac505978375 = $valueHolder5a637132b43ac505978375;
        return $this->valueHolder5a637132b43ac505978375->__call($method, $arguments);
    }
    public function setCharset($charset)
    {
        $this->initializer5a637132b4424875025576 && ($this->initializer5a637132b4424875025576->__invoke($valueHolder5a637132b43ac505978375, $this, 'setCharset', array('charset' => $charset), $this->initializer5a637132b4424875025576) || 1) && $this->valueHolder5a637132b43ac505978375 = $valueHolder5a637132b43ac505978375;
        return $this->valueHolder5a637132b43ac505978375->setCharset($charset);
    }
    public function getCharset()
    {
        $this->initializer5a637132b4424875025576 && ($this->initializer5a637132b4424875025576->__invoke($valueHolder5a637132b43ac505978375, $this, 'getCharset', array(), $this->initializer5a637132b4424875025576) || 1) && $this->valueHolder5a637132b43ac505978375 = $valueHolder5a637132b43ac505978375;
        return $this->valueHolder5a637132b43ac505978375->getCharset();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        unset($instance->charset);
        \Closure::bind(function (\Pimcore\Templating\Helper\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $instance, 'Pimcore\\Templating\\Helper\\Navigation')->__invoke($instance);
        $instance->initializer5a637132b4424875025576 = $initializer;
        return $instance;
    }
    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;
        if (! $this->valueHolder5a637132b43ac505978375) {
            $reflection = $reflection ?: new \ReflectionClass('Pimcore\\Templating\\Helper\\Navigation');
            $this->valueHolder5a637132b43ac505978375 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);
        \Closure::bind(function (\Pimcore\Templating\Helper\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Templating\\Helper\\Navigation')->__invoke($this);
        }
        $this->valueHolder5a637132b43ac505978375->__construct($builder, $rendererLocator);
    }
    public function & __get($name)
    {
        $this->initializer5a637132b4424875025576 && ($this->initializer5a637132b4424875025576->__invoke($valueHolder5a637132b43ac505978375, $this, '__get', ['name' => $name], $this->initializer5a637132b4424875025576) || 1) && $this->valueHolder5a637132b43ac505978375 = $valueHolder5a637132b43ac505978375;
        if (isset(self::$publicProperties5a637132b434e564393087[$name])) {
            return $this->valueHolder5a637132b43ac505978375->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a637132b43ac505978375;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolder5a637132b43ac505978375;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer5a637132b4424875025576 && ($this->initializer5a637132b4424875025576->__invoke($valueHolder5a637132b43ac505978375, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a637132b4424875025576) || 1) && $this->valueHolder5a637132b43ac505978375 = $valueHolder5a637132b43ac505978375;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a637132b43ac505978375;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder5a637132b43ac505978375;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer5a637132b4424875025576 && ($this->initializer5a637132b4424875025576->__invoke($valueHolder5a637132b43ac505978375, $this, '__isset', array('name' => $name), $this->initializer5a637132b4424875025576) || 1) && $this->valueHolder5a637132b43ac505978375 = $valueHolder5a637132b43ac505978375;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a637132b43ac505978375;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5a637132b43ac505978375;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer5a637132b4424875025576 && ($this->initializer5a637132b4424875025576->__invoke($valueHolder5a637132b43ac505978375, $this, '__unset', array('name' => $name), $this->initializer5a637132b4424875025576) || 1) && $this->valueHolder5a637132b43ac505978375 = $valueHolder5a637132b43ac505978375;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a637132b43ac505978375;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5a637132b43ac505978375;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer5a637132b4424875025576 && ($this->initializer5a637132b4424875025576->__invoke($valueHolder5a637132b43ac505978375, $this, '__clone', array(), $this->initializer5a637132b4424875025576) || 1) && $this->valueHolder5a637132b43ac505978375 = $valueHolder5a637132b43ac505978375;
        $this->valueHolder5a637132b43ac505978375 = clone $this->valueHolder5a637132b43ac505978375;
    }
    public function __sleep()
    {
        $this->initializer5a637132b4424875025576 && ($this->initializer5a637132b4424875025576->__invoke($valueHolder5a637132b43ac505978375, $this, '__sleep', array(), $this->initializer5a637132b4424875025576) || 1) && $this->valueHolder5a637132b43ac505978375 = $valueHolder5a637132b43ac505978375;
        return array('valueHolder5a637132b43ac505978375');
    }
    public function __wakeup()
    {
        unset($this->charset);
        \Closure::bind(function (\Pimcore\Templating\Helper\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Templating\\Helper\\Navigation')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a637132b4424875025576 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5a637132b4424875025576;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5a637132b4424875025576 && ($this->initializer5a637132b4424875025576->__invoke($valueHolder5a637132b43ac505978375, $this, 'initializeProxy', array(), $this->initializer5a637132b4424875025576) || 1) && $this->valueHolder5a637132b43ac505978375 = $valueHolder5a637132b43ac505978375;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a637132b43ac505978375;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a637132b43ac505978375;
    }
}
