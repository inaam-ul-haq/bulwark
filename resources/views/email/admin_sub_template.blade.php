<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Notificaiton</title>

    <style>
        *{
            margin: 0 auto;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container" style="width:70%; background-color: white; border: 1px solid black;">
        <div class="head" style="background-color: #F05A22; padding: 10px; text-align: center; color: black; font-size: 22px;">
            <h2>Cyber Bulwark</h2>
        </div>
        <div class="body" style="margin-top: 20px;">
            <h2 style="text-align: center;"><b>New Subscription</b></h2>
            <table border="1" cellpadding="8" style="width: 90%; margin-top: 20px; border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <th>Customer Name</th>
                    <td>{{$name}}</td>
                </tr>
                <tr>
                    <th>e-Mail</th>
                    <td>{{$email}}</td>
                </tr>
                <tr>
                    <th>Contact</th>
                    <td>{{$contact}}</td>
                </tr>
                <tr>
                    <th>Website</th>
                    <td>{{$website}}</td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td>{{$amount}}</td>
                </tr>
                <tr>
                    <th>Subscription Date</th>
                    <td>{{$subscription_date}}</td>
                </tr>
                <tr>
                    <th>Payment Status</th>
                    <td>{{$payment}}</td>
                </tr>
                <tr>
                    <th>Website Data</th>
                    <td>{{$website_data}}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>