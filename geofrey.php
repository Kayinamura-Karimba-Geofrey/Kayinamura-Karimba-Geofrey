<h1>Student Form</h1>
    <form method="POST" action="geofrey.php">
        <input type="search" name="searchquerry" placeholder="Search"><input type="submit" value="Search"><br>
        <input type="url" name="websiteURL" placeholder="URL"><input type="submit" value="Go">
        <fieldset>
            <legend><h1>Student`s form</h1></legend>
            
            
            
           
            
            <label for="first"> First name</label><br>
            <input type="text" id="first" name="firstName" placeholder="First name"><br>
            
            <label for="last name"> last name</label><br>
            <input type="text" id="last" name="lastName" placeholder="Last name"><br>
            
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" placeholder="Email"><br>
            
            <labe for="password">password</label><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            
            <label for="tel"> telephone </label><br>
            <input type="tel" id="tel" name="telephone" placeholder="Telephone"><br>
            
            <label for="school">School name </label><br>
            <input type="text" id="school" name="school" placeholder="School"><br>
            
            <label for="sex">gender</label><br>
            <input type="radio" id="male" name="gender" value="male"><label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label><br>
            
            <label for="class">Enter your class here</label><br>
            <select id="class" name="class">
                <option value="year1A">Year 1A</option>
                <option value="year1B">Year 1B</option>
                <option value="year1C">Year 1C</option>
                
            </select><br>
            
            <label for="age">Enter your age here</label><br>
            <input type="number" id="age" name="age" min="10" max="30"><br>
            
            <label for="subjects">Select your favourite subjects</label><br>
            <input type="checkbox" id="math" name="subjects" value="Mathematics"><label for="math">Mathematics</label><br>
            <input type="checkbox" id="physics" name="subjects" value="Physics"><label for="physics">Physics</label><br>
            <input type="checkbox" id="biology" name="subjects" value="biology"><label for="biology">biology</label><br>
            
            <label for="level">Level yourself</label><br>
            <input type="range" id="level" name="level"><br>
            
            <label for="file">students image</label><br>
            <input type="file" id="file" name="image"><br>
            
            <label for="color">Enter your favourite color here</label><br>
            <input type="color" id="color" name="color"><br>
            
            <label for="hidden">Code sent to phone number</label><br>
            <input type="hidden" id="hidden" name="hiddenCode" value="12345"><br>

            <label for="date">Enter the date</label><br>
            <input type="date" id="date" name="surveyDate"><br>

            <label for="time">Time of survey</label><br>
            <input type="time" id="time" name="surveyTime"><br>

            <label for="comment">Comment here </label><br>
            <textarea id="comment" name="comment" class="textarea"></textarea><br>
            
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $searchbox = isset($_POST['searchquerry'])?$_POST['searchquerry']:0;
    $websiteURL = $_POST['websiteURL'];
    $surveyDate = $_POST['surveyDate'];
    $surveyTime = $_POST['surveyTime'];
    $firstName = $_POST['firstName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telephone = $_POST['telephone'];
    $school = $_POST['school'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $age = $_POST['age'];
    $subjects = $_POST['subjects'];
    $level = $_POST['level'];
    $color = $_POST['color'];
    $hiddenCode = $_POST['hiddenCode'];
    $comment = $_POST['comment'];
    if  ( $websiteURL !='' &&$surveyDate !='' &&
    $surveyTime !='' &&$firstName !='' && $email !='' &&$password !='' &&
    $telephone !='' && $school !='' && $gender !='' && $class !='' &&
    $age !='' &&$subjects !='' &&$level !=''  ){
        echo "<div class='div'><table border='1' cellspacing='0' width='100%'>
        <thead>
            <tr>
                <th>Field Name</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
 
            <tr>
                <th>Website URL</th>
                <td>$websiteURL</td>
            </tr>
            <tr>
                <th>Survey Date</th>
                <td>$surveyDate</td>
            </tr>
            <tr>
                <th>Survey Time</th>
                <td>$surveyTime</td>
            </tr>
            <tr>
                <th>First Name</th>
                <td>$firstName</td>
            </tr>
            
            <tr>
                <th>Email</th>
                <td>$email</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>$password</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>$telephone</td>
            </tr>
            <tr>
                <th>School</th>
                <td>$school</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>$gender</td>
            </tr>
            <tr>
                <th>Class</th>
                <td>$class</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>$age</td>
            </tr>
            <tr>
                <th>Subjects</th>
                <td>$subjects</td>
            </tr>
            <tr>
                <th>Level</th>
                <td>$level</td>
            </tr>
            <tr>
                <th>Favorite Color</th>
                <td>$color</td>
            </tr>
            <tr>
                <th>Hidden Code</th>
                <td>$hiddenCode</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>$comment</td
                </div>";
                
    }else{
        echo 'invalid.';
    }
    }
   

?>
   









