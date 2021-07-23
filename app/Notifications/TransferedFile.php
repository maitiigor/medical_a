<?php

namespace App\Notifications;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class TransferedFile extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $diagnosis;
    public $treatment_plan;
    public $complaint;
    public $respiratory_rate;
    public $bmi;
    public $temperature;
    public $weight;
    public $height;
    public $blood_pressure;
    public $visit_type;
    public $patience_name;
    public $patience_id;



    public function __construct($message,$patience)
    {
        //
        $this->diagnosis = $message->diagnosis;
        $this->treatment_plan = $message->treatment_plan;
        $this->complaint = $message->complaint;
        $this->respiratory_rate = $message->respiratory_rate;
        $this->bmi = $message->bmi;
        $this->temperature = $message->temperature;
        $this->weight = $message->weight;
        $this->height = $message->height;
        $this->blood_pressure = $message->blood_pressure;
        $this->visit_type = $message->visit_type;
        $this->patience_name = $patience->name.' '. $patience->surname;
        $this->patience_id = $patience->id;


    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable){
        return [
            //
            'sender' => 'Dr '.Auth::guard('health_worker')->user()->name,
            'diagnosis' => $this->diagnosis,
            'temperature' => $this->temperature,
            'visit_type' => $this->visit_type,
            'treatment_plan' => $this->treatment_plan,
            'weight' => $this->weight,
            'height' => $this->height,
            'bmi' => $this->bmi,
            'complaint' => $this->complaint,
            'respiratory_rate' => $this->respiratory_rate,
            'blood_pressure' => $this->blood_pressure,
            'patience_name' => $this->patience_name,
            'patience_id' => $this->patience_id,




        ];
     }

    public function toArray($notifiable)
    {
        return [
            //


        ];
    }
}
