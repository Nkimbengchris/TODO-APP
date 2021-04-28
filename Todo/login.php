<!DOCTYPE html>
<html>
<head>
	<title>TODO TASK</title>

       <style>
              .p1 {font-family: "Papyrus", monospace, serif;}

              .button1 {
               background-color: purple;
               border: none;
               color: white;
               padding: 16px 32px;
               text-align: center;
               text-decoration: none;
               display: inline-block;
               font-size: 16px;
               margin: 4px 2px;
               transition-duration: 0.4s;
               cursor: pointer;
        }
        .button1 {
              background-color: white;
              color: black;
              border: 2px solid purple;
              border-radius: 12px;
       }
       .button1:hover {
              background-color: purple;
              color: white;
       }


       </style>
</head>
<body style="background-color: #F5F5F5">

	<h1 style="color: purple">
		<p class="p1"><b><i><font>TODO APP</font></i> </b></p>
	</h1>
       <table border = "5px", style="background-color: white"; height="100%"; width="30%"; length="100%"; border="brown"; align="center">

       	<tr>

       		<td style="background-color: white; text-align: center; width: 10%; height: 5%; align-self: center;">
       			<form name="login" method ="POST" action="index.php">
       			<h1 style="color: purple";><i>TODO APP</i></b></h1>
       			<div>
       				<h2><b>Log in</b></h2>
       			</div>
       			<div style= "font-family:Arial, Sans-serif;">Using your TODO account</div>
                            <br></br>
       			<div style="font-family:Arial, Sans-serif;" > Username or Email
       			</div>
                            <br></br>
                            <div align="left"><b> Email Address</b></div>
       			<div align="left "><span style='font-size:22px;'>&#9993;</span>
                                   <input type="text" name="email" placeholder="Enter Email">
       			</div>
                            <br></br>
                            <div align="left"><b>Password</b></div>
       			<div align="left"><span style='font-size:20px;'>&#128273;</span>
                                   <input type="password"name="txtpassword"placeholder="Enter passwrd">
                            </div>
                            <br></br>
       			<div>
       				<button type="submit" class="button button1" href="index.php">Login</button>
       			</div>

       			<br></br>
       			</form>

       		</td>
       	</tr>
       </table>
</body>
</html>
