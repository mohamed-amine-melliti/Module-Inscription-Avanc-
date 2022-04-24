<?php

namespace ContainerC5zT3ex;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6825d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer07e1c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4d0f3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'getConnection', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'getMetadataFactory', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'getExpressionBuilder', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'beginTransaction', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'getCache', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'transactional', array('func' => $func), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'commit', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->commit();
    }

    public function rollback()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'rollback', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'getClassMetadata', array('className' => $className), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'createQuery', array('dql' => $dql), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'createNamedQuery', array('name' => $name), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'createQueryBuilder', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'flush', array('entity' => $entity), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'clear', array('entityName' => $entityName), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->clear($entityName);
    }

    public function close()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'close', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->close();
    }

    public function persist($entity)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'persist', array('entity' => $entity), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'remove', array('entity' => $entity), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'refresh', array('entity' => $entity), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'detach', array('entity' => $entity), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'merge', array('entity' => $entity), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'contains', array('entity' => $entity), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'getEventManager', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'getConfiguration', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'isOpen', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'getUnitOfWork', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'getProxyFactory', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'initializeObject', array('obj' => $obj), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'getFilters', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'isFiltersStateClean', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'hasFilters', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return $this->valueHolder6825d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer07e1c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6825d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6825d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6825d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, '__get', ['name' => $name], $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        if (isset(self::$publicProperties4d0f3[$name])) {
            return $this->valueHolder6825d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6825d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6825d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6825d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6825d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, '__isset', array('name' => $name), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6825d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6825d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, '__unset', array('name' => $name), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6825d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6825d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, '__clone', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        $this->valueHolder6825d = clone $this->valueHolder6825d;
    }

    public function __sleep()
    {
        $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, '__sleep', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;

        return array('valueHolder6825d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer07e1c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer07e1c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer07e1c && ($this->initializer07e1c->__invoke($valueHolder6825d, $this, 'initializeProxy', array(), $this->initializer07e1c) || 1) && $this->valueHolder6825d = $valueHolder6825d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6825d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6825d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
