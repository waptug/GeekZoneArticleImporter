<?php
/**
 * Operations of the plugin are included here. 
 *
 * @since 1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
//


/*
try {
  echo $thisVariableIsNotSet;
  inexistentFunctionInvoked();
} catch (Error $e) {
  echo "Error: $e->getMessage()";
}
// Error: Call to undefined function inexistentFunctionInvoked();
*/

/*

function myErrorHandler($errno, $errstr, $errfile, $errline) {
  echo "An error occurred in line {$errline} of file {$errfile} with message {$errstr}";
}
​
set_error_handler("myErrorHandler");
​
try {
  5 / 0;
} catch (Throwable $e) {
  echo $e->getMessage();
}
​
// An error occurred in line 1 of file /index with message Division by zero

*/

//define('MY_WP_PATH', '/home3/mygee4dx/leadspidea.com/plr/100000articles-PLR-articles/Demo/');

$userID=1;

//define('BASE_ARTICLE_PATH','c:\\\\Users\\waptu\\Local Sites\\testblog\\app\\public\\wp-content\\uploads\\');
define('BASE_ARTICLE_PATH','c:\\\\Users\\waptu\\Local Sites\\testblog\\app\\public\\100000articles-PLR-articles\\');
//define('TARGET_FILE', '7_Benefits_Of_Building_Niche_Blogs.txt');//
// echo file_get_contents(MY_WP_PATH . TARGET_FILE);
//echo "<br>";


function fileprocessor($filepath)
{
//define('FILE_LOCATION',$filepath);

//echo "<p style='color:yellow;'>".FILE_LOCATION."</p>";
//echo "<p style='color:brown;'>".$filepath."</p>";


 $userID=1;
 $a="";
 $a=array();
//$file = fopen(MY_WP_PATH . TARGET_FILE, "r");

$file = fopen($filepath, "r")or die("Unable to connect to $filepath");

//Output lines until EOF is reached
while(! feof($file)) {
  $line = fgets($file);
  array_push($a,$line);//fills array with lines from file
  //echo $line. "<br>";
}

fclose($file);//Close File and just deal with the array $a

//print_r($a);//Dump values of each array item.
//echo "<br><br><b>Number of lines in this file=".count($a)."</b><br>";


$TotalLines=count($a);//Determins number of total lines in the array

//echo "<br><br><b>Number of Total Lines in this file=".$TotalLines."</b><br>";

//Extract Section Titles and content from Array

$z=0;
echo "<br><p>";
foreach ($a as $value) {

//Search for Title: 

$pattern = "/Title:/i";
if(preg_match($pattern, $value)==1){ 
  echo "<u>Line $z = $value </u><br>";
  $Title=$a[$z+1];
  }

//Search for Word Count:

  $pattern = "/Word Count:/i";
  if(preg_match($pattern, $value)==1){ 
  echo "<u>Line $z = $value </u><br>";
  $WordCount=$a[$z+1];
  }
  
//Search for Summery

  $pattern = "/Summary:/i";
  if(preg_match($pattern, $value)==1){ 
  echo "<u>Line $z = $value </u><br>";
  $Summary=$a[$z+1];
  }

//Search for Keywords

  $pattern = "/Keywords:/i";
  if(preg_match($pattern, $value)==1){ 
  echo "<u>Line $z = $value </u><br>";
  $Keywords=$a[$z+1];
  }

//Search for Article Body:

  $pattern = "/Article Body:/i";
  if(preg_match($pattern, $value)==1){ 
  echo "<u>Line $z = $value </u><br>";
  $ArticleBody=$a[$z+1];
  $StartOfArticleBody=$z+1;
  }
  else
  {echo "Line $z = $value <br>";
  }
  $z++;
}
echo "</p></br>";

//Print extracted Section Titles and Content

//$date, $author, $title, $short_story, $full_story, $avatar

echo "<br><p><b>";
$oneDay=60*60*24;

$post_date=time()-$oneDay;
echo "Date: = ".$post_date."<br>";
echo "User ID = ".$userID."<br>";
echo "Title = ". $Title."<br>";
echo "Summary = ".$Summary."<br>";
echo "Word Count =".$WordCount."<br>";
echo "Keywords =".$Keywords."<br>";
echo "Article Body =".$ArticleBody."<br>";


//Print out rest of Article Body Section Lines

echo '<p style="color:red;">';
for($BodyLines=$StartOfArticleBody;$BodyLines < $TotalLines;$BodyLines++){
echo $a[$BodyLines]."<br>";



}
echo "</p>";

//Remove header lines from array to isolate article body content.

for($p=0;$p<=$StartOfArticleBody-1;$p++){array_shift($a);}
$ArticleBodyMaster = implode("<br> ",$a);//Add array values into a single string.

//
echo "<p style='color:blue;'>".$ArticleBodyMaster."</p>";//Print impolded array

$articleToImport=$post_date.'|'.$userID.'|'.$Title.'|'.$Summary.'|'.$ArticleBodyMaster.'|'.'';

echo '<br>Convert file to cuteformat<br>';
echo '<p style="color:purple;">'.$articleToImport.'</p>';
echo '<br>Import to WP<br>';
import_to_blog_post($articleToImport);
echo '<br>Import Completed<br>';

//echo "</b></p></br>";
//print_r($a);//Dump values of each array item.
//echo "<br><br>";


}//End of fileprocessor function
//=======================================================

//Interate through and Display all files from base path down recursively
//https://stackoverflow.com/questions/25909820/how-to-recursively-iterate-through-files-in-php/25909955
$articlesProcessed=0;
$path = realpath(BASE_ARTICLE_PATH);
$filelisting=array();
$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
foreach($objects as $name => $object){
    echo "<p style='color:blue;'>"."$name\n<br>";


      array_push($filelisting,$name);
    
      $pattern = "/txt/i";//check for .txt at end of file name to make sure it is a text file, i means case insensitive

      if(preg_match($pattern, $name)===1){ 


      fileprocessor($name);//Call file parsing function for each file found.
    
    
      echo "<p style='color:green'>Article Processed Successfully</p>";  
    }


    $pattern = "/txt/i";//check for .txt at end of file name to make sure it is a text file, i means case insensitive

      if(preg_match($pattern, $name)===0){ 
    echo "<p style='color:red'>File Path is not an article so not processed</p>";
      }


      $articlesProcessed++;//increment articles processed counter
}

//after function runs on all articles then report success.

echo "<br>Articles Processed ".$articlesProcessed;
echo "<br>Processing Completed";
?>









<?php

function import_to_blog_post($articlContent){
echo '<br>import_to_blog_post called<br>';

//define('MY_WP_PATH', '/home3/mygee4dx/leadspidea.com/Internet_Marketing/');
define('MY_WP_PATH','c:\\\\Users\\waptu\\Local Sites\\testblog\\app\\public\\');

//define('CUTENEWS_FILE', '_One_Niche_You_re_Rich_.txt');
//define('CUTENEWS_FILE', '_One_Niche_You_re_Rich_.txt');

require_once( MY_WP_PATH . '/wp-load.php' );

//$all_news = array_reverse(file(CUTENEWS_FILE));
$all_news = $articlContent;

$tidy_config = array(
    'indent' => TRUE,
    'output-xhtml' => TRUE,
	'drop-font-tags' => 'yes',
	'drop-empty-paras' => 'yes',
	'quote-ampersand' => 'yes',
	'quote-marks' => 'yes',
	'drop-proprietary-attributes' => 'yes',
	'logical-emphasis' => 'yes',
	'show-body-only' => TRUE,
	'wrap' => 0,
);

$user_ID = 1;
//foreach ($all_news as $news) {
$news=$all_news;

    list($date, $author, $title, $short_story, $full_story, $avatar) = explode('|', $news);

	$tidy = tidy_parse_string($title, $tidy_config, 'ascii');
	$tidy->cleanRepair();
	$title = $tidy;
	unset($tidy);

	$story = empty($full_story) ? $short_story : $full_story;
	$story = str_replace('{nl}', '', $story); // remove new line tag from cute news

	$tidy = tidy_parse_string($story, $tidy_config, 'ascii');
	$tidy->cleanRepair();
	$story = $tidy;
	unset($tidy);

	$story = preg_replace('#<p>\s*&nbsp;\s*</p>#im', '', $story); // remove empty paragraphs

    $new_post = array(
        'post_title'    => $title,
        'post_content'  => $story,
        'post_status'   => 'publish',
        'post_date'     => date('Y-m-d H:i:s', $date),
        'post_author'   => $user_ID,
        'post_type'     => 'post',
        'post_category' => array(0)
    );
    $post_id = wp_insert_post($new_post);

	echo 'New Post ID='.$post_id . '<br>';



}//End of function 

?>

</body>
</html>