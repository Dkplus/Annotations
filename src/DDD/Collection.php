<?php
namespace Dkplus\Annotations\DDD;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * A collection represents a group of aggregates.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link
 */
final class Collection
{
    /**
     * Class of the iterated entities.
     *
     * @var string
     */
    public $entity;
}
