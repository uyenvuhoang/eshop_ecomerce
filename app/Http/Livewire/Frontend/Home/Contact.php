<?php

namespace App\Http\Livewire\Frontend\Home;

use App\Mail\MailSupport;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public  $name, $subjectInput, $email, $phone, $message;

    public function rules(){
        return [
            'name' =>'required|string|max:121',
            'subjectInput' =>'required|string|max:121',
            'email' =>'required|email|max:121',
            'phone' =>'required|string|max:11|min:10',
            'message' =>'required|string|max:500',
        ];
    }   

    public function processMail(){
        $this->validate();
        $data = [
            'name'=>$this->name, 
            'subjectInput'=>$this->subjectInput, 
            'email'=>$this->email,
            'phone'=>$this->phone,
            'message'=>$this->message
        ];
        try {
            Mail::to("phamhoangminh2002@gmail.com")->send(new MailSupport($data));
            session()->flash('message', 'Send Mail Successfully');
        } catch (\Exception $e) {
            session()->flash('message', $e);
        }

    }

    public function render()
    {
        return view('livewire.frontend.home.contact');
    }
}
