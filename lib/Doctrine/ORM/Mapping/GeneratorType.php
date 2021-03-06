<?php


declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

/**
 * Class GeneratorType
 *
 * @package Doctrine\ORM\Mapping
 * @since 3.0
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 */
final class GeneratorType
{
    /**
     * NONE means the class does not have a generated id. That means the class
     * must have a natural, manually assigned id.
     */
    const NONE = 'NONE';

    /**
     * AUTO means the generator type will depend on what the used platform prefers.
     * Offers full portability.
     */
    const AUTO = 'AUTO';

    /**
     * SEQUENCE means a separate sequence object will be used. Platforms that do
     * not have native sequence support may emulate it. Full portability is currently
     * not guaranteed.
     */
    const SEQUENCE = 'SEQUENCE';

    /**
     * TABLE means a separate table is used for id generation.
     * Offers full portability.
     */
    const TABLE = 'TABLE';

    /**
     * IDENTITY means an identity column is used for id generation. The database
     * will fill in the id column on insertion. Platforms that do not support
     * native identity columns may emulate them. Full portability is currently
     * not guaranteed.
     */
    const IDENTITY = 'IDENTITY';

    /**
     * UUID means that a UUID/GUID expression is used for id generation. Full
     * portability is currently not guaranteed.
     */
    const UUID = 'UUID';

    /**
     * CUSTOM means that customer will use own ID generator that supposedly work
     */
    const CUSTOM = 'CUSTOM';

    /**
     * Will break upon instantiation.
     */
    private function __construct()
    {
    }
}
