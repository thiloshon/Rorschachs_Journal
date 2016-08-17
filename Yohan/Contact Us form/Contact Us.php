<!--/**
 * Created by PhpStorm.
 * User: Yohan Punchihewa
 * Date: 7/30/2016
 * Time: 1:01 AM
 */-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact US!!!</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class = "background"></div>

    <h1><u>Contact Us !!</u></h1>
    <form name = "contactus_form" onsubmit="return validate()" action="connectDB.php" method="post">
        <table>
        <tr>
           <td>Full Name : </td>
        </tr>
        <tr>
           <td><input type = "text" name = "name"  size = "47" style = "height:35px;" required="true"><br/></td>
        </tr>
        <tr>
            <td>Email Address :
            </td></td>
        </tr>
        <tr>
            <td>
                <input type = "text" name = "email"  size="47" style = "height:35px">
                <div class="tooltip"> <img src ="Images\info.jpeg" alt="heart img" width="22px" height="22px" align="middle"/>
                    <span class="tooltiptext">Enter address as somebody@mymail.com </span>
                </div>
            </td>
        </tr>
        <tr>
            <td>Would you like to receive email notifications <br/> for new movie releases? <input type = "checkbox" id = "notify" value = "notification"></td>
        </tr>
        <tr>
            <td>Rate our site : <br/>
            <input type="radio" id = "rate1" name = "ratings" value = "bad">Bad
                <input type="radio" id = "rate2" name = "ratings" value = "meh">Meh
                <input type="radio" id = "rate3" name = "ratings" value = "average">Average
                <input type="radio" id = "rate4" name = "ratings" value = "good">Good
                <input type="radio" id = "rate5" name = "ratings" value = "awesome">Awesome</td>
        </tr>
        <tr>
            <td> Comment(s) :</td>
        </tr>
        <tr>
            <td><textarea id="textarea" name= "comments" rows="6" style = "height: 200px; width: 360px; resize: none;" required="true"></textarea></td>
        </tr>
        <tr>
            <td><input type = "submit" value = "Submit" style = "margin-left: 150px;"></td>
        </tr>
        </table>
    </form>
</body>
<script type="text/javascript">
    function validate(){
        if (document.getElementById("notify").checked) { // if the checkbox is ticked, the email should be validated
            var x = document.forms["contactus_form"]["email"].value;
            var atPos = x.indexOf("@"); //store the index of the "@" symbol in the email address entered
            var dotPos = x.lastIndexOf("."); //store the index of the "." symbol in the email address after the host name entered
            if (atPos < 1 || dotPos < atPos + 2 || dotPos + 2 >= x.length){
                alert("Please enter a valid email address");
                x.focus;
                return false;
            }
        }

        //validate rating to not be left blank
        if (document.getElementById("rate1") == "" || document.getElementById("rate2") == "" || document.getElementById("rate3") == "" || document.getElementById("rate4") == "" || document.getElementById("rate5") == "") {
            alert("Please dont forget to rate us");
            return false;

        }else{
            var fullname = document.forms["contactus_form"]["name"].value;
            var comment = document.forms["contactus_form"]["comments"].value;
            var rating = document.forms["contactus_form"]["ratings"].value;
            var x;
            var sent = confirm("Hi "+ fullname + ", here is a summary of your ratings and comments entered :" + "\n You rated : " + rating + "\n Your comments are : " +  comment);
            if ( sent == true){ //if true, then the page is redirected and the data is sent to the server to be stored in the database
                return true;
            }else{ //to prevent redirecting and stay on the same page
                alert("You cancelled this operation");
                return false;
            }
        }


    }
</script>
</html>
