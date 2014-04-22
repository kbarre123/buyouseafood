<!DOCTYPE html>
<html>
<head>
<meta name="description" content="Baton Rouge's only online seafood price database. Search for live and boiled seafood prices in and around Baton Rouge, LA; compare prices with other local retailers."/>
<meta name="keywords" content="crawfish, live crawfish, boiled crawfish, crawfish price, baton rouge crawfish, louisiana crawfish, boiling crawfish, buy crawfish, buy live crawfish, buy shrimp, boil shrimp, boiled shrimp, boil crabs, boiled crabs, buy crabs, oysters, fresh oysters, buy oysters, seafood, louisiana seafood"/>   
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title>buyouseafood - Seafood & Catering Price Database for South Louisiana - Crawfish, Shrimp, Crab, Oyster & Tailgating Trays</title>

<link rel="stylesheet" href="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.css">

<!-- Extra Codiqa features -->
<link rel="stylesheet" href="codiqa.ext.css">

<!-- jQuery and jQuery Mobile -->
<script src="https://d10ajoocuyu32n.cloudfront.net/jquery-1.9.1.min.js"></script>
<script src="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>

<!-- Extra Codiqa features -->
<script src="https://d10ajoocuyu32n.cloudfront.net/codiqa.ext.js"></script>

<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42946622-1', 'bogusbarrett.com');
    ga('send', 'pageview');
</script>

<link rel="apple-touch-icon" href="icons/Icon.png" />
<link rel="apple-touch-icon" sizes="72x72" href="icons/Icon-72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="icons/Icon@2x.png" />
<link rel="apple-touch-icon" sizes="144x144" href="icons/Icon-72@2x.png" />

<link rel="icon" type="image/png" href="icons/Icon.png">

</head>
<body>
    
<?php
//Include database queries
require_once("queries.php");
?>

<!-- * * * * * * * * * * * * * * * HOME PAGE * * * * * * * * * * * * * * * -->

<div data-role="page" data-theme="a" id="home" data-title="buyouseafood|Home">
    
    <div data-theme="a" data-role="header">
        <h5>
            buyouseafood
        </h5>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#home" data-transition="slide" data-theme="" data-icon=""
                    class="ui-btn-active ui-state-persist">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#seafood_index" data-transition="slide" data-theme="" data-icon="">
                        Seafood
                    </a>
                </li>
                <li>
                    <a href="#tailgate_index" data-transition="slide" data-theme="" data-icon="">
                        Tailgate
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <div data-role="content">
        <div class="align_center">
            <h2 class="">Welcome to buyouseafood!</h2>
        </div>
        <br>
        <p class="">
            Ever notice how there's no <em>easy</em> way to compare <strong>Baton Rouge live seafood and catering prices</strong> online? Well, we fixed that for you! Our goal is to include <strong>every store that sells seafood in the greater Baton Rouge area</strong>!
        </p>
        <p class="">
            Whether you're looking for live crawfish, boiled shrimp, a dozen crabs, or a tray of sandwiches to bring to the next tailgate party, we've got you covered with <strong>accurate, current prices</strong> for all the stuff that tastes good in the greater Baton Rouge area!
        </p>
        <p class="">
            Cheers!
        </p>
        <br>
        <div data-role="collapsible-set">
            <div data-role="collapsible">
                <h3>
                    About Us
                </h3>
                    <h3 class="">Genesis</h3>            
                    <p class="">
                        We noticed that there was <strong>no way to compare local seafood prices online</strong>. What is this, 1998? Is a Limp Bizkit cd in your cd player? Do you even <em>own</em> a cd player?
                        (Kids, a cd is what Mommy and Daddy used to listen to their music on; kinda like an iPod that only plays 20 songs). No, this is 2013! So, we fixed a small part of the internet with <strong>buyouseafood</strong>!  All of this just for you, internet.
                    </p>     
                    <h3 class="">Seafood</h3>
                    <p class="">
                        There's just an absense of reliable data regarding fresh seafood prices on the web. We've worked hard to gather up all this data, <em>daily</em>, and bring it to you so you can shop around for the the lowest prices on the crustaceans and bivalve molluscs that I <em>know</em> you love to eat.  We all do.  <strong>That's the whole point of this project; food!</strong>
                    </p> 
                    <h3 class="">Tailgating</h3>
                    <p class="">
                        And another thing! Why is it so hard to find prices for catering? We just wanted to know how much for a freakin'
                        tray of sandwiches for 40 people. But nooo, the internet just couldn't be bothered. So, we fixed that part of the internet too.
                    </p>   
                    <h3 class="">Acknowledgements</h3>
                    <p class="">
                        We'd like to thank Rayne, Eric, Mike, and Travis for their help with various parts of the project.  We couldn't have done it without ya'll!
                    </p> 
            </div>
            <div data-role="collapsible">
                <h3>
                    Contact Us
                </h3>
                <!--NEED TO ADD EMAIL TO HREF -->                
                <p class="">
                    Send us an <a href="mailto:info@bogusbarrett.com?subject=buyouseafood%20inquiry">email</a> if you would like to be added to the database, have a question, or maybe you're just looking for someone to talk to about your day.  We don't care.
                </p>
            </div>
        </div>
        <br>
        
        <!-- Twitter link -->
        <div>
            <a href="https://twitter.com/buyouseafood" class="social_media twitter-follow-button" data-show-count="false">Follow @buyouseafood</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div>
        <br>

        <!-- Facebook link -->
        <div>
            <div class="fb-like" data-href="http://developers.facebook.com/docs/reference/plugins/like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-font="arial"></div>
        </div>  
    </div>
    
    <!-- Footer -->
    <div data-theme="a" data-role="footer" data-position="fixed">
        <div class="footer">
            <h3>
                Last Updated: 8/20/13
            </h3>
        </div>
        <div class="footer">
            <h3>
                &copy; <a href="../index.html" target "_blank">bogusbarrett</a>
            </h3>
        </div>
    </div>
</div>

<!-- * * * * * * * * * * * * * * * SEAFOOD INDEX PAGE * * * * * * * * * * * * * * * -->
<div data-role="page" data-theme="a" id="seafood_index" data-title="buyouseafood|Seafood">

    <!-- Navigation Bar -->
    <div data-theme="a" data-role="header">
        <h3>
            buyouseafood
        </h3>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#home" data-transition="slide" data-theme="" data-icon="">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#seafood_index" data-transition="slide" data-theme="" data-icon="" class="ui-btn-active ui-state-persist">
                        Seafood
                    </a>
                </li>
                <li>
                    <a href="#tailgate_index" data-transition="slide" data-theme="" data-icon="">
                        Tailgate
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div data-role="content">
        <h2 class="table_page_header">
            What are you looking for?
        </h2>
        <ul data-role="listview" data-divider-theme="d" data-inset="true">
            <li data-role="list-divider" role="heading">
                Categories
            </li>
            <li data-theme="e">
                <a href="#crawfish_index" data-transition="slide">
                    Crawfish
                </a>
            </li>
            <li data-theme="e">
                <a href="#shrimp" data-transition="slide">
                    Shrimp
                </a>
            </li>
            <li data-theme="e">
                <a href="#crabs" data-transition="slide">
                    Crabs
                </a>
            </li>
            <li data-theme="e">
                <a href="#oysters" data-transition="slide">
                    Oysters
                </a>
            </li>
        </ul>
        <br />

        <div data-picture data-alt="Graph of average seafood prices during 2013.">
            <div data-src="external/img/graph.png"></div>
            <div data-src="external/img/graph_medium.png"     data-media="(min-width: 400px)"></div>
            <div data-src="external/img/graph_large.png"      data-media="(min-width: 801px)"></div>
            <div data-src="external/img/graph_xlarge.png"     data-media="(min-width: 1000px)"></div>
            <div data-src="external/img/graph_xxlarge.png"    data-media="(min-width: 1200px)"></div>
            <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
            <noscript>
                <img src="external/img/graph.png" alt="Graph of average seafood prices during 2013.">
            </noscript>
        </div>
    </div>

    <!-- Footer -->
    <div data-theme="a" data-role="footer" data-position="fixed">
        <div class="footer">
            <h3>
                Last Updated: 8/20/13
            </h3>
        </div>
        <div class="footer">
            <h3>
                &copy; <a href="../index.html" target "_blank">bogusbarrett</a>
            </h3>
        </div>
    </div>
</div>

<!-- * * * * * * * * * * * * * * * CRAWFISH INDEX PAGE * * * * * * * * * * * * * * * -->

<div data-role="page" data-theme="a" id="crawfish_index" data-title="buyouseafood|Crawfish">

    <!-- Navigation Bar -->
    <div data-theme="a" data-role="header">
        <h3>
            buyouseafood
        </h3>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#home" data-transition="slide" data-theme="" data-icon="">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#seafood_index" data-transition="slide" data-theme="" data-icon="" class="ui-btn-active ui-state-persist">
                        Seafood
                    </a>
                </li>
                <li>
                    <a href="#tailgate_index" data-transition="slide" data-theme="" data-icon="">
                        Tailgate
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div data-role="content">
        <h2 class="table_page_header">
            What are you looking for?
        </h2>
        <ul data-role="listview" data-divider-theme="d" data-inset="true">
            <li data-role="list-divider" role="heading">
                Categories
            </li>
            <li data-theme="e">
                <a href="#crawfish_live" data-transition="slide">
                    Crawfish - Live
                </a>
            </li>
            <li data-theme="e">
                <a href="#crawfish_boiled" data-transition="slide">
                    Crawfish - Boiled
                </a>
            </li>
        </ul>    
    </div>

    <!-- Footer -->
    <div data-theme="a" data-role="footer" data-position="fixed">
        <!-- Link back to parent table -->
        <div>
            <a href="#seafood_index" data-transition="slide" data-role="button">Back</a>
        </div>
        <div class="footer">
            <h3>
                Last Updated: 8/20/13
            </h3>
        </div>
        <div class="footer">
            <h3>
                &copy; <a href="../index.html" target "_blank">bogusbarrett</a>
            </h3>
        </div>
    </div>
</div>

<!-- * * * * * * * * * * * * * * * CRAWFISH_LIVE PAGE * * * * * * * * * * * * * * * -->

<div data-role="page" data-theme="a" id="crawfish_live" data-title="buyouseafood|Live Crawfish">

    <!-- Navigation Bar -->
    <div data-theme="a" data-role="header">
        <h3>
            buyouseafood
        </h3>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#home" data-transition="slide" data-theme="" data-icon="">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#seafood_index" data-transition="slide" data-theme="" data-icon="" class="ui-btn-active ui-state-persist">
                        Seafood
                    </a>
                </li>
                <li>
                    <a href="#tailgate_index" data-transition="slide" data-theme="" data-icon="">
                        Tailgate
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div data-role="content">
        <h2 class="grid_12 table_page_header">Live Crawfish Prices</h2>
        <div class="grid_12">
            <?php
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Product</th>
                        <th class='table_head'>Average Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Live Crawfish</td>";

                        echo "<td>$" . number_format((float)$avgPrice_1, 2, '.', '') . " /lb.</td>";
                    echo "</tr>
                    </tbody>
                    </table>
                    <br />";      
            ?>
        </div>
        <div class="grid_12">
            <?php     
            //Set up HTML table.
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Vendor Name</th>
                        <th class='table_head'>Price</th>
                    </tr>
                </thead>";

            //Echo results in an HTML table.
            while($row_1 = $result_1->fetch(PDO::FETCH_OBJ))
              {
                echo "<tr>";
                echo "<td><a href='" . $row_1->website . "' target=blank>" . $row_1->vendor_name . "</a></td>";
                echo "<td>$" . number_format((float)($row_1->price), 2, '.', '') . " /lb.</td>";
                echo "</tr>";
              }
            echo "</table>";
            ?>
        </div>
    </div>

    <!-- Footer -->
    <div data-theme="a" data-role="footer" data-position="fixed">
        <!-- Link back to parent table -->
        <div>
            <a href="#crawfish_index" data-transition="slide" data-role="button">Back</a>
        </div>
        <div class="footer">
            <h3>
                Last Updated: 8/20/13
            </h3>
        </div>
        <div class="footer">
            <h3>
                &copy; <a href="../index.html" target "_blank">bogusbarrett</a>
            </h3>
        </div>
    </div>
</div>

<!-- * * * * * * * * * * * * * * * CRAWFISH_BOILED PAGE * * * * * * * * * * * * * * * -->

<div data-role="page" data-theme="a" id="crawfish_boiled" data-title="buyouseafood|Boiled Crawfish">

    <!-- Navigation Bar -->
    <div data-theme="a" data-role="header">
        <h3>
            buyouseafood
        </h3>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#home" data-transition="slide" data-theme="" data-icon="">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#seafood_index" data-transition="slide" data-theme="" data-icon="" class="ui-btn-active ui-state-persist">
                        Seafood
                    </a>
                </li>
                <li>
                    <a href="#tailgate_index" data-transition="slide" data-theme="" data-icon="">
                        Tailgate
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div data-role="content">
        <h2 class="grid_12 table_page_header">Boiled Crawfish Prices</h2>
        <div class="grid_12">
            <?php
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Product</th>
                        <th class='table_head'>Average Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Boiled Crawfish</td>";

                        echo "<td>$" . number_format((float)$avgPrice_2, 2, '.', '') . " /lb.</td>";
                    echo "</tr>
                    </tbody>
                    </table>
                    <br />";      
            ?>
        </div>
        <div class="grid_12">
            <?php     
            //Set up HTML table.
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Vendor Name</th>
                        <th class='table_head'>Price</th>
                    </tr>
                </thead>";

            //Echo results in an HTML table.
            while($row_2 = $result_2->fetch(PDO::FETCH_OBJ))
              {
                echo "<tr>";
                echo "<td><a href='" . $row_2->website . "' target=blank>" . $row_2->vendor_name . "</a></td>";
                echo "<td>$" . number_format((float)($row_2->price), 2, '.', '') . " /lb.</td>";
                
                echo "</tr>";
              }
            echo "</table>";
            ?>  
        </div>
    </div>

    <!-- Footer -->
    <div data-theme="a" data-role="footer" data-position="fixed">
        <!-- Link back to parent table -->
        <div>
            <a href="#crawfish_index" data-transition="slide" data-role="button">Back</a>
        </div>
        <div class="footer">
            <h3>
                Last Updated: 8/20/13
            </h3>
        </div>
        <div class="footer">
            <h3>
                &copy; <a href="../index.html" target "_blank">bogusbarrett</a>
            </h3>
        </div>
    </div>
</div>

<!-- * * * * * * * * * * * * * * * SHRIMP PAGE * * * * * * * * * * * * * * * -->

<div data-role="page" data-theme="a" id="shrimp" data-title="buyouseafood|Shrimp">

    <!-- Navigation Bar -->
    <div data-theme="a" data-role="header">
        <h3>
            buyouseafood
        </h3>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#home" data-transition="slide" data-theme="" data-icon="">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#seafood_index" data-transition="slide" data-theme="" data-icon="" class="ui-btn-active ui-state-persist">
                        Seafood
                    </a>
                </li>
                <li>
                    <a href="#tailgate_index" data-transition="slide" data-theme="" data-icon="">
                        Tailgate
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div data-role="content">
        <h2 class="grid_12 table_page_header">Fresh Shrimp Prices</h2>
        <div class="grid_12">
            <?php
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Product</th>
                        <th class='table_head'>Average Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Shrimp (Jumbo; Med-Lg)</td>";
                        echo "<td>$" . number_format((float)$avgPrice_3, 2, '.', '') . " /lb.</td>";
                    echo "</tr>
                    <tr>
                        <td>Shrimp (Large; 21-25 ct.)</td>";
                        echo "<td>$" . number_format((float)$avgPrice_4, 2, '.', '') . " /lb.</td>";
                    echo "</tr>
                    <tr>
                        <td>Shrimp (Medium; 36-40 ct.)</td>";
                        echo "<td>$" . number_format((float)$avgPrice_5, 2, '.', '') . " /lb.</td>";
                    echo"</tr>
                    <tr>
                        <td>Shrimp (Boiled)</td>";
                        echo "<td>$" . number_format((float)$avgPrice_6, 2, '.', '') . " /lb.</td>";
                    echo"</tr>
                    </tbody>
                    </table>
                    <br />";      
            ?>
        </div>
        <div class="grid_12">
            <?php     
            //Set up HTML table.
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Vendor Name</th>
                        <th class='table_head'>Product</th>
                        <th class='table_head'>Price</th>
                    </tr>
                </thead>";

            //Echo results in an HTML table.
            while($row_3 = $result_3->fetch(PDO::FETCH_OBJ))
              {
                echo "<tr>";
                echo "<td><a href='" . $row_3->website . "' target=blank>" . $row_3->vendor_name . "</a></td>";
                echo "<td>" . $row_3->product_name . "</td>";
                echo "<td>$" . number_format((float)($row_3->price), 2, '.', '') . " /lb.</td>";
                echo "</tr>";
              }
            echo "</table>";
            ?>  
        </div>
    </div>

    <!-- Footer -->
    <div data-theme="a" data-role="footer" data-position="fixed">
        <!-- Link back to parent table -->
        <div>
            <a href="#seafood_index" data-transition="slide" data-role="button">Back</a>
        </div>
        <div class="footer">
            <h3>
                Last Updated: 8/20/13
            </h3>
        </div>
        <div class="footer">
            <h3>
                &copy; <a href="../index.html" target "_blank">bogusbarrett</a>
            </h3>
        </div>
    </div>
</div>

<!-- * * * * * * * * * * * * * * * CRABS PAGE * * * * * * * * * * * * * * * -->

<div data-role="page" data-theme="a" id="crabs" data-title="buyouseafood|Crabs">

    <!-- Navigation Bar -->
    <div data-theme="a" data-role="header">
        <h3>
            buyouseafood
        </h3>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#home" data-transition="slide" data-theme="" data-icon="">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#seafood_index" data-transition="slide" data-theme="" data-icon="" class="ui-btn-active ui-state-persist">
                        Seafood
                    </a>
                </li>
                <li>
                    <a href="#tailgate_index" data-transition="slide" data-theme="" data-icon="">
                        Tailgate
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div data-role="content">
        <h2 class="grid_12 table_page_header">Crab Prices</h2>
        <div class="grid_12">
            <?php
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Product</th>
                        <th class='table_head'>Average Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Crabs (Boiled; Lg)</td>";
                        echo "<td>$" . number_format((float)$avgPrice_7, 2, '.', '') . " /lb.</td>";
                    echo"</tr>
                    <tr>
                        <td>Crabs (Boiled; Med)</td>";
                        echo "<td>$" . number_format((float)$avgPrice_8, 2, '.', '') . " /lb.</td>";
                    echo"</tr>
                    <tr>
                        <td>Crabs (Boiled; Sm)</td>";
                        echo "<td>$" . number_format((float)$avgPrice_9, 2, '.', '') . " /lb.</td>";
                    echo"</tr>
                </tbody>
                </table>
                <br />";      
            ?>
        </div>
        <div class="grid_12">
            <?php     
            //Set up HTML table.
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Vendor Name</th>
                        <th class='table_head'>Product</th>
                        <th class='table_head'>Price</th>
                    </tr>
                </thead>";

            //Echo results in an HTML table.
            while($row_4 = $result_4->fetch(PDO::FETCH_OBJ))
              {
                echo "<tr>";
                echo "<td><a href='" . $row_4->website . "' target=blank>" . $row_4->vendor_name . "</a></td>";
                echo "<td>" . $row_4->product_name . "</td>";
                echo "<td>$" . number_format((float)($row_4->price), 2, '.', '') . " /lb.</td>";
                echo "</tr>";
              }
            echo "</table>";
            ?>  
        </div>
    </div>

    <!-- Footer -->
    <div data-theme="a" data-role="footer" data-position="fixed">
        <!-- Link back to parent table -->
        <div>
            <a href="#seafood_index" data-transition="slide" data-role="button">Back</a>
        </div>
        <div class="footer">
            <h3>
                Last Updated: 8/20/13
            </h3>
        </div>
        <div class="footer">
            <h3>
                &copy; <a href="../index.html" target "_blank">bogusbarrett</a>
            </h3>
        </div>
    </div>
</div>

<!-- * * * * * * * * * * * * * * * OYSTERS PAGE * * * * * * * * * * * * * * * -->

<div data-role="page" data-theme="a" id="oysters" data-title="buyouseafood|Oysters">

    <!-- Navigation Bar -->
    <div data-theme="a" data-role="header">
        <h3>
            buyouseafood
        </h3>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#home" data-transition="slide" data-theme="" data-icon="">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#seafood_index" data-transition="slide" data-theme="" data-icon="" class="ui-btn-active ui-state-persist">
                        Seafood
                    </a>
                </li>
                <li>
                    <a href="#tailgate_index" data-transition="slide" data-theme="" data-icon="">
                        Tailgate
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div data-role="content">
        <h2 class="grid_12 table_page_header">Oyster Sack Prices</h2>
        <div class="grid_12">
            <?php
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Product</th>
                        <th class='table_head'>Average Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Oysters</td>";

                        echo "<td>$" . number_format((float)$avgPrice_10, 2, '.', '') . " /lb.</td>";
                    echo "</tr>
                    </tbody>
                    </table>
                    <br />";      
            ?>
        </div>
        <div class="grid_12">
            <?php     
            //Set up HTML table.
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Vendor Name</th>
                        <th class='table_head'>Price</th>
                    </tr>
                </thead>";

            //Echo results in an HTML table.
            while($row_5 = $result_5->fetch(PDO::FETCH_OBJ))
              {
                echo "<tr>";
                echo "<td><a href='" . $row_5->website . "' target=blank>" . $row_5->vendor_name . "</a></td>";
                echo "<td>$" . number_format((float)($row_5->price), 2, '.', '') . " /sack</td>";
                echo "</tr>";
              }
            echo "</table>";
            ?>  
        </div>
    </div>

    <!-- Footer -->
    <div data-theme="a" data-role="footer" data-position="fixed">
        <!-- Link back to parent table -->
        <div>
            <a href="#seafood_index" data-transition="slide" data-role="button">Back</a>
        </div>
        <div class="footer">
            <h3>
                Last Updated: 8/20/13
            </h3>
        </div>
        <div class="footer">
            <h3>
                &copy; <a href="../index.html" target "_blank">bogusbarrett</a>
            </h3>
        </div>
    </div>
</div>

<!-- * * * * * * * * * * * * * * * TAILGATE INDEX PAGE * * * * * * * * * * * * * * * -->
<div data-role="page" data-theme="a" id="tailgate_index" data-title="buyouseafood|Tailgate">

    <!-- Navigation Bar -->
    <div data-theme="a" data-role="header">
        <h3>
            buyouseafood
        </h3>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#home" data-transition="slide" data-theme="" data-icon="">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#seafood_index" data-transition="slide" data-theme="" data-icon="">
                        Seafood
                    </a>
                </li>
                <li>
                    <a href="#tailgate_index" data-transition="slide" data-theme="" data-icon=""  class="ui-btn-active ui-state-persist">
                        Tailgate
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div data-role="content">
        <h2 class="table_page_header">
            What are you looking for?
        </h2>
        <ul data-role="listview" data-divider-theme="d" data-inset="true">
            <li data-role="list-divider" role="heading">
                Categories
            </li>
            <li data-theme="e">
                <a href="#sandwiches" data-transition="slide">
                    Sandwiches
                </a>
            </li>
            <li data-theme="e">
                <a href="#seafood_tray" data-transition="slide">
                    Seafood
                </a>
            </li>
            <li data-theme="e">
                <a href="#boudin_balls" data-transition="slide">
                    Boudin Balls
                </a>
            </li>
            <li data-theme="e">
                <a href="#chicken_fingers" data-transition="slide">
                    Chicken Fingers
                </a>
            </li>
            <li data-theme="e">
                <a href="#dessert" data-transition="slide">
                    Desserts
                </a>
            </li>
        </ul>
    </div>

    <!-- Footer -->
    <div data-theme="a" data-role="footer" data-position="fixed">
        <div class="footer">
            <h3>
                Last Updated: 8/20/13
            </h3>
        </div>
        <div class="footer">
            <h3>
                &copy; <a href="../index.html" target "_blank">bogusbarrett</a>
            </h3>
        </div>
    </div>
</div>

<!-- * * * * * * * * * * * * * * * SANDWICHES PAGE * * * * * * * * * * * * * * * -->

<div data-role="page" data-theme="a" id="sandwiches" data-title="buyouseafood|Sandwiches">

    <!-- Navigation Bar -->
    <div data-theme="a" data-role="header">
        <h3>
            buyouseafood
        </h3>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#home" data-transition="slide" data-theme="" data-icon="">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#seafood_index" data-transition="slide" data-theme="" data-icon="">
                        Seafood
                    </a>
                </li>
                <li>
                    <a href="#tailgate_index" data-transition="slide" data-theme="" data-icon=""  class="ui-btn-active ui-state-persist">
                        Tailgate
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div data-role="content">
        <h2 class="grid_12 table_page_header">Sandwich Tray Prices</h2>
        <div class="grid_12">
            <?php
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Product</th>
                        <th class='table_head'>Average Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sandwiches</td>";

                        echo "<td>$" . number_format((float)$avgPrice_11, 2, '.', '') . "</td>";
                    echo "</tr>
                    </tbody>
                    </table>
                    <br />";      
            ?>
        </div>
        <div class="grid_12">
            <?php     
            //Set up HTML table.
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Vendor Name</th>
                        <th class='table_head'>Price</th>
                        <th class='table_head'>Feeds</th>
                        <th class='table_head'>Price per Person</th>
                    </tr>
                </thead>
                <tbody>";

            //Echo results in an HTML table.
            while($row_6 = $result_6->fetch(PDO::FETCH_OBJ))
              {
                echo "<tr>";
                echo "<td><a href='" . $row_6->website . "' target=blank>" . $row_6->vendor_name . "</a></td>";
                echo "<td>$" . number_format((float)($row_6->price), 2, '.', '') . "</td>";
                echo "<td>" . $row_6->feeds . "</td>";
                echo "<td>$" . number_format((float)($row_6->price/$row_6->feeds), 2, '.', '') . "</td>";
                echo "</tr>";
              }

                echo "</tbody>
                    </table>";
            ?>  
        </div>
    </div>

    <!-- Footer -->
    <div data-theme="a" data-role="footer" data-position="fixed">
        <!-- Link back to parent table -->
        <div>
            <a href="#tailgate_index" data-transition="slide" data-role="button">Back</a>
        </div>
        <div class="footer">
            <h3>
                Last Updated: 8/20/13
            </h3>
        </div>
        <div class="footer">
            <h3>
                &copy; <a href="../index.html" target "_blank">bogusbarrett</a>
            </h3>
        </div>
    </div>
</div>

<!-- * * * * * * * * * * * * * * * SEAFOOD_TRAY PAGE * * * * * * * * * * * * * * * -->

<div data-role="page" data-theme="a" id="seafood_tray" data-title="buyouseafood|Seafood Trays">

    <!-- Navigation Bar -->
    <div data-theme="a" data-role="header">
        <h3>
            buyouseafood
        </h3>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#home" data-transition="slide" data-theme="" data-icon="">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#seafood_index" data-transition="slide" data-theme="" data-icon="">
                        Seafood
                    </a>
                </li>
                <li>
                    <a href="#tailgate_index" data-transition="slide" data-theme="" data-icon=""  class="ui-btn-active ui-state-persist">
                        Tailgate
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div data-role="content">
        <h2 class="grid_12 table_page_header">Seafood Tray Prices</h2>
        <div class="grid_12">
            <?php
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Product</th>
                        <th class='table_head'>Average Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Seafood Trays</td>";

                        echo "<td>$" . number_format((float)$avgPrice_12, 2, '.', '') . "</td>";
                    echo "</tr>
                    </tbody>
                    </table>
                    <br />";      
            ?>
        </div>
        <div class="grid_12">
            <?php     
            //Set up HTML table.
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Vendor Name</th>
                        <th class='table_head'>Price</th>
                        <th class='table_head'>Feeds</th>
                        <th class='table_head'>Price per Person</th>
                    </tr>
                </thead>
                <tbody>";

            //Echo results in an HTML table.
            while($row_7 = $result_7->fetch(PDO::FETCH_OBJ))
              {
                echo "<tr>";
                echo "<td><a href='" . $row_7->website . "' target=blank>" . $row_7->vendor_name . "</a></td>";
                echo "<td>$" . number_format((float)($row_7->price), 2, '.', '') . "</td>";
                echo "<td>" . $row_7->feeds . "</td>";
                echo "<td>$" . number_format((float)($row_7->price/$row_7->feeds), 2, '.', '') . "</td>";
                echo "</tr>";
              }

                echo "</tbody>
                    </table>";
            ?>    
        </div>
    </div>

    <!-- Footer -->
    <div data-theme="a" data-role="footer" data-position="fixed">
        <!-- Link back to parent table -->
        <div>
            <a href="#tailgate_index" data-transition="slide" data-role="button">Back</a>
        </div>
        <div class="footer">
            <h3>
                Last Updated: 8/20/13
            </h3>
        </div>
        <div class="footer">
            <h3>
                &copy; <a href="../index.html" target "_blank">bogusbarrett</a>
            </h3>
        </div>
    </div>
</div>

<!-- * * * * * * * * * * * * * * * BOUDIN_BALLS PAGE * * * * * * * * * * * * * * * -->

<div data-role="page" data-theme="a" id="boudin_balls" data-title="buyouseafood|Boudin Balls">

    <!-- Navigation Bar -->
    <div data-theme="a" data-role="header">
        <h3>
            buyouseafood
        </h3>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#home" data-transition="slide" data-theme="" data-icon="">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#seafood_index" data-transition="slide" data-theme="" data-icon="">
                        Seafood
                    </a>
                </li>
                <li>
                    <a href="#tailgate_index" data-transition="slide" data-theme="" data-icon=""  class="ui-btn-active ui-state-persist">
                        Tailgate
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div data-role="content">
        <h2 class="grid_12 table_page_header">Boudin Ball Tray Prices</h2>
        <div class="grid_12">
            <?php
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Product</th>
                        <th class='table_head'>Average Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Boudin Balls</td>";

                        echo "<td>$" . number_format((float)$avgPrice_13, 2, '.', '') . "</td>";
                    echo "</tr>
                    </tbody>
                    </table>
                    <br />";      
            ?>
        </div>
        <div class="grid_12">
            <?php     
            //Set up HTML table.
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Vendor Name</th>
                        <th class='table_head'>Price</th>
                        <th class='table_head'>Feeds</th>
                        <th class='table_head'>Price per Person</th>
                    </tr>
                </thead>
                <tbody>";

            //Echo results in an HTML table.
            while($row_8 = $result_8->fetch(PDO::FETCH_OBJ))
              {
                echo "<tr>";
                echo "<td><a href='" . $row_8->website . "' target=blank>" . $row_8->vendor_name . "</a></td>";
                echo "<td>$" . number_format((float)($row_8->price), 2, '.', '') . "</td>";
                echo "<td>" . $row_8->feeds . "</td>";
                echo "<td>$" . number_format((float)($row_8->price/$row_8->feeds), 2, '.', '') . "</td>";
                echo "</tr>";
              }

                echo "</tbody>
                    </table>";
            ?>    
        </div>
    </div>

    <!-- Footer -->
    <div data-theme="a" data-role="footer" data-position="fixed">
        <!-- Link back to parent table -->
        <div>
            <a href="#tailgate_index" data-transition="slide" data-role="button">Back</a>
        </div>
        <div class="footer">
            <h3>
                Last Updated: 8/20/13
            </h3>
        </div>
        <div class="footer">
            <h3>
                &copy; <a href="../index.html" target "_blank">bogusbarrett</a>
            </h3>
        </div>
    </div>
</div>

<!-- * * * * * * * * * * * * * * * CHICKEN_FINGERS PAGE * * * * * * * * * * * * * * * -->

<div data-role="page" data-theme="a" id="chicken_fingers" data-title="buyouseafood|Chicken Fingers">

    <!-- Navigation Bar -->
    <div data-theme="a" data-role="header">
        <h3>
            buyouseafood
        </h3>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#home" data-transition="slide" data-theme="" data-icon="">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#seafood_index" data-transition="slide" data-theme="" data-icon="">
                        Seafood
                    </a>
                </li>
                <li>
                    <a href="#tailgate_index" data-transition="slide" data-theme="" data-icon=""  class="ui-btn-active ui-state-persist">
                        Tailgate
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div data-role="content">
        <h2 class="grid_12 table_page_header">Chicken Finger Tray Prices</h2>
        <div class="grid_12">
            <?php
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Product</th>
                        <th class='table_head'>Average Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Chicken Fingers</td>";

                        echo "<td>$" . number_format((float)$avgPrice_14, 2, '.', '') . "</td>";
                    echo "</tr>
                    </tbody>
                    </table>
                    <br />";      
            ?>
        </div>
        <div class="grid_12">
            <?php     
            //Set up HTML table.
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Vendor Name</th>
                        <th class='table_head'>Price</th>
                        <th class='table_head'>Feeds</th>
                        <th class='table_head'>Price per Person</th>
                    </tr>
                </thead>
                <tbody>";

            //Echo results in an HTML table.
            while($row_9 = $result_9->fetch(PDO::FETCH_OBJ))
              {
                echo "<tr>";
                echo "<td><a href='" . $row_9->website . "' target=blank>" . $row_9->vendor_name . "</a></td>";
                echo "<td>$" . number_format((float)($row_9->price), 2, '.', '') . "</td>";
                echo "<td>" . $row_9->feeds . "</td>";
                echo "<td>$" . number_format((float)($row_9->price/$row_9->feeds), 2, '.', '') . "</td>";
                echo "</tr>";
              }

                echo "</tbody>
                    </table>";
            ?>    
        </div>
    </div>

    <!-- Footer -->
    <div data-theme="a" data-role="footer" data-position="fixed">
        <!-- Link back to parent table -->
        <div>
            <a href="#tailgate_index" data-transition="slide" data-role="button">Back</a>
        </div>
        <div class="footer">
            <h3>
                Last Updated: 8/20/13
            </h3>
        </div>
        <div class="footer">
            <h3>
                &copy; <a href="../index.html" target "_blank">bogusbarrett</a>
            </h3>
        </div>
    </div>
</div>

<!-- * * * * * * * * * * * * * * * DESSERT PAGE * * * * * * * * * * * * * * * -->

<div data-role="page" data-theme="a" id="dessert" data-title="buyouseafood|Desserts">

    <!-- Navigation Bar -->
    <div data-theme="a" data-role="header">
        <h3>
            buyouseafood
        </h3>
        <div data-role="navbar" data-iconpos="top">
            <ul>
                <li>
                    <a href="#home" data-transition="slide" data-theme="" data-icon="">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#seafood_index" data-transition="slide" data-theme="" data-icon="">
                        Seafood
                    </a>
                </li>
                <li>
                    <a href="#tailgate_index" data-transition="slide" data-theme="" data-icon=""  class="ui-btn-active ui-state-persist">
                        Tailgate
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div data-role="content">
        <h2 class="grid_12 table_page_header">Dessert Tray Prices</h2>
        <div class="grid_12">
            <?php
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Product</th>
                        <th class='table_head'>Average Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dessert</td>";

                        echo "<td>$" . number_format((float)$avgPrice_15, 2, '.', '') . "</td>";
                    echo "</tr>
                    </tbody>
                    </table>
                    <br />";      
            ?>
        </div>
        <div class="grid_12">
            <?php     
            //Set up HTML table.
            echo "<table class='main_table'>
                <thead>
                    <tr>
                        <th class='table_head'>Vendor Name</th>
                        <th class='table_head'>Price</th>
                        <th class='table_head'>Feeds</th>
                        <th class='table_head'>Price per Person</th>
                    </tr>
                </thead>
                <tbody>";

            //Echo results in an HTML table.
            while($row_10 = $result_10->fetch(PDO::FETCH_OBJ))
              {
                echo "<tr>";
                echo "<td><a href='" . $row_10->website . "' target=blank>" . $row_10->vendor_name . "</a></td>";
                echo "<td>$" . number_format((float)($row_10->price), 2, '.', '') . "</td>";
                echo "<td>" . $row_10->feeds . "</td>";
                echo "<td>$" . number_format((float)($row_10->price/$row_10->feeds), 2, '.', '') . "</td>";
                echo "</tr>";
              }

                echo "</tbody>
                    </table>";
            ?>    
       </div>
    </div>

    <!-- Footer -->
    <div data-theme="a" data-role="footer" data-position="fixed">
        <!-- Link back to parent table -->
        <div>
            <a href="#tailgate_index" data-transition="slide" data-role="button">Back</a>
        </div>
        <div class="footer">
            <h3>
                Last Updated: 8/20/13
            </h3>
        </div>
        <div class="footer">
            <h3>
                &copy; <a href="../index.html" target "_blank">bogusbarrett</a>
            </h3>
        </div>
    </div>
</div>

<!-- Facebook JS enabler for the Like button -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

    <script src="external/matchmedia.js"></script>
    <script src="picturefill.js"></script>

<?php 
//Close connection.
$db = NULL;
?>
</body>
</html>
