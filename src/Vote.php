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

namespace Reflar\Gamification;

use Flarum\Database\AbstractModel;
use Flarum\Post\Post;
use Flarum\User\User;

class Vote extends AbstractModel
{
    protected $table = 'post_votes';

    /**
     * @param Post $post
     * @param User $user
     *
     * @return static
     */
    public static function build(Post $post, User $user)
    {
        $vote = new static();

        $vote->post_id = $post->id;
        $vote->user_id = $user->id;

        return $vote;
    }
}
