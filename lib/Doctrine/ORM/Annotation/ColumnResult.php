<?php

declare(strict_types=1);

namespace Doctrine\ORM\Annotation;

/**
 * References name of a column in the SELECT clause of a SQL query.
 * Scalar result types can be included in the query result by specifying this annotation in the metadata.
 *
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 * @since   2.3
 *
 * @Annotation
 * @Target("ANNOTATION")
 */
final class ColumnResult implements Annotation
{
    /**
     * The name of a column in the SELECT clause of a SQL query.
     *
     * @var string
     */
    public $name;
}
