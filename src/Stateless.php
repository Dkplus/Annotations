<?php
namespace Dkplus\Annotations;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * Helps to design scalable services by separating the service from its state.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION", "METHOD"})
 * @link https://en.wikipedia.org/wiki/Service_statelessness_principle
 */
final class Stateless
{
}
