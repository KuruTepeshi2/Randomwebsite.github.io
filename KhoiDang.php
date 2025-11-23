<?php

if (!isset($_GET['js']) || $_GET['js'] !== '1') {
    
    header("Location: login.html");
    exit();
}

$code = "KMA{M4nH4tt4n_C4f3_2025!}";
echo "
<script>
    alert('Here is the code: $code');
    window.history.back(); 
</script>
";
?>
