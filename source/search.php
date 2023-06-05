
    <div class="header-content-test">
    <form method="GET" action="/projects/Hotel-Projekt/source/zimmerbuchung.php">
        <div class="selectDate">
            <?php
                if(isset($_GET['trip-start'])) {
                    echo '<input type="date" id="start" name="trip-start" value="' . $_GET['trip-start'] . '">';
                } else {
                    echo '<input type="date" id="start" name="trip-start" value="">';
                }
            ?>
        </div>    
        <div class="selectDate">
        <?php
                if(isset($_GET['trip-end'])) {
                    echo '<input type="date" id="end" name="trip-end" value="' . $_GET['trip-end'] . '">';
                } else {
                    echo '<input type="date" id="end" name="trip-end" value="">';
                }
            ?>
        </div>
        <div class="select">
            <select name="Personen" required>
                <option value="1" <?php if(isset($_GET['Personen']) && $_GET['Personen'] == '1'){echo 'selected';} ?>>1 Person</option>
                <option value="2" <?php if(isset($_GET['Personen']) && $_GET['Personen'] == '2'){echo 'selected';} ?>>2 Personen</option>
                <option value="3" <?php if(isset($_GET['Personen']) && $_GET['Personen'] == '3'){echo 'selected';} ?>>3 Personen</option>
                <option value="4" <?php if(isset($_GET['Personen']) && $_GET['Personen'] == '4'){echo 'selected';} ?>>4 Personen</option>
            </select>
        </div>    
        <input type="submit" value="Jetzt Buchen" name="submit">
    </form>       
</div> 