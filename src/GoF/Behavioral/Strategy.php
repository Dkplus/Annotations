<?php
namespace Dkplus\Annotations\GoF\Behavioral;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * Enables an algorithm's behavior to be selected at runtime.
 *
 * Should be placed upon the abstract strategy, not on its client.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link https://en.wikipedia.org/wiki/Strategy_pattern
 */
final class Strategy
{
}
