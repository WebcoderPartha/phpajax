<?php include 'inc/header.php'; ?>
    <h2>02. Autocomplete Textbox</h2>
<style>
    .nameClass {
        background: #802D15;
        width: 274px;
        margin-left: 90px;
        color: #fff;
        padding: 10px 20px;
    }
    .nameClass ul li {
        margin: 5px;
        padding: 4px;
        border-bottom: 1px solid #000;
        cursor: pointer;
    }
</style>
    <div class="content">
        <div class="topics">
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Text Box</td>
                        <td>:</td>
                        <td><textarea name="name" id="name" cols="30" rows="10"></textarea></td>
                    </tr>
                </table>
                <div id="textstatus"></div>
            </form>
        </div>
    </div>
<?php include 'inc/footer.php'; ?>