<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnquiryEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(private $data)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'JustStart | Enquiry Email',
            cc: [],
            bcc: []
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $data = $this->data;
        $name = '';
        $email = '';
        $phone = '';
        $msg = '';
        $referrer = '';
        $created_at = '';
        $regardName = env('APP_NAME');

        $utm_source = '';
        $utm_medium = '';
        $utm_campaign = '';
        $utm_content = '';
        $utm_term = '';
        $gad_source = '';
        $gclid = '';

        if( is_array($data) && !empty($data) ){
            if( array_key_exists('first_name', $data) ){
                $name = $data['first_name'];
            }
            if( array_key_exists('email', $data) ){
                $email = $data['email'];
            }
            if( array_key_exists('phone', $data) ){
                $phone = $data['phone'];
            }
            if( array_key_exists('message', $data) ){
                $msg = $data['message'];
            }
            if( array_key_exists('referrer', $data) ){
                $referrer = $data['referrer'];

                $parsed_url = parse_url($referrer);

                if( is_array($parsed_url) && !empty($parsed_url) && array_key_exists('query', $parsed_url)  ){

                    parse_str($parsed_url['query'], $query_params);

                    if( is_array($query_params) && !empty($query_params) ){
                        if( array_key_exists('utm_source', $query_params) ){
                            $utm_source = $query_params['utm_source'];
                        }
                        if( array_key_exists('utm_medium', $query_params) ){
                            $utm_medium = $query_params['utm_medium'];
                        }
                        if( array_key_exists('utm_campaign', $query_params) ){
                            $utm_campaign = $query_params['utm_campaign'];
                        }
                        if( array_key_exists('utm_content', $query_params) ){
                            $utm_content = $query_params['utm_content'];
                        }
                        if( array_key_exists('utm_term', $query_params) ){
                            $utm_term = $query_params['utm_term'];
                        }
                        if( array_key_exists('gad_source', $query_params) ){
                            $gad_source = $query_params['gad_source'];
                        }
                        if( array_key_exists('gclid', $query_params) ){
                            $gclid = $query_params['gclid'];
                        }
                    }   // endif
                }
            }
            if( array_key_exists('created_at', $data) ){
                $created_at = $data['created_at'];
            }
        }

        return new Content(
            view: 'emails.enquiry',
            with: [
                'name'=> $name, 'email'=> $email, 
                'phone'=> $phone, 'created_at'=> $created_at, 
                'msg'=> $msg, 
                'utm_source'=> $utm_source, 'utm_medium'=> $utm_medium, 
                'utm_campaign'=> $utm_campaign, 'utm_content'=> $utm_content, 
                'utm_term'=> $utm_term, 'gad_source'=> $gad_source, 
                'gclid'=> $gclid,
                'referrer'=> $referrer, 'regardName'=> $regardName
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        // return [
        //     Attachment::fromPath($this->attachedFile),
        // ];
        return [];
    }
}
