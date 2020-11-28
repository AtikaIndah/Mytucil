<?= $this->include('about/about_header') ?>
<body>
    <center>
    <?php $session = session(); ?>
    
     <h1><?php echo "Tentangku, ";  ?></h1>
     <p>Hello semunya...</p>
     <p>Nama : Atika Indah</p>
     <p>NPM : 1857051009</p>
     
     <a href="<?php echo base_url('/dashboard'); ?>" class="btn btn-lg btn-secondary">Home</a>
     
    </center>
</body>
<?= $this->include('about/about_footer') ?>