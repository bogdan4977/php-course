<?php
/**
 * Guess form
 */
?>
<form name="form_guess" action="index.php" method="post" class="form" enctype="multipart/form-data">
    <div class="form__element">
        <label for="user-number">Enter your guess..</label>
        <input id="user-number" name="user_number" placeholder="Enter your guess.." type="number" value=""/>
    </div>
    <?php /*<div class="form__element">
                <p class="form-legend">Input text</p>
                <label for="cardCV2">Card CV2</label>
                <input id="cardCV2" name="CV2" placeholder="Enter CV2" type="text" value="<?php echo $CV2; ?>"/>
            </div>
            <div class="form__element form__element--radio form__element--column">
                <p class="form-legend">Choose your mud</p>
                <label>
                    <input id="" name="mud" value="good" type="radio" checked/>
                    <i>good</i>
                </label>
                <label>
                    <input id="" name="mud" value="lower than middle" type="radio"/>
                    <i>lower than middle</i>
                </label>
                <label>
                    <input id="" name="mud" value="bad" type="radio"/>
                    <i>bad</i>
                </label>
            </div>

            <div class="form__element form__element--checkbox form__element--column">
                <p class="form-legend">Colours</p>
                <label>
                    <input id="" name="color[red]" value="1" type="checkbox"/>
                    <i>red</i>
                </label>
                <label>
                    <input id="" name="color[brown]" value="1" type="checkbox"/>
                    <i>brown</i>
                </label>
                <label>
                    <input id="" name="color[blue]" value="1" type="checkbox"/>
                    <i>blue</i>
                </label>
            </div>


            <div class="form__element">
                <p class="form-legend">Code language</p>
                <label for="select-test">Choose an option!</label>
                <select name="language" id="select-test">
                    <option value="php">PHP</option>
                    <option value="javascript">JavaScript</option>
                    <option value="java">Java</option>
                </select>
            </div>

            <div class="form__element">
                <p class="form-legend">Multi select</p>
                <select name="day[]" id="" multiple="multiple">
                    <option value="Monday" selected="selected">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                </select>
            </div>

            <div class="form__element form__element--checkbox form__element--column">
                <p class="form-legend">Fill with your thoughts</p>
                <textarea name="review" id="" cols="30" rows="10" placeholder="Type here">
                    <?php if(isset($review) && $review){
                        echo $review;
                    } else {
                        echo "No data was passed";
                    }?>
                </textarea>
            </div>*/ ?>
    <div class="form__element form__element--actions">
        <input type="submit" value="Send form"/>
        <input type="reset" value="reset"/>
    </div>
</form>