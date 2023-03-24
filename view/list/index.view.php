<?php 
require_once View_Dir."/template/header.php";
?>
<div class="my-5">
<a href="/list-create" class=" btn btn-primary">Create New</a>

</div>
<form action="" method="get">
        <div class=" input-group">
            <input type="text" name="q" value="<?php if (isset($_GET['q'])) echo $_GET['q'] ?>" class=" form-control">
            <?php if (isset($_GET['q'])) : ?>
                <a href="<?= route("list") ?>" class=" btn btn-danger">
                    Del
                </a>
            <?php endif; ?>
            <button class=" btn btn-primary">Search</button>
        </div>
    </form>
<table class="table table-bordered ">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Created at</th>
            <th>Control</th>

        </tr>
    </thead>
    <tbody>
     <?php
     foreach( $list['data'] as  $values ):
// dd($values);
       
     ?>
     <tr>
        <td>
<?= $values['id'] ?>
        </td>
        <td>
<?= $values['name'] ?>
        </td>
        <td>
<?= $values['phone'] ?>
        </td>
        <td>
<?= $values['created_at'] ?>
        </td>
        <td>
            <div class="row">
                <div class="col-6">
                    <a href="<?= route('list-delete',['id'=>$values['id']]) ?>" class="btn btn-sm  btn-danger" >Delete</a>
                </div> 
                <div class="col-6">
                    <a   href="<?= route('list-edit',['id'=>$values['id'] ,'name'=>$values['name'] , 'phone'=>$values['phone']  ]) ?>" class="btn btn-sm btn-info">Edit</a>
                </div>
            </div>
        </td>
     </tr>
     <?php
     endforeach;
     
     ?>
    </tbody>
</table>

<?php echo paginator($list) ?>
<?php 
require_once View_Dir."/template/footer.php";

?>