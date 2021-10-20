<?=$this->extend('dasar_tampilan');?>

<?=$this->section('isiweb')?>
<form method="POST" action="<?=base_url('/login')?>">
    <div class="container col-md-3">
        <div class="card mt-5">
            <div class="card-header">
                <h3 class="card-title">Login</h3>
            </div>
            <div class="card-body">
                <?php if($Error) {?>
                    <div class='alert alert-danger'>
                        <?=$Error?>
                    </div>
                <?php }?>
                <div class="form-floating">
                    <input id="txtEmail" class="form-control" 
                        placeholder="Email"
                        value="<?=$Email ?? '' ?>"
                        type="text" name="Email" />
                    <label for="txtEmail">Email</label>
                <?php if($vd?->getError('Email')){ ?>
                    <div class="alert alert-danger">
                    <?php
                        echo $vd?->getError('Email')
                    ?>
                 </div>
            <?php } ?>
            </div>
            <div class="form-floating">
                <input id="txtPass" class="form-control" 
                    placeholder="Password"
                    value="<?=$Sandi ?? '' ?>"
                    type="Password" name="Sandi" />
                <label for='txtPass'>Kata Sandi</label>
            <?php if($vd?->getError('Sandi')){ ?>
                <div class="alert alert-danger">
                <?php
                    echo $vd?->getError('Sandi')
                 ?>
                 </div>
            <?php } ?>
            </div>
                <button class="btn btn-primary mt-2" >Login</button>
            </div>
        </div>
    </div>
</form> 

<?=$this->endsection()?>