<section class="gray-bg section-padding" id="service-page">
    <div class="container">
        <h3> Rate this topics </h3>
        <div id="star-rating">
            <input type="radio" name="example" class="rating" value="1" />
            <input type="radio" name="example" class="rating" value="2" />
            <input type="radio" name="example" class="rating" value="3" />
            <input type="radio" name="example" class="rating" value="4" />
            <input type="radio" name="example" class="rating" value="5" />
        </div>
    </div>
</div>
<script>
    $(function(){
        $('#star-rating').rating(function(vote, event){
            $.ajax({
                url: "<?php echo base_url(); ?>/index.php/Ratings/submit",
                type: "POST",
                data: {rate: vote,debateId :<?php echo $ID; ?>},
            });

            alert(`you voted ${vote} stars`);
        });
    });
</script>
