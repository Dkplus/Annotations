<?php
namespace Dkplus\Annotations\GoF\Structural;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * A wrapper or agent object that is being called by the client to access the real serving object behind the scenes.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link https://en.wikipedia.org/wiki/Proxy_pattern
 */
final class Proxy
{
}
