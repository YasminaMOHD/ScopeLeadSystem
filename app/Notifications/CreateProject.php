<?php

namespace App\Notifications;

use App\Models\Projects;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CreateProject extends Notification
{
    use Queueable;
    Protected $project;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Projects $project)
    {
        $this->project = $project;
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
        ->subject(__('New Project Created'))
        ->greeting(__('Hello :name',['name'=>$notifiable->name]))
        ->from('scopeleadsystem@gmail.com','Scope Lead Sysytem')
        ->line(__(":name has Deleted an Project :project",['name'=>Auth::user()->name,'project'=>$this->project->name]))
        ->action('Show Lead', route('admin.project.index'))
        ;
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
