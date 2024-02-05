<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Day Selector</title>
</head>
<body>
<main>
    <section id="container" class="container">
        <h1>Today is <span><?php echo $today ?></span></h1>
        <section id="flex-container" class="flex-container">
            <?php foreach ($days as $day) : ?>
                <?php if ($day === $today) : ?>
                    <section id="day" class='current_day'
                             onclick='selectedDay(this)'><?php echo $day ?></section>
                <?php else : ?>
                    <section id="day" class='day'
                             onclick='selectedDay(this)'><?php echo $day ?></section>
                <?php endif; ?>
            <?php endforeach; ?>
        </section>
        <section id="selectedDay" class="selected_day">
        </section>
    </section>
</main>
<script src="/assets/js/index.js"></script>
</body>
</html>