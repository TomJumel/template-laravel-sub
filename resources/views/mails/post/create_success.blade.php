<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SOS-assos</title>
    <style type="text/css">
        /* ----- Custom Font Import ----- */
        @import url(https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&subset=latin,latin-ext);

        /* ----- Text Styles ----- */
        table {
            font-family: 'Lato', Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            font-smoothing: antialiased;
        }

        @media only screen and (max-width: 700px) {
            /* ----- Base styles ----- */
            .full-width-container {
                padding: 0 !important;
            }

            .container {
                width: 100% !important;
            }

            /* ----- Header ----- */
            .header td {
                padding: 30px 15px 30px 15px !important;
            }

            /* ----- Projects list ----- */
            .projects-list {
                display: block !important;
            }

            .projects-list tr {
                display: block !important;
            }

            .projects-list td {
                display: block !important;
            }

            .projects-list tbody {
                display: block !important;
            }

            .projects-list img {
                margin: 0 auto 25px auto;
            }

            .half-block tr {
                display: block !important;
            }

            .half-block td {
                display: block !important;
            }

            /* ----- Hero subheader ----- */
            .hero-subheader__title {
                padding: 80px 15px 15px 15px !important;
                font-size: 35px !important;
            }

            .hero-subheader__content {
                padding: 0 15px 90px 15px !important;
            }

            .info-bullets tr {
                display: block !important;
            }

            .info-bullets td {
                display: block !important;
            }

            .info-bullets tbody {
                display: block;
            }

            /* ----- CTA block ----- */
            .cta-block__title {
                padding: 35px 15px 0 15px !important;
            }

            .cta-block__content {
                padding: 20px 15px 27px 15px !important;
            }

            .cta-block__button {
                padding: 0 15px 0 15px !important;
            }
        }
    </style>

    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml><![endif]-->
</head>

<body style="padding: 0; margin: 0;" bgcolor="#eeeeee">
<span
    style="color:transparent !important; overflow:hidden !important; display:none !important; line-height:0px !important; height:0 !important; opacity:0 !important; visibility:hidden !important; width:0 !important; mso-hide:all;">Hey ! C'est validé !</span>

<!-- / Full width container -->
<table class="full-width-container" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%"
       bgcolor="#eeeeee" style="width: 100%; height: 100%; padding: 30px 0 30px 0;">
    <tr>
        <td align="center" valign="top">
            <!-- / 700px container -->
            <table class="container" border="0" cellpadding="0" cellspacing="0" width="700" bgcolor="#ffffff"
                   style="width: 700px;">
                <tr>
                    <td align="center" valign="top">
                        <!-- / Header -->
                        <table class="container header" border="0" cellpadding="0" cellspacing="0" width="620"
                               style="width: 620px;">
                            <tr>
                                <td style="padding: 30px 0 30px 0; border-bottom: solid 1px #eeeeee;" align="left">
                                    <a href="#"
                                       style="font-size: 30px; text-decoration: none; color: #000000;">SOS-asso</a>
                                </td>
                            </tr>
                        </table>
                        <!-- /// Header -->

                        <!-- / Hero subheader -->
                        <table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620"
                               style="width: 620px;">
                            <tr>
                                <td class="hero-subheader__title"
                                    style="font-size: 43px; font-weight: bold; padding: 80px 0 15px 0;"
                                    align="left">🎉 L'annonce est en ligne !
                                </td>
                            </tr>

                            <tr>
                                <td class="hero-subheader__content"
                                    style="font-size: 16px; line-height: 27px; color: #969696; padding: 0 60px 90px 0;"
                                    align="left">
                                    Bonjour, <br>
                                    L'annonce pour le post pour <strong>{{ $post->role->name }}</strong> est en ligne ! <br>
                                    Vous pouvez la consulter <a href="{{ env('APP_URL').'/post/'.$post->id }}">ici</a>.<br>
                                    <br>
                                    Bisous, <br>
                                    Ton BDE
                                </td>
                            </tr>
                        </table>
                        <!-- /// Hero subheader -->

                        <!-- / CTA Block -->
                        <table class="container cta-block" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td align="center" valign="top">
                                    <table class="container" border="0" cellpadding="0" cellspacing="0" width="620"
                                           style="width: 620px;">
                                        <tr>
                                            <td class="cta-block__title"
                                                style="padding: 35px 0 0 0; font-size: 26px; text-align: center;">
                                                Supprimer mon annonce ?
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="cta-block__content"
                                                style="padding: 20px 0 27px 0; font-size: 16px; line-height: 27px; color: #969696; text-align: center;">
                                                Une erreur s'est glissée dans ton annonce ? Tu as trouvé quelqu'un ?</br>
                                                Tu peux supprimer ton annonce entrant le <strong>code
                                                    ci-dessous</strong> dans le <a href="https://assos.utc.fr/bde/sosassos/post/delete">formulaire de suppression d'annonce</a>.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <table class="container" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td class="cta-block__button" width="230" align="center"
                                                            style="width: 200px;">
                                                            <a
                                                                style="border: 3px solid #eeeeee; color: #464646; text-decoration: none; padding: 15px 45px; text-transform: uppercase; display: block; text-align: center; font-size: 16px;">{{$pin}}</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <!-- /// CTA Block -->

                        <!-- / Footer -->
                        <table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" align="center"
                               style="margin-top: 15px">
                            <tr>
                                <td align="center">
                                    <table class="container" border="0" cellpadding="0" cellspacing="0" width="620"
                                           align="center" style="border-top: 1px solid #eeeeee; width: 620px;">
                                        <tr>
                                            <td style="text-align: center; padding: 50px 0 10px 0;">
                                                <a href="#"
                                                   style="font-size: 28px; text-decoration: none; color: #d5d5d5;">SOS-Asso</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color: #d5d5d5; text-align: center; font-size: 15px; padding: 10px 0 60px 0; line-height: 22px;">
                                                <p> Fait par des étudiants pour les étudiants</p>
                                                <p> ©BDE-UTC</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <!-- /// Footer -->
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
