<?php
namespace Dkplus\Annotations\DDD;

use Dkplus\Annotations\Stateless;
use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * Domain services are part of the domain and modeling concepts that cannot be expressed by entities or value objects.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link http://gorodinski.com/blog/2012/04/14/services-in-domain-driven-design-ddd/
 * @Stateless
 */
final class DomainService
{
}
