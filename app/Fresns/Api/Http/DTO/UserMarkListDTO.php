<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace App\Fresns\Api\Http\DTO;

use Fresns\DTO\DTO;

class UserMarkListDTO extends DTO
{
    public function rules(): array
    {
        return [
            'markType' => ['string', 'required', 'in:like,dislike,follow,block'],
            'listType' => ['string', 'required', 'in:users,groups,hashtags,posts,comments'],
            'orderDirection' => ['string', 'nullable', 'in:asc,desc'],
            'whitelistKeys' => ['string', 'nullable'],
            'blacklistKeys' => ['string', 'nullable'],
            'pageSize' => ['integer', 'nullable', 'between:1,30'],
            'page' => ['integer', 'nullable'],
        ];
    }
}
