const fs = require('fs');
const path = require('path');
const { getRegistrationEmailTemplate } = require('./registration_template');
const { getOrderConfirmationTemplate } = require('./order_confirmation_template');

// Generate Registration Email HTML
const registrationHtml = getRegistrationEmailTemplate({
    userName: "Alice",
    shopUrl: "https://ourstore.com/shop",
    unsubscribeUrl: "https://ourstore.com/unsubscribe",
    privacyUrl: "https://ourstore.com/privacy"
});

// Generate Order Confirmation Email HTML
const orderConfirmationHtml = getOrderConfirmationTemplate({
    userName: "Alice",
    orderNumber: "12345",
    orderTotal: "150.00",
    orderItems: [
        { name: "Awesome T-Shirt", quantity: 2, price: "25.00" },
        { name: "Cool Sneakers", quantity: 1, price: "100.00" }
    ],
    trackOrderUrl: "https://ourstore.com/track/12345",
    supportUrl: "https://ourstore.com/support"
});

// Save to HTML files for preview
fs.writeFileSync(path.join(__dirname, 'preview_registration.html'), registrationHtml);
fs.writeFileSync(path.join(__dirname, 'preview_order_confirmation.html'), orderConfirmationHtml);

console.log("Preview files generated successfully!");
console.log("1. emails/preview_registration.html");
console.log("2. emails/preview_order_confirmation.html");
