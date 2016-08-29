<?php
namespace Ttree\Cqrs\Command\Resolver\Handler;

/*
 * This file is part of the Ttree.Cqrs package.
 *
 * (c) Hand crafted with love in each details by medialib.tv
 */

use Ttree\Cqrs\Command\Resolver\ResolverInterface;
use TYPO3\Flow\Annotations as Flow;

/**
 * AutoResolver
 *
 * @Flow\Scope("singleton")
 */
class ConventionBasedResolver implements ResolverInterface
{
    /**
     * @param  string $messageName
     * @return string
     */
    public function resolve($messageName): string
    {
        return str_replace('\\Command\\', '\\CommandHandler\\', $messageName) . 'Handler';
    }
}
