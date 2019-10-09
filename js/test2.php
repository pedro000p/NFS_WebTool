<?php

function array_change_key_case_recursive($arr, $case=CASE_UPPER)
{
  return array_map(function($item)use($case){
    if(is_array($item))
        $item = array_change_key_case_recursive($item, $case);
    return $item;
  },array_change_key_case($arr, $case));
}
/*$conn = mysqli_connect('localhost', 'root', 'abc', 'isilon');
    
$_POST["mData1
$sql = "SELECT * FROM access
WHERE  export  LIKE '%".$search."%'
  OR dns LIKE '%".$search."%' 
  OR outbound LIKE '%".$search."%' 
  OR isilon LIKE '%".$search."%' 
 ";}
else
{
 $sql = "select export as EXPORT, dns as DNS, outbound as OUTBOUND,isilon as ISILON from access";
}

$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$data = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$data[] = $rows;
}
$results = array(
"sEcho" => 1,
"iTotalRecords" => count($data),
"iTotalDisplayRecords" => count($data),
"aaData" => $data
);
echo json_encode($results);*/

/*$data = json_decode(file_get_contents('a.js'), true);*/



$conn = mysqli_connect('localhost', 'root', 'abc', 'isilon');
/*$rec = $_REQUEST;
echo $rec;*/
/*$query = "select export as EXPORT, dns as DNS, outbound as OUTBOUND,isilon as ISILON from access";*/

/* echo $search2;*/

if(isset($_REQUEST))
{
	
 $var = $_REQUEST;

/*$var = 'sub';*/
 /*echo $var;	*/
 $search = mysqli_real_escape_string($conn, $var);
/* echo $search;*/

 $query2 = "SELECT * FROM access
WHERE  EXPORT LIKE '%".$search."%'
  OR DNS LIKE '%".$search."%' 
  OR OUTBOUND LIKE '%".$search."%' 
  OR ISILON LIKE '%".$search."%' limit 10
 ";



}
/* else
{
 $query2 = "select export, dns, outbound,isilon from access limit 10";
 /*$query2 = "select * from exports";*/
/*
}
*/
	


$result = mysqli_query($conn, $query2);

if(mysqli_num_rows($result) > 0)

while( $rows = mysqli_fetch_assoc($result) ) {
$data[] = $rows;

}



$data2=array_change_key_case_recursive($data);
$results2 = array(
"sEcho" => 1,
"iTotalRecords" => count($data2),
"iTotalDisplayRecords" => count($data2),
"aaData" => $data2
);
/*$results3 = array_search(strtoupper('export','dns','outbound','isilon'), array_map('strtoupper', $results2));
echo $results3;*/
/*echo json_encode($results2);*/

/*$flagValue = 1;
$csmap_data = array_map(function($data){ use ($flagValue)
    return ['flag' => $flagValue] + $data;
}, $csmap_data);


echo json_encode($csmap_data);*/

foreach($data as $key => &$val){

    $val[''] = '';

}



/*print_r($data);

$arr = array_merge(array('key0' => 'value0'), $data);*/

/*print_r($data);*/
echo json_encode($results2);