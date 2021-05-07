<?php include 'inc/header.php'; ?>
    <h2>Topics: User Availability</h2>
    <div class="content">
        <div class="topics">
            <form action="" method="POST">
                <div id="userstatus"></div>
                <div id="namestatus"></div>
                <table>
                    <tr>
                        <td><label for="username">Username</label></td>
                        <td>:</td>
                        <td><input type="text" name="username" id="username" placeholder="Enter username"></td>

                    </tr>
                    <tr>
                        <td><label for="name">Name</label></td>
                        <td>:</td>
                        <td><input type="text" name="name" id="name" placeholder="Enter name"></td>

                    </tr>
                </table>
            </form>
        </div>
    </div>
<?php include 'inc/footer.php'; ?>