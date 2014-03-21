<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\UnitOfWork;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class tuittyTuittyBundleDocumentFriendHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id'])) {
            $value = $data['_id'];
            $return = $value instanceof \MongoId ? (string) $value : $value;
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['userId'])) {
            $value = $data['userId'];
            $return = (string) $value;
            $this->class->reflFields['userId']->setValue($document, $return);
            $hydratedData['userId'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['friendId'])) {
            $value = $data['friendId'];
            $return = (string) $value;
            $this->class->reflFields['friendId']->setValue($document, $return);
            $hydratedData['friendId'] = $return;
        }

        /** @Field(type="boolean") */
        if (isset($data['active'])) {
            $value = $data['active'];
            $return = (bool) $value;
            $this->class->reflFields['active']->setValue($document, $return);
            $hydratedData['active'] = $return;
        }
        return $hydratedData;
    }
}