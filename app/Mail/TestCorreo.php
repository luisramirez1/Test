<?php

namespace App\Mail;

use Auth;
use App\User;
use App\Usuarios;
use DB;
use App\Areas;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;


class TestCorreo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public $user;

    public function __construct(User $user)
    {
        return $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $idU = Auth::user()->id;
        $idP = Auth::user()->npregunta + 1;
        $areas=DB::table('areas AS a')
            ->join('areas_usuarios AS au', 'a.id', '=', 'au.id')
            ->where('au.id_usuario', '=', $idU)
            ->where('au.npregunta', '=', $idP)
            ->orderBy('au.calificacion', 'desc')
            ->limit(3)
            ->get();
        return $this->view('emails.test', compact('areas'));
    }
}
