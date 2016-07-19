<?php
namespace Dkplus\Annotations\DDD;

use Dkplus\Annotations\Immutable;
use Doctrine\Common\Annotations\Annotation;

/**
 * A domain event is a type of message that describes something that has happened in the past.
 *
 * Domain events are mostly published from the aggregates.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link http://verraes.net/2014/11/domain-events/
 * @Immutable
 */
final class DomainEvent
{
}
