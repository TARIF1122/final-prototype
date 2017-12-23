<html>
<head>
    <title>Home</title>
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
        <tr height="530">
            <td>
                <table align="center">
                    <td align="center">
                            <form action="RegistrationHandler.php" method="POST">
                            <fieldset>            
                                <legend>REGISTRATION</legend>
                                <table>
                                    <tr >
                                        <td valign="top" align="center" >
										<img src="picture/default" alt="" height="250" width="200"/><br/>
										<input type="file">
										<input type="submit" value="Update">
										</td>
									</tr>
									<tr>
										
                                        <td>Name:<input name="name"></td>
                                    </tr>
                                    <tr><td colspan="2"><hr></td></tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:<input name="email"></td>
                                    </tr>
                                    <tr><td colspan="2"><hr></td></tr>
                                    <tr>
                                        <td>User Name</td>
                                        <td>:<input name="username"></td>
                                    </tr>
                                    <tr><td colspan="2"><hr></td></tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>:<input type="password" name="password"></td>
                                    </tr>
                                    <tr><td colspan="2"><hr></td></tr>
                                    <tr>
                                        <td>Conform Password</td>
                                        <td>:<input type="password" name="cpassword"></td>
                                    </tr>
                                    <tr><td colspan="2"><hr></td></tr>
                                    <tr>
                                        <td colspan="2">
                                            <fieldset>
                                                <legend>Gender</legend>
                                                <input type="radio" name="gender" value="Male">   Male
                                                <input type="radio" name="gender" value="Female"> Female
                                                <input type="radio" name="gender" value="Other">  Other
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr><td colspan="2"><hr></td></tr>
                                    <tr>
                                        <td colspan="2">
                                            <fieldset>
                                                <legend>Date of Birth</legend>
                                                <input name="date"  size="7">/
                                                <input name="month" size="7">/
                                                <input name="year"  size="7"> (dd/mm/yy)
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr><td colspan="2"><hr></td></tr>
                                    <tr>
                                        <td><input type="submit"> <input type="reset"></td>
                                    </tr>
                                </table>
                            </fieldset>
                        </form>
                    </td>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center">Copyright&copy; 2017</td>
        </tr>
    </table>
</font>
</body>
</html>