<?php
namespace Dkplus\Annotations\GoF\Structural;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * Allows an interface of an existing class to be used as another interface.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link https://en.wikipedia.org/wiki/Adapter_pattern
 */
final class Adapter
{
    /**
     * @var string
     * @Annotation\Required
     * @Annotation\Enum({"INHERITANCE", "DELEGATION"})
     */
    public $strategy;

    /**
     * @var string
     * @Annotation\Required
     */
    public $adapteeClass;
}
