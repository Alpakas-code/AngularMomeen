<?php
Session_start(); 
    $server = "localhost";
 $login = "root";
 $pass = "";
 $connexion = new PDO("mysql:host=$server;dbname=naroteamdb",$login,$pass);

 if(isset($_POST['submit']))
 {
    $time = "";
    $message = $_POST['message'];
    $messageStat =$connexion->prepare(" Insert into messages values(NULL,'".$message."','".$_SESSION['id']."',Date ='".$time."');");
    $executeIsOk = $messageStat->execute();
     /*echo '
     <script>
     document.location.href="post.php";
     alert("Posted.");
     </script>
     ';*/
     $msg =$connexion->prepare("select * from admin where id ='".$_SESSION['id']."';");
     $exc = $msg->execute();
     $res = $msg->fetchAll();
                                    foreach($res as $r)
                                    {
                                        $fullName = $r['fullName'];
                                        $email =$r['email'];
                                    }
     
                                 }
                                 // Import PHPMailer classes into the global namespace
                                 // These must be at the top of your script, not inside a function
                                 use PHPMailer\PHPMailer\PHPMailer;
                                 use PHPMailer\PHPMailer\SMTP;
                                 use PHPMailer\PHPMailer\Exception;
                                 
                                 // Load Composer's autoloader
                                 require 'mailer/vendor/autoload.php';
                                 
                                 // Instantiation and passing `true` enables exceptions
                                 $mail = new PHPMailer(true);
                                 
                                 try {
                                     //Server settings
                                     $mail->SMTPDebug = 1;                      // Enable verbose debug output
                                     $mail->isSMTP();                                            // Send using SMTP
                                     $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                                     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                                     $mail->Username   = 'oudengel@gmail.com';                     // SMTP username
                                     $mail->Password   = '24678258Oussema';                               // SMTP password
                                     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                                     $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                                 
                                     //Recipients
                                     $mail->setFrom('oudengel@gmail.com', 'NaroTeam');
                                    $msag =$connexion->prepare("select email from admin");
                                    $excu = $msag->execute();
                                    $resi = $msag->fetchAll();
                                    var_dump($resi);
                                    foreach($resi as $r)
                                    {
                                        $email =$r['email'];
                                     $mail->addAddress($email);    
                                     echo $email;
                                    }
                                     // Add a recipient
                                     // Attachments
                                    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                                     //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                                     $body ='
                                     <!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                                     <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
                                     <head>
                                     <!--[if gte mso 9]>
                                     <xml>
                                       <o:OfficeDocumentSettings>
                                         <o:AllowPNG/>
                                         <o:PixelsPerInch>96</o:PixelsPerInch>
                                       </o:OfficeDocumentSettings>
                                     </xml>
                                     <![endif]-->
                                       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                                       <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                       <meta name="x-apple-disable-message-reformatting">
                                       <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
                                       <title></title>
                                       
                                         <style type="text/css">
                                           table, td { color: #000000; } a { color: #236fa1; text-decoration: underline; }
                                     @media only screen and (min-width: 620px) {
                                       .u-row {
                                         width: 600px !important;
                                       }
                                       .u-row .u-col {
                                         vertical-align: top;
                                       }
                                     
                                       .u-row .u-col-100 {
                                         width: 600px !important;
                                       }
                                     
                                     }
                                     
                                     @media (max-width: 620px) {
                                       .u-row-container {
                                         max-width: 100% !important;
                                         padding-left: 0px !important;
                                         padding-right: 0px !important;
                                       }
                                       .u-row .u-col {
                                         min-width: 320px !important;
                                         max-width: 100% !important;
                                         display: block !important;
                                       }
                                       .u-row {
                                         width: calc(100% - 40px) !important;
                                       }
                                       .u-col {
                                         width: 100% !important;
                                       }
                                       .u-col > div {
                                         margin: 0 auto;
                                       }
                                     }
                                     body {
                                       margin: 0;
                                       padding: 0;
                                     }
                                     
                                     table,
                                     tr,
                                     td {
                                       vertical-align: top;
                                       border-collapse: collapse;
                                     }
                                     
                                     p {
                                       margin: 0;
                                     }
                                     
                                     .ie-container table,
                                     .mso-container table {
                                       table-layout: fixed;
                                     }
                                     
                                     * {
                                       line-height: inherit;
                                     }
                                     
                                     a[x-apple-data-detectors=\'true\'] {
                                       color: inherit !important;
                                       text-decoration: none !important;
                                     }
                                     
                                     </style>
                                       
                                       
                                     
                                     <!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet" type="text/css"><!--<![endif]-->
                                     
                                     </head>
                                     
                                     <body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f9f9f9;color: #000000">
                                       <!--[if IE]><div class="ie-container"><![endif]-->
                                       <!--[if mso]><div class="mso-container"><![endif]-->
                                       <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f9f9f9;width:100%" cellpadding="0" cellspacing="0">
                                       <tbody>
                                       <tr style="vertical-align: top">
                                         <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                         <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #f9f9f9;"><![endif]-->
                                         
                                     
                                     <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                       <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #11959c;">
                                         <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                           <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #11959c;"><![endif]-->
                                           
                                     <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                     <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                       <div style="width: 100% !important;">
                                       <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
                                       
                                     <table style="font-family:\'Montserrat\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                       <tbody>
                                         <tr>
                                           <td style="overflow-wrap:break-word;word-break:break-word;padding:25px 10px;font-family:\'Montserrat\',sans-serif;" align="left">
                                             
                                     <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                       <tr>
                                         <td style="padding-right: 0px;padding-left: 0px;" align="center">
                                           
                                           <img align="center" border="0" src="https://www.naroteam.com//public/images/media/1624631322Logo.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 23%;max-width: 133.4px;" width="133.4"/>
                                           
                                         </td>
                                       </tr>
                                     </table>
                                     
                                           </td>
                                         </tr>
                                       </tbody>
                                     </table>
                                     
                                       <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                                       </div>
                                     </div>
                                     <!--[if (mso)|(IE)]></td><![endif]-->
                                           <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                         </div>
                                       </div>
                                     </div>
                                     
                                     
                                     
                                     <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                       <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #e8eced;">
                                         <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                           <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #e8eced;"><![endif]-->
                                           
                                     <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                     <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                       <div style="width: 100% !important;">
                                       <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
                                       
                                     <table style="font-family:\'Montserrat\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                       <tbody>
                                         <tr>
                                           <td style="overflow-wrap:break-word;word-break:break-word;padding:44px 10px 10px;font-family:\'Montserrat\',sans-serif;" align="left">
                                             
                                     <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                       <tr>
                                         <td style="padding-right: 0px;padding-left: 0px;" align="center">
                                           
                                           <img align="center" border="0" src="https://cdn.templates.unlayer.com/assets/1596348374204-dddd.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 26%;max-width: 150.8px;" width="150.8"/>
                                           
                                         </td>
                                       </tr>
                                     </table>
                                     
                                           </td>
                                         </tr>
                                       </tbody>
                                     </table>
                                     
                                     <table style="font-family:\'Montserrat\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                       <tbody>
                                         <tr>
                                           <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:\'Montserrat\',sans-serif;" align="left">
                                             
                                       <div style="color: #34495e; line-height: 140%; text-align: center; word-wrap: break-word;">
                                         <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 26px; line-height: 36.4px;"><strong><span style="line-height: 36.4px; font-size: 26px;">You have a new notification !</span></strong></span></p>
                                       </div>
                                     
                                           </td>
                                         </tr>
                                       </tbody>
                                     </table>
                                     
                                     <table style="font-family:\'Montserrat\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                       <tbody>
                                         <tr>
                                           <td style="overflow-wrap:break-word;word-break:break-word;padding:10px 33px;font-family:\'Montserrat\',sans-serif;" align="left">
                                             
                                       <div style="color: #686d6d; line-height: 210%; text-align: center; word-wrap: break-word;">
                                         <p style="font-size: 14px; line-height: 210%;"><span style="font-size: 16px; line-height: 33.6px;">Dear User,</span></p>
                                     <p style="font-size: 14px; line-height: 210%;">'.$fullName.' Has put a new comment, we thought you should check it out </p>
                                       </div>
                                     
                                           </td>
                                         </tr>
                                       </tbody>
                                     </table>
                                     
                                     <table style="font-family:\'Montserrat\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                       <tbody>
                                         <tr>
                                           <td style="overflow-wrap:break-word;word-break:break-word;padding:22px 10px 44px;font-family:\'Montserrat\',sans-serif;" align="left">
                                             
                                     <div align="center">
                                       <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;font-family:\'Montserrat\',sans-serif;"><tr><td style="font-family:\'Montserrat\',sans-serif;" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:49px; v-text-anchor:middle; width:160px;" arcsize="8%" stroke="f" fillcolor="#ffb200"><w:anchorlock/><center style="color:#FFFFFF;font-family:\'Montserrat\',sans-serif;"><![endif]-->
                                         <a href="localhost/NaroTeam/index.php" target="_blank" style="box-sizing: border-box;display: inline-block;font-family:\'Montserrat\',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #ffb200; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;">
                                           <span style="display:block;padding:15px 33px;line-height:120%;"><span style="font-size: 16px; line-height: 19.2px;"><strong><span style="line-height: 19.2px; font-size: 16px;">View Post</span></strong></span></span>
                                         </a>
                                       <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
                                     </div>
                                     
                                           </td>
                                         </tr>
                                       </tbody>
                                     </table>
                                     
                                       <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                                       </div>
                                     </div>
                                     <!--[if (mso)|(IE)]></td><![endif]-->
                                           <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                         </div>
                                       </div>
                                     </div>
                                     
                                     
                                     
                                    
                                     
                                     
                                     
                                     
                                     
                                     
                                     <div class="u-row-container" style="padding: 0px 0px 4px;background-color: transparent">
                                       <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                         <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                           <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px 0px 4px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
                                           
                                     <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                     <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                       <div style="width: 100% !important;">
                                       <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
                                       
                                     <table style="font-family:\'Montserrat\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                       <tbody>
                                         <tr>
                                           <td style="overflow-wrap:break-word;word-break:break-word;padding:44px 10px 10px;font-family:\'Montserrat\',sans-serif;" align="left">
                                             
                                     <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                       <tr>
                                         <td style="padding-right: 0px;padding-left: 0px;" align="center">
                                           
                                           
                                           
                                         </td>
                                       </tr>
                                     </table>
                                     
                                           </td>
                                         </tr>
                                       </tbody>
                                     </table>
                                     
                                     <table style="font-family:\'Montserrat\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                       <tbody>
                                         <tr>
                                           <td style="overflow-wrap:break-word;word-break:break-word;padding:0px 33px 10px;font-family:\'Montserrat\',sans-serif;" align="left">
                                             
                                       <div style="color: #455f79; line-height: 150%; text-align: center; word-wrap: break-word;">
                                         <p style="line-height: 150%; font-size: 14px;"><strong><span style="font-size: 14px; line-height: 21px;">contact@naroteam.com</span></strong></p>
                                     <p style="line-height: 150%; font-size: 14px;"><strong><span style="font-size: 14px; line-height: 21px;">2050 Hammam-Lif</span></strong></p>
                                       </div>
                                     
                                           </td>
                                         </tr>
                                       </tbody>
                                     </table>
                                     
                                     <table style="font-family:\'Montserrat\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                       <tbody>
                                         <tr>
                                           <td style="overflow-wrap:break-word;word-break:break-word;padding:22px 44px;font-family:\'Montserrat\',sans-serif;" align="left">
                                             
                                       <div style="color: #a6acb1; line-height: 140%; text-align: center; word-wrap: break-word;">
                                         <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 12px; line-height: 16.8px;">© 2021. All rights reserved by NaroTeam</span></p>
                                     <p style="font-size: 14px; line-height: 140%;">&nbsp;</p>
                                     
                                       </div>
                                     
                                           </td>
                                         </tr>
                                       </tbody>
                                     </table>
                                     
                                     <table style="font-family:\'Montserrat\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                       <tbody>
                                         <tr>
                                           <td style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 40px;font-family:\'Montserrat\',sans-serif;" align="left">
                                             
                                     <div align="center">
                                       <div style="display: table; max-width:185px;">
                                       <!--[if (mso)|(IE)]><table width="185" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:185px;"><tr><![endif]-->
                                       
                                         
                                         <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 30px;" valign="top"><![endif]-->
                                         <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 30px">
                                           <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                             <a href="https://facebook.com/" title="Facebook" target="_blank">
                                               <img src="http://assets.stickpng.com/images/58e91965eb97430e819064f5.png" alt="Facebook" title="Facebook" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                             </a>
                                           </td></tr>
                                         </tbody></table>
                                         <!--[if (mso)|(IE)]></td><![endif]-->
                                         
                                         <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 30px;" valign="top"><![endif]-->
                                         <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 30px">
                                           <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                             <a href="https://twitter.com/" title="Twitter" target="_blank">
                                               <img src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png" alt="Twitter" title="Twitter" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                             </a>
                                           </td></tr>
                                         </tbody></table>
                                         <!--[if (mso)|(IE)]></td><![endif]-->
                                         
                                         <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
                                         <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
                                           <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                             <a href="https://linkedin.com/" title="LinkedIn" target="_blank">
                                               <img src="https://image.flaticon.com/icons/png/512/174/174857.png" alt="LinkedIn" title="LinkedIn" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                             </a>
                                           </td></tr>
                                         </tbody></table>
                                         <!--[if (mso)|(IE)]></td><![endif]-->
                                         
                                         
                                         <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                       </div>
                                     </div>
                                     
                                           </td>
                                         </tr>
                                       </tbody>
                                     </table>
                                     
                                       <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                                       </div>
                                     </div>
                                     <!--[if (mso)|(IE)]></td><![endif]-->
                                           <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                         </div>
                                       </div>
                                     </div>
                                     
                                     
                                         <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                                         </td>
                                       </tr>
                                       </tbody>
                                       </table>
                                       <!--[if mso]></div><![endif]-->
                                       <!--[if IE]></div><![endif]-->
                                     </body>
                                     
                                     </html>
                                     
                                     ';
                                     // Content
                                     $mail->isHTML(true);                                  // Set email format to HTML
                                     $mail->Subject = 'Notifications';
                                     $mail->Body    = $body;
                                     $mail->AltBody = strip_tags($body);
                                 
                                     $mail->send();
                                     /*echo '<script>
                                     document.location.href="post.php";
                                     </script>';
                                     */
                                    echo'<script>
                                    document.location.href="post.php";
                                    </script>';
                                 } catch (Exception $e) {
                                     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                 }
?>