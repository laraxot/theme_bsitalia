<?php

declare(strict_types=1);

namespace italia\DesignLaravelTheme\Http\ViewComposers;

use Illuminate\View\View;
use italia\DesignLaravelTheme\BootstrapItalia;

class BootstrapItaliaComposer {
    /**
     * @var BootstrapItalia
     */
    private $bootstrapItalia;

    public function __construct(
        BootstrapItalia $bootsrapItalia
    ) {
        $this->bootstrapItalia = $bootsrapItalia;
    }

    /**
     * Bind data to the view.
     *
     * @return void
     */
    public function compose(View $view) {
        $view->with('bootstrapItalia', $this->bootstrapItalia);
    }
}
