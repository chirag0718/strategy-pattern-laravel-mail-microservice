<?php

namespace App\Providers;

use App\Interfaces\MailInterface;
use App\Services\MailJetService;
use App\Services\SendGridService;
use Illuminate\Support\ServiceProvider;

class MailSendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MailInterface::class, function ($app) {
            if (config('mailprovider.mail_provider') === 'sendgrid') {
                return new SendGridService();
            }
            if (config('mailprovider.mail_provider') === 'mailjet') {
                return new MailJetService();
            }

            throw new \Exception('Provider is not found');
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
