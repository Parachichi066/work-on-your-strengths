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
                    <input type="submit" value="Grow Seed">
                </form>
            </section>
            <section>
                <h2>Your Selected Strengths</h2>
                    <div id="selected-strengths">
                        <?php
                        include 'connection.php';

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $strength = $_POST['strengths'];
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
                        }
                        ?>
                    </div>
            </section>

        </main>
        <footer>
            <p>&copy; 2024 Strength Garden. All rights reserved.</p>
        </footer>
</html>