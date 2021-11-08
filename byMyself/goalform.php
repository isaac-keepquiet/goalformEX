<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <script src="">
            $(document).ready(function(){
                $("input").focus(function(){
                    $(this).css("background-color","lightgreen")
                });
            });
        </script>
    </head>

    <body>

        
        <div class="container mt-3 signup-container">
            <h3 class="title">Form Validation</h3>
            
            <form class="was-validated" action="goalformsave.php" method="post">
                <!-- <div class="signup-info"> -->
                    <div class="form-floating mb-3 mt-3">
                        
                        <!-- <br> -->
                        <!-- <span class="input-group-text">@</span> -->
                        <input type="text" class="form-control" name="username" id="uname" value="" placeholder="username" required>
                        <!-- class="text-box" mean?-->
                        <label for="uname" class="form-label">User Name: </label>
                        <span class="error"><p></p></span>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-floating mb-3">
                        
                        <input type="text" class="form-control" name="eml" id="email" value="" placeholder="email" required>
                        <!-- <span class="input-group-text">@example.com</span> -->
                        <label for="email" class="form-label">Email: </label>
                        <span class="error"><p></p></span>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="pwd" value="" placeholder="Password" required>
                        <label for="password" class="form-label">Password: </label>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="mb-3">
                        <label class="title" for="reason">Reason For Joining:</label>
                        <input type="radio" class="form-check-input" name="reason" id="radio1" value="Want to do" required>
                        <label class="form-check-label" for="radio1">Want to do</label>
                        <input type="radio" class="form-check-input" name="reason" id="radio2" value="Want to know" required>
                        <label class="form-check-label" for="radio2">Want to know</label>
                        <input type="radio" class="form-check-input" name="reason" id="radio3" value="Other" required>
                        <label class="form-check-label" for="radio3">Other </label>
                        <span class="error"><p></p></span>
                    </div>

                    <div class="form-chack mb-3">
                        <input type="checkbox" class="form-check-input" id="myCheck" name="remember" required>
                        <label class="form-check-label" for="myCheck">I agree.</label>
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
                    
                    
                <!-- </div> -->

                <div class="submit-button">
                    <button class="btn btn-primary"><P>SUBMIT</P></button>
                </div>

            </form>
        </div>
        
    </body>
</html>