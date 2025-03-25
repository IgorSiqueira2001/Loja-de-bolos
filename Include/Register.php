<form class="needs-validation" action="Register.php" method="post">  
    <div class="form-row">
        <div class="divform">
            <input type="hidden" name="id" id="cakeId" value="<?= $cake->id ?? '' ?>">
            <div class="col-md-8 mb-3" style="margin-left: 1rem">
                <label for="validationTooltip01">Cake Name</label>
                <input name="cake" type="text" value="<?= $cake->name ?? '' ?>" class="form-control" id="validationTooltip01" placeholder="Name of your cake" required>
                <div class="valid-tooltip">
                Looks good!
                </div>
            </div>
            <div class="col-md-8 mb-3" style="margin-left: 1rem">
                <label for="validationTooltip02">Cake Price</label>
                <input name="cakePrice" type="text" value="<?= $cake->price ?? '' ?>"class="form-control" id="validationTooltip02" placeholder="Price of your cake" required>
                <div class="valid-tooltip">
                Looks good!
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="op" value="register" style="background-color: #FFA07A; border-radius: 5px; margin-left: 1rem;">Register</button>
            <button class="btn btn-primary" type="submit" name="op" value="edit" style="background-color: #FFA07A; border-radius: 5px; margin-left: 1rem;">Edit</button>
            <button class="btn btn-primary" type="submit" name="op" value="exclude" style="background-color: #FFA07A; border-radius: 5px; margin-left: 1rem;">Exclude</button>
        </div>
    </div>
