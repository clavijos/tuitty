<?php

namespace MongoDBODMProxies\__CG__\tuitty\TuittyBundle\Document;

use Doctrine\ODM\MongoDB\Persisters\DocumentPersister;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class Photo extends \tuitty\TuittyBundle\Document\Photo implements \Doctrine\ODM\MongoDB\Proxy\Proxy
{
    private $__documentPersister__;
    public $__identifier__;
    public $__isInitialized__ = false;
    public function __construct(DocumentPersister $documentPersister, $identifier)
    {
        $this->__documentPersister__ = $documentPersister;
        $this->__identifier__ = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->__documentPersister__) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->__documentPersister__->load($this->__identifier__, $this) === null) {
                throw \Doctrine\ODM\MongoDB\DocumentNotFoundException::documentNotFound(get_class($this), $this->__identifier__);
            }
            unset($this->__documentPersister__, $this->__identifier__);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return $this->__identifier__;
        }
        $this->__load();
        return parent::getId();
    }

    public function getUserId()
    {
        $this->__load();
        return parent::getUserId();
    }

    public function setUserId($userId)
    {
        $this->__load();
        return parent::setUserId($userId);
    }

    public function getTuittyId()
    {
        $this->__load();
        return parent::getTuittyId();
    }

    public function setTuittyId($tuittyId)
    {
        $this->__load();
        return parent::setTuittyId($tuittyId);
    }

    public function getRegistrationDate()
    {
        $this->__load();
        return parent::getRegistrationDate();
    }

    public function setRegistrationDate($registrationDate)
    {
        $this->__load();
        return parent::setRegistrationDate($registrationDate);
    }

    public function getPath()
    {
        $this->__load();
        return parent::getPath();
    }

    public function setContent($path)
    {
        $this->__load();
        return parent::setContent($path);
    }

    public function getExtension()
    {
        $this->__load();
        return parent::getExtension();
    }

    public function setExtension($extension)
    {
        $this->__load();
        return parent::setExtension($extension);
    }

    public function getActive()
    {
        $this->__load();
        return parent::getActive();
    }

    public function setActive($active)
    {
        $this->__load();
        return parent::setActive($active);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'userId', 'tuittyId', 'registrationDate', 'path', 'extension', 'active');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->__documentPersister__) {
            $this->__isInitialized__ = true;
            $class = $this->__documentPersister__->getClassMetadata();
            $original = $this->__documentPersister__->load($this->__identifier__);
            if ($original === null) {
                throw \Doctrine\ODM\MongoDB\MongoDBException::documentNotFound(get_class($this), $this->__identifier__);
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->__documentPersister__, $this->__identifier__);
        }
        
    }
}