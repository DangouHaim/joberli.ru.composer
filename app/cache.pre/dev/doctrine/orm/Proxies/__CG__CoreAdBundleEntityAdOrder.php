<?php

namespace Proxies\__CG__\Core\AdBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AdOrder extends \Core\AdBundle\Entity\AdOrder implements \Doctrine\ORM\Proxy\Proxy
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
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Core\\AdBundle\\Entity\\AdOrder' . "\0" . 'id', '' . "\0" . 'Core\\AdBundle\\Entity\\AdOrder' . "\0" . 'adoptDate', 'price', 'amount', 'status', 'title', 'payStatus', 'seller', 'venditore', 'ad', 'subAd', 'dialog', '' . "\0" . 'Core\\AdBundle\\Entity\\AdOrder' . "\0" . 'task', '' . "\0" . 'Core\\AdBundle\\Entity\\AdOrder' . "\0" . 'dateCreated', '' . "\0" . 'Core\\AdBundle\\Entity\\AdOrder' . "\0" . 'dateUpdated', 'executDays', 'executDaysAmount');
        }

        return array('__isInitialized__', '' . "\0" . 'Core\\AdBundle\\Entity\\AdOrder' . "\0" . 'id', '' . "\0" . 'Core\\AdBundle\\Entity\\AdOrder' . "\0" . 'adoptDate', 'price', 'amount', 'status', 'title', 'payStatus', 'seller', 'venditore', 'ad', 'subAd', 'dialog', '' . "\0" . 'Core\\AdBundle\\Entity\\AdOrder' . "\0" . 'task', '' . "\0" . 'Core\\AdBundle\\Entity\\AdOrder' . "\0" . 'dateCreated', '' . "\0" . 'Core\\AdBundle\\Entity\\AdOrder' . "\0" . 'dateUpdated', 'executDays', 'executDaysAmount');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AdOrder $proxy) {
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', array($price));

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', array());

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($status));

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreated($dateCreated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreated', array($dateCreated));

        return parent::setDateCreated($dateCreated);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreated', array());

        return parent::getDateCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateUpdated($dateUpdated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateUpdated', array($dateUpdated));

        return parent::setDateUpdated($dateUpdated);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateUpdated', array());

        return parent::getDateUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeller(\Core\UserBundle\Entity\User $seller)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeller', array($seller));

        return parent::setSeller($seller);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeller()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeller', array());

        return parent::getSeller();
    }

    /**
     * {@inheritDoc}
     */
    public function setVenditore(\Core\UserBundle\Entity\User $venditore)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVenditore', array($venditore));

        return parent::setVenditore($venditore);
    }

    /**
     * {@inheritDoc}
     */
    public function getVenditore()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVenditore', array());

        return parent::getVenditore();
    }

    /**
     * {@inheritDoc}
     */
    public function setAd(\Core\AdBundle\Entity\Ad $ad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAd', array($ad));

        return parent::setAd($ad);
    }

    /**
     * {@inheritDoc}
     */
    public function getAd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAd', array());

        return parent::getAd();
    }

    /**
     * {@inheritDoc}
     */
    public function getSubAd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubAd', array());

        return parent::getSubAd();
    }

    /**
     * {@inheritDoc}
     */
    public function addSubAd(\Core\AdBundle\Entity\AdSub $subAd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSubAd', array($subAd));

        return parent::addSubAd($subAd);
    }

    /**
     * {@inheritDoc}
     */
    public function getExecutDays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExecutDays', array());

        return parent::getExecutDays();
    }

    /**
     * {@inheritDoc}
     */
    public function setExecutDays($executDays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExecutDays', array($executDays));

        return parent::setExecutDays($executDays);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getPayStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPayStatus', array());

        return parent::getPayStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setPayStatus($payStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPayStatus', array($payStatus));

        return parent::setPayStatus($payStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmount', array());

        return parent::getAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAmount', array($amount));

        return parent::setAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function getExecutDaysAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExecutDaysAmount', array());

        return parent::getExecutDaysAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setExecutDaysAmount($executDaysAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExecutDaysAmount', array($executDaysAmount));

        return parent::setExecutDaysAmount($executDaysAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdoptDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdoptDate', array());

        return parent::getAdoptDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdoptDate($adoptDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdoptDate', array($adoptDate));

        return parent::setAdoptDate($adoptDate);
    }

    /**
     * {@inheritDoc}
     */
    public function setSubAd($subAd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubAd', array($subAd));

        return parent::setSubAd($subAd);
    }

    /**
     * {@inheritDoc}
     */
    public function setDialog(\Core\MessageBundle\Entity\Thread $dialog = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDialog', array($dialog));

        return parent::setDialog($dialog);
    }

    /**
     * {@inheritDoc}
     */
    public function getDialog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDialog', array());

        return parent::getDialog();
    }

    /**
     * {@inheritDoc}
     */
    public function addTask(\Core\AdBundle\Entity\AdTask $task)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTask', array($task));

        return parent::addTask($task);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTask(\Core\AdBundle\Entity\AdTask $task)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTask', array($task));

        return parent::removeTask($task);
    }

    /**
     * {@inheritDoc}
     */
    public function getDaysLeft()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDaysLeft', array());

        return parent::getDaysLeft();
    }

    /**
     * {@inheritDoc}
     */
    public function getTask()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTask', array());

        return parent::getTask();
    }

}
