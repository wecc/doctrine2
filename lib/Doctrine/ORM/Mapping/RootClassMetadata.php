<?php


declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

/**
 * Class RootClassMetadata
 *
 * @package Doctrine\ORM\Mapping
 * @since 3.0
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 *
 * @property MappedSuperClassMetadata $parent
 */
class RootClassMetadata extends EntityClassMetadata
{
    /**
     * @return RootClassMetadata
     */
    public function getRootClass() : RootClassMetadata
    {
        return $this;
    }
}
