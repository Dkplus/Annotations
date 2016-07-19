<?php
namespace Dkplus\Annotations\GoF\Structural;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * Allows behavior to be added to an object without affecting the behavior of other objects from the same class.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link https://en.wikipedia.org/wiki/Decorator_pattern
 */
final class Decorator
{
    /**
     * @var string
     * @Annotation\Required
     */
    public $decoratedClass;
}
