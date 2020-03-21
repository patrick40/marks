<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/css.css">
    <title>Lecturer Form</title>
     <style>
         .h3{
             margin-left: 600px;
         }
     [type='radio']{
         margin: 10px;
     }
     .table-style{
         border:20px;
         margin-left: 600px;
         margin-top: 200px;
     }
     .tr-space{
         padding: 68px;
     }
     </style>
    </head>
    <body style="background-color:gray;>
        <h3>Lecturer Form</h3>
        <form action=""></form>
        <table class="table-style">
            <tr >
                <td>FirstName:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>LastName:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>RegNumber:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email"name=email></td>
            </tr>
            <tr>
                <td>PhoneNo:</td>
                <td><select name="phoneCode">
                    <option selected hidden>Code</option>
                    <option value="+250">+250</option>
                    <option value="+314">+314</option>
                    <option value="+255">+255</option>
                    <option value="+234">+234</option>
                    <input type="phone">
                </select></td>
            </tr>
            <tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio"name="gender">Male
                    <input type="radio"name="gender">Female
                </td>
            </tr>
                <td><input type="submit" value="Save"></td>
            </tr>
        </table>
    </body>
</html>
