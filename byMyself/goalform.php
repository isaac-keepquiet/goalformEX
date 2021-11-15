<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script> -->
        <link rel="stylesheet" href="style.css">
        <!-- <script src="">
            $(document).ready(function(){
                $("input").focus(function(){
                    $(this).css("background-color","lightgreen");
                });
            });
        </script> -->
    </head>

    <body>
        

        
        <div class="container mt-3 signup-container">
            <h3 class="title">Form Validation</h3>
            
            <form class="cmxform was-validated" id="commentForm" action="goalformsave.php" method="post">
                <fieldset>
                    <!-- <div class="signup-info"> -->
                        <div class="mb-3 mt-3">
                            
                            <!-- <br> -->
                            <!-- <span class="input-group-text">@</span> -->
                            <label for="username" class="form-label">User Name: </label>
                            <input type="text" class="form-control" name="username" minlength="2" id="username" value="" placeholder="username" required>
                            
                            <!-- class="text-box" mean?-->
                            

                            <!-- <span class="error"><?php echo $nameErr;?></span>
                            <span class="error"><p></p></span> -->

                            <!-- <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div> -->
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email: </label>
                            <input type="email" class="form-control" name="email" id="email" value="" placeholder="email" required>
                            
                            <!-- <span class="input-group-text">@example.com</span> -->
                            

                            <!-- <span class="error"><?php echo $emailErr;?></span>
                            <span class="error"><p></p></span> -->

                            <!-- <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div> -->
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password: </label>
                            <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password" required>
                            
                            
                            <!-- <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div> -->
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
                            <label class="form-check-label" for="myCheck">I agree.</label>
                            <input type="checkbox" class="form-check-input" id="myCheck" name="remember" required>
                            
                            <!-- <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Check this checkbox to continue.</div> -->
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
                </fieldset>
            </form>
        </div>
        <script>
            $("#commentForm").validate();
        </script>

        <!-- <script src="script.js"></script> -->
    </body>
</html>