<?php

declare(strict_types=1);

namespace italia\DesignLaravelTheme\Menu;

use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActiveChecker
{
    private $request;

    private $url;

    public function __construct(Request $request, UrlGenerator $url)
    {
        $this->request = $request;
        $this->url = $url;
    }

    public function isActive($item)
    {
        if (isset($item['active'])) {
            return $this->isExplicitActive($item['active']);
        }

        if (isset($item['submenu'])) {
            return $this->containsActive($item['submenu']);
        }

        if (isset($item['href'])) {
            return $this->checkExactOrSub($item['href']);
        }

        // Support URL for backwards compatibility
        if (isset($item['url'])) {
            return $this->checkExactOrSub($item['url']);
        }

        return false;
    }

    protected function checkExactOrSub($url)
    {
        return $this->checkExact($url) || $this->checkSub($url);
    }

    protected function checkExact($url)
    {
        return $this->checkPattern($url);
    }

    protected function checkSub($url)
    {
        return $this->checkPattern($url.'/*') || $this->checkPattern($url.'?*');
    }

    protected function checkPattern($pattern)
    {
        $fullUrlPattern = $this->url->to($pattern);

        $fullUrl = $this->request->fullUrl();

        return Str::is($fullUrlPattern, $fullUrl);
    }

    protected function containsActive($items)
    {
        foreach ($items as $item) {
            if ($this->isActive($item)) {
                return true;
            }
        }

        return false;
    }

    private function isExplicitActive($active)
    {
        foreach ($active as $url) {
            if ($this->checkExact($url)) {
                return true;
            }
        }

        return false;
    }
}
