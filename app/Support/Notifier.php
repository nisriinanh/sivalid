<?php

namespace App\Support;

use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

/**
 * Menjalankan pengiriman notifikasi setelah response terkirim ke pengguna,
 * sehingga request tidak ikut menunggu proses SMTP atau FCM.
 */
class Notifier
{
    public static function mail(string $to, Mailable $mailable, string $errorContext = 'Gagal mengirim email'): void
    {
        defer(function () use ($to, $mailable, $errorContext) {
            try {
                Mail::to($to)->send($mailable);
            } catch (\Throwable $e) {
                Log::error($errorContext . ': ' . $e->getMessage());
            }
        });
    }

    public static function fcm(callable $callback): void
    {
        defer($callback);
    }
}
