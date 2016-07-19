<?php
namespace Dkplus\Annotations\DDD;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * An application service provides a hosting environment for the execution of domain logic.
 *
 * It defines an application's boundary with a layer of services that establishes a set of available operations
 * and coordinates the application's response in each operation.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link http://gorodinski.com/blog/2012/04/14/services-in-domain-driven-design-ddd/
 * @link http://martinfowler.com/eaaCatalog/serviceLayer.html
 */
final class ApplicationService
{
}
