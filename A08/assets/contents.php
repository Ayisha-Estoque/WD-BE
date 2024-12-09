<div class="w3-padding-64 w3-content w3-text-grey" id="contents">
    <h2 class="w3-text-light-grey">ISLAND CONTENTS</h2>
    <hr style="width:200px" class="w3-opacity">

    <?php
    mysqli_data_seek($resultPersonality, 0); // Reset the islands query result pointer
    while ($island = mysqli_fetch_assoc($resultPersonality)) {
        ?>
        <h4 class="w3-text-light-grey"><?php echo $island['name']; ?></h4>
        <div class="cardContainer">
            <?php
            if (isset($islandContents[$island['islandOfPersonalityID']])) {
                foreach ($islandContents[$island['islandOfPersonalityID']] as $content) {
                    ?>
                    <div class="card"
                        style="background-color: <?php echo ($island['color']) ? $island['color'] : '#ffffff'; ?>;">
                        <img src="image/<?php echo $content['image']; ?>" alt="<?php echo $content['title']; ?>"
                            class="imageContent">
                        <div class="imageLabelContent"><?php echo $content['title']; ?></div>
                        <p class="imageDescription"><?php echo $content['content']; ?></p>
                    </div>
                <?php
                }
            }
            ?>
        </div>
    <?php
    }
    ?>