<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>

    
    <link rel="stylesheet" href="style.css">

    <?php wp_head(); ?> <!-- If using WordPress, include this line for plugins/scripts -->
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="logo">
                <img src="wp-content/themes/newtheme/images/jculogo.png" height="500px", width="1000px" style="position:relative; left:500px;">
            </div>

            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="/page.php">Page 1</a></li>
                    <li><a href="/page.php">Page 2</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>

