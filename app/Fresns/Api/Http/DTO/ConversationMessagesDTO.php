<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jarvis Tang
 * Released under the Apache-2.0 License.
 */

namespace App\Fresns\Api\Http\DTO;

use Fresns\DTO\DTO;

class ConversationMessagesDTO extends DTO
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'orderDirection' => ['string', 'nullable', 'in:asc,desc'],
            'pageListDirection' => ['string', 'nullable', 'in:latest,oldest'],
            'pageSize' => ['integer', 'nullable', 'between:1,30'],
            'page' => ['integer', 'nullable'],
        ];
    }
}
