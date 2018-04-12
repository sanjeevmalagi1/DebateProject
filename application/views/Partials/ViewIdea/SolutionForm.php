<?php
  if($this->session->UserName){
?>
<div class="single-blog card row">
    <div class="col-sm-3 text-center">
        <img class="img-circle" src="https://ui-avatars.com/api/?name=<?php echo $this->session->UserName; ?>"/>
        <div><?php echo $this->session->UserName; ?></div>
        <small class="text-muted"><?php echo $this->session->UserType; ?></small>
    </div>
    <form method="post" action="<?php echo base_url(); ?>index.php/IdeasHub/ViewIdea/<?php echo $idea['ID']; ?>" class="contact-form col-sm-9">
        <input name="heading" class="form-control" placeholder="Heading" />
        <textarea name="message" id="form-message" name="form-message" rows="5" cols="150" class="form-control" placeholder="Your message" required="required"></textarea>
        <button type="submit" class="btn btn-success btn-lg col-sm-5">Submit</button>
    </form>
</div>
<?php
  }
  else {
?>
<div class="single-blog card row">
    <div class="text-center">
        <div>Please Log in to provide a solution <a class="btn btn-link" href="<?php echo base_url() ?>index.php/Auth/login">Login Now !!</a></div>
    </div>

</div>

<?php
  }
?>
<style>
    .card{
        padding : 25px;
        background: white;
    }
</style>
