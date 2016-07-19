<?php
namespace Dkplus\Annotations\GoF\Behavioral;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * Used to traverse a container and access the container's elements.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link https://en.wikipedia.org/wiki/Iterator_pattern
 */
final class Iterator
{
    /**
     * Iterated type if it is not generic.
     *
     * @var mixed
     */
    public $iteratedType;
}
