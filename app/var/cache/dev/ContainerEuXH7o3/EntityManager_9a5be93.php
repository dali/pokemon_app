<?php

namespace ContainerEuXH7o3;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercb27d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3b3ba = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties32a5b = [
        
    ];

    public function getConnection()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'getConnection', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'getMetadataFactory', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'getExpressionBuilder', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'beginTransaction', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'getCache', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'transactional', array('func' => $func), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'commit', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->commit();
    }

    public function rollback()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'rollback', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'getClassMetadata', array('className' => $className), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'createQuery', array('dql' => $dql), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'createNamedQuery', array('name' => $name), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'createQueryBuilder', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'flush', array('entity' => $entity), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'clear', array('entityName' => $entityName), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->clear($entityName);
    }

    public function close()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'close', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->close();
    }

    public function persist($entity)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'persist', array('entity' => $entity), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'remove', array('entity' => $entity), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'refresh', array('entity' => $entity), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'detach', array('entity' => $entity), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'merge', array('entity' => $entity), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'contains', array('entity' => $entity), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'getEventManager', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'getConfiguration', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'isOpen', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'getUnitOfWork', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'getProxyFactory', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'initializeObject', array('obj' => $obj), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'getFilters', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'isFiltersStateClean', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'hasFilters', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return $this->valueHoldercb27d->hasFilters();
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

        $instance->initializer3b3ba = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldercb27d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercb27d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercb27d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, '__get', ['name' => $name], $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        if (isset(self::$publicProperties32a5b[$name])) {
            return $this->valueHoldercb27d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb27d;

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

        $targetObject = $this->valueHoldercb27d;
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
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb27d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercb27d;
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
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, '__isset', array('name' => $name), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb27d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercb27d;
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
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, '__unset', array('name' => $name), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb27d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercb27d;
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
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, '__clone', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        $this->valueHoldercb27d = clone $this->valueHoldercb27d;
    }

    public function __sleep()
    {
        $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, '__sleep', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;

        return array('valueHoldercb27d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3b3ba = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3b3ba;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3b3ba && ($this->initializer3b3ba->__invoke($valueHoldercb27d, $this, 'initializeProxy', array(), $this->initializer3b3ba) || 1) && $this->valueHoldercb27d = $valueHoldercb27d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercb27d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercb27d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
