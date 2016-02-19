<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main Ticketing</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic">
    <link href="{!! URL::asset('css/normalize.css') !!}" rel="stylesheet">
    <link href="{!! URL::asset('css/style.css') !!}" rel="stylesheet">
</head>
<body>
    <header class="main-header"></header>
    <main class="main-content">
        <div class="container  clearfix">
            <div class="registration-form">
                <table class="registration-table">
                    <caption>Registration Type</caption>
                    <tr class="data-row">
                        <td class="data-cell">0</td>
                        <td class="data-cell"></td>
                        <td class="data-cell">$0.00</td>
                    </tr>
                    <tr class="total-row">
                        <td class="total-cell" colspan="2">Total</td>
                        <td>$0.00</td>
                    </tr>
                </table>
                <a class="btn  btn-blue" href="#">View/Change</a>
                <a class="btn  btn-blue" href="#">Checkout</a>
            </div>
            <div class="dynamic-content">
                <ul class="steps">
                    <li class="steps-item  steps-item-success">Ticket Information</li>
                    <li class="steps-item">Attendee Info</li>
                    <li class="steps-item">Payment Info</li>
                    <li class="steps-item">Checkout</li>
                    <li class="steps-item">Confirmation</li>
                </ul>
                <div class="order-summary  element-absent">
                    <h3></h3>
                    <table>
                        <tr>
                            <th>Qty</th>
                            <th>Ticket Type</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td colspan="2">Total -</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="multistep-form">
                    @yield('content')
                    <a class="btn  btn-green  btn-prev  element-absent" href="#">Back</a>
                    <a class="btn  btn-green  btn-next" href="#">Order Now</a>
                </div>
            </div>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
</body>
</html>
