<?php
namespace Dkplus\Annotations\GoF\Behavioral;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * A processing that is handled by a command; the rest, which the command cannot handle is passed to other commands.
 *
 * It should be placed upon the abstract processing object.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link https://en.wikipedia.org/wiki/Chain-of-responsibility_pattern
 */
final class ChainOfResponsibility
{
}
