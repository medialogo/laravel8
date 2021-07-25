<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\NkRenraku;

class NkKakunin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $nk_renraku;

    public function __construct(NkRenraku $renraku)
    {
          $this->nk_renraku = $renraku;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $banknames = ["","横浜銀行","ゆうちょ銀行"];
        return $this->from('kaikei@t-odoriba.com')
                    ->markdown('emails.nk_kakunin', [
                        'kumi' => $this->nk_renraku->kumi,
                        'setai_name' => $this->nk_renraku->setai_name,
                        'bank_to' => $banknames[$this->nk_renraku->bank_to],
                        'furikomi_date' => $this->nk_renraku->furikomi_date,
                        'kingaku' => $this->nk_renraku->kingaku,
                    ]);

    }
}
