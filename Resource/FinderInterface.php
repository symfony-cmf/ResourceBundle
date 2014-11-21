<?php

namespace Symfony\Cmf\Bundle\ResourceBundle\Resource;

interface FinderInterface
{
    /**
     * Locate a collection of resources from the
     * given locator. 
     *
     * @see Puli\Repository\ResourceRepositoryInterface#find
     *
     * @param string $selector
     * @return ResourceCollectionInterface
     */
    public function find($selector);
}
