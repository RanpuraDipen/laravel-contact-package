@component('mail::message')
# Introduction

There is new query from {{ $name }}.
<br><br>
Message :
{{ $message }}

{{--@component('mail::button', ['url' => 'javascript:void(0)'])--}}
{{--Take Action--}}
{{--@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
