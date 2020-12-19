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
     * @return string|array
     */
    public function index()
    {
        $items = $this->params->get('from');
        $fonts = $items->map(function($item) {
            return new Font($item->url());
        });

        $data = [
            'fonts' => $fonts->all(),
        ];

        // dd( $fonts );
        return view('qbf::index', $data);
    }

    /**
     * The {{ quick_brown_fox:example }} tag.
     *
     * @return string|array
     */
    public function example()
    {
        //
    }
}
