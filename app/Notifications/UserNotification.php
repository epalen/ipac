<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\User;

class UserNotification extends Notification
{
    use Queueable;
    
    /**
     * @var string
     */
    protected $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {  
        $greeting   = sprintf('Hola %s!', $notifiable->name);

        return (new MailMessage)
                    ->greeting($greeting)
                    ->subject('Registro de usuario IPAC')
                    ->line('Usted se registró en la aplicación Iniciativa Participativa Anti Corrupción (IPAC).')
                    ->line('Su usuario de acceso es: '.$this->user->email)
                    ->line('Podrá acceder para darle seguimiento a su propuesta dando clic en el botón siguiente:')
                    ->action('Acceder', url('propuestas'))
                    ->line('Gracias por registrarse y utilizar nuestra aplicación!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
