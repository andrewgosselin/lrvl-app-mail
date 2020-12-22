<?php

namespace Lrvl\MailApp\Models;

use Webklex\IMAP\Client;

class Mailbox
{
    public $user_id;
    function __construct($user_id) {
        $this->user_id = $user_id;
    }

    public function getClient() {
        $mailbox = \Auth::user()->mailbox;
        $client = new Client($mailbox);
        $client->connect();
        return $client;
    }

    public function getInbox() {
        $client = $this->getClient();
        dd($client);
    }
}
