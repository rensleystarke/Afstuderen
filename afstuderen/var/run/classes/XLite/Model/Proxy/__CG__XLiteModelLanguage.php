<?php

namespace XLite\Model\Proxy\__CG__\XLite\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Language extends \XLite\Model\Language implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * {@inheritDoc}
     * @param string $name
     */
    public function __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

        return parent::__get($name);
    }

    /**
     * {@inheritDoc}
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

        return parent::__set($name, $value);
    }

    /**
     * {@inheritDoc}
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', array($name));

        return parent::__isset($name);

    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'lng_id', 'code', 'code3', 'r2l', 'added', 'enabled', 'module', 'editLanguage', 'translations', '_previous_state');
        }

        return array('__isInitialized__', 'lng_id', 'code', 'code3', 'r2l', 'added', 'enabled', 'module', 'editLanguage', 'translations', '_previous_state');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Language $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getValidModule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValidModule', array());

        return parent::getValidModule();
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultCustomer', array());

        return parent::getDefaultCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultAdmin', array());

        return parent::getDefaultAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultAuth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultAuth', array());

        return parent::getDefaultAuth();
    }

    /**
     * {@inheritDoc}
     */
    public function getFlagURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFlagURL', array());

        return parent::getFlagURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getFlagFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFlagFile', array());

        return parent::getFlagFile();
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslations', array());

        return parent::removeTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function getLngId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLngId', array());

        return parent::getLngId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', array($code));

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', array());

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode3($code3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode3', array($code3));

        return parent::setCode3($code3);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode3', array());

        return parent::getCode3();
    }

    /**
     * {@inheritDoc}
     */
    public function setR2l($r2l)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setR2l', array($r2l));

        return parent::setR2l($r2l);
    }

    /**
     * {@inheritDoc}
     */
    public function getR2l()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getR2l', array());

        return parent::getR2l();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdded($added)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdded', array($added));

        return parent::setAdded($added);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdded', array());

        return parent::getAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', array($enabled));

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', array());

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setModule($module)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModule', array($module));

        return parent::setModule($module);
    }

    /**
     * {@inheritDoc}
     */
    public function getModule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModule', array());

        return parent::getModule();
    }

    /**
     * {@inheritDoc}
     */
    public function setEditLanguage($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEditLanguage', array($code));

        return parent::setEditLanguage($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', array());

        return parent::getTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslations(\XLite\Model\Base\Translation $translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslations', array($translation));

        return parent::addTranslations($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslation($code = NULL, $allowEmptyResult = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslation', array($code, $allowEmptyResult));

        return parent::getTranslation($code, $allowEmptyResult);
    }

    /**
     * {@inheritDoc}
     */
    public function getHardTranslation($code = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHardTranslation', array($code));

        return parent::getHardTranslation($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoftTranslation($code = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoftTranslation', array($code));

        return parent::getSoftTranslation($code);
    }

    /**
     * {@inheritDoc}
     */
    public function hasTranslation($code = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTranslation', array($code));

        return parent::hasTranslation($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslationCodes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslationCodes', array());

        return parent::getTranslationCodes();
    }

    /**
     * {@inheritDoc}
     */
    public function detach()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'detach', array());

        return parent::detach();
    }

    /**
     * {@inheritDoc}
     */
    public function cloneEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cloneEntity', array());

        return parent::cloneEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, array $arguments = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', array($method, $arguments));

        return parent::__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function hasMagicMethod($method)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasMagicMethod', array($method));

        return parent::hasMagicMethod($method);
    }

    /**
     * {@inheritDoc}
     */
    public function explicitlyLoadTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'explicitlyLoadTranslations', array());

        return parent::explicitlyLoadTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function _getPreviousState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_getPreviousState', array());

        return parent::_getPreviousState();
    }

    /**
     * {@inheritDoc}
     */
    public function map(array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'map', array($data));

        return parent::map($data);
    }

    /**
     * {@inheritDoc}
     */
    public function __unset($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__unset', array($name));

        return parent::__unset($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRepository', array());

        return parent::getRepository();
    }

    /**
     * {@inheritDoc}
     */
    public function checkCache()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkCache', array());

        return parent::checkCache();
    }

    /**
     * {@inheritDoc}
     */
    public function isPropertyExists($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPropertyExists', array($name));

        return parent::isPropertyExists($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setterProperty($property, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setterProperty', array($property, $value));

        return parent::setterProperty($property, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function getterProperty($property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getterProperty', array($property));

        return parent::getterProperty($property);
    }

    /**
     * {@inheritDoc}
     */
    public function isPersistent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPersistent', array());

        return parent::isPersistent();
    }

    /**
     * {@inheritDoc}
     */
    public function isDetached()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDetached', array());

        return parent::isDetached();
    }

    /**
     * {@inheritDoc}
     */
    public function isManaged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isManaged', array());

        return parent::isManaged();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueIdentifierName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueIdentifierName', array());

        return parent::getUniqueIdentifierName();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueIdentifier', array());

        return parent::getUniqueIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityName', array());

        return parent::getEntityName();
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldMetadata($property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldMetadata', array($property));

        return parent::getFieldMetadata($property);
    }

    /**
     * {@inheritDoc}
     */
    public function update()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'update', array());

        return parent::update();
    }

    /**
     * {@inheritDoc}
     */
    public function create()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'create', array());

        return parent::create();
    }

    /**
     * {@inheritDoc}
     */
    public function delete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', array());

        return parent::delete();
    }

    /**
     * {@inheritDoc}
     */
    public function processFiles($field, array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'processFiles', array($field, $data));

        return parent::processFiles($field, $data);
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldsDefinition($class = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldsDefinition', array($class));

        return parent::getFieldsDefinition($class);
    }

    /**
     * {@inheritDoc}
     */
    public function prepareEntityBeforeCommit($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prepareEntityBeforeCommit', array($type));

        return parent::prepareEntityBeforeCommit($type);
    }

    /**
     * {@inheritDoc}
     */
    public function isSerializable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSerializable', array());

        return parent::isSerializable();
    }

}
