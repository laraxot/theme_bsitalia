<?php

declare(strict_types=1);

namespace italia\DesignLaravelTheme\Menu\Filters;

use italia\DesignLaravelTheme\Menu\ActiveChecker;
use italia\DesignLaravelTheme\Menu\Builder;

class ActiveFilter implements FilterInterface
{
    private $activeChecker;

    public function __construct(ActiveChecker $activeChecker)
    {
        $this->activeChecker = $activeChecker;
    }

    public function transform($item, Builder $builder)
    {
        if (! isset($item['header'])) {
            $item['active'] = $this->activeChecker->isActive($item);
        }

        return $item;
    }
}
