<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Filmes Populares - TMDB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Catálogo de Filmes (TMDB)</h1>

        <form method="POST">
            <button type="submit" name="importar">Importar Filmes da API</button>
        </form>

        <?php if (!empty($mensagem)): ?>
            <p class="mensagem"><?= htmlspecialchars($mensagem) ?></p>
        <?php endif; ?>

        <div class="grid">
            <?php foreach ($filmes as $filme): ?>
                <div class="card">
                    <?php if (!empty($filme['poster']) && $filme['poster'] !== 'http://image.tmdb.org/t/p/w500'): ?>
                        <img src="<?= htmlspecialchars($filme['poster']) ?>" alt="<?= htmlspecialchars($filme['titulo']) ?>">
                    <?php endif; ?>
                    <h2><?= htmlspecialchars($filme['titulo']) ?></h2>
                    <p><?= htmlspecialchars($filme['descricao']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
```[cite: 2, 4, 19]

*Verificação:* O ficheiro `filmeView.php` deve aparecer dentro da pasta `view`[cite: 2, 29].

Quando guardar o `filmeView.php`, avise para criarmos o **`index.php`** (que já vai usar a sua chave da API)[cite: 2].