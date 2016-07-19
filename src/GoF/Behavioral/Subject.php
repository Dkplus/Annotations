<?php
namespace Dkplus\Annotations\GoF\Behavioral;

use Doctrine\Common\Annotations\Annotation;

/**
 * Object that automatically notifies its observables.
 *
 * @Annotation
 * @Annotation\Target({"CLASS", "ANNOTATION"})
 * @link https://en.wikipedia.org/wiki/Observer_pattern
 */
final class Subject
{
    /**
     * Class that is observing this subject.
     *
     * @var string
     */
    public $observerClass;
}
