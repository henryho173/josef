header("Access-Control-Allow-Origin: *");
header("content-type: application/json");
echo file_get_contents($_REQUEST['f'].".json");

$.getJSON("https://henryho173.github.io/josef/models/Data/josef.json", function(json) {
    console.log(json);
});
