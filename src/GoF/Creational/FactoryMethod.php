<?php
namespace Dkplus\Annotations\GoF\Creational;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * A method that creates another object regarding to the factory method pattern of the GoF.
 *
 * It might be a static method or a method of an interface.
 *
 * @Annotation
 * @Annotation\Target("METHOD")
 * @link https://en.wikipedia.org/wiki/Factory_method_pattern
 */
final class FactoryMethod
{
}
