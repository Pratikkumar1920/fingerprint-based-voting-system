<?php
require_once("inc/header.php");
require_once("inc/navigation.php");

if(isset($_GET['homepage']))
{
    require_once("inc/homepage.php");

}
if(isset($_GET['addElectionPage']))
{
    require_once("inc/add_elections.php");
    
}elseif(isset($_GET['addCandidatePage'])){
    require_once("inc/add_candidates.php");
}
?>
<?php
require_once("inc/footer.php");
?>