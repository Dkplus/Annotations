<?php
namespace Dkplus\Annotations;

use Doctrine\Common\Annotations\Annotation;

/**
 * An object that cannot be changed.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link https://en.wikipedia.org/wiki/Immutable_object
 */
final class Immutable
{
}
