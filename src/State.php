<?php

namespace Fastatsu\Generic;

/**
 * @template T
 */
interface State
{
    /**
     * @return T
     */
    public function get(): mixed;
}
