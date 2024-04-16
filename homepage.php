<!-- FRONTEND FILE -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Homepage</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles_homepage.css"/>
    </head>
    <body>
        <!-- Clickable content. -->
        <div id="main-wrapper">
            <h1 id="welcome-msg">Welcome. Choose a table to visit.</h1>
            <div id="sub-wrapper">
                <form id="form_wrapper" action="display.php" method="POST">
                    <input type="submit" class="main_input" id="btn_warehouse" value="Warehouses" name="submit_w"/>
                    <input type="submit" class="main_input" id="btn_material" value="Materials" name="submit_m"/>
                    <input type="submit" class="main_input" id="btn_equip" value="Equipment" name="submit_e"/>
                </form>
            </div>
        </div>
    </body>
</html>