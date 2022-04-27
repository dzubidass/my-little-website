<?php

class Emailer {

    private $sender;
    private $recipients;
    private $subject;
    private $message;

    function __construct($sender) {
        $this->sender = $sender;
        $this->recipients = [];
    }

    function addRecipient($recipient) {
        array_push($this->recipients, $recipient);
    }

    function setSubject($subject) {
        $this->subject = $subject;
    }

    function setMessage($message) {
        $this->message = $message;
    }

    function sendMail() {
        foreach ($this->recipients as $recipient) {
            $result = mail($recipient, $this->subject, $this->message, 'From: ' . $this->sender);
            if ($result) {
                echo 'Mail succesfully sent to ' . $recipient;
            }
        }
    }

}
