

<?php
    
    echo '<h1>Welcome to The Home Page of the j-Education Theme</h1>';



include 'header.php';
?>
<body style = "background-color: #ADD8E6;"></body>
    


    <?php
    echo '<p>This is a paragraph echoed using PHP.</p>';
    ?>
    
    <div class="container">
        <div class="row">
            <div class="column">
                <?php
                echo "<p>Initial Test Message Content</p>";
                ?>
                <?php
                echo "<p>We are thrilled to have you at the Singapore campus of James Cook University on 20 May 2023, from 11am to 5pm to explore all that our university has to offer. As you tour our facilities and speak with our academics, staff, and students, we hope that you will gain a better understanding of what it means to be a student at James Cook University, Singapore. Whether you are interested in pursuing a degree in one of our many academic programs, looking to get involved in student clubs, or simply curious about life on campus, we are here to answer any questions you may have and help you make a more informed decision. So, please join us and take the time to explore our campus, meet our community members, and discover what sets our university apart. We are excited to have you here and look forward to showing you around soon!</p>";
                ?>           
            </div>
            <br><br>
            <div class="column">
                <?php
               
                $rightSideContent = "Right Side Content";
                echo "<p>$rightSideContent</p>";
                ?>
            </div>
        </div>
    </div>

    
    
    <div class="container">
        <div class="row">
            <div class="column">
                <?php
                
                $showLeftContent = true;

                if ($showLeftContent) {
                    echo '<p>If condition is true (Showcase)</p>';
                } else {
                    echo '<p>If condition is false (Showcase)</p>';
                }
                ?>
            </div>

            
        </div>
    </div>

    <?php
    
    $achievements = array("Ranked Top 2 in the World", "#1 in Australia and #14 in the World", "Awarded 5 Stars");

    echo '<h2>Achievements:</h2>';
    echo '<ul>';
    foreach ($achievements as $achievement) {
        echo "<li>$achievement</li>";
    }
    echo '</ul>';
    ?>
    
<h3><a href="#">Register Now</a></h3>    

<?php include 'footer.php'; ?>

