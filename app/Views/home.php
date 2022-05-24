<?= $this->extend("layout/base") ?>
<!-- @link: https://onlinewebtutorblog.com/codeigniter-4-views-and-layouts-tutorial/ -->
<?= $this->section("content") ?>
<div class="uk-section">
    <div class="uk-container">
        <h1 class="uk-heading-medium">Home page</h1>
        <hr>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section("head") ?>
<link rel="stylesheet" href="<?= base_url('css/uikit.min.css') ?>">
<?= $this->endSection() ?>


<?= $this->section("footer") ?>
<script src="<?= base_url('js/uikit.min.js') ?>"></script>
<script src="<?= base_url('js/uikit-icons.min.js') ?>"></script>
<?= $this->endSection() ?>
