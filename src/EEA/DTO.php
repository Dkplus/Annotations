<?php
namespace Dkplus\Annotations\EEA;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * An object that carries data between processes in order to reduce the number of method calls.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link http://martinfowler.com/eaaCatalog/dataTransferObject.html
 */
final class DTO
{
}
