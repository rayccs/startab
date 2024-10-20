<?php
function limpiarAsunto($asunto)
{
    $cadena = "Subject";
    $longitud = strlen($cadena) + 2;
    return substr(
        iconv_mime_encode(
            $cadena,
            $asunto,
            [
                "input-charset" => "UTF-8",
                "output-charset" => "UTF-8",
            ]
        ),
        $longitud
    );
}

$asunto = limpiarAsunto("Tu software, web o app, por suscripción");
$destinatario = "contacto@globalmarket.";

$encabezados = "MIME-Version: 1.0" . "\r\n";

# ojo, es una concatenación:
$encabezados .= "Content-type:text/html; charset=UTF-8" . "\r\n";
$encabezados .= 'From: Start Code<startcode@teamproware.cl>' . "\r\n";

$mensaje = '<div style="font-family:BogleWeb,trebuchet ms,helvetica,sans-serif;font-size:13px;background:#4E2783 linear-gradient(to bottom,#4E2783 100%,#4E2783 100%) no-repeat;background-size:100% 400px;background-position:top;word-spacing:normal">
  
        
        <div style="margin:0px auto;max-width:600px">
            <table>
                <tbody>
                    <tr>
                        <td>
                            
                            <div style="padding-top:20px;padding-bottom:20px">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td style="border-collapse:separate;width:135px" width="135"><img alt="Lider" height="auto" src="https://www.teamproware.cl/assets/img/logoNewV3.png?source=url[file:/Contactabilidad/2021/logo_lider.png]&amp;sink=format[png]" style="margin-left:8px;border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px" width="105" class="CToWUd"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        
        <div style="margin:0px auto;max-width:600px">
            <table>
                <tbody>
                    <tr>
                        <td>
                            
                            <div class="m_-3483857935374907499p-x-5x" style="background-color:#ffffff;border:1px solid;border-radius:10px;padding-top:40px;padding-right:50px;padding-bottom:40px;padding-left:50px;margin:0px auto;max-width:600px;border-color:#dfe1e4">
                                <div class="m_-3483857935374907499mj-column-per-100">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <table width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td style="border-collapse:separate;font-size:0px;padding:0px 0;word-break:break-word">
                                                                    <div style="font-family:BogleWeb,trebuchet ms,helvetica,sans-serif;font-size:13px;line-height:1.6em;text-align:left;color:#1d2129">
                                                                        <h2>Te ayudamos a impulsar tu software, sistema o web en un plan todo en UNO, pagando por suscripción</h2>
                                                                       
                                                                        <p>Olvídate de aplicaciones web enlatadas que impiden que tu negocio pueda crecer, en StartCode cuentas con un equipo completo de desarrollo a tu disposición a través de un único pago fijo mensual y en cuotas de tus productos, obtienes costos bajos en las primeras etapas de tu emprendimiento.
																		</p>
																	
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        

        
        
        <div style="padding-top:10px;margin:0px auto;max-width:600px">
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;width:100%" width="100%">
                <tbody>
                    <tr>
                        <td style="border-collapse:separate;direction:ltr;font-size:0px;padding:0;text-align:center" align="center">
                            
                            
                            
                            <div style="background-color:#ffffff;border:1px solid;border-radius:10px;padding:0;margin:0px auto;max-width:600px;border-color:#dfe1e4">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;width:100%" width="100%">
                                    <tbody>
                                        <tr>
                                            <td style="border-collapse:separate;direction:ltr;font-size:0px;padding:0;text-align:center" align="center">
                                                
                                                <div class="m_-3483857935374907499mj-column-per-100" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="border-collapse:separate">
                                                        <tbody>
                                                            <tr>
                                                                <td style="border-collapse:separate;vertical-align:top;padding:0" valign="top">
                                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate" width="100%">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align="center">

                                                                                        <a href="http://startcode.teamproware.cl/" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://click.mail.lider.cl/?qs%3D41537d2aa6a208d2566f6ddcae999352cbd7f749441d0db52138201c8acc71032ef99ae1240753caa5aa00441da25c416964cab56e948eb3&amp;source=gmail&amp;ust=1657585470864000&amp;usg=AOvVaw04wv4Q_LYL8VoWGYgkedLi">
                                                                                            <img src="https://teamproware.cl/assets/img/largo.png" alt="Mi Club" width="100%" style="border-radius:10px" class="CToWUd">
                                                                                        </a>

                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        
        
        <div style="padding-top:10px;margin:0px auto;max-width:600px">
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;width:100%" width="100%">
                <tbody>
                    <tr>
                        <td style="border-collapse:separate;direction:ltr;font-size:0px;padding:0;text-align:center" align="center">
                            
                            
                            
                            <div class="m_-3483857935374907499p-x-5x" style="background-color:#ffffff;border:1px solid;border-radius:10px;padding-top:10px;padding-bottom:20px;padding-left:50px;padding-right:50px;margin:0px auto;max-width:600px;border-color:#dfe1e4">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;width:100%" width="100%">
                                    <tbody>
                                        <tr>
                                            <td style="border-collapse:separate;direction:ltr;font-size:0px;padding:0;text-align:center" align="center">
                                                
                                                <div class="m_-3483857935374907499mj-column-per-100" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="border-collapse:separate">
                                                        <tbody>
                                                            <tr>
                                                                <td style="border-collapse:separate;vertical-align:top;padding:0" valign="top">
                                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate" width="100%">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align="center" style="border-collapse:separate;padding-top:10px;padding-bottom:10px;font-size:0px;padding:0px 0;word-break:break-word;color:#1d2129;text-align:center">
                                                                                    <div style="padding-top:10px;padding-bottom:10px;font-family:BogleWeb,trebuchet ms,helvetica,sans-serif;font-size:13px;line-height:1.6em;color:#1d2129;text-align:center">
                                                                                        Sí tienes dudas o alguna
                                                                                        consulta, estaremos felices de
                                                                                        poder ayudar.<br>Puedes
                                                                                        contactarnos por WhatsApp o
                                                                                        llamarnos.</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center" style="border-collapse:separate;font-size:0px;padding:0;word-break:break-word">
                                                                                    <table cellpadding="0" cellspacing="0" width="100%" border="0" style="border-collapse:separate;color:#000000;font-family:BogleWeb,trebuchet ms,helvetica,sans-serif;font-size:13px;line-height:1.6em;table-layout:auto;width:100%;border:none">
                                                                                        <tbody><tr>
                                                                                            <td width="50%" style="border-collapse:separate">
                                                                                                <div style="padding-top:5px; margin-left: 35%">
                                                                                                    <img src="https://ci4.googleusercontent.com/proxy/p7K754Bg3C6ylmJ2FGy6ZmARB_lUJhKwhoK3aKc4qzjOzEmN730hiS1Vdtu9wPKed5KWvHJrZk7r0A0tP4j7XB5o_9-PuaDIdDH7lSvzcxbY30jhlLtnuR7Uy18lxFPJvVm57L4gxuoquHWiNaKFzCekfU1iTAYpIhyun7mTDg=s0-d-e1-ft#https://images.lider.cl/wmtcl?source=url[file:/Contactabilidad/2021/rrss/icon-whatsapp.png]&amp;sink=format[png]" alt="WhatsApp" width="28px" style="padding-top:5px;float:left" class="CToWUd">
                                                                                                    <p style="margin:0;padding-left:30px">
                                                                                                        <a href="https://api.whatsapp.com/send?phone=+56992151191&text=Hola,%20quiero%20mas%20informaci%C3%B3n" style="text-decoration:none;color:#0071dc" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://click.mail.lider.cl/?qs%3D41537d2aa6a208d284ce2ef7336aedcf26f48e7b466fb22bab1987a8073147937d7b272237ca56bb031e01b507f5dec70d7646bd1da2aefd&amp;source=gmail&amp;ust=1657585470864000&amp;usg=AOvVaw04-lAwXSWzggHmRdqmMoDq">Háblanos
                                                                                                            al<br><strong>+56992151191</strong></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                            </td>
                                                                                           
                                                                                        </tr>
                                                                                    </tbody></table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="m_-3483857935374907499p-x-5x" style="padding-left:50px;padding-right:50px;margin:0px auto;max-width:600px">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;width:100%" width="100%">
                                    <tbody>
                                        <tr>
                                            <td style="border-collapse:separate;direction:ltr;font-size:0px;padding:0;text-align:center" align="center">
                                                
                                                <div class="m_-3483857935374907499mj-column-per-100" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="border-collapse:separate">
                                                        <tbody>
                                                            <tr>
                                                                <td style="border-collapse:separate;vertical-align:top;padding:0" valign="top">
                                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate" width="100%">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align="center" style="border-collapse:separate;padding-top:20px;padding-bottom:10px;font-size:0px;padding:0px 0;word-break:break-word;color:#1d2129;text-align:center">
                                                                                    <div style="padding-top:20px;padding-bottom:10px;font-family:BogleWeb,trebuchet ms,helvetica,sans-serif;font-size:13px;line-height:1.6em;color:#fff;text-align:center">
                                                                                        Mantente al día de todo lo que
                                                                                        ocurre<br>en nuestras redes
                                                                                        sociales.</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center" style="border-collapse:separate;font-size:0px;padding:0;word-break:break-word">
                                                                                    
                                                                                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;float:none;display:inline-table">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="border-collapse:separate;padding:0;vertical-align:middle" valign="middle">
                                                                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;border-radius:3px;width:24px" width="24">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="border-collapse:separate;font-size:0;height:24px;vertical-align:middle;width:24px" width="24" height="24" valign="middle">
                                                                                                                    <a href="https://www.facebook.com/StartCodeSoftware" style="text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://click.mail.lider.cl/?qs%3D41537d2aa6a208d269cbecea14e732e98b8991707adc53685e3e57d5c710006480d8e8a860ffe3ee4da28a2edbc256474f0c8e23365ff84f&amp;source=gmail&amp;ust=1657585470864000&amp;usg=AOvVaw22okkIbfb225p4Q4jaBggo">
<img height="24" src="https://ci3.googleusercontent.com/proxy/60gROYebmB1E1TDQxOiVR-a2UFNkWFFGApBj5eI9ylyru8Ym26Ya15gBNMYK0QzmuUVopSThSO4aYiVofcxKsQKxK7yAZ96szni2iqSXoRkLO1nA52SJDEiYAa0aKkpu0Gzskwc5Ui2vjO_rrmLxM8iM5ewVZtObc2_YSlmv5g=s0-d-e1-ft#https://images.lider.cl/wmtcl?source=url[file:/Contactabilidad/2021/rrss/icon-facebook.png]&amp;sink=format[png]" style="border-radius:3px;display:block" width="24" class="CToWUd"></a>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    
                                                                                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;float:none;display:inline-table">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="border-collapse:separate;padding:0;vertical-align:middle" valign="middle">
                                                                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;border-radius:3px;width:24px" width="24">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="border-collapse:separate;font-size:0;height:24px;vertical-align:middle;width:24px" width="24" height="24" valign="middle">
                                                                                                                    <a href="https://www.facebook.com/StartCodeSoftware" style="text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://click.mail.lider.cl/?qs%3D41537d2aa6a208d2211ba88d82d9567feb67a6b4b6ff3d369aa88a1a9066b99538187b4b17d7ebfc5cee5a174a8e16ddbc3dc6830440f057&amp;source=gmail&amp;ust=1657585470864000&amp;usg=AOvVaw0lpCtM0a-UfgrXRZSpNI4V">
<img height="24" src="https://ci6.googleusercontent.com/proxy/ZM8QbFFM5F5_ycYFC-VcrTeEK-Jn12qMcHDMMeOulPYH6FtgNP3Wc_KU5uAXCXM4zLNOmlxN-h6jpCgkBzf996FUNE2hCbQIZJ8J0YJgWR02CscFJVmal5h4f61B2sm445RUV7rNNp-hnNCzCYUoLhxuOEVTNqinNSh6jVv6=s0-d-e1-ft#https://images.lider.cl/wmtcl?source=url[file:/Contactabilidad/2021/rrss/icon-twitter.png]&amp;sink=format[png]" style="border-radius:3px;display:block" width="24" class="CToWUd"></a>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    
                                                                                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;float:none;display:inline-table">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="border-collapse:separate;padding:0;vertical-align:middle" valign="middle">
                                                                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;border-radius:3px;width:24px" width="24">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="border-collapse:separate;font-size:0;height:24px;vertical-align:middle;width:24px" width="24" height="24" valign="middle">
                                                                                                                    <a href="https://www.facebook.com/StartCodeSoftware" style="text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://click.mail.lider.cl/?qs%3D41537d2aa6a208d2e3d8d875679420b571b62e414cd3a0a14843029ec6bd6c80493d3313107abd38899d7effce2e52e182b230d00f101b9b&amp;source=gmail&amp;ust=1657585470864000&amp;usg=AOvVaw0NkDAbULwp1WjmA9NSmXC0">
<img height="24" src="https://ci4.googleusercontent.com/proxy/g-kmnjE3N45vW9IP0MHl7Q5x6zdat8nr4_UZ6lOFENuBAOeYDxNa3dp33IkOwnf--G3VrkqYTnuldcvqruGSjidrmbRdfWrVpcNhNPKmv46QvLmV8KM-h1I2ItRrfrb4wJia85MP3NEVHOFyC6nnHjnQVArUcCpetx34Thzqa2A=s0-d-e1-ft#https://images.lider.cl/wmtcl?source=url[file:/Contactabilidad/2021/rrss/icon-instagram.png]&amp;sink=format[png]" style="border-radius:3px;display:block" width="24" class="CToWUd"></a>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    
                                                                                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;float:none;display:inline-table">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="border-collapse:separate;padding:0;vertical-align:middle" valign="middle">
                                                                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;border-radius:3px;width:24px" width="24">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="border-collapse:separate;font-size:0;height:24px;vertical-align:middle;width:24px" width="24" height="24" valign="middle">
                                                                                                                    <a href="https://www.facebook.com/StartCodeSoftware" style="text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://click.mail.lider.cl/?qs%3D41537d2aa6a208d2ace523ab73a03a91cfb05036af78a4d3819d48edf36f4521746a6f57189870ea2d6ea03573f2a7ff990c0f7f80161c5c&amp;source=gmail&amp;ust=1657585470864000&amp;usg=AOvVaw0Ql2clyUolECHXvHNTOiDu">
<img height="24" src="https://ci5.googleusercontent.com/proxy/6Rh4DOE_VHXiaqWi4K8V1WcSksl62TcY_0g7U2ku437VylipaHVP4my3xsesMvYhgSJ_sWpJWZnr3iIa9f6lvU6KKyWMCmjiRzK9Ao1Wmzr4pRTE71yFCHwkUedN7-GVh9qNWfSwG2z1ZoljRVKIcXhwNUIxt5rMN7qIxds5=s0-d-e1-ft#https://images.lider.cl/wmtcl?source=url[file:/Contactabilidad/2021/rrss/icon-youtube.png]&amp;sink=format[png]" style="border-radius:3px;display:block" width="24" class="CToWUd"></a>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    
                                                                                    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;float:none;display:inline-table">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="border-collapse:separate;padding:0;vertical-align:middle" valign="middle">
                                                                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;border-radius:3px;width:24px" width="24">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="border-collapse:separate;font-size:0;height:24px;vertical-align:middle;width:24px" width="24" height="24" valign="middle">
                                                                                                                    <a href="https://www.facebook.com/StartCodeSoftware" style="text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://click.mail.lider.cl/?qs%3D41537d2aa6a208d2ddb1eef392186490235f2566ba6d232837bebfad610dccb1fb26312760526801d95c130535b79f1932c496b5d77450c5&amp;source=gmail&amp;ust=1657585470865000&amp;usg=AOvVaw0-JhIWpnCtgMnFESsDw0fJ">
<img height="24" src="https://ci4.googleusercontent.com/proxy/3jx80TCi43rL01saGc58ynLNDk6DVGssYCAzxcZARM5qrcyoVNAScKQZ2jBUJmDtqakOLivmVv_4mVpUb8_5Rfolk0eweZbAYQVn-HRFA3uli6ygOvncnfUCtc46r-NL0DhFi2dlLIydk0tipJ4E280xFOTsyNM9UxfnboQ=s0-d-e1-ft#https://images.lider.cl/wmtcl?source=url[file:/Contactabilidad/2021/rrss/icon-tiktok.png]&amp;sink=format[png]" style="border-radius:3px;display:block" width="24" class="CToWUd"></a>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="center" style="border-collapse:separate;padding-top:10px;padding-bottom:30px;font-size:0px;padding:0px 0;word-break:break-word;color:#fff;text-align:center">
                                                                                    <div style="padding-top:10px;padding-bottom:30px;font-family:BogleWeb,trebuchet ms,helvetica,sans-serif;font-size:13px;line-height:1.6em;color:#fff;text-align:center">
                                                                                        Recuerda que nunca te pediremos
                                                                                        datos personales<br>ni
                                                                                        financieros por correo
                                                                                        electrónico.</div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    <u></u><div class="yj6qo"></div><div class="adL">
</div></div>';
$mensaje = wordwrap($mensaje, 70, "\r\n");
$resultado = mail($destinatario, $asunto, $mensaje, $encabezados); #Mandar al final los encabezados
if ($resultado) {
    echo "Correo enviado";
} else {
    echo "Correo NO enviado";
}