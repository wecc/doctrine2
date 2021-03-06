<?php

declare(strict_types=1);

namespace Doctrine\ORM;

use Doctrine\ORM\Mapping\ClassMetadata;

/**
 * Makes a Persistent Objects aware of its own object-manager.
 *
 * Using this interface the managing object manager and class metadata instances
 * are injected into the persistent object after construction. This allows
 * you to implement ActiveRecord functionality on top of the persistence-ignorance
 * that Doctrine propagates.
 *
 * Word of Warning: This is a very powerful hook to change how you can work with your domain models.
 * Using this hook will break the Single Responsibility Principle inside your Domain Objects
 * and increase the coupling of database and objects.
 *
 * Every EntityManager has to implement this functionality itself.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
interface EntityManagerAware
{
    /**
     * Injects responsible EntityManager and the ClassMetadata into this persistent object.
     *
     * @param EntityManagerInterface $entityManager
     * @param ClassMetadata          $classMetadata
     *
     * @return void
     */
    public function injectEntityManager(EntityManagerInterface $entityManager, ClassMetadata $classMetadata) : void;
}
