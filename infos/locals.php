<script>

</script>
<?php
    $main_url = 'https://swapi.dev/api/';
    $file = fopen('info.json', 'w');
    $keys =  array_keys(json_decode($file, true));
    echo $keys;

?>