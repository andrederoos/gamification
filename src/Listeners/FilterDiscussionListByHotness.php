<?php
/**
 *  This file is part of reflar/gamification.
 *
 *  Copyright (c) ReFlar.
 *
 *  http://reflar.io
 *
 *  For the full copyright and license information, please view the license.md
 *  file that was distributed with this source code.
 */

namespace Reflar\Gamification\Listeners;

use Flarum\Event\ConfigureDiscussionGambits;
use Illuminate\Contracts\Events\Dispatcher;
use Reflar\Gamification\Gambit\HotGambit;

class FilterDiscussionListByHotness
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureDiscussionGambits::class, [$this, 'ConfigureDiscussionGambits']);
    }

    /**
     * @param ConfigureDiscussionGambits $event
     */
    public function ConfigureDiscussionGambits(ConfigureDiscussionGambits $event)
    {
        $event->gambits->add(HotGambit::class);
    }
}
