<!-- 
    Coded by: 
	Macabulos, Julius M.
	BSCPE 3-7p	

    Activity No. 2
    Registration
-->
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div class=box>
            <p class="title">Registration</p><br>
            <form class="forms" method="post" id="forms" action="InsertUsersRegistration.php" onsubmit="return formSubmit();"> 
                <label for="firstName">First Name</label>
                <input class ="inputBox" type="text" id="firstName" name="firstName" placeholder="Juan"><br><br>
                <label for="lastName">Last Name</label>
                <input class ="inputBox" type="text" id="lastName" name="lastName" placeholder="Dela Cruz"><br><br>
                <label for="age">Age</label><br>
                <input type="number" id="age" name="age" min="1" max="100" style="width:195px; height:26px"><br><br>
                
                <label for="gender">Gender</label>
                <select name="gender" style="width:200px; height:32px" id="gender">
                    <option>--Select--</option>
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                </select>
                
                <br><br>
                <label for="homeAddress">Home Address</label>
                <input class ="inputBox" type="text" id="homeAddress" name="homeAddress"><br><br>
                <label for="email">Email</label>
                <input class ="inputBox" type="text" id="email" name="email" placeholder="juandelacruz@gmail.com"><br><br>
                <label for="contactNumber">Contact Number</label>
                <input class ="inputBox" type="tel" id="contactNumber" name="contactNumber" placeholder="09XXXXXXXXX" pattern="[0-9]{11}"><br><br>
                <label for="userName">User Name</label>
                <input class ="inputBox" type="text" id="userName" name="userName"><br><br>
                <label for="password">Password</label>
                <input class ="inputBox" type="password" id="password" name="password"><br><br><br>
                <div class="buttons">
                    <input class="button" type="submit" value="Submit" name="submit">
                    <input class="button" type="submit" value="Cancel">
                </div>
            </form>
        </div>

        <div id="results" class="results"></div>

    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	function formSubmit(){
        $.ajax({
            type:'POST',
            url:'InsertUsersRegistration.php',
            data:$('#forms').serialize(),
            success:function(response){
                $('#results').html(response);
            }
        });
        var form=document.getElementById('forms').reset();
        return false;
    }
</script>
<style>
    .forms
    {
        text-align: left;
        display: inline-block; width: 200px;
    }
    .buttons
    {
        display: inline-block; width: 220px;
    }
    .button
    {
        background-color: darkgreen;
        border: none;
        color: white;
        padding: 14px 26px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 20px;
    }
    .box
    {
        border: 3px solid darkgreen;
        padding: 50px 32px;
        margin: 100px 500px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
    }
    .inputBox
    {
        padding: 5px 20px;
    }
    .inputBox:focus
    {
        border: 3px solid #555;
    }
    .title
    {
        font-weight: bold;
    }
    table {
        font-family: Arial, Helvetica, sans-serif;
        width: 50%;
		border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 200px;
	}	
	table, td, th {
        text-align: center;
		border: 2px solid darkgreen;
		padding: 10px;
	}
	th {
        text-align: center;
    }
</style>