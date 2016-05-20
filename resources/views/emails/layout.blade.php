<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- If you delete this meta tag, Half Life 3 will never be released. -->
    <meta name="viewport" content="width=device-width" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>@yield('subject')</title>

    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/email.css') }}" />

</head>

<body bgcolor="#FFFFFF">

<!-- HEADER -->
<table class="head-wrap" bgcolor="#f4f4f4">
    <tr>
        <td></td>
        <td class="header container" >

            <div class="content">
                <table bgcolor="#f4f4f4">
                    <tr>
                        <td width="55">
                            <img src="{{ url('/build/images/logo50x50.png') }}" id="lgo" style="width: 50px; height:50px; float:left; ">

                        </td>
                        <td valign="baseline" style="vertical-align: baseline">
                            <h3 style=" padding-bottom:0px !important; margin-bottom: 0  !important;" class="navbar-brand"><a href="https://robbiepaul.co" style="float:left;vertical-align: baseline;">Robbie Paul</a></h3>

                        </td>

                    </tr>
                </table>
            </div>

        </td>
        <td></td>
    </tr>
</table><!-- /HEADER -->


<!-- BODY -->
<div style="text-align: center">
<table class="" style="width: 600px!important; margin: 0 auto!important;" width="600">
    <tr>
        <td></td>
        <td class="container" bgcolor="#FFFFFF">

            <div class="content">
                <table>
                    <tr>
                        <td align="left"><h6 class="collapse" style="margin-bottom:20px !important">@yield('subject')</h6></td>
                    </tr>
                    <tr>
                        <td style='font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;'>
                            @yield('content')
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->

        </td>
        <td></td>
    </tr>
</table><!-- /BODY -->
</div>


</body>
</html>