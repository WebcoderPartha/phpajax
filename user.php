<?php include 'inc/header.php'; ?>
    <h2>01. User Availability</h2>
    <div class="content">
        <div class="topics">
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input type="text" name="username" id="username" placeholder="Enter username"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><div id="userstatus"></div></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input type="password" name="password" id="password" placeholder="Enter Password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="button" id="btnPassword">Show Password</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
<?php include 'inc/footer.php'; ?>