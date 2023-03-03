<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder840df = null;
    private $initializer95b7f = null;
    private static $publicProperties846cc = [
        
    ];
    public function getConnection()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'getConnection', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'getMetadataFactory', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'getExpressionBuilder', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'beginTransaction', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'getCache', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->getCache();
    }
    public function transactional($func)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'transactional', array('func' => $func), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'wrapInTransaction', array('func' => $func), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'commit', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->commit();
    }
    public function rollback()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'rollback', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'getClassMetadata', array('className' => $className), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'createQuery', array('dql' => $dql), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'createNamedQuery', array('name' => $name), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'createQueryBuilder', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'flush', array('entity' => $entity), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'clear', array('entityName' => $entityName), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->clear($entityName);
    }
    public function close()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'close', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->close();
    }
    public function persist($entity)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'persist', array('entity' => $entity), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'remove', array('entity' => $entity), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'refresh', array('entity' => $entity), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'detach', array('entity' => $entity), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'merge', array('entity' => $entity), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'getRepository', array('entityName' => $entityName), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'contains', array('entity' => $entity), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'getEventManager', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'getConfiguration', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'isOpen', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'getUnitOfWork', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'getProxyFactory', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'initializeObject', array('obj' => $obj), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'getFilters', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'isFiltersStateClean', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'hasFilters', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return $this->valueHolder840df->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer95b7f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder840df) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder840df = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder840df->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, '__get', ['name' => $name], $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        if (isset(self::$publicProperties846cc[$name])) {
            return $this->valueHolder840df->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder840df;
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
        $targetObject = $this->valueHolder840df;
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
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder840df;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder840df;
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
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, '__isset', array('name' => $name), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder840df;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder840df;
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
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, '__unset', array('name' => $name), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder840df;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder840df;
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
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, '__clone', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        $this->valueHolder840df = clone $this->valueHolder840df;
    }
    public function __sleep()
    {
        $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, '__sleep', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
        return array('valueHolder840df');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer95b7f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer95b7f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer95b7f && ($this->initializer95b7f->__invoke($valueHolder840df, $this, 'initializeProxy', array(), $this->initializer95b7f) || 1) && $this->valueHolder840df = $valueHolder840df;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder840df;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder840df;
    }
}
