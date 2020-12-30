<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\AdminProposal;
use App\ProposalComments;

class ProposalCloseNotification extends Notification
{
    use Queueable;

    /**
     * @var string
     */
    protected $proposals;
    protected $proposalcomments;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(AdminProposal $proposals, ProposalComments $proposalcomments)
    {
        $this->proposal = $proposals;
        $this->proposalcomments = $proposalcomments;
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
        $greeting   = sprintf('Cierre de propuesta!');

        //return (new MailMessage)->view('emails.proposalupdate', ['proposal' => $this->proposal->prefix]);

        return (new MailMessage)
                    ->greeting($greeting)
                    ->subject('Cierre de propuesta Iniciativa Participativa Anti Corrupción - IPAC')
                    ->line('Hemos finalizado la evaluación de la propuesta No. '.$this->proposal->prefix.$this->proposal->id.date('dmY', strtotime($this->proposal->created_at)).', '.'Registro No. '.$this->proposal->order.'.')
                    ->line('El estado actual es: Finalizada')
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
