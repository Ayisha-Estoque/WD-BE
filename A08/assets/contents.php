<div class="w3-padding-64 w3-content w3-text-grey" id="contents">
    <h2 class="w3-text-light-grey">ISLAND CONTENTS</h2>
    <hr style="width:200px" class="w3-opacity">

    <?php
    $personalityQuery = "SELECT * FROM islandsofpersonality";
    $resultPersonality = executeQuery($personalityQuery);

    while ($personalityRow = mysqli_fetch_assoc($resultPersonality)) { ?>
        <h4 class="w3-text-light-grey"><?php echo $personalityRow['name']; ?></h4>
        <div class="cardContainer">
            <?php
            $islandOfPersonalityID = $personalityRow['islandOfPersonalityID'];
            $queryContents = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = '$islandOfPersonalityID'";
            $resultContents = executeQuery($queryContents);

            if (mysqli_num_rows($resultContents) > 0) {
                while ($contentsRow = mysqli_fetch_assoc($resultContents)) { ?>
                    <div class="card"
                        style="background-color: <?php echo ($personalityRow['color']) ? $personalityRow['color'] : '#ffffff'; ?>;">
                        <img src="image/<?php echo $contentsRow['image']; ?>" 
                             alt="<?php echo $contentsRow['title']; ?>" 
                             class="imageContent">
                        <div class="imageLabelContent"><?php echo$contentsRow['title']; ?></div>
                        <p class="imageDescription"><?php echo $contentsRow['content']; ?></p>
                    </div>
                <?php }
            } ?>
        </div>
    <?php } ?>
</div>
