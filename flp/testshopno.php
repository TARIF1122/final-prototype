<html>
<head>
    <title>Home</title>
</head>
<body >
<font size="2" face="Consolas" >
    <table align="center"  width="90%" cellspacing="0" border="1" cellpadding="0" > 
			<tr>
				<td  align="left">
					<a href="testshopno.php"><img valign="top" src="picture/HB2.jpg" height="50px" width="80px"></a>
				</td>
				<td width="30px">
					<font size="10" color="green">HUMMING</font><font size="5" color="green">bird</font>
				</td>
				<td align="center" colspan="2">
					<input type="text" name="sreachbar" size="40px">
					<input type="submit" value="search" name="search"/>
					
				</td>
				<td align="center" colspan="2">
					<select onchange="la(this.value)">
						<option  disabled selected >Menu</option>
						<option value="aboutus.php">About</option>
						<option value="condition.php">Conditions</option>
						<option value="storesinfo.php">Stores info</option>
					</select>|
					<a href="PublicHome.php"><font size="5" color="red">Home</font></a> |
					<a href="Login.php"><font size="5" color="red">Login</font></a>     |
					<a href="Registration.php"><font size="5" color="red">Registration</font></a> 
				</td>
			</tr>
			<tr height="200px" >
				<td colspan="2" align="center" width="50px" valign="top">
					<select onchange="la(this.value)">
						<option size="10px" disabled selected ><b>MOBILE</b></font></option>
						<option  value="iphonepage.php">iPHONE</option>
						
						<option value="spage.php">SAMSUNG</option>
						<option value="">OPPO</option>
							
					</select>
					<br/>
					<img src="picture/iphone.png" alt="" width="180px" height="240px">
				</td>
				<td colspan="4" height="150px" align="center" valign="top">
					<h2><font color="red">WELCOM TO HUMMINGBIRD WORLD....<font></h2>

					<div>
						<img class="picture1" src="picture1/0.jpg" width="900px" height="200px">
						<img class="picture1" src="picture1/1.jpg" width="900px" height="200px">
						<img class="picture1" src="picture1/2.jpg" width="900px" height="200px">
						<img class="picture1" src="picture1/3.jpg" width="900px" height="200px">
						<img class="picture1" src="picture1/4.jpg" width="900px" height="200px">
						<img class="picture1" src="picture1/5.jpg" width="900px" height="200px">
					</div>

					<script>
					var myIndex = 0;
					carousel();

					function carousel() {
						var i;
						var x = document.getElementsByClassName("picture1");
						for (i = 0; i < x.length; i++) {
						   x[i].style.display = "none";  
						}
						myIndex++;
						if (myIndex > x.length) {myIndex = 1}    
						x[myIndex-1].style.display = "block";  
						setTimeout(carousel, 3000); 
					}
					</script>
					<br/>
					<font color="orange" size="50">WHATS NEW ???....</font>
				</td>
			</tr>
			<tr height="250px" >
				<td colspan="2" align="center" width="50px" valign="top">
					<select onchange="la(this.value)">
						<option size="10px" disabled selected ><b>COMPUTER</b></font></option>
						<option  value="">DELL</option>
						<option value="">MACBOOK</option>
						<option value="">HP</option>
							
					</select>
					<br/>
					<img src="picture/laptop.jpg" alt="" width="180px" height="240px">
				</td>
					
				<td align="center">
						<a href="phonedetails0.php"><img src="WNP/OPPO-F5.jpg" alt="" width="150px" height="200px"></a><br/>
						<font color="black">staring price=......../=</font><br/>
						<font color="black">NAME: OPPO F5</font>
					</td>
					<td align="center">
						<a href=""><img src="" alt="" width="150px" height="200px"></a><br/>
						<font color="black">staring price=......../=</font><br/>
						<font color="black">NAME: OPPO F5</font>
					</td>
					<td align="center">
						<a href=""><img src="" alt="" width="150px" height="200px"></a><br/>
						<font color="black">staring price=......../=</font><br/>
						<font color="black">NAME: OPPO F5</font>
					</td>
					<td align="center">
						<a href=""><img src="" alt="" width="150px" height="200px"></a><br/>
						<font color="black">staring price=......../=</font><br/>
						<font color="black">NAME: OPPO F5</font>
					</td>
					
				</td>
			</tr>
			<tr height="250px" >
				<td colspan="2" align="center" width="50px" valign="top">
					<select onchange="la(this.value)">
						<option size="10px" disabled selected ><b>TELEVISION</b></font></option>
						<option  value="">LG</option>
						<option value="">SONY</option>
						<option value="">TOSIBA</option>
				
					</select>
					<br/>
					<img src="picture/TV_BAR.jpg" alt="" width="240px" height="240px">
				</td>
				<td align="center">
						<a href=""><img src="" alt="" width="150px" height="200px"></a><br/>
						<font color="black">staring price=......../=</font><br/>
						<font color="black">NAME: OPPO F5</font>
					</td>
					<td align="center">
						<a href=""><img src="" alt="" width="150px" height="200px"></a><br/>
						<font color="black">staring price=......../=</font><br/>
						<font color="black">NAME: OPPO F5</font>
					</td>
					<td align="center">
						<a href=""><img src="" alt="" width="150px" height="200px"></a><br/>
						<font color="black">staring price=......../=</font><br/>
						<font color="black">NAME: OPPO F5</font>
					</td>
					<td align="center">
						<a href=""><img src="" alt="" width="150px" height="200px"></a><br/>
						<font color="black">staring price=......../=</font><br/>
						<font color="black">NAME: OPPO F5</font>
					</td>
					
				</td>
			</tr>
		
					
					
				</td>
				
				<td></td>
			</tr>
			
		
	</table>
	<script>
						function la(src)
						{
							window.location=src;
						}
					</script>
  	