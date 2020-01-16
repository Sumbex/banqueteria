@component('mail::message')
<p><b>Contacto:</b> {{$data['contacto']}}</p>
<p><b>Correo Contacto:</b> {{$data['correo']}}</p>
<p><b>N° Telefono:</b> {{$data['telefono']}}</p>

<p style="text-align:center"><b>Mensaje</b></p>
<p>{{$data['mensaje']}}</p>
@endcomponent
