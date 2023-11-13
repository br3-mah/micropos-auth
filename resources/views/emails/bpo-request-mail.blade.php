
<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>BPO Account Request</title>
    <meta name="description" content="Seller Account Request">
    <style type="text/css">
        a:hover {text-decoration: underline !important;}
    </style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <!--100% body table-->
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="1"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                          <a href="https://ecoagrozm.com" title="logo" target="_blank">
                            <img width="60" src="https://ecoagrozm.com/images/logo.png" title="logo" alt="logo"> 
                          </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:10px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px;background:#ffffff;text-align:center; border-radius:3px; -webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="padding:0 35px;">
                                        <h1 style="color:#2d1e1e; font-weight:800; font-weight:bold; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">You have
                                            new BPO account request
                                        </h1>
                                        <p style="color: #455056">A new request to activate a BPO account has been submitted</p>
                                        <br> 
                                        <br>                                        
                                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                            
                                            <div style="margin-left:10%; display: flex; gap: 15%;text-align:center; align-items: center; justify-content: center;">
                                                
                                                <span>
                                                    <img width="100" src="https://auth.ecoagrozm.com/public/img/bpo.png"> 
                                                    
                                                    <p><b>
                                                        @if($data['sex'] == 'Male')
                                                            Mr. 
                                                        @else
                                                            Mrs. 
                                                        @endif
                                                        {{ $data['name'] }}
                                                    </b></p>

                                                    <p>
                                                        {{ $data['email'] }}   
                                                    </p>
                                                    
                                                    <p>{{ $data['phoneNumber'] }}</p>
                                                </span>
                                                <span style="margin-left:10%">
                                                    <img width="50" src="https://auth.ecoagrozm.com/public/img/swap.png"> 
                                                </span>
                                                <span style="margin-left:10%">
                                                    <img width="100" src="https://auth.ecoagrozm.com/public/img/sound.png">
                                                    <p><b>{{ $data['bpo'][0]['c_name'] }}</b></p>
                                                    <p>{{ $data['bpo'][0]['c_email'] }}</p>
                                                    <p>{{ $data['bpo'][0]['c_phone'] }}</p>
                                                    <p>{{ $data['bpo'][0]['c_address'] }}</p>
                                                </span>
                                            </div>
                                            <br><br>
                                            <br>                                     
                                        </p>
                                        <a href="javascript:void(0);"
                                            style="background:rgb(63, 36, 31);text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:20px 24px;display:inline-block;border-radius:10px;">
                                            View Seller Profile
                                            &nbsp;
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>www.ecoagrozm.com</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>