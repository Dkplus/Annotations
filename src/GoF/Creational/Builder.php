<?php
namespace Dkplus\Annotations\GoF\Creational;

use Doctrine\Common\Annotations\Annotation as Annotation;

/**
 * The builder pattern helps to deal with constructors with many parameters.
 *
 * @Annotation
 * @Annotation\Target("CLASS")
 * @link https://en.wikipedia.org/wiki/Builder_pattern
 */
final class Builder
{
    /**
     * The method that creates the result of the build process.
     *
     * @var string
     */
    public $finishMethod;
}
