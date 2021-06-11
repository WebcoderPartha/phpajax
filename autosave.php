<?php include 'inc/header.php'; ?>
    <h2>02. Autosave Textbox</h2>
<style>

</style>
    <div class="content">
        <div class="topics">
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Content</td>
                        <td>:</td>
                        <td><textarea name="content" id="content" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="hidden" id="contentId" name="contentId"></td>
                    </tr>
                </table>
                <div id="statusSave"></div>
            </form>
        </div>
    </div>
<?php include 'inc/footer.php'; ?>