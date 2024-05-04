<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <style>
        body {
            background-image: url('img5.webp');
      background-size: cover;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      color: #ffffff;
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; 
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: green;
            margin-bottom: 30px;
            font-size: 28px;
            font-size: 60px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;


        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 320px;
            max-width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        button:hover {
            background-color:
             #0056b3;
        }
        .error{
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Share Your Experience With Us!</h1>
    
    <form id="feedbackForm" method="post" action="feedback.php" onsubmit="return validateform()" >
    <?php include('errors.php'); ?>

        <label for="username"> Username: </label>
        <input type="text" name="username" id="username">
        <span id="usernameerror" class="error"></span>

        <label for="email"> Email: </label>
        <input type="email" name="email" id="email">
        <span id="emailerror" class="error"></span>

        <label for="password"> Password: </label>
        <input type="password" name="password" id="password">
        <span id="passworderror" class="error"></span>
        
        


        <label for="age">Age:</label>
        <input type="number" id="age" name="age" >
        <span id="ageerror" class="error"></span> <br>
        

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" >
            <option value="">Select...</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="non-binary">Other</option>
        </select>
        <span id="gendererror" class="error"></span><br>
      

        <label for="location">Location:</label>
        <input type="text" id="location" name="location">
        <span id="locationerror" class="error"></span><br>

        <label for="suggestion">Suggestions:</label>
        <textarea id="suggestion" name="suggestion" rows="4"></textarea>
        <span id="suggestionerror" class="error"></span> <br>


        <label for="comment">Comments:</label>
        <textarea id="comment" name="comment" rows="4" ></textarea>
        <span id="commenterror" class="error"></span> <br>

        <button type="submit" name="feedback" onclick="return validateform()" >Submit</button>
    </form>


    <script>
        function validateform(){
            var username= document.getElementById('username').value;
            var age = document.getElementById('age').value;
            var gender= document.getElementById('gender').value;
            var location=document.getElementById('location').value;
            var suggestion = document.getElementById('suggestion').value;
            var comment = document.getElementById('comment').value;

            if(username == ''){
                document.getElementById('usernameerror').innerHTML="Please enter your email";
                document.getElementById('username').focus();
                return false;
            }

             else if(age==''){
                document.getElementById('ageerror').innerHTML="Please enter your age";
                document.getElementById('age').focus();
                return false; 
            }
            else if(age < 0){
                document.getElementById('ageerror').innerHTML="Invalid age";
                document.getElementById('age').focus();
                return false;
            }
           else if(gender == ''){
                document.getElementById('gendererror').innerHTML="Please select your gender";
                document.getElementById('gender').focus();
                return false;
            }
           else if(location==''){
                document.getElementById('locationerror').innerHTML="Please enter your location";
                document.getElementById('location').focus();
                return false;
            }
           else if(suggestion==''){
                document.getElementById('suggestionerror').innerHTML="Please provide your suggestions for improvement";
                document.getElementById('suggestion').focus();
                return false;
            }
           else if(comment==''){
                document.getElementById('suggestionerror').innerHTML="Please enter your comments about the construction work.";
                document.getElementById('comment').focus();
                return false;
            }
            else{
            return true;
            }
        }
    </script>

</body>

</html>
