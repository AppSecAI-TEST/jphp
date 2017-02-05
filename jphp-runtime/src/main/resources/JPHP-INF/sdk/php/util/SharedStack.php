<?php
namespace php\util;

use Countable;
use Iterator;
use Traversable;

/**
 * Class SharedStack
 * @package php\util
 */
class SharedStack extends SharedCollection
{
    const __PACKAGE__ = 'std, core';

    /**
     * @param array|Traversable $array (optional)
     */
    public function __construct($array)
    {
    }

    /**
     * @param mixed $value
     * @return mixed peek value
     */
    public function push($value)
    {
    }

    /**
     * @return mixed peek value
     */
    public function pop()
    {
    }

    /**
     * @return mixed
     */
    public function peek()
    {
    }

    /**
     * @return int
     */
    public function count()
    {
    }

    /**
     * Remove all items.
     */
    public function clear()
    {
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
    }
}