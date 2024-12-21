@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === '{{ $appSetting->favicon }}')
<img src="{{ asset($appSetting->favicon) }}" class="logo" alt="{{ $appSetting->favicon }} Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
