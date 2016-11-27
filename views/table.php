<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>

    </title>
</head>
<body>
    <div id="container">
        <div class="center">
            <h2>RSS-лента NASA</h2>
        </div>
        <div class="table">
		    <div class="row">
                <div class="headercell">
                    ID
                </div>
                <div class="headercell">
                    Actions
                </div>
                <div class="headercell">
                    Title
                </div>
                <div class="headercell">
                    Publication Date
                </div>
                <div class="headercell">
                    Upload Date
                </div>
                <div class="headercell">
                    Comments
                </div>
            </div>
            <?php require_once ('../common.php'); $tbl = new fillTheTable; ?>
        </div>
    </div>
</body>
</html>