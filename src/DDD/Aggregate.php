<?php
namespace Dkplus\Annotations\DDD;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * A cluster of domain objects that can be treated as a single unit.
 *
 * @Annotation
 * @Annotation\Target("CLASS")
 * @link http://martinfowler.com/bliki/DDD_Aggregate.html
 * @Entity
 */
final class Aggregate
{
}
