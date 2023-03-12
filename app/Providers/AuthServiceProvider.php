<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing( function( $notifiable, $url  )
        {
            return ( new MailMessage )
            ->subject( 'Verificar cuenta' )
            ->line( 'Tu cuenta ya está a un paso de confirmar, sola da click en el enlace para confirmar tu cuenta' )
            ->action( 'Confirmar cuenta', $url )
            ->line( 'Si no creaste una cuenta, puede ignorar este correo' );
        } );
    }
}
