<?php session_start(); ?>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
<font size="2" face="Consolas" >
    <table align="center" border="1px" height="90%" width="90%">
			<tr height="50px">
				<td colspan="3">
					<a href="PublicHome.php"><img valign="top" src="picture/HB2.jpg" height="50px" width="150px"></a>
					&nbsp;&nbsp;<font size="10" color="green">HUMMING</font><font size="5" color="green">bird</font>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="PublicHome.php"><font size="5" color="red">Home</font></a> |
					<a href="Login.php"><font size="5" color="red">Login</font></a>     |
					<a href="Registration.php"><font size="5" color="red">Registration</font></a> 
				</td>
			</tr>
        <tr height="500">
            <td width="300px" valign="top">
                <br>
                <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</b>
                <hr width="80%">
                <ul>

                    <li><a href="ViewProfile.php">View Profile</a></li>
                    <li><a href="EditProfile.php">Edit Profile</a></li>
                    <li><a href="ProfilePicture.php">Change Profile Picture</a></li>
                    <li><a href="ChangePassword.php">Change Password</a></li>
                    <li><a href="PublicHome.php">Logout</a></li>
                </ul>
            </td>
            <td>
            <table align="center" width="70%">
                <td align="center">
                    <form action="ChangePasswordHandler.php" method="POST">
                    <fieldset>            
                        <legend>CHANGE PASSWORD</legend>
                        <table>
                            <tr>
                                <td>Current Password</td>
                                <td>:<input name="old" type="password"></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td><font color="Green">New Password</font></td>
                                <td>:<input name="new" type="password"></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td><font color="Red">Retype New Password</font></td>
                                <td>:<input name="rnew" type="password"></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td><input type="submit">
                            </tr>
                        </table>
                    </fieldset>
                    </form>
                </td>
            </table>
        </td>
        </tr>
        <tr>
            <td align="center" colspan="2">Copyright&copy; 2017</td>
        </tr>
    </table>
</font>
</body>
</html>