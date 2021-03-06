 <!docType html>

<html>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Register Form</title>

		<link rel="stylesheet" href="assets/headerRF.css">
		<link rel="stylesheet" href="assets/regform.css">

	</head>

	<body><header>
		<CENTER><h1><strong>SCHEDULAR</strong></h1></CENTER>
    </header>

    <div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="POST" action="deo.php">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" name="name" placeholder="Eg.TAABU Mpenda Shule">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Registration Number</span>
                            <input type="textfield" name="text" placeholder="Eg.2018-04-11011">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" placeholder="email@example,com">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Courses</span>
                            <select name="dropdown">
                                <option>Select course---!!</option>
                                <option>Computer Engineering and IT</option>
                                <option>Telecommunication Engineering</option>
                                <option>Electronic Science and Telecom.</option>
                                <option>Computer Science</option>
                                <option>with Computer Science.</option>    
                            </select>
                        </label>
                    </div>

                    <div class="form-row">
                        <label><span>Year</span></label>
                        <div class="form-radio-buttons" ></center>

                            <div>
                                <label>
                                    <input type="radio" name="radio">
                                    <span>First year</span>
                                </label>
                            </div>

                            <div>
                                <label>
                                    <input type="radio" name="radio">
                                    <span>Second year</span>
                                </label>
                            </div>

                            <div>
                                <label>
                                    <input type="radio" name="radio">
                                    <span>Third year</span>
                                </label>
                            </div>

                            <div>
                                <label>
                                    <input type="radio" name="radio">
                                    <span>Fourth year</span>
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked="">
                            <span>I agree to the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit" name="submit">Register</button>
                    </div>

                </div>

                <a href="Login.html" class="form-log-in-with-existing">Already have an account? Login here →</a>

            </div>

        </form>

    </div>

</body>
</html>