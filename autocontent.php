<?php include 'inc/header.php'; ?>
    <h2>03. Auto Refresh Content</h2>
<style>
    .loadcontent {
        background: #802D15;
        width: 274px;
        margin-left: 90px;
        color: #fff;
        padding: 10px 20px;
    }
    .loadcontent ul{
        list-style: none;
    }
    .loadcontent ul li {
        margin: 5px;
        padding: 4px;
        border-bottom: 1px solid #000;
        cursor: pointer;
    }
</style>
    <div class="content">
        <form action="" method="post">
            <table>
                <tr>
                    <td>Content</td>
                    <td>:</td>
                    <td><textarea name="body" id="body" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" id="autoSubmit" value="POST"></td>
                </tr>
            </table>
        </form>
        <div id="loadData"></div>
    </div>
<?php include 'inc/footer.php'; ?>