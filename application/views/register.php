<?php 
    include('header.php');
?>

<div class="container">

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h4 class="text-center"> Register...!</h4>
    <?php 
    echo form_open('home/register',['id'=>'register_form']);
    echo form_label('Firstname','Firstname');
    echo form_input(['type=>text','class'=>'form-control','name'=>'txt_firstname']);
    echo form_label('Lastname','Lastname');
    echo form_input(['type=>password','class'=>'form-control','name'=>'txt_lastname']);
    echo form_close();

    ?>

    </div>
    <div class="col-3"></div>
</div>

</div>