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
                        <option value="Discipline">Discipline</option>
                        <option value="Communication">Communication</option>
                        <option value="Leadership">Leadership</option>
                        <option value="unknown">I don't know yet</option>
                    </select><br><br>
                    <button type="submit" value="Grow Seed">Grow Seed</button>
                </form>
            </section>
            <section>
                <h2>Your Selected Strengths</h2>
                    <div id="selected-strengths">
                        <?php
                        include 'connection.php';

                        if (isset($_POST['Grow Seed'])) {
                            $strength = $_POST['strengths'];
                            if ($strength == "unknown") {
                                echo '
                                <form method="post" action="">
                                    <fieldset>
                                        <legend>1. What activity excites you most?</legend>
                                        <label><input type="radio" name="q1" value="leadership"> Guiding a team</label><br>
                                        <label><input type="radio" name="q1" value="discipline"> Sticking to a routine</label><br>
                                        <label><input type="radio" name="q1" value="communication"> Talking with people</label><br>
                                        <label><input type="radio" name="q1" value="creativity"> Inventing new ideas</label><br>
                                    </fieldset>

                                    <fieldset>
                                        <legend>2. Which feedback feels best?</legend>
                                        <label><input type="radio" name="q2" value="leadership"> “You inspire others!”</label><br>
                                        <label><input type="radio" name="q2" value="discipline"> “You’re so reliable!”</label><br>
                                        <label><input type="radio" name="q2" value="communication"> “You explain things clearly!”</label><br>
                                        <label><input type="radio" name="q2" value="creativity"> “You’re so imaginative!”</label><br>
                                    </fieldset>

                                    <fieldset>
                                        <legend>3. What do you enjoy more?</legend>
                                        <label><input type="radio" name="q3" value="leadership"> Taking charge in a group</label><br>
                                        <label><input type="radio" name="q3" value="discipline"> Completing tasks step by step</label><br>
                                        <label><input type="radio" name="q3" value="communication"> Helping others understand</label><br>
                                        <label><input type="radio" name="q3" value="creativity"> Brainstorming new ideas</label><br>
                                    </fieldset>

                                    <button type="submit" value="quiz">See My Strength</button>
                                </form>';
                                if (isset($_POST['quiz'])) {
                                    $scoreCreativity = 0;
                                    $scoreCommunication = 0;
                                    $scoreDiscipline = 0;
                                    $scoreLeadership = 0;

                                    foreach ($_POST as $answer) {
                                        if ($answer === "creativity") $scoreCreativity++;
                                        if ($answer === "communication") $scoreCommunication++;
                                        if ($answer === "discipline") $scoreDiscipline++;
                                        if ($answer === "leadership") $scoreLeadership++;
                                    }

                                    $maxScore = max($scoreCreativity, $scoreCommunication, $scoreDiscipline, $scoreLeadership);

                                    if ($maxScore === $scoreCreativity) {
                                        echo "<h2>Your strength to grow: Creativity 🌱</h2>";
                                        $strength = "Creativity";
                                    } elseif ($maxScore === $scoreCommunication) {
                                        echo "<h2>Your strength to grow: Communication 🗣️</h2>";
                                        $strength = "Communication";
                                    } elseif ($maxScore === $scoreDiscipline) {
                                        echo "<h2>Your strength to grow: Discipline 💪</h2>";
                                        $strength = "Discipline";
                                    } else {
                                        echo "<h2>Your strength to grow: Leadership 👑</h2>";
                                        $strength = "Leadership";
                                    }
                                }
                            } else {
                            echo "<p>You want to grow <strong>" . htmlspecialchars($strength) . "</strong></p>";
                            echo "<h3>Here is a task:</h3>";
                            $id = rand(1, 10);
                            if ($strength == "Leadership") {
                                $query = "SELECT task FROM leadership WHERE id = $id";
                            } elseif ($strength == "Creativity") {
                                $query = "SELECT task FROM creativity WHERE id = $id";
                            } elseif ($strength == "Discipline") {
                                $query = "SELECT task FROM discipline WHERE id = $id";
                            } elseif ($strength == "Communication") {
                                $query = "SELECT task FROM communication WHERE id = $id";
                            } 
                            $task = mysqli_fetch_assoc($conn->query($query))['task'];
                            echo "<p>" . htmlspecialchars($task) . "</p>";
                            };
                            }
                        ?>
                    </div>
            </section>

        </main>
        <footer>
            <p>&copy; 2024 Strength Garden. All rights reserved.</p>
        </footer>
</html>