require ('workflows.php');
$wf = new Workflows ();
$query = "{query}";


define("TRANS_QUERY_URL", "http://openapi.baidu.com/public/2.0/bmt/translate?client_id=9WVFIE2eaqe05vjCqBxAU40U&q=$query&from=auto&to=auto");

$json = json_decode ($wf->request (TRANS_QUERY_URL));

foreach ($json->trans_result as $translation):
$result['src'] = $translation->src;
$result['dst'] = $translation->dst;
$wf->result(1, 'https://diegozeng.github.io', $result['dst'], $query, 'icon.png', 'yes');
endforeach;

echo $wf->toxml ();