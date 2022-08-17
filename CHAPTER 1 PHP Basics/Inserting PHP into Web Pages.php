<?php
if ($bankBalance > 0): ?>
<p class="black">
    <?php else: ?>
<p class="red">
    <?php endif; ?>
    <?= $bankBalance?>
</p>