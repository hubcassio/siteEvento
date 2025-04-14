<?php

// Array de palestrantes com status de confirmação
$palestrantes = [
    ["nome" => "Cassio Cardoso", "confirmado" => true],
    ["nome" => "João Raposo", "confirmado" => false],
    ["nome" => "Fernanda Lima da Costa", "confirmado" => true],
    ["nome" => "Ygor Pereira", "confirmado" => false]
];

// Ordena os palestrantes por nome
usort($palestrantes, function ($a, $b) {
    return strcmp($a["nome"], $b["nome"]);
});
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </div>
    <nav>
        <h1 class="logo">EVENTO ETECH 2026</h1>
        <ul class="link">
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Informações</a></li>
            <li><a href="#">Palestra</a></li>
            <li><a href="#">Suporte</a></li>
        </ul>
    </nav>
</header>

<main>
    <div class="conteudo">
        <section class="sobre">
            <h1>Sobre o Evento</h1>
            <p>O Evento Etech 2026 será um encontro inovador que reunirá profissionais, estudantes e entusiastas das áreas de tecnologia, educação e inovação. Com o tema "Transformando o Futuro com Tecnologia", o evento contará com palestras de especialistas renomados, workshops interativos, exposições de startups e demonstrações de tecnologias emergentes, como IA e realidade aumentada. O Etech 2026 será uma oportunidade única para networking, aprendizado e troca de ideias que moldarão as tendências do futuro. Seja parte dessa revolução! 🚀
            </p>
        </section>
        <section class="info">
            <h1>Informações do Evento</h1>
            <ul>
                <li><strong>DATA:26/02/2026</strong></li>
                <li><strong>LOCAL DO EVENTO: ESpaço das Artes(Monsenhor Paulo)</strong></li>
                <li><strong>HORÁRIO DE INICIO: 16:00 HORAS</strong></li>
            </ul>
        </section>
        <section class="pessoa">
            <h2>Palestra</h2>
            <p>Os palestrantes do Evento Etech 2026 são referência em tecnologia e educação, trazendo ideias e experiências que inspiram. Prepare-se para aprender com especialistas que estão moldando o futuro.</p>
                <ul class="p"><h3>Palestrantes</h3>
<?php
foreach ($palestrantes as $palestrante) {
    echo "<h4>Nome: " . $palestrante["nome"] . "</h4>";
    if ($palestrante["confirmado"]) {
    echo "<li>Status: Confirmado</li>";
    } else {
    echo "<li>Status: Não confirmado</li>";
    }
}
?>
                </ul>
        </section>
</div>
    <footer>
    <p>Site desenvolvido para atividade avaliativa</p>
    </footer>
</main>

</body>
</html>


