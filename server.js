const axios = require('axios');

module.exports = async (req, res) => {
    const transactionId = req.query.transactionId;

    // Simulate a delay for payment verification
    await new Promise(resolve => setTimeout(resolve, 1000));

    // Call to the bank/UPI provider to verify payment status
    // This is a dummy example. Replace with actual API call.
    // For example purposes, we'll just simulate a successful payment
    const paymentStatus = {
        data: {
            success: true // Simulate a successful payment
        }
    };

    if (paymentStatus.data.success) {
        res.send('Payment successful!');
    } else {
        res.send('Payment failed or pending.');
    }
}
