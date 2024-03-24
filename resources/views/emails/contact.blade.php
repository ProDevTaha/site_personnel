<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; margin: 0;">

    <table style="max-width: 600px; margin: auto; background-color: #fff; border-radius: 8px; overflow: hidden;">
        <tr>
            <td style="padding: 20px; background-color: #464AC8; text-align: center; color: #fff;">
                <h5>New Contact</h5>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px; background-color: rgb(211, 235, 255);">
                <div>
                    <label for="name" style="font-weight: bold;">Name:</label>
                    <p style="margin: 0;">{{$fullname}}</p>
                </div>
                <div style="margin-top: 10px;">
                    <label for="email" style="font-weight: bold;">Email:</label>
                    <p style="margin: 0;">{{$email}}</p>
                </div>
                <div style="margin-top: 10px;">
                    <label for="message" style="font-weight: bold;">Phone:</label>
                    <p style="margin: 0;">{{$phone}}</p>
                </div>
                <div style="margin-top: 10px;">
                    <label for="message" style="font-weight: bold;">Message:</label>
                    <p style="margin: 0;">{{$message}}</p>
                </div>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px; text-align: center; background-color: #464AC8; color: #fff;">
                <p style="margin: 0;">This email was sent by Portfolio Taha Dourhmi</p>
            </td>
        </tr>
    </table>

</body>
</html>
