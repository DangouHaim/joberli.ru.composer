<?php

namespace Proxies\__CG__\Core\UserBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UserData extends \Core\UserBundle\Entity\UserData implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'user', 'purse', 'about', 'balance', 'skype', 'avatar', 'cover');
        }

        return array('__isInitialized__', 'id', 'user', 'purse', 'about', 'balance', 'skype', 'avatar', 'cover');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UserData $proxy) {
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
    public function getAvatar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatar', array());

        return parent::getAvatar();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar($avatar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatar', array($avatar));

        return parent::setAvatar($avatar);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileName', array());

        return parent::getFileName();
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
    public function setPurse($purse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPurse', array($purse));

        return parent::setPurse($purse);
    }

    /**
     * {@inheritDoc}
     */
    public function getPurse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPurse', array());

        return parent::getPurse();
    }

    /**
     * {@inheritDoc}
     */
    public function setSkype($skype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkype', array($skype));

        return parent::setSkype($skype);
    }

    /**
     * {@inheritDoc}
     */
    public function getSkype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkype', array());

        return parent::getSkype();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Core\UserBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getBalance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBalance', array());

        return parent::getBalance();
    }

    /**
     * {@inheritDoc}
     */
    public function setBalance($balance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBalance', array($balance));

        return parent::setBalance($balance);
    }

    /**
     * {@inheritDoc}
     */
    public function getCover()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCover', array());

        return parent::getCover();
    }

    /**
     * {@inheritDoc}
     */
    public function setCover($cover)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCover', array($cover));

        return parent::setCover($cover);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbout()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbout', array());

        return parent::getAbout();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbout($about)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbout', array($about));

        return parent::setAbout($about);
    }

}
