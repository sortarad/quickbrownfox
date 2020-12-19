<?php

namespace Sortarad\QuickBrownFox;

use Sortarad\QuickBrownFox\Tags\QuickBrownFoxTags;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        QuickBrownFoxTags::class,
    ];

    protected $viewNamespace = 'qbf';
}
