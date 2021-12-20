<?php

declare(strict_types=1);

namespace Themes\BsItalia\Providers;

use Modules\Xot\Providers\XotBaseThemeServiceProvider;

/**
 * Undocumented class.
 */
class BsItaliaServiceProvider extends XotBaseThemeServiceProvider {
    public string $dir = __DIR__;
    public string $name = 'BsItalia';
    public string $ns = 'adm_theme';
}
