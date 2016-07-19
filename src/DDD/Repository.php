<?php
namespace Dkplus\Annotations\DDD;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * Mediates between the domain and data mapping layers using a collection-like interface for accessing domain objects.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link http://martinfowler.com/eaaCatalog/repository.html
 */
final class Repository
{
    /**
     * Class of the handled aggregates.
     *
     * @var string
     */
    public $aggregateClass;
}
