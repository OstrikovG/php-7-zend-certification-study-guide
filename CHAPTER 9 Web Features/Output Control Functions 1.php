<?php
function escapeOutput(string $buffer): string {
    return htmlentities($buffer);
}
ob_start("escapeOutput");
// &lt;script&gt;alert(&quot;xss&quot;);&lt;/script&gt;
echo '<script>alert("xss");</script>';