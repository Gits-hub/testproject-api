@component('mail::message')
  Click the link below to complete your Log in request. It expires in 20 mins
  @component('mail::button', ['url' => $url])
    Login
  @endcomponent
@endcomponent