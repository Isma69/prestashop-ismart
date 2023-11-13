<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder613ab = null;
    private $initializer8c02d = null;
    private static $publicProperties42347 = [
        
    ];
    public function getConnection()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'getConnection', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'getMetadataFactory', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'getExpressionBuilder', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'beginTransaction', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'getCache', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->getCache();
    }
    public function transactional($func)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'transactional', array('func' => $func), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'commit', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->commit();
    }
    public function rollback()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'rollback', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'getClassMetadata', array('className' => $className), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'createQuery', array('dql' => $dql), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'createNamedQuery', array('name' => $name), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'createQueryBuilder', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'flush', array('entity' => $entity), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'clear', array('entityName' => $entityName), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->clear($entityName);
    }
    public function close()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'close', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->close();
    }
    public function persist($entity)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'persist', array('entity' => $entity), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'remove', array('entity' => $entity), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'refresh', array('entity' => $entity), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'detach', array('entity' => $entity), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'merge', array('entity' => $entity), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'contains', array('entity' => $entity), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'getEventManager', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'getConfiguration', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'isOpen', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'getUnitOfWork', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'getProxyFactory', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'initializeObject', array('obj' => $obj), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'getFilters', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'isFiltersStateClean', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'hasFilters', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return $this->valueHolder613ab->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer8c02d = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder613ab) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder613ab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder613ab->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, '__get', ['name' => $name], $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        if (isset(self::$publicProperties42347[$name])) {
            return $this->valueHolder613ab->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder613ab;
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
        $targetObject = $this->valueHolder613ab;
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
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder613ab;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder613ab;
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
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, '__isset', array('name' => $name), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder613ab;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder613ab;
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
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, '__unset', array('name' => $name), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder613ab;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder613ab;
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
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, '__clone', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        $this->valueHolder613ab = clone $this->valueHolder613ab;
    }
    public function __sleep()
    {
        $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, '__sleep', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
        return array('valueHolder613ab');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8c02d = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8c02d;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer8c02d && ($this->initializer8c02d->__invoke($valueHolder613ab, $this, 'initializeProxy', array(), $this->initializer8c02d) || 1) && $this->valueHolder613ab = $valueHolder613ab;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder613ab;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder613ab;
    }
}
