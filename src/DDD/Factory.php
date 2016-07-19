<?php
namespace Dkplus\Annotations\DDD;

use Dkplus\Annotations\GoF\Creational\FactoryMethod;
use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * A class whose responsibility is to create other objects.
 *
 * Use the FactoryMethod annotation to mark the creating methods.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link http://culttt.com/2014/12/24/factories-domain-driven-design/
 * @see FactoryMethod
 */
final class Factory
{
}
