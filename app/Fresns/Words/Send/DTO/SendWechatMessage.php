<?php

namespace App\Fresns\Words\Send\DTO;

use Fresns\DTO\DTO;

/**
 * Class SendWechatMessage
 * @package App\Fresns\Words\Send\DTO
 */
class SendWechatMessage extends DTO
{
    /**
    * @return array
    */
    public function rules(): array
    {
        return [
            'channel' => ['integer','in:1,2'],
            'uid' => ['required','integer'],
            'template' => 'string',
            'coverUrl' => 'string',
            'title' => 'string',
            'content' => 'string',
            'time' => 'string',
            'linkType' => 'string',
            'linkUrl' => 'string'
        ];
    }
}
