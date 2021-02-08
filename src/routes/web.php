<?php


Route::middleware(['web'])->group(function () {
    Route::get('/apps/mail', function() {
        return view('mail::inbox')
            ->with('mailbox', [
                "smtp_host" => "0.0.0.0",
                "smtp_port" => "1582",
                "smtp_user" => "test_user",
                "smtp_password" => "test",
                "imap_host" => "0.0.0.0",
                "imap_port" => "1533",
                "imap_user" => "test_user",
                "imap_password" => "test",
            ]);
    })->name("apps.mail");
});