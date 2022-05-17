<?php

declare(strict_types=1);

namespace italia\DesignLaravelTheme\Menu\Filters;

use italia\DesignLaravelTheme\Menu\Builder;

interface FilterInterface {
    public function transform($item, Builder $builder);
}
