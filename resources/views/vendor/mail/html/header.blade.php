<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'HelpDesk')
<img src="https://lostramites.com.co/wp-content/uploads/logo-de-SENA-png-Negro-300x300.png" class="logo" alt="Laravel Logo">
<h3 style="text-align: center; color:black;">SERVICIO NACIONAL DE APRENDIZAJE - SENA</h3>

@else
{{ $slot }}
@endif
</a>
</td>
</tr>
