module.exports.getOrderConfirmationTemplate = (data) => {
    const {
        userName = "Valued Customer",
        orderNumber = "000000",
        orderDate = new Date().toLocaleDateString(),
        orderTotal = "0.00",
        orderItems = [],
        trackOrderUrl = "#",
        supportUrl = "#"
    } = data;

    const itemsHtml = orderItems.map(item => `
        <tr>
            <td style="padding: 10px; border-bottom: 1px solid #eeeeee;">${item.name} <br><small style="color: #777;">Qty: ${item.quantity}</small></td>
            <td style="padding: 10px; border-bottom: 1px solid #eeeeee; text-align: right;">$${item.price}</td>
        </tr>
    `).join('');

    return `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body { margin: 0; padding: 0; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f4f4; color: #333333; }
        .container { max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        .header { background-color: #2196F3; padding: 30px 20px; text-align: center; color: #ffffff; }
        .header h1 { margin: 0; font-size: 24px; font-weight: 600; }
        .content { padding: 30px; line-height: 1.6; }
        .content h2 { font-size: 20px; color: #222222; margin-top: 0; }
        .order-details { width: 100%; border-collapse: collapse; margin-top: 20px; margin-bottom: 20px; }
        .order-details th { background-color: #f9f9f9; padding: 10px; text-align: left; font-size: 14px; border-bottom: 2px solid #eeeeee; }
        .total-row td { font-weight: bold; padding: 15px 10px; border-top: 2px solid #eeeeee; }
        .button-container { text-align: center; margin: 30px 0; }
        .button { background-color: #2196F3; color: #ffffff; text-decoration: none; padding: 12px 25px; border-radius: 4px; font-weight: bold; display: inline-block; }
        .button:hover { background-color: #1976D2; }
        .footer { background-color: #f9f9f9; padding: 20px; text-align: center; font-size: 12px; color: #777777; border-top: 1px solid #eeeeee; }
        .footer a { color: #2196F3; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Thank You For Your Order!</h1>
        </div>

        <!-- Body Content -->
        <div class="content">
            <h2>Hi ${userName},</h2>
            <p>We've received your order <strong>#${orderNumber}</strong> and we're getting it ready for you.</p>
            
            <table class="order-details">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th style="text-align: right;">Price</th>
                    </tr>
                </thead>
                <tbody>
                    ${itemsHtml || '<tr><td colspan="2" style="padding: 10px; text-align: center;">No items found</td></tr>'}
                    <tr class="total-row">
                        <td align="right">Total:</td>
                        <td align="right">$${orderTotal}</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="button-container">
                <a href="${trackOrderUrl}" class="button">Track Your Order</a>
            </div>

            <p>If you have any questions or need to make changes to your order, please <a href="${supportUrl}">contact our support team</a> immediately.</p>
            <p>Best regards,<br>The Team</p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; ${new Date().getFullYear()} Our E-commerce Store. All rights reserved.</p>
            <p>Date of Order: ${orderDate}</p>
        </div>
    </div>
</body>
</html>
    `;
};
