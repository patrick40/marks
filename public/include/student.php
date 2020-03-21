<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/css.css">
    <title>student form</title>
     <style>
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
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MIS</a>
    </div>

    
  </div><!-- /.container-fluid -->
</nav>
        <form action=""></form>
        <table class="table-style">
            <tr>
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
                <td>Gender:</td>
                <td>
                    <input type="radio"name="gender">Male
                    <input type="radio"name="gender">Female
                </td>
            </tr>
            <tr>
                <td>Level:</td>
                <td><select name="Level">
                    <option selected hidden>Select level</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    
                </select></td>
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
                <td><input type="submit" value="Save"></td>
            </tr>
        </table>
    </body>
</html>
