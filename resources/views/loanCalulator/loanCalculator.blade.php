<!doctype html>
<html lang="en">
<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body class="bg-dark">
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body text-center mt-5">
                <h1 class="heading display-5 pb-3">Loan Calculator</h1>
                <form id="loan-form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="number" class="form-control" id="amount" placeholder="Loan Amount">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">%</span>
                            <input type="number" class="form-control" id="interest" placeholder="Interest">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="years" placeholder="Years To Repay">
                    </div>
                    <div class="forn-group">
                        <input type="submit" value="Calculate" class="btn btn-dark btn-block">
                    </div>
                </form>
                <!-- LOADER -->
                
                <div id="loading">
                    <img src="img/loading.gif" alt="">
                </div>
                
                <!-- RESULTS -->
                <div id="results" class="pt-4">
                    <h5>Results</h5>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">Monthly Payment</span>
                            <input type="number" class="form-control" id="monthly-payment" disabled>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">Total Payment</span>
                            <input type="number" class="form-control" id="total-payment" disabled>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">Total Interest</span>
                            <input type="number" class="form-control" id="total-interest" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="{{secure_asset('olderProjects/loan-calulator-app.js')}}"></script>
</body>
</html>