<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Enquiry</title>

      <style>
        /* Fallback font families */
        body, p, td {
            font-family: 'Poppins', Arial, sans-serif;
        }
    </style>
   </head>
<body style="font-family: poppins;padding:0;margin:0;">

<!---design-->
<div style="max-width:1000px;margin:0 auto;">
   <table style="width:100%;border-collapse: collapse;border:none;table-layout: fixed;">
      
      <tr>
         <td style="width:100%;font-size:14px;" colspan=2>
            
            <p style="margin-bottom: 40px;margin-top: 40px;">Hello</p>
            
            <p style="margin-bottom: 10px;">We are pleased to inform you that we have received a new enquiry. Please find below the details of the enquiry:</p>

            <p style="margin-bottom: 10px;"><b>Name: </b>{{ $name }}</p>
            <p style="margin-bottom: 10px;"><b>Email: </b>{{ $email }}</p>
            <p style="margin-bottom: 10px;"><b>Phone: </b>{{ $phone }}</p>
            <p style="margin-bottom: 10px;"><b>Date: </b>{{ $created_at }}</p>
            <p style="margin-bottom: 20px;"><b>Message: </b>{!! $msg !!}</p>

            <p style="margin-bottom: 10px;"><b>UTM Source: </b>{!! $utm_source !!}</p>
            <p style="margin-bottom: 10px;"><b>UTM Medium: </b>{!! $utm_medium !!}</p>
            <p style="margin-bottom: 10px;"><b>UTM Campaign: </b>{!! $utm_campaign !!}</p>
            <p style="margin-bottom: 10px;"><b>UTM Content: </b>{!! $utm_content !!}</p>
            <p style="margin-bottom: 10px;"><b>UTM Term: </b>{!! $utm_term !!}</p>
            <p style="margin-bottom: 10px;"><b>GAD Source: </b>{!! $gad_source !!}</p>
            <p style="margin-bottom: 20px;"><b>GCLID: </b>{!! $gclid !!}</p>

            <p style="margin-bottom: 10px;"><b>Referrer: </b>{!! $referrer !!}</p>
         </td>
      </tr>
   
      <tr>
         <td colspan=2  style="font-size:14px;">
            <div>Regards </div> 
            <div style="color: #222;">{{ $regardName }}</div>
         </td>
      </tr>
   
   </table>
</div>

</body>
</html>