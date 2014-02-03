<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/db.php'),
	require(dirname(__FILE__).'/basic.php')
);
