<?php 
require_once("database.php");

//****************************** MAIN TABLE QUERIES
//Live crawfish
$result_1 = $db->query("SELECT * FROM vendors v INNER JOIN prices p ON v.vendor_id=p.vendor_id INNER JOIN products pr ON pr.product_id=p.product_id WHERE pr.product_id=1 AND p.price!=0 ORDER BY p.price");

//Boiled crawfish
$result_2 = $db->query("SELECT * FROM vendors v INNER JOIN prices p ON v.vendor_id=p.vendor_id INNER JOIN products pr ON pr.product_id=p.product_id WHERE pr.product_id=2 AND p.price!=0 ORDER BY p.price");

//Shrimp
$result_3 = $db->query("SELECT * FROM vendors v INNER JOIN prices p ON v.vendor_id=p.vendor_id INNER JOIN products pr ON pr.product_id=p.product_id WHERE pr.product_id BETWEEN 3 AND 6 AND p.price!=0 ORDER BY pr.product_id, p.price");

//Crabs
$result_4 = $db->query("SELECT * FROM vendors v INNER JOIN prices p ON v.vendor_id=p.vendor_id INNER JOIN products pr ON pr.product_id=p.product_id WHERE pr.product_id BETWEEN 7 AND 9 AND p.price!=0 ORDER BY pr.product_id, p.price");

//Oysters
$result_5 = $db->query("SELECT * FROM vendors v INNER JOIN prices p ON v.vendor_id=p.vendor_id INNER JOIN products pr ON pr.product_id=p.product_id WHERE pr.product_id=10 AND p.price!=0 ORDER BY p.price");

//Sandwich Tray
$result_6 = $db->query("SELECT * FROM vendors v INNER JOIN prices p ON v.vendor_id=p.vendor_id INNER JOIN products pr ON pr.product_id=p.product_id WHERE pr.product_id=11 AND p.price!=0 ORDER BY p.price");

//Seafood Tray
$result_7 = $db->query("SELECT * FROM vendors v INNER JOIN prices p ON v.vendor_id=p.vendor_id INNER JOIN products pr ON pr.product_id=p.product_id WHERE pr.product_id=12 AND p.price!=0 ORDER BY p.price");

//Boudin Ball Tray
$result_8 = $db->query("SELECT * FROM vendors v INNER JOIN prices p ON v.vendor_id=p.vendor_id INNER JOIN products pr ON pr.product_id=p.product_id WHERE pr.product_id=13 AND p.price!=0 ORDER BY p.price");

//Chicken Finger Tray
$result_9 = $db->query("SELECT * FROM vendors v INNER JOIN prices p ON v.vendor_id=p.vendor_id INNER JOIN products pr ON pr.product_id=p.product_id WHERE pr.product_id=14 AND p.price!=0 ORDER BY p.price");

//Dessert Tray
$result_10 = $db->query("SELECT * FROM vendors v INNER JOIN prices p ON v.vendor_id=p.vendor_id INNER JOIN products pr ON pr.product_id=p.product_id WHERE pr.product_id=15 AND p.price!=0 ORDER BY p.price");

//****************************** AVERAGE PRICE CALCULATIONS

$avgPrice_1 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=1")->fetchColumn();
$avgPrice_2 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=2")->fetchColumn();
$avgPrice_3 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=3")->fetchColumn();
$avgPrice_4 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=4")->fetchColumn();
$avgPrice_5 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=5")->fetchColumn();
$avgPrice_6 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=6")->fetchColumn();
$avgPrice_7 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=7")->fetchColumn();
$avgPrice_8 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=8")->fetchColumn();
$avgPrice_9 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=9")->fetchColumn();
$avgPrice_10 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=10")->fetchColumn();
$avgPrice_11 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=11")->fetchColumn();
$avgPrice_12 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=12")->fetchColumn();
$avgPrice_13 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=13")->fetchColumn();
$avgPrice_14 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=14")->fetchColumn();
$avgPrice_15 = $db->query("SELECT AVG(price) FROM prices WHERE product_id=15")->fetchColumn();

//****************************** GENERATE GRAPHS for Avg Seafood Prices

/* pChart library inclusions */
include("pChart2.1.3/class/pDraw.class.php");
include("pChart2.1.3/class/pImage.class.php");
include("pChart2.1.3/class/pData.class.php");

/* Create and populate the pData object */
$myData = new pData();

/* Query for products */
$chart_query_1 = $db->query("SELECT * FROM avg_prices WHERE product_id=1 ORDER BY week");
$chart_query_2 = $db->query("SELECT * FROM avg_prices WHERE product_id=2 ORDER BY week");
$chart_query_3 = $db->query("SELECT * FROM avg_prices WHERE product_id=3 ORDER BY week");
$chart_query_4 = $db->query("SELECT * FROM avg_prices WHERE product_id=4 ORDER BY week");
$chart_query_5 = $db->query("SELECT * FROM avg_prices WHERE product_id=5 ORDER BY week");
$chart_query_6 = $db->query("SELECT * FROM avg_prices WHERE product_id=6 ORDER BY week");
$chart_query_7 = $db->query("SELECT * FROM avg_prices WHERE product_id=7 ORDER BY week");
$chart_query_8 = $db->query("SELECT * FROM avg_prices WHERE product_id=8 ORDER BY week");
$chart_query_9 = $db->query("SELECT * FROM avg_prices WHERE product_id=9 ORDER BY week");
$chart_query_10 = $db->query("SELECT * FROM avg_prices WHERE product_id=10 ORDER BY week");

/* Set fetch type */
$chart_query_1->setFetchMode(PDO::FETCH_ASSOC);
$chart_query_2->setFetchMode(PDO::FETCH_ASSOC);
$chart_query_3->setFetchMode(PDO::FETCH_ASSOC);
$chart_query_4->setFetchMode(PDO::FETCH_ASSOC);
$chart_query_5->setFetchMode(PDO::FETCH_ASSOC);
$chart_query_6->setFetchMode(PDO::FETCH_ASSOC);
$chart_query_7->setFetchMode(PDO::FETCH_ASSOC);
$chart_query_8->setFetchMode(PDO::FETCH_ASSOC);
$chart_query_9->setFetchMode(PDO::FETCH_ASSOC);
$chart_query_10->setFetchMode(PDO::FETCH_ASSOC);

/* Push the results of the query to an array */
$week_1="";
$avg_price_1=""; //average price of product_id=1

while($row_chart_1 = $chart_query_1->fetch()) {
    $week_1[] = $row_chart_1["week"];
    $avg_price_1[] = $row_chart_1["avg_price"];
}

/* Push the results of the query to an array */
$avg_price_2=""; //average price of product_id=2

while($row_chart_2 = $chart_query_2->fetch()) {
    $avg_price_2[] = $row_chart_2["avg_price"];
}

/* Push the results of the query to an array */
$avg_price_3=""; //average price of product_id=3

while($row_chart_3 = $chart_query_3->fetch()) {
    $avg_price_3[] = $row_chart_3["avg_price"];
}

/* Push the results of the query to an array */
$avg_price_4=""; //average price of product_id=4

while($row_chart_4 = $chart_query_4->fetch()) {
    $avg_price_4[] = $row_chart_4["avg_price"];
}

/* Push the results of the query to an array */
$avg_price_5=""; //average price of product_id=5

while($row_chart_5 = $chart_query_5->fetch()) {
    $avg_price_5[] = $row_chart_5["avg_price"];
}

/* Push the results of the query to an array */
$avg_price_6=""; //average price of product_id=6

while($row_chart_6 = $chart_query_6->fetch()) {
    $avg_price_6[] = $row_chart_6["avg_price"];
}

/* Push the results of the query to an array */
$avg_price_7=""; //average price of product_id=7

while($row_chart_7 = $chart_query_7->fetch()) {
    $avg_price_7[] = $row_chart_7["avg_price"];
}

/* Push the results of the query to an array */
$avg_price_8=""; //average price of product_id=8

while($row_chart_8 = $chart_query_8->fetch()) {
    $avg_price_8[] = $row_chart_8["avg_price"];
}

/* Push the results of the query to an array */
$avg_price_9=""; //average price of product_id=9

while($row_chart_9 = $chart_query_9->fetch()) {
    $avg_price_9[] = $row_chart_9["avg_price"];
}

/* Push the results of the query to an array */
$avg_price_10=""; //average price of product_id=10

while($row_chart_10 = $chart_query_10->fetch()) {
    $avg_price_10[] = $row_chart_10["avg_price"];
}
 
/* Save the data in the pData array */
$myData->addPoints($avg_price_1,"Live Crawfish"); //name used in the legend 
$myData->addPoints($avg_price_2,"Boiled Crawfish");
$myData->addPoints($avg_price_3,"Jumbo Shrimp");
$myData->addPoints($avg_price_4,"Lg Shrimp");
$myData->addPoints($avg_price_5,"Med Shrimp");
$myData->addPoints($avg_price_6,"Boiled Shrimp");
$myData->addPoints($avg_price_7,"Lg Crabs");
$myData->addPoints($avg_price_8,"Med Crabs");
$myData->addPoints($avg_price_9,"Boiled Crabs");
$myData->addPoints($avg_price_10,"Oysters");
$myData->addPoints($week_1,"Weeks"); //only need one weeks array

/* Put the week_print column on the abscissa axis */
$myData->setAbscissa("Weeks");

/* Y axis will be dedicated to $USD */
$myData->setAxisName(0,"Dollars");
$myData->setAxisUnit(0,"$");

/* Create the pChart object */
$myPicture = new pImage(1200, 393, $myData);

/* Turn of Antialiasing */
$myPicture->Antialias = FALSE;

/* Add a border to the picture */
$myPicture->drawRectangle(0, 0, 1199, 392, array("R"=>0, "G"=>0, "B"=>0));

/* Write the chart title */ 
$myPicture->setFontProperties(array("FontName"=>"pChart2.1.3/fonts/Forgotte.ttf","FontSize"=>11));
$myPicture->drawText(200, 35, "Average Seafood Price by Week", array("FontSize"=>20, "Align"=>TEXT_ALIGN_BOTTOMMIDDLE));

/* Set the default font */
$myPicture->setFontProperties(array("FontName"=>"pChart2.1.3/fonts/pf_arma_five.ttf", "FontSize"=>8)); //font size for legend

/* Define the chart area */
$myPicture->setGraphArea(60, 40, 1140, 350);

/* Draw the scale */
$scaleSettings = array("XMargin"=>10, "YMargin"=>10, "Floating"=>TRUE, "GridR"=>200, "GridG"=>200, "GridB"=>200, "DrawSubTicks"=>TRUE, "CycleBackground"=>TRUE);
$myPicture->drawScale($scaleSettings);

/* Turn on Antialiasing */
$myPicture->Antialias = TRUE;

/* Draw the line chart */
$myPicture->drawLineChart();

/* Write the chart legend */
$myPicture->drawLegend(405, 22, array("Style"=>LEGEND_NOBORDER, "Mode"=>LEGEND_HORIZONTAL));

/* Save the graph to the server */
$myPicture->Render("external/img/graph.png");

?>