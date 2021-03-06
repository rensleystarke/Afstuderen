<?php

namespace XLite\Model\Proxy\__CG__\XLite\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Currency extends \XLite\Model\Currency implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'currency_id', 'code', 'symbol', 'prefix', 'suffix', 'e', 'decimalDelimiter', 'thousandDelimiter', 'orders', 'countries', 'roundUp', 'editLanguage', 'translations', '_previous_state');
        }

        return array('__isInitialized__', 'currency_id', 'code', 'symbol', 'prefix', 'suffix', 'e', 'decimalDelimiter', 'thousandDelimiter', 'orders', 'countries', 'roundUp', 'editLanguage', 'translations', '_previous_state');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Currency $proxy) {
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
    public function setCurrencyId($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrencyId', array($value));

        return parent::setCurrencyId($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrencySymbol($strict = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrencySymbol', array($strict));

        return parent::getCurrencySymbol($strict);
    }

    /**
     * {@inheritDoc}
     */
    public function roundValue($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'roundValue', array($value));

        return parent::roundValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function roundValueAsInteger($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'roundValueAsInteger', array($value));

        return parent::roundValueAsInteger($value);
    }

    /**
     * {@inheritDoc}
     */
    public function convertIntegerToFloat($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'convertIntegerToFloat', array($value));

        return parent::convertIntegerToFloat($value);
    }

    /**
     * {@inheritDoc}
     */
    public function formatValue($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'formatValue', array($value));

        return parent::formatValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinimumValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinimumValue', array());

        return parent::getMinimumValue();
    }

    /**
     * {@inheritDoc}
     */
    public function formatParts($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'formatParts', array($value));

        return parent::formatParts($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrencyId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrencyId', array());

        return parent::getCurrencyId();
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
    public function setSymbol($symbol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSymbol', array($symbol));

        return parent::setSymbol($symbol);
    }

    /**
     * {@inheritDoc}
     */
    public function getSymbol()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSymbol', array());

        return parent::getSymbol();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrefix($prefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrefix', array($prefix));

        return parent::setPrefix($prefix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrefix', array());

        return parent::getPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function setSuffix($suffix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuffix', array($suffix));

        return parent::setSuffix($suffix);
    }

    /**
     * {@inheritDoc}
     */
    public function getSuffix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSuffix', array());

        return parent::getSuffix();
    }

    /**
     * {@inheritDoc}
     */
    public function setE($e)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setE', array($e));

        return parent::setE($e);
    }

    /**
     * {@inheritDoc}
     */
    public function getE()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getE', array());

        return parent::getE();
    }

    /**
     * {@inheritDoc}
     */
    public function setDecimalDelimiter($decimalDelimiter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDecimalDelimiter', array($decimalDelimiter));

        return parent::setDecimalDelimiter($decimalDelimiter);
    }

    /**
     * {@inheritDoc}
     */
    public function getDecimalDelimiter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDecimalDelimiter', array());

        return parent::getDecimalDelimiter();
    }

    /**
     * {@inheritDoc}
     */
    public function setThousandDelimiter($thousandDelimiter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThousandDelimiter', array($thousandDelimiter));

        return parent::setThousandDelimiter($thousandDelimiter);
    }

    /**
     * {@inheritDoc}
     */
    public function getThousandDelimiter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThousandDelimiter', array());

        return parent::getThousandDelimiter();
    }

    /**
     * {@inheritDoc}
     */
    public function addOrders(\XLite\Model\Order $orders)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOrders', array($orders));

        return parent::addOrders($orders);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrders()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrders', array());

        return parent::getOrders();
    }

    /**
     * {@inheritDoc}
     */
    public function addCountries(\XLite\Model\Country $countries)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCountries', array($countries));

        return parent::addCountries($countries);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountries()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountries', array());

        return parent::getCountries();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoundUp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoundUp', array());

        return parent::getRoundUp();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoundUp($roundUp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoundUp', array($roundUp));

        return parent::setRoundUp($roundUp);
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
