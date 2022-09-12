<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TeacherRegisterNotification extends Notification
{
    use Queueable;
    protected $email;
    protected $password;
    protected $name;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($info)
    {
        //
        $this->name=$info['name'];
        $this->email=$info['email'];
        $this->password=$info['password'];
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
        return (new MailMessage())
        ->subject('Teacher Registration')
        ->greeting("Dear Hello How are You ".$this->name)
        ->line('You have successfully Registerd')
        ->line('Your Login Credentail are')
        ->line('Email:'.$this->email)
        ->line('Password:'.$this->password)
        ->line('Thank you!');
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
