<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmployeeRegisteredNotification extends Notification
{
    use Queueable;

    protected $resetUrl;

    /**
     * Create a new notification instance.
     */
    public function __construct($resetUrl)
    {
        $this->resetUrl = $resetUrl;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */

    public function toMail(object $notifiable): MailMessage
    {

        return (new MailMessage)
            ->subject('Cadastro efetuado com sucesso')
            ->line('Você foi cadastrado com sucesso na nossa plataforma.')
            ->line('Clique no link abaixo para definir uma nova senha:')
            ->action('Redefinir Senha', $this->resetUrl)
            ->line('Se você não solicitou essa alteração, nenhuma ação adicional é necessária.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
