<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="LawRegister.css">
</head>

<body>

    <body>
        <style>
            body {
                background: url("assets/images/slider/main.jpg") no-repeat center center fixed;
                background-size: cover;
            }
        </style>
        <form class="form" action="lawyerregister.php" method="POST" enctype="multipart/form-data">


            <p class="title"> Lawyer Register </p>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>
            <?php } ?>
            <div class="flex">
                <label>
                    <input placeholder="" type="text" name="firstname" class="input" style="width: 200px">
                    <span>First name</span>
                </label>

                <label>
                    <input placeholder="" type="text" name="middlename" class="input" style="width: 200px">
                    <span>Middle Name</span>
                </label>
            </div>

            <div class="flex">
                <label>
                    <input placeholder="" type="text" name="lastname" class="input" style="width: 200px">
                    <span>Last name</span>
                </label>

                <label>
                    <select name="gender" class="input" style="width: 220px">
                        <option value="">Select gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Prefer not to say</option>
                    </select>
                </label>
            </div>


            <div class="flex">
                <label>
                    <input placeholder="" type="text" name="firmname" class="input" style="width: 200px">
                    <span>Firm name</span>
                </label>

                <label>
                <input placeholder="" type="number" name="contactnum" class="input-number input" style="width: 200px">
                <span>Contact Number</span>
            </label>

            </div>


            <div class="flex">
            <label>
                    <input placeholder="" type="email" name="email" class="input" style="width: 200px;">
                    <span>Email </span>
                </label>
                <label>
                <input placeholder="" type="text" name="address" class="input" style="width: 200px;">
                <span> Street</span>
            </label>
            </div>
                <div class="flex">
                <label>
                <input placeholder="" type="text" name="Barangay" class="input" style="width: 200px;">
                <span> Barangay</span>
            </label>
            <label>
                <input placeholder="" type="text" name="City" class="input" style="width: 200px;">
                <span> City </span>
            </label>
        </div>

        <div class="flex">
        <label>
                <input placeholder="" type="text" name="zip code" class="input" style="width: 200px;">
                <span> Zip Code</span>
            </label>
        </div>

            <div class="flex">
            <label>
                <input placeholder="" type="password" name="password" class="input" style="width: 200px;">
                <span>Password</span>
            </label>
            <label>
                <input placeholder="" type="password" name="cfpassword" class="input" style="width: 200px;">
                <span>Confirm password</span>
            </label>
            </div>

            <div class="flex">
            <label>
                    <select name="Speciality" class="input" style="width: 220px">
                        <option value="">Select Speciality</option>
                        <option value="family">Family Lawyer</option>
                        <option value="tax">Tax Lawyer</option>
                        <option value="corporate">Corporate Lawyer</option>
                        <option value="criminal">Criminal Lawyer</option>
                        <option value="employment">Employment Lawyer</option>
                        <option value="financial">Financial Lawyer</option>
                        <option value="labour">Labour Lawyer</option>
                        <option value="immigration">Immigration Lawyer</option>
                        <option value="defense">Defense Lawyer</option>
                        <option value=" intellectual"> Intellectual Property Lawyer</option>
                        <option value="government ">Government  Lawyer</option>
                        <option value="estate">Real Estate Lawyer</option>
                        <option value="contract">Contract Lawyer</option>

                    </select>
                </label>
            <label>
                <input placeholder="" type="text" name="others" class="input" style="width: 200px;">
                <span>Others</span>
            </label>

            </div>


            <div class="flex-file">
                <label>
                    <p style="width: 200px;">Upload your Lawyer ID</p>
                    <input placeholder="" type="file" name="id" class="file input" style="width: 200px">
                </label>
                <label>
                    <p style="width: 200px;">Upload Business permit</p>
                    <input placeholder="" type="file" name="permit" class="file input" style="width: 200px">
                </label>
            </div>


            <button class="submit">Submit</a> </button>
            <p class="signin">Already have an acount ? <a href="homepage.php">Signin</a> </p>
        </form>


    </body>

</html>