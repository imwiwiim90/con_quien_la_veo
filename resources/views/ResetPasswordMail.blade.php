
<h1 style="font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-weight: 400;
line-height: 1.1;
color: inherit;">¡Hola!</h1>
<h3 style="font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-weight: 400;
line-height: 1.1;
color: inherit;">Estás recibiendo este mensaje porque recibimos una solicitud de restablecimiento de tu constraseña.</h3>
<h3 style="font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-weight: 400;
line-height: 1.1;
color: inherit;">Sigue el siguiente enlace para recuperar tu contraseña.</h3>
@component('mail::button', ['url' => 'http://conquienlaveo.000webhostapp.com//password/reset/'.$token , 'color' => 'blue'])
Recuperar Contraseña
@endcomponent
<h3 style="font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-weight: 400;
line-height: 1.1;
color: inherit;">Si no solicitaste un restablecimiento, puedes hacer caso omiso a este mensaje.</h3><br><br>
<h3 style="font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-weight: 400;
line-height: 1.1;
color: inherit;">Atentamente, ¿Con Quién La Veo?.</h3>
