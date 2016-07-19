<?php
namespace Dkplus\Annotations\GoF\Behavioral;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * Provides the ability to restore an object to its previous state.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link https://en.wikipedia.org/wiki/Memento_pattern
 */
final class Memento
{
    /**
     * The class whose state is saved.
     *
     * @var string
     */
    public $originatorClass;
}
