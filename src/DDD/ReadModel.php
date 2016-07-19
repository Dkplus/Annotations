<?php
namespace Dkplus\Annotations\DDD;

use Dkplus\Annotations\Immutable;
use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * A optimized read version of the domain model.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link http://gorodinski.com/blog/2012/04/25/read-models-as-a-tactical-pattern-in-domain-driven-design-ddd/
 * @Immutable
 */
final class ReadModel
{
}
