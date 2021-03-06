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

namespace Reflar\Gamification\Notification;

use Flarum\Notification\Blueprint\BlueprintInterface;
use Flarum\Post\Post;
use Flarum\User\User;

class VoteBlueprint implements BlueprintInterface
{
    /**
     * @var Post
     */
    public $post;

    /**
     * @var User
     */
    public $actor;

    /**
     * @var string
     */
    public $type;

    /**
     * VoteBlueprint constructor.
     *
     * @param Post $post
     * @param User $actor
     * @param $type
     */
    public function __construct(Post $post, User $actor, $type)
    {
        $this->post = $post;
        $this->actor = $actor;
        $this->type = $type;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubject()
    {
        return $this->post;
    }

    /**
     * {@inheritdoc}
     */
    public function getFromUser()
    {
        return $this->actor;
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public static function getType()
    {
        return 'vote';
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubjectModel()
    {
        return Post::class;
    }
}
