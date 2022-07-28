<div class="container">


<?= form_open_multipart() ?>

<div class="mb-3">
  <label for="formFile" class="form-label">Choose file</label>
  <input class="form-control" type="file" id="formFile">
</div>

<button type="submit" class="btn btn-primary">Submit</button>

<?= form_close() ?>

</div>