<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserStatsTableSeeder extends Seeder
{
    /**
     * Fresns seed file.
     */
    public function run(): void
    {
        DB::table('user_stats')->delete();

        DB::table('user_stats')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'like_user_count' => 0,
                'like_group_count' => 0,
                'like_hashtag_count' => 0,
                'like_post_count' => 0,
                'like_comment_count' => 0,
                'dislike_user_count' => 0,
                'dislike_group_count' => 0,
                'dislike_hashtag_count' => 0,
                'dislike_post_count' => 0,
                'dislike_comment_count' => 0,
                'follow_user_count' => 0,
                'follow_group_count' => 0,
                'follow_hashtag_count' => 0,
                'follow_post_count' => 0,
                'follow_comment_count' => 0,
                'block_user_count' => 0,
                'block_group_count' => 0,
                'block_hashtag_count' => 0,
                'block_post_count' => 0,
                'block_comment_count' => 0,
                'like_me_count' => 0,
                'dislike_me_count' => 0,
                'follow_me_count' => 0,
                'block_me_count' => 0,
                'post_publish_count' => 0,
                'post_digest_count' => 0,
                'post_like_count' => 0,
                'post_dislike_count' => 0,
                'post_follow_count' => 0,
                'post_block_count' => 0,
                'comment_publish_count' => 0,
                'comment_digest_count' => 0,
                'comment_like_count' => 0,
                'comment_dislike_count' => 0,
                'comment_follow_count' => 0,
                'comment_block_count' => 0,
                'extcredits1' => 0,
                'extcredits2' => 0,
                'extcredits3' => 0,
                'extcredits4' => 0,
                'extcredits5' => 0,
                'created_at' => '2022-10-18 17:00:00',
                'updated_at' => null,
                'deleted_at' => null,
            ],
        ]);
    }
}
