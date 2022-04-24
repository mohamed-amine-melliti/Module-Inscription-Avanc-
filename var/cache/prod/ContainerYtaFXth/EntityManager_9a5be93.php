<?php

namespace ContainerYtaFXth;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder6807a = null;
    private $initializerbc478 = null;
    private static $publicProperties3a351 = [
        
    ];
    public function getConnection()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'getConnection', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'getMetadataFactory', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'getExpressionBuilder', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'beginTransaction', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'getCache', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->getCache();
    }
    public function transactional($func)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'transactional', array('func' => $func), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'commit', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->commit();
    }
    public function rollback()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'rollback', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'getClassMetadata', array('className' => $className), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'createQuery', array('dql' => $dql), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'createNamedQuery', array('name' => $name), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'createQueryBuilder', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'flush', array('entity' => $entity), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'clear', array('entityName' => $entityName), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->clear($entityName);
    }
    public function close()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'close', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->close();
    }
    public function persist($entity)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'persist', array('entity' => $entity), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'remove', array('entity' => $entity), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'refresh', array('entity' => $entity), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'detach', array('entity' => $entity), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'merge', array('entity' => $entity), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'contains', array('entity' => $entity), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'getEventManager', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'getConfiguration', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'isOpen', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'getUnitOfWork', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'getProxyFactory', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'initializeObject', array('obj' => $obj), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'getFilters', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'isFiltersStateClean', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'hasFilters', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return $this->valueHolder6807a->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerbc478 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder6807a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6807a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder6807a->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, '__get', ['name' => $name], $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        if (isset(self::$publicProperties3a351[$name])) {
            return $this->valueHolder6807a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6807a;
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
        $targetObject = $this->valueHolder6807a;
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
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6807a;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder6807a;
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
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, '__isset', array('name' => $name), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6807a;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder6807a;
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
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, '__unset', array('name' => $name), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6807a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder6807a;
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
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, '__clone', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        $this->valueHolder6807a = clone $this->valueHolder6807a;
    }
    public function __sleep()
    {
        $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, '__sleep', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
        return array('valueHolder6807a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbc478 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbc478;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbc478 && ($this->initializerbc478->__invoke($valueHolder6807a, $this, 'initializeProxy', array(), $this->initializerbc478) || 1) && $this->valueHolder6807a = $valueHolder6807a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6807a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6807a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
