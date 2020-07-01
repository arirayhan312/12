<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanbercode</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
        <form method="POST" action="welcome">
            @csrf
            <h3>Sign Up Form</h3>
                <p><label for="firstname">First Name:</label><br><br>
                    <input type="text" class="textbox" id="firstname" name="firstname" required></p>
                <p><label for="lastname">Last Name:</label><br><br>
                    <input type="text" class="textbox" id="lastname" name="lastname" required></p>
                <p>Gender:<br><br>
                    <input type="radio" name="gender" value="male" id="male_sex" required><label for="male_sex">Male</label><br>
                    <input type="radio" name="gender" value="female" id="female_sex"><label for="female_sex">Female</label><br>
                    <input type="radio" name="gender" value="other" id="other_sex"><label for="other_sex">Other</label></p>
                <p><label for="nationality">Nationality:</label><br><br>
                <select name="nationality" id="nationality">
                    <option value="indonesia">Indonesia</option>
                    <option value="foreigner">Foreigner</option>
                    <option value="other">Other</option>
                </select></p>
                <p>Language Spoken:<br><br>
                    <input type="checkbox" name="language" value="indonesia" id="ind_lang"><label for="ind_lang">Indonesia</label><br>
                    <input type="checkbox" name="language" value="english" id="eng_lang"><label for="eng_lang">English</label><br>
                    <input type="checkbox" name="language" value="other" id="other_lang"><label for="other_lang">Other</label></p>
                <p><label for="bio">Bio:</label><br><br>
                    <textarea name="bio" id="bio" cols="30" rows="10" maxlength="500" placeholder="max 500 words"></textarea></p>
                <input type="submit" value="Sign Up" name="submit">
        </form>  
</body>
</html>