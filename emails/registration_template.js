module.exports.getRegistrationEmailTemplate = (data) => {
    const { userName = "Valued Customer", shopUrl = "#", unsubscribeUrl = "#", privacyUrl = "#" } = data;

    return `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Store</title>
    <style>
        body { margin: 0; padding: 0; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f4f4; color: #333333; }
        .container { max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        .header { background-color: #4CAF50; padding: 30px 20px; text-align: center; color: #ffffff; }
        .header h1 { margin: 0; font-size: 24px; font-weight: 600; }
        .content { padding: 30px; line-height: 1.6; }
        .content h2 { font-size: 20px; color: #222222; margin-top: 0; }
        .button-container { text-align: center; margin: 30px 0; }
        .button { background-color: #4CAF50; color: #ffffff; text-decoration: none; padding: 12px 25px; border-radius: 4px; font-weight: bold; display: inline-block; }
        .button:hover { background-color: #45a049; }
        .footer { background-color: #f9f9f9; padding: 20px; text-align: center; font-size: 12px; color: #777777; border-top: 1px solid #eeeeee; }
        .footer a { color: #4CAF50; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Welcome to Our Store!</h1>
        </div>

        <!-- Body Content -->
        <div class="content">
            <h2>Hi ${userName},</h2>
            <p>Thank you for signing up! We're thrilled to have you join our community.</p>
            <p>At our store, you'll find the best products at the best prices. To get started, explore our latest collections and find exactly what you're looking for.</p>
            
            <div class="button-container">
                <a href="${shopUrl}" class="button">Start Shopping</a>
            </div>

            <p>If you have any questions, feel free to reply to this email. Our support team is always here to help.</p>
            <p>Best regards,<br>The Team</p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; ${new Date().getFullYear()} Our E-commerce Store. All rights reserved.</p>
            <p>
                <a href="${unsubscribeUrl}">Unsubscribe</a> | 
                <a href="${privacyUrl}">Privacy Policy</a>
            </p>
        </div>
    </div>
</body>
</html>
    `;
};
