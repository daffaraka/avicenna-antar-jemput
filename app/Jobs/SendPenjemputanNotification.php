<?php

namespace App\Jobs;

use App\Models\Siswa;
use App\Events\TestNotification;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
// use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Bus\Queueable;

class SendPenjemputanNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable , SerializesModels;


    public $siswa;

    public function __construct(Siswa $siswa)
    {
        $this->siswa = $siswa;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        event(new TestNotification([
            'notifikasi' => 'Penjemput atas nama ' . $this->siswa->nama_siswa . ' Sudah Datang',
            'kelas' => $this->siswa->kelas
        ]));
    }
}
