<?php

namespace Drupal\homework1;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a Contact entity.
 *
 * We have this interface so we can join the other interfaces it extends.
 *
 * @ingroup content_entity_example
 */
interface Homework1EntityInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}