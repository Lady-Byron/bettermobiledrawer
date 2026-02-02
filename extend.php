<?php

namespace BetterFlarum\BetterMobileDrawer;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/forum.less'),
];
