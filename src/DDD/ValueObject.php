<?php
namespace Dkplus\Annotations\DDD;

use Dkplus\Annotations\Immutable;
use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * A small object that follows value semantics rather than reference semantics.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link http://martinfowler.com/bliki/ValueObject.html
 * @Immutable
 */
final class ValueObject
{
}
