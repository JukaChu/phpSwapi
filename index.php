<?php include_once './templates/header.php' ?>


<script>
    let url = 'https://swapi.dev/api/';

    const dataConst = {
        urls: {
            base: 'https://swapi.dev/api/',
            people: 'people/',
            planets: 'planets/',
            films: 'films/',
            species: 'species/',
            vehicles: 'vehicles/',
            starships: 'starships/',
        }
    }
    let response3 = {};
    async function getData() {
        try {
            let res = await fetch(url);
            return await res.json();
        } catch (error) {
            console.log(error);
        }
    }
    async function writeData() {
        response3 = await getData();
        console.log(response3);
        items = [...Object.keys(response3)];
        // items.forEach((itm) => {
        //     console.log(itm);
        // })


    }

    writeData();
</script>
<?php
    $string = file_get_contents('https://swapi.dev/api/');
    $json_a = json_decode($string);

    $myfile = fopen("./infos/info.json", "w");
    echo $json_a->people;
    fwrite($myfile, $json_a);
    fclose($myfile);

//    include_once './infos/locals.php';
?>