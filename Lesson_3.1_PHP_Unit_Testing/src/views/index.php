<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    Home Page
    <hr/>

    <div>
        <?php if (! empty($invoice)): ?>
            Invoice ID: <?= htmlspecialchars($invoice['id'], ENT_QUOTES) ?> <br/>
            Invoice Amount: <?= htmlspecialchars($invoice['amount'], ENT_QUOTES) ?> <br/>
            User: <?= htmlspecialchars($invoice['name'], ENT_QUOTES) ?> <br/>
        <?php endif; ?>
    </div>
</body>
</html>