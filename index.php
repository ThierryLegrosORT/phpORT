<?php

show("Salut tout le monde");

if(isset($_GET['goto'])) goto SuiteEtFin;

show("Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus provident saepe perferendis dolores, eligendi accusantium natus reiciendis nemo beatae velit, quos, tempore temporibus unde. Impedit nesciunt consequatur amet recusandae unde.Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus provident saepe perferendis dolores, eligendi accusantium natus reiciendis nemo beatae velit, quos, tempore temporibus unde. Impedit nesciunt consequatur amet recusandae unde.Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus provident saepe perferendis dolores, eligendi accusantium natus reiciendis nemo beatae velit, quos, tempore temporibus unde. Impedit nesciunt consequatur amet recusandae unde.");

SuiteEtFin:
show("Voila c'est fini");

function show($str){
    echo "<p>", $str, "</p>";
};

echo "
<button>TEST</button>
<script>
let button = document.querySelector('button');
const query = window.location.search;
const goToStatus = query === '? goto=true';

const targetUrl = goToStatus ? '/' : '/?goto=true';

button.addEventListener('click',() =>{
    location.href= targetUrl;
});

</script>";
