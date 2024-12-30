{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}

<h2>
    {{ $job->title }}
</h2>

<p>
    congratulations!
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View your job listings </a>
</p>