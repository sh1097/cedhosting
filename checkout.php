<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="pay">

    </div>

    <script src="https://www.paypal.com/sdk/js?client-id=AXbA8tnes2zKP70XUnvErTXxygwZZYjPe0qkhmByEmtbU2aqiuPnclOXj5KoryBeF2D9ua8NoTXN0-6I

















"></script>
    <script src="index.js"></script>
</body>

</html>

<script>
    paypal.Buttons({
        style: {
            color: 'blue',
            shape: 'pill'
        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '100'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                console.log(details)
                // window.location.replace("http://localhost:63342/tutorial/paypal/success.php")
            })
        },
        onCancel: function(data) {
            // window.location.replace("http://localhost:63342/tutorial/paypal/Oncancel.php")
        }
    }).render('#pay');
</script>
</body>

</html>