<?php
    session_start();
    $new = str_replace (" ", "+",  $_POST["pp"]); //https://www.google.com/search?q=application%2Fx-www-form-urlencoded+plus+sign&client=opera&hs=UXi&sxsrf=APq-WBt6_Fy_ITm2PmA3KoqBZXWV-dJTyw%3A1650498140735&ei=XJpgYsrELNaFur4Ptrm0-Ac&oq=application%2Fx-www-form-urlencoded+plus&gs_lcp=Cgdnd3Mtd2l6EAMYADIFCAAQywEyBggAEBYQHjIGCAAQFhAeOgcIIxCwAxAnOgcIABBHELADOgUIABCABDoICAAQFhAKEB5KBAhBGABKBAhGGABQwAFYrQ5g1RZoAXABeACAAWmIAeIDkgEDMi4zmAEAoAEByAEJwAEB&sclient=gws-wiz

    $_SESSION["pp"] = $new;
    
    echo $new;
    

?>