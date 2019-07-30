<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
require_once(dirname(__FILE__) . '/extlib/vdaemon/vdaemon.php');
require_once(dirname(__FILE__) . '/core/config.php');
?>
<?php
session_start();
?>
<?php
$mysqli = new mysqli("localhost");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "</br>";

$user=$_SESSION["user_name"];

$query = "SELECT * FROM  WHERE county_Name='$countyName' ORDER BY ID";

if ($result = $mysqli->query($query)) {

    /* fetch object array */
    while ($obj = $result->fetch_object()) {
	$e001_1= $obj->{'standardA001'};$e001_2= $obj->{'standardI001'};$e001_3= $obj->{'comments001'}; 
	$e002_1= $obj->{'standardA002'};$e002_2= $obj->{'standardI002'};$e002_3= $obj->{'comments002'}; 
	$e003_1= $obj->{'standardA003'};$e003_2= $obj->{'standardI003'};$e003_3= $obj->{'comments003'}; 
	$e004_1= $obj->{'standardA004'};$e004_2= $obj->{'standardI004'};$e004_3= $obj->{'comments004'}; 
	$e005_1= $obj->{'standardA005'};$e005_2= $obj->{'standardI005'};$e005_3= $obj->{'comments005'}; 
	$e006_1= $obj->{'standardA006'};$e006_2= $obj->{'standardI006'};$e006_3= $obj->{'comments006'}; 
	$e007_1= $obj->{'standardA007'};$e007_2= $obj->{'standardI007'};$e007_3= $obj->{'comments007'}; 
	$e008_1= $obj->{'standardA008'};$e008_2= $obj->{'standardI008'};$e008_3= $obj->{'comments008'}; 
	$e009_1= $obj->{'standardA009'};$e009_2= $obj->{'standardI009'};$e009_3= $obj->{'comments009'}; 
	$e010_1= $obj->{'standardA010'};$e010_2= $obj->{'standardI010'};$e010_3= $obj->{'comments010'}; 
	$e011_1= $obj->{'standardA011'};$e011_2= $obj->{'standardI011'};$e011_3= $obj->{'comments011'}; 
	$e012_1= $obj->{'standardA012'};$e012_2= $obj->{'standardI012'};$e012_3= $obj->{'comments012'};
	$e013_1= $obj->{'standardA013'};$e013_2= $obj->{'standardI013'};$e013_3= $obj->{'comments013'}; 
	$e014_1= $obj->{'standardA014'};$e014_2= $obj->{'standardI014'};$e014_3= $obj->{'comments014'}; 
	$e015_1= $obj->{'standardA015'};$e015_2= $obj->{'standardI015'};$e015_3= $obj->{'comments015'}; 
	$e016_1= $obj->{'standardA016'};$e016_2= $obj->{'standardI016'};$e016_3= $obj->{'comments016'}; 
	$e017_1= $obj->{'standardA017'};$e017_2= $obj->{'standardI017'};$e017_3= $obj->{'comments017'}; 
	$e018_1= $obj->{'standardA018'};$e018_2= $obj->{'standardI018'};$e018_3= $obj->{'comments018'}; 
	$e019_1= $obj->{'standardA019'};$e019_2= $obj->{'standardI019'};$e019_3= $obj->{'comments019'}; 
	$e020_1= $obj->{'standardA020'};$e020_2= $obj->{'standardI020'};$e020_3= $obj->{'comments020'}; 
	$e021_1= $obj->{'standardA021'};$e021_2= $obj->{'standardI021'};$e021_3= $obj->{'comments021'}; 
	$e022_1= $obj->{'standardA022'};$e022_2= $obj->{'standardI022'};$e022_3= $obj->{'comments022'}; 
	$e023_1= $obj->{'standardA023'};$e023_2= $obj->{'standardI023'};$e023_3= $obj->{'comments023'}; 
	$e024_1= $obj->{'standardA024'};$e024_2= $obj->{'standardI024'};$e024_3= $obj->{'comments024'};
	$e025_1= $obj->{'standardA025'};$e025_2= $obj->{'standardI025'};$e025_3= $obj->{'comments025'}; 
	$e026_1= $obj->{'standardA026'};$e026_2= $obj->{'standardI026'};$e026_3= $obj->{'comments026'}; 
	$e027_1= $obj->{'standardA027'};$e027_2= $obj->{'standardI027'};$e027_3= $obj->{'comments027'}; 
	$e028_1= $obj->{'standardA028'};$e028_2= $obj->{'standardI028'};$e028_3= $obj->{'comments028'};
	$e029_1= $obj->{'standardA029'};$e029_2= $obj->{'standardI029'};$e029_3= $obj->{'comments029'}; 
	$e030_1= $obj->{'standardA030'};$e030_2= $obj->{'standardI030'};$e030_3= $obj->{'comments030'}; 
	$e031_1= $obj->{'standardA031'};$e031_2= $obj->{'standardI031'};$e031_3= $obj->{'comments031'}; 
	$e032_1= $obj->{'standardA032'};$e032_2= $obj->{'standardI032'};$e032_3= $obj->{'comments032'}; 
	$e033_1= $obj->{'standardA033'};$e033_2= $obj->{'standardI033'};$e033_3= $obj->{'comments033'}; 
	$e034_1= $obj->{'standardA034'};$e034_2= $obj->{'standardI034'};$e034_3= $obj->{'comments034'}; 
	$e035_1= $obj->{'standardA035'};$e035_2= $obj->{'standardI035'};$e035_3= $obj->{'comments035'}; 
	$e036_1= $obj->{'standardA036'};$e036_2= $obj->{'standardI036'};$e036_3= $obj->{'comments036'}; 
	$e037_1= $obj->{'standardA037'};$e037_2= $obj->{'standardI037'};$e037_3= $obj->{'comments037'}; 
	$e038_1= $obj->{'standardA038'};$e038_2= $obj->{'standardI038'};$e038_3= $obj->{'comments038'}; 
	$e039_1= $obj->{'standardA039'};$e039_2= $obj->{'standardI039'};$e039_3= $obj->{'comments039'}; 
	$e040_1= $obj->{'standardA040'};$e040_2= $obj->{'standardI040'};$e040_3= $obj->{'comments040'}; 
	$e041_1= $obj->{'standardA041'};$e041_2= $obj->{'standardI041'};$e041_3= $obj->{'comments041'}; 
	$e042_1= $obj->{'standardA042'};$e042_2= $obj->{'standardI042'};$e042_3= $obj->{'comments042'}; 
	$e043_1= $obj->{'standardA043'};$e043_2= $obj->{'standardI043'};$e043_3= $obj->{'comments043'}; 
	$e044_1= $obj->{'standardA044'};$e044_2= $obj->{'standardI044'};$e044_3= $obj->{'comments044'};
	$e045_1= $obj->{'standardA045'};$e045_2= $obj->{'standardI045'};$e045_3= $obj->{'comments045'}; 
	$e046_1= $obj->{'standardA046'};$e046_2= $obj->{'standardI046'};$e046_3= $obj->{'comments046'}; 
	$e047_1= $obj->{'standardA047'};$e047_2= $obj->{'standardI047'};$e047_3= $obj->{'comments047'}; 
	$e048_1= $obj->{'standardA048'};$e048_2= $obj->{'standardI048'};$e048_3= $obj->{'comments048'}; 
	$e049_1= $obj->{'standardA049'};$e049_2= $obj->{'standardI049'};$e049_3= $obj->{'comments049'};
	$e050_1= $obj->{'standardA050'};$e050_2= $obj->{'standardI050'};$e050_3= $obj->{'comments050'}; 
	$e051_1= $obj->{'standardA051'};$e051_2= $obj->{'standardI051'};$e051_3= $obj->{'comments051'}; 
	$e052_1= $obj->{'standardA052'};$e052_2= $obj->{'standardI052'};$e052_3= $obj->{'comments052'}; 
	$e053_1= $obj->{'standardA053'};$e053_2= $obj->{'standardI053'};$e053_3= $obj->{'comments053'}; 
	$e054_1= $obj->{'standardA054'};$e054_2= $obj->{'standardI054'};$e054_3= $obj->{'comments054'}; 
	$e055_1= $obj->{'standardA055'};$e055_2= $obj->{'standardI055'};$e055_3= $obj->{'comments055'}; 
	$e056_1= $obj->{'standardA056'};$e056_2= $obj->{'standardI056'};$e056_3= $obj->{'comments056'}; 
	$e057_1= $obj->{'standardA057'};$e057_2= $obj->{'standardI057'};$e057_3= $obj->{'comments057'}; 
	$e058_1= $obj->{'standardA058'};$e058_2= $obj->{'standardI058'};$e058_3= $obj->{'comments058'}; 
	$e059_1= $obj->{'standardA059'};$e059_2= $obj->{'standardI059'};$e059_3= $obj->{'comments059'}; 
	$e060_1= $obj->{'standardA060'};$e060_2= $obj->{'standardI060'};$e060_3= $obj->{'comments060'}; 
	$e061_1= $obj->{'standardA061'};$e061_2= $obj->{'standardI061'};$e061_3= $obj->{'comments061'}; 
	$e062_1= $obj->{'standardA062'};$e062_2= $obj->{'standardI062'};$e062_3= $obj->{'comments062'}; 
	$e063_1= $obj->{'standardA063'};$e063_2= $obj->{'standardI063'};$e063_3= $obj->{'comments063'}; 
	$e064_1= $obj->{'standardA064'};$e064_2= $obj->{'standardI064'};$e064_3= $obj->{'comments064'}; 
	$e065_1= $obj->{'standardA065'};$e065_2= $obj->{'standardI065'};$e065_3= $obj->{'comments065'}; 
	$e066_1= $obj->{'standardA066'};$e066_2= $obj->{'standardI066'};$e066_3= $obj->{'comments066'}; 
	$e067_1= $obj->{'standardA067'};$e067_2= $obj->{'standardI067'};$e067_3= $obj->{'comments067'}; 
	$e068_1= $obj->{'standardA068'};$e068_2= $obj->{'standardI068'};$e068_3= $obj->{'comments069'}; 
    $e069_1= $obj->{'standardA069'};$e069_2= $obj->{'standardI069'};$e069_3= $obj->{'comments069'};
    $e070_1= $obj->{'standardA070'};$e070_2= $obj->{'standardI070'};$e070_3= $obj->{'comments070'};
    $e071_1= $obj->{'standardA071'};$e071_2= $obj->{'standardI071'};$e071_3= $obj->{'comments071'};
    $e072_1= $obj->{'standardA072'};$e072_2= $obj->{'standardI072'};$e072_3= $obj->{'comments072'};
    $e073_1= $obj->{'standardA073'};$e073_2= $obj->{'standardI073'};$e073_3= $obj->{'comments073'};
    $e074_1= $obj->{'standardA074'};$e074_2= $obj->{'standardI074'};$e074_3= $obj->{'comments074'};
    $e075_1= $obj->{'standardA075'};$e075_2= $obj->{'standardI075'};$e075_3= $obj->{'comments075'};
    $e076_1= $obj->{'standardA076'};$e076_2= $obj->{'standardI076'};$e076_3= $obj->{'comments076'};
    $e077_1= $obj->{'standardA077'};$e077_2= $obj->{'standardI077'};$e077_3= $obj->{'comments077'};
    $e078_1= $obj->{'standardA078'};$e078_2= $obj->{'standardI078'};$e078_3= $obj->{'comments078'};
    $e079_1= $obj->{'standardA079'};$e079_2= $obj->{'standardI079'};$e079_3= $obj->{'comments079'};
    $e080_1= $obj->{'standardA080'};$e080_2= $obj->{'standardI080'};$e080_3= $obj->{'comments080'};
    $e081_1= $obj->{'standardA081'};$e081_2= $obj->{'standardI081'};$e081_3= $obj->{'comments081'};
    $e082_1= $obj->{'standardA082'};$e082_2= $obj->{'standardI082'};$e082_3= $obj->{'comments082'};
    $e083_1= $obj->{'standardA083'};$e083_2= $obj->{'standardI083'};$e083_3= $obj->{'comments083'};
    $e084_1= $obj->{'standardA084'};$e084_2= $obj->{'standardI084'};$e084_3= $obj->{'comments084'};
    $e085_1= $obj->{'standardA085'};$e085_2= $obj->{'standardI085'};$e085_3= $obj->{'comments085'};
    $e086_1= $obj->{'standardA086'};$e086_2= $obj->{'standardI086'};$e086_3= $obj->{'comments086'};
    $e087_1= $obj->{'standardA087'};$e087_2= $obj->{'standardI087'};$e087_3= $obj->{'comments087'};
    $e088_1= $obj->{'standardA088'};$e088_2= $obj->{'standardI088'};$e088_3= $obj->{'comments088'};
    $e089_1= $obj->{'standardA089'};$e089_2= $obj->{'standardI089'};$e089_3= $obj->{'comments089'};
    $e090_1= $obj->{'standardA090'};$e090_2= $obj->{'standardI090'};$e090_3= $obj->{'comments090'};
    $e091_1= $obj->{'standardA091'};$e091_2= $obj->{'standardI091'};$e091_3= $obj->{'comments091'};
    $e092_1= $obj->{'standardA092'};$e092_2= $obj->{'standardI092'};$e092_3= $obj->{'comments092'};
    $e093_1= $obj->{'standardA093'};$e093_2= $obj->{'standardI093'};$e093_3= $obj->{'comments093'};
    $e094_1= $obj->{'standardA094'};$e094_2= $obj->{'standardI094'};$e094_3= $obj->{'comments094'};
    $e095_1= $obj->{'standardA095'};$e095_2= $obj->{'standardI095'};$e095_3= $obj->{'comments095'};
    $e096_1= $obj->{'standardA096'};$e096_2= $obj->{'standardI096'};$e096_3= $obj->{'comments096'};
    $e097_1= $obj->{'standardA097'};$e097_2= $obj->{'standardI097'};$e097_3= $obj->{'comments097'};
    $e098_1= $obj->{'standardA098'};$e098_2= $obj->{'standardI098'};$e098_3= $obj->{'comments098'};
    $e099_1= $obj->{'standardA099'};$e099_2= $obj->{'standardI099'};$e099_3= $obj->{'comments099'};
    $e100_1= $obj->{'standardA100'};$e100_2= $obj->{'standardI100'};$e100_3= $obj->{'comments100'};
    $e101_1= $obj->{'standardA101'};$e101_2= $obj->{'standardI101'};$e101_3= $obj->{'comments101'};
    $e102_1= $obj->{'standardA102'};$e102_2= $obj->{'standardI102'};$e102_3= $obj->{'comments102'};
    $e103_1= $obj->{'standardA103'};$e103_2= $obj->{'standardI103'};$e103_3= $obj->{'comments103'};
    $e104_1= $obj->{'standardA104'};$e104_2= $obj->{'standardI104'};$e104_3= $obj->{'comments104'};
    $e105_1= $obj->{'standardA105'};$e105_2= $obj->{'standardI105'};$e105_3= $obj->{'comments105'};
    $e106_1= $obj->{'standardA106'};$e106_2= $obj->{'standardI106'};$e106_3= $obj->{'comments106'};
    $e107_1= $obj->{'standardA107'};$e107_2= $obj->{'standardI107'};$e107_3= $obj->{'comments107'};
    $e108_1= $obj->{'standardA108'};$e108_2= $obj->{'standardI108'};$e108_3= $obj->{'comments108'};
    $e109_1= $obj->{'standardA109'};$e109_2= $obj->{'standardI109'};$e109_3= $obj->{'comments109'};
    $e110_1= $obj->{'standardA110'};$e110_2= $obj->{'standardI110'};$e110_3= $obj->{'comments110'};
    $e111_1= $obj->{'standardA111'};$e111_2= $obj->{'standardI111'};$e111_3= $obj->{'comments111'};
    $e112_1= $obj->{'standardA112'};$e112_2= $obj->{'standardI112'};$e112_3= $obj->{'comments112'};
    $e113_1= $obj->{'standardA113'};$e113_2= $obj->{'standardI113'};$e113_3= $obj->{'comments113'};
    $e114_1= $obj->{'standardA114'};$e114_2= $obj->{'standardI114'};$e114_3= $obj->{'comments114'};
    $e115_1= $obj->{'standardA115'};$e115_2= $obj->{'standardI115'};$e115_3= $obj->{'comments115'};
    $e116_1= $obj->{'standardA116'};$e116_2= $obj->{'standardI116'};$e116_3= $obj->{'comments116'};
    $e117_1= $obj->{'standardA117'};$e117_2= $obj->{'standardI117'};$e117_3= $obj->{'comments117'};
    $e118_1= $obj->{'standardA118'};$e118_2= $obj->{'standardI118'};$e118_3= $obj->{'comments118'};
    $e119_1= $obj->{'standardA119'};$e119_2= $obj->{'standardI119'};$e119_3= $obj->{'comments119'};
    $e120_1= $obj->{'standardA120'};$e120_2= $obj->{'standardI120'};$e120_3= $obj->{'comments120'};
    $e121_1= $obj->{'standardA121'};$e121_2= $obj->{'standardI121'};$e121_3= $obj->{'comments121'};
    $e122_1= $obj->{'standardA122'};$e122_2= $obj->{'standardI122'};$e122_3= $obj->{'comments122'};
    $e123_1= $obj->{'standardA123'};$e123_2= $obj->{'standardI123'};$e123_3= $obj->{'comments123'};
    $e124_1= $obj->{'standardA124'};$e124_2= $obj->{'standardI124'};$e124_3= $obj->{'comments124'};
    $e125_1= $obj->{'standardA125'};$e125_2= $obj->{'standardI125'};$e125_3= $obj->{'comments125'};
    $e126_1= $obj->{'standardA126'};$e126_2= $obj->{'standardI126'};$e126_3= $obj->{'comments126'};
    $e127_1= $obj->{'standardA127'};$e127_2= $obj->{'standardI127'};$e127_3= $obj->{'comments127'};
    $e128_1= $obj->{'standardA128'};$e128_2= $obj->{'standardI128'};$e128_3= $obj->{'comments128'};
    $e129_1= $obj->{'standardA129'};$e129_2= $obj->{'standardI129'};$e129_3= $obj->{'comments129'};
    $e130_1= $obj->{'standardA130'};$e130_2= $obj->{'standardI130'};$e130_3= $obj->{'comments130'};
    $e131_1= $obj->{'standardA131'};$e131_2= $obj->{'standardI131'};$e131_3= $obj->{'comments131'};
    $e132_1= $obj->{'standardA132'};$e132_2= $obj->{'standardI132'};$e132_3= $obj->{'comments132'};
    $e133_1= $obj->{'standardA133'};$e133_2= $obj->{'standardI133'};$e133_3= $obj->{'comments133'};
    $e134_1= $obj->{'standardA134'};$e134_2= $obj->{'standardI134'};$e134_3= $obj->{'comments134'};
    $e135_1= $obj->{'standardA135'};$e135_2= $obj->{'standardI135'};$e135_3= $obj->{'comments135'};
    $e136_1= $obj->{'standardA136'};$e136_2= $obj->{'standardI136'};$e136_3= $obj->{'comments136'};
    $e137_1= $obj->{'standardA137'};$e137_2= $obj->{'standardI137'};$e137_3= $obj->{'comments137'};
    $e138_1= $obj->{'standardA138'};$e138_2= $obj->{'standardI138'};$e138_3= $obj->{'comments138'};
    $e139_1= $obj->{'standardA139'};$e139_2= $obj->{'standardI139'};$e139_3= $obj->{'comments139'};
    $e140_1= $obj->{'standardA140'};$e140_2= $obj->{'standardI140'};$e140_3= $obj->{'comments140'};
    $e141_1= $obj->{'standardA141'};$e141_2= $obj->{'standardI141'};$e141_3= $obj->{'comments141'};
    $e142_1= $obj->{'standardA142'};$e142_2= $obj->{'standardI142'};$e142_3= $obj->{'comments142'};
    $e143_1= $obj->{'standardA143'};$e143_2= $obj->{'standardI143'};$e143_3= $obj->{'comments143'};
    $e144_1= $obj->{'standardA144'};$e144_2= $obj->{'standardI144'};$e144_3= $obj->{'comments144'};
    $e145_1= $obj->{'standardA145'};$e145_2= $obj->{'standardI145'};$e145_3= $obj->{'comments145'};
    $e146_1= $obj->{'standardA146'};$e146_2= $obj->{'standardI146'};$e146_3= $obj->{'comments146'};
    $e147_1= $obj->{'standardA147'};$e147_2= $obj->{'standardI147'};$e147_3= $obj->{'comments147'};
    $e148_1= $obj->{'standardA148'};$e148_2= $obj->{'standardI148'};$e148_3= $obj->{'comments148'};
    $e149_1= $obj->{'standardA149'};$e149_2= $obj->{'standardI149'};$e149_3= $obj->{'comments149'};
    $e150_1= $obj->{'standardA150'};$e150_2= $obj->{'standardI150'};$e150_3= $obj->{'comments150'};
    $e151_1= $obj->{'standardA151'};$e151_2= $obj->{'standardI151'};$e151_3= $obj->{'comments151'};
    $e152_1= $obj->{'standardA152'};$e152_2= $obj->{'standardI152'};$e152_3= $obj->{'comments152'};
    $e153_1= $obj->{'standardA153'};$e153_2= $obj->{'standardI153'};$e153_3= $obj->{'comments153'};
    $e154_1= $obj->{'standardA154'};$e154_2= $obj->{'standardI154'};$e154_3= $obj->{'comments154'};
    $e155_1= $obj->{'standardA155'};$e155_2= $obj->{'standardI155'};$e155_3= $obj->{'comments155'};
    $e156_1= $obj->{'standardA156'};$e156_2= $obj->{'standardI156'};$e156_3= $obj->{'comments156'};
    $e157_1= $obj->{'standardA157'};$e157_2= $obj->{'standardI157'};$e157_3= $obj->{'comments157'};
    $e158_1= $obj->{'standardA158'};$e158_2= $obj->{'standardI158'};$e158_3= $obj->{'comments158'};
    $e159_1= $obj->{'standardA159'};$e159_2= $obj->{'standardI159'};$e159_3= $obj->{'comments159'};
    $e160_1= $obj->{'standardA160'};$e160_2= $obj->{'standardI160'};$e160_3= $obj->{'comments160'};
    $e161_1= $obj->{'standardA161'};$e161_2= $obj->{'standardI161'};$e161_3= $obj->{'comments161'};
    $e162_1= $obj->{'standardA162'};$e162_2= $obj->{'standardI162'};$e162_3= $obj->{'comments162'};
    $e163_1= $obj->{'standardA163'};$e163_2= $obj->{'standardI163'};$e163_3= $obj->{'comments163'};
    $e164_1= $obj->{'standardA164'};$e164_2= $obj->{'standardI164'};$e164_3= $obj->{'comments164'};
    $e165_1= $obj->{'standardA165'};$e165_2= $obj->{'standardI165'};$e165_3= $obj->{'comments165'};
    $e166_1= $obj->{'standardA166'};$e166_2= $obj->{'standardI166'};$e166_3= $obj->{'comments166'};
    $e167_1= $obj->{'standardA167'};$e167_2= $obj->{'standardI167'};$e167_3= $obj->{'comments167'};
    $e168_1= $obj->{'standardA168'};$e168_2= $obj->{'standardI168'};$e168_3= $obj->{'comments168'};
    $e169_1= $obj->{'standardA169'};$e169_2= $obj->{'standardI169'};$e169_3= $obj->{'comments169'};
    $e170_1= $obj->{'standardA170'};$e170_2= $obj->{'standardI170'};$e170_3= $obj->{'comments170'};
    $e171_1= $obj->{'standardA171'};$e171_2= $obj->{'standardI171'};$e171_3= $obj->{'comments171'};
    $e172_1= $obj->{'standardA172'};$e172_2= $obj->{'standardI172'};$e172_3= $obj->{'comments172'};
    $e173_1= $obj->{'standardA173'};$e173_2= $obj->{'standardI173'};$e173_3= $obj->{'comments173'};
    $e174_1= $obj->{'standardA174'};$e174_2= $obj->{'standardI174'};$e174_3= $obj->{'comments174'};
    $e175_1= $obj->{'standardA175'};$e175_2= $obj->{'standardI175'};$e175_3= $obj->{'comments175'};
    $e176_1= $obj->{'standardA176'};$e176_2= $obj->{'standardI176'};$e176_3= $obj->{'comments176'};
    $e177_1= $obj->{'standardA177'};$e177_2= $obj->{'standardI177'};$e177_3= $obj->{'comments177'};
    $e178_1= $obj->{'standardA178'};$e178_2= $obj->{'standardI178'};$e178_3= $obj->{'comments178'};
    $e179_1= $obj->{'standardA179'};$e179_2= $obj->{'standardI179'};$e179_3= $obj->{'comments179'};
    $e180_1= $obj->{'standardA180'};$e180_2= $obj->{'standardI180'};$e180_3= $obj->{'comments180'};
    $e181_1= $obj->{'standardA181'};$e181_2= $obj->{'standardI181'};$e181_3= $obj->{'comments181'};
    $e182_1= $obj->{'standardA182'};$e182_2= $obj->{'standardI182'};$e182_3= $obj->{'comments182'};
    $e183_1= $obj->{'standardA183'};$e183_2= $obj->{'standardI183'};$e183_3= $obj->{'comments183'};
    $e184_1= $obj->{'standardA184'};$e184_2= $obj->{'standardI184'};$e184_3= $obj->{'comments184'};
    $e185_1= $obj->{'standardA185'};$e185_2= $obj->{'standardI185'};$e185_3= $obj->{'comments185'};
    $e186_1= $obj->{'standardA186'};$e186_2= $obj->{'standardI186'};$e186_3= $obj->{'comments186'};
    $e187_1= $obj->{'standardA187'};$e187_2= $obj->{'standardI187'};$e187_3= $obj->{'comments187'};
    $e188_1= $obj->{'standardA188'};$e188_2= $obj->{'standardI188'};$e188_3= $obj->{'comments188'};
    $e189_1= $obj->{'standardA189'};$e189_2= $obj->{'standardI189'};$e189_3= $obj->{'comments189'};
    $e190_1= $obj->{'standardA190'};$e190_2= $obj->{'standardI190'};$e190_3= $obj->{'comments190'};
    $e191_1= $obj->{'standardA191'};$e191_2= $obj->{'standardI191'};$e191_3= $obj->{'comments191'};
    $e192_1= $obj->{'standardA192'};$e192_2= $obj->{'standardI192'};$e192_3= $obj->{'comments192'};
    $e193_1= $obj->{'standardA193'};$e193_2= $obj->{'standardI193'};$e193_3= $obj->{'comments193'};
    $e194_1= $obj->{'standardA194'};$e194_2= $obj->{'standardI194'};$e194_3= $obj->{'comments194'};
    $e195_1= $obj->{'standardA195'};$e195_2= $obj->{'standardI195'};$e195_3= $obj->{'comments195'};
    $e196_1= $obj->{'standardA196'};$e196_2= $obj->{'standardI196'};$e196_3= $obj->{'comments196'};
    $e197_1= $obj->{'standardA197'};$e197_2= $obj->{'standardI197'};$e197_3= $obj->{'comments197'};
    $e198_1= $obj->{'standardA198'};$e198_2= $obj->{'standardI198'};$e198_3= $obj->{'comments198'};
    $e199_1= $obj->{'standardA199'};$e199_2= $obj->{'standardI199'};$e199_3= $obj->{'comments199'};
    $e200_1= $obj->{'standardA200'};$e200_2= $obj->{'standardI200'};$e200_3= $obj->{'comments200'};
    $e201_1= $obj->{'standardA201'};$e201_2= $obj->{'standardI201'};$e201_3= $obj->{'comments201'};
    $e202_1= $obj->{'standardA202'};$e202_2= $obj->{'standardI202'};$e202_3= $obj->{'comments202'};
    $e203_1= $obj->{'standardA203'};$e203_2= $obj->{'standardI203'};$e203_3= $obj->{'comments203'};
    $e204_1= $obj->{'standardA204'};$e204_2= $obj->{'standardI204'};$e204_3= $obj->{'comments204'};
    $e205_1= $obj->{'standardA205'};$e205_2= $obj->{'standardI205'};$e205_3= $obj->{'comments205'};
    $e206_1= $obj->{'standardA206'};$e206_2= $obj->{'standardI206'};$e206_3= $obj->{'comments206'};
    $e207_1= $obj->{'standardA207'};$e207_2= $obj->{'standardI207'};$e207_3= $obj->{'comments207'};
    $e208_1= $obj->{'standardA208'};$e208_2= $obj->{'standardI208'};$e208_3= $obj->{'comments208'};
    $e209_1= $obj->{'standardA209'};$e209_2= $obj->{'standardI209'};$e209_3= $obj->{'comments209'};
    $e210_1= $obj->{'standardA210'};$e210_2= $obj->{'standardI210'};$e210_3= $obj->{'comments210'};
    $e211_1= $obj->{'standardA211'};$e211_2= $obj->{'standardI211'};$e211_3= $obj->{'comments211'};
    $e212_1= $obj->{'standardA212'};$e212_2= $obj->{'standardI212'};$e212_3= $obj->{'comments212'};
    $e213_1= $obj->{'standardA213'};$e213_2= $obj->{'standardI213'};$e213_3= $obj->{'comments213'};
    $e214_1= $obj->{'standardA214'};$e214_2= $obj->{'standardI214'};$e214_3= $obj->{'comments214'};
    $e215_1= $obj->{'standardA215'};$e215_2= $obj->{'standardI215'};$e215_3= $obj->{'comments215'};
    $e216_1= $obj->{'standardA216'};$e216_2= $obj->{'standardI216'};$e216_3= $obj->{'comments216'};
    $e217_1= $obj->{'standardA217'};$e217_2= $obj->{'standardI217'};$e217_3= $obj->{'comments217'};
    $e218_1= $obj->{'standardA218'};$e218_2= $obj->{'standardI218'};$e218_3= $obj->{'comments218'};
    $e219_1= $obj->{'standardA219'};$e219_2= $obj->{'standardI219'};$e219_3= $obj->{'comments219'};
    $e220_1= $obj->{'standardA220'};$e220_2= $obj->{'standardI220'};$e220_3= $obj->{'comments220'};
    $e221_1= $obj->{'standardA221'};$e221_2= $obj->{'standardI221'};$e221_3= $obj->{'comments221'};
    $e222_1= $obj->{'standardA222'};$e222_2= $obj->{'standardI222'};$e222_3= $obj->{'comments222'};
    $e223_1= $obj->{'standardA223'};$e223_2= $obj->{'standardI223'};$e223_3= $obj->{'comments223'};
    $e224_1= $obj->{'standardA224'};$e224_2= $obj->{'standardI224'};$e224_3= $obj->{'comments224'};
    $e225_1= $obj->{'standardA225'};$e225_2= $obj->{'standardI225'};$e225_3= $obj->{'comments225'};
    $e226_1= $obj->{'standardA226'};$e226_2= $obj->{'standardI226'};$e226_3= $obj->{'comments226'};
    $e227_1= $obj->{'standardA227'};$e227_2= $obj->{'standardI227'};$e227_3= $obj->{'comments227'};
    $e228_1= $obj->{'standardA228'};$e228_2= $obj->{'standardI228'};$e228_3= $obj->{'comments228'};
    $e229_1= $obj->{'standardA229'};$e229_2= $obj->{'standardI229'};$e229_3= $obj->{'comments229'};
    $e230_1= $obj->{'standardA230'};$e230_2= $obj->{'standardI230'};$e230_3= $obj->{'comments230'};
    $e231_1= $obj->{'standardA231'};$e231_2= $obj->{'standardI231'};$e231_3= $obj->{'comments231'};
    $e232_1= $obj->{'standardA232'};$e232_2= $obj->{'standardI232'};$e232_3= $obj->{'comments232'};
    $e233_1= $obj->{'standardA233'};$e233_2= $obj->{'standardI233'};$e233_3= $obj->{'comments233'};
    $e234_1= $obj->{'standardA234'};$e234_2= $obj->{'standardI234'};$e234_3= $obj->{'comments234'};
    $e235_1= $obj->{'standardA235'};$e235_2= $obj->{'standardI235'};$e235_3= $obj->{'comments235'};
    $e236_1= $obj->{'standardA236'};$e236_2= $obj->{'standardI236'};$e236_3= $obj->{'comments236'};
    $e237_1= $obj->{'standardA237'};$e237_2= $obj->{'standardI237'};$e237_3= $obj->{'comments237'};
    $e238_1= $obj->{'standardA238'};$e238_2= $obj->{'standardI238'};$e238_3= $obj->{'comments238'};
    $e239_1= $obj->{'standardA239'};$e239_2= $obj->{'standardI239'};$e239_3= $obj->{'comments239'};
    $e240_1= $obj->{'standardA240'};$e240_2= $obj->{'standardI240'};$e240_3= $obj->{'comments240'};
    $e241_1= $obj->{'standardA241'};$e241_2= $obj->{'standardI241'};$e241_3= $obj->{'comments241'};
    $e242_1= $obj->{'standardA242'};$e242_2= $obj->{'standardI242'};$e242_3= $obj->{'comments242'};
    $e243_1= $obj->{'standardA243'};$e243_2= $obj->{'standardI243'};$e243_3= $obj->{'comments243'};
    $e244_1= $obj->{'standardA244'};$e244_2= $obj->{'standardI244'};$e244_3= $obj->{'comments244'};
    $e245_1= $obj->{'standardA245'};$e245_2= $obj->{'standardI245'};$e245_3= $obj->{'comments245'};
    $e246_1= $obj->{'standardA246'};$e246_2= $obj->{'standardI246'};$e246_3= $obj->{'comments246'};
    $e247_1= $obj->{'standardA247'};$e247_2= $obj->{'standardI247'};$e247_3= $obj->{'comments247'};
    $e248_1= $obj->{'standardA248'};$e248_2= $obj->{'standardI248'};$e248_3= $obj->{'comments248'};
    $e249_1= $obj->{'standardA249'};$e249_2= $obj->{'standardI249'};$e249_3= $obj->{'comments249'};
    $e250_1= $obj->{'standardA250'};$e250_2= $obj->{'standardI250'};$e250_3= $obj->{'comments250'};
    $e251_1= $obj->{'standardA251'};$e251_2= $obj->{'standardI251'};$e251_3= $obj->{'comments251'};
    $e252_1= $obj->{'standardA252'};$e252_2= $obj->{'standardI252'};$e252_3= $obj->{'comments252'};
    $e253_1= $obj->{'standardA253'};$e253_2= $obj->{'standardI253'};$e253_3= $obj->{'comments253'};
    $e254_1= $obj->{'standardA254'};$e254_2= $obj->{'standardI254'};$e254_3= $obj->{'comments254'};
    $e255_1= $obj->{'standardA255'};$e255_2= $obj->{'standardI255'};$e255_3= $obj->{'comments255'};
    $e256_1= $obj->{'standardA256'};$e256_2= $obj->{'standardI256'};$e256_3= $obj->{'comments256'};
    $e257_1= $obj->{'standardA257'};$e257_2= $obj->{'standardI257'};$e257_3= $obj->{'comments257'};
    $e258_1= $obj->{'standardA258'};$e258_2= $obj->{'standardI258'};$e258_3= $obj->{'comments258'};
    $e259_1= $obj->{'standardA259'};$e259_2= $obj->{'standardI259'};$e259_3= $obj->{'comments259'};
    $e260_1= $obj->{'standardA260'};$e260_2= $obj->{'standardI260'};$e260_3= $obj->{'comments260'};
    $e261_1= $obj->{'standardA261'};$e261_2= $obj->{'standardI261'};$e261_3= $obj->{'comments261'};
    $e262_1= $obj->{'standardA262'};$e262_2= $obj->{'standardI262'};$e262_3= $obj->{'comments262'};
    $e263_1= $obj->{'standardA263'};$e263_2= $obj->{'standardI263'};$e263_3= $obj->{'comments263'};
    $e264_1= $obj->{'standardA264'};$e264_2= $obj->{'standardI264'};$e264_3= $obj->{'comments264'};
    $e265_1= $obj->{'standardA265'};$e265_2= $obj->{'standardI265'};$e265_3= $obj->{'comments265'};
    $e266_1= $obj->{'standardA266'};$e266_2= $obj->{'standardI266'};$e266_3= $obj->{'comments266'};
    $e267_1= $obj->{'standardA267'};$e267_2= $obj->{'standardI267'};$e267_3= $obj->{'comments267'};
    $e268_1= $obj->{'standardA268'};$e268_2= $obj->{'standardI268'};$e268_3= $obj->{'comments268'};
    $e269_1= $obj->{'standardA269'};$e269_2= $obj->{'standardI269'};$e269_3= $obj->{'comments269'};
    $e270_1= $obj->{'standardA270'};$e270_2= $obj->{'standardI270'};$e270_3= $obj->{'comments270'};
    $e271_1= $obj->{'standardA271'};$e271_2= $obj->{'standardI271'};$e271_3= $obj->{'comments271'};
    $e272_1= $obj->{'standardA272'};$e272_2= $obj->{'standardI272'};$e272_3= $obj->{'comments272'};
    $e273_1= $obj->{'standardA273'};$e273_2= $obj->{'standardI273'};$e273_3= $obj->{'comments273'};
    $e274_1= $obj->{'standardA274'};$e274_2= $obj->{'standardI274'};$e274_3= $obj->{'comments274'};
    $e275_1= $obj->{'standardA275'};$e275_2= $obj->{'standardI275'};$e275_3= $obj->{'comments275'};
    $e276_1= $obj->{'standardA276'};$e276_2= $obj->{'standardI276'};$e276_3= $obj->{'comments276'};
    $e277_1= $obj->{'standardA277'};$e277_2= $obj->{'standardI277'};$e277_3= $obj->{'comments277'};
    $e278_1= $obj->{'standardA278'};$e278_2= $obj->{'standardI278'};$e278_3= $obj->{'comments278'};
    $e279_1= $obj->{'standardA279'};$e279_2= $obj->{'standardI279'};$e279_3= $obj->{'comments279'};
    $e280_1= $obj->{'standardA280'};$e280_2= $obj->{'standardI280'};$e280_3= $obj->{'comments280'};
    $e281_1= $obj->{'standardA281'};$e281_2= $obj->{'standardI281'};$e281_3= $obj->{'comments281'};
    $e282_1= $obj->{'standardA282'};$e282_2= $obj->{'standardI282'};$e282_3= $obj->{'comments282'};
    $e283_1= $obj->{'standardA283'};$e283_2= $obj->{'standardI283'};$e283_3= $obj->{'comments283'};
    $e284_1= $obj->{'standardA284'};$e284_2= $obj->{'standardI284'};$e284_3= $obj->{'comments284'};
    $e285_1= $obj->{'standardA285'};$e285_2= $obj->{'standardI285'};$e285_3= $obj->{'comments285'};
    $e286_1= $obj->{'standardA286'};$e286_2= $obj->{'standardI286'};$e286_3= $obj->{'comments286'};
    $e287_1= $obj->{'standardA287'};$e287_2= $obj->{'standardI287'};$e287_3= $obj->{'comments287'};
    $e288_1= $obj->{'standardA288'};$e288_2= $obj->{'standardI288'};$e288_3= $obj->{'comments288'};
    $e289_1= $obj->{'standardA289'};$e289_2= $obj->{'standardI289'};$e289_3= $obj->{'comments289'};
    $e290_1= $obj->{'standardA290'};$e290_2= $obj->{'standardI290'};$e290_3= $obj->{'comments290'};
    $e291_1= $obj->{'standardA291'};$e291_2= $obj->{'standardI291'};$e291_3= $obj->{'comments291'};
    $e292_1= $obj->{'standardA292'};$e292_2= $obj->{'standardI292'};$e292_3= $obj->{'comments292'};
    $e293_1= $obj->{'standardA293'};$e293_2= $obj->{'standardI293'};$e293_3= $obj->{'comments293'};
    $e294_1= $obj->{'standardA294'};$e294_2= $obj->{'standardI294'};$e294_3= $obj->{'comments294'};
    $e295_1= $obj->{'standardA295'};$e295_2= $obj->{'standardI295'};$e295_3= $obj->{'comments295'};
    $e296_1= $obj->{'standardA296'};$e296_2= $obj->{'standardI296'};$e296_3= $obj->{'comments296'};
    $e297_1= $obj->{'standardA297'};$e297_2= $obj->{'standardI297'};$e297_3= $obj->{'comments297'};
    $e298_1= $obj->{'standardA298'};$e298_2= $obj->{'standardI298'};$e298_3= $obj->{'comments298'};
    $e299_1= $obj->{'standardA299'};$e299_2= $obj->{'standardI299'};$e299_3= $obj->{'comments299'};
    $e300_1= $obj->{'standardA300'};$e300_2= $obj->{'standardI300'};$e300_3= $obj->{'comments300'};
    $e301_1= $obj->{'standardA301'};$e301_2= $obj->{'standardI301'};$e301_3= $obj->{'comments301'};
    $e302_1= $obj->{'standardA302'};$e302_2= $obj->{'standardI302'};$e302_3= $obj->{'comments302'};
    $e303_1= $obj->{'standardA303'};$e303_2= $obj->{'standardI303'};$e303_3= $obj->{'comments303'};
    $e304_1= $obj->{'standardA304'};$e304_2= $obj->{'standardI304'};$e304_3= $obj->{'comments304'};
    $e305_1= $obj->{'standardA305'};$e305_2= $obj->{'standardI305'};$e305_3= $obj->{'comments305'};
    $e306_1= $obj->{'standardA306'};$e306_2= $obj->{'standardI306'};$e306_3= $obj->{'comments306'};
    $e307_1= $obj->{'standardA307'};$e307_2= $obj->{'standardI307'};$e307_3= $obj->{'comments307'};
    $e308_1= $obj->{'standardA308'};$e308_2= $obj->{'standardI308'};$e308_3= $obj->{'comments308'};
    $e309_1= $obj->{'standardA309'};$e309_2= $obj->{'standardI309'};$e309_3= $obj->{'comments309'};
    $e310_1= $obj->{'standardA310'};$e310_2= $obj->{'standardI310'};$e310_3= $obj->{'comments310'};
    $e311_1= $obj->{'standardA311'};$e311_2= $obj->{'standardI311'};$e311_3= $obj->{'comments311'};
    $e312_1= $obj->{'standardA312'};$e312_2= $obj->{'standardI312'};$e312_3= $obj->{'comments312'};
    $e313_1= $obj->{'standardA313'};$e313_2= $obj->{'standardI313'};$e313_3= $obj->{'comments313'};
    $e314_1= $obj->{'standardA314'};$e314_2= $obj->{'standardI314'};$e314_3= $obj->{'comments314'};
    $e315_1= $obj->{'standardA315'};$e315_2= $obj->{'standardI315'};$e315_3= $obj->{'comments315'};
    $e316_1= $obj->{'standardA316'};$e316_2= $obj->{'standardI316'};$e316_3= $obj->{'comments316'};
    $e317_1= $obj->{'standardA317'};$e317_2= $obj->{'standardI317'};$e317_3= $obj->{'comments317'};
    $e318_1= $obj->{'standardA318'};$e318_2= $obj->{'standardI318'};$e318_3= $obj->{'comments318'};
    $e319_1= $obj->{'standardA319'};$e319_2= $obj->{'standardI319'};$e319_3= $obj->{'comments319'};
    $e320_1= $obj->{'standardA320'};$e320_2= $obj->{'standardI320'};$e320_3= $obj->{'comments320'};
    $e321_1= $obj->{'standardA321'};$e321_2= $obj->{'standardI321'};$e321_3= $obj->{'comments321'};
    $e322_1= $obj->{'standardA322'};$e322_2= $obj->{'standardI322'};$e322_3= $obj->{'comments322'};
    $e323_1= $obj->{'standardA323'};$e323_2= $obj->{'standardI323'};$e323_3= $obj->{'comments323'};
    $e324_1= $obj->{'standardA324'};$e324_2= $obj->{'standardI324'};$e324_3= $obj->{'comments324'};
    $e325_1= $obj->{'standardA325'};$e325_2= $obj->{'standardI325'};$e325_3= $obj->{'comments325'};
    $e326_1= $obj->{'standardA326'};$e326_2= $obj->{'standardI326'};$e326_3= $obj->{'comments326'};
    $e327_1= $obj->{'standardA327'};$e327_2= $obj->{'standardI327'};$e327_3= $obj->{'comments327'};
    $e328_1= $obj->{'standardA328'};$e328_2= $obj->{'standardI328'};$e328_3= $obj->{'comments328'};
    $e329_1= $obj->{'standardA329'};$e329_2= $obj->{'standardI329'};$e329_3= $obj->{'comments329'};
    $e330_1= $obj->{'standardA330'};$e330_2= $obj->{'standardI330'};$e330_3= $obj->{'comments330'};
    $e331_1= $obj->{'standardA331'};$e331_2= $obj->{'standardI331'};$e331_3= $obj->{'comments331'};
    $e332_1= $obj->{'standardA332'};$e332_2= $obj->{'standardI332'};$e332_3= $obj->{'comments332'};
    $e333_1= $obj->{'standardA333'};$e333_2= $obj->{'standardI333'};$e333_3= $obj->{'comments333'};
    $e334_1= $obj->{'standardA334'};$e334_2= $obj->{'standardI334'};$e334_3= $obj->{'comments334'};
    $e335_1= $obj->{'standardA335'};$e335_2= $obj->{'standardI335'};$e335_3= $obj->{'comments335'};
    $e336_1= $obj->{'standardA336'};$e336_2= $obj->{'standardI336'};$e336_3= $obj->{'comments336'};
    $e337_1= $obj->{'standardA337'};$e337_2= $obj->{'standardI337'};$e337_3= $obj->{'comments337'};
    $e338_1= $obj->{'standardA338'};$e338_2= $obj->{'standardI338'};$e338_3= $obj->{'comments338'};
    $e339_1= $obj->{'standardA339'};$e339_2= $obj->{'standardI339'};$e339_3= $obj->{'comments339'};
    $e340_1= $obj->{'standardA340'};$e340_2= $obj->{'standardI340'};$e340_3= $obj->{'comments340'};
    $e341_1= $obj->{'standardA341'};$e341_2= $obj->{'standardI341'};$e341_3= $obj->{'comments341'};
    $e342_1= $obj->{'standardA342'};$e342_2= $obj->{'standardI342'};$e342_3= $obj->{'comments342'};
    $e343_1= $obj->{'standardA343'};$e343_2= $obj->{'standardI343'};$e343_3= $obj->{'comments343'};
    $e344_1= $obj->{'standardA344'};$e344_2= $obj->{'standardI344'};$e344_3= $obj->{'comments344'};
    $e345_1= $obj->{'standardA345'};$e345_2= $obj->{'standardI345'};$e345_3= $obj->{'comments345'};
    $e346_1= $obj->{'standardA346'};$e346_2= $obj->{'standardI346'};$e346_3= $obj->{'comments346'};
    $e347_1= $obj->{'standardA347'};$e347_2= $obj->{'standardI347'};$e347_3= $obj->{'comments347'};
    $e348_1= $obj->{'standardA348'};$e348_2= $obj->{'standardI348'};$e348_3= $obj->{'comments348'};
    $e349_1= $obj->{'standardA349'};$e349_2= $obj->{'standardI349'};$e349_3= $obj->{'comments349'};
    $e350_1= $obj->{'standardA350'};$e350_2= $obj->{'standardI350'};$e350_3= $obj->{'comments350'};
    $e351_1= $obj->{'standardA351'};$e351_2= $obj->{'standardI351'};$e351_3= $obj->{'comments351'};
    $e352_1= $obj->{'standardA352'};$e352_2= $obj->{'standardI352'};$e352_3= $obj->{'comments352'};
    $e353_1= $obj->{'standardA353'};$e353_2= $obj->{'standardI353'};$e353_3= $obj->{'comments353'};
    $e354_1= $obj->{'standardA354'};$e354_2= $obj->{'standardI354'};$e354_3= $obj->{'comments354'};
    $e355_1= $obj->{'standardA355'};$e355_2= $obj->{'standardI355'};$e355_3= $obj->{'comments355'};
    $e356_1= $obj->{'standardA356'};$e356_2= $obj->{'standardI356'};$e356_3= $obj->{'comments356'};
    $e357_1= $obj->{'standardA357'};$e357_2= $obj->{'standardI357'};$e357_3= $obj->{'comments357'};
    $e358_1= $obj->{'standardA358'};$e358_2= $obj->{'standardI358'};$e358_3= $obj->{'comments358'};
    $e359_1= $obj->{'standardA359'};$e359_2= $obj->{'standardI359'};$e359_3= $obj->{'comments359'};
    $e360_1= $obj->{'standardA360'};$e360_2= $obj->{'standardI360'};$e360_3= $obj->{'comments360'};
    $e361_1= $obj->{'standardA361'};$e361_2= $obj->{'standardI361'};$e361_3= $obj->{'comments361'};
    $e362_1= $obj->{'standardA362'};$e362_2= $obj->{'standardI362'};$e362_3= $obj->{'comments362'};
    $e363_1= $obj->{'standardA363'};$e363_2= $obj->{'standardI363'};$e363_3= $obj->{'comments363'};
    $e364_1= $obj->{'standardA364'};$e364_2= $obj->{'standardI364'};$e364_3= $obj->{'comments364'};
    $e365_1= $obj->{'standardA365'};$e365_2= $obj->{'standardI365'};$e365_3= $obj->{'comments365'};
    $e366_1= $obj->{'standardA366'};$e366_2= $obj->{'standardI366'};$e366_3= $obj->{'comments366'};
    $e367_1= $obj->{'standardA367'};$e367_2= $obj->{'standardI367'};$e367_3= $obj->{'comments367'};
    $e368_1= $obj->{'standardA368'};$e368_2= $obj->{'standardI368'};$e368_3= $obj->{'comments368'};
    $e369_1= $obj->{'standardA369'};$e369_2= $obj->{'standardI369'};$e369_3= $obj->{'comments369'};
    $e370_1= $obj->{'standardA370'};$e370_2= $obj->{'standardI370'};$e370_3= $obj->{'comments370'};
    $e371_1= $obj->{'standardA371'};$e371_2= $obj->{'standardI371'};$e371_3= $obj->{'comments371'};
    $e372_1= $obj->{'standardA372'};$e372_2= $obj->{'standardI372'};$e372_3= $obj->{'comments372'};
    $e373_1= $obj->{'standardA373'};$e373_2= $obj->{'standardI373'};$e373_3= $obj->{'comments373'};
    $e374_1= $obj->{'standardA374'};$e374_2= $obj->{'standardI374'};$e374_3= $obj->{'comments374'};
    $e375_1= $obj->{'standardA375'};$e375_2= $obj->{'standardI375'};$e375_3= $obj->{'comments375'};
    $e376_1= $obj->{'standardA376'};$e376_2= $obj->{'standardI376'};$e376_3= $obj->{'comments376'};
    $e377_1= $obj->{'standardA377'};$e377_2= $obj->{'standardI377'};$e377_3= $obj->{'comments377'};
    $e378_1= $obj->{'standardA378'};$e378_2= $obj->{'standardI378'};$e378_3= $obj->{'comments378'};
    $e379_1= $obj->{'standardA379'};$e379_2= $obj->{'standardI379'};$e379_3= $obj->{'comments379'};
    $e380_1= $obj->{'standardA380'};$e380_2= $obj->{'standardI380'};$e380_3= $obj->{'comments380'};
    $e381_1= $obj->{'standardA381'};$e381_2= $obj->{'standardI381'};$e381_3= $obj->{'comments381'};
    $e382_1= $obj->{'standardA382'};$e382_2= $obj->{'standardI382'};$e382_3= $obj->{'comments382'};
    $e383_1= $obj->{'standardA383'};$e383_2= $obj->{'standardI383'};$e383_3= $obj->{'comments383'};
    $e384_1= $obj->{'standardA384'};$e384_2= $obj->{'standardI384'};$e384_3= $obj->{'comments384'};
    $e385_1= $obj->{'standardA385'};$e385_2= $obj->{'standardI385'};$e385_3= $obj->{'comments385'};
    $e386_1= $obj->{'standardA386'};$e386_2= $obj->{'standardI386'};$e386_3= $obj->{'comments386'};
    $e387_1= $obj->{'standardA387'};$e387_2= $obj->{'standardI387'};$e387_3= $obj->{'comments387'};
    $e388_1= $obj->{'standardA388'};$e388_2= $obj->{'standardI388'};$e388_3= $obj->{'comments388'};
    $e389_1= $obj->{'standardA389'};$e389_2= $obj->{'standardI389'};$e389_3= $obj->{'comments389'};
    $e390_1= $obj->{'standardA390'};$e390_2= $obj->{'standardI390'};$e390_3= $obj->{'comments390'};
    $e391_1= $obj->{'standardA391'};$e391_2= $obj->{'standardI391'};$e391_3= $obj->{'comments391'};
    $e392_1= $obj->{'standardA392'};$e392_2= $obj->{'standardI392'};$e392_3= $obj->{'comments392'};
    $e393_1= $obj->{'standardA393'};$e393_2= $obj->{'standardI393'};$e393_3= $obj->{'comments393'};
    $e394_1= $obj->{'standardA394'};$e394_2= $obj->{'standardI394'};$e394_3= $obj->{'comments394'};
    $e395_1= $obj->{'standardA395'};$e395_2= $obj->{'standardI395'};$e395_3= $obj->{'comments395'};
    $e396_1= $obj->{'standardA396'};$e396_2= $obj->{'standardI396'};$e396_3= $obj->{'comments396'};
    $e397_1= $obj->{'standardA397'};$e397_2= $obj->{'standardI397'};$e397_3= $obj->{'comments397'};
    $e398_1= $obj->{'standardA398'};$e398_2= $obj->{'standardI398'};$e398_3= $obj->{'comments398'};
    $e399_1= $obj->{'standardA399'};$e399_2= $obj->{'standardI399'};$e399_3= $obj->{'comments399'};
    $e400_1= $obj->{'standardA400'};$e400_2= $obj->{'standardI400'};$e400_3= $obj->{'comments400'};
    $e401_1= $obj->{'standardA401'};$e401_2= $obj->{'standardI401'};$e401_3= $obj->{'comments401'};
    $e402_1= $obj->{'standardA402'};$e402_2= $obj->{'standardI402'};$e402_3= $obj->{'comments402'};
    $e403_1= $obj->{'standardA403'};$e403_2= $obj->{'standardI403'};$e403_3= $obj->{'comments403'};
    $e404_1= $obj->{'standardA404'};$e404_2= $obj->{'standardI404'};$e404_3= $obj->{'comments404'};
    $e405_1= $obj->{'standardA405'};$e405_2= $obj->{'standardI405'};$e405_3= $obj->{'comments405'};
    $e406_1= $obj->{'standardA406'};$e406_2= $obj->{'standardI406'};$e406_3= $obj->{'comments406'};
    $e407_1= $obj->{'standardA407'};$e407_2= $obj->{'standardI407'};$e407_3= $obj->{'comments407'};
    $e408_1= $obj->{'standardA408'};$e408_2= $obj->{'standardI408'};$e408_3= $obj->{'comments408'};
    $e409_1= $obj->{'standardA409'};$e409_2= $obj->{'standardI409'};$e409_3= $obj->{'comments409'};
    $e410_1= $obj->{'standardA410'};$e410_2= $obj->{'standardI410'};$e410_3= $obj->{'comments410'};
    $e411_1= $obj->{'standardA411'};$e411_2= $obj->{'standardI411'};$e411_3= $obj->{'comments411'};
    $e412_1= $obj->{'standardA412'};$e412_2= $obj->{'standardI412'};$e412_3= $obj->{'comments412'};
    $e413_1= $obj->{'standardA413'};$e413_2= $obj->{'standardI413'};$e413_3= $obj->{'comments413'};
    $e414_1= $obj->{'standardA414'};$e414_2= $obj->{'standardI414'};$e414_3= $obj->{'comments414'};
    $e415_1= $obj->{'standardA415'};$e415_2= $obj->{'standardI415'};$e415_3= $obj->{'comments415'};
    $e416_1= $obj->{'standardA416'};$e416_2= $obj->{'standardI416'};$e416_3= $obj->{'comments416'};
    $e417_1= $obj->{'standardA417'};$e417_2= $obj->{'standardI417'};$e417_3= $obj->{'comments417'};
    $e418_1= $obj->{'standardA418'};$e418_2= $obj->{'standardI418'};$e418_3= $obj->{'comments418'};
    $e419_1= $obj->{'standardA419'};$e419_2= $obj->{'standardI419'};$e419_3= $obj->{'comments419'};
    $e420_1= $obj->{'standardA420'};$e420_2= $obj->{'standardI420'};$e420_3= $obj->{'comments420'};
    $e421_1= $obj->{'standardA421'};$e421_2= $obj->{'standardI421'};$e421_3= $obj->{'comments421'};
    $e422_1= $obj->{'standardA422'};$e422_2= $obj->{'standardI422'};$e422_3= $obj->{'comments422'};
    $e423_1= $obj->{'standardA423'};$e423_2= $obj->{'standardI423'};$e423_3= $obj->{'comments423'};
    $e424_1= $obj->{'standardA424'};$e424_2= $obj->{'standardI424'};$e424_3= $obj->{'comments424'};
    $e425_1= $obj->{'standardA425'};$e425_2= $obj->{'standardI425'};$e425_3= $obj->{'comments425'};
    $e426_1= $obj->{'standardA426'};$e426_2= $obj->{'standardI426'};$e426_3= $obj->{'comments426'};
    $e427_1= $obj->{'standardA427'};$e427_2= $obj->{'standardI427'};$e427_3= $obj->{'comments427'};
    $e428_1= $obj->{'standardA428'};$e428_2= $obj->{'standardI428'};$e428_3= $obj->{'comments428'};
    $e429_1= $obj->{'standardA429'};$e429_2= $obj->{'standardI429'};$e429_3= $obj->{'comments429'};
    $e430_1= $obj->{'standardA430'};$e430_2= $obj->{'standardI430'};$e430_3= $obj->{'comments430'};
    $e431_1= $obj->{'standardA431'};$e431_2= $obj->{'standardI431'};$e431_3= $obj->{'comments431'};
    $e432_1= $obj->{'standardA432'};$e432_2= $obj->{'standardI432'};$e432_3= $obj->{'comments432'};
    $e433_1= $obj->{'standardA433'};$e433_2= $obj->{'standardI433'};$e433_3= $obj->{'comments433'};
    $e434_1= $obj->{'standardA434'};$e434_2= $obj->{'standardI434'};$e434_3= $obj->{'comments434'};
    $e435_1= $obj->{'standardA435'};$e435_2= $obj->{'standardI435'};$e435_3= $obj->{'comments435'};
    $e436_1= $obj->{'standardA436'};$e436_2= $obj->{'standardI436'};$e436_3= $obj->{'comments436'};
    $e437_1= $obj->{'standardA437'};$e437_2= $obj->{'standardI437'};$e437_3= $obj->{'comments437'};
    $e438_1= $obj->{'standardA438'};$e438_2= $obj->{'standardI438'};$e438_3= $obj->{'comments438'};
    $e439_1= $obj->{'standardA439'};$e439_2= $obj->{'standardI439'};$e439_3= $obj->{'comments439'};
    $e440_1= $obj->{'standardA440'};$e440_2= $obj->{'standardI440'};$e440_3= $obj->{'comments440'};
    $e441_1= $obj->{'standardA441'};$e441_2= $obj->{'standardI441'};$e441_3= $obj->{'comments441'};
    $e442_1= $obj->{'standardA442'};$e442_2= $obj->{'standardI442'};$e442_3= $obj->{'comments442'};
    $e443_1= $obj->{'standardA443'};$e443_2= $obj->{'standardI443'};$e443_3= $obj->{'comments443'};
    $e444_1= $obj->{'standardA444'};$e444_2= $obj->{'standardI444'};$e444_3= $obj->{'comments444'};
    $e445_1= $obj->{'standardA445'};$e445_2= $obj->{'standardI445'};$e445_3= $obj->{'comments445'};
    $e446_1= $obj->{'standardA446'};$e446_2= $obj->{'standardI446'};$e446_3= $obj->{'comments446'};
    $e447_1= $obj->{'standardA447'};$e447_2= $obj->{'standardI447'};$e447_3= $obj->{'comments447'};
    $e448_1= $obj->{'standardA448'};$e448_2= $obj->{'standardI448'};$e448_3= $obj->{'comments448'};
    $e449_1= $obj->{'standardA449'};$e449_2= $obj->{'standardI449'};$e449_3= $obj->{'comments449'};
    $e450_1= $obj->{'standardA450'};$e450_2= $obj->{'standardI450'};$e450_3= $obj->{'comments450'};
    $e451_1= $obj->{'standardA451'};$e451_2= $obj->{'standardI451'};$e451_3= $obj->{'comments451'};
    $e452_1= $obj->{'standardA452'};$e452_2= $obj->{'standardI452'};$e452_3= $obj->{'comments452'};
    $e453_1= $obj->{'standardA453'};$e453_2= $obj->{'standardI453'};$e453_3= $obj->{'comments453'};
    $e454_1= $obj->{'standardA454'};$e454_2= $obj->{'standardI454'};$e454_3= $obj->{'comments454'};
    $e455_1= $obj->{'standardA455'};$e455_2= $obj->{'standardI455'};$e455_3= $obj->{'comments455'};
    $e456_1= $obj->{'standardA456'};$e456_2= $obj->{'standardI456'};$e456_3= $obj->{'comments456'};
    $e457_1= $obj->{'standardA457'};$e457_2= $obj->{'standardI457'};$e457_3= $obj->{'comments457'};
    $e458_1= $obj->{'standardA458'};$e458_2= $obj->{'standardI458'};$e458_3= $obj->{'comments458'};
    $e459_1= $obj->{'standardA459'};$e459_2= $obj->{'standardI459'};$e459_3= $obj->{'comments459'};
    $e460_1= $obj->{'standardA460'};$e460_2= $obj->{'standardI460'};$e460_3= $obj->{'comments460'};
    $e461_1= $obj->{'standardA461'};$e461_2= $obj->{'standardI461'};$e461_3= $obj->{'comments461'};
    $e462_1= $obj->{'standardA462'};$e462_2= $obj->{'standardI462'};$e462_3= $obj->{'comments462'};
    $e463_1= $obj->{'standardA463'};$e463_2= $obj->{'standardI463'};$e463_3= $obj->{'comments463'};
    $e464_1= $obj->{'standardA464'};$e464_2= $obj->{'standardI464'};$e464_3= $obj->{'comments464'};
    $e465_1= $obj->{'standardA465'};$e465_2= $obj->{'standardI465'};$e465_3= $obj->{'comments465'};
    $e466_1= $obj->{'standardA466'};$e466_2= $obj->{'standardI466'};$e466_3= $obj->{'comments466'};
    $e467_1= $obj->{'standardA467'};$e467_2= $obj->{'standardI467'};$e467_3= $obj->{'comments467'};
    $e468_1= $obj->{'standardA468'};$e468_2= $obj->{'standardI468'};$e468_3= $obj->{'comments468'};
    $e469_1= $obj->{'standardA469'};$e469_2= $obj->{'standardI469'};$e469_3= $obj->{'comments469'};
    $e470_1= $obj->{'standardA470'};$e470_2= $obj->{'standardI470'};$e470_3= $obj->{'comments470'};
    $e471_1= $obj->{'standardA471'};$e471_2= $obj->{'standardI471'};$e471_3= $obj->{'comments471'};
    $e472_1= $obj->{'standardA472'};$e472_2= $obj->{'standardI472'};$e472_3= $obj->{'comments472'};
    $e473_1= $obj->{'standardA473'};$e473_2= $obj->{'standardI473'};$e473_3= $obj->{'comments473'};
    $e474_1= $obj->{'standardA474'};$e474_2= $obj->{'standardI474'};$e474_3= $obj->{'comments474'};
    $e475_1= $obj->{'standardA475'};$e475_2= $obj->{'standardI475'};$e475_3= $obj->{'comments475'};
    $e476_1= $obj->{'standardA476'};$e476_2= $obj->{'standardI476'};$e476_3= $obj->{'comments476'};
    $e477_1= $obj->{'standardA477'};$e477_2= $obj->{'standardI477'};$e477_3= $obj->{'comments477'};
    $e478_1= $obj->{'standardA478'};$e478_2= $obj->{'standardI478'};$e478_3= $obj->{'comments478'};
    $e479_1= $obj->{'standardA479'};$e479_2= $obj->{'standardI479'};$e479_3= $obj->{'comments479'};
    $e480_1= $obj->{'standardA480'};$e480_2= $obj->{'standardI480'};$e480_3= $obj->{'comments480'};
    $e481_1= $obj->{'standardA481'};$e481_2= $obj->{'standardI481'};$e481_3= $obj->{'comments481'};
    $e482_1= $obj->{'standardA482'};$e482_2= $obj->{'standardI482'};$e482_3= $obj->{'comments482'};
    $e483_1= $obj->{'standardA483'};$e483_2= $obj->{'standardI483'};$e483_3= $obj->{'comments483'};
    $e484_1= $obj->{'standardA484'};$e484_2= $obj->{'standardI484'};$e484_3= $obj->{'comments484'};
    $e485_1= $obj->{'standardA485'};$e485_2= $obj->{'standardI485'};$e485_3= $obj->{'comments485'};
    $e486_1= $obj->{'standardA486'};$e486_2= $obj->{'standardI486'};$e486_3= $obj->{'comments486'};
    $e487_1= $obj->{'standardA487'};$e487_2= $obj->{'standardI487'};$e487_3= $obj->{'comments487'};
    $e488_1= $obj->{'standardA488'};$e488_2= $obj->{'standardI488'};$e488_3= $obj->{'comments488'};
    $e489_1= $obj->{'standardA489'};$e489_2= $obj->{'standardI489'};$e489_3= $obj->{'comments489'};
    $e490_1= $obj->{'standardA490'};$e490_2= $obj->{'standardI490'};$e490_3= $obj->{'comments490'};
    $e491_1= $obj->{'standardA491'};$e491_2= $obj->{'standardI491'};$e491_3= $obj->{'comments491'};
    $e492_1= $obj->{'standardA492'};$e492_2= $obj->{'standardI492'};$e492_3= $obj->{'comments492'};
    $e493_1= $obj->{'standardA493'};$e493_2= $obj->{'standardI493'};$e493_3= $obj->{'comments493'};
    $e494_1= $obj->{'standardA494'};$e494_2= $obj->{'standardI494'};$e494_3= $obj->{'comments494'};
    $e495_1= $obj->{'standardA495'};$e495_2= $obj->{'standardI495'};$e495_3= $obj->{'comments495'};
    $e496_1= $obj->{'standardA496'};$e496_2= $obj->{'standardI496'};$e496_3= $obj->{'comments496'};
    $e497_1= $obj->{'standardA497'};$e497_2= $obj->{'standardI497'};$e497_3= $obj->{'comments497'};
    $e498_1= $obj->{'standardA498'};$e498_2= $obj->{'standardI498'};$e498_3= $obj->{'comments498'};
    $e499_1= $obj->{'standardA499'};$e499_2= $obj->{'standardI499'};$e499_3= $obj->{'comments499'};
    $e500_1= $obj->{'standardA500'};$e500_2= $obj->{'standardI500'};$e500_3= $obj->{'comments500'};
    $e501_1= $obj->{'standardA501'};$e501_2= $obj->{'standardI501'};$e501_3= $obj->{'comments501'};
    $e502_1= $obj->{'standardA502'};$e502_2= $obj->{'standardI502'};$e502_3= $obj->{'comments502'};
    $e503_1= $obj->{'standardA503'};$e503_2= $obj->{'standardI503'};$e503_3= $obj->{'comments503'};
    $e504_1= $obj->{'standardA504'};$e504_2= $obj->{'standardI504'};$e504_3= $obj->{'comments504'};
    $e505_1= $obj->{'standardA505'};$e505_2= $obj->{'standardI505'};$e505_3= $obj->{'comments505'};
    $e506_1= $obj->{'standardA506'};$e506_2= $obj->{'standardI506'};$e506_3= $obj->{'comments506'};
    $e507_1= $obj->{'standardA507'};$e507_2= $obj->{'standardI507'};$e507_3= $obj->{'comments507'};
    $e508_1= $obj->{'standardA508'};$e508_2= $obj->{'standardI508'};$e508_3= $obj->{'comments508'};
    $e509_1= $obj->{'standardA509'};$e509_2= $obj->{'standardI509'};$e509_3= $obj->{'comments509'};
    $e510_1= $obj->{'standardA510'};$e510_2= $obj->{'standardI510'};$e510_3= $obj->{'comments510'};
    $e511_1= $obj->{'standardA511'};$e511_2= $obj->{'standardI511'};$e511_3= $obj->{'comments511'};
    $e512_1= $obj->{'standardA512'};$e512_2= $obj->{'standardI512'};$e512_3= $obj->{'comments512'};
    $e513_1= $obj->{'standardA513'};$e513_2= $obj->{'standardI513'};$e513_3= $obj->{'comments513'};
    $e514_1= $obj->{'standardA514'};$e514_2= $obj->{'standardI514'};$e514_3= $obj->{'comments514'};
    $e515_1= $obj->{'standardA515'};$e515_2= $obj->{'standardI515'};$e515_3= $obj->{'comments515'};
    $e516_1= $obj->{'standardA516'};$e516_2= $obj->{'standardI516'};$e516_3= $obj->{'comments516'};
    $e517_1= $obj->{'standardA517'};$e517_2= $obj->{'standardI517'};$e517_3= $obj->{'comments517'};
    $e518_1= $obj->{'standardA518'};$e518_2= $obj->{'standardI518'};$e518_3= $obj->{'comments518'};
    $e519_1= $obj->{'standardA519'};$e519_2= $obj->{'standardI519'};$e519_3= $obj->{'comments519'};
    $e520_1= $obj->{'standardA520'};$e520_2= $obj->{'standardI520'};$e520_3= $obj->{'comments520'};
    $e521_1= $obj->{'standardA521'};$e521_2= $obj->{'standardI521'};$e521_3= $obj->{'comments521'};
    $e522_1= $obj->{'standardA522'};$e522_2= $obj->{'standardI522'};$e522_3= $obj->{'comments522'};
    $e523_1= $obj->{'standardA523'};$e523_2= $obj->{'standardI523'};$e523_3= $obj->{'comments523'};
    $e524_1= $obj->{'standardA524'};$e524_2= $obj->{'standardI524'};$e524_3= $obj->{'comments524'};
    $e525_1= $obj->{'standardA525'};$e525_2= $obj->{'standardI525'};$e525_3= $obj->{'comments525'};
    $e526_1= $obj->{'standardA526'};$e526_2= $obj->{'standardI526'};$e526_3= $obj->{'comments526'};
    $e527_1= $obj->{'standardA527'};$e527_2= $obj->{'standardI527'};$e527_3= $obj->{'comments527'};
    $e528_1= $obj->{'standardA528'};$e528_2= $obj->{'standardI528'};$e528_3= $obj->{'comments528'};
    $e529_1= $obj->{'standardA529'};$e529_2= $obj->{'standardI529'};$e529_3= $obj->{'comments529'};
    $e530_1= $obj->{'standardA530'};$e530_2= $obj->{'standardI530'};$e530_3= $obj->{'comments530'};
    $e531_1= $obj->{'standardA531'};$e531_2= $obj->{'standardI531'};$e531_3= $obj->{'comments531'};
    $e532_1= $obj->{'standardA532'};$e532_2= $obj->{'standardI532'};$e532_3= $obj->{'comments532'};
    $e533_1= $obj->{'standardA533'};$e533_2= $obj->{'standardI533'};$e533_3= $obj->{'comments533'};
    $e534_1= $obj->{'standardA534'};$e534_2= $obj->{'standardI534'};$e534_3= $obj->{'comments534'};
    $e535_1= $obj->{'standardA535'};$e535_2= $obj->{'standardI535'};$e535_3= $obj->{'comments535'};
    $e536_1= $obj->{'standardA536'};$e536_2= $obj->{'standardI536'};$e536_3= $obj->{'comments536'};
    $e537_1= $obj->{'standardA537'};$e537_2= $obj->{'standardI537'};$e537_3= $obj->{'comments537'};
    $e538_1= $obj->{'standardA538'};$e538_2= $obj->{'standardI538'};$e538_3= $obj->{'comments538'};
    $e539_1= $obj->{'standardA539'};$e539_2= $obj->{'standardI539'};$e539_3= $obj->{'comments539'};
    $e540_1= $obj->{'standardA540'};$e540_2= $obj->{'standardI540'};$e540_3= $obj->{'comments540'};
    $e541_1= $obj->{'standardA541'};$e541_2= $obj->{'standardI541'};$e541_3= $obj->{'comments541'};
    $e542_1= $obj->{'standardA542'};$e542_2= $obj->{'standardI542'};$e542_3= $obj->{'comments542'};
    $e543_1= $obj->{'standardA543'};$e543_2= $obj->{'standardI543'};$e543_3= $obj->{'comments543'};
    $e544_1= $obj->{'standardA544'};$e544_2= $obj->{'standardI544'};$e544_3= $obj->{'comments544'};
    $e545_1= $obj->{'standardA545'};$e545_2= $obj->{'standardI545'};$e545_3= $obj->{'comments545'};
    $e546_1= $obj->{'standardA546'};$e546_2= $obj->{'standardI546'};$e546_3= $obj->{'comments546'};
    $e547_1= $obj->{'standardA547'};$e547_2= $obj->{'standardI547'};$e547_3= $obj->{'comments547'};
    $e548_1= $obj->{'standardA548'};$e548_2= $obj->{'standardI548'};$e548_3= $obj->{'comments548'};
    $e549_1= $obj->{'standardA549'};$e549_2= $obj->{'standardI549'};$e549_3= $obj->{'comments549'};
    $e550_1= $obj->{'standardA550'};$e550_2= $obj->{'standardI550'};$e550_3= $obj->{'comments550'};
    $e551_1= $obj->{'standardA551'};$e551_2= $obj->{'standardI551'};$e551_3= $obj->{'comments551'};
    $e552_1= $obj->{'standardA552'};$e552_2= $obj->{'standardI552'};$e552_3= $obj->{'comments552'};
    $e553_1= $obj->{'standardA553'};$e553_2= $obj->{'standardI553'};$e553_3= $obj->{'comments553'};
    $e554_1= $obj->{'standardA554'};$e554_2= $obj->{'standardI554'};$e554_3= $obj->{'comments554'};
    $e555_1= $obj->{'standardA555'};$e555_2= $obj->{'standardI555'};$e555_3= $obj->{'comments555'};
    $e556_1= $obj->{'standardA556'};$e556_2= $obj->{'standardI556'};$e556_3= $obj->{'comments556'};
    $e557_1= $obj->{'standardA557'};$e557_2= $obj->{'standardI557'};$e557_3= $obj->{'comments557'};
    $e558_1= $obj->{'standardA558'};$e558_2= $obj->{'standardI558'};$e558_3= $obj->{'comments558'};
    $e559_1= $obj->{'standardA559'};$e559_2= $obj->{'standardI559'};$e559_3= $obj->{'comments559'};
    $e560_1= $obj->{'standardA560'};$e560_2= $obj->{'standardI560'};$e560_3= $obj->{'comments560'};
    $e561_1= $obj->{'standardA561'};$e561_2= $obj->{'standardI561'};$e561_3= $obj->{'comments561'};
    $e562_1= $obj->{'standardA562'};$e562_2= $obj->{'standardI562'};$e562_3= $obj->{'comments562'};
    $e563_1= $obj->{'standardA563'};$e563_2= $obj->{'standardI563'};$e563_3= $obj->{'comments563'};
    $e564_1= $obj->{'standardA564'};$e564_2= $obj->{'standardI564'};$e564_3= $obj->{'comments564'};
    $e565_1= $obj->{'standardA565'};$e565_2= $obj->{'standardI565'};$e565_3= $obj->{'comments565'};
    $e566_1= $obj->{'standardA566'};$e566_2= $obj->{'standardI566'};$e566_3= $obj->{'comments566'};
    $e567_1= $obj->{'standardA567'};$e567_2= $obj->{'standardI567'};$e567_3= $obj->{'comments567'};
    $e568_1= $obj->{'standardA568'};$e568_2= $obj->{'standardI568'};$e568_3= $obj->{'comments568'};
    $e569_1= $obj->{'standardA569'};$e569_2= $obj->{'standardI569'};$e569_3= $obj->{'comments569'};
    $e570_1= $obj->{'standardA570'};$e570_2= $obj->{'standardI570'};$e570_3= $obj->{'comments570'};
    $e571_1= $obj->{'standardA571'};$e571_2= $obj->{'standardI571'};$e571_3= $obj->{'comments571'};
    $e572_1= $obj->{'standardA572'};$e572_2= $obj->{'standardI572'};$e572_3= $obj->{'comments572'};
    $e573_1= $obj->{'standardA573'};$e573_2= $obj->{'standardI573'};$e573_3= $obj->{'comments573'};
    $e574_1= $obj->{'standardA574'};$e574_2= $obj->{'standardI574'};$e574_3= $obj->{'comments574'};
    $e575_1= $obj->{'standardA575'};$e575_2= $obj->{'standardI575'};$e575_3= $obj->{'comments575'};
    $e576_1= $obj->{'standardA576'};$e576_2= $obj->{'standardI576'};$e576_3= $obj->{'comments576'};
    $e577_1= $obj->{'standardA577'};$e577_2= $obj->{'standardI577'};$e577_3= $obj->{'comments577'};
    $e578_1= $obj->{'standardA578'};$e578_2= $obj->{'standardI578'};$e578_3= $obj->{'comments578'};
    $e579_1= $obj->{'standardA579'};$e579_2= $obj->{'standardI579'};$e579_3= $obj->{'comments579'};
    $e580_1= $obj->{'standardA580'};$e580_2= $obj->{'standardI580'};$e580_3= $obj->{'comments580'};
    $e581_1= $obj->{'standardA581'};$e581_2= $obj->{'standardI581'};$e581_3= $obj->{'comments581'};
    $e582_1= $obj->{'standardA582'};$e582_2= $obj->{'standardI582'};$e582_3= $obj->{'comments582'};
    $e583_1= $obj->{'standardA583'};$e583_2= $obj->{'standardI583'};$e583_3= $obj->{'comments583'};
    $e584_1= $obj->{'standardA584'};$e584_2= $obj->{'standardI584'};$e584_3= $obj->{'comments584'};
    $e585_1= $obj->{'standardA585'};$e585_2= $obj->{'standardI585'};$e585_3= $obj->{'comments585'};
    $e586_1= $obj->{'standardA586'};$e586_2= $obj->{'standardI586'};$e586_3= $obj->{'comments586'};
    $e587_1= $obj->{'standardA587'};$e587_2= $obj->{'standardI587'};$e587_3= $obj->{'comments587'};
    $e588_1= $obj->{'standardA588'};$e588_2= $obj->{'standardI588'};$e588_3= $obj->{'comments588'};
    $e589_1= $obj->{'standardA589'};$e589_2= $obj->{'standardI589'};$e589_3= $obj->{'comments589'};
    $e590_1= $obj->{'standardA590'};$e590_2= $obj->{'standardI590'};$e590_3= $obj->{'comments590'};
    $e591_1= $obj->{'standardA591'};$e591_2= $obj->{'standardI591'};$e591_3= $obj->{'comments591'};
    $e592_1= $obj->{'standardA592'};$e592_2= $obj->{'standardI592'};$e592_3= $obj->{'comments592'};
    $e593_1= $obj->{'standardA593'};$e593_2= $obj->{'standardI593'};$e593_3= $obj->{'comments593'};
    $e594_1= $obj->{'standardA594'};$e594_2= $obj->{'standardI594'};$e594_3= $obj->{'comments594'};
    $e595_1= $obj->{'standardA595'};$e595_2= $obj->{'standardI595'};$e595_3= $obj->{'comments595'};
    $e596_1= $obj->{'standardA596'};$e596_2= $obj->{'standardI596'};$e596_3= $obj->{'comments596'};
    $e597_1= $obj->{'standardA597'};$e597_2= $obj->{'standardI597'};$e597_3= $obj->{'comments597'};
    $e598_1= $obj->{'standardA598'};$e598_2= $obj->{'standardI598'};$e598_3= $obj->{'comments598'};
    $e599_1= $obj->{'standardA599'};$e599_2= $obj->{'standardI599'};$e599_3= $obj->{'comments599'};
    $e600_1= $obj->{'standardA600'};$e600_2= $obj->{'standardI600'};$e600_3= $obj->{'comments600'};
    $e601_1= $obj->{'standardA601'};$e601_2= $obj->{'standardI601'};$e601_3= $obj->{'comments601'};
    $e602_1= $obj->{'standardA602'};$e602_2= $obj->{'standardI602'};$e602_3= $obj->{'comments602'};
    $e603_1= $obj->{'standardA603'};$e603_2= $obj->{'standardI603'};$e603_3= $obj->{'comments603'};
    $e604_1= $obj->{'standardA604'};$e604_2= $obj->{'standardI604'};$e604_3= $obj->{'comments604'};
    $e605_1= $obj->{'standardA605'};$e605_2= $obj->{'standardI605'};$e605_3= $obj->{'comments605'};
    $e606_1= $obj->{'standardA606'};$e606_2= $obj->{'standardI606'};$e606_3= $obj->{'comments606'};
    $e607_1= $obj->{'standardA607'};$e607_2= $obj->{'standardI607'};$e607_3= $obj->{'comments607'};
    $e608_1= $obj->{'standardA608'};$e608_2= $obj->{'standardI608'};$e608_3= $obj->{'comments608'};
    $e609_1= $obj->{'standardA609'};$e609_2= $obj->{'standardI609'};$e609_3= $obj->{'comments609'};
    $e610_1= $obj->{'standardA610'};$e610_2= $obj->{'standardI610'};$e610_3= $obj->{'comments610'};
    $e611_1= $obj->{'standardA611'};$e611_2= $obj->{'standardI611'};$e611_3= $obj->{'comments611'};
    $e612_1= $obj->{'standardA612'};$e612_2= $obj->{'standardI612'};$e612_3= $obj->{'comments612'};
    $e613_1= $obj->{'standardA613'};$e613_2= $obj->{'standardI613'};$e613_3= $obj->{'comments613'};
    $e614_1= $obj->{'standardA614'};$e614_2= $obj->{'standardI614'};$e614_3= $obj->{'comments614'};
    $e615_1= $obj->{'standardA615'};$e615_2= $obj->{'standardI615'};$e615_3= $obj->{'comments615'};
    $e616_1= $obj->{'standardA616'};$e616_2= $obj->{'standardI616'};$e616_3= $obj->{'comments616'};
    $e617_1= $obj->{'standardA617'};$e617_2= $obj->{'standardI617'};$e617_3= $obj->{'comments617'};
    $e618_1= $obj->{'standardA618'};$e618_2= $obj->{'standardI618'};$e618_3= $obj->{'comments618'};
    $e619_1= $obj->{'standardA619'};$e619_2= $obj->{'standardI619'};$e619_3= $obj->{'comments619'};
    $e620_1= $obj->{'standardA620'};$e620_2= $obj->{'standardI620'};$e620_3= $obj->{'comments620'};
    $e621_1= $obj->{'standardA621'};$e621_2= $obj->{'standardI621'};$e621_3= $obj->{'comments621'};
    $e622_1= $obj->{'standardA622'};$e622_2= $obj->{'standardI622'};$e622_3= $obj->{'comments622'};
    $e623_1= $obj->{'standardA623'};$e623_2= $obj->{'standardI623'};$e623_3= $obj->{'comments623'};
    $e624_1= $obj->{'standardA624'};$e624_2= $obj->{'standardI624'};$e624_3= $obj->{'comments624'};
    $e625_1= $obj->{'standardA625'};$e625_2= $obj->{'standardI625'};$e625_3= $obj->{'comments625'};
    $e626_1= $obj->{'standardA626'};$e626_2= $obj->{'standardI626'};$e626_3= $obj->{'comments626'};
    $e627_1= $obj->{'standardA627'};$e627_2= $obj->{'standardI627'};$e627_3= $obj->{'comments627'};
    $e628_1= $obj->{'standardA628'};$e628_2= $obj->{'standardI628'};$e628_3= $obj->{'comments628'};
    $e629_1= $obj->{'standardA629'};$e629_2= $obj->{'standardI629'};$e629_3= $obj->{'comments629'};
    $e630_1= $obj->{'standardA630'};$e630_2= $obj->{'standardI630'};$e630_3= $obj->{'comments630'};
    $e631_1= $obj->{'standardA631'};$e631_2= $obj->{'standardI631'};$e631_3= $obj->{'comments631'};
    $e632_1= $obj->{'standardA632'};$e632_2= $obj->{'standardI632'};$e632_3= $obj->{'comments632'};
    $e633_1= $obj->{'standardA633'};$e633_2= $obj->{'standardI633'};$e633_3= $obj->{'comments633'};
    $e634_1= $obj->{'standardA634'};$e634_2= $obj->{'standardI634'};$e634_3= $obj->{'comments634'};
    $e635_1= $obj->{'standardA635'};$e635_2= $obj->{'standardI635'};$e635_3= $obj->{'comments635'};
    $e636_1= $obj->{'standardA636'};$e636_2= $obj->{'standardI636'};$e636_3= $obj->{'comments636'};
    $e637_1= $obj->{'standardA637'};$e637_2= $obj->{'standardI637'};$e637_3= $obj->{'comments637'};
    $e638_1= $obj->{'standardA638'};$e638_2= $obj->{'standardI638'};$e638_3= $obj->{'comments638'};
    $e639_1= $obj->{'standardA639'};$e639_2= $obj->{'standardI639'};$e639_3= $obj->{'comments639'};
    $e640_1= $obj->{'standardA640'};$e640_2= $obj->{'standardI640'};$e640_3= $obj->{'comments640'};
    $e641_1= $obj->{'standardA641'};$e641_2= $obj->{'standardI641'};$e641_3= $obj->{'comments641'};
    $e642_1= $obj->{'standardA642'};$e642_2= $obj->{'standardI642'};$e642_3= $obj->{'comments642'};
    $e643_1= $obj->{'standardA643'};$e643_2= $obj->{'standardI643'};$e643_3= $obj->{'comments643'};
    $e644_1= $obj->{'standardA644'};$e644_2= $obj->{'standardI644'};$e644_3= $obj->{'comments644'};
    $e645_1= $obj->{'standardA645'};$e645_2= $obj->{'standardI645'};$e645_3= $obj->{'comments645'};
    $e646_1= $obj->{'standardA646'};$e646_2= $obj->{'standardI646'};$e646_3= $obj->{'comments646'};
    $e647_1= $obj->{'standardA647'};$e647_2= $obj->{'standardI647'};$e647_3= $obj->{'comments647'};
    $e648_1= $obj->{'standardA648'};$e648_2= $obj->{'standardI648'};$e648_3= $obj->{'comments648'};
    $e649_1= $obj->{'standardA649'};$e649_2= $obj->{'standardI649'};$e649_3= $obj->{'comments649'};
    $e650_1= $obj->{'standardA650'};$e650_2= $obj->{'standardI650'};$e650_3= $obj->{'comments650'};
    $e651_1= $obj->{'standardA651'};$e651_2= $obj->{'standardI651'};$e651_3= $obj->{'comments651'};
    $e652_1= $obj->{'standardA652'};$e652_2= $obj->{'standardI652'};$e652_3= $obj->{'comments652'};
    $e653_1= $obj->{'standardA653'};$e653_2= $obj->{'standardI653'};$e653_3= $obj->{'comments653'};
    $e654_1= $obj->{'standardA654'};$e654_2= $obj->{'standardI654'};$e654_3= $obj->{'comments654'};
    $e655_1= $obj->{'standardA655'};$e655_2= $obj->{'standardI655'};$e655_3= $obj->{'comments655'};
    $e656_1= $obj->{'standardA656'};$e656_2= $obj->{'standardI656'};$e656_3= $obj->{'comments656'};
    $e657_1= $obj->{'standardA657'};$e657_2= $obj->{'standardI657'};$e657_3= $obj->{'comments657'};
    $e658_1= $obj->{'standardA658'};$e658_2= $obj->{'standardI658'};$e658_3= $obj->{'comments658'};
    $e659_1= $obj->{'standardA659'};$e659_2= $obj->{'standardI659'};$e659_3= $obj->{'comments659'};
    $e660_1= $obj->{'standardA660'};$e660_2= $obj->{'standardI660'};$e660_3= $obj->{'comments660'};
    $e661_1= $obj->{'standardA661'};$e661_2= $obj->{'standardI661'};$e661_3= $obj->{'comments661'};
    $e662_1= $obj->{'standardA662'};$e662_2= $obj->{'standardI662'};$e662_3= $obj->{'comments662'};
    $e663_1= $obj->{'standardA663'};$e663_2= $obj->{'standardI663'};$e663_3= $obj->{'comments663'};
    $e664_1= $obj->{'standardA664'};$e664_2= $obj->{'standardI664'};$e664_3= $obj->{'comments664'};
    $e665_1= $obj->{'standardA665'};$e665_2= $obj->{'standardI665'};$e665_3= $obj->{'comments665'};
    $e666_1= $obj->{'standardA666'};$e666_2= $obj->{'standardI666'};$e666_3= $obj->{'comments666'};
    $e667_1= $obj->{'standardA667'};$e667_2= $obj->{'standardI667'};$e667_3= $obj->{'comments667'};
    $e668_1= $obj->{'standardA668'};$e668_2= $obj->{'standardI668'};$e668_3= $obj->{'comments668'};
    $e669_1= $obj->{'standardA669'};$e669_2= $obj->{'standardI669'};$e669_3= $obj->{'comments669'};
    $e670_1= $obj->{'standardA670'};$e670_2= $obj->{'standardI670'};$e670_3= $obj->{'comments670'};
    $e671_1= $obj->{'standardA671'};$e671_2= $obj->{'standardI671'};$e671_3= $obj->{'comments671'};
    $e672_1= $obj->{'standardA672'};$e672_2= $obj->{'standardI672'};$e672_3= $obj->{'comments672'};
    $e673_1= $obj->{'standardA673'};$e673_2= $obj->{'standardI673'};$e673_3= $obj->{'comments673'};
    $e674_1= $obj->{'standardA674'};$e674_2= $obj->{'standardI674'};$e674_3= $obj->{'comments674'};
    $e675_1= $obj->{'standardA675'};$e675_2= $obj->{'standardI675'};$e675_3= $obj->{'comments675'};
    $e676_1= $obj->{'standardA676'};$e676_2= $obj->{'standardI676'};$e676_3= $obj->{'comments676'};
    $e677_1= $obj->{'standardA677'};$e677_2= $obj->{'standardI677'};$e677_3= $obj->{'comments677'};
    $e678_1= $obj->{'standardA678'};$e678_2= $obj->{'standardI678'};$e678_3= $obj->{'comments678'};
    $e679_1= $obj->{'standardA679'};$e679_2= $obj->{'standardI679'};$e679_3= $obj->{'comments679'};
    $e680_1= $obj->{'standardA680'};$e680_2= $obj->{'standardI680'};$e680_3= $obj->{'comments680'};
    $e681_1= $obj->{'standardA681'};$e681_2= $obj->{'standardI681'};$e681_3= $obj->{'comments681'};
    $e682_1= $obj->{'standardA682'};$e682_2= $obj->{'standardI682'};$e682_3= $obj->{'comments682'};
    $e683_1= $obj->{'standardA683'};$e683_2= $obj->{'standardI683'};$e683_3= $obj->{'comments683'};
    $e684_1= $obj->{'standardA684'};$e684_2= $obj->{'standardI684'};$e684_3= $obj->{'comments684'};
    $e685_1= $obj->{'standardA685'};$e685_2= $obj->{'standardI685'};$e685_3= $obj->{'comments685'};
    $e686_1= $obj->{'standardA686'};$e686_2= $obj->{'standardI686'};$e686_3= $obj->{'comments686'};
    $e687_1= $obj->{'standardA687'};$e687_2= $obj->{'standardI687'};$e687_3= $obj->{'comments687'};
    }

    /* free result set */
    $result->close();
}

/* close connection */
$mysqli->close();
?>





<?php VDEnd(); ?>



<html hola_ext_inject="disabled" xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script src="Scripting.js"></script> <!--JavaScript for getting report and other misc scripts-->
	<script src = "Commentsview.js"></script> <!--JavaScript for hiding and unhiding comments-->
	<script src = "Kansasplannerbutton.js"></script> <!--JavaScript for Kansas Planner Button-->
	<script src = "TribalButton.js"></script> <!--JavaScript for Tribal Council Button-->
	<script src = "DebrisPlanButton.js"></script> <!--JavaScript for Debris Plan Button-->
	<script src = "BorderCountyButton.js"></script> <!--Java Script for Border County Button-->
	<script src = "FederalLeveeButton.js"></script> <!--JavaScript for Federal Levee-->
	<!--CSS for styling the standards, radio buttons, and comments-->
	<style type="text/css">.tdradios
	{
		text-align: center;
		
		
	}
	
	.tdstandard
	{
		word-wrap: break-word;
		width:"20%";
		text-align: center
	}
	
	.tdcomment
	{
		width: "40%";
		text-align: center;
	}
	</style>

</head>
<body hola-ext-player="1" onload="onLoad();">
<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>
</body>
</html>
<p><br />
<title></title>
<meta content="" name="keywords" /><meta content="" name="description" /></p>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="maincss.css" media="all" rel="stylesheet" type="text/css" />
<link href="fonts.css" media="all" rel="stylesheet" type="text/css" /><!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<div id="header-wrapper">
<div class="container" id="header">
<div id="logo">


<form action="core/process.php" id="registration" method="post" runat="vdaemon">
<input name="formID" type="hidden" value="EOPDATA" /> 
<input name="redirect_to" type="hidden" value="" /> 
<input name="user_id" type="hidden"  value="<?php echo $_SESSION["user_name"]; ?>" />




<h1><a>KPS Assessment Tool</a></h1>
<span><a>Kansas Planning Standards Assessment&nbsp;</a></span>
</div>

<div id="menu">
<ul>
	<li><a accesskey="3" href="admin.php">Admin</a></li>
	<li><a accesskey="6" href="logout.php">Logout</a></li>
</ul>
</div>
</div>
</div>
<title></title>
<link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" />
<p><a accesskey="7" href="reports.html"><script src="//code.jquery.com/jquery-1.10.2.js"></script><script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script></a></p>
<link href="/resources/demos/style.css" rel="stylesheet" /><script>
    $(function() {
      $( "#tabs" ).tabs();
      });
    </script><!--?php
if($_SESSION["user_name"]) {
?-->
<p style="text-indent: 50px;"><button type="submit" value="save" >Save Progress.  <!--?php echo $_SESSION["user_name"]; ?--></button><!--?php
$msg = $_GET['msg'];

if ( $msg == '1' ) {
	echo '<center--><!--<b>Your information was submitted successfully.</b>&#39;; } ?&gt; ?php
}
?--></p>

<p></p>


<!--Tabs System-->

<div id="tabs">
<ul>
	<li><a href="#tabs-0">About KPS</a></li>
	<li><a href="#tabs-1" title="KPS Base Plan">Base Plan</a></li>
	<li><a href="#tabs-2" title="Transportation">ESF-1</a></li>
	<li><a href="#tabs-3" title="Communications">ESF-2</a></li>
	<li><a href="#tabs-4" title="Public Works and Engineering">ESF-3</a></li>
	<li><a href="#tabs-5" title="Firefighting">ESF-4</a></li>
	<li><a href="#tabs-6" title="Emergency Management">ESF-5</a></li>
	<li><a href="#tabs-7" title="Mass Care, Housing, and Human Services">ESF-6</a></li>
	<li><a href="#tabs-8" title="Resource Support">ESF-7</a></li>
	<li><a href="#tabs-9" title="Public Health and Medical">ESF-8</a></li>
	<li><a href="#tabs-10" title="Search and Rescue">ESF-9</a></li>
	<li><a href="#tabs-11" title="Hazardous Materials &amp; Radiological Emergencies">ESF-10</a></li>
	<li><a href="#tabs-12" title="Agriculture and Natural Resources">ESF-11</a></li>
	<li><a href="#tabs-13" title="Energy">ESF-12</a></li>
	<li><a href="#tabs-14" title="Public Safety and Security">ESF-13</a></li>
	<li><a href="#tabs-15" title="Long-Term Community Recovery and Mitigation">ESF-14</a></li>
	<li><a href="#tabs-16" title="External Communications">ESF-15</a></li>
	<li><a href="#tabs-17" title="Required ESF Attachments">Attachments</a></li>
	<li><a href="#tabs-18" title="Report ">Report</a></li>
</ul>

<!--About Tab and Button Tab-->

<div id="tabs-0">
<p><strong>Welcome to the Kansas Planning Standards Assessment Tool Website! We hope you enjoy your stay! </strong></p>


What County will You be reviewing today? <select name="countyName" id="countyID" >
	<option value="blank"></option>
	<option value="Allen">Allen</option>
	<option value="Anderson">Anderson</option>
	<option value="Atchison">Atchison</option>
	<option value="Barber">Barber</option>
	<option value="Barton">Barton</option>
	<option value="Bourbon">Bourbon</option>
	<option value="Brown">Brown</option>
	<option value="Butler">Butler</option>
	<option value="Chase">Chase</option>
	<option value="Chautaqua">Chautaqua</option>
	<option value="Cherokee">Cherokee</option>
	<option value="Cheyenne">Cheyenee</option>
	<option value="Clark">Clark</option>
	<option value="Clay">Clay</option>
	<option value="Cloud">Cloud</option>
	<option value="Coffey">Coffey</option>
	<option value="Comanche">Comanche</option>
	<option value="Cowley">Cowley</option>
	<option value="Crawford">Crawford</option>
	<option value="Decatur">Decatur</option>
	<option value="Dickinson">dickinson</option>
	<option value="Doniphan">Doniphan</option>
	<option value="Douglas">Douglas</option>
	<option value="Edwards">Edwards</option>
	<option value="Elk">Elk</option>
	<option value="Ellis">Ellis</option>
	<option value="Ellsworth">Ellsworth</option>
	<option value="Finney">Finney</option>
	<option value="Ford">Ford</option>
	<option value="Franklin">Franklin</option>
	<option value="Geary">Geary</option>
	<option value="Gove">Gove</option>
	<option value="Graham">Graham</option>
	<option value="Grant">Grant</option>
	<option value="Gray">Gray</option>
	<option value="Greeley">Greeley</option>
	<option value="Greenwood">Greenwood</option>
	<option value="Hamilton">Hamilton</option>
	<option value="Harper">Harper</option>
	<option value="Harvey">Harvey</option>
	<option value="Haskell">Haskell</option>
	<option value="Hodgeman">Hodgeman</option>
	<option value="Jackson">Jackson</option>
	<option value="Jefferson">Jefferson</option>
	<option value="Jewell">Jewell</option>
	<option value="Johnson">Johnson</option>
	<option value="Kearny">Kearny</option>
	<option value="Kingman">Kingman</option>
	<option value="Kiowa">Kiowa</option>
	<option value="Labette">Labette</option>
	<option value="Lane">Lane</option>
	<option value="Leavenworth">Leavenworth</option>
	<option value="Lincoln">Lincoln</option>
	<option value="Linn">Linn</option>
	<option value="Logan">Logan</option>
	<option value="Lyon">Lyon</option>
	<option value="Mcpherson">Mcpherson</option>
	<option value="Marion">Marion</option>
	<option value="Marshall">Marshall</option>
	<option value="Meade">Meade</option>
	<option value="Miami">Miami</option>
	<option value="Mitchell">Mitchell</option>
	<option value="Montgomery">Montgomery</option>
	<option value="Morris">Morris</option>
	<option value="morton">Morton</option>
	<option value="Nemaha">Nemaha</option>
	<option value="Neosho">Neosho</option>
	<option value="Ness">Ness</option>
	<option value="Norton">Norton</option>
	<option value="Osage">Osage</option>
	<option value="Osborne">Osborne</option>
	<option value="Ottawa">Ottawa</option>
	<option value="Pawnee">Pawnee</option>
	<option value="Phillips">Phillips</option>
	<option value="Pottawatomie">Pottawatomie</option>
	<option value="Rawlins">Rawlins</option>
	<option value="Reno">Reno</option>
	<option value="Republic">Republic</option>
	<option value="Rice">Rice</option>
	<option value="Riley">Riley</option>
	<option value="Rooks">Rooks</option>
	<option value="Rush">Rush</option>
	<option value="Russell">Russell</option>
	<option value="Saline">Saline</option>
	<option value="Scott">Scott</option>
	<option value="Sedgwick">Sedgwick</option>
	<option value="Seward">Seward</option>
	<option value="Shawnee">Shawnee</option>
	<option value="Sheridan">Sheridan</option>
	<option value="Sherman">Sherman</option>
	<option value="Smith">Smith</option>
	<option value="Stafford">Stafford</option>
	<option value="Stanton">Stanton</option>
	<option value="Stevens">Stevens</option>
	<option value="Sumner">Sumner</option>
	<option value="Thomas">Thomas</option>
	<option value="Trego">Trego</option>
	<option value="Wabaunsee">Wabaunsee</option>
	<option value="Wallace">Wallace</option>
	<option value="Washington">Washington</option>
	<option value="Wichita">Wichita</option>
	<option value="Wilson">Wilson</option>
	<option value="Woodson">Woodson</option>
	<option value="Wyandotte">Wyandotte</option>

</select> 

<br />
<br />
<button id="kansasplanner" onclick="ksPlanClick()" type="button">Kansas Planner Utilized</button><br />
<br />
<button id="tribal" onclick="tribalClick()" type="button">Tribal Council Planner</button><br />
<br />
<button id="debrisplan" onclick="debrisPlanClick()" type="button">Debris Plan Utilized</button><br />
<br />
<button id="borderCounty" onclick="borderCountyClick()" type="button">Border County</button><br />
<br />
<button id="federalLevee" onclick="federalLeveeClick()" type="button">Federal Levee</button>

<p></p>
</div>
<!--2nd tab (base plan)-->

<div id="tabs-1">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standards</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
	<tr id="row001"> <!--rowID for hiding rows-->
			<td id="number001">(1)</td> <!--numberID-->
			<td class="tdradios"><input id="standardA001" name="radio001" onchange="standardAOnChange(this.id)" type="radio" /></td> <!--accepted radio button-->
			<td class="tdradios"><input id="standardI001" name="radio001" onchange="standardIOnChange(this.id)" type="radio" /></td> <!--incomplete radio button-->
			<td class="tdstandard" id="standard001">Describe the reason for the development of the plan and its annexes.</td> <!--standard-->
			<td class="tdcomment"><input id="comments001" size="60" type="text" /></td> <!--comments field-->
		</tr>
		<tr id="row002">
			<td id="number002">(2)</td>
			<td class="tdradios"><input id="standardA002" name="radio002" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI002" name="radio002" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard002">Identify what the plan contains.</td>
			<td class="tdcomment"><input id="comments002" size="60" type="text" /></td>
		</tr>
		<tr id="row003">
			<td id="number003">(3)</td>
			<td class="tdradios"><input id="standardA003" name="radio003" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI003" name="radio003" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard003">Identify to whom the plan applies.</td>
			<td class="tdcomment"><input id="comments003" size="60" type="text" /></td>
		</tr>
		<tr id="row004">
			<td id="number004">(4)</td>
			<td class="tdradios"><input id="standardA004" name="radio004" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI004" name="radio004" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard004">Summarize the geography of the county.</td>
			<td class="tdcomment"><input id="comments004" size="60" type="text" /></td>
		</tr>
		<tr id="row005">
			<td id="number005">(5)</td>
			<td class="tdradios"><input id="standardA005" name="radio005" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI005" name="radio005" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard005">Summarize Jurisdictions.</td>
			<td class="tdcomment"><input id="comments005" size="60" type="text" /></td>
		</tr>
		<tr id="row006">
			<td id="number006">(6)</td>
			<td class="tdradios"><input id="standardA006" name="radio006" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI006" name="radio006" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard006">Summarize economy.</td>
			<td class="tdcomment"><input id="comments006" size="60" type="text" /></td>
		</tr>
		<tr id="row007">
			<td id="number007">(7)</td>
			<td class="tdradios"><input id="standardA007" name="radio007" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI007" name="radio007" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard007">Summarize demographics.</td>
			<td class="tdcomment"><input id="comments007" size="60" type="text" /></td>
		</tr>
		<tr id="row008">
			<td id="number008">(8)</td>
			<td class="tdradios"><input id="standardA008" name="radio008" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI008" name="radio008" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard008">Summarize Shelters (Human and Animal).</td>
			<td class="tdcomment"><input id="comments008" size="60" type="text" /></td>
		</tr>
		<tr id="row009">
			<td id="number009">(9)</td>
			<td class="tdradios"><input id="standardA009" name="radio009" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI009" name="radio009" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard009">Summarize Schools.</td>
			<td class="tdcomment"><input id="comments009" size="60" type="text" /></td>
		</tr>
		<tr id="row010">
			<td id="number010">(10)</td>
			<td class="tdradios"><input id="standardA010" name="radio010" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI010" name="radio010" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard010">Summarize Parks/Public Land.</td>
			<td class="tdcomment"><input id="comments010" size="60" type="text" /></td>
		</tr>
		<tr id="row011">
			<td id="number011">(11)</td>
			<td class="tdradios"><input id="standardA011" name="radio011" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI011" name="radio011" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard011">Summarize Law Enforcement.</td>
			<td class="tdcomment"><input id="comments011" size="60" type="text" /></td>
		</tr>
		<tr id="row012">
			<td id="number012">(12)</td>
			<td class="tdradios"><input id="standardA012" name="radio012" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI012" name="radio012" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard012">Summarize Medical Service.</td>
			<td class="tdcomment"><input id="comments012" size="60" type="text" /></td>
		</tr>
		<tr id="row013">
			<td id="number013">(13)</td>
			<td class="tdradios"><input id="standardA013" name="radio013" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI013" name="radio013" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard013">Summarize Fire Districts.</td>
			<td class="tdcomment"><input id="comments013" size="60" type="text" /></td>
		</tr>
		<tr id="row014">
			<td id="number014">(14)</td>
			<td class="tdradios"><input id="standardA014" name="radio014" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI014" name="radio014" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard014">Summarize Emergency Management.</td>
			<td class="tdcomment"><input id="comments014" size="60" type="text" /></td>
		</tr>
		<tr id="row015">
			<td id="number015">(15)</td>
			<td class="tdradios"><input id="standardA015" name="radio015" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI015" name="radio015" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard015">Summarize Communications/Dispatch Centers.</td>
			<td class="tdcomment"><input id="comments015" size="60" type="text" /></td>
		</tr>
		<tr id="row016">
			<td id="number016">(16)</td>
			<td class="tdradios"><input id="standardA016" name="radio016" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI016" name="radio016" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard016">Summarize Primary and Secondary Education Institutions .</td>
			<td class="tdcomment"><input id="comments016" size="60" type="text" /></td>
		</tr>
		<tr id="row017">
			<td id="number017">(17)</td>
			<td class="tdradios"><input id="standardA017" name="radio017" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI017" name="radio017" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard017">Summarize colleges.</td>
			<td class="tdcomment"><input id="comments017" size="60" type="text" /></td>
		</tr>
		<tr id="row018">
			<td id="number018">(18)</td>
			<td class="tdradios"><input id="standardA018" name="radio018" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI018" name="radio018" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard018">Summarize Libraries/Museums.</td>
			<td class="tdcomment"><input id="comments018" size="60" type="text" /></td>
		</tr>
		<tr id="row019">
			<td id="number019">(19)</td>
			<td class="tdradios"><input id="standardA019" name="radio019" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI019" name="radio019" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard019">Summarize Critical Facilities.</td>
			<td class="tdcomment"><input id="comments019" size="60" type="text" /></td>
		</tr>
		<tr id="row020">
			<td id="number020">(20)</td>
			<td class="tdradios"><input id="standardA020" name="radio020" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI020" name="radio020" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard020">Summarize Demographics.</td>
			<td class="tdcomment"><input id="comments020" size="60" type="text" /></td>
		</tr>
		<tr id="row021">
			<td id="number021">(21)</td>
			<td class="tdradios"><input id="standardA021" name="radio021" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI021" name="radio021" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard021">Summarize Vulnerable Needs.</td>
			<td class="tdcomment"><input id="comments021" size="60" type="text" /></td>
		</tr>
		<tr id="row022">
			<td id="number022">(22)</td>
			<td class="tdradios"><input id="standardA022" name="radio022" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI022" name="radio022" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard022">Summarize/identify the hazards that pose a unique risk to the jurisdiction and would result in the need to activate this plan (e.g., threatened or actual natural disasters acts of terrorism, or other human caused disasters.).</td>
			<td class="tdcomment"><input id="comments022" size="60" type="text" /></td>
		</tr>
		<tr id="row023">
			<td id="number023">(23)</td>
			<td class="tdradios"><input id="standardA023" name="radio023" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI023" name="radio023" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard023">Summarize/identify the probable high risk areas that are likely to be impacted by defined hazards (e.g., hospitals, congregate care facilities, wildlife refuges, types/numbers of homes/business in floodplains, areas around chemical facilities).</td>
			<td class="tdcomment"><input id="comments023" size="60" type="text" /></td>
		</tr>
		<tr id="row024">
			<td id="number024">(24)</td>
			<td class="tdradios"><input id="standardA024" name="radio024" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI024" name="radio024" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard024">Summarize/identify the defined risks that have occurred and the likelihood they will continue to occur within the jurisdiction (e.g., historical frequency, probable future risk, national security threat assessments).</td>
			<td class="tdcomment"><input id="comments024" size="60" type="text" /></td>
		</tr>
		<tr id="row025">
			<td id="number025">(25)</td>
			<td class="tdradios"><input id="standardA025" name="radio025" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI025" name="radio025" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard025">Describe how the intelligence from threat analysis via state/local fusion centers, joint terrorism task forces, national intelligence organizations, etc. has been incorporated into the jurisdiction&rsquo;s Hazard and Threat Analysis.</td>
			<td class="tdcomment"><input id="comments025" size="60" type="text" /></td>
		</tr>
		<tr id="row026">
			<td id="number026">(26)</td>
			<td class="tdradios"><input id="standardA026" name="radio026" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI026" name="radio026" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard026">Describe how Critical Infrastructure and Key Resources (CIKR) protection activities have been incorporated into the vulnerability and impact analysis.</td>
			<td class="tdcomment"><input id="comments026" size="60" type="text" /></td>
		</tr>
		<tr id="row027">
			<td id="number027">(27)</td>
			<td class="tdradios"><input id="standardA027" name="radio027" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI027" name="radio027" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard027">Describe how agricultural security; food supply security; cyber security; Chemical, Biological, Radiological, Nuclear, and Explosive (CBRNE) events; and pandemics (those located originating in the jurisdiction, as well as a non-local, nationwide, or global event) have been assessed and Incorporated.</td>
			<td class="tdcomment"><input id="comments027" size="60" type="text" /></td>
		</tr>
		<tr id="row028">
			<td id="number028">(28)</td>
			<td class="tdradios"><input id="standardA028" name="radio028" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI028" name="radio028" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard028">Describe the assumptions made and the methods used to complete the jurisdiction&rsquo;s Hazard and Threat Analysis, including what tools or methodologies were used to complete the analysis (e.g., a state&rsquo;s Hazard Analysis and Risk Assessment Manual, Mitigation Plan guidance, vulnerability assessment criteria, and consequence analysis criteria). Include maps that show the high-risk areas that are likely to be impacted by the identified risks (e.g., residential/commercial areas within defined floodplains, earthquake fault zones, vulnerable zones for HAZMAT facilities/routes, areas within ingestion zones for nuclear power plants, critical infrastructure).</td>
			<td class="tdcomment"><input id="comments028" size="60" type="text" /></td>
		</tr>
		<tr id="row029">
			<td id="number029">(29)</td>
			<td class="tdradios"><input id="standardA029" name="radio029" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI029" name="radio029" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard029">Describe/identify the risks that could originate in a neighboring jurisdiction and could create hazardous conditions in this jurisdiction (e.g., watershed runoff, chemical incident, riot/terrorist act).</td>
			<td class="tdcomment"><input id="comments029" size="60" type="text" /></td>
		</tr>
		<tr id="row030">
			<td id="number030">(30)</td>
			<td class="tdradios"><input id="standardA030" name="radio030" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI030" name="radio030" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard030">Describe/identify the unique time variables that may influence the Hazard and Threat Analysis and pre-planning for the emergency (e.g., rush hours, annual festivals, seasonal events, how quickly the event occurs, the time of day that the event occurs).</td>
			<td class="tdcomment"><input id="comments030" size="60" type="text" /></td>
		</tr>
		<tr id="row031">
			<td id="number031">(31)</td>
			<td class="tdradios"><input id="standardA031" name="radio031" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI031" name="radio031" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard031">Summarize the jurisdiction&rsquo;s prevention, protection, response, and recovery capabilities involving the defined hazards.</td>
			<td class="tdcomment"><input id="comments031" size="60" type="text" /></td>
		</tr>
		<tr id="row032">
			<td id="number032">(32)</td>
			<td class="tdradios"><input id="standardA032" name="radio032" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI032" name="radio032" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard032">Describes the jurisdiction&rsquo;s limitations on the basis of training, equipment, or personnel.</td>
			<td class="tdcomment"><input id="comments032" size="60" type="text" /></td>
		</tr>
		<tr id="row033">
			<td id="number033">(33)</td>
			<td class="tdradios"><input id="standardA033" name="radio033" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI033" name="radio033" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard033">Provide a brief summary statement about specialized equipment, facilities, personnel, and emergency response organizations currently available to respond to disasters.</td>
			<td class="tdcomment"><input id="comments033" size="60" type="text" /></td>
		</tr>
		<tr id="row034">
			<td id="number034">(34)</td>
			<td class="tdradios"><input id="standardA034" name="radio034" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI034" name="radio034" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard034">Provide information about specialized equipment, facilities, personnel, and emergency response organizations currently available to support children, individuals with disabilities, and others with access and functional needs.</td>
			<td class="tdcomment"><input id="comments034" size="60" type="text" /></td>
		</tr>
		<tr id="row035">
			<td id="number035">(35)</td>
			<td class="tdradios"><input id="standardA035" name="radio035" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI035" name="radio035" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard035">Include a list of planning assumptions on which the plan and its annexes are based</td>
			<td class="tdcomment"><input id="comments035" size="60" type="text" /></td>
		</tr>
		<tr id="row036">
			<td id="number036">(36)</td>
			<td class="tdradios"><input id="standardA036" name="radio036" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI036" name="radio036" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard036">Describe how plans take into account the physical, programmatic, and communications needs of individuals with disabilities, children, and others with access and/or functional needs.</td>
			<td class="tdcomment"><input id="comments036" size="60" type="text" /></td>
		</tr>
		<tr id="row037">
			<td id="number037">(37)</td>
			<td class="tdradios"><input id="standardA037" name="radio037" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI037" name="radio037" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard037">Summarize the common emergency management responsibilities of the federal government.</td>
			<td class="tdcomment"><input id="comments037" size="60" type="text" /></td>
		</tr>
		<tr id="row038">
			<td id="number038">(38)</td>
			<td class="tdradios"><input id="standardA038" name="radio038" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI038" name="radio038" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard038">Summarize the common emergency management responsibilities of the state government.</td>
			<td class="tdcomment"><input id="comments038" size="60" type="text" /></td>
		</tr>
		<tr id="row039" style="display: none">
			<td id="number039">(39)</td>
			<td class="tdradios"><input id="standardA039" name="radio039" onchange="standardAOnChange(this.id)" type="radio" checked="checked" /></td>
			<td class="tdradios"><input id="standardI039" name="radio039" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard039">Summarize the common emergency management responsibilities of the tribal chief executive <!--what do we do for this one as applicable? default to accepted?--> officer. (As Applicable)</td>
			<td class="tdcomment"><input id="comments039" size="60" type="text" /></td>
		</tr>
		<tr id="row040">
			<td id="number040">(40)</td>
			<td class="tdradios"><input id="standardA040" name="radio040" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI040" name="radio040" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard040">Summarize the common emergency management responsibilities of the county government.</td>
			<td class="tdcomment"><input id="comments040" size="60" type="text" /></td>
		</tr>
		<tr id="row041">
			<td id="number041">(41)</td>
			<td class="tdradios"><input id="standardA041" name="radio041" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI041" name="radio041" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard041">Summarize the common emergency management responsibilities of the municipal government.</td>
			<td class="tdcomment"><input id="comments041" size="60" type="text" /></td>
		</tr>
		<tr id="row042">
			<td id="number042">(42)</td>
			<td class="tdradios"><input id="standardA042" name="radio042" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI042" name="radio042" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard042">Identify and summarize emergency management responsibilities of special districts.</td>
			<td class="tdcomment"><input id="comments042" size="60" type="text" /></td>
		</tr>
		<tr id="row043">
			<td id="number043">(43)</td>
			<td class="tdradios"><input id="standardA043" name="radio043" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI043" name="radio043" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard043">Summarize the common emergency management responsibilities of the private sector.</td>
			<td class="tdcomment"><input id="comments043" size="60" type="text" /></td>
		</tr>
		<tr id="row044">
			<td id="number044">(44)</td>
			<td class="tdradios"><input id="standardA044" name="radio044" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI044" name="radio044" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard044">Summarize the common emergency management responsibilities of non-governmental and volunteer agencies.</td>
			<td class="tdcomment"><input id="comments044" size="60" type="text" /></td>
		</tr>
		<tr id="row045">
			<td id="number045">(45)</td>
			<td class="tdradios"><input id="standardA045" name="radio045" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI045" name="radio045" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard045">Summarize the common emergency management responsibilities of hospitals.</td>
			<td class="tdcomment"><input id="comments045" size="60" type="text" /></td>
		</tr>
		<tr id="row046">
			<td id="number046">(46)</td>
			<td class="tdradios"><input id="standardA046" name="radio046" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI046" name="radio046" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard046">Summarize the common emergency management responsibilities of school districts.</td>
			<td class="tdcomment"><input id="comments046" size="60" type="text" /></td>
		</tr>
		<tr id="row047">
			<td id="number047">(47)</td>
			<td class="tdradios"><input id="standardA047" name="radio047" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI047" name="radio047" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard047">Identify who has responsibility for legal advice and how legal question/issues are resolved.</td>
			<td class="tdcomment"><input id="comments047" size="60" type="text" /></td>
		</tr>
		<tr id="row048">
			<td id="number048">(48)</td>
			<td class="tdradios"><input id="standardA048" name="radio048" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI048" name="radio048" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard048">Summarize the responsibilities of ESF coordinating, primary and support agencies.</td>
			<td class="tdcomment"><input id="comments048" size="60" type="text" /></td>
		</tr>
		<tr id="row049">
			<td id="number049">(49)</td>
			<td class="tdradios"><input id="standardA049" name="radio049" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI049" name="radio049" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard049">Summarize the common emergency management responsibilities of citizens.</td>
			<td class="tdcomment"><input id="comments049" size="60" type="text" /></td>
		</tr>
		<tr id="row050">
			<td id="number050">(50)</td>
			<td class="tdradios"><input id="standardA050" name="radio050" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI050" name="radio050" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard050">Describe the jurisdiction&#39;s overall approach to emergency management.</td>
			<td class="tdcomment"><input id="comments050" size="60" type="text" /></td>
		</tr>
		<tr id="row051">
			<td id="number051">(51)</td>
			<td class="tdradios"><input id="standardA051" name="radio051" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI051" name="radio051" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard051">Describe the process by which the emergency management agency coordinates with all appropriate agencies, boards, or division within the jurisdiction.</td>
			<td class="tdcomment"><input id="comments051" size="60" type="text" /></td>
		</tr>
		<tr id="row052">
			<td id="number052">(52)</td>
			<td class="tdradios"><input id="standardA052" name="radio052" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI052" name="radio052" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard052">Describe the process, templates, and individuals involved in issuing a local disaster declaration and how the declaration will be coordinated with neighboring jurisdictions and the state.</td>
			<td class="tdcomment"><input id="comments052" size="60" type="text" /></td>
		</tr>
		<tr id="row053">
			<td id="number053">(53)</td>
			<td class="tdradios"><input id="standardA053" name="radio053" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI053" name="radio053" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard053">Identify a 24-hour emergency point of contact.</td>
			<td class="tdcomment"><input id="comments053" size="60" type="text" /></td>
		</tr>
		<tr id="row054">
			<td id="number054">(54)</td>
			<td class="tdradios"><input id="standardA054" name="radio054" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI054" name="radio054" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard054">Describe who has the authority to activate the plan.</td>
			<td class="tdcomment"><input id="comments054" size="60" type="text" /></td>
		</tr>
		<tr id="row055">
			<td id="number055">(55)</td>
			<td class="tdradios"><input id="standardA055" name="radio055" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI055" name="radio055" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard055">Describe activation level of operation before, during, and after an incident.</td>
			<td class="tdcomment"><input id="comments055" size="60" type="text" /></td>
		</tr>
		<tr id="row056">
			<td id="number056">(56)</td>
			<td class="tdradios"><input id="standardA056" name="radio056" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI056" name="radio056" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard056">Indicate how the EOC will be staffed during each level of operations.</td>
			<td class="tdcomment"><input id="comments056" size="60" type="text" /></td>
		</tr>
		<tr id="row057">
			<td id="number057">(57)</td>
			<td class="tdradios"><input id="standardA057" name="radio057" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI057" name="radio057" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard057">Describe information dissemination methods and protocols.</td>
			<td class="tdcomment"><input id="comments057" size="60" type="text" /></td>
		</tr>
		<tr id="row058">
			<td id="number058">(58)</td>
			<td class="tdradios"><input id="standardA058" name="radio058" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI058" name="radio058" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard058">Describe critical information needs and collection priorities.</td>
			<td class="tdcomment"><input id="comments058" size="60" type="text" /></td>
		</tr>
		<tr id="row059">
			<td id="number059">(59)</td>
			<td class="tdradios"><input id="standardA059" name="radio059" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI059" name="radio059" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard059">Describe collaboration with the general public, to include sector-specific watch programs.</td>
			<td class="tdcomment"><input id="comments059" size="60" type="text" /></td>
		</tr>
		<tr id="row060">
			<td id="number060">(60)</td>
			<td class="tdradios"><input id="standardA060" name="radio060" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI060" name="radio060" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard060">Summarize who is responsible for directing and controlling emergency response and recovery activities.</td>
			<td class="tdcomment"><input id="comments060" size="60" type="text" /></td>
		</tr>
		<tr id="row061">
			<td id="number061">(61)</td>
			<td class="tdradios"><input id="standardA061" name="radio061" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI061" name="radio061" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard061">Summarize who is responsible for coordinating the overall emergency management program.</td>
			<td class="tdcomment"><input id="comments061" size="60" type="text" /></td>
		</tr>
		<tr id="row062">
			<td id="number062">(62)</td>
			<td class="tdradios"><input id="standardA062" name="radio062" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI062" name="radio062" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard062">Discuss multi-jurisdictional coordination systems and processes used during an emergency (if applicable).</td>
			<td class="tdcomment"><input id="comments062" size="60" type="text" /></td>
		</tr>
		<tr id="row063">
			<td id="number063">(63)</td>
			<td class="tdradios"><input id="standardA063" name="radio63" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI063" name="radio63" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard063">Provide a matrix that summarizes the lead organization for each emergency support function (ESF).</td>
			<td class="tdcomment"><input id="comments063" size="60" type="text" /></td>
		</tr>
		<tr id="row064">
			<td id="number064">(64)</td>
			<td class="tdradios"><input id="standardA064" name="radio064" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI064" name="radio064" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard064">Describe/identify the steps taken to overcome the jurisdiction&#39;s identified resource shortfalls, and the process to request those resources.</td>
			<td class="tdcomment"><input id="comments064" size="60" type="text" /></td>
		</tr>
		<tr id="row065">
			<td id="number065">(65)</td>
			<td class="tdradios"><input id="standardA065" name="radio065" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI065" name="radio065" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard065">Describe the process used to identify private agencies/contractors that will support resource management issues.</td>
			<td class="tdcomment"><input id="comments065" size="60" type="text" /></td>
		</tr>
		<tr id="row066">
			<td id="number066">(66)</td>
			<td class="tdradios"><input id="standardA066" name="radio66" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI066" name="radio66" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard066">Describe the process of documenting and tracking resources and costs for mission assignments.</td>
			<td class="tdcomment"><input id="comments066" size="60" type="text" /></td>
		</tr>
		<tr id="row067">
			<td id="number067">(67)</td>
			<td class="tdradios"><input id="standardA067" name="radio067" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI067" name="radio067" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard067">Describe/identify the steps taken to request state aid/resources.</td>
			<td class="tdcomment"><input id="comments067" size="60" type="text" /></td>
		</tr>
		<tr id="row068">
			<td id="number068">(68)</td>
			<td class="tdradios"><input id="standardA068" name="radio068" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI068" name="radio068" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard068">Briefly describe the state wide mutual aid system.</td>
			<td class="tdcomment"><input id="comments068" size="60" type="text" /></td>
		</tr>
		<tr id="row069">
			<td id="number069">(69)</td>
			<td class="tdradios"><input id="standardA069" name="radio069" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI069" name="radio069" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard069">Describe what mutual aid agreements (MAAs) are in place for quick activation and sharing of resources during an emergency.</td>
			<td class="tdcomment"><input id="comments069" size="60" type="text" /></td>
		</tr>
		<tr id="row070">
			<td id="number070">(70)</td>
			<td class="tdradios"><input id="standardA070" name="radio070" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI070" name="radio070" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard070">Briefly describe the process of requesting mutual aid.</td>
			<td class="tdcomment"><input id="comments070" size="60" type="text" /></td>
		</tr>
		<tr id="row071">
			<td id="number071">(71)</td>
			<td class="tdradios"><input id="standardA071" name="radio071" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI071" name="radio071" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard071">Briefly describe the interstate civil defense compact.</td>
			<td class="tdcomment"><input id="comments071" size="60" type="text" /></td>
		</tr>
		<tr id="row072">
			<td id="number072">(72)</td>
			<td class="tdradios"><input id="standardA072" name="radio072" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI072" name="radio072" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard072">Briefly describe the Emergency Management Assistance Compact (EMAC).</td>
			<td class="tdcomment"><input id="comments072" size="60" type="text" /></td>
		</tr>
		<tr id="row073">
			<td id="number073">(73)</td>
			<td class="tdradios"><input id="standardA073" name="radio073" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI073" name="radio073" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard073">Describe the framework for delivering communication support and how the jurisdiction&#39;s communications integrate into regional or national disaster communications network.</td>
			<td class="tdcomment"><input id="comments073" size="60" type="text" /></td>
		</tr>
		<tr id="row074">
			<td id="number074">(74)</td>
			<td class="tdradios"><input id="standardA074" name="radio074" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI074" name="radio074" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard074">Identify and summarize any interoperable communications plans.</td>
			<td class="tdcomment"><input id="comments074" size="60" type="text" /></td>
		</tr>
		<tr id="row075">
			<td id="number075">(75)</td>
			<td class="tdradios"><input id="standardA075" name="radio075" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI075" name="radio075" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard075">Describe plans for coordination with the State of Kansas Intelligence Fusion Center.</td>
			<td class="tdcomment"><input id="comments075" size="60" type="text" /></td>
		</tr>
		<tr id="row076">
			<td id="number076">(76)</td>
			<td class="tdradios"><input id="standardA076" name="radio076" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI076" name="radio076" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard076">Identify agency responsible for liaison roles between local agencies and State of Kansas Intelligence Fusion Center.</td>
			<td class="tdcomment"><input id="comments076" size="60" type="text" /></td>
		</tr>
		<tr id="row077">
			<td id="number077">(77)</td>
			<td class="tdradios"><input id="standardA077" name="radio077" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI077" name="radio077" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard077">Describe how the jurisdiction maintains a current list of available NIMS typed resources, resources not meeting a NIMs type, and credentialed personnel.</td>
			<td class="tdcomment"><input id="comments077" size="60" type="text" /></td>
		</tr>
		<tr id="row078">
			<td id="number078">(78)</td>
			<td class="tdradios"><input id="standardA078" name="radio078" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI078" name="radio078" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard078">Summarize the process used to submit the plan for review, coordination, and/or evaluation by other jurisdictions/organizations.</td>
			<td class="tdcomment"><input id="comments078" size="60" type="text" /></td>
		</tr>
		<tr id="row079">
			<td id="number079">(79)</td>
			<td class="tdradios"><input id="standardA079" name="radio079" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI079" name="radio079" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard079">Describe the responsibility of each organization/agency to review and submit changes to its respective portions of the plan.</td>
			<td class="tdcomment"><input id="comments079" size="60" type="text" /></td>
		</tr>
		<tr id="row080">
			<td id="number080">(80)</td>
			<td class="tdradios"><input id="standardA080" name="radio080" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI080" name="radio080" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard080">Describe how or where the plan is made available to the public.</td>
			<td class="tdcomment"><input id="comments080" size="60" type="text" /></td>
		</tr>
		<tr id="row081">
			<td id="number081">(81)</td>
			<td class="tdradios"><input id="standardA081" name="radio081" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI081" name="radio081" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard081">Describe the process used to review and revise the plan annually or if changes in the jurisdiction warrants.</td>
			<td class="tdcomment"><input id="comments081" size="60" type="text" /></td>
		</tr>
		<tr id="row082">
			<td id="number082">(82)</td>
			<td class="tdradios"><input id="standardA082" name="radio082" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI082" name="radio082" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard082">Identify other response/support agency plans that directly support the implementation of this plan (hospital, school emergency, facility plans).</td>
			<td class="tdcomment"><input id="comments082" size="60" type="text" /></td>
		</tr>
		<tr id="row083">
			<td id="number083">(83)</td>
			<td class="tdradios"><input id="standardA083" name="radio083" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI083" name="radio083" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard083">Summarize who is responsible for managing the training and exercise component for the emergency response function of the plan.</td>
			<td class="tdcomment"><input id="comments083" size="60" type="text" /></td>
		</tr>
		<tr id="row084">
			<td id="number084">(84)</td>
			<td class="tdradios"><input id="standardA084" name="radio084" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI084" name="radio084" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard084">Describe how integration of exercises is coordinated in the jurisdiction through an annual Training Exercise Planning Workshop (TEPW).</td>
			<td class="tdcomment"><input id="comments084" size="60" type="text" /></td>
		</tr>
		<tr id="row085">
			<td id="number085">(85)</td>
			<td class="tdradios"><input id="standardA085" name="radio085" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI085" name="radio085" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard085">Identify agencies that have exercise programs including hospitals, health departments, airport, school, adult care facilities, correctional facilities, etc.</td>
			<td class="tdcomment"><input id="comments085" size="60" type="text" /></td>
		</tr>
		<tr id="row086">
			<td id="number086">(86)</td>
			<td class="tdradios"><input id="standardA086" name="radio086" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI086" name="radio086" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard086">Maintain a training log that outlines the name, type, status, title, and a thorough description including persons involved, event schedule outline, actions taken, etc.</td>
			<td class="tdcomment"><input id="comments086" size="60" type="text" /></td>
		</tr>
		<tr id="row087">
			<td id="number087">(87)</td>
			<td class="tdradios"><input id="standardA087" name="radio087" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI087" name="radio087" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard087">Training and Plan Maintenance entries must be from current approval period.</td>
			<td class="tdcomment"><input id="comments087" size="60" type="text" /></td>
		</tr>
		<tr id="row088">
			<td id="number088">(88)</td>
			<td class="tdradios"><input id="standardA088" name="radio088" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI088" name="radio088" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard088">Identify supporting plans (Hospital, School, Incident Action Plans) within jurisdiction.</td>
			<td class="tdcomment"><input id="comments088" size="60" type="text" /></td>
		</tr>
		<tr id="row089">
			<td id="number089">(89)</td>
			<td class="tdradios"><input id="standardA089" name="radio089" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI089" name="radio089" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard089">Supporting Plans must be less than 5 years old.</td>
			<td class="tdcomment"><input id="comments089" size="60" type="text" /></td>
		</tr>
		<tr id="row090">
			<td id="number090">(90)</td>
			<td class="tdradios"><input id="standardA090" name="radio090" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI090" name="radio090" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard090">Provide documents that support an inclusive Emergency Operation Planning process (checklist, sign in).</td>
			<td class="tdcomment"><input id="comments090" size="60" type="text" /></td>
		</tr>
		<tr id="row091">
			<td id="number091">(91)</td>
			<td class="tdradios"><input id="standardA091" name="radio091" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI091" name="radio091" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard091">Any data must be from the last census or last available updated date.</td>
			<td class="tdcomment"><input id="comments091" size="60" type="text" /></td>
		</tr>
		<tr id="row092">
			<td id="number092">(92)</td>
			<td class="tdradios"><input id="standardA092" name="radio092" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI092" name="radio092" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard092">Describe the methods and agencies used to organize and conduct a review of a disaster and/or exercise.</td>
			<td class="tdcomment"><input id="comments092" size="60" type="text" /></td>
		</tr>
		<tr id="row093">
			<td id="number093">(93)</td>
			<td class="tdradios"><input id="standardA093" name="radio093" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI093" name="radio093" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard093">Describe how the jurisdiction ensure the deficiencies and recommendations identified in the AAR are completed.</td>
			<td class="tdcomment"><input id="comments093" size="60" type="text" /></td>
		</tr>
		<tr id="row094">
			<td id="number094">(94)</td>
			<td class="tdradios"><input id="standardA094" name="radio094" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI094" name="radio094" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard094">Coordination of Mitigation Activities</td>
			<!--do we need to add more for this one?-->
			<td class="tdcomment"><input id="comments094" size="60" type="text" /></td>
		</tr>
		<tr id="row095">
			<td id="number095">(95)</td>
			<td class="tdradios"><input id="standardA095" name="radio095" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI095" name="radio095" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard095">Mitigation Programs.</td>
			<td class="tdcomment"><input id="comments095" size="60" type="text" /></td>
		</tr>
		<tr id="row096">
			<td id="number096">(96)</td>
			<td class="tdradios"><input id="standardA096" name="radio096" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI096" name="radio096" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard096">Identify agencies responsible for collection, organizing, and reporting damage information to EOC within the first 12-36 hours of the disaster/emergency and how duplicated reports will be avoided to assure accurate information.</td>
			<td class="tdcomment"><input id="comments096" size="60" type="text" /></td>
		</tr>
		<tr id="row097">
			<td id="number097">(97)</td>
			<td class="tdradios"><input id="standardA097" name="radio097" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI097" name="radio097" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard097">Identify agency responsible for conducting and coordinating damage assessments on private property (home owners, business, renters).</td>
			<td class="tdcomment"><input id="comments097" size="60" type="text" /></td>
		</tr>
		<tr id="row098">
			<td id="number098">(98)</td>
			<td class="tdradios"><input id="standardA098" name="radio098" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI098" name="radio098" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard098">Identify agency responsible for conducting and coordinating damage assessments on public property (government, private, not-for profit).</td>
			<td class="tdcomment"><input id="comments098" size="60" type="text" /></td>
		</tr>
		<tr id="row099">
			<td id="number099">(99)</td>
			<td class="tdradios"><input id="standardA099" name="radio099" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI099" name="radio099" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard099">Identify the agency responsible and describe the process for reporting damage assessments to Kansas Division of Emergency Management.</td>
			<td class="tdcomment"><input id="comments099" size="60" type="text" /></td>
		</tr>
		<tr id="row100">
			<td id="number100">(100)</td>
			<td class="tdradios"><input id="standardA100" name="radio100" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI100" name="radio100" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard100">Summarize the types of disaster declarations issued by federal officials and the types of assistance to include: Individual Assistance, Public Assistance, Hazard Mitigation.</td>
			<td class="tdcomment"><input id="comments100" size="60" type="text" /></td>
		</tr>
		<tr id="row101">
			<td id="number101">(101)</td>
			<td class="tdradios"><input id="standardA101" name="radio101" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI101" name="radio101" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard101">Describe the process agencies use to document the actions taken during and after the emergency.</td>
			<td class="tdcomment"><input id="comments101" size="60" type="text" /></td>
		</tr>
		<tr id="row102">
			<td id="number102">(102)</td>
			<td class="tdradios"><input id="standardA102" name="radio102" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI102" name="radio102" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard102">Describe the reasons for documenting the actions taken during both the response and recovery phases of the disaster.</td>
			<td class="tdcomment"><input id="comments102" size="60" type="text" /></td>
		</tr>
		<tr id="row103">
			<td id="number103">(103)</td>
			<td class="tdradios"><input id="standardA103" name="radio103" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI103" name="radio103" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard103">Identify and describe the actions taken to document the cost incurred during response and recovery operations.</td>
			<td class="tdcomment"><input id="comments103" size="60" type="text" /></td>
		</tr>
		<tr id="row104">
			<td id="number104">(104)</td>
			<td class="tdradios"><input id="standardA104" name="radio104" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI104" name="radio104" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard104">Describe how local political jurisdictions and their response/support agencies can recover eligible response costs.</td>
			<td class="tdcomment"><input id="comments104" size="60" type="text" /></td>
		</tr>
		<tr id="row105">
			<td id="number105">(105)</td>
			<td class="tdradios"><input id="standardA105" name="radio105" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI105" name="radio105" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard105">Describe the methods used to educate responders and local officials about the cost recovery process.</td>
			<td class="tdcomment"><input id="comments105" size="60" type="text" /></td>
		</tr>
		<tr id="row106">
			<td id="number106">(106)</td>
			<td class="tdradios"><input id="standardA106" name="radio106" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI106" name="radio106" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard106">Describe/identify the financial assistance programs that assist the general public to recover and begin rebuilding.</td>
			<td class="tdcomment"><input id="comments106" size="60" type="text" /></td>
		</tr>
		<tr id="row107">
			<td id="number107">(107)</td>
			<td class="tdradios"><input id="standardA107" name="radio107" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI107" name="radio107" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard107">Describe the impact and role that insurance has in recovering costs.</td>
			<td class="tdcomment"><input id="comments107" size="60" type="text" /></td>
		</tr>
		<tr id="row108">
			<td id="number108">(108)</td>
			<td class="tdradios"><input id="standardA108" name="radio108" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI108" name="radio108" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard108">Identify the federal, state, and local laws that specifically apply to the development and implementation of this plan.</td>
			<td class="tdcomment"><input id="comments108" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>


<!--ESF 1-->

<div id="tabs-2">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standard</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row109">
			<td id="number109">(109)</td>
			<td class="tdradios"><input id="standardA109" name="radio109" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI109" name="radio109" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard109">Describe the reason for the development of this annex.</td>
			<td class="tdcomment"><input id="comments109" size="60" type="text" /></td>
		</tr>
		<tr id="row110">
			<td id="number110">(110)</td>
			<td class="tdradios"><input id="standardA110" name="radio110" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI110" name="radio110" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard110">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments110" size="60" type="text" /></td>
		</tr>
		<tr id="row111">
			<td id="number111">(111)</td>
			<td class="tdradios"><input id="standardA111" name="radio111" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI111" name="radio111" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard111">List county specific policies regarding ESF 1.</td>
			<td class="tdcomment"><input id="comments111" size="60" type="text" /></td>
		</tr>
		<tr id="row112">
			<td id="number112">(112)</td>
			<td class="tdradios"><input id="standardA112" name="radio112" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI112" name="radio112" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard112">List state policies or authorities regarding ESF 1.</td>
			<td class="tdcomment"><input id="comments112" size="60" type="text" /></td>
		</tr>
		<tr id="row113">
			<td id="number113">(113)</td>
			<td class="tdradios"><input id="standardA113" name="radio113" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI113" name="radio113" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard113">List federal authorities regarding ESF 1.</td>
			<td class="tdcomment"><input id="comments113" size="60" type="text" /></td>
		</tr>
		<tr id="row114">
			<td id="number114">(114)</td>
			<td class="tdradios"><input id="standardA114" name="radio114" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI114" name="radio114" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard114">Describe how transportation efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments114" size="60" type="text" /></td>
		</tr>
		<tr id="row115">
			<td id="number115">(115)</td>
			<td class="tdradios"><input id="standardA115" name="radio115" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI115" name="radio115" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard115">Identify agency responsible for liaison roles with the state and adjacent county transportation officials.</td>
			<td class="tdcomment"><input id="comments115" size="60" type="text" /></td>
		</tr>
		<tr id="row116">
			<td id="number116">(116)</td>
			<td class="tdradios"><input id="standardA116" name="radio116" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI116" name="radio116" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard116">Identify agency responsible for managing the collection, processing, and disseminating of information to and from the EOC.</td>
			<td class="tdcomment"><input id="comments116" size="60" type="text" /></td>
		</tr>
		<tr id="row117">
			<td id="number117">(117)</td>
			<td class="tdradios"><input id="standardA117" name="radio117" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI117" name="radio117" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard117">Identify agency responsible for providing initial notification for ESF 1.</td>
			<td class="tdcomment"><input id="comments117" size="60" type="text" /></td>
		</tr>
		<tr id="row118">
			<td id="number118">(118)</td>
			<td class="tdradios"><input id="standardA118" name="radio118" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI118" name="radio118" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard118">Describe the methods by which appropriate aviation, maritime, railroad, and pipeline incident management measures will be implemented.</td>
			<td class="tdcomment"><input id="comments118" size="60" type="text" /></td>
		</tr>
		<tr id="row119">
			<td id="number119">(119)</td>
			<td class="tdradios"><input id="standardA119" name="radio119" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI119" name="radio119" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard119">Identify the process in implementing appropriate air traffic management measures.</td>
			<td class="tdcomment"><input id="comments119" size="60" type="text" /></td>
		</tr>
		<tr id="row120">
			<td id="number120">(120)</td>
			<td class="tdradios"><input id="standardA120" name="radio120" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI120" name="radio120" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard120">Identify agency responsible and describe the processes or protocols for specific roles to include: Traffic Control, Barricade Placement, Coordination of Road Closures, Establishes alternate routes of access.</td>
			<td class="tdcomment"><input id="comments120" size="60" type="text" /></td>
		</tr>
		<tr id="row121">
			<td id="number121">(121)</td>
			<td class="tdradios"><input id="standardA121" name="radio121" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI121" name="radio121" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard121">Identify the agency/agencies who will recommend evacuations.</td>
			<td class="tdcomment"><input id="comments121" size="60" type="text" /></td>
		</tr>
		<tr id="row122">
			<td id="number122">(122)</td>
			<td class="tdradios"><input id="standardA122" name="radio122" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI122" name="radio122" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard122">Summarize how evacuation operations will be conducted.</td>
			<td class="tdcomment"><input id="comments122" size="60" type="text" /></td>
		</tr>
		<tr id="row123">
			<td id="number123">(123)</td>
			<td class="tdradios"><input id="standardA123" name="radio123" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI123" name="radio123" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard123">Identify potential evacuation areas and hazard specific planning for those areas.</td>
			<td class="tdcomment"><input id="comments123" size="60" type="text" /></td>
		</tr>
		<tr id="row124">
			<td id="number124">(124)</td>
			<td class="tdradios"><input id="standardA124" name="radio124" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI124" name="radio124" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard124">Explain how evacuation warnings and evacuation related public information will be provided to individuals and specific facilities.</td>
			<td class="tdcomment"><input id="comments124" size="60" type="text" /></td>
		</tr>
		<tr id="row125">
			<td id="number125">(125)</td>
			<td class="tdradios"><input id="standardA125" name="radio125" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI125" name="radio125" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard125">Describe the method for registration and tracking of evacuees.</td>
			<td class="tdcomment"><input id="comments125" size="60" type="text" /></td>
		</tr>
		<tr id="row126">
			<td id="number126">(126)</td>
			<td class="tdradios"><input id="standardA126" name="radio126" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI126" name="radio126" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard126">Summarize guidance for handling evacuees with pets.</td>
			<td class="tdcomment"><input id="comments126" size="60" type="text" /></td>
		</tr>
		<tr id="row127">
			<td id="number127">(127)</td>
			<td class="tdradios"><input id="standardA127" name="radio127" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI127" name="radio127" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard127">Summarize guidance for handling access and functional needs population evacuees.</td>
			<td class="tdcomment"><input id="comments127" size="60" type="text" /></td>
		</tr>
		<tr id="row128">
			<td id="number128">(128)</td>
			<td class="tdradios"><input id="standardA128" name="radio128" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI128" name="radio128" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard128">Describe the process for the identification of evacuation routes and shelter-in-place methods.</td>
			<td class="tdcomment"><input id="comments128" size="60" type="text" /></td>
		</tr>
		<tr id="row129">
			<td id="number129">(129)</td>
			<td class="tdradios"><input id="standardA129" name="radio129" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI129" name="radio129" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard129">Identify factors for reentry criteria including: Routes of reentry, special permission to impacted areas, clean up crews.</td>
			<td class="tdcomment"><input id="comments129" size="60" type="text" /></td>
		</tr>
		<tr id="row130">
			<td id="number130">(130)</td>
			<td class="tdradios"><input id="standardA130" name="radio130" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI130" name="radio130" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard130">Describe the process for monitoring and reporting the status of, and damage to, the transportation system and infrastructure and how the information is provided to emergency management (ESF 5).</td>
			<td class="tdcomment"><input id="comments130" size="60" type="text" /></td>
		</tr>
		<tr id="row131">
			<td id="number131">(131)</td>
			<td class="tdradios"><input id="standardA131" name="radio131" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI131" name="radio131" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard131">Identify the process of emergency repair and restoration of transportation infrastructure.</td>
			<td class="tdcomment"><input id="comments131" size="60" type="text" /></td>
		</tr>
		<tr id="row132">
			<td id="number132">(132)</td>
			<td class="tdradios"><input id="standardA132" name="radio132" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI132" name="radio132" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard132">List agency/organization responsibilities to support ESF 1 activities.</td>
			<td class="tdcomment"><input id="comments132" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>



<!--ESF 2-->

<div id="tabs-3">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standard</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row133">
			<td id="number133">(133)</td>
			<td class="tdradios"><input id="standardA133" name="radio133" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI133" name="radio133" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard133">Describe the reason for the development of this annex.</td>
			<td class="tdcomment"><input id="comments133" size="60" type="text" /></td>
		</tr>
		<tr id="row134">
			<td id="number134">(134)</td>
			<td class="tdradios"><input id="standardA134" name="radio134" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI134" name="radio134" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard134">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments134" size="60" type="text" /></td>
		</tr>
		<tr id="row135">
			<td id="number135">(135)</td>
			<td class="tdradios"><input id="standardA135" name="radio135" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI135" name="radio135" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard135">List county specific policies regarding ESF 2.</td>
			<td class="tdcomment"><input id="comments135" size="60" type="text" /></td>
		</tr>
		<tr id="row136">
			<td id="number136">(136)</td>
			<td class="tdradios"><input id="standardA136" name="radio136" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI136" name="radio136" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard136">List state policies of authorities regarding ESF 2.</td>
			<td class="tdcomment"><input id="comments136" size="60" type="text" /></td>
		</tr>
		<tr id="row137">
			<td id="number137">(137)</td>
			<td class="tdradios"><input id="standardA137" name="radio137" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI137" name="radio137" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard137">List federal authorities regarding ESF 2.</td>
			<td class="tdcomment"><input id="comments137" size="60" type="text" /></td>
		</tr>
		<tr id="row138">
			<td id="number138">(138)</td>
			<td class="tdradios"><input id="standardA138" name="radio138" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI138" name="radio138" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard138">Describe how communications efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments138" size="60" type="text" /></td>
		</tr>
		<tr id="row139">
			<td id="number139">(139)</td>
			<td class="tdradios"><input id="standardA139" name="radio139" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI139" name="radio139" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard139">Identify agency responsible for liaison roles with the state and adjacent county communications officials.</td>
			<td class="tdcomment"><input id="comments139" size="60" type="text" /></td>
		</tr>
		<tr id="row140">
			<td id="number140">(140)</td>
			<td class="tdradios"><input id="standardA140" name="radio140" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI140" name="radio140" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard140">Identify agency responsible for managing collection, processing, and disseminating of information to and from, the EOC.</td>
			<td class="tdcomment"><input id="comments140" size="60" type="text" /></td>
		</tr>
		<tr id="row141">
			<td id="number141">(141)</td>
			<td class="tdradios"><input id="standardA141" name="radio141" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI141" name="radio141" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard141">Identify agency responsible for providing initial notification for ESF 2.</td>
			<td class="tdcomment"><input id="comments141" size="60" type="text" /></td>
		</tr>
		<tr id="row142">
			<td id="number142">(142)</td>
			<td class="tdradios"><input id="standardA142" name="radio142" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI142" name="radio142" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard142">Identify agency that serves as the County Warning Point.</td>
			<td class="tdcomment"><input id="comments142" size="60" type="text" /></td>
		</tr>
		<tr id="row143">
			<td id="number143">(143)</td>
			<td class="tdradios"><input id="standardA143" name="radio143" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI143" name="radio143" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard143">Summarize what agency is responsible for communications management.</td>
			<td class="tdcomment"><input id="comments143" size="60" type="text" /></td>
		</tr>
		<tr id="row144">
			<td id="number144">(144)</td>
			<td class="tdradios"><input id="standardA144" name="radio144" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI144" name="radio144" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard144">Summarize what radio system (s) are used.</td>
			<td class="tdcomment"><input id="comments144" size="60" type="text" /></td>
		</tr>
		<tr id="row145">
			<td id="number145">(145)</td>
			<td class="tdradios"><input id="standardA145" name="radio145" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI145" name="radio145" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard145">Summarize how interoperable communications capabilities are achieved during response operations.</td>
			<td class="tdcomment"><input id="comments145" size="60" type="text" /></td>
		</tr>
		<tr id="row146">
			<td id="number146">(146)</td>
			<td class="tdradios"><input id="standardA146" name="radio146" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI146" name="radio146" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard146">Summarize how service calls are dispatched.</td>
			<td class="tdcomment"><input id="comments146" size="60" type="text" /></td>
		</tr>
		<tr id="row147">
			<td id="number147">(147)</td>
			<td class="tdradios"><input id="standardA147" name="radio147" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI147" name="radio147" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard147">Summarize how calls are dispatched if the 911 center is not operational.</td>
			<td class="tdcomment"><input id="comments147" size="60" type="text" /></td>
		</tr>
		<tr id="row148">
			<td id="number148">(148)</td>
			<td class="tdradios"><input id="standardA148" name="radio148" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI148" name="radio148" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard148">Identify temporary/backup communications capabilities.</td>
			<td class="tdcomment"><input id="comments148" size="60" type="text" /></td>
		</tr>
		<tr id="row149">
			<td id="number149">(149)</td>
			<td class="tdradios"><input id="standardA149" name="radio149" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI149" name="radio149" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard149">Identify available augmentation for communications support (ARES, RACES, etc).</td>
			<td class="tdcomment"><input id="comments149" size="60" type="text" /></td>
		</tr>
		<tr id="row150">
			<td id="number150">(150)</td>
			<td class="tdradios"><input id="standardA150" name="radio150" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI150" name="radio150" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard150">Identify actions taken to manage communications between the on-scene and off-site personnel/agencies (e.g., shelters, hospitals, emergency management agency).</td>
			<td class="tdcomment"><input id="comments150" size="60" type="text" /></td>
		</tr>
		<tr id="row151">
			<td id="number151">(151)</td>
			<td class="tdradios"><input id="standardA151" name="radio151" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI151" name="radio151" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard151">Identify local notification systems in place for emergency conditions (e.g.: reverse 911, IRIS, etc.).</td>
			<td class="tdcomment"><input id="comments151" size="60" type="text" /></td>
		</tr>
		<tr id="row152">
			<td id="number152">(152)</td>
			<td class="tdradios"><input id="standardA152" name="radio152" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI152" name="radio152" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard152">Identify warning systems used for emergency conditions (e.g.: sirens, radio/TV override, NWS, emergency alert system, etc.).</td>
			<td class="tdcomment"><input id="comments152" size="60" type="text" /></td>
		</tr>
		<tr id="row153">
			<td id="number153">(153)</td>
			<td class="tdradios"><input id="standardA153" name="radio153" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI153" name="radio153" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard153">Identify agency responsible for notifying the public, including people with visual and hearing impairments, low literacy skills, and/or non-English speaking.</td>
			<td class="tdcomment"><input id="comments153" size="60" type="text" /></td>
		</tr>
		<tr id="row154">
			<td id="number154">(154)</td>
			<td class="tdradios"><input id="standardA154" name="radio154" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI154" name="radio154" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard154">Describe the process for monitoring and reporting the status of, and damage to, the communications system and infrastructure as a result of an incident, and how this information is provided to ESF 5.</td>
			<td class="tdcomment"><input id="comments154" size="60" type="text" /></td>
		</tr>
		<tr id="row155">
			<td id="number155">(155)</td>
			<td class="tdradios"><input id="standardA155" name="radio155" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI155" name="radio155" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard155">Identify what telecommunications services are present (landline, data, cellular) and known communications deadspots.</td>
			<td class="tdcomment"><input id="comments155" size="60" type="text" /></td>
		</tr>
		<tr id="row156">
			<td id="number156">(156)</td>
			<td class="tdradios"><input id="standardA156" name="radio156" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI156" name="radio156" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard156">List agency/organization responsibilities to support ESF 2 activities.</td>
			<td class="tdcomment"><input id="comments156" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>



<!--ESF 3-->
<div id="tabs-4">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standard</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row157">
			<td id="number157">(157)</td>
			<td class="tdradios"><input id="standardA157" name="radio157" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI157" name="radio157" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard157">Describe the reason for the development of this annex.</td>
			<td class="tdcomment"><input id="comments157" size="60" type="text" /></td>
		</tr>
		<tr id="row158">
			<td id="number158">(158)</td>
			<td class="tdradios"><input id="standardA158" name="radio158" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI158" name="radio158" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard158">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments158" size="60" type="text" /></td>
		</tr>
		<tr id="row159">
			<td id="number159">(159)</td>
			<td class="tdradios"><input id="standardA159" name="radio159" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI159" name="radio159" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard159">List county specific policies regarding ESF 3.</td>
			<td class="tdcomment"><input id="comments159" size="60" type="text" /></td>
		</tr>
		<tr id="row160">
			<td id="number160">(160)</td>
			<td class="tdradios"><input id="standardA160" name="radio160" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI160" name="radio160" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard160">List state policies or authorities regarding ESF 3.</td>
			<td class="tdcomment"><input id="comments160" size="60" type="text" /></td>
		</tr>
		<tr id="row161">
			<td id="number161">(161)</td>
			<td class="tdradios"><input id="standardA161" name="radio161" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI161" name="radio161" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard161">List federal authorities regarding ESF 3.</td>
			<td class="tdcomment"><input id="comments161" size="60" type="text" /></td>
		</tr>
		<tr id="row162">
			<td id="number162">(162)</td>
			<td class="tdradios"><input id="standardA162" name="radio162" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI162" name="radio162" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard162">Describe how public works and engineering efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments162" size="60" type="text" /></td>
		</tr>
		<tr id="row163">
			<td id="number163">(163)</td>
			<td class="tdradios"><input id="standardA163" name="radio163" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI163" name="radio163" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard163">Identify agency responsible for liaison roles with the state and adjacent county public works and engineering officials.</td>
			<td class="tdcomment"><input id="comments163" size="60" type="text" /></td>
		</tr>
		<tr id="row164">
			<td id="number164">(164)</td>
			<td class="tdradios"><input id="standardA164" name="radio164" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI164" name="radio164" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard164">Identify agency responsible for managing the collection, processing, and disseminating of information to and from the EOC.</td>
			<td class="tdcomment"><input id="comments164" size="60" type="text" /></td>
		</tr>
		<tr id="row165">
			<td id="number165">(165)</td>
			<td class="tdradios"><input id="standardA165" name="radio165" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI165" name="radio165" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard165">Identify agency responsible for providing initial notification for ESF 3.</td>
			<td class="tdcomment"><input id="comments165" size="60" type="text" /></td>
		</tr>
		<tr id="row166">
			<td id="number166">(166)</td>
			<td class="tdradios"><input id="standardA166" name="radio166" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI166" name="radio166" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard166">Identify and describe the protection effors for areas inside of a 100-year flood plain for Critical Infrastructure located in the 100-year floodplain.</td>
			<td class="tdcomment"><input id="comments166" size="60" type="text" /></td>
		</tr>
		<tr id="row167">
			<td id="number167">(167)</td>
			<td class="tdradios"><input id="standardA167" name="radio167" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI167" name="radio167" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard167">Identify and describe the protection efforts for areas inside of a 100-year flood plain for Placement, size, and fuel procurement strategies of water transfer pumps.</td>
			<td class="tdcomment"><input id="comments167" size="60" type="text" /></td>
		</tr>
		<tr id="row168">
			<td id="number168">(168)</td>
			<td class="tdradios"><input id="standardA168" name="radio168" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI168" name="radio168" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard168">Identify and describe the protection efforts for areas inside of a 100-year flood plain for Location and specification of sandbagging operations.</td>
			<td class="tdcomment"><input id="comments168" size="60" type="text" /></td>
		</tr>
		<tr id="row169">
			<td id="number169">(169)</td>
			<td class="tdradios"><input id="standardA169" name="radio169" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI169" name="radio169" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard169">Identify areas with a capability of producing large amounts of debris.</td>
			<td class="tdcomment"><input id="comments169" size="60" type="text" /></td>
		</tr>
		<tr id="row170">
			<td id="number170">(170)</td>
			<td class="tdradios"><input id="standardA170" name="radio170" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI170" name="radio170" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard170">Identify areas with special debris consideration (potential of causing tremendous harm to life of humans and/ or animals, the environment, and/ or economic health).</td>
			<td class="tdcomment"><input id="comments170" size="60" type="text" /></td>
		</tr>
		<tr id="row171">
			<td id="number171">(171)</td>
			<td class="tdradios"><input id="standardA171" name="radio171" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI171" name="radio171" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard171">Identify likely debris causing incidents and debris types that will result in various debris removal scenarios.</td>
			<td class="tdcomment"><input id="comments171" size="60" type="text" /></td>
		</tr>
		<tr id="row172">
			<td id="number172">(172)</td>
			<td class="tdradios"><input id="standardA172" name="radio172" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI172" name="radio172" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard172">Identify primary transportation routes along with community infrastructure (e.g. public safety facilities) where debris removal needs to be a priority to provide effective emergency services.</td>
			<td class="tdcomment"><input id="comments172" size="60" type="text" /></td>
		</tr>
		<tr id="row173">
			<td id="number173">(173)</td>
			<td class="tdradios"><input id="standardA173" name="radio173" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI173" name="radio173" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard173">Forecast the amount of debris.</td>
			<td class="tdcomment"><input id="comments173" size="60" type="text" /></td>
		</tr>
		<tr id="row174">
			<td id="number174">(174)</td>
			<td class="tdradios"><input id="standardA174" name="radio174" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI174" name="radio174" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard174">Identify departments and agencies available to assist in the debris efforts along with their responsibilities.</td>
			<td class="tdcomment"><input id="comments174" size="60" type="text" /></td>
		</tr>
		<tr id="row175">
			<td id="number175">(175)</td>
			<td class="tdradios"><input id="standardA175" name="radio175" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI175" name="radio175" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard175">Identify the capabilities of available resources and how they can be best used.</td>
			<td class="tdcomment"><input id="comments175" size="60" type="text" /></td>
		</tr>
		<tr id="row176">
			<td id="number176">(176)</td>
			<td class="tdradios"><input id="standardA176" name="radio176" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI176" name="radio176" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard176">Identify the types of work that should be contracted, if any.</td>
			<td class="tdcomment"><input id="comments176" size="60" type="text" /></td>
		</tr>
		<tr id="row177">
			<td id="number177">(177)</td>
			<td class="tdradios"><input id="standardA177" name="radio177" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI177" name="radio177" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard177">Identify the Federal, State, and Local laws that might apply to the debris management process.</td>
			<td class="tdcomment"><input id="comments177" size="60" type="text" /></td>
		</tr>
		<tr id="row178">
			<td id="number178">(178)</td>
			<td class="tdradios"><input id="standardA178" name="radio178" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI178" name="radio178" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard178">Identify the type of documentation needed during the debris management process.</td>
			<td class="tdcomment"><input id="comments178" size="60" type="text" /></td>
		</tr>
		<tr id="row179">
			<td id="number179">(179)</td>
			<td class="tdradios"><input id="standardA179" name="radio179" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI179" name="radio179" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard179">Create a plan for the collection, storage, reduction, and disposal of debris.</td>
			<td class="tdcomment"><input id="comments179" size="60" type="text" /></td>
		</tr>
		<tr id="row180">
			<td id="number180">(180)</td>
			<td class="tdradios"><input id="standardA180" name="radio180" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI180" name="radio180" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard180">Identify the steps for initial management of debris that impedes immediate life-saving actions and poses an immediate threat to public health and safety.</td>
			<td class="tdcomment"><input id="comments180" size="60" type="text" /></td>
		</tr>
		<tr id="row181">
			<td id="number181">(181)</td>
			<td class="tdradios"><input id="standardA181" name="radio181" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI181" name="radio181" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard181">Identify the steps for overall debris management that will lead to the orderly recovery of the community and poses less immediate threats to health and safety.</td>
			<td class="tdcomment"><input id="comments181" size="60" type="text" /></td>
		</tr>
		<tr id="row182">
			<td id="number182">(182)</td>
			<td class="tdradios"><input id="standardA182" name="radio182" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI182" name="radio182" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard182">Establish prioritized standards/ actions for the removal of all debris with special considerations towards hazardous debris types (Hazardous Materials, Asbestos, etc.).</td>
			<td class="tdcomment"><input id="comments182" size="60" type="text" /></td>
		</tr>
		<tr id="row183">
			<td id="number183">(183)</td>
			<td class="tdradios"><input id="standardA183" name="radio183" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI183" name="radio183" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard183">Develop a public information strategy for disseminating information to citizens regarding debris removal from the community.</td>
			<td class="tdcomment"><input id="comments183" size="60" type="text" /></td>
		</tr>
		<tr id="row184">
			<td id="number184">(184)</td>
			<td class="tdradios"><input id="standardA184" name="radio184" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI184" name="radio184" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard184">Identify a DMS accounting for a size of at least 50% of the forecasted debris amount or 50 - 200 acres (consider the ownership of the land, specific site conditions, land use, and the geographical location.).</td>
			<td class="tdcomment"><input id="comments184" size="60" type="text" /></td>
		</tr>
		<tr id="row185">
			<td id="number185">(185)</td>
			<td class="tdradios"><input id="standardA185" name="radio185" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI185" name="radio185" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard185">Identify standards of operation for the DMS (separation/ sorting of debris, needed equipment, etc.).</td>
			<td class="tdcomment"><input id="comments185" size="60" type="text" /></td>
		</tr>
		<tr id="row186">
			<td id="number186">(186)</td>
			<td class="tdradios"><input id="standardA186" name="radio186" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI186" name="radio186" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard186">Provide a reduction, recycle, and reuse plan if applicable; if county is planning to use a landfill, evaluate remaining capacity, costs, permitting and other landfill related considerations.</td>
			<td class="tdcomment"><input id="comments186" size="60" type="text" /></td>
		</tr>
		<tr id="row187">
			<td id="number187">(187)</td>
			<td class="tdradios"><input id="standardA187" name="radio187" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI187" name="radio187" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard187">Consider how debris will be handled and managed on private property.</td>
			<td class="tdcomment"><input id="comments187" size="60" type="text" /></td>
		</tr>
		<tr id="row188">
			<td id="number188">(188)</td>
			<td class="tdradios"><input id="standardA188" name="radio188" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI188" name="radio188" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard188">Identify agency responsible to repair/restore local roads, bridges, and culverts.</td>
			<td class="tdcomment"><input id="comments188" size="60" type="text" /></td>
		</tr>
		<tr id="row189">
			<td id="number189">(189)</td>
			<td class="tdradios"><input id="standardA189" name="radio189" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI189" name="radio189" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard189">Identify agency responsible to repair/restore local water and wastewater systems.</td>
			<td class="tdcomment"><input id="comments189" size="60" type="text" /></td>
		</tr>
		<tr id="row190">
			<td id="number190">(190)</td>
			<td class="tdradios"><input id="standardA190" name="radio190" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI190" name="radio190" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard190">Identify any existing agreements to provide public works or engineering support (e.g. KS-Map, Regional mutual aid agreements, etc.).</td>
			<td class="tdcomment"><input id="comments190" size="60" type="text" /></td>
		</tr>
		<tr id="row191">
			<td id="number191">(191)</td>
			<td class="tdradios"><input id="standardA191" name="radio191" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI191" name="radio191" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard191">List agency/organization responsibilities to support ESF 3 activities.</td>
			<td class="tdcomment"><input id="comments191" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>


<!--ESF 4-->
<div id="tabs-5">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standard</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row192">
			<td id="number192">(192)</td>
			<td class="tdradios"><input id="standardA192" name="radio192" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI192" name="radio192" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard192">Describe the reason for the development of this annex.</td>
			<td class="tdcomment"><input id="comments192" size="60" type="text" /></td>
		</tr>
		<tr id="row193">
			<td id="number193">(193)</td>
			<td class="tdradios"><input id="standardA193" name="radio193" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI193" name="radio193" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard193">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments193" size="60" type="text" /></td>
		</tr>
		<tr id="row194">
			<td id="number194">(194)</td>
			<td class="tdradios"><input id="standardA194" name="radio194" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI194" name="radio194" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard194">List county specific policies regarding ESF 4..</td>
			<td class="tdcomment"><input id="comments194" size="60" type="text" /></td>
		</tr>
		<tr id="row195">
			<td id="number195">(195)</td>
			<td class="tdradios"><input id="standardA195" name="radio195" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI195" name="radio195" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard195">List state policies or authorities regarding ESF 4.</td>
			<td class="tdcomment"><input id="comments195" size="60" type="text" /></td>
		</tr>
		<tr id="row196">
			<td id="number196">(196)</td>
			<td class="tdradios"><input id="standardA196" name="radio196" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI196" name="radio196" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard196">List federal authorities regarding ESF 4.</td>
			<td class="tdcomment"><input id="comments196" size="60" type="text" /></td>
		</tr>
		<tr id="row197">
			<td id="number197">(197)</td>
			<td class="tdradios"><input id="standardA197" name="radio197" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI197" name="radio197" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard197">Describe how fire fighting efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments197" size="60" type="text" /></td>
		</tr>
		<tr id="row198">
			<td id="number198">(198)</td>
			<td class="tdradios"><input id="standardA198" name="radio198" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI198" name="radio198" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard198">Identify agency responsible for liaison roles with the state and adjacent county fire fighting officials.</td>
			<td class="tdcomment"><input id="comments198" size="60" type="text" /></td>
		</tr>
		<tr id="row199">
			<td id="number199">(199)</td>
			<td class="tdradios"><input id="standardA199" name="radio199" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI199" name="radio199" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard199">Identify agency responsible for managing the collection, processing, and disseminating of information to and from the EOC.</td>
			<td class="tdcomment"><input id="comments199" size="60" type="text" /></td>
		</tr>
		<tr id="row200">
			<td id="number200">(200)</td>
			<td class="tdradios"><input id="standardA200" name="radio200" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI200" name="radio200" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard200">Identify agency responsible for providing initial notification for ESF 4.</td>
			<td class="tdcomment"><input id="comments200" size="60" type="text" /></td>
		</tr>
		<tr id="row201">
			<td id="number201">(201)</td>
			<td class="tdradios"><input id="standardA201" name="radio201" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI201" name="radio201" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard201">Summarize existing fire fighting capabilities.</td>
			<td class="tdcomment"><input id="comments201" size="60" type="text" /></td>
		</tr>
		<tr id="row202">
			<td id="number202">(202)</td>
			<td class="tdradios"><input id="standardA202" name="radio202" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI202" name="radio202" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard202">During response to a disaster, describe how areas outside the impacted area continue fire service responsibilities to include: Maintain Coverage, How back fill is established, how are such calls dispatched.</td>
			<td class="tdcomment"><input id="comments202" size="60" type="text" /></td>
		</tr>
		<tr id="row203">
			<td id="number203">(203)</td>
			<td class="tdradios"><input id="standardA203" name="radio203" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI203" name="radio203" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard203">Summarize guidance for handling vulnerable populations during fire fighting operations.</td>
			<td class="tdcomment"><input id="comments203" size="60" type="text" /></td>
		</tr>
		<tr id="row204">
			<td id="number204">(204)</td>
			<td class="tdradios"><input id="standardA204" name="radio204" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI204" name="radio204" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard204">Identify alternative water sources for fire fighting operations.</td>
			<td class="tdcomment"><input id="comments204" size="60" type="text" /></td>
		</tr>
		<tr id="row205">
			<td id="number205">(205)</td>
			<td class="tdradios"><input id="standardA205" name="radio205" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI205" name="radio205" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard205">Describe existing fire fighting assistance agreements (if applicable).</td>
			<td class="tdcomment"><input id="comments205" size="60" type="text" /></td>
		</tr>
		<tr id="row206">
			<td id="number206">(206)</td>
			<td class="tdradios"><input id="standardA206" name="radio206" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI206" name="radio206" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard206">List agency/organization responsibilities to support ESF 4 activities.</td>
			<td class="tdcomment"><input id="comments206" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>


<!--ESF 5-->
<div id="tabs-6">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standard</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row207">
			<td id="number207">(207)</td>
			<td class="tdradios"><input id="standardA207" name="radio207" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI207" name="radio207" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard207">Describe the reason for the development of this annex.</td>
			<td class="tdcomment"><input id="comments207" size="60" type="text" /></td>
		</tr>
		<tr id="row208">
			<td id="number208">(208)</td>
			<td class="tdradios"><input id="standardA208" name="radio208" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI208" name="radio208" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard208">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments208" size="60" type="text" /></td>
		</tr>
		<tr id="row209">
			<td id="number209">(209)</td>
			<td class="tdradios"><input id="standardA209" name="radio209" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI209" name="radio209" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard209">List county specific policies regarding ESF 5.</td>
			<td class="tdcomment"><input id="comments209" size="60" type="text" /></td>
		</tr>
		<tr id="row210">
			<td id="number210">(210)</td>
			<td class="tdradios"><input id="standardA210" name="radio210" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI210" name="radio210" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard210">List state policies or authorities regarding ESF 5.</td>
			<td class="tdcomment"><input id="comments210" size="60" type="text" /></td>
		</tr>
		<tr id="row211">
			<td id="number211">(211)</td>
			<td class="tdradios"><input id="standardA211" name="radio211" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI211" name="radio211" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard211">List federal authorities regarding ESF 5.</td>
			<td class="tdcomment"><input id="comments211" size="60" type="text" /></td>
		</tr>
		<tr id="row212">
			<td id="number212">(212)</td>
			<td class="tdradios"><input id="standardA212" name="radio212" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI212" name="radio212" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard212">Describe how emergency management efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments212" size="60" type="text" /></td>
		</tr>
		<tr id="row213">
			<td id="number213">(213)</td>
			<td class="tdradios"><input id="standardA213" name="radio213" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI213" name="radio213" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard213">Identify agency responsible for liaison roles with the state and adjacent county emergency management officials.</td>
			<td class="tdcomment"><input id="comments213" size="60" type="text" /></td>
		</tr>
		<tr id="row214">
			<td id="number214">(214)</td>
			<td class="tdradios"><input id="standardA214" name="radio214" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI214" name="radio214" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard214">Identify agency responsible for managing the collection, processing, and disseminating of information to and from the EOC.</td>
			<td class="tdcomment"><input id="comments214" size="60" type="text" /></td>
		</tr>
		<tr id="row215">
			<td id="number215">(215)</td>
			<td class="tdradios"><input id="standardA215" name="radio215" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI215" name="radio215" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard215">Identify agency responsible for providing initial notification for ESF 5.</td>
			<td class="tdcomment"><input id="comments215" size="60" type="text" /></td>
		</tr>
		<tr id="row216">
			<td id="number216">(216)</td>
			<td class="tdradios"><input id="standardA216" name="radio216" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI216" name="radio216" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard216">Describe the actions taken to gather essential information and assess the immediate risks posed by the emergency.</td>
			<td class="tdcomment"><input id="comments216" size="60" type="text" /></td>
		</tr>
		<tr id="row217">
			<td id="number217">(217)</td>
			<td class="tdradios"><input id="standardA217" name="radio217" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI217" name="radio217" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard217">Describe how the initial assessment is disseminated.</td>
			<td class="tdcomment"><input id="comments217" size="60" type="text" /></td>
		</tr>
		<tr id="row218">
			<td id="number218">(218)</td>
			<td class="tdradios"><input id="standardA218" name="radio218" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI218" name="radio218" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard218">Describe actions taken to monitor the status of the emergency and future effects that may result from the emergency.</td>
			<td class="tdcomment"><input id="comments218" size="60" type="text" /></td>
		</tr>
		<tr id="row219">
			<td id="number219">(219)</td>
			<td class="tdradios"><input id="standardA219" name="radio219" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI219" name="radio219" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard219">Describe how incident command operations will be conducted.</td>
			<td class="tdcomment"><input id="comments219" size="60" type="text" /></td>
		</tr>
		<tr id="row220">
			<td id="number220">(220)</td>
			<td class="tdradios"><input id="standardA220" name="radio220" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI220" name="radio220" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard220">Describe the process used to coordinate activities between the incident command post and an activated EOC, including how and when an Incident Commander can request the activation of an EOC.</td>
			<td class="tdcomment"><input id="comments220" size="60" type="text" /></td>
		</tr>
		<tr id="row221">
			<td id="number221">(221)</td>
			<td class="tdradios"><input id="standardA221" name="radio221" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI221" name="radio221" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard221">Identify the primary and alternate sites that will be used as an EOC for the jurisdiction.</td>
			<td class="tdcomment"><input id="comments221" size="60" type="text" /></td>
		</tr>
		<tr id="row222">
			<td id="number222">(222)</td>
			<td class="tdradios"><input id="standardA222" name="radio222" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI222" name="radio222" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard222">Identify who is in charge of the EOC.</td>
			<td class="tdcomment"><input id="comments222" size="60" type="text" /></td>
		</tr>
		<tr id="row223">
			<td id="number223">(223)</td>
			<td class="tdradios"><input id="standardA223" name="radio223" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI223" name="radio223" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard223">Describe the EOC staffing process.</td>
			<td class="tdcomment"><input id="comments223" size="60" type="text" /></td>
		</tr>
		<tr id="row224">
			<td id="number224">(224)</td>
			<td class="tdradios"><input id="standardA224" name="radio224" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI224" name="radio224" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard224">Summarize how the EOC operates when activated.</td>
			<td class="tdcomment"><input id="comments224" size="60" type="text" /></td>
		</tr>
		<tr id="row225">
			<td id="number225">(225)</td>
			<td class="tdradios"><input id="standardA225" name="radio225" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI225" name="radio225" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard225">Describe the actions taken to routinely brief senior officials not present in the EOC on the emergency situation and to authorize emergency actions.</td>
			<td class="tdcomment"><input id="comments225" size="60" type="text" /></td>
		</tr>
		<tr id="row226">
			<td id="number226">(226)</td>
			<td class="tdradios"><input id="standardA226" name="radio226" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI226" name="radio226" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard226">Describe the EOC&#39;s ability to manage an emergency response that lasts longer than 24 hours.</td>
			<td class="tdcomment"><input id="comments226" size="60" type="text" /></td>
		</tr>
		<tr id="row227">
			<td id="number227">(227)</td>
			<td class="tdradios"><input id="standardA227" name="radio227" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI227" name="radio227" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard227">Describe the actions that will be taken to transition from response to recovery operations.</td>
			<td class="tdcomment"><input id="comments227" size="60" type="text" /></td>
		</tr>
		<tr id="row228">
			<td id="number228">(228)</td>
			<td class="tdradios"><input id="standardA228" name="radio228" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI228" name="radio228" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard228">Describe the process used to deactivate/close the EOC.</td>
			<td class="tdcomment"><input id="comments228" size="60" type="text" /></td>
		</tr>
		<tr id="row229">
			<td id="number229">(229)</td>
			<td class="tdradios"><input id="standardA229" name="radio229" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI229" name="radio229" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard229">List agency/organization responsibilities to support ESF 5 activities.</td>
			<td class="tdcomment"><input id="comments229" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>


<!--ESF 6-->
<div id="tabs-7">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standard</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row230">
			<td id="number230">(230)</td>
			<td class="tdradios"><input id="standardA230" name="radio230" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI230" name="radio230" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard230">Describe the reason for the development of this annex</td>
			<td class="tdcomment"><input id="comments230" size="60" type="text" /></td>
		</tr>
		<tr id="row231">
			<td id="number231">(231)</td>
			<td class="tdradios"><input id="standardA231" name="radio231" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI231" name="radio231" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard231">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments231" size="60" type="text" /></td>
		</tr>
		<tr id="row232">
			<td id="number232">(232)</td>
			<td class="tdradios"><input id="standardA232" name="radio232" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI232" name="radio232" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard232">List county specific policies regarding ESF 6.</td>
			<td class="tdcomment"><input id="comments232" size="60" type="text" /></td>
		</tr>
		<tr id="row233">
			<td id="number233">(233)</td>
			<td class="tdradios"><input id="standardA233" name="radio233" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI233" name="radio233" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard233">List state polices or authorities regarding ESF 6.</td>
			<td class="tdcomment"><input id="comments233" size="60" type="text" /></td>
		</tr>
		<tr id="row234">
			<td id="number234">(234)</td>
			<td class="tdradios"><input id="standardA234" name="radio234" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI234" name="radio234" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard234">List federal authorities regarding ESF 6.</td>
			<td class="tdcomment"><input id="comments234" size="60" type="text" /></td>
		</tr>
		<tr id="row235">
			<td id="number235">(235)</td>
			<td class="tdradios"><input id="standardA235" name="radio235" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI235" name="radio235" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard235">Describe how mass care, housing, and human services efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments235" size="60" type="text" /></td>
		</tr>
		<tr id="row236">
			<td id="number236">(236)</td>
			<td class="tdradios"><input id="standardA236" name="radio236" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI236" name="radio236" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard236">Identify agency responsible for liaison roles with the state and adjacent county mass care, housing and human services officials.</td>
			<td class="tdcomment"><input id="comments236" size="60" type="text" /></td>
		</tr>
		<tr id="row237">
			<td id="number237">(237)</td>
			<td class="tdradios"><input id="standardA237" name="radio237" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI237" name="radio237" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard237">Identify agency responsible for managing the collection, process, and disseminating of information to and from the EOC.</td>
			<td class="tdcomment"><input id="comments237" size="60" type="text" /></td>
		</tr>
		<tr id="row238">
			<td id="number238">(238)</td>
			<td class="tdradios"><input id="standardA238" name="radio238" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI238" name="radio238" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard238">Identify agency responsible for providing initial notification for ESF 6.</td>
			<td class="tdcomment"><input id="comments238" size="60" type="text" /></td>
		</tr>
		<tr id="row239">
			<td id="number239">(239)</td>
			<td class="tdradios"><input id="standardA239" name="radio239" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI239" name="radio239" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard239">Provide an overview of the county&#39;s approach to shelter operations.</td>
			<td class="tdcomment"><input id="comments239" size="60" type="text" /></td>
		</tr>
		<tr id="row240">
			<td id="number240">(240)</td>
			<td class="tdradios"><input id="standardA240" name="radio240" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI240" name="radio240" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard240">Identify access and functional need requirements within the community.</td>
			<td class="tdcomment"><input id="comments240" size="60" type="text" /></td>
		</tr>
		<tr id="row241">
			<td id="number241">(241)</td>
			<td class="tdradios"><input id="standardA241" name="radio241" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI241" name="radio241" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard241">Identify criteria utilized for selecting how shelters will be selected and operated.</td>
			<td class="tdcomment"><input id="comments241" size="60" type="text" /></td>
		</tr>
		<tr id="row242">
			<td id="number242">(242)</td>
			<td class="tdradios"><input id="standardA242" name="radio242" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI242" name="radio242" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard242">Identify agency responsible for determining structural soundness of a shelter.</td>
			<td class="tdcomment"><input id="comments242" size="60" type="text" /></td>
		</tr>
		<tr id="row243">
			<td id="number243">(243)</td>
			<td class="tdradios"><input id="standardA243" name="radio243" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI243" name="radio243" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard243">Identify actions taken to identify and open emergency shelters.</td>
			<td class="tdcomment"><input id="comments243" size="60" type="text" /></td>
		</tr>
		<tr id="row244">
			<td id="number244">(244)</td>
			<td class="tdradios"><input id="standardA244" name="radio244" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI244" name="radio244" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard244">Identify the agency&#39;s that will staff emergency shelters for short term (less than 72 hours) and long term (more than 72 hours) shelter operations.</td>
			<td class="tdcomment"><input id="comments244" size="60" type="text" /></td>
		</tr>
		<tr id="row245">
			<td id="number245">(245)</td>
			<td class="tdradios"><input id="standardA245" name="radio245" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI245" name="radio245" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard245">Describe how the jurisdiction will ensure physical and programmatic accessibility of shelter facilities, effective communication using multiple methods, full access to emergency services, and reasonable modification of programs or policies where needed.</td>
			<td class="tdcomment"><input id="comments245" size="60" type="text" /></td>
		</tr>
		<tr id="row246">
			<td id="number246">(246)</td>
			<td class="tdradios"><input id="standardA246" name="radio246" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI246" name="radio246" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard246">Describe how the public will be informed of availability and location of mass care facilities.</td>
			<td class="tdcomment"><input id="comments246" size="60" type="text" /></td>
		</tr>
		<tr id="row247">
			<td id="number247">(247)</td>
			<td class="tdradios"><input id="standardA247" name="radio247" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI247" name="radio247" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard247">Describe the mechanisms or processes for handling and providing for unaccompanied minors in shelters and who is responsible for the notification process.</td>
			<td class="tdcomment"><input id="comments247" size="60" type="text" /></td>
		</tr>
		<tr id="row248">
			<td id="number248">(248)</td>
			<td class="tdradios"><input id="standardA248" name="radio248" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI248" name="radio248" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard248">Identify agency responsible for security at public shelters.</td>
			<td class="tdcomment"><input id="comments248" size="60" type="text" /></td>
		</tr>
		<tr id="row249">
			<td id="number249">(249)</td>
			<td class="tdradios"><input id="standardA249" name="radio249" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI249" name="radio249" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard249">Describe the processes for handling registered sex offenders, parolees, or other individuals required to report to local, state, or federal law enforcement entities in public shelters.</td>
			<td class="tdcomment"><input id="comments249" size="60" type="text" /></td>
		</tr>
		<tr id="row250">
			<td id="number250">(250)</td>
			<td class="tdradios"><input id="standardA250" name="radio250" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI250" name="radio250" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard250">Describe the process for ensuring adequate considerations for those with cultural accomodations.</td>
			<td class="tdcomment"><input id="comments250" size="60" type="text" /></td>
		</tr>
		<tr id="row251">
			<td id="number251">(251)</td>
			<td class="tdradios"><input id="standardA251" name="radio251" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI251" name="radio251" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard251">Describe how shelters will keep evacuees informed about the status of the disaster, including information about evacuees may need to take when returning home.</td>
			<td class="tdcomment"><input id="comments251" size="60" type="text" /></td>
		</tr>
		<tr id="row252">
			<td id="number252">(252)</td>
			<td class="tdradios"><input id="standardA252" name="radio252" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI252" name="radio252" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard252">Describe arrangements in place with other jurisdictions for receiving their assistance in sheltering, including providing shelters when it is not practical locally (e.g., there are no available shelters or staff support.).</td>
			<td class="tdcomment"><input id="comments252" size="60" type="text" /></td>
		</tr>
		<tr id="row253">
			<td id="number253">(253)</td>
			<td class="tdradios"><input id="standardA253" name="radio253" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI253" name="radio253" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard253">Identify the local Housing Authority.</td>
			<td class="tdcomment"><input id="comments253" size="60" type="text" /></td>
		</tr>
		<tr id="row254">
			<td id="number254">(254)</td>
			<td class="tdradios"><input id="standardA254" name="radio254" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI254" name="radio254" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard254">Identify Housing Capabilities.</td>
			<td class="tdcomment"><input id="comments254" size="60" type="text" /></td>
		</tr>
		<tr id="row255">
			<td id="number255">(255)</td>
			<td class="tdradios"><input id="standardA255" name="radio255" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI255" name="radio255" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard255">Describe the process to coordinate with housing authorities and ESF 14 for short/long term recovery efforts.</td>
			<td class="tdcomment"><input id="comments255" size="60" type="text" /></td>
		</tr>
		<tr id="row256">
			<td id="number256">(256)</td>
			<td class="tdradios"><input id="standardA256" name="radio256" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI256" name="radio256" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard256">Identify/describe the actions taken to provide food to citizens dependent on food programs.</td>
			<td class="tdcomment"><input id="comments256" size="60" type="text" /></td>
		</tr>
		<tr id="row257">
			<td id="number257">(257)</td>
			<td class="tdradios"><input id="standardA257" name="radio257" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI257" name="radio257" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard257">Describe the plans, methods, and agencies/organizations responsible for the distribution and sustained distribution of emergency relief and essential care items.</td>
			<td class="tdcomment"><input id="comments257" size="60" type="text" /></td>
		</tr>
		<tr id="row258">
			<td id="number258">(258)</td>
			<td class="tdradios"><input id="standardA258" name="radio258" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI258" name="radio258" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard258">Describe the method by which necessary supplies for adults and children with access and functional needs will be obtained.</td>
			<td class="tdcomment"><input id="comments258" size="60" type="text" /></td>
		</tr>
		<tr id="row259">
			<td id="number259">(259)</td>
			<td class="tdradios"><input id="standardA259" name="radio259" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI259" name="radio259" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard259">Identify/describe the actions that will be taken to identify and address the general public&#39;s &quot;unmet needs&quot; during the disaster.</td>
			<td class="tdcomment"><input id="comments259" size="60" type="text" /></td>
		</tr>
		<tr id="row260">
			<td id="number260">(260)</td>
			<td class="tdradios"><input id="standardA260" name="radio260" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI260" name="radio260" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard260">Describe how ESF 6 will coordinate with the Local and State ADA Coordinator for compliance with the Americans with Disabilities Act.</td>
			<td class="tdcomment"><input id="comments260" size="60" type="text" /></td>
		</tr>
		<tr id="row261">
			<td id="number261">(261)</td>
			<td class="tdradios"><input id="standardA261" name="radio261" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI261" name="radio261" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard261">Identify how the special considerations will be met for those with access and functional needs.</td>
			<td class="tdcomment"><input id="comments261" size="60" type="text" /></td>
		</tr>
		<tr id="row262">
			<td id="number262">(262)</td>
			<td class="tdradios"><input id="standardA262" name="radio262" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI262" name="radio262" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard262">to provide and support long-term care and assisted living facilities, group homes housing <!--Sentence Beginning?--> individuals with access and functional needs, and others with access and functional needs.</td>
			<td class="tdcomment"><input id="comments262" size="60" type="text" /></td>
		</tr>
		<tr id="row263">
			<td id="number263">(263)</td>
			<td class="tdradios"><input id="standardA263" name="radio263" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI263" name="radio263" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard263">Identify agency responsible to provide care and support for institutionalized populations.</td>
			<td class="tdcomment"><input id="comments263" size="60" type="text" /></td>
		</tr>
		<tr id="row264">
			<td id="number264">(264)</td>
			<td class="tdradios"><input id="standardA264" name="radio264" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI264" name="radio264" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard264">Identify an agency responsible and describe the actions that will be taken to notify or inform the public about the status of injured or missing relatives.</td>
			<td class="tdcomment"><input id="comments264" size="60" type="text" /></td>
		</tr>
		<tr id="row265">
			<td id="number265">(265)</td>
			<td class="tdradios"><input id="standardA265" name="radio265" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI265" name="radio265" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard265">Outline plans for reception and care of nuclear plan evacuees (only those near a nuclear facility).</td>
			<td class="tdcomment"><input id="comments265" size="60" type="text" /></td>
		</tr>
		<tr id="row266">
			<td id="number266">(266)</td>
			<td class="tdradios"><input id="standardA266" name="radio266" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI266" name="radio266" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard266">Describe where contamination screening and decontamination will occur.</td>
			<td class="tdcomment"><input id="comments266" size="60" type="text" /></td>
		</tr>
		<tr id="row267">
			<td id="number267">(267)</td>
			<td class="tdradios"><input id="standardA267" name="radio267" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI267" name="radio267" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard267">Describe the methods used to identify, screen, and handle evacuees exposed to the hazards posed by the disaster and the methods used to keep the shelter free of contamination.</td>
			<td class="tdcomment"><input id="comments267" size="60" type="text" /></td>
		</tr>
		<tr id="row268">
			<td id="number268">(268)</td>
			<td class="tdradios"><input id="standardA268" name="radio268" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI268" name="radio268" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard268">Provide an overview of the county&#39;s approach to animal shelter operations.</td>
			<td class="tdcomment"><input id="comments268" size="60" type="text" /></td>
		</tr>
		<tr id="row269">
			<td id="number269">(269)</td>
			<td class="tdradios"><input id="standardA269" name="radio269" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI269" name="radio269" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard269">Describe the partnership between the jurisdiction&#39;s emergency management agency, the animal control authority, and the owner of each proposed congregate household pet sheltering facility.</td>
			<td class="tdcomment"><input id="comments269" size="60" type="text" /></td>
		</tr>
		<tr id="row270">
			<td id="number270">(270)</td>
			<td class="tdradios"><input id="standardA270" name="radio270" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI270" name="radio270" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard270">Provide an estimated number of pets that may require animal sheltering services.</td>
			<td class="tdcomment"><input id="comments270" size="60" type="text" /></td>
		</tr>
		<tr id="row271">
			<td id="number271">(271)</td>
			<td class="tdradios"><input id="standardA271" name="radio271" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI271" name="radio271" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard271">Describe how shelters will be operated for animal sheltering.</td>
			<td class="tdcomment"><input id="comments271" size="60" type="text" /></td>
		</tr>
		<tr id="row272">
			<td id="number272">(272)</td>
			<td class="tdradios"><input id="standardA272" name="radio272" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI272" name="radio272" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard272">Describe the animal registration and return process.</td>
			<td class="tdcomment"><input id="comments272" size="60" type="text" /></td>
		</tr>
		<tr id="row273">
			<td id="number273">(273)</td>
			<td class="tdradios"><input id="standardA273" name="radio273" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI273" name="radio273" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard273">Identify/describe the actions that will be taken to address the long-term care, permanent relocation, or disposal of unclaimed pets.</td>
			<td class="tdcomment"><input id="comments273" size="60" type="text" /></td>
		</tr>
		<tr id="row274">
			<td id="number274">(274)</td>
			<td class="tdradios"><input id="standardA274" name="radio274" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI274" name="radio274" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard274">If using co-habitation human and animal shelters: Identify how co-habitation sheltering will meet requirements for human and animal sheltering.</td>
			<td class="tdcomment"><input id="comments274" size="60" type="text" /></td>
		</tr>
		<tr id="row275">
			<td id="number275">(275)</td>
			<td class="tdradios"><input id="standardA275" name="radio275" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI275" name="radio275" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard275">If using co-habitation human and animal shelters: Identify the special considerations of cohabituation sheltering.</td>
			<td class="tdcomment"><input id="comments275" size="60" type="text" /></td>
		</tr>
		<tr id="row276">
			<td id="number276">(276)</td>
			<td class="tdradios"><input id="standardA276" name="radio276" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI276" name="radio276" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard276">List agency/organization responsibilities to support ESF 6 activities.</td>
			<td class="tdcomment"><input id="comments276" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>


<!--ESF 7-->
<div id="tabs-8">
<table style="width:100%">
	<tbody>
            <tr>
                <th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
                <td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
                <td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
                <td style="text-align: center;"><span style="font-size:18px;"><strong>Standard</strong></span></td>
                <td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
            </tr>
		<tr id="row277">
			<td id="number277">(277)</td>
			<td class="tdradios"><input id="standardA277" name="radio277" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI277" name="radio277" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard277">Describe the reason for the development of this annex.</td>
			<td class="tdcomment"><input id="comments277" size="60" type="text" /></td>
		</tr>
		<tr id="row278">
			<td id="number278">(278)</td>
			<td class="tdradios"><input id="standardA278" name="radio278" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI278" name="radio278" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard278">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments278" size="60" type="text" /></td>
		</tr>
		<tr id="row279">
			<td id="number279">(279)</td>
			<td class="tdradios"><input id="standardA279" name="radio279" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI279" name="radio279" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard279">List county specific policies regarding ESF 7.</td>
			<td class="tdcomment"><input id="comments279" size="60" type="text" /></td>
		</tr>
		<tr id="row280">
			<td id="number280">(280)</td>
			<td class="tdradios"><input id="standardA280" name="radio280" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI280" name="radio280" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard280">List state policies or authorities regarding ESF 7.</td>
			<td class="tdcomment"><input id="comments280" size="60" type="text" /></td>
		</tr>
		<tr id="row281">
			<td id="number281">(281)</td>
			<td class="tdradios"><input id="standardA281" name="radio281" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI281" name="radio281" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard281">List federal authorities regarding ESF 7.</td>
			<td class="tdcomment"><input id="comments281" size="60" type="text" /></td>
		</tr>
		<tr id="row282">
			<td id="number282">(282)</td>
			<td class="tdradios"><input id="standardA282" name="radio282" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI282" name="radio282" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard282">Describe how resource support efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments282" size="60" type="text" /></td>
		</tr>
		<tr id="row283">
			<td id="number283">(283)</td>
			<td class="tdradios"><input id="standardA283" name="radio283" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI283" name="radio283" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard283">Identify agency responsible for liaison roles with the state and adjacent county resource support officials.</td>
			<td class="tdcomment"><input id="comments283" size="60" type="text" /></td>
		</tr>
		<tr id="row284">
			<td id="number284">(284)</td>
			<td class="tdradios"><input id="standardA284" name="radio284" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI284" name="radio284" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard284">Identify agency responsible for managing the collection, processing, and disseminating of information to and from the EOC.</td>
			<td class="tdcomment"><input id="comments284" size="60" type="text" /></td>
		</tr>
		<tr id="row285">
			<td id="number285">(285)</td>
			<td class="tdradios"><input id="standardA285" name="radio285" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI285" name="radio285" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard285">Identify agency responsible for providing initial notification for ESF 7.</td>
			<td class="tdcomment"><input id="comments285" size="60" type="text" /></td>
		</tr>
		<tr id="row286">
			<td id="number286">(286)</td>
			<td class="tdradios"><input id="standardA286" name="radio286" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI286" name="radio286" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard286">Identify and describe the credentialing system in place for ESF.</td>
			<td class="tdcomment"><input id="comments286" size="60" type="text" /></td>
		</tr>
		<tr id="row287">
			<td id="number287">(287)</td>
			<td class="tdradios"><input id="standardA287" name="radio287" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI287" name="radio287" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard287">Explain how personnel will have access to the critical or limited access sites following an incident.</td>
			<td class="tdcomment"><input id="comments287" size="60" type="text" /></td>
		</tr>
		<tr id="row288">
			<td id="number288">(288)</td>
			<td class="tdradios"><input id="standardA288" name="radio288" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI288" name="radio288" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard288">Identify how resource directories are created and maintained.</td>
			<td class="tdcomment"><input id="comments288" size="60" type="text" /></td>
		</tr>
		<tr id="row289">
			<td id="number289">(289)</td>
			<td class="tdradios"><input id="standardA289" name="radio289" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI289" name="radio289" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard289">Describe the issuance of a local disaster declaration as part of the process for requesting assistance.</td>
			<td class="tdcomment"><input id="comments289" size="60" type="text" /></td>
		</tr>
		<tr id="row290">
			<td id="number290">(290)</td>
			<td class="tdradios"><input id="standardA290" name="radio290" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI290" name="radio290" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard290">Describe the process for requesting additional resources at the local, regional, and state level.</td>
			<td class="tdcomment"><input id="comments290" size="60" type="text" /></td>
		</tr>
		<tr id="row291">
			<td id="number291">(291)</td>
			<td class="tdradios"><input id="standardA291" name="radio291" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI291" name="radio291" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard291">Describe plans for establishing points of distribution across the jurisdiction.</td>
			<td class="tdcomment"><input id="comments291" size="60" type="text" /></td>
		</tr>
		<tr id="row292">
			<td id="number292">(292)</td>
			<td class="tdradios"><input id="standardA292" name="radio292" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI292" name="radio292" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard292">Describe the criteria for relocating essential resources outside the threatened or impacted area.</td>
			<td></td>
			<td class="tdcomment"><input id="comments292" size="60" type="text" /></td>
		</tr>
		<tr id="row293">
			<td id="number293">(293)</td>
			<td class="tdradios"><input id="standardA293" name="radio293" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI293" name="radio293" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard293">Describe plans for providing support for a larger, regional incident.</td>
			<td class="tdcomment"><input id="comments293" size="60" type="text" /></td>
		</tr>
		<tr id="row294">
			<td id="number294">(294)</td>
			<td class="tdradios"><input id="standardA294" name="radio294" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI294" name="radio294" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard294">Describe the process used to identify, deploy, use, support, dismiss, and demobilize affiliated and spontaneous unaffiliated volunteers.</td>
			<td class="tdcomment"><input id="comments294" size="60" type="text" /></td>
		</tr>
		<tr id="row295">
			<td id="number295">(295)</td>
			<td class="tdradios"><input id="standardA295" name="radio295" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI295" name="radio295" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard295">Identify the system used to track volunteer hours.</td>
			<td class="tdcomment"><input id="comments295" size="60" type="text" /></td>
		</tr>
		<tr id="row296">
			<td id="number296">(296)</td>
			<td class="tdradios"><input id="standardA296" name="radio296" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI296" name="radio296" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard296">Describe the process used to manage unsolicited donations.</td>
			<td class="tdcomment"><input id="comments296" size="60" type="text" /></td>
		</tr>
		<tr id="row297">
			<td id="number297">(297)</td>
			<td class="tdradios"><input id="standardA297" name="radio297" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI297" name="radio297" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard297">Describe how resources will be tracked and how they will be released once the disaster has ended.</td>
			<td class="tdcomment"><input id="comments297" size="60" type="text" /></td>
		</tr>
		<tr id="row298">
			<td id="number298">(298)</td>
			<td class="tdradios"><input id="standardA298" name="radio298" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI298" name="radio298" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard298">Identify how agencies will support mission assignments with limited fuel availability.</td>
			<td class="tdcomment"><input id="comments298" size="60" type="text" /></td>
		</tr>
		<tr id="row299">
			<td id="number299">(299)</td>
			<td class="tdradios"><input id="standardA299" name="radio299" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI299" name="radio299" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard299">Identify the process to track maintenance costs for requested resources (including repairs and servicing equipment).</td>
			<td class="tdcomment"><input id="comments299" size="60" type="text" /></td>
		</tr>
		<tr id="row300">
			<td id="number300">(300)</td>
			<td class="tdradios"><input id="standardA300" name="radio300" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI300" name="radio300" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard300">Identify agency authorized to enter into emergency contracts.</td>
			<td class="tdcomment"><input id="comments300" size="60" type="text" /></td>
		</tr>
		<tr id="row301">
			<td id="number301">(301)</td>
			<td class="tdradios"><input id="standardA301" name="radio301" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI301" name="radio301" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard301">Identify scope of emergency contracts.</td>
			<td class="tdcomment"><input id="comments301" size="60" type="text" /></td>
		</tr>
		<tr id="row302">
			<td id="number302">(302)</td>
			<td class="tdradios"><input id="standardA302" name="radio302" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI302" name="radio302" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard302">Identify set limitations for emergency contracting.</td>
			<td class="tdcomment"><input id="comments302" size="60" type="text" /></td>
		</tr>
		<tr id="row303">
			<td id="number303">(303)</td>
			<td class="tdradios"><input id="standardA303" name="radio303" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI303" name="radio303" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard303">Identify agency responsible for full payment of emergency contracts.</td>
			<td class="tdcomment"><input id="comments303" size="60" type="text" /></td>
		</tr>
		<tr id="row304">
			<td id="number304">(304)</td>
			<td class="tdradios"><input id="standardA304" name="radio304" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI304" name="radio304" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard304">List Agency/organization responsibilities to support ESF 7 activities.</td>
			<td class="tdcomment"><input id="comments304" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>


<!--ESF 8-->
<div id="tabs-9">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standards</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row305">
			<td id="number305">(305)</td>
			<td class="tdradios"><input id="standardA305" name="radio305" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI305" name="radio305" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard305">Describe the reason for the development of this annex.</td>
			<td class="tdcomment"><input id="comments305" size="60" type="text" /></td>
		</tr>
		<tr id="row306">
			<td id="number306">(306)</td>
			<td class="tdradios"><input id="standardA306" name="radio306" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI306" name="radio306" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard306">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments306" size="60" type="text" /></td>
		</tr>
		<tr id="row307">
			<td id="number307">(307)</td>
			<td class="tdradios"><input id="standardA307" name="radio307" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI307" name="radio307" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard307">List county specific policies regarding ESF 8.</td>
			<td class="tdcomment"><input id="comments307" size="60" type="text" /></td>
		</tr>
		<tr id="row308">
			<td id="number308">(308)</td>
			<td class="tdradios"><input id="standardA308" name="radio308" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI308" name="radio308" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard308">List state policies or authorities regarding ESF 8.</td>
			<td class="tdcomment"><input id="comments308" size="60" type="text" /></td>
		</tr>
		<tr id="row309">
			<td id="number309">(309)</td>
			<td class="tdradios"><input id="standardA309" name="radio309" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI309" name="radio309" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard309">List federal authorities regarding ESF 8.</td>
			<td class="tdcomment"><input id="comments309" size="60" type="text" /></td>
		</tr>
		<tr id="row310">
			<td id="number310">(310)</td>
			<td class="tdradios"><input id="standardA310" name="radio310" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI310" name="radio310" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard310">Describe how public health and medical services efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments310" size="60" type="text" /></td>
		</tr>
		<tr id="row311">
			<td id="number311">(311)</td>
			<td class="tdradios"><input id="standardA311" name="radio311" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI311" name="radio311" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard311">Identify agency responsible for liaison roles with the state and adjacent county public health and medical services officials.</td>
			<td class="tdcomment"><input id="comments311" size="60" type="text" /></td>
		</tr>
		<tr id="row312">
			<td id="number312">(312)</td>
			<td class="tdradios"><input id="standardA312" name="radio312" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI312" name="radio312" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard312">Identify agency responsible for providing initial notification for ESF 8.</td>
			<td class="tdcomment"><input id="comments312" size="60" type="text" /></td>
		</tr>
		<tr id="row313">
			<td id="number313">(313)</td>
			<td class="tdradios"><input id="standardA313" name="radio313" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI313" name="radio313" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard313">Describe how health and medical information will be provided to the county&#39;s at-risk populations including but not limited to: Those with limited English proficiency, Pregnant women, and Geriatric persons.</td>
			<td class="tdcomment"><input id="comments313" size="60" type="text" /></td>
		</tr>
		<tr id="row314">
			<td id="number314">(314)</td>
			<td class="tdradios"><input id="standardA314" name="radio314" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI314" name="radio314" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard314">Identify essential elements of information that may be requested from health and medical organizations to develop a common operating picture.</td>
			<td class="tdcomment"><input id="comments314" size="60" type="text" /></td>
		</tr>
		<tr id="row315">
			<td id="number315">(315)</td>
			<td class="tdradios"><input id="standardA315" name="radio315" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI315" name="radio315" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard315">Describe the methods that ESF 8 will use to develop and share a common operating picture with emergency management leadership and health and medical organizations.</td>
			<td class="tdcomment"><input id="comments315" size="60" type="text" /></td>
		</tr>
		<tr id="row316">
			<td id="number316">(316)</td>
			<td class="tdradios"><input id="standardA316" name="radio316" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI316" name="radio316" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard316">Describe Continuity of Operations protocol to be implemented when agencies are overwhelmed or their facility is damaged and unavailable.</td>
			<td class="tdcomment"><input id="comments316" size="60" type="text" /></td>
		</tr>
		<tr id="row317">
			<td id="number317">(317)</td>
			<td class="tdradios"><input id="standardA317" name="radio317" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI317" name="radio317" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard317">Briefly describe how organizations monitor and update any electronic bed availability systems.</td>
			<td class="tdcomment"><input id="comments317" size="60" type="text" /></td>
		</tr>
		<tr id="row318">
			<td id="number318">(318)</td>
			<td class="tdradios"><input id="standardA318" name="radio318" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI318" name="radio318" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard318">Briefly describe decontamination capabilities at local medical facilities.</td>
			<td class="tdcomment"><input id="comments318" size="60" type="text" /></td>
		</tr>
		<tr id="row319">
			<td id="number319">(319)</td>
			<td class="tdradios"><input id="standardA319" name="radio319" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI319" name="radio319" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard319">Briefly describe how patient tracking is coordinated with medical facilities.</td>
			<td class="tdcomment"><input id="comments319" size="60" type="text" /></td>
		</tr>
		<tr id="row320">
			<td id="number320">(320)</td>
			<td class="tdradios"><input id="standardA320" name="radio320" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI320" name="radio320" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard320">Describe the jurisdiction&#39;s approach to support family reunification.</td>
			<td class="tdcomment"><input id="comments320" size="60" type="text" /></td>
		</tr>
		<tr id="row321">
			<td id="number321">(321)</td>
			<td class="tdradios"><input id="standardA321" name="radio321" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI321" name="radio321" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard321">Briefly describe information sharing between health and medical organizations and the emergency response and management community as part of family reunification.</td>
			<td class="tdcomment"><input id="comments321" size="60" type="text" /></td>
		</tr>
		<tr id="row322">
			<td id="number322">(322)</td>
			<td class="tdradios"><input id="standardA322" name="radio322" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI322" name="radio322" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard322">Describe care for children, including medical and behavioral health, whose caregivers may have been killed, injured, missing, or otherwise incapacitated for lengthy periods of time.</td>
			<td class="tdcomment"><input id="comments322" size="60" type="text" /></td>
		</tr>
		<tr id="row323">
			<td id="number323">(323)</td>
			<td class="tdradios"><input id="standardA323" name="radio323" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI323" name="radio323" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard323">Describe approaches or strategies to increase parents&#39; or caregivers&#39; coping skills.</td>
			<td class="tdcomment"><input id="comments323" size="60" type="text" /></td>
		</tr>
		<tr id="row324">
			<td id="number324">(324)</td>
			<td class="tdradios"><input id="standardA324" name="radio324" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI324" name="radio324" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard324">Briefly describe and identify the responsible organization for county disease surveillance coordination.</td>
			<td class="tdcomment"><input id="comments324" size="60" type="text" /></td>
		</tr>
		<tr id="row325">
			<td id="number325">(325)</td>
			<td class="tdradios"><input id="standardA325" name="radio325" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI325" name="radio325" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard325">Briefly describe the county&#39;s epidemiology investigation capability including coordination between the local health department, schools, medical facilities, pharmacies, law enforcement, etc.</td>
			<td class="tdcomment"><input id="comments325" size="60" type="text" /></td>
		</tr>
		<tr id="row326">
			<td id="number326">(326)</td>
			<td class="tdradios"><input id="standardA326" name="radio326" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI326" name="radio326" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard326">Describe the county&#39;s capability to activate a Community Reception Center to perform population monitoring activities for a Radiological emergency (in conjunction with ESF 6).</td>
			<td class="tdcomment"><input id="comments326" size="60" type="text" /></td>
		</tr>
		<tr id="row327">
			<td id="number327">(327)</td>
			<td class="tdradios"><input id="standardA327" name="radio327" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI327" name="radio327" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard327">Describe the responsibilities of the district coroner in fatality incidents.</td>
			<td class="tdcomment"><input id="comments327" size="60" type="text" /></td>
		</tr>
		<tr id="row328">
			<td id="number328">(328)</td>
			<td class="tdradios"><input id="standardA328" name="radio328" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI328" name="radio328" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard328">Describe the engagement of funeral directors/homes in fatality incidents.</td>
			<td class="tdcomment"><input id="comments328" size="60" type="text" /></td>
		</tr>
		<tr id="row329">
			<td id="number329">(329)</td>
			<td class="tdradios"><input id="standardA329" name="radio329" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI329" name="radio329" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard329">Describe the hospitals and medical facilities involvement in mass fatality incidents.</td>
			<td class="tdcomment"><input id="comments329" size="60" type="text" /></td>
		</tr>
		<tr id="row330">
			<td id="number330">(330)</td>
			<td class="tdradios"><input id="standardA330" name="radio330" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI330" name="radio330" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard330">Describe the availability of a Family Assistance Center during a mass fatality incident.</td>
			<td class="tdcomment"><input id="comments330" size="60" type="text" /></td>
		</tr>
		<tr id="row331">
			<td id="number331">(331)</td>
			<td class="tdradios"><input id="standardA331" name="radio331" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI331" name="radio331" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard331">Briefly describe the county&#39;s field-based triage scheme.</td>
			<td class="tdcomment"><input id="comments331" size="60" type="text" /></td>
		</tr>
		<tr id="row332">
			<td id="number332">(332)</td>
			<td class="tdradios"><input id="standardA332" name="radio332" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI332" name="radio332" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard332">Briefly describe any medical mutual aid, EMS mutual aid agreements or regional mutual aid agreements or partnerships.</td>
			<td class="tdcomment"><input id="comments332" size="60" type="text" /></td>
		</tr>
		<tr id="row333">
			<td id="number333">(333)</td>
			<td class="tdradios"><input id="standardA333" name="radio333" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI333" name="radio333" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard333">Briefly describe the county&#39;s goal and partners utilized during a mass dispensing campaign.</td>
			<td class="tdcomment"><input id="comments333" size="60" type="text" /></td>
		</tr>
		<tr id="row334">
			<td id="number334">(334)</td>
			<td class="tdradios"><input id="standardA334" name="radio334" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI334" name="radio334" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard334">Briefly describe the roles and responsibilities of health and medical providers and emergency management professionals for requesting and managing government controlled medical material including Strategic National Stockpile assets.</td>
			<td class="tdcomment"><input id="comments334" size="60" type="text" /></td>
		</tr>
		<tr id="row335">
			<td id="number335">(335)</td>
			<td class="tdradios"><input id="standardA335" name="radio335" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI335" name="radio335" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard335">Briefly describe the hospital&#39;s capability to maintain patients in negative pressure isolation.</td>
			<td class="tdcomment"><input id="comments335" size="60" type="text" /></td>
		</tr>
		<tr id="row336">
			<td id="number336">(336)</td>
			<td class="tdradios"><input id="standardA336" name="radio336" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI336" name="radio336" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard336">Briefly describe media campaign needs to promote hygiene and disease prevention measures in coordination with ESF 15.</td>
			<td class="tdcomment"><input id="comments336" size="60" type="text" /></td>
		</tr>
		<tr id="row337">
			<td id="number337">(337)</td>
			<td class="tdradios"><input id="standardA337" name="radio337" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI337" name="radio337" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard337">Briefly describe the authorities related to the closure of buildings (including schools) and cancelling of public activities for disease control.</td>
			<td class="tdcomment"><input id="comments337" size="60" type="text" /></td>
		</tr>
		<tr id="row338">
			<td id="number338">(338)</td>
			<td class="tdradios"><input id="standardA338" name="radio338" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI338" name="radio338" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard338">Briefly describe public health and medical support to mass care shelters.</td>
			<td class="tdcomment"><input id="comments338" size="60" type="text" /></td>
		</tr>
		<tr id="row339">
			<td id="number339">(339)</td>
			<td class="tdradios"><input id="standardA339" name="radio339" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI339" name="radio339" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard339">Briefly describe the health and medical community&#39;s roles in providing medical safety information to responding organizations related to anticipated hazards including infectious substances, hazardous materials, and environmental concerns.</td>
			<td class="tdcomment"><input id="comments339" size="60" type="text" /></td>
		</tr>
		<tr id="row340">
			<td id="number340">(340)</td>
			<td class="tdradios"><input id="standardA340" name="radio340" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI340" name="radio340" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard340">Briefly describe coordination between response organizations and subject matter experts related to recommendations for risk-related personal protective equipment.</td>
			<td class="tdcomment"><input id="comments340" size="60" type="text" /></td>
		</tr>
		<tr id="row341">
			<td id="number341" width="10%">(341)</td>
			<td width="10%"><input id="standardA341" name="radio341" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td width="10%"><input id="standardI341" name="radio341" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td id="standard341" width="40%">Briefly describe the process for verifying medical personnel in coordination with the county volunteer reception center and coordinating medical volunteer needs with medical organizations.</td>
			<td width="30%"><input id="comments341" size="30" type="text" /></td>
		</tr>
		<tr id="row342">
			<td id="number342">(342)</td>
			<td class="tdradios"><input id="standardA342" name="radio342" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI342" name="radio342" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard342">If applicable, describe the role of county Medical Reserve Corp, American Red Cross or other health and medically focused volunteer response organization.</td>
			<td class="tdcomment"><input id="comments342" size="60" type="text" /></td>
		</tr>
		<tr id="row343">
			<td id="number343">(343)</td>
			<td class="tdradios"><input id="standardA343" name="radio343" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI343" name="radio343" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard343">Describe the vector and/or animal control responsibilities in the county.</td>
			<td class="tdcomment"><input id="comments343" size="60" type="text" /></td>
		</tr>
		<tr id="row344">
			<td id="number344">(344)</td>
			<td class="tdradios"><input id="standardA344" name="radio344" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI344" name="radio344" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard344">Describe the capabilities for evaluating structures and area for habitability and other environmental health concerns in coordination with ESF 3.</td>
			<td class="tdcomment"><input id="comments344" size="60" type="text" /></td>
		</tr>
		<tr id="row345">
			<td id="number345">(345)</td>
			<td class="tdradios"><input id="standardA345" name="radio345" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI345" name="radio345" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard345">Describe coordination efforts with public water suppliers to ensure safe drinking water to communities.</td>
			<td class="tdcomment"><input id="comments345" size="60" type="text" /></td>
		</tr>
		<tr id="row346">
			<td id="number346">(346)</td>
			<td class="tdradios"><input id="standardA346" name="radio346" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI346" name="radio346" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard346">Describe the use of community assessment tools and follow up monitoring after an incident.</td>
			<td class="tdcomment"><input id="comments346" size="60" type="text" /></td>
		</tr>
		<tr id="row347">
			<td id="number347">(347)</td>
			<td class="tdradios"><input id="standardA347" name="radio347" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI347" name="radio347" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard347">Describe the role of the community mental health center in responding to the needs of individuals after a disaster.</td>
			<td class="tdcomment"><input id="comments347" size="60" type="text" /></td>
		</tr>
		<tr id="row348">
			<td id="number348">(348)</td>
			<td class="tdradios"><input id="standardA348" name="radio348" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI348" name="radio348" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard348">Describe the role of local social workers, psychiatrists, counselors, substance abuse professionals, and other behavior health professionals in supporting community members in a coordinated manner.</td>
			<td class="tdcomment"><input id="comments348" size="60" type="text" /></td>
		</tr>
		<tr id="row349">
			<td id="number349">(349)</td>
			<td class="tdradios"><input id="standardA349" name="radio349" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI349" name="radio349" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard349">Briefly describe the community capabilities for peer-to-peer crisis counseling for emergency responders.</td>
			<td class="tdcomment"><input id="comments349" size="60" type="text" /></td>
		</tr>
		<tr id="row350">
			<td id="number350">(350)</td>
			<td class="tdradios"><input id="standardA350" name="radio350" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI350" name="radio350" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard350">Describe general methods to provide behavioral health services for children affected by the incident including providing opportunities to understand the incident.</td>
			<td class="tdcomment"><input id="comments350" size="60" type="text" /></td>
		</tr>
		<tr id="row351">
			<td id="number351">(351)</td>
			<td class="tdradios"><input id="standardA351" name="radio351" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI351" name="radio351" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard351">List actions for ESF 8 to be taken for preparedness.</td>
			<td class="tdcomment"><input id="comments351" size="60" type="text" /></td>
		</tr>
		<tr id="row352">
			<td id="number352">(352)</td>
			<td class="tdradios"><input id="standardA352" name="radio352" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI352" name="radio352" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard352">List actions for ESF 8 to be taken for response.</td>
			<td class="tdcomment"><input id="comments352" size="60" type="text" /></td>
		</tr>
		<tr id="row353">
			<td id="number353">(353)</td>
			<td class="tdradios"><input id="standardA353" name="radio353" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI353" name="radio353" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard353">List actions for ESF 8 to be taken for recovery.</td>
			<td class="tdcomment"><input id="comments353" size="60" type="text" /></td>
		</tr>
		<tr id="row354">
			<td id="number354">(354)</td>
			<td class="tdradios"><input id="standardA354" name="radio354" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI354" name="radio354" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard354">Describe how ESF 8 will collaborate with health and medical organizations to identify and address recovery needs.</td>
			<td class="tdcomment"><input id="comments354" size="60" type="text" /></td>
		</tr>
		<tr id="row355">
			<td id="number355">(355)</td>
			<td class="tdradios"><input id="standardA355" name="radio355" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI355" name="radio355" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard355">List actions for ESF 8 to be taken for prevention mitigation.</td>
			<td class="tdcomment"><input id="comments355" size="60" type="text" /></td>
		</tr>
		<tr id="row356">
			<td id="number356">(356)</td>
			<td class="tdradios"><input id="standardA356" name="radio356" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI356" name="radio356" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard356">Identify mitigation measures.</td>
			<td class="tdcomment"><input id="comments356" size="60" type="text" /></td>
		</tr>
		<tr id="row357">
			<td id="number357">(357)</td>
			<td class="tdradios"><input id="standardA357" name="radio357" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI357" name="radio357" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard357">Using the list of preparedness, response, recovery, and prevention/mitigation measures found in the concept of operations sections; list responsibilities for each agency/organization of the planning team.</td>
			<td class="tdcomment"><input id="comments357" size="60" type="text" /></td>
		</tr>
		<tr id="row358">
			<td id="number358">(358)</td>
			<td class="tdradios"><input id="standardA358" name="radio358" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI358" name="radio358" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard358">Identify ESF 8 actions for preparedness, response, recovery, and prevention/mitigation.</td>
			<td class="tdcomment"><input id="comments358" size="60" type="text" /></td>
		</tr>
		<tr id="row359">
			<td id="number359">(359)</td>
			<td class="tdradios"><input id="standardA359" name="radio359" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI359" name="radio359" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard359">Each action identified in the Concept of Operations must be tasked to at least one agency as a responsibility.</td>
			<td class="tdcomment"><input id="comments359" size="60" type="text" /></td>
		</tr>
		<tr id="row360">
			<td id="number360">(360)</td>
			<td class="tdradios"><input id="standardA360" name="radio360" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI360" name="radio360" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard360">To include, but not limited to the actions/responsibilities provided within this attachment.</td>
			<td class="tdcomment"><input id="comments360" size="60" type="text" /></td>
		</tr>
		<tr id="row361">
			<td id="number361">(361)</td>
			<td class="tdradios"><input id="standardA361" name="radio361" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI361" name="radio361" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard361">Identify organizations or facilities responsible for providing initial notification for ESF 8.</td>
			<td class="tdcomment"><input id="comments361" size="60" type="text" /></td>
		</tr>
		<tr id="row362">
			<td id="number362">(362)</td>
			<td class="tdradios"><input id="standardA362" name="radio362" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI362" name="radio362" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard362">Identify liaison to communicate between health department and ESF for emergency related information.</td>
			<td class="tdcomment"><input id="comments362" size="60" type="text" /></td>
		</tr>
		<tr id="row363">
			<td id="number363">(363)</td>
			<td class="tdradios"><input id="standardA363" name="radio363" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI363" name="radio363" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard363">Coordinate with ESF 6, to identify at-risk individuals in advance of, during, and following an emergency.</td>
			<td class="tdcomment"><input id="comments363" size="60" type="text" /></td>
		</tr>
		<tr id="row364">
			<td id="number364">(364)</td>
			<td class="tdradios"><input id="standardA364" name="radio364" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI364" name="radio364" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard364">Identify hospital&#39;s ability to perform decontamination of patients.</td>
			<td class="tdcomment"><input id="comments364" size="60" type="text" /></td>
		</tr>
		<tr id="row365">
			<td id="number365">(365)</td>
			<td class="tdradios"><input id="standardA365" name="radio365" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI365" name="radio365" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard365">Identify health services needed to support identified disaster risks and provision of those services.</td>
			<td class="tdcomment"><input id="comments365" size="60" type="text" /></td>
		</tr>
		<tr id="row366">
			<td id="number366">(366)</td>
			<td class="tdradios"><input id="standardA366" name="radio366" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI366" name="radio366" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard366">Monitor available medical beds and reports to ESF 8.</td>
			<td class="tdcomment"><input id="comments366" size="60" type="text" /></td>
		</tr>
		<tr id="row367">
			<td id="number367">(367)</td>
			<td class="tdradios"><input id="standardA367" name="radio367" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI367" name="radio367" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard367">Identify county&#39;s behavioral health response capabilities.</td>
			<td class="tdcomment"><input id="comments367" size="60" type="text" /></td>
		</tr>
		<tr id="row368">
			<td id="number368">(368)</td>
			<td class="tdradios"><input id="standardA368" name="radio368" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI368" name="radio368" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard368">Identify county&#39;s fatality management capabilities.</td>
			<td class="tdcomment"><input id="comments368" size="60" type="text" /></td>
		</tr>
		<tr id="row369">
			<td id="number369">(369)</td>
			<td class="tdradios"><input id="standardA369" name="radio369" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI369" name="radio369" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard369">Maintain MOUs or MOAs in place to share medical resources.</td>
			<td class="tdcomment"><input id="comments369" size="60" type="text" /></td>
		</tr>
		<tr id="row370">
			<td id="number370">(370)</td>
			<td class="tdradios"><input id="standardA370" name="radio370" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI370" name="radio370" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard370">Coordinate local efforts related to K-SERV and medical professional volunteer registration.</td>
			<td class="tdcomment"><input id="comments370" size="60" type="text" /></td>
		</tr>
		<tr id="row371">
			<td id="number371">(371)</td>
			<td class="tdradios"><input id="standardA371" name="radio371" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI371" name="radio371" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard371">Identify currently available health and medical sector related volunteer organizations.</td>
			<td class="tdcomment"><input id="comments371" size="60" type="text" /></td>
		</tr>
		<tr id="row372">
			<td id="number372">(372)</td>
			<td class="tdradios"><input id="standardA372" name="radio372" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI372" name="radio372" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard372">Identify alternate care site planning activities.</td>
			<td class="tdcomment"><input id="comments372" size="60" type="text" /></td>
		</tr>
		<tr id="row373">
			<td id="number373">(373)</td>
			<td class="tdradios"><input id="standardA373" name="radio373" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI373" name="radio373" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard373">Develop procedures to appropriately vet and release casualty and fatality information.</td>
			<td class="tdcomment"><input id="comments373" size="60" type="text" /></td>
		</tr>
		<tr id="row374">
			<td id="number374">(374)</td>
			<td class="tdradios"><input id="standardA374" name="radio374" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI374" name="radio374" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard374">Credential and badge department employees prior to an incident.</td>
			<td class="tdcomment"><input id="comments374" size="60" type="text" /></td>
		</tr>
		<tr id="row375">
			<td id="number375">(375)</td>
			<td class="tdradios"><input id="standardA375" name="radio375" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI375" name="radio375" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard375">Capture incident related expenses to be used in emergency response.</td>
			<td class="tdcomment"><input id="comments375" size="60" type="text" /></td>
		</tr>
		<tr id="row376">
			<td id="number376">(376)</td>
			<td class="tdradios"><input id="standardA376" name="radio376" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI376" name="radio376" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard376">Credential medical staff.</td>
			<td class="tdcomment"><input id="comments376" size="60" type="text" /></td>
		</tr>
		<tr id="row377">
			<td id="number377">(377)</td>
			<td class="tdradios"><input id="standardA377" name="radio377" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI377" name="radio377" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard377">Participate in county medical countermeasure planning.</td>
			<td class="tdcomment"><input id="comments377" size="60" type="text" /></td>
		</tr>
		<tr id="row378">
			<td id="number378">(378)</td>
			<td class="tdradios"><input id="standardA378" name="radio378" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI378" name="radio378" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard378">Coordinate community medication dispensing activities including vaccines and pharmaceuticals.</td>
			<td class="tdcomment"><input id="comments378" size="60" type="text" /></td>
		</tr>
		<tr id="row379">
			<td id="number379">(379)</td>
			<td class="tdradios"><input id="standardA379" name="radio379" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI379" name="radio379" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard379">Coordinate activities in preparing at-risk populations for disasters.</td>
			<td class="tdcomment"><input id="comments379" size="60" type="text" /></td>
		</tr>
		<tr id="row380">
			<td id="number380">(380)</td>
			<td class="tdradios"><input id="standardA380" name="radi380" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI380" name="radio380" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard380">Coordinate and maintain family reunification polices or procedures to be used by ESF 8.</td>
			<td class="tdcomment"><input id="comments380" size="60" type="text" /></td>
		</tr>
		<tr id="row381">
			<td id="number381">(381)</td>
			<td class="tdradios"><input id="standardA381" name="radio381" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI381" name="radio381" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard381">Communicate ESF 8 information to and between support agencies.</td>
			<td class="tdcomment"><input id="comments381" size="60" type="text" /></td>
		</tr>
		<tr id="row382">
			<td id="number382">(382)</td>
			<td class="tdradios"><input id="standardA382" name="radio382" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI382" name="radio382" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard382">Coordinate and maintain ESF 8 situational awareness.</td>
			<td class="tdcomment"><input id="comments382" size="60" type="text" /></td>
		</tr>
		<tr id="row383">
			<td id="number383">(383)</td>
			<td class="tdradios"><input id="standardA383" name="radio383" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI383" name="radio383" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard383">Coordinate medical operations activities and resource needs for health departments.</td>
			<td class="tdcomment"><input id="comments383" size="60" type="text" /></td>
		</tr>
		<tr id="row384">
			<td id="number384">(384)</td>
			<td class="tdradios"><input id="standardA384" name="radio384" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI384" name="radio384" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard384">Coordinate medical operations activities and resource needs for Hospital(s).</td>
			<td class="tdcomment"><input id="comments384" size="60" type="text" /></td>
		</tr>
		<tr id="row385">
			<td id="number385">(385)</td>
			<td class="tdradios"><input id="standardA385" name="radio385" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI385" name="radio385" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard385">Coordinate medical operations activities and resource needs for EMS.</td>
			<td class="tdcomment"><input id="comments385" size="60" type="text" /></td>
		</tr>
		<tr id="row386">
			<td id="number386">(386)</td>
			<td class="tdradios"><input id="standardA386" name="radio386" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI386" name="radio386" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard386">Coordinate medical operations activities and resource needs for environmental health.</td>
			<td class="tdcomment"><input id="comments386" size="60" type="text" /></td>
		</tr>
		<tr id="row387">
			<td id="number387">(387)</td>
			<td class="tdradios"><input id="standardA387" name="radio387" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI387" name="radio387" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard387">Coordinate medical operations activities and resource needs for Pharmacy(ies).</td>
			<td class="tdcomment"><input id="comments387" size="60" type="text" /></td>
		</tr>
		<tr id="row388">
			<td id="number388">(388)</td>
			<td class="tdradios"><input id="standardA388" name="radio388" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI388" name="radio388" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard388">Coordinate medical operations activities and resource needs for behavioral health center(s)/ team(s)</td>
			<td class="tdcomment"><input id="comments388" size="60" type="text" /></td>
		</tr>
		<tr id="row389">
			<td id="number389">(389)</td>
			<td class="tdradios"><input id="standardA389" name="radio389" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI389" name="radio389" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard389">Coordinate medical operations activities and resource needs for Clinic(s).</td>
			<td class="tdcomment"><input id="comments389" size="60" type="text" /></td>
		</tr>
		<tr id="row390">
			<td id="number390">(390)</td>
			<td class="tdradios"><input id="standardA390" name="radio390" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI390" name="radio390" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard390">Coordinate medical operations activities and resource needs for Funeral director(s)/coroner.</td>
			<td class="tdcomment"><input id="comments390" size="60" type="text" /></td>
		</tr>
		<tr id="row391">
			<td id="number391">(391)</td>
			<td class="tdradios"><input id="standardA391" name="radio391" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI391" name="radio391" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard391">Coordinate health and medical support activities to ESF 6 for shelters.</td>
			<td class="tdcomment"><input id="comments391" size="60" type="text" /></td>
		</tr>
		<tr id="row392">
			<td id="number392">(392)</td>
			<td class="tdradios"><input id="standardA392" name="radio392" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI392" name="radio392" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard392">Identify specific health and safety risks for disasters.</td>
			<td class="tdcomment"><input id="comments392" size="60" type="text" /></td>
		</tr>
		<tr id="row393">
			<td id="number393">(393)</td>
			<td class="tdradios"><input id="standardA393" name="radio393" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI393" name="radio393" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard393">Coordinate with ESF 7 for requesting resources.</td>
			<td class="tdcomment"><input id="comments393" size="60" type="text" /></td>
		</tr>
		<tr id="row394">
			<td id="number394">(394)</td>
			<td class="tdradios"><input id="standardA394" name="radio394" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI394" name="radio394" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard394">Coordinate and activate mutual aid, K-SERV, and other methods for requesting additional medical providers and support personnel.</td>
			<td class="tdcomment"><input id="comments394" size="60" type="text" /></td>
		</tr>
		<tr id="row395">
			<td id="number395">(395)</td>
			<td class="tdradios"><input id="standardA395" name="radio395" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI395" name="radio395" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard395">Communicate incident related health and medical information to citizens including at-risk populations.</td>
			<td class="tdcomment"><input id="comments395" size="60" type="text" /></td>
		</tr>
		<tr id="row396">
			<td id="number396">(396)</td>
			<td class="tdradios"><input id="standardA396" name="radio396" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI396" name="radio396" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard396">Coordinate surveillance and epidemiological activities of the local health department including activities with community partners: schools, EMS, hospitals, private medical providers, and others.</td>
			<td class="tdcomment"><input id="comments396" size="60" type="text" /></td>
		</tr>
		<tr id="row397">
			<td id="number397">(397)</td>
			<td class="tdradios"><input id="standardA397" name="radio397" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI397" name="radio397" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard397">Recommend or determine health related protective actions.</td>
			<td class="tdcomment"><input id="comments397" size="60" type="text" /></td>
		</tr>
		<tr id="row398">
			<td id="number398">(398)</td>
			<td class="tdradios"><input id="standardA398" name="radio398" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI398" name="radio398" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard398">Activate community alternate care site.</td>
			<!--do we need to add more for this one?-->
			<td class="tdcomment"><input id="comments398" size="60" type="text" /></td>
		</tr>
		<tr id="row399">
			<td id="number399">(399)</td>
			<td class="tdradios"><input id="standardA399" name="radio399" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI399" name="radio399" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard399">Operate community alternate care site.</td>
			<td class="tdcomment"><input id="comments399" size="60" type="text" /></td>
		</tr>
		<tr id="row400">
			<td id="number400">(400)</td>
			<td class="tdradios"><input id="standardA400" name="radio400" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI400" name="radio400" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard400">Coordinate fatality management process and requests additional support.</td>
			<td class="tdcomment"><input id="comments400" size="60" type="text" /></td>
		</tr>
		<tr id="row401">
			<td id="number401">(401)</td>
			<td class="tdradios"><input id="standardA401" name="radio401" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI401" name="radio401" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard401">Determine the extent or threat contamination from chemical, radiological, or infectious agents.</td>
			<td class="tdcomment"><input id="comments401" size="60" type="text" /></td>
		</tr>
		<tr id="row402">
			<td id="number402">(402)</td>
			<td class="tdradios"><input id="standardA402" name="radio402" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI402" name="radio402" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard402">Track the injured (registration to discharge process).</td>
			<td class="tdcomment"><input id="comments402" size="60" type="text" /></td>
		</tr>
		<tr id="row403">
			<td id="number403">(403)</td>
			<td class="tdradios"><input id="standardA403" name="radio403" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI403" name="radio403" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard403">Document and track resources that are committed to specific missions and costs.</td>
			<td class="tdcomment"><input id="comments403" size="60" type="text" /></td>
		</tr>
		<tr id="row404">
			<td id="number404">(404)</td>
			<td class="tdradios"><input id="standardA404" name="radio404" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI404" name="radio404" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard404">Provide liaison to communicate between health department and ESF 8 for emergency related information.</td>
			<td class="tdcomment"><input id="comments404" size="60" type="text" /></td>
		</tr>
		<tr id="row405">
			<td id="number405">(405)</td>
			<td class="tdradios"><input id="standardA405" name="radio405" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI405" name="radio405" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard405">Report incident related injuries to EOC.</td>
			<td class="tdcomment"><input id="comments405" size="60" type="text" /></td>
		</tr>
		<tr id="row406">
			<td id="number406">(406)</td>
			<td class="tdradios"><input id="standardA406" name="radio406" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI406" name="radio406" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard406">Report incident related fatality to EOC.</td>
			<td class="tdcomment"><input id="comments406" size="60" type="text" /></td>
		</tr>
		<tr id="row407">
			<td id="number407">(407)</td>
			<td class="tdradios"><input id="standardA407" name="radio407" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI407" name="radio407" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard407">Coordinate vector surveillance activities.</td>
			<td class="tdcomment"><input id="comments407" size="60" type="text" /></td>
		</tr>
		<tr id="row408">
			<td id="number408">(408)</td>
			<td class="tdradios"><input id="standardA408" name="radio408" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI408" name="radio408" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard408">Perform vector surveillance activities.</td>
			<td class="tdcomment"><input id="comments408" size="60" type="text" /></td>
		</tr>
		<tr id="row409">
			<td id="number409">(409)</td>
			<td class="tdradios"><input id="standardA409" name="radio409" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI409" name="radio409" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard409">Provide briefs or updates related to vector surveillance activities to ESF 8.</td>
			<td class="tdcomment"><input id="comments409" size="60" type="text" /></td>
		</tr>
		<tr id="row410">
			<td id="number410">(410)</td>
			<td class="tdradios"><input id="standardA410" name="radio410" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI410" name="radio410" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard410">Activate and conduct medical care activities during a disaster.</td>
			<td class="tdcomment"><input id="comments410" size="60" type="text" /></td>
		</tr>
		<tr id="row411">
			<td id="number411">(411)</td>
			<td class="tdradios"><input id="standardA411" name="radio411" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI411" name="radio411" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard411">Provide numbers of available beds, resources, medical capabilities and medical specialties to the ESF 8 coordinator.</td>
			<td class="tdcomment"><input id="comments411" size="60" type="text" /></td>
		</tr>
		<tr id="row412">
			<td id="number412">(412)</td>
			<td class="tdradios"><input id="standardA412" name="radio412" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI412" name="radio412" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard412">Coordinate and activate mortuary services during an emergency.</td>
			<td class="tdcomment"><input id="comments412" size="60" type="text" /></td>
		</tr>
		<tr id="row413">
			<td id="number413">(413)</td>
			<td class="tdradios"><input id="standardA413" name="radio413" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI413" name="radio413" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard413">Coordinate and activate patient decontamination activities with EMS agencies.</td>
			<td class="tdcomment"><input id="comments413" size="60" type="text" /></td>
		</tr>
		<tr id="row414">
			<td id="number414">(414)</td>
			<td class="tdradios"><input id="standardA414" name="radio414" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI414" name="radio414" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard414">Coordinate and activate behavioral health care activities.</td>
			<td class="tdcomment"><input id="comments414" size="60" type="text" /></td>
		</tr>
		<tr id="row415">
			<td id="number415">(415)</td>
			<td class="tdradios"><input id="standardA415" name="radio415" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI415" name="radio415" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard415">Dispose of medical supplies.</td>
			<td class="tdcomment"><input id="comments415" size="60" type="text" /></td>
		</tr>
		<tr id="row416">
			<td id="number416">(416)</td>
			<td class="tdradios"><input id="standardA416" name="radio416" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI416" name="radio416" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard416">Coordinate decontamination activities, in coordination with ESF 10, from chemical, radiological, or biological agents.</td>
			<td class="tdcomment"><input id="comments416" size="60" type="text" /></td>
		</tr>
		<tr id="row417">
			<td id="number417">(417)</td>
			<td class="tdradios"><input id="standardA417" name="radio417" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI417" name="radio417" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard417">Coordinate community outreach to at-risk populations.</td>
			<td class="tdcomment"><input id="comments417" size="60" type="text" /></td>
		</tr>
		<tr id="row418">
			<td id="number418">(418)</td>
			<td class="tdradios"><input id="standardA418" name="radio418" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI418" name="radio418" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard418">Provide communication of at-risk populations&#39; needs to the ESF 8 coordinator.</td>
			<td class="tdcomment"><input id="comments418" size="60" type="text" /></td>
		</tr>
		<tr id="row419">
			<td id="number419">(419)</td>
			<td class="tdradios"><input id="standardA419" name="radio419" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI419" name="radio419" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard419">Coordinate with at-risk populations at a community shelter.</td>
			<td class="tdcomment"><input id="comments419" size="60" type="text" /></td>
		</tr>
		<tr id="row420">
			<td id="number420">(420)</td>
			<td class="tdradios"><input id="standardA420" name="radio420" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI420" name="radio420" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard420">Activate family reunification policies or procedures to be used by ESF 8.</td>
			<td class="tdcomment"><input id="comments420" size="60" type="text" /></td>
		</tr>
		<tr id="row421">
			<td id="number421">(421)</td>
			<td class="tdradios"><input id="standardA421" name="radio421" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI421" name="radio421" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard421">Record damage assessment information.</td>
			<td class="tdcomment"><input id="comments421" size="60" type="text" /></td>
		</tr>
		<tr id="row422">
			<td id="number422">(422)</td>
			<td class="tdradios"><input id="standardA422" name="radio422" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI422" name="radio422" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard422">Coordinate with health and medical sector agencies submitting response and recovery information to emergency management.</td>
			<td class="tdcomment"><input id="comments422" size="60" type="text" /></td>
		</tr>
		<tr id="row423">
			<td id="number423">(423)</td>
			<td class="tdradios"><input id="standardA423" name="radio423" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI423" name="radio423" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard423">Conduct and monitor health effects post-disaster.</td>
			<td class="tdcomment"><input id="comments423" size="60" type="text" /></td>
		</tr>
		<tr id="row424">
			<td id="number424">(424)</td>
			<td class="tdradios"><input id="standardA424" name="radio424" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI424" name="radio424" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard424">Provide public health input into community recovery affairs.</td>
			<td class="tdcomment"><input id="comments424" size="60" type="text" /></td>
		</tr>
		<tr id="row425">
			<td id="number425">(425)</td>
			<td class="tdradios"><input id="standardA425" name="radio425" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI425" name="radio425" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard425">Provide incident reports for elected officials.</td>
			<td class="tdcomment"><input id="comments425" size="60" type="text" /></td>
		</tr>
		<tr id="row426">
			<td id="number426">(426)</td>
			<td class="tdradios"><input id="standardA426" name="radio426" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI426" name="radio426" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard426">Report damages of health and medical organizations to ESF 8.</td>
			<td class="tdcomment"><input id="comments426" size="60" type="text" /></td>
		</tr>
		<tr id="row427">
			<td id="number427">(427)</td>
			<td class="tdradios"><input id="standardA427" name="radio427" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI427" name="radio427" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard427">Inspect food service establishments prior to resuming business.</td>
			<td class="tdcomment"><input id="comments427" size="60" type="text" /></td>
		</tr>
		<tr id="row428">
			<td id="number428">(428)</td>
			<td class="tdradios"><input id="standardA428" name="radio428" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI428" name="radio428" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard428">Restore water and wastewater capabilities in coordination with ESF 3.</td>
			<td class="tdcomment"><input id="comments428" size="60" type="text" /></td>
		</tr>
		<tr id="row429">
			<td id="number429">(429)</td>
			<td class="tdradios"><input id="standardA429" name="radio429" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI429" name="radio429" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard429">Assist at-risk populations in recovering from disasters including programs involved.</td>
			<td class="tdcomment"><input id="comments429" size="60" type="text" /></td>
		</tr>
		<tr id="row430">
			<td id="number430">(430)</td>
			<td class="tdradios"><input id="standardA430" name="radio430" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI430" name="radio430" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard430">Identify the public health impact of identified risks.</td>
			<td class="tdcomment"><input id="comments430" size="60" type="text" /></td>
		</tr>
		<tr id="row431">
			<td id="number431">(431)</td>
			<td class="tdradios"><input id="standardA431" name="radio431" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI431" name="radio431" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard431">Provide vaccinations against preventable diseases.</td>
			<td class="tdcomment"><input id="comments431" size="60" type="text" /></td>
		</tr>
		<tr id="row432">
			<td id="number432">(432)</td>
			<td class="tdradios"><input id="standardA432" name="radio432" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI432" name="radio432" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard432">Provide hand washing and other disease prevention campaign activities.</td>
			<td class="tdcomment"><input id="comments432" size="60" type="text" /></td>
		</tr>
		<tr id="row433">
			<td id="number433">(433)</td>
			<td class="tdradios"><input id="standardA433" name="radio433" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI433" name="radio433" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard433">Participate on the jurisdictional hazard mitigation planning committee.</td>
			<td class="tdcomment"><input id="comments433" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>


<!--ESF 9-->
<div id="tabs-10">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standards</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row434">
			<td id="number434">(434)</td>
			<td class="tdradios"><input id="standardA434" name="radio434" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI434" name="radio434" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard434">Describe the reason for the development of this annex.</td>
			<td class="tdcomment"><input id="comments434" size="60" type="text" /></td>
		</tr>
		<tr id="row435">
			<td id="number435">(435)</td>
			<td class="tdradios"><input id="standardA435" name="radio435" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI435" name="radio435" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard435">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments435" size="60" type="text" /></td>
		</tr>
		<tr id="row436">
			<td id="number436">(436)</td>
			<td class="tdradios"><input id="standardA436" name="radio436" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI436" name="radio436" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard436">List county specific policies regarding ESF 9.</td>
			<td class="tdcomment"><input id="comments436" size="60" type="text" /></td>
		</tr>
		<tr id="row437">
			<td id="number437">(437)</td>
			<td class="tdradios"><input id="standardA437" name="radio437" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI437" name="radio437" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard437">List state policies or authorities regarding ESF 9.</td>
			<td class="tdcomment"><input id="comments437" size="60" type="text" /></td>
		</tr>
		<tr id="row438">
			<td id="number438">(438)</td>
			<td class="tdradios"><input id="standardA438" name="radio438" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI438" name="radio438" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard438">List federal authorities regarding ESF 9.</td>
			<td class="tdcomment"><input id="comments438" size="60" type="text" /></td>
		</tr>
		<tr id="row439">
			<td id="number439">(439)</td>
			<td class="tdradios"><input id="standardA439" name="radio439" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI439" name="radio439" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard439">Describe how search and rescue efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments439" size="60" type="text" /></td>
		</tr>
		<tr id="row440">
			<td id="number440">(440)</td>
			<td class="tdradios"><input id="standardA440" name="radio440" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI440" name="radio440" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard440">Identify agency responsible for liaison roles with the state and adjacent county search and rescue officials.</td>
			<td class="tdcomment"><input id="comments440" size="60" type="text" /></td>
		</tr>
		<tr id="row441">
			<td id="number441">(441)</td>
			<td class="tdradios"><input id="standardA441" name="radio441" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI441" name="radio441" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard441">Identify agency responsible for managing the collection, processing, and disseminating of information to and from the EOC.</td>
			<td class="tdcomment"><input id="comments441" size="60" type="text" /></td>
		</tr>
		<tr id="row442">
			<td id="number442">(442)</td>
			<td class="tdradios"><input id="standardA442" name="radio442" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI442" name="radio442" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard442">Identify agency responsible for providing initial notification for ESF 9.</td>
			<td class="tdcomment"><input id="comments442" size="60" type="text" /></td>
		</tr>
		<tr id="row443">
			<td id="number443">(443)</td>
			<td class="tdradios"><input id="standardA443" name="radio443" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI443" name="radio443" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard443">Identify the agency(s) responsible and the process for requesting additional resources and managing emergency situations identified in the risk assessment for Rope Rescue (above &amp; below grade, High angle).</td>
			<td class="tdcomment"><input id="comments443" size="60" type="text" /></td>
		</tr>
		<tr id="row444">
			<td id="number444">(444)</td>
			<td class="tdradios"><input id="standardA444" name="radio444" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI444" name="radio444" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard444">Identify the agency(s) responsible and the process for requesting additional resources and managing emergency situations identified in the risk assessment for Confined Space Rescue.</td>
			<td class="tdcomment"><input id="comments444" size="60" type="text" /></td>
		</tr>
		<tr id="row445">
			<td id="number445">(445)</td>
			<td class="tdradios"><input id="standardA445" name="radio445" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI445" name="radio445" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard445">Identify the agency(s) responsible and the process for requesting additional resources and managing emergency situations identified in the risk assessment for Trench Rescue.</td>
			<td class="tdcomment"><input id="comments445" size="60" type="text" /></td>
		</tr>
		<tr id="row446">
			<td id="number446">(446)</td>
			<td class="tdradios"><input id="standardA446" name="radio446" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI446" name="radio446" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard446">Identify the agency(s) responsible and the process for requesting additional resources and managing emergency situations identified in the risk assessment for Structural Collapse Search &amp; Rescue.</td>
			<td class="tdcomment"><input id="comments446" size="60" type="text" /></td>
		</tr>
		<tr id="row447">
			<td id="number447">(447)</td>
			<td class="tdradios"><input id="standardA447" name="radio447" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI447" name="radio447" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard447">Identify the agency(s) responsible and the process for requesting additional resources and managing emergency situations identified in the risk assessment for Swiftwater/Floodwater Rescue.</td>
			<td class="tdcomment"><input id="comments447" size="60" type="text" /></td>
		</tr>
		<tr id="row448">
			<td id="number448">(448)</td>
			<td class="tdradios"><input id="standardA448" name="radio448" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI448" name="radio448" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard448">Identify the agency(s) responsible and the process for requesting additional resources and managing emergency situations identified in the risk assessment for Dive Search&amp; Rescue.</td>
			<td class="tdcomment"><input id="comments448" size="60" type="text" /></td>
		</tr>
		<tr id="row449">
			<td id="number449">(449)</td>
			<td class="tdradios"><input id="standardA449" name="radio449" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI449" name="radio449" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard449">Identify the agency(s) responsible and the process for requesting additional resources and managing emergency situations identified in the risk assessment for Vehicle Rescue.</td>
			<td class="tdcomment"><input id="comments449" size="60" type="text" /></td>
		</tr>
		<tr id="row450">
			<td id="number450">(450)</td>
			<td class="tdradios"><input id="standardA450" name="radio450" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI450" name="radio450" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard450">Identify the agency(s) responsible and the process for requesting additional resources and managing emergency situations identified in the risk assessment for Machinery Rescue.</td>
			<td class="tdcomment"><input id="comments450" size="60" type="text" /></td>
		</tr>
		<tr id="row451">
			<td id="number451">(451)</td>
			<td class="tdradios"><input id="standardA451" name="radio451" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI451" name="radio451" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard451">Identify the agency(s) responsible and the process for requesting additional resources and managing emergency situations identified in the risk assessment for Ice Rescue.</td>
			<td class="tdcomment"><input id="comments451" size="60" type="text" /></td>
		</tr>
		<tr id="row452">
			<td id="number452">(452)</td>
			<td class="tdradios"><input id="standardA452" name="radio452" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI452" name="radio452" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard452">Identify the agency(s) responsible and the process for requesting additional resources and managing emergency situations identified in the risk assessment for Cave Search &amp; Rescue.</td>
			<td class="tdcomment"><input id="comments452" size="60" type="text" /></td>
		</tr>
		<tr id="row453">
			<td id="number453">(453)</td>
			<td class="tdradios"><input id="standardA453" name="radio453" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI453" name="radio453" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard453">Identify the agency(s) responsible and the process for requesting additional resources and managing emergency situations identified in the risk assessment for Mine &amp; Tunnel Search and Rescue.</td>
			<td class="tdcomment"><input id="comments453" size="60" type="text" /></td>
		</tr>
		<tr id="row454">
			<td id="number454">(454)</td>
			<td class="tdradios"><input id="standardA454" name="radio454" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI454" name="radio454" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard454">Identify the agency(s) responsible and the process for requesting additional resources and managing emergency situations identified in the risk assessment for Animal Rescue.</td>
			<td class="tdcomment"><input id="comments454" size="60" type="text" /></td>
		</tr>
		<tr id="row455">
			<td id="number455">(455)</td>
			<td class="tdradios"><input id="standardA455" name="radio455" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI455" name="radio455" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard455">Identify the agency responsible and the process for requesting additional resources and managing emergency situations identified in the risk assessment for Missing Persons.</td>
			<td class="tdcomment"><input id="comments455" size="60" type="text" /></td>
		</tr>
		<tr id="row456">
			<td id="number456">(456)</td>
			<td class="tdradios"><input id="standardA456" name="radio456" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI456" name="radio456" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard456">Identify the agency responsible and the process for requesting additional resources and managing emergency situations identified in the risk assessments for Wide Area/Wilderness Search: K9 Search, Aerial Search.</td>
			<td class="tdcomment"><input id="comments456" size="60" type="text" /></td>
		</tr>
		<tr id="row457">
			<td id="number457">(457)</td>
			<td class="tdradios"><input id="standardA457" name="radio457" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI457" name="radio457" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard457">Identify the ability to sustain search and rescue.</td>
			<td class="tdcomment"><input id="comments457" size="60" type="text" /></td>
		</tr>
		<tr id="row458">
			<td id="number458">(458)</td>
			<td class="tdradios"><input id="standardA458" name="radio458" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI458" name="radio458" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard458">Identify the process for requesting additional search and rescue assistance.</td>
			<td class="tdcomment"><input id="comments458" size="60" type="text" /></td>
		</tr>
		<tr id="row459">
			<td id="number459">(459)</td>
			<td class="tdradios"><input id="standardA459" name="radio459" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI459" name="radio459" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard459">Identify how to handle victims recovered during search and rescue operations to include: Victims with no injuries, injured victims, fatality victims, partial remains.</td>
			<td class="tdcomment"><input id="comments459" size="60" type="text" /></td>
		</tr>
		<tr id="row460">
			<td id="number460">(460)</td>
			<td class="tdradios"><input id="standardA460" name="radio460" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI460" name="radio460" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard460">Identify agency responsible for transporting injured victims to the identified center.</td>
			<td class="tdcomment"><input id="comments460" size="60" type="text" /></td>
		</tr>
		<tr id="row461">
			<td id="number461">(461)</td>
			<td class="tdradios"><input id="standardA461" name="radio461" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI461" name="radio461" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard461">Identify agency responsible for transporting fatality victims to the identified center.</td>
			<td class="tdcomment"><input id="comments461" size="60" type="text" /></td>
		</tr>
		<tr id="row462">
			<td id="number462">(462)</td>
			<td class="tdradios"><input id="standardA462" name="radio462" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI462" name="radio462" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard462">Identify agency responsible for transporting remains to the identified center.</td>
			<td class="tdcomment"><input id="comments462" size="60" type="text" /></td>
		</tr>
		<tr id="row463">
			<td id="number463">(463)</td>
			<td class="tdradios"><input id="standardA463" name="radio463" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI463" name="radio463" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard463">Identify the agency or person responsible for making decisions about handling fatalities.</td>
			<td class="tdcomment"><input id="comments463" size="60" type="text" /></td>
		</tr>
		<tr id="row464">
			<td id="number464">(464)</td>
			<td class="tdradios"><input id="standardA464" name="radio464" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI464" name="radio464" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard464">Summarize guidance for handling vulnerable populations.</td>
			<td class="tdcomment"><input id="comments464" size="60" type="text" /></td>
		</tr>
		<tr id="row465">
			<td id="number465">(465)</td>
			<td class="tdradios"><input id="standardA465" name="radio465" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI465" name="radio465" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard465">List agency/organization responsibilities to support ESF 9 activities.</td>
			<td class="tdcomment"><input id="comments465" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>


<!--ESF 10-->
<div id="tabs-11">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standards</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row466">
			<td id="number466">(466)</td>
			<td class="tdradios"><input id="standardA466" name="radio466" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI466" name="radio466" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard466">Describe the reason for the development of this annex.</td>
			<td class="tdcomment"><input id="comments466" size="60" type="text" /></td>
		</tr>
		<tr id="row467">
			<td id="number467">(467)</td>
			<td class="tdradios"><input id="standardA467" name="radio467" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI467" name="radio467" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard467">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments467" size="60" type="text" /></td>
		</tr>
		<tr id="row468">
			<td id="number468">(468)</td>
			<td class="tdradios"><input id="standardA468" name="radio468" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI468" name="radio468" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard468">List county specific policies regarding ESF 10.</td>
			<td class="tdcomment"><input id="comments468" size="60" type="text" /></td>
		</tr>
		<tr id="row469">
			<td id="number469">(469)</td>
			<td class="tdradios"><input id="standardA469" name="radio469" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI469" name="radio469" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard469">List state policies or authorities regarding ESF 10.</td>
			<td class="tdcomment"><input id="comments469" size="60" type="text" /></td>
		</tr>
		<tr id="row470">
			<td id="number470">(470)</td>
			<td class="tdradios"><input id="standardA470" name="radio470" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI470" name="radio470" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard470">List federal authorities regarding ESF 10.</td>
			<td class="tdcomment"><input id="comments470" size="60" type="text" /></td>
		</tr>
		<tr id="row471">
			<td id="number471">(471)</td>
			<td class="tdradios"><input id="standardA471" name="radio471" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI471" name="radio471" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard471">Describe how oil and hazardous materials response efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments471" size="60" type="text" /></td>
		</tr>
		<tr id="row472">
			<td id="number472">(472)</td>
			<td class="tdradios"><input id="standardA472" name="radio472" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI472" name="radio472" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard472">Identify agency responsible for liaison roles with the state and adjacent counties.</td>
			<td class="tdcomment"><input id="comments472" size="60" type="text" /></td>
		</tr>
		<tr id="row473">
			<td id="number473">(473)</td>
			<td class="tdradios"><input id="standardA473" name="radio473" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI473" name="radio473" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard473">Identify agency responsible for managing the collection, processing, and disseminating of information to and from the EOC.</td>
			<td class="tdcomment"><input id="comments473" size="60" type="text" /></td>
		</tr>
		<tr id="row474">
			<td id="number474">(474)</td>
			<td class="tdradios"><input id="standardA474" name="radio474" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI474" name="radio474" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard474">Identify agency responsible for managing the collection, processing, and disseminating of information to and from the EOC.</td>
			<td class="tdcomment"><input id="comments474" size="60" type="text" /></td>
		</tr>
		<tr id="row475">
			<td id="number475">(475)</td>
			<td class="tdradios"><input id="standardA475" name="radio475" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI475" name="radio475" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard475">Outline hazmat response to be carried out by the Incident Commander.</td>
			<td class="tdcomment"><input id="comments475" size="60" type="text" /></td>
		</tr>
		<tr id="row476">
			<td id="number476">(476)</td>
			<td class="tdradios"><input id="standardA476" name="radio476" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI476" name="radio476" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard476">Identify roles of the LEPC for ESF 10.</td>
			<td class="tdcomment"><input id="comments476" size="60" type="text" /></td>
		</tr>
		<tr id="row477">
			<td id="number477">(477)</td>
			<td class="tdradios"><input id="standardA477" name="radio477" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI477" name="radio477" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard477">Identify the local availability of public and private resources suitable for use during a hazardous materials incident and identify the persons responsible for such response resources.</td>
			<td class="tdcomment"><input id="comments477" size="60" type="text" /></td>
		</tr>
		<tr id="row478">
			<td id="number478">(478)</td>
			<td class="tdradios"><input id="standardA478" name="radio478" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI478" name="radio478" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard478">Identify agency responsibilities of the community emergency coordinator by the Emergency Planning and Community Right-to-Know Act.</td>
			<td class="tdcomment"><input id="comments478" size="60" type="text" /></td>
		</tr>
		<tr id="row479">
			<td id="number479">(479)</td>
			<td class="tdradios"><input id="standardA479" name="radio479" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI479" name="radio479" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard479">Identify the facilities subject to the EPCRA emergency planning requirements, the routes likely to be used for the transportation of extremely hazardous substances, and any additional critical facilities that are at increased risk to their proximity to the regulated facility.</td>
			<td class="tdcomment"><input id="comments479" size="60" type="text" /></td>
		</tr>
		<tr id="row480">
			<td id="number480">(480)</td>
			<td class="tdradios"><input id="standardA480" name="radio480" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI480" name="radio480" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard480">Describe the process of identifying the regulated facility&#39;s emergency coordinator, identify up to date contact information and reference emergency response plans.</td>
			<td class="tdcomment"><input id="comments480" size="60" type="text" /></td>
		</tr>
		<tr id="row481">
			<td id="number481">(481)</td>
			<td class="tdradios"><input id="standardA481" name="radio481" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI481" name="radio481" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard481">Identify local transportation routes for hazardous materials for highway and rail.</td>
			<td class="tdcomment"><input id="comments481" size="60" type="text" /></td>
		</tr>
		<tr id="row482">
			<td id="number482">(482)</td>
			<td class="tdradios"><input id="standardA482" name="radio482" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI482" name="radio482" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard482">Describe the process for the identification of evacuation routes and shelter-in-place methods.</td>
			<td class="tdcomment"><input id="comments482" size="60" type="text" /></td>
		</tr>
		<tr id="row483">
			<td id="number483">(483)</td>
			<td class="tdradios"><input id="standardA483" name="radio483" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI483" name="radio483" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard483">Outline response actions and notification procedures expected of regulated facilities and hazmat transporters.</td>
			<td class="tdcomment"><input id="comments483" size="60" type="text" /></td>
		</tr>
		<tr id="row484">
			<td id="number484">(484)</td>
			<td class="tdradios"><input id="standardA484" name="radio484" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI484" name="radio484" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard484">Describe the hazmat notification process to alert local, state, and federal authorities that a release/spill has occurred.</td>
			<td class="tdcomment"><input id="comments484" size="60" type="text" /></td>
		</tr>
		<tr id="row485">
			<td id="number485">(485)</td>
			<td class="tdradios"><input id="standardA485" name="radio485" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI485" name="radio485" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard485">Describe procedures for warning the public of a hazmat incident or radiological release in coordination with ESF 15.</td>
			<td class="tdcomment"><input id="comments485" size="60" type="text" /></td>
		</tr>
		<tr id="row486">
			<td id="number486">(486)</td>
			<td class="tdradios"><input id="standardA486" name="radio486" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI486" name="radio486" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard486">Describe procedures of an &quot;all clear&quot; announcement for public to return to their homes.</td>
			<td class="tdcomment"><input id="comments486" size="60" type="text" /></td>
		</tr>
		<tr id="row487">
			<td id="number487">(487)</td>
			<td class="tdradios"><input id="standardA487" name="radio487" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI487" name="radio487" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard487">Identify multiple methods of public warning (Excluding door to door).</td>
			<td class="tdcomment"><input id="comments487" size="60" type="text" /></td>
		</tr>
		<tr id="row488">
			<td id="number488">(488)</td>
			<td class="tdradios"><input id="standardA488" name="radio488" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI488" name="radio488" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard488">Describe the methods to detect and assess the extent of contamination.</td>
			<td class="tdcomment"><input id="comments488" size="60" type="text" /></td>
		</tr>
		<tr id="row489">
			<td id="number489">(489)</td>
			<td class="tdradios"><input id="standardA489" name="radio489" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI489" name="radio489" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard489">Describe methods for determining the occurrence of a hazmat release, and the area or population likely to be affected by such release.</td>
			<td class="tdcomment"><input id="comments489" size="60" type="text" /></td>
		</tr>
		<tr id="row490">
			<td id="number490">(490)</td>
			<td class="tdradios"><input id="standardA490" name="radio490" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI490" name="radio490" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard490">Describe the methods to stabilize a release and prevent the spread of contamination and determining decontamination methods.</td>
			<td class="tdcomment"><input id="comments490" size="60" type="text" /></td>
		</tr>
		<tr id="row491">
			<td id="number491">(491)</td>
			<td class="tdradios"><input id="standardA491" name="radio491" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI491" name="radio491" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard491">Describe the decision-making process for determining cleanup methods.</td>
			<td class="tdcomment"><input id="comments491" size="60" type="text" /></td>
		</tr>
		<tr id="row492">
			<td id="number492">(492)</td>
			<td class="tdradios"><input id="standardA492" name="radio492" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI492" name="radio492" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard492">Describe the options for environmental clean-up and waste disposition.</td>
			<td class="tdcomment"><input id="comments492" size="60" type="text" /></td>
		</tr>
		<tr id="row493">
			<td id="number493">(493)</td>
			<td class="tdradios"><input id="standardA493" name="radio493" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI493" name="radio493" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard493">Describe the process to implement environmental cleanup; storage, treatment, and disposal of oil and hazardous materials.</td>
			<td class="tdcomment"><input id="comments493" size="60" type="text" /></td>
		</tr>
		<tr id="row494">
			<td id="number494">(494)</td>
			<td class="tdradios"><input id="standardA494" name="radio494" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI494" name="radio494" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard494">Identify radiological response training requirements and identify sources of training.</td>
			<td class="tdcomment"><input id="comments494" size="60" type="text" /></td>
		</tr>
		<tr id="row495">
			<td id="number495">(495)</td>
			<td class="tdradios"><input id="standardA495" name="radio495" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI495" name="radio495" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard495">Describe how the public will be warned and how information will be communicated to them in a timely manner.</td>
			<td class="tdcomment"><input id="comments495" size="60" type="text" /></td>
		</tr>
		<tr id="row496">
			<td id="number496">(496)</td>
			<td class="tdradios"><input id="standardA496" name="radio496" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI496" name="radio496" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard496">Describe the process to accept recommendations from the State EOC and define specific areas in the county to be relocated, including the coordination with adjacent affected counties to match relocation lines.</td>
			<td class="tdcomment"><input id="comments496" size="60" type="text" /></td>
		</tr>
		<tr id="row497">
			<td id="number497">(497)</td>
			<td class="tdradios"><input id="standardA497" name="radio497" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI497" name="radio497" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard497">Describe the process to relocate people from contaminated areas to avoid chronic radiation exposure.</td>
			<td class="tdcomment"><input id="comments497" size="60" type="text" /></td>
		</tr>
		<tr id="row498">
			<td id="number498">(498)</td>
			<td class="tdradios"><input id="standardA498" name="radio498" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI498" name="radio498" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard498">Describe the decision-making process in approving re-entry into the restricted zone through an established access control point.</td>
			<td class="tdcomment"><input id="comments498" size="60" type="text" /></td>
		</tr>
		<tr id="row499">
			<td id="number499">(499)</td>
			<td class="tdradios"><input id="standardA499" name="radio499" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI499" name="radio499" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard499">Describe how food control and agricultural embargo decisions will be implemented.</td>
			<td class="tdcomment"><input id="comments499" size="60" type="text" /></td>
		</tr>
		<tr id="row500">
			<td id="number500">(500)</td>
			<td class="tdradios"><input id="standardA500" name="radio500" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI500" name="radio500" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard500">Identify provisions for relaxing the protective measures that have been implemented.</td>
			<td class="tdcomment"><input id="comments500" size="60" type="text" /></td>
		</tr>
		<tr id="row501">
			<td id="number501">(501)</td>
			<td class="tdradios"><input id="standardA501" name="radio501" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI501" name="radio501" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard501">List agency/organization responsibilities to support ESF 10 activities.</td>
			<td class="tdcomment"><input id="comments501" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>


<!--ESF 11-->
<div id="tabs-12">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standards</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row502">
			<td id="number502">(502)</td>
			<td class="tdradios"><input id="standardA502" name="radio502" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI502" name="radio502" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard502">Describe the reason for the development of this annex.</td>
			<td class="tdcomment"><input id="comments502" size="60" type="text" /></td>
		</tr>
		<tr id="row503">
			<td id="number503">(503)</td>
			<td class="tdradios"><input id="standardA503" name="radio503" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI503" name="radio503" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard503">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments503" size="60" type="text" /></td>
		</tr>
		<tr id="row504">
			<td id="number504">(504)</td>
			<td class="tdradios"><input id="standardA504" name="radio504" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI504" name="radio504" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard504">List county specific policies regarding ESF 11.</td>
			<td class="tdcomment"><input id="comments504" size="60" type="text" /></td>
		</tr>
		<tr id="row505">
			<td id="number505">(505)</td>
			<td class="tdradios"><input id="standardA505" name="radio505" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI505" name="radio505" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard505">List state policies or authorities regarding ESF 11.</td>
			<td class="tdcomment"><input id="comments505" size="60" type="text" /></td>
		</tr>
		<tr id="row506">
			<td id="number506">(506)</td>
			<td class="tdradios"><input id="standardA506" name="radio506" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI506" name="radio506" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard506">List federal authorities regarding ESF 11.</td>
			<td class="tdcomment"><input id="comments506" size="60" type="text" /></td>
		</tr>
		<tr id="row507">
			<td id="number507">(507)</td>
			<td class="tdradios"><input id="standardA507" name="radio507" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI507" name="radio507" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard507">Describe how agriculture and natural resource efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments507" size="60" type="text" /></td>
		</tr>
		<tr id="row508">
			<td id="number508">(508)</td>
			<td class="tdradios"><input id="standardA508" name="radio508" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI508" name="radio508" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard508">Identify agency responsible for liaison roles with the state and adjacent county agriculture and natural resources officials.</td>
			<td class="tdcomment"><input id="comments508" size="60" type="text" /></td>
		</tr>
		<tr id="row509">
			<td id="number509">(509)</td>
			<td class="tdradios"><input id="standardA509" name="radio509" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI509" name="radio509" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard509">Identify agency responsible for managing the collection, processing, and disseminating of information to and from the EOC.</td>
			<td class="tdcomment"><input id="comments509" size="60" type="text" /></td>
		</tr>
		<tr id="row510">
			<td id="number510">(510)</td>
			<td class="tdradios"><input id="standardA510" name="radio510" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI510" name="radio510" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard510">Identify agency responsible for providing initial notification for ESF 11.</td>
			<td class="tdcomment"><input id="comments510" size="60" type="text" /></td>
		</tr>
		<tr id="row511">
			<td id="number511">(511)</td>
			<td class="tdradios"><input id="standardA511" name="radio511" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI511" name="radio511" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard511">Identify agency responsible for conducting inspections of food and water.</td>
			<td class="tdcomment"><input id="comments511" size="60" type="text" /></td>
		</tr>
		<tr id="row512">
			<td id="number512">(512)</td>
			<td class="tdradios"><input id="standardA512" name="radio512" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI512" name="radio512" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard512">Describe the process used to determine nutritional assistance needs, obtain appropriate food supplies, and arrange for delivery of these supplies.</td>
			<td class="tdcomment"><input id="comments512" size="60" type="text" /></td>
		</tr>
		<tr id="row513">
			<td id="number513">(513)</td>
			<td class="tdradios"><input id="standardA513" name="radio513" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI513" name="radio513" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard513">Describe the methods to ensure the safety and security of the food supply.</td>
			<td class="tdcomment"><input id="comments513" size="60" type="text" /></td>
		</tr>
		<tr id="row514">
			<td id="number514">(514)</td>
			<td class="tdradios"><input id="standardA514" name="radio514" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI514" name="radio514" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard514">Describe how ESF 11 will coordinate with ESF 6 for long-term care for domestic homeless pets.</td>
			<td class="tdcomment"><input id="comments514" size="60" type="text" /></td>
		</tr>
		<tr id="row515">
			<td id="number515">(515)</td>
			<td class="tdradios"><input id="standardA515" name="radio515" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI515" name="radio515" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard515">Describe the organization that will carry out the animal health function during emergency situations.</td>
			<td class="tdcomment"><input id="comments515" size="60" type="text" /></td>
		</tr>
		<tr id="row516">
			<td id="number516">(516)</td>
			<td class="tdradios"><input id="standardA516" name="radio516" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI516" name="radio516" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard516">Identify agency responsible in capturing and transporting animals in coordination with ESF 6.</td>
			<td class="tdcomment"><input id="comments516" size="60" type="text" /></td>
		</tr>
		<tr id="row517">
			<td id="number517">(517)</td>
			<td class="tdradios"><input id="standardA517" name="radio517" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI517" name="radio517" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard517">Describe how ESF 11 operates during Zoonotic disease outbreak.</td>
			<td class="tdcomment"><input id="comments517" size="60" type="text" /></td>
		</tr>
		<tr id="row518">
			<td id="number518">(518)</td>
			<td class="tdradios"><input id="standardA518" name="radio518" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI518" name="radio518" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard518">Describe how ESF 11 operates during a Plant disease outbreak.</td>
			<td class="tdcomment"><input id="comments518" size="60" type="text" /></td>
		</tr>
		<tr id="row519">
			<td id="number519">(519)</td>
			<td class="tdradios"><input id="standardA519" name="radio519" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI519" name="radio519" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard519">Describe how ESF 11 operates during Pest disease outbreak.</td>
			<td class="tdcomment"><input id="comments519" size="60" type="text" /></td>
		</tr>
		<tr id="row520">
			<td id="number520">(520)</td>
			<td class="tdradios"><input id="standardA520" name="radio520" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI520" name="radio520" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard520">Describe how ESF 11 operates during Food and Water supply contamination.</td>
			<td class="tdcomment"><input id="comments520" size="60" type="text" /></td>
		</tr>
		<tr id="row521">
			<td id="number521">(521)</td>
			<td class="tdradios"><input id="standardA521" name="radio521" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI521" name="radio521" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard521">Describe how ESF 11 operates during a Radiological accident where contamination/deposition is present.</td>
			<td class="tdcomment"><input id="comments521" size="60" type="text" /></td>
		</tr>
		<tr id="row522">
			<td id="number522">(522)</td>
			<td class="tdradios"><input id="standardA522" name="radio522" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI522" name="radio522" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard522">Describe the actions to preserve, conserve, rehabilitate, recover, and restore natural and cultural resources and historic properties.</td>
			<td class="tdcomment"><input id="comments522" size="60" type="text" /></td>
		</tr>
		<tr id="row523">
			<td id="number523">(523)</td>
			<td class="tdradios"><input id="standardA523" name="radio523" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI523" name="radio523" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard523">List agency/organization responsibilities to support ESF 11 activities.</td>
			<td class="tdcomment"><input id="comments523" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>


<!--ESF 12-->
<div id="tabs-13">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standards</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row524">
			<td id="number524">(524)</td>
			<td class="tdradios"><input id="standardA524" name="radio524" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI524" name="radio524" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard524">Describe the reason for the development of this annex.</td>
			<td class="tdcomment"><input id="comments524" size="60" type="text" /></td>
		</tr>
		<tr id="row525">
			<td id="number525">(525)</td>
			<td class="tdradios"><input id="standardA525" name="radio525" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI525" name="radio525" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard525">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments525" size="60" type="text" /></td>
		</tr>
		<tr id="row526">
			<td id="number526">(526)</td>
			<td class="tdradios"><input id="standardA526" name="radio526" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI526" name="radio526" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard526">List county specific policies regarding ESF 12.</td>
			<td class="tdcomment"><input id="comments526" size="60" type="text" /></td>
		</tr>
		<tr id="row527">
			<td id="number527">(527)</td>
			<td class="tdradios"><input id="standardA527" name="radio527" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI527" name="radio527" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard527">List state policies or authorities regarding ESF 12.</td>
			<td class="tdcomment"><input id="comments527" size="60" type="text" /></td>
		</tr>
		<tr id="row528">
			<td id="number528">(528)</td>
			<td class="tdradios"><input id="standardA528" name="radio528" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI528" name="radio528" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard528">List federal authorities regarding ESF 12.</td>
			<td class="tdcomment"><input id="comments528" size="60" type="text" /></td>
		</tr>
		<tr id="row529">
			<td id="number529">(529)</td>
			<td class="tdradios"><input id="standardA529" name="radio529" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI529" name="radio529" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard529">Describe how energy and/or utilities efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments529" size="60" type="text" /></td>
		</tr>
		<tr id="row530">
			<td id="number530">(530)</td>
			<td class="tdradios"><input id="standardA530" name="radio530" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI530" name="radio530" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard530">Identify agency responsible for liaison roles with the state and adjacent county energy and/or utilities officials.</td>
			<td class="tdcomment"><input id="comments530" size="60" type="text" /></td>
		</tr>
		<tr id="row531">
			<td id="number531">(531)</td>
			<td class="tdradios"><input id="standardA531" name="radio531" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI531" name="radio531" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard531">Identify agency responsible for managing the collection, processing, and disseminating of information to and from the EOC.</td>
			<td class="tdcomment"><input id="comments531" size="60" type="text" /></td>
		</tr>
		<tr id="row532">
			<td id="number532">(532)</td>
			<td class="tdradios"><input id="standardA532" name="radio532" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI532" name="radio532" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard532">Identify agency responsible for providing initial notification for ESF 12.</td>
			<td class="tdcomment"><input id="comments532" size="60" type="text" /></td>
		</tr>
		<tr id="row533">
			<td id="number533">(533)</td>
			<td class="tdradios"><input id="standardA533" name="radio533" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI533" name="radio533" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard533">Identify utility providers serving the county to include water, gas, and electric utilities.</td>
			<td class="tdcomment"><input id="comments533" size="60" type="text" /></td>
		</tr>
		<tr id="row534">
			<td id="number534">(534)</td>
			<td class="tdradios"><input id="standardA534" name="radio534" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI534" name="radio534" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard534">Describe how damage to utility systems outside the county impacts services within the county boundaries.</td>
			<td class="tdcomment"><input id="comments534" size="60" type="text" /></td>
		</tr>
		<tr id="row535">
			<td id="number535">(535)</td>
			<td class="tdradios"><input id="standardA535" name="radio535" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI535" name="radio535" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard535">Describe the process to deal with major utility outages that threaten public health and safety.</td>
			<td class="tdcomment"><input id="comments535" size="60" type="text" /></td>
		</tr>
		<tr id="row536">
			<td id="number536">(536)</td>
			<td class="tdradios"><input id="standardA536" name="radio536" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI536" name="radio536" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard536">Identify the coordination between utility service provider(s) and ESF 13 restoration issues.</td>
			<td class="tdcomment"><input id="comments536" size="60" type="text" /></td>
		</tr>
		<tr id="row537">
			<td id="number537">(537)</td>
			<td class="tdradios"><input id="standardA537" name="radio537" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI537" name="radio537" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard537">Identify the process to repair and restore energy and/or utilities infrastructure.</td>
			<td class="tdcomment"><input id="comments537" size="60" type="text" /></td>
		</tr>
		<tr id="row538">
			<td id="number538">(538)</td>
			<td class="tdradios"><input id="standardA538" name="radio538" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI538" name="radio538" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard538">List agency/organization responsibilities to support ESF 12 activities.</td>
			<td class="tdcomment"><input id="comments538" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>


<!--ESF 13-->
<div id="tabs-14">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standards</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row539">
			<td id="number539">(539)</td>
			<td class="tdradios"><input id="standardA539" name="radio539" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI539" name="radio539" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard539">Describe the reason for the development of this annex.</td>
			<td class="tdcomment"><input id="comments539" size="60" type="text" /></td>
		</tr>
		<tr id="row540">
			<td id="number540">(540)</td>
			<td class="tdradios"><input id="standardA540" name="radio540" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI540" name="radio540" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard540">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments540" size="60" type="text" /></td>
		</tr>
		<tr id="row541">
			<td id="number541">(541)</td>
			<td class="tdradios"><input id="standardA541" name="radio541" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI541" name="radio541" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard541">List county specific policies regarding ESF 13.</td>
			<td class="tdcomment"><input id="comments541" size="60" type="text" /></td>
		</tr>
		<tr id="row542">
			<td id="number542">(542)</td>
			<td class="tdradios"><input id="standardA542" name="radio542" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI542" name="radio542" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard542">List state policies or authorities regarding ESF 13.</td>
			<td class="tdcomment"><input id="comments542" size="60" type="text" /></td>
		</tr>
		<tr id="row543">
			<td id="number543">(543)</td>
			<td class="tdradios"><input id="standardA543" name="radio543" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI543" name="radio543" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard543">List federal authorities regarding ESF 13.</td>
			<td class="tdcomment"><input id="comments543" size="60" type="text" /></td>
		</tr>
		<tr id="row544">
			<td id="number544">(544)</td>
			<td class="tdradios"><input id="standardA544" name="radio544" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI544" name="radio544" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard544">Describe how public safety and security efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments544" size="60" type="text" /></td>
		</tr>
		<tr id="row545">
			<td id="number545">(545)</td>
			<td class="tdradios"><input id="standardA545" name="radio545" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI545" name="radio545" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard545">Identify agency responsible for liaison roles with the state and adjacent county public safety and security officials.</td>
			<td class="tdcomment"><input id="comments545" size="60" type="text" /></td>
		</tr>
		<tr id="row546">
			<td id="number546">(546)</td>
			<td class="tdradios"><input id="standardA546" name="radio546" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI546" name="radio546" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard546">Identify agency responsible for managing the collection, processing, and disseminating of information to and from the EOC.</td>
			<td class="tdcomment"><input id="comments546" size="60" type="text" /></td>
		</tr>
		<tr id="row547">
			<td id="number547">(547)</td>
			<td class="tdradios"><input id="standardA547" name="radio547" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI547" name="radio547" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard547">Identify agency responsible for providing initial notification for ESF 13.</td>
			<td class="tdcomment"><input id="comments547" size="60" type="text" /></td>
		</tr>
		<tr id="row548">
			<td id="number548">(548)</td>
			<td class="tdradios"><input id="standardA548" name="radio548" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI548" name="radio548" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard548">Describe the coverage by public safety and security organizations in your jurisdictions.</td>
			<td class="tdcomment"><input id="comments548" size="60" type="text" /></td>
		</tr>
		<tr id="row549">
			<td id="number549">(549)</td>
			<td class="tdradios"><input id="standardA549" name="radio549" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI549" name="radio549" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard549">Describe specialized law enforcement capabilities existing within the county.</td>
			<td class="tdcomment"><input id="comments549" size="60" type="text" /></td>
		</tr>
		<tr id="row550">
			<td id="number550">(550)</td>
			<td class="tdradios"><input id="standardA550" name="radio550" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI550" name="radio550" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard550">Describe protocol to request outside law enforcement resources when local agencies are overwhelmed.</td>
			<td class="tdcomment"><input id="comments550" size="60" type="text" /></td>
		</tr>
		<tr id="row551">
			<td id="number551">(551)</td>
			<td class="tdradios"><input id="standardA551" name="radio551" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI551" name="radio551" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard551">Describe criteria for securing area and note any specific considerations based on specific hazards (i.e. natural hazard, hazardous materials, terrorism, mass casualties, foreign animal disease, etc.).</td>
			<td class="tdcomment"><input id="comments551" size="60" type="text" /></td>
		</tr>
		<tr id="row552">
			<td id="number552">(552)</td>
			<td class="tdradios"><input id="standardA552" name="radio552" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI552" name="radio552" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard552">Outline requirements for providing protection to Emergency Operation Center.</td>
			<td class="tdcomment"><input id="comments552" size="60" type="text" /></td>
		</tr>
		<tr id="row553">
			<td id="number553">(553)</td>
			<td class="tdradios"><input id="standardA553" name="radio553" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI553" name="radio553" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard553">Outline requirements for providing protection to Field Command Posts.</td>
			<td class="tdcomment"><input id="comments553" size="60" type="text" /></td>
		</tr>
		<tr id="row554">
			<td id="number554">(554)</td>
			<td class="tdradios"><input id="standardA554" name="radio554" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI554" name="radio554" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard554">Outline requirements for providing protection to Staging Area(s).</td>
			<td class="tdcomment"><input id="comments554" size="60" type="text" /></td>
		</tr>
		<tr id="row555">
			<td id="number555">(555)</td>
			<td class="tdradios"><input id="standardA555" name="radio555" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI555" name="radio555" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard555">Outline requirements for providing protection to Established and Temporary morgues.</td>
			<td class="tdcomment"><input id="comments555" size="60" type="text" /></td>
		</tr>
		<tr id="row556">
			<td id="number556">(556)</td>
			<td class="tdradios"><input id="standardA556" name="radio556" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI556" name="radio556" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard556">Outline requirements for providing protection to Hospitals/emergency centers.</td>
			<td class="tdcomment"><input id="comments556" size="60" type="text" /></td>
		</tr>
		<tr id="row557">
			<td id="number557">(557)</td>
			<td class="tdradios"><input id="standardA557" name="radio557" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI557" name="radio557" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard557">Outline requirements for providing protection to Correctional Facilities.</td>
			<td class="tdcomment"><input id="comments557" size="60" type="text" /></td>
		</tr>
		<tr id="row558">
			<td id="number558">(558)</td>
			<td class="tdradios"><input id="standardA558" name="radio558" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI558" name="radio558" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard558">List agency/organization responsibilities to support ESF 13 activities.</td>
			<td class="tdcomment"><input id="comments558" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>


<!--ESF 14-->
<div id="tabs-15">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standards</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row559">
			<td id="number559">(559)</td>
			<td class="tdradios"><input id="standardA559" name="radio559" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI559" name="radio559" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard559">Describe the reason for the development of this annex.</td>
			<td class="tdcomment"><input id="comments559" size="60" type="text" /></td>
		</tr>
		<tr id="row560">
			<td id="number560">(560)</td>
			<td class="tdradios"><input id="standardA560" name="radio560" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI560" name="radio560" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard560">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments560" size="60" type="text" /></td>
		</tr>
		<tr id="row561">
			<td id="number561">(561)</td>
			<td class="tdradios"><input id="standardA561" name="radio561" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI561" name="radio561" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard561">List county specific policies regarding ESF 14.</td>
			<td class="tdcomment"><input id="comments561" size="60" type="text" /></td>
		</tr>
		<tr id="row562">
			<td id="number562">(562)</td>
			<td class="tdradios"><input id="standardA562" name="radio562" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI562" name="radio562" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard562">List state policies or authorities regarding ESF 14.</td>
			<td class="tdcomment"><input id="comments562" size="60" type="text" /></td>
		</tr>
		<tr id="row563">
			<td id="number563">(563)</td>
			<td class="tdradios"><input id="standardA563" name="radio563" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI563" name="radio563" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard563">List federal authorities regarding ESF 14.</td>
			<td class="tdcomment"><input id="comments563" size="60" type="text" /></td>
		</tr>
		<tr id="row564">
			<td id="number564">(564)</td>
			<td class="tdradios"><input id="standardA564" name="radio564" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI564" name="radio564" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard564">Describe how long-term community recovery efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments564" size="60" type="text" /></td>
		</tr>
		<tr id="row565">
			<td id="number565">(565)</td>
			<td class="tdradios"><input id="standardA565" name="radio565" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI565" name="radio565" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard565">Identify agency responsible for liaison roles with the state and adjacent county long-term recovery efforts.</td>
			<td class="tdcomment"><input id="comments565" size="60" type="text" /></td>
		</tr>
		<tr id="row566">
			<td id="number566">(566)</td>
			<td class="tdradios"><input id="standardA566" name="radio566" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI566" name="radio566" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard566">Identify agency responsible for managing the collection, processing, and disseminating of information to and from the EOC.</td>
			<td class="tdcomment"><input id="comments566" size="60" type="text" /></td>
		</tr>
		<tr id="row567">
			<td id="number567">(567)</td>
			<td class="tdradios"><input id="standardA567" name="radio567" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI567" name="radio567" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard567">Identify agency responsible for providing initial notification for ESF 14.</td>
			<td class="tdcomment"><input id="comments567" size="60" type="text" /></td>
		</tr>
		<tr id="row568">
			<td id="number568">(568)</td>
			<td class="tdradios"><input id="standardA568" name="radio568" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI568" name="radio568" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard568">Identify agencies or organizations of the rapid impact assessment team.</td>
			<td class="tdcomment"><input id="comments568" size="60" type="text" /></td>
		</tr>
		<tr id="row569">
			<td id="number569">(569)</td>
			<td class="tdradios"><input id="standardA569" name="radio569" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI569" name="radio569" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard569">Describe rapid impact assessment criteria and reporting protocol.</td>
			<td class="tdcomment"><input id="comments569" size="60" type="text" /></td>
		</tr>
		<tr id="row570">
			<td id="number570">(570)</td>
			<td class="tdradios"><input id="standardA570" name="radio570" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI570" name="radio570" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard570">Describe the methods of identifying long-term environmental restoration issues.</td>
			<td class="tdcomment"><input id="comments570" size="60" type="text" /></td>
		</tr>
		<tr id="row571">
			<td id="number571">(571)</td>
			<td class="tdradios"><input id="standardA571" name="radio571" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI571" name="radio571" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard571">Identify the agency responsible, trained, and equipped for conducting a chemical or radiological assessment of a containment structure.</td>
			<td class="tdcomment"><input id="comments571" size="60" type="text" /></td>
		</tr>
		<tr id="row572">
			<td id="number572">(572)</td>
			<td class="tdradios"><input id="standardA572" name="radio572" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI572" name="radio572" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard572">Identify the agency responsible in assessing contamination of water, air, food, and radiological ingestion.</td>
			<td class="tdcomment"><input id="comments572" size="60" type="text" /></td>
		</tr>
		<tr id="row573">
			<td id="number573">(573)</td>
			<td class="tdradios"><input id="standardA573" name="radio573" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI573" name="radio573" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard573">Identify the agency responsible for conducting environment assessment for a biological event.</td>
			<td class="tdcomment"><input id="comments573" size="60" type="text" /></td>
		</tr>
		<tr id="row574">
			<td id="number574">(574)</td>
			<td class="tdradios"><input id="standardA574" name="radio574" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI574" name="radio574" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard574">Describe the process to coordinate with housing authorities and ESF 6 for short/long term recovery efforts.</td>
			<td class="tdcomment"><input id="comments574" size="60" type="text" /></td>
		</tr>
		<tr id="row575">
			<td id="number575">(575)</td>
			<td class="tdradios"><input id="standardA575" name="radio575" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI575" name="radio575" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard575">Describe the methods of identifying long-term recovery needs of special needs populations and incorporating these needs into recovery strategies.</td>
			<td class="tdcomment"><input id="comments575" size="60" type="text" /></td>
		</tr>
		<tr id="row576">
			<td id="number576">(576)</td>
			<td class="tdradios"><input id="standardA576" name="radio576" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI576" name="radio576" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard576">Describe the method of coordination with animal welfare and agricultural stakeholders and service providers in long-term community recovery efforts.</td>
			<td class="tdcomment"><input id="comments576" size="60" type="text" /></td>
		</tr>
		<tr id="row577">
			<td id="number577">(577)</td>
			<td class="tdradios"><input id="standardA577" name="radio577" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI577" name="radio577" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard577">Describe coordination with ESF-6 and 8 regarding behavior/mental health assistance.</td>
			<td class="tdcomment"><input id="comments577" size="60" type="text" /></td>
		</tr>
		<tr id="row578">
			<td id="number578">(578)</td>
			<td class="tdradios"><input id="standardA578" name="radio578" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI578" name="radio578" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard578">List agency/organization responsibilities to support ESF 14 activities.</td>
			<td class="tdcomment"><input id="comments578" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>


<!--ESF 15-->
<div id="tabs-16">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standards</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row579">
			<td id="number579">(579)</td>
			<td class="tdradios"><input id="standardA579" name="radio579" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI579" name="radio579" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard579">Describe the reason for the development of this annex.</td>
			<td class="tdcomment"><input id="comments579" size="60" type="text" /></td>
		</tr>
		<tr id="row580">
			<td id="number580">(580)</td>
			<td class="tdradios"><input id="standardA580" name="radio580" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI580" name="radio580" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard580">Identify what the annex contains.</td>
			<td class="tdcomment"><input id="comments580" size="60" type="text" /></td>
		</tr>
		<tr id="row581">
			<td id="number581">(581)</td>
			<td class="tdradios"><input id="standardA581" name="radio581" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI581" name="radio581" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard581">List county specific policies regarding ESF 15.</td>
			<td class="tdcomment"><input id="comments581" size="60" type="text" /></td>
		</tr>
		<tr id="row582">
			<td id="number582">(582)</td>
			<td class="tdradios"><input id="standardA582" name="radio582" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI582" name="radio582" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard582">List state policies or authorities regarding ESF 15.</td>
			<td class="tdcomment"><input id="comments582" size="60" type="text" /></td>
		</tr>
		<tr id="row583">
			<td id="number583">(583)</td>
			<td class="tdradios"><input id="standardA583" name="radio583" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI583" name="radio583" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard583">List federal authorities regarding ESF 15.</td>
			<td class="tdcomment"><input id="comments583" size="60" type="text" /></td>
		</tr>
		<tr id="row584">
			<td id="number584">(584)</td>
			<td class="tdradios"><input id="standardA584" name="radio584" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI584" name="radio584" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard584">Describe how external affairs/emergency public information efforts in support of emergency operations will be directed and controlled.</td>
			<td class="tdcomment"><input id="comments584" size="60" type="text" /></td>
		</tr>
		<tr id="row585">
			<td id="number585">(585)</td>
			<td class="tdradios"><input id="standardA585" name="radio585" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI585" name="radio585" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard585">Identify agency responsible for liaison roles with the state and adjacent county external affairs/ emergency public information officials.</td>
			<td class="tdcomment"><input id="comments585" size="60" type="text" /></td>
		</tr>
		<tr id="row586">
			<td id="number586">(586)</td>
			<td class="tdradios"><input id="standardA586" name="radio586" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI586" name="radio586" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard586">Identify agency responsible for managing the collection, processing, and disseminating of information to and from the EOC.</td>
			<td class="tdcomment"><input id="comments586" size="60" type="text" /></td>
		</tr>
		<tr id="row587">
			<td id="number587">(587)</td>
			<td class="tdradios"><input id="standardA587" name="radio587" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI587" name="radio587" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard587">Identify agency responsible for providing initial notification for ESF 15.</td>
			<td class="tdcomment"><input id="comments587" size="60" type="text" /></td>
		</tr>
		<tr id="row588">
			<td id="number588">(588)</td>
			<td class="tdradios"><input id="standardA588" name="radio588" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI588" name="radio588" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard588">Describe the role of a public information officer and the actions this person will take to coordinate public information releases to include: Setting up a Joint Information Center, Working with media at the scene, Coordinating information among agencies, Coordinating information among elected and appointed officials.</td>
			<td class="tdcomment"><input id="comments588" size="60" type="text" /></td>
		</tr>
		<tr id="row589">
			<td id="number589">(589)</td>
			<td class="tdradios"><input id="standardA589" name="radio589" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI589" name="radio589" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard589">Identify and describe the actions that will be taken to provide continuous and accessible public information about the disaster (e.g., media briefings, press releases, EAS, text messages, door-to-door warnings, websites, and social media sites.</td>
			<td class="tdcomment"><input id="comments589" size="60" type="text" /></td>
		</tr>
		<tr id="row590">
			<td id="number590">(590)</td>
			<td class="tdradios"><input id="standardA590" name="radio590" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI590" name="radio590" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard590">Identify the process to verify information&#39;s accuracy before release to the public.</td>
			<td class="tdcomment"><input id="comments590" size="60" type="text" /></td>
		</tr>
		<tr id="row591">
			<td id="number591">(591)</td>
			<td class="tdradios"><input id="standardA591" name="radio591" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI591" name="radio591" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard591">Identify and describe plans, programs, and systems used to control rumors by correcting misinformation rapidly (e.g., providing corrections in news conferences, releases, web/social media, phone calls to media, etc.).</td>
			<td class="tdcomment"><input id="comments591" size="60" type="text" /></td>
		</tr>
		<tr id="row592">
			<td id="number592">(592)</td>
			<td class="tdradios"><input id="standardA592" name="radio592" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI592" name="radio592" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard592">Describe how responders/local officials will use media outlets and will work with the media during an emergency (e.g., scheduled press briefings; establish media centers on-scene; control access to the scene, responders, and victims..</td>
			<td class="tdcomment"><input id="comments592" size="60" type="text" /></td>
		</tr>
		<tr id="row593">
			<td id="number593">(593)</td>
			<td class="tdradios"><input id="standardA593" name="radio593" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI593" name="radio593" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard593">Identify and describe the actions that will be taken to inform individuals with sensory, intellectual, or cognitive disabilities, individuals with limited English proficiency, and others with access and functional needs.</td>
			<td class="tdcomment"><input id="comments593" size="60" type="text" /></td>
		</tr>
		<tr id="row594">
			<td id="number594">(594)</td>
			<td class="tdradios"><input id="standardA594" name="radio594" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI594" name="radio594" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard594">Identify prepared public instructions for identified hazards, including materials for managers of congregate care facilities, such as childcare centers, group homes, assisted living centers, and nursing homes.</td>
			<td class="tdcomment"><input id="comments594" size="60" type="text" /></td>
		</tr>
		<tr id="row595">
			<td id="number595">(595)</td>
			<td class="tdradios"><input id="standardA595" name="radio595" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI595" name="radio595" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard595">List agency/organization responsibilities to support ESF 15 activities.</td>
			<td class="tdcomment"><input id="comments595" size="60" type="text" /></td>
		</tr>
	</tbody>
</table>
</div>


<!--Required Attachments, Separated by ESF-->
<div id="tabs-17">
<table style="width:100%">
	<tbody>
		<tr>
			<th scope="row" style="text-align: center;"><span style="font-size:18px;"><strong>Number</strong></span></th>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Accepted</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Incomplete</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Standards</strong></span></td>
			<td style="text-align: center;"><span style="font-size:18px;"><strong>Comments:</strong></span></td>
		</tr>
		<tr id="row596">
			<td id="number596">(1-1)</td>
			<td class="tdradios"><input id="standardA596" name="radio596" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI596" name="radio596" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard596">P rovide a map of Likely Evacuation Routes from fixed facilities.</td>
			<td class="tdcomment"><input id="comments596" size="60" type="text" /></td>
		</tr>
		<tr>
		</tr>
		<tr id="row597">
			<td id="number597">(1-2)</td>
			<td class="tdradios"><input id="standardA597" name="radio597" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI597" name="radio597" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard597">Provide a Distric Managers Map.</td>
			<td class="tdcomment"><input id="comments597" size="60" type="text" /></td>
		</tr>
		<tr>
		</tr>
		<tr id="row598">
			<td id="number598">(1-3)</td>
			<td class="tdradios"><input id="standardA598" name="radio598" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI598" name="radio598" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard598">Provide a list of transportation reources of Services/Contractors.</td>
			<td class="tdcomment"><input id="comments598" size="60" type="text" /></td>
		</tr>
		<tr>
		</tr>
		<tr id="row599">
			<td id="number599">(1-4)</td>
			<td class="tdradios"><input id="standardA599" name="radio599" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI599" name="radio599" type="radio" /></td>
			<td class="tdstandard" id="standard599">Provide a list of necessary transportation contacts.</td>
			<td class="tdcomment"><input id="comments599" size="60" type="text" /></td>
		</tr>
		<tr>
		</tr>
		<tr id="row600">
			<td id="number600">(2-1)</td>
			<td class="tdradios"><input id="standardA600" name="radio600" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI600" name="radio600" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard600">Provide a matrix of the interoperable communications plan and compatible frequencies used by agencies during a response (e.g., who can talk to whom, including contiguous jurisdictions and private agencies).</td>
			<td class="tdcomment"><input id="comments600" size="60" type="text" /></td>
		</tr>
		<tr>
		</tr>
		<tr id="row601">
			<td id="number601">(2-2)</td>
			<td class="tdradios"><input id="standardA601" name="radio601" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI601" name="radio601" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard601">Provide a map of Known Cell Coverage and Dead areas (Based on Carrier).</td>
			<td class="tdcomment"><input id="comments601" size="60" type="text" /></td>
		</tr>
		<tr>
		</tr>
		<tr id="row602">
			<td id="number602">(2-3)</td>
			<td class="tdradios"><input id="standardA602" name="radio602" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI602" name="radio602" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard602">Provide a map of Radio Coverage and Dead Areas.</td>
			<td class="tdcomment"><input id="comments602" size="60" type="text" /></td>
		</tr>
		<tr>
		</tr>
		<tr id="row603">
			<td id="number603">(2-4)</td>
			<td class="tdradios"><input id="standardA603" name="radio603" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI603" name="radio603" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard603">Provide a map of Repeater Locations and Coverage.</td>
			<td class="tdcomment"><input id="comments603" size="60" type="text" /></td>
		</tr>
		<tr>
		</tr>
		<tr id="row604">
			<td id="number604">(2-5)</td>
			<td class="tdradios"><input id="standardA604" name="radio604" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI604" name="radio604" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard604">Provide a map of Radio Towers/Antennas Location and Coverage.</td>
			<td class="tdcomment"><input id="comments604" size="60" type="text" /></td>
		</tr>
		<tr>
		</tr>
		<tr id="row605">
			<td id="number605">(2-6)</td>
			<td class="tdradios"><input id="standardA605" name="radio605" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI605" name="radio605" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard605">Provide a list of communications resources for Equipment.</td>
			<td class="tdcomment"><input id="comments605" size="60" type="text" /></td>
		</tr>
		<tr>
		</tr>
		<tr id="row606">
			<td id="number606">(2-7)</td>
			<td class="tdradios"><input id="standardA606" name="radio606" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI606" name="radio606" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard606">Provide a list of communications resources for Personnel.</td>
			<td class="tdcomment"><input id="comments606" size="60" type="text" /></td>
		</tr>
		<tr>
		</tr>
		<tr id="row607">
			<td id="number607">(2-8)</td>
			<td class="tdradios"><input id="standardA607" name="radio607" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI607" name="radio607" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard607">Provide a list of communications resources for Services/Contractors.</td>
			<td class="tdcomment"><input id="comments607" size="60" type="text" /></td>
		</tr>
		<tr>
		</tr>
		<tr id="row608">
			<td id="number608">(2-9)</td>
			<td class="tdradios"><input id="standardA608" name="radio608" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI608" name="radio608" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard608">Provide a list of necessary communications contacts.</td>
			<td class="tdcomment"><input id="comments608" size="60" type="text" /></td>
		</tr>
		<tr>
		</tr>
		<tr id="row609">
			<td id="number609">(3-1)</td>
			<td class="tdradios"><input id="standardA609" name="radio609" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI609" name="radio609" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard609">Provide map and list to identify potential trash collection and temporary storage sites, including final landfill sites for specific waste categories. (e.g. vegetation, food, dead animals, hazardous and infectious wastes, construction debris, etc.).</td>
			<td class="tdcomment"><input id="comments609" size="60" type="text" /></td>
		</tr>
		<tr>
		</tr>
		<tr id="row610">
			<td id="number610">(3-2)</td>
			<td class="tdradios"><input id="standardA610" name="radio610" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI610" name="radio610" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard610">Provide a map of Landfills/Transfer Stations.</td>
			<td class="tdcomment"><input id="comments610" size="60" type="text" /></td>
		</tr>
		<tr id="row611">
			<td id="number611">(3-3)</td>
			<td class="tdradios"><input id="standardA611" name="radio611" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI611" name="radio611" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard611">Provide a map of Water Supply and Sewage Treatment.</td>
			<td class="tdcomment"><input id="comments611" size="60" type="text" /></td>
		</tr>
		<tr id="row612">
			<td id="number612">(3-4)</td>
			<td class="tdradios"><input id="standardA612" name="radio612" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI612" name="radio612" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard612">Provide a map of Water and Sewer Districts.</td>
			<td class="tdcomment"><input id="comments612" size="60" type="text" /></td>
		</tr>
		<tr id="row613">
			<td id="number613">(3-5)</td>
			<td class="tdradios"><input id="standardA613" name="radio613" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI613" name="radio613" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard613">Provide a map of Local Facilities (Road and Bridge, Public Works, Railyards, Shops).</td>
			<td class="tdcomment"><input id="comments613" size="60" type="text" /></td>
		</tr>
		<tr id="row614">
			<td id="number614">(3-6)</td>
			<td class="tdradios"><input id="standardA614" name="radio614" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI614" name="radio614" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard614">Provide a map of Community Critical Infrastructure in Floodplains.</td>
			<td class="tdcomment"><input id="comments614" size="60" type="text" /></td>
		</tr>
		<tr id="row615">
			<td id="number615">(3-7)</td>
			<td class="tdradios"><input id="standardA615" name="radio615" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI615" name="radio615" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard615">Provide a map of Floodplains.</td>
			<td class="tdcomment"><input id="comments615" size="60" type="text" /></td>
		</tr>
		<tr id="row616">
			<td id="number616">(3-8)</td>
			<td class="tdradios"><input id="standardA616" name="radio616" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI616" name="radio616" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard616">Provide a map of Identified Temporary Debris Management Sites.</td>
			<td class="tdcomment"><input id="comments616" size="60" type="text" /></td>
		</tr>
		<tr id="row617">
			<td id="number617">(3-9)</td>
			<td class="tdradios"><input id="standardA617" name="radio617" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI617" name="radio617" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard617">Provide a list of public works and engineering resources and contacts for Equipment.</td>
			<td class="tdcomment"><input id="comments617" size="60" type="text" /></td>
		</tr>
		<tr id="row618">
			<td id="number618">(3-10)</td>
			<td class="tdradios"><input id="standardA618" name="radio618" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI618" name="radio618" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard618">Provide a list of public works and engineering resources and contacts for Personnel.</td>
			<td class="tdcomment"><input id="comments618" size="60" type="text" /></td>
		</tr>
		<tr id="row619">
			<td id="number619">(3-11)</td>
			<td class="tdradios"><input id="standardA619" name="radio619" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI619" name="radio619" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard619">Provide a list of public works and engineering resources and contacts for Services/contracts.</td>
			<td class="tdcomment"><input id="comments619" size="60" type="text" /></td>
		</tr>
		<tr id="row620">
			<td id="number620">(3-12)</td>
			<td class="tdradios"><input id="standardA620" name="radio620" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI620" name="radio620" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard620">Provide a list of necessary public works and engineering contacts.</td>
			<td class="tdcomment"><input id="comments620" size="60" type="text" /></td>
		</tr>
		<tr id="row621">
			<td id="number621">(4-1)</td>
			<td class="tdradios"><input id="standardA621" name="radio621" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI621" name="radio621" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard621">Provide a map of Dip Sites.</td>
			<td class="tdcomment"><input id="comments621" size="60" type="text" /></td>
		</tr>
		<tr id="row622">
			<td id="number622">(4-2)</td>
			<td class="tdradios"><input id="standardA622" name="radio622" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI622" name="radio622" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard622">Provide a map of Equipment Staging Areas.</td>
			<td class="tdcomment"><input id="comments622" size="60" type="text" /></td>
		</tr>
		<tr id="row623">
			<td id="number623">(4-3)</td>
			<td class="tdradios"><input id="standardA623" name="radio623" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI623" name="radio623" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard623">Provide a list and contact for firefighting resources for Equipment.</td>
			<td class="tdcomment"><input id="comments623" size="60" type="text" /></td>
		</tr>
		<tr id="row624">
			<td id="number624">(4-4)</td>
			<td class="tdradios"><input id="standardA624" name="radio624" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI624" name="radio624" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard624">Provide a list and contact for firefighting resources for Personnel.</td>
			<td class="tdcomment"><input id="comments624" size="60" type="text" /></td>
		</tr>
		<tr id="row625">
			<td id="number625">(4-5)</td>
			<td class="tdradios"><input id="standardA625" name="radio625" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI625" name="radio625" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard625">Provide a list and contact for firefighting resources for Services/contracts.</td>
			<td class="tdcomment"><input id="comments625" size="60" type="text" /></td>
		</tr>
		<tr id="row626">
			<td id="number626">(4-6)</td>
			<td class="tdradios"><input id="standardA626" name="radio626" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI626" name="radio626" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard626">Provide agreements for the use of alternative water sources/dip sites.</td>
			<td class="tdcomment"><input id="comments626" size="60" type="text" /></td>
		</tr>
		<tr id="row627">
			<td id="number627">(4-7)</td>
			<td class="tdradios"><input id="standardA627" name="radio627" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI627" name="radio627" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard627">Provide a list of necessary fire service contacts.</td>
			<td class="tdcomment"><input id="comments627" size="60" type="text" /></td>
		</tr>
		<tr id="row628">
			<td id="number628">(5-1)</td>
			<td class="tdradios"><input id="standardA628" name="radio628" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI628" name="radio628" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard628">Provide an EOC organization chart.</td>
			<td class="tdcomment"><input id="comments628" size="60" type="text" /></td>
		</tr>
		<tr id="row629">
			<td id="number629">(5-2)</td>
			<td class="tdradios"><input id="standardA629" name="radio629" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI629" name="radio629" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard629">Provide an EOC staffing roster and contact information.</td>
			<td class="tdcomment"><input id="comments629" size="60" type="text" /></td>
		</tr>
		<tr id="row630">
			<td id="number630">(5-3)</td>
			<td class="tdradios"><input id="standardA630" name="radio630" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI630" name="radio630" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard630">Provide a sample Emergency Declaration.</td>
			<td class="tdcomment"><input id="comments630" size="60" type="text" /></td>
		</tr>
		<tr id="row631">
			<td id="number631">(5-4)</td>
			<td class="tdradios"><input id="standardA631" name="radio631" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI631" name="radio631" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard631">Provide a list of necessary Emergency Management Contacts.</td>
			<td class="tdcomment"><input id="comments631" size="60" type="text" /></td>
		</tr>
		<tr id="row632">
			<td id="number632">(5-5)</td>
			<td class="tdradios"><input id="standardA632" name="radio632" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI632" name="radio632" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard632">Provide a map of EOC Locations.</td>
			<td class="tdcomment"><input id="comments632" size="60" type="text" /></td>
		</tr>
		<tr id="row633">
			<td id="number633">(5-6)</td>
			<td class="tdradios"><input id="standardA633" name="radio633" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI633" name="radio633" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard633">Provide a map of Warning Infrastructure.</td>
			<td class="tdcomment"><input id="comments633" size="60" type="text" /></td>
		</tr>
		<tr id="row634">
			<td id="number634">(6-1)</td>
			<td class="tdradios"><input id="standardA634" name="radio634" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI634" name="radio634" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard634">Provide a list of local reception and care facilities (include number of people and hours of the day the facility is occupied.</td>
			<td class="tdcomment"><input id="comments634" size="60" type="text" /></td>
		</tr>
		<tr id="row635">
			<td id="number635">(6-2)</td>
			<td class="tdradios"><input id="standardA635" name="radio635" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI635" name="radio635" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard635">Provide a map of Shelters.</td>
			<td class="tdcomment"><input id="comments635" size="60" type="text" /></td>
		</tr>
		<tr id="row636">
			<td id="number636">(6-3)</td>
			<td class="tdradios"><input id="standardA636" name="radio636" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI636" name="radio636" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard636">Provide a map of Animal Shelters.</td>
			<td class="tdcomment"><input id="comments636" size="60" type="text" /></td>
		</tr>
		<tr id="row637">
			<td id="number637">(6-4)</td>
			<td class="tdradios"><input id="standardA637" name="radio637" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI637" name="radio637" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard637">Provide a map of Access and Funtional Needs Critical Facilities.</td>
			<td class="tdcomment"><input id="comments637" size="60" type="text" /></td>
		</tr>
		<tr id="row638">
			<td id="number638">(6-5)</td>
			<td class="tdradios"><input id="standardA638" name="radio638" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI638" name="radio638" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard638">Provide a list of resources for Equipment.</td>
			<td class="tdcomment"><input id="comments638" size="60" type="text" /></td>
		</tr>
		<tr id="row639">
			<td id="number639">(6-6)</td>
			<td class="tdradios"><input id="standardA639" name="radio639" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI639" name="radio639" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard639">Provide a list of reources for Personnel.</td>
			<td class="tdcomment"><input id="comments639" size="60" type="text" /></td>
		</tr>
		<tr id="row640">
			<td id="number640">(6-7)</td>
			<td class="tdradios"><input id="standardA640" name="radio640" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI640" name="radio640" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard640">Provide a list of resources for Services/Contracts.</td>
			<td class="tdcomment"><input id="comments640" size="60" type="text" /></td>
		</tr>
		<tr id="row641">
			<td id="number641">(6-8)</td>
			<td class="tdradios"><input id="standardA641" name="radio641" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI641" name="radio641" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard641">Provide a list and contact information of interpreters or interpreter services.</td>
			<td class="tdcomment"><input id="comments641" size="60" type="text" /></td>
		</tr>
		<tr id="row642">
			<td id="number642">(6-9)</td>
			<td class="tdradios"><input id="standardA642" name="radio642" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI642" name="radio642" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard642">Provide a list and contact information of potential shelters.</td>
			<td class="tdcomment"><input id="comments642" size="60" type="text" /></td>
		</tr>
		<tr id="row643">
			<td id="number643">(6-10)</td>
			<td class="tdradios"><input id="standardA643" name="radio643" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI643" name="radio643" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard643">Provide a list and contact information of shelter managers.</td>
			<td class="tdcomment"><input id="comments643" size="60" type="text" /></td>
		</tr>
		<tr id="row644">
			<td id="number644">(6-11)</td>
			<td class="tdradios"><input id="standardA644" name="radio644" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI644" name="radio644" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard644">Provide a list and contact information of colunteer organizations that can provide human services and animal support during emergencies and the services they provide.</td>
			<td class="tdcomment"><input id="comments644" size="60" type="text" /></td>
		</tr>
		<tr id="row645">
			<td id="number645">(6-12)</td>
			<td class="tdradios"><input id="standardA645" name="radio645" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI645" name="radio645" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard645">Provide a list and contact information of animal shelters.</td>
			<td class="tdcomment"><input id="comments645" size="60" type="text" /></td>
		</tr>
		<tr id="row646">
			<td id="number646">(6-13)</td>
			<td class="tdradios"><input id="standardA646" name="radio646" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI646" name="radio646" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard646">Provide a list and contact information of veterinarians or animal medical personnel.</td>
			<td class="tdcomment"><input id="comments646" size="60" type="text" /></td>
		</tr>
		<tr id="row647">
			<td id="number647">(7-1)</td>
			<td class="tdradios"><input id="standardA647" name="radio647" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI647" name="radio647" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard647">Provide a list of critical facilities and generator requirements for each facility.</td>
			<td class="tdcomment"><input id="comments647" size="60" type="text" /></td>
		</tr>
		<tr id="row648">
			<td id="number648">(7-2)</td>
			<td class="tdradios"><input id="standardA648" name="radio648" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI648" name="radio648" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard648">Provide a map of Community Infrastructure.</td>
			<td class="tdcomment"><input id="comments648" size="60" type="text" /></td>
		</tr>
		<tr id="row649">
			<td id="number649">(7-3)</td>
			<td class="tdradios"><input id="standardA649" name="radio649" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI649" name="radio649" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard649">Provide a map of Schools and School Districts.</td>
			<td class="tdcomment"><input id="comments649" size="60" type="text" /></td>
		</tr>
		<tr id="row650">
			<td id="number650">(7-4)</td>
			<td class="tdradios"><input id="standardA650" name="radio650" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI650" name="radio650" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard650">Provide a map of Multi-Purpose Convention/Auditoriums/Stadiums.</td>
			<td class="tdcomment"><input id="comments650" size="60" type="text" /></td>
		</tr>
		<tr id="row651">
			<td id="number651">(7-5)</td>
			<td class="tdradios"><input id="standardA651" name="radio651" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI651" name="radio651" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard651">Provide a map of Logistic Staging Areas, Receiving Points, and Distribution Points.</td>
			<td class="tdcomment"><input id="comments651" size="60" type="text" /></td>
		</tr>
		<tr id="row652">
			<td id="number652">(7-6)</td>
			<td class="tdradios"><input id="standardA652" name="radio652" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI652" name="radio652" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard652">Provide a map of Bulk Fuel Storage (Public and Private).</td>
			<td class="tdcomment"><input id="comments652" size="60" type="text" /></td>
		</tr>
		<tr id="row653">
			<td id="number653">(7-7)</td>
			<td class="tdradios"><input id="standardA653" name="radio653" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI653" name="radio653" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard653">Provide a Resource list which includes:</td>
			<td class="tdcomment"><input id="comments653" size="60" type="text" /></td>
		</tr>
		<tr id="row654">
			<td id="number654">(7-8)</td>
			<td class="tdradios"><input id="standardA654" name="radio654" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI654" name="radio654" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard654">Provide a contact information list of private sector and volunteer organizations that can provide resources.</td>
			<td class="tdcomment"><input id="comments654" size="60" type="text" /></td>
		</tr>
		<tr id="row655">
			<td id="number655">(8-1)</td>
			<td class="tdradios"><input id="standardA655" name="radio655" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI655" name="radio655" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard655">Provide a map of Hospitals.</td>
			<td class="tdcomment"><input id="comments655" size="60" type="text" /></td>
		</tr>
		<tr id="row656">
			<td id="number656">(8-2)</td>
			<td class="tdradios"><input id="standardA656" name="radio656" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI656" name="radio656" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard656">Provide a map of Health Departments.</td>
			<td class="tdcomment"><input id="comments656" size="60" type="text" /></td>
		</tr>
		<tr id="row657">
			<td id="number657">(8-3)</td>
			<td class="tdradios"><input id="standardA657" name="radio657" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI657" name="radio657" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard657">Provide a map of Pharmacies.</td>
			<td class="tdcomment"><input id="comments657" size="60" type="text" /></td>
		</tr>
		<tr id="row658">
			<td id="number658">(8-4)</td>
			<td class="tdradios"><input id="standardA658" name="radio658" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI658" name="radio658" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard658">Provide a map of EMS Stations.</td>
			<td class="tdcomment"><input id="comments658" size="60" type="text" /></td>
		</tr>
		<tr id="row659">
			<td id="number659">(8-5)</td>
			<td class="tdradios"><input id="standardA659" name="radio659" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI659" name="radio659" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard659">Provide a list and contacts for Local Emergency Resources Data.</td>
			<td class="tdcomment"><input id="comments659" size="60" type="text" /></td>
		</tr>
		<tr id="row660">
			<td id="number660">(8-6)</td>
			<td class="tdradios"><input id="standardA660" name="radio660" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI660" name="radio660" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard660">Provide a list and contacts for Mass Fatalities.</td>
			<td class="tdcomment"><input id="comments660" size="60" type="text" /></td>
		</tr>
		<tr id="row661">
			<td id="number661">(8-7)</td>
			<td class="tdradios"><input id="standardA661" name="radio661" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI661" name="radio661" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard661">Provide a list and contacts for Mental Health.</td>
			<td class="tdcomment"><input id="comments661" size="60" type="text" /></td>
		</tr>
		<tr id="row662">
			<td id="number662">(8-8)</td>
			<td class="tdradios"><input id="standardA662" name="radio662" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI662" name="radio662" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard662">Provide a list and contacts for Suppliers.</td>
			<td class="tdcomment"><input id="comments662" size="60" type="text" /></td>
		</tr>
		<tr id="row663">
			<td id="number663">(8-9)</td>
			<td class="tdradios"><input id="standardA663" name="radio663" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI663" name="radio663" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard663">Provide a list and contacts for Services/Contracts.</td>
			<td class="tdcomment"><input id="comments663" size="60" type="text" /></td>
		</tr>
		<tr id="row664">
			<td id="number664">(8-10)</td>
			<td class="tdradios"><input id="standardA664" name="radio664" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI664" name="radio664" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard664">Provide a list of Mutual Aid Agreement Contacts.</td>
			<td class="tdcomment"><input id="comments664" size="60" type="text" /></td>
		</tr>
		<tr id="row665">
			<td id="number665">(8-11)</td>
			<td class="tdradios"><input id="standardA665" name="radio665" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI665" name="radio665" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard665">Reference appropriate plans and/or procedures for receving or notifying certain staff, facilities, departments, etc.</td>
			<td class="tdcomment"><input id="comments665" size="60" type="text" /></td>
		</tr>
		<tr id="row666">
			<td id="number666">(9-1)</td>
			<td class="tdradios"><input id="standardA666" name="radio666" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI666" name="radio666" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard666">Provide a list of necessary Search and Rescue contacts.</td>
			<td class="tdcomment"><input id="comments666" size="60" type="text" /></td>
		</tr>
		<tr id="row667">
			<td id="number667">(9-2)</td>
			<td class="tdradios"><input id="standardA667" name="radio666" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI667" name="radio666" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard667">Provide a list of Search and Rescue resources for Equipment.</td>
			<td class="tdcomment"><input id="comments667" size="60" type="text" /></td>
		</tr>
		<tr id="row668">
			<td id="number668">(9-3)</td>
			<td class="tdradios"><input id="standardA668" name="radio668" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI668" name="radio668" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard668">Provide a list of Search and Rescue resources for Personnel.</td>
			<td class="tdcomment"><input id="comments668" size="60" type="text" /></td>
		</tr>
		<tr id="row669">
			<td id="number669">(9-3)</td>
			<td class="tdradios"><input id="standardA669" name="radio669" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI669" name="radio669" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard669">Provide a list of Search and Rescue resources for Services/Contractors.</td>
			<td class="tdcomment"><input id="comments669" size="60" type="text" /></td>
		</tr>
		<tr id="row670">
			<td id="number670">(10-1)</td>
			<td class="tdradios"><input id="standardA670" name="radio670" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI670" name="radio670" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard670">Identify special facilities that may be vulnerable to a hazmat incident.</td>
			<td class="tdcomment"><input id="comments670" size="60" type="text" /></td>
		</tr>
		<tr id="row671">
			<td id="number671">(10-2)</td>
			<td class="tdradios"><input id="standardA671" name="radio671" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI671" name="radio671" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard671">Identify Population Support Facilities that may be vulnerable to a hazmat incident.</td>
			<td class="tdcomment"><input id="comments671" size="60" type="text" /></td>
		</tr>
		<tr id="row672">
			<td id="number672">(10-3)</td>
			<td class="tdradios"><input id="standardA672" name="radio672" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI672" name="radio672" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard672">Identify Population Concentrations that may be vulnerable to a hazmat incident.</td>
			<td class="tdcomment"><input id="comments672" size="60" type="text" /></td>
		</tr>
		<tr id="row673">
			<td id="number673">(10-4)</td>
			<td class="tdradios"><input id="standardA673" name="radio673" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI673" name="radio673" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard673">Provide a map of Buffers.</td>
			<td class="tdcomment"><input id="comments673" size="60" type="text" /></td>
		</tr>
		<tr id="row674">
			<td id="number674">(10-5)</td>
			<td class="tdradios"><input id="standardA674" name="radio674" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI674" name="radio674" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard674">Provide a contact list of LEPC Committee Members.</td>
			<td class="tdcomment"><input id="comments674" size="60" type="text" /></td>
		</tr>
		<tr id="row675">
			<td id="number675">(11-1)</td>
			<td class="tdradios"><input id="standardA675" name="radio675" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI675" name="radio675" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard675">Provide a list and a map of sites on the Historical REgistry.</td>
			<td class="tdcomment"><input id="comments675" size="60" type="text" /></td>
		</tr>
		<tr id="row676">
			<td id="number676">(11-2)</td>
			<td class="tdradios"><input id="standardA676" name="radio676" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI676" name="radio676" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard676">Provide a list of necessary Agriculture and Natural Resource contacts.</td>
			<td class="tdcomment"><input id="comments676" size="60" type="text" /></td>
		</tr>
		<tr id="row677">
			<td id="number677">(12-1)</td>
			<td class="tdradios"><input id="standardA677" name="radio677" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI677" name="radio677" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard677">Provide a list of critical local facilities having priority for restoration of utilities during emergencies.</td>
			<td class="tdcomment"><input id="comments677" size="60" type="text" /></td>
		</tr>
		<tr id="row678">
			<td id="number678">(12-2)</td>
			<td class="tdradios"><input id="standardA678" name="radio678" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI678" name="radio678" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard678">Identify utilities serving the local area to include the area and number of customers served.</td>
			<td class="tdcomment"><input id="comments678" size="60" type="text" /></td>
		</tr>
		<tr id="row679">
			<td id="number679">(12-3)</td>
			<td class="tdradios"><input id="standardA679" name="radio679" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI679" name="radio679" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard679">Provide a list of necessary Energy and Utilities contacts.</td>
			<td class="tdcomment"><input id="comments679" size="60" type="text" /></td>
		</tr>
		<tr id="row680">
			<td id="number680">(13-1)</td>
			<td class="tdradios"><input id="standardA680" name="radio680" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI680" name="radio680" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard680">Provide a map of Police Stations.</td>
			<td class="tdcomment"><input id="comments680" size="60" type="text" /></td>
		</tr>
		<tr id="row681">
			<td id="number681">(13-2)</td>
			<td class="tdradios"><input id="standardA681" name="radio681" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI681" name="radio681" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard681">Provide a map of Correctional Facilities.</td>
			<td class="tdcomment"><input id="comments681" size="60" type="text" /></td>
		</tr>
		<tr id="row682">
			<td id="number682">(13-3)</td>
			<td class="tdradios"><input id="standardA682" name="radio682" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI682" name="radio682" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard682">Provide a list of necessary Public Safety and Security contacts.</td>
			<td class="tdcomment"><input id="comments682" size="60" type="text" /></td>
		</tr>
		<tr id="row683">
			<td id="number683">(14-1)</td>
			<td class="tdradios"><input id="standardA683" name="radio683" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI683" name="radio683" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard683">Provide a list of necessary Long-Term Recovery contacts.</td>
			<td class="tdcomment"><input id="comments683" size="60" type="text" /></td>
		</tr>
		<tr id="row684">
			<td id="number684">(14-2)</td>
			<td class="tdradios"><input id="standardA684" name="radio684" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI684" name="radio684" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard684">Provide Rapid/Damage Assessment Forms.</td>
			<td class="tdcomment"><input id="comments684" size="60" type="text" /></td>
		</tr>
		<tr id="row685">
			<td id="number685">(15-1)</td>
			<td class="tdradios"><input id="standardA685" name="radio685" onchange="standardAOnChange(this.id)" type="radio" /></td>
			<td class="tdradios"><input id="standardI685" name="radio685" onchange="standardIOnChange(this.id)" type="radio" /></td>
			<td class="tdstandard" id="standard685">Provide a list of Local Media Contacts, including after hour phone contact information and their ability to provide warnings.</td>
			<td class="tdcomment"><input id="comments685" size="60" type="text" /></td>
		</tr>
		<tr id="row686" style="display: none">
				<td id="number686">(1-5)</td>
				<td class="tdradios"><input id="standardA686" name="radio686" onchange="standardAOnChange(this.id)" type="radio"  checked="checked" /></td>
				<td class="tdradios"><input id="standardI686" name="radio686" onchange="standardIOnChange(this.id)" type="radio" /></td>
				<td class="tdstandard" id="standard686">If a jurisdiction area borders another state, provide a Stop Movement Plan if applicable.</td>
				<td class="tdcomment"><input id="comments686" size="60" type="text" /></td>
		</tr>
		<tr id="row687" style="display: none">
				<td id="number687">(3-13)</td>
				<td class="tdradios"><input id="standardA687" name="radio687" onchange="standardAOnChange(this.id)" type="radio" checked="checked" /></td>
				<td class="tdradios"><input id="standardI687" name="radio687" onchange="standardIOnChange(this.id)" type="radio" /></td>
				<td class="tdstandard" id="standard687">Identify all Federal Reservoirs and/or Levees within the jurisdiction, If applicable. Provide Emergency
						Action Plans (EAP) for each identified Federal Reservoir and/or Levee.</td>
				<td class="tdcomment"><input id="comments687" size="60" type="text" /></td>
			</tr>	
	</tbody>
   </table>
</div>

<!--Button That Runs the report (javascript referenced at the top)-->
<div id="tabs-18"><button id="runreport" onclick="buttClick()" type="button">Run Report</button><!-- <p id="t2"></p> --></div>
&nbsp; 

<center></center>

<center>
<div class="container" id="copyright">
<p>&copy; Kansas Capability Assessment Tool | All rights reserved.</p>
</div>
</center>
</div>
</form>
<?php VDEnd(); ?>
