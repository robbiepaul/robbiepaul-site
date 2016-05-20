@extends('emails.layout')

@section('subject')
    {{ $subject }}
@endsection

@section('content')
    <p>The following person contacted you from: {{ url('/') }}</p>
    <table>
        <tr style='font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;'>
        <td witdh="150" style="font-weight: bold" valign="top">Name</td>
        <td>{{ $name }}</td>
        </tr>
        <tr style='font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;'>
        <td style="font-weight: bold" valign="top">Email</td>
        <td>{{ $email }}</td>
        </tr>
        <tr style='font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;'>
        <td style="font-weight: bold" valign="top">Phone</td>
        <td>{{ $phone }}</td>
        </tr>
        <tr style='font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;'>
        <td style="font-weight: bold" valign="top">Message</td>
        <td>{!!  nl2br(strip_tags($msg)) !!}</td>
        </tr>
        <tr style='font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;'>
        <td style="font-weight: bold" valign="top">IP address</td>
        <td>{{ $ip }}</td>
        </tr>
    </table>
@endsection