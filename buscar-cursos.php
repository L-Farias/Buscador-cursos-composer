<?php

namespace LFarias\BuscadorCursos;

require "vendor/autoload.php";




use Symfony\Component\DomCrawler\Crawler;

$client = new \GuzzleHttp\Client([
    'base_uri' => 'https://www.alura.com.br/',
    'verify' => false
]);

$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('https://www.alura.com.br/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}