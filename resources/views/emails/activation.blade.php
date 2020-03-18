@component('mail::message')
# Selamat Datang di {{ config('app.name') }}

Silakan aktifasi akun Anda.

@component('mail::button', ['url' => ''])
Aktifasi
@endcomponent

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent
