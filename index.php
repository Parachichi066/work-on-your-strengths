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
            <h1>Welcome to Strength Garden</h1>
            <h3>This is a website to cultivate your strengths. Choose the "seeds" (Strengths) that you want to work on.</h3>
        </header>
        <main>
            <section>
                <form target="#" action="post">
                    <label for="strengths">Select your strengths:</label><br><br>
                    <select id="strengths" name="strengths">
                        <option value="creativity">Creativity</option>
                        <option value="curiosity">Curiosity</option>
                        <option value="judgment">Judgment</option>
                        <option value="love_of_learning">Love of Learning</option>
                        <option value="perspective">Perspective</option>
                        <option value="bravery">Bravery</option>
                        <option value="perseverance">Perseverance</option>
                        <option value="honesty">Honesty</option>
                        <option value="zest">Zest</option>
                        <option value="kindness">Kindness</option>
                        <option value="social_intelligence">Social Intelligence</option>
                        <option value="teamwork">Teamwork</option>
                        <option value="fairness">Fairness</option>
                        <option value="leadership">Leadership</option>
                        <option value="forgiveness">Forgiveness</option>
                        <option value="humor">Humor</option>
                        <option value="spirituality">Spirituality</option>
                        <option value="unknown">I don't know yet</option>
                    </select><br><br>
                    <input type="submit" value="Submit">
                </form>
            </section>
            <section>
                <h2>Your Selected Strengths</h2>
                    <div id="selected-strengths">
                        <?php

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            
                        }
                        ?>
                    </div>
            </section>

        </main>
        <footer>
            <p>&copy; 2024 Strength Garden. All rights reserved.</p>
        </footer>
</html>