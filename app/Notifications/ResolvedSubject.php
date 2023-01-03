<?php

namespace App\Notifications;

use App\Models\Subject;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResolvedSubject extends Notification
{
    use Queueable;
    public Subject $subject;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
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
        return (new MailMessage)
            ->subject('Votre sujet est résolu !')
            ->line('Il semblerait que votre sujet « ' .$this->subject->subject.' » aie été résolu')
            ->action('Je veux aller voir mon sujet', url('/'.app()->getLocale().'/forum/show/'.$this->subject->slug))
            ->line('Bien à vous,');
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
