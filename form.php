<html>
    <head>
        <title> Information </title>
    </head>
    <body>
        <form method="post" action="form.php">
            Name <input type="text" name="name" placeholder = "Enter name" required/><br>
            Email <input type="email" name="email" placeholder = "Enter email" required/><br>
            Contact Number <input type="contact" name="contact" required /><br>
            Select City <select name="city">
                <option value="Delhi">Delhi</option>
                <option value="Meerut">Meerut</option>
                <option value="Kolkata">Kolkata</option>
            </select><br>
            Course <input type="text" name="Course" placeholder="Enter the course" required/><br>
            Interests: <br>
            Programming <input type="checkbox" name="int1" value="Programming"/>
            Sports <input type="checkbox" name="int1" value="Sports"/>
            Reading <input type="checkbox" name="int1" value="Reading"/>
            Games <input type="checkbox" name="int1" value="Games"/>
            <br><input type="submit" value="Click to Submit">
        </form>
        
    </body>
</html>
<?php
            $name=$_POST['name'];
            $email=$_POST['email'];
            $contact_no=$_POST['contact'];
            $city=$_POST['city'];
            $course=$_POST['Course'];
           
?>