<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strength Garden</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <div class = "image-style">
                <img src = "logo.jpg" alt="Logo" class = "top-left-image">
            </div>
            <h1>Welcome to Strength Garden</h1>
            <p>This is a website to cultivate your strengths. Choose the "seeds" (Strengths) that you want to work on.</p>
        </header>
        <main>
            <section>
                <form action="#" method="post">
                    <label for="strengths">What seed do you want to grow today:</label><br><br>
                    <select id="strengths" name="strengths">
                        <option value="Creativity">Creativity</option>
                        <option value="Curiosity">Curiosity</option>
                        <option value="Judgment">Judgment</option>
                        <option value="Love of Learning">Love of Learning</option>
                        <option value="Perspective">Perspective</option>
                        <option value="Bravery">Bravery</option>
                        <option value="Perseverance">Perseverance</option>
                        <option value="Honesty">Honesty</option>
                        <option value="Zest">Zest</option>
                        <option value="Kindness">Kindness</option>
                        <option value="Social Intelligence">Social Intelligence</option>
                        <option value="Teamwork">Teamwork</option>
                        <option value="Fairness">Fairness</option>
                        <option value="Leadership">Leadership</option>
                        <option value="Forgiveness">Forgiveness</option>
                        <option value="Humor">Humor</option>
                        <option value="Spirituality">Spirituality</option>
                        <option value="unknown">I don't know yet</option>
                    </select><br><br>
                    <input type="submit" value="Grow Seed">
                </form>
            </section>
            <section>
                <h2>Your Selected Strengths</h2>
                    <div id="selected-strengths">
                        <?php

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $strength = $_POST['strengths'];
                            echo "<p>You want to grow <strong>" . htmlspecialchars($strength) . "</strong></p>";
                            echo "<p>Here is a task:</p>";
                        }
                        ?>
                    </div>
            </section>

        </main>
        <footer>
            <p>&copy; 2024 Strength Garden. All rights reserved.</p>
        </footer>
</html>