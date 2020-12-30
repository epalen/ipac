<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Proposal;
use App\User;

class UserProposalNotification extends Notification
{
    use Queueable;

     /**
     * @var string
     */
    protected $user;
    protected $proposal;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Proposal $proposal)
    {
        $this->proposal = $proposal;
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
                    ->subject('Registro de propuesta Iniciativa Participativa Anti Corrupción - IPAC')
                    ->line('Usted generó un registro de propuesta.')
                    ->line('Fue registrada la propuesta No. '.$this->proposal->prefix.$this->proposal->id.date('dmY', strtotime($this->proposal->created_at)).', '.'Registro No. '.$this->proposal->order)
                    ->action('Acceder', url('consultar'))
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
