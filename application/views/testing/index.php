<?php

	print_r($sample);

?>


<?php foreach($sample as $key => $data){ ?>

	<li><?= $key.":".$data ?></li>

<?php } ?>