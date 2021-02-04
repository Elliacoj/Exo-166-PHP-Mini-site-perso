
<section>
    <h1>Contact</h1>
    <div>
        <form action="../public/save.php" method="POST">
            <div>
                <label for="name">Votre nom: </label>
                <input type="text" name="name" id="name" required maxlength="25">
            </div>

            <div>
                <label for="message">Votre message: </label>
                <input type="text" id="message" name="message" required maxlength="500">
            </div>

            <div>
                <input type="submit">
            </div>
        </form>
    </div>
</section>