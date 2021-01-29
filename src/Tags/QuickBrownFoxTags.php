<?php

namespace Sortarad\QuickBrownFox\Tags;

use Statamic\Tags\Tags;
use Sortarad\QuickBrownFox\Font;

class QuickBrownFoxTags extends Tags
{
    protected static $handle = 'quick_brown_fox';

    /**
     * The {{ quick_brown_fox }} tag.
     *
     * @return null|string
     */
    public function index()
    {
        if (! $this->params->has('from')) {
            return null;
        }

        $items = $this->params->get('from');
        $size = $this->params->get('size', 20);

        if ($items->isEmpty()) {
            return null;
        }

        $fonts = $items->map(function ($item) {
            return new Font($item->url());
        })->sortBy(function ($font) {
            return $font->weight;
        });

        $data = [
            'fonts' => $fonts->all(),
            'data' => array_merge($fonts->first()->getData(), ['align' => 'left', 'size' => $size]),
            'text' => $this->content ?: 'The quick brown fox jumps over the lazy dog.',
        ];

        return view('qbf::index', $data);
    }

    /**
     * The {{ quick_brown_fox:assets }} tag.
     *
     * @return string|array
     */
    public function assets()
    {
        return view('qbf::assets');
    }
}
