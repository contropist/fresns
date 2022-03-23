<?php

namespace App\Fresns\Words\Providers;

use App\Fresns\Words\Account\Account;
use App\Fresns\Words\Basis\Basis;
use App\Fresns\Words\Content\Content;
use App\Fresns\Words\Crontab\Crontab;
use App\Fresns\Words\File\File;
use App\Fresns\Words\Send\Send;
use App\Fresns\Words\User\User;
use App\Fresns\Words\Wallet\Wallet;
use Illuminate\Support\ServiceProvider;

class CmdWordServiceProvider extends ServiceProvider implements \Fresns\CmdWordManager\Contracts\CmdWordProviderContract
{
    use \Fresns\CmdWordManager\Traits\CmdWordProviderTrait;

    protected $unikeyName = 'Fresns';

    /**
     * Fresns official developed command word.
     * @var array[]
     */
    protected $cmdWordsMap = [
        // Basic
        ['word' => 'decodeUrlSign', 'provider' => [Basis::class,'decodeUrlSign']],
        ['word' => 'verifySign', 'provider' => [Basis::class,'verifySign']],
        ['word' => 'uploadSessionLog', 'provider' => [Basis::class,'uploadSessionLog']],
        ['word' => 'sendCode', 'provider' => [Basis::class,'sendCode']],
        ['word' => 'checkCode', 'provider' => [Basis::class,'checkCode']],

        // Send
        ['word' => 'sendEmail', 'provider' => [Send::class,'sendEmail']],
        ['word' => 'sendSms', 'provider' => [Send::class,'sendSms']],
        ['word' => 'sendAppNotification', 'provider' => [Send::class,'sendAppNotification']],
        ['word' => 'sendWechatMessage', 'provider' => [Send::class,'sendWechatMessage']],

        // Account
        ['word' => 'addAccount', 'provider' => [Account::class,'addAccount']],
        ['word' => 'verifyAccount', 'provider' => [Account::class,'verifyAccount']],
        ['word' => 'getAccountDetail', 'provider' => [Account::class,'getAccountDetail']],
        ['word' => 'createSessionToken', 'provider' => [Account::class,'createSessionToken']],
        ['word' => 'verifySessionToken', 'provider' => [Account::class,'verifySessionToken']],
        ['word' => 'logicalDeletionAccount','provider' => [Account::class,'logicalDeletionAccount']],

        // User
        ['word' => 'addUser', 'provider' => [User::class,'addUser']],
        ['word' => 'verifyUser', 'provider' => [User::class,'verifyUser']],
        ['word' => 'getUserDetail', 'provider' => [User::class,'getUserDetail']],
        ['word' => 'deactivateUserDialog','provider' => [User::class,'deactivateUserDialog']],
        ['word' => 'logicalDeletionUser','provider' => [User::class,'logicalDeletionUser']],

        // Wallet
        ['word' => 'walletIncrease', 'provider' => [Wallet::class,'walletIncrease']],
        ['word' => 'walletDecrease', 'provider' => [Wallet::class,'walletDecrease']],

        // File
        ['word' => 'getUploadToken', 'provider' => [File::class,'getUploadToken']],
        ['word' => 'uploadFile', 'provider' => [File::class,'uploadFile']],
        ['word' => 'uploadFileInfo', 'provider' => [File::class,'uploadFileInfo']],
        ['word' => 'getFileUrlOfAntiLink', 'provider' => [File::class,'getFileUrlOfAntiLink']],
        ['word' => 'getFileInfoOfAntiLink', 'provider' => [File::class,'getFileInfoOfAntiLink']],
        ['word' => 'logicalDeletionFile', 'provider' => [File::class,'logicalDeletionFile']],
        ['word' => 'physicalDeletionFile', 'provider' => [File::class,'physicalDeletionFile']],

        // Content
        ['word' => 'generateDraftFromMainTable', 'provider' => [Content::class,'generateDraftFromMainTable']],
        ['word' => 'logicalDeletionContent', 'provider' => [File::class,'logicalDeletionContent']],
        ['word' => 'physicalDeletionContent', 'provider' => [File::class,'physicalDeletionContent']],

        // Crontab
        ['word' => 'addCrontabItem','provider' => [Crontab::class,'addCrontabItem']],
        ['word' => 'deleteCrontabItem','provider' => [Crontab::class,'deleteCrontabItem']],

        // Fresns Crontab
        ['word' => 'checkUserRoleExpired','provider' => [Crontab::class,'checkUserRoleExpired']],
        ['word' => 'checkDeleteAccount','provider' => [Crontab::class,'checkDeleteAccount']],
    ];

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCmdWordProvider();
    }
}
