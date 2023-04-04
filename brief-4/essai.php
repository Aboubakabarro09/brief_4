<br>
  <br>
  <br>
   <div class="container text-center">
     <div class="row align-items-start">  
        <div class="col">
          <form method="POST" id="formular">
            <textarea class="form-control" id="exampleFormControlTextarea1" name="texte" rows="3" placeholder="Commentaire..." style="width:550px;margin-left: 250px; border:2px solid #3551EC;">
            </textarea>
            <input type="hidden" name="idUser" value="<?php echo $_SESSION['id_user'] ?>">
            <input type="hidden" name="email_users" value="<?php echo $_SESSION['email'] ?>">
            <input type="hidden" name="idPost" value="<?php echo $_GET['id']?>">
            <button type="submit" name="submit" onclick="location.reload()" class="btn btn-primary" style="border-radius:90px; margin-left: 650px; margin-top: -8%;"><img src="images/c185d77163c157008199e78f78cca13e-removebg-preview.png" width="50" height="50"></button>
            <br><br>
            <div id="msg"></div>
          </form>             
     </div>
     <div class="contents" data-product-id="cout"><?php echo $_GET['id'];?></div>
   </div>
   </div>
   <script type="text/javascript" defer> 

$(document).ready(function(){
    $("#formular").submit(function(e) {
        e.preventDefault()

        $.ajax({
            url:'commentaire.php',
            data: $(this).serialize(),
            method:'POST',
            success: function(resp){
                $('#msg').html(resp);
                recupere(); // appel de la fonction recupere() après avoir soumis le formulaire de commentaire
            }
        });
    });

    function recupere(){
        // event.preventDefault()
        var id = $('div[data-product-id="cout"]').text();
        $.ajax({
            url:'load.php',
            type:'POST',
            data: {id: id}, // Inclure l'identifiant dans la requête AJAX
            success:function(donne){
                $('.contents').html(donne);
            }
        })
    }
    recupere(); // appel initial de la fonction recupere()
});

</script>

