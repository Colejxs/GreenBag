<div class="jumbotron col-md-8 col-md-offset-2">
<form class="form-horizontal" action="javascript:void(0);">
        <div class="col-xs-12" style="height:20px;"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="email">&nbsp;</label>
            <div class="col-sm-9 text-center">
                <div class="g-signin2" data-theme="dark" data-width="300" data-longtitle="true" data-onsuccess="loginGoogleSso">
            </div>
        </div>
        <div class="col-xs-12" style="height:20px;"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="email">Email:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" autofocus />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="password">Password:</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
            </div>
        </div>
        <div class="container col-md-6 col-md-offset-3">
            <input type="submit" id="loginButton" class="btn btn-primary btn-block" value="Log In" onclick="login()" />
            <a class="btn btn-link btn-block" href="index.php?content=passwordRecovery">Forgot your password?</a>
        </div>
        <div class="col-xs-12" style="height:10px;"></div>
        <div class="container col-md-6 col-md-offset-3">
            Don't have an account? <a class="btn btn-link" href="index.php?content=register" role="button">Sign Up</a>
        </div>
        <div class="col-xs-12" style="height:10px;"></div>
        <div class="container col-md-9 col-md-offset-5">
            <a class="btn btn-link" href="privacy-policy.pdf" role="button">Privacy Policy</a>
        </div>
    </form>
</div>

<script>

function login() {
    if ($('#email').val() == '') {
        showAlert('danger', 'Email Required!', 'Enter your email address and try again.');
    } else if ($('#password').val() == '') {
        showAlert('danger', 'Password Required!', 'Enter your password and try again.');
    } else {
        var settings = {
            'async': true,
            'url': 'api/loginRequest.php?email=' + $('#email').val() + '&password=' + $('#password').val(),
            'method': 'POST',
            'headers': {
                'Cache-Control': 'no-cache'
            }
        };

        $('#loginButton').prop('disabled', true);

        $.ajax(settings).done(function(response) {
            window.location.replace('index.php?content=home');
        }).fail(function() {
            showAlert('danger', 'Invalid Login!', 'Check your email address and password and try again.');
        }).always(function() {
            $('#loginButton').prop('disabled', false);
        });
    }
}
</script>


