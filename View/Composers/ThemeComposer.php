<?php

declare(strict_types=1);

namespace Themes\BsItalia\View\Composers;

use ErrorException;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Modules\Media\Models\SpatieImage;
use Modules\Mediamonitor\Models\Channel;
use Modules\Mediamonitor\Models\Media;
use Modules\Mediamonitor\Models\Ner;
use Modules\Mediamonitor\Models\Sentence;
use Modules\Mediamonitor\Services\MediaService;
use Modules\Xot\Services\FileService;
use Modules\Xot\View\Composers\XotBaseComposer;

class ThemeComposer extends XotBaseComposer {
    public array $video_markers = [];

    /*
     * @var AdminLte
     */
    /*
     private $adminlte;

    public function __construct(AdminLTE $adminlte) {
        $this->adminlte = $adminlte;
    }
    */

    /**
     * Bind data to the view.
     *
     * @return void
     */
    public function compose(View $view) {
        // $view->with('adminlte', $this->adminlte);
        $view->with('_theme', $this);
    }

    public function restaurantsJson() {
        $json_path = (__DIR__.'/../../Resources/json/restaurants-geojson.json');
        $json_path = FileService::fixPath($json_path);
        $json = File::get($json_path);
        $json = json_decode($json);

        return $json->features;
    }

    public function videoResults() {
        $q = 'renzi';
        $rows = Sentence::where('text', 'like', '%'.$q.'%')->get();
        // (new MyModel())->on('second_db_connnection')->get();
        // $McibModel = new McibModel();
        // $McibModel->setConnection('second_db_connection');
        // dddx($rows);
        return $rows;
    }

    public function lastMedias() {
        $last_videos = Media::all()->take(-10);

        return $last_videos;
    }

    // per ora inserisco dati a caso
    public function fakeData() {
        return [
            'Alessandro Ricci',
            'Coppa Italia',
            'Croce Rossa',
            'Esteri Di Maio',
        ];
    }

    public function getNers() {
        // dddx(Ner::all()->groupBy('type'));
        return Ner::all()->groupBy('type');
    }

    public function getNersType(string $type, int $days): Collection {
        return MediaService::make()->getNersType($type, $days, 10);
    }

    public function channels(): Collection {
        $channels = Channel::where('logo', '!=', '')->get();

        return $channels;
    }

    public function getVideoMarkers(): array {
        return $this->video_markers;
    }

    public function getVideoMarkersJson(): string {
        return json_encode($this->getVideoMarkers());
    }

    public function activateSubtitles(Collection $subtitles, string $q): Collection {
        $q = strtolower($q);
        $pieces = explode(' ', $q);
        $count = $subtitles->count();
        $this->video_markers = [];
        foreach ($subtitles as $k => $sub) {
            if (! isset($sub->active)) {
                $sub->active = false;
            }

            $active = true;
            foreach ($pieces as $k0 => $piece) {
                try {
                    $curr = $subtitles[$k + $k0];
                    if (! Str::contains(Str::lower($curr->text), $piece)) {
                        $active = false;
                    }
                } catch (ErrorException $e) {
                    $active = false;
                }
            }
            if (true == $active) {
                foreach ($pieces as $k0 => $piece) {
                    $subtitles[$k + $k0]->active = true;
                    if (0 == $k0) {
                        $this->video_markers[] = [
                            'time' => $subtitles[$k]->start,
                            'text' => $q,
                        ];
                    }
                }
            }
        }

        return $subtitles;
    }

    public function myClippings(): Collection {
        $rows = SpatieImage::where('collection_name', 'clips')
            ->where('user_id', Auth::id())
            ->get();

        return $rows;
    }

    public function myClippingsNoMerge(): Collection {
        $rows = SpatieImage::where('collection_name', 'clips')
            ->where('user_id', Auth::id())
            ->get()
            ->filter(function ($item) {
                if (! Arr::exists($item->custom_properties, 'extra')) {
                    // dddx($item->custom_properties);
                    return $item;
                }
            });

        return $rows;
    }

    public function myClippingsMerge() {
        $rows = SpatieImage::where('collection_name', 'clips')
        ->where('user_id', Auth::id())
        ->get()->filter(function ($item) {
            if (Arr::exists($item->custom_properties, 'extra')) {
                // dddx($item->custom_properties);
                return $item;
            }
        });

        return $rows;
    }

    public function mySnaps(): Collection {
        $rows = SpatieImage::where('collection_name', 'snaps')
            ->where('user_id', Auth::id())
            ->get();

        return $rows;
    }

    public function getClipsDomain() {
        $domain = getServerName();
        $clips = SpatieImage::withAnyTags([$domain], 'domains')
            ->get();

        return $clips;
    }
}
