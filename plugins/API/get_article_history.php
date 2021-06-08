<?php

//$articleId = 93;
//
//$articleDao = &DAORegistry::getDAO('ArticleDAO');
//$article = &$articleDao->getArticle($articleId);

//include_once ('../../config.inc.php');

//driver = mysql
$host = 'localhost';
$username = 'zwjqfztqsq';
$password = "8aEFFZwxJh";
$name = 'zwjqfztqsq';

$conn = mysqli_connect($host,$username,$password,$name) or die(mysqli_error($conn));
$article_id = $_POST['publication_id'];

$query = "select a.article_id, DATE_FORMAT(DATE(a.date_submitted),'%d-%m-%Y') as submission_date , DATE_FORMAT(DATE(p.date_published),'%d-%m-%Y') as published_date from articles a 
LEFT JOIN published_articles p ON a.article_id = p.article_id
WHERE a.article_id = $article_id";

$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)){
    $row = mysqli_fetch_assoc($result);
}
else{
    $row['published_date']="NA";
    $row['submission_date']="NA";
}



echo json_encode($row);

?>