<?php 
require_once View_Dir."/template/header.php";

?>

<div class="my-5  ">
<a href="/list" class=" btn btn-outline-primary">All Lists </a>
<div class="container">
    <form action="<?=  route('list-store')?>" class=" form-control" method="post">
       <div class="row ">
       <div class="col ">
       <label for="name" class=" 
        ">Name</label>
        <input type="text" id="name" name="name" class=" form-control">
       </div>
       <div class="col ">
       <label for="name" class=" 
        ">phone</label>
        <input type="text" id="phone " name="phone" class=" form-control">
       </div>
       <div class="col  d-flex align-items-end">
       
        <button type="submit" class= " btn btn-primary">Create</button>
       </div>
       </div>
       
    </form>
</div>

</div>



<?php 
require_once View_Dir."/template/footer.php";

?>