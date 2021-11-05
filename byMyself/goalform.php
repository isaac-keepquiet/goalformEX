<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test Form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>

        </script>
    </head>

    <body>
        <div class="container mt-3">
            <h3 class="title">Form Validation</h3>
            <form class="was-validated" action="goalformsave.php" method="post">
                <div class="signup-info">
                    <div class="input-group">
                        <label for="username">User Name: </label><br>
                        <!-- <span class="input-group-text">@</span> -->
                        <input type="text" class="text-box" name="uname" id="username" value="" placeholder="username">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="input-group">
                        <label for="email">Email: </label><br>
                        <input type="text" class="text-box" name="eml" id="email" value="" placeholder="email">
                        <!-- <span class="input-group-text">@example.com</span> -->
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="input-group">
                        <label for="password">Password: </label><br>
                        <input type="password" class="text-box" id="password" name="pwd" value="" placeholder="Password">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="input-group">
                        <label for="reason">Reason For Joining:</label><br>
                        <input type="radio" name="reason" value="Want to do">Want to do
                        <input type="radio" name="reason" value="Want to know">Want to know
                        <input type="radio" name="reason" value="Other">Other            
                    </div>

                    <div class="form-chack">
                        <input type="checkbox" class="form-check-input" id="myCheck" name="remember">
                        <label class="form-check-label" for="mycCheck">I agree.</label>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </div>

                    <!-- <div class="signup-input">
                        <label for="reason">Reason For Joining:</label><br>
                        <select name="reason" id="" class="reason-select">
                            <option value="Want to do">Want to do</option>
                            <option value="Want to know">Want to know</option>
                            <option value="Other">Other</option>
                        </select>
                    </div> -->

                    <!-- <div class="unsuccess">
                        <div class="form-check form-switch">
                            <label for="Switch" class="form-check-label">Dark Mode</label>
                            <input type="checkbox" class="form-check-input" id="Switch" name="darkmide" value="yes" checked>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" checked>
                            <label class="form-check-label" for="mySwitch">Dark Mode</label>
                        </div>
                    </div> -->
                    
                    
                </div>

                <div class="submit-button">
                    <button class="submit"><P>SUBMIT</P></button>
                </div>

            </form>
        </div>
        
    </body>
</html>