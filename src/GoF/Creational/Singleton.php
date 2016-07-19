<?php
namespace Dkplus\Annotations\GoF\Creational;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * A class that restricts the instantiation of itself to one object.
 *
 * @Annotation
 * @Annotation\Target("CLASS")
 * @link https://en.wikipedia.org/wiki/Singleton_pattern
 */
final class Singleton
{
}
