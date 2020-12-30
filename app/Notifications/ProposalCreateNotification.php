<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Proposal;
use App\User;

class ProposalCreateNotification extends Notification
{
    use Queueable;

    /**
     * @var string
     */
    protected $proposal;
    protected $userproposalnotify;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Proposal $proposal, User $userproposalnotify)
    {
        $this->proposal = $proposal;
        $this->userproposalnotify = $userproposalnotify;
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
        $greeting   = sprintf('Nuevo registro!');

        return (new MailMessage)
                    ->greeting($greeting)
                    ->subject('Registro de propuesta Iniciativa Participativa Anti Corrupción - IPAC')
                    ->line('Se ha generado un nuevo registro de propuesta.')
                    ->line('Fue registrada la propuesta No. '.$this->proposal->prefix.$this->proposal->id.date('dmY', strtotime($this->proposal->created_at)).', '.'Registro No. '.$this->proposal->order.', '.'por el usuario '.$this->userproposalnotify->name.' '.$this->userproposalnotify->lastname)
                    ->action('Ver propuesta', url('admin/propuestas/mostrar/'.$this->proposal->id))
                    ->line('Gracias por utilizar nuestra aplicación!');
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
