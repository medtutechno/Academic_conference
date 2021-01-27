<?php
	require "../../php/connect.php";
	$con = connect('localhost','medtuorg','tmt@33*2562','medtuorg_Academic','utf8');
	$id = array(34,35,40,42,47,50,53,54,55,56,59,60,61,63,72,74,75,76,78,79,81,84,89,96,101,109,
112,
114,
115,
126,
127,
132,
133,
155,
156,
158,
160,
165,
166,
175,
187,
192,
193,
206,
209,
213,
221,
236,
238,
239,
240,
241,
244,
250,
253,
254,
259,
269,
272,
274,
275,
276,
281,
284,
286,
294,
296,
297,
300,
309,
311,
315,
);
	foreach ($id as $key => $value) {
		$where = 'register_regis_id ="'.$id[$key].'"';
		delete('session_listen',$where);
	}
	echo 'DEL OK !!!'	

?>