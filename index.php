s<html>
<head>
    <title>Tutorial Cara Membuat Login Dengan PHP MySQLi</title>
</head>
<body>
    <h3>Form Login </h3>
    
    <br/>
    <form method="POST" action="login.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
               <a href="admin/dashboard.php">simpan</a>
            </tr>
        </table>            
    </form>
</body>
</html>