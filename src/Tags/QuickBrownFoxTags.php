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
        $fonts = $items->map(function ($item) {
            return new Font($item->url());
        })->sortBy(function ($font) {
            return $font->weight;
        });

        $data = [
            'fonts' => $fonts->all(),
            'textStyle' => $fonts->first()->getStyles(),
        ];

        return view('qbf::index', $data);
    }
}
