<?php
namespace Dkplus\Annotations\GoF\Structural;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * Decouples an abstraction from its implementation.
 *
 * Should be placed upon the Abstraction.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link https://en.wikipedia.org/wiki/Bridge_pattern
 */
final class Bridge
{
    /**
     * @var string
     * @Annotation\Required
     */
    public $implementorClass;
}
