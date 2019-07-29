@component('mail::message')
 Thanks you for your message:
    <strong>Name:</strong> {{$data['name']}}
    <strong>email:</strong> {{$data['email']}}

    <strong>Message:</strong> {{$data['message']}}
@endcomponent
Cont