<?php
namespace Dkplus\Annotations;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * An object with no referenced value or with defined neutral behavior.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link https://en.wikipedia.org/wiki/Null_Object_pattern
 */
final class NullObject
{
}
