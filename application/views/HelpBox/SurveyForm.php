<div class="container" style="margin-top : 125px;">
    <h2>Welcome to HelpBox </h2>
    <p>Please take this small survey</p>
    <form action="<?php echo base_url(); ?>index.php/HelpBox" method="POST" class="col-sm-9 " style="margin : 40px auto;">
        <div class="form-group">
            <label for="fullName">Full Name </label>
            <input name="fullName" required type="text" class="form-control" id="fullName">
        </div>
        <div class="form-group">
            <label for="fathersName">Father's Name:</label>
            <input name="fathersName" required type="text" class="form-control" id="fathersName">
        </div>
        <div class="form-group">
            <label for="fathersName">Gender:</label>
            <div>
                <label class="option"><input required type="radio" name="gender" value="male"> Male</label>
                <label class="option"><input required type="radio" name="gender" value="female"> Female</label>
                <label class="option"><input required type="radio" name="gender" value="other"> Other</label>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea name="address" required rows="4" class="form-control" id="address"></textarea>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile Number :</label>
            <input name="mobile" required type="number" min="0" class="form-control" id="mobile">
        </div>
        <div class="form-group">
            <label for="email">Email ID :</label>
            <input name="email" required type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="DOB">Date Of Birth :</label>
            <input name="DOB" required type="date" class="form-control" id="DOB">
        </div>
        <div class="form-group">
            <label for="occupation">Occupation:</label>
            <input name="occupation" required type="text" class="form-control" id="occupation">
        </div>
        <div class="form-group">
            <label for="caste">Caste:</label>
            <div >
                <div class="option"><input type="radio" name="caste" required value="General"> General</div>
                <div class="option"><input type="radio" name="caste" required value="OBC"> OBC</div>
                <div class="option"><input type="radio" name="caste" required value="SC"> SC</div>
                <div class="option"><input type="radio" name="caste" required value="ST"> ST</div>
            </div>
        </div>
        <div class="form-group">
            <label for="fathersName">Do you have :</label>
            <div>
                <label class="option"><input type="radio" name="cardType" required value="APL"> APL</label>
                <label class="option"><input type="radio" name="cardType" required value="BPL"> BPL</label>
            </div>
        </div>

        <div class="checkbox">
            <label><input name="voterId" type="checkbox" value="true"> I have Voter ID card</label>
        </div>

        <div class="checkbox">
            <label><input name="voted" type="checkbox" value="true"> I have castes vote last (or most recent) election</label>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
    
    </form>
</div>
<style>
.option{
    margin : auto 10px;
}
</style>