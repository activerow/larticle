<h3>You received a message!</h3>
<strong>From:</strong> {{ $name }} &lt;{{ $email }}&gt;</p>

<p><strong>Message:</strong><br>
{{ $user_message }}</p>

<hr>
<p>Thanks,<br>
{{ config('app.name') }}</p>
