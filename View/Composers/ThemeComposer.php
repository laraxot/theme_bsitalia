<?php

declare(strict_types=1);

namespace Themes\BsItalia\View\Composers;

use ErrorException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Modules\Mediamonitor\Models\Channel;
use Modules\Mediamonitor\Models\Media;
use Modules\Mediamonitor\Models\Ner;
use Modules\Mediamonitor\Models\Press;
use Modules\Mediamonitor\Models\Sentence;
use Modules\Mediamonitor\Services\MediaService;
use Modules\Xot\Services\FileService;
use Modules\Xot\View\Composers\XotBaseComposer;

class ThemeComposer extends XotBaseComposer {
  

    /**
     * Bind data to the view.
     *
     * @return void
     */
    public function compose(View $view) {
        // $view->with('adminlte', $this->adminlte);
        $view->with('_theme', $this);
    }


}