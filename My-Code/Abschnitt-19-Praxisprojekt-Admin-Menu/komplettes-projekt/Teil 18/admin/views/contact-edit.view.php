<form action="contact-edit.php?id=<?php echo e($message["id"]); ?>" method="POST">
  <div class="form-group">
    <label for="inputEmail1">Email:</label>
    <input name="email" type="email" class="form-control" id="inputEmail1" value="<?php echo e($message["email"]); ?>">
  </div>
  <div class="form-group">
    <label for="inputName1">Name:</label>
    <input name="name" type="text" class="form-control" id="inputName1" value="<?php echo e($message["name"]); ?>">
  </div>
  <div class="form-group">
    <label for="inputSubject1">Betreff:</label>
    <input name="subject" type="text" class="form-control" id="inputSubject1" value="<?php echo e($message["subject"]); ?>">
  </div>
  <div class="form-group">
    <label for="inputMessage1">Nachricht:</label>
    <textarea name="message" class="form-control" rows="4" id="inputMessage1"><?php echo e($message["message"]); ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Speichern!</button>
</form>