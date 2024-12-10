<div class="w3-padding-64 w3-content" id="islands">
    <h2 class="w3-text-light-grey">ISLANDS OF PERSONALITY</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="col-12">
            <div class="imageContainer">
                <?php while ($personalityRow = mysqli_fetch_assoc($resultPersonality)){ ?>
                    <div class="imageItem">
                        <img src="image/<?php echo $personalityRow['imageCategory']; ?>" alt="<?php echo $personalityRow['name']; ?>"
                            class="image">
                        <div class="imageLabel"><?php echo $personalityRow['name']; ?></div>
                        <div class="imageDescriptionPersonality"><?php echo $personalityRow['shortDescription']; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>