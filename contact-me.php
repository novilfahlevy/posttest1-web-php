<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Novil Fahlevy's Portfolio</title>

  <?php require './styles.php'; ?>

  <link rel="stylesheet" href="./styles/contact-me.css">
</head>
<body>
  
  <div class="container">
    <?php require './layouts/navbar.php'; ?>

    <!-- Main -->
    <main>
      <div class="card">
        <h2 class="card-title">
          Message me anything
        </h2>
        <div class="form-group">
          <label for="name">Your name</label>
          <input type="text" name="name">
        </div>
        <div class="form-group">
          <label for="email">Your email</label>
          <input type="email" name="email">
        </div>
        <div class="form-group">
          <label for="subject">Subject</label>
          <div class="form-radio">
            <input type="radio" name="subject" id="project" value="project">
            <label for="project">Project</label>
          </div>
          <div class="form-radio">
            <input type="radio" name="subject" id="job_offer" value="job_offer">
            <label for="job_offer">Job offer</label>
          </div>
          <div class="form-radio">
            <input type="radio" name="subject" id="other" value="other">
            <label for="other">other</label>
          </div>
        </div>
        <div class="form-group" style="display: none;">
          <label for="other_subject">Other subject</label>
          <input type="text" name="other_subject" id="other_subject">
        </div>
        <div class="form-group">
          <label for="occupation">Your occupation</label>
          <select name="occupation" id="occupation">
            <option value="student">Student</option>
            <option value="worker">Worker</option>
            <option value="other">other</option>
          </select>
        </div>
        <div class="form-group" style="display: none;">
          <label for="other_occupation">Other occupation</label>
          <input type="text" name="other_occupation" id="other_occupation">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
          <label for="file_attachment">
            Attach a file (opsional)
          </label>
          <input type="file" name="file_attachment" id="file_attachment">
        </div>
        <div class="form-group">
          <label for="days">Days to get the reply</label>
          <p class="form-description">You will get the reply among of these days which you selected</p>
          <div class="form-radio">
            <input type="checkbox" name="days" id="Monday" value="Monday">
            <label for="Monday">Monday</label>
          </div>
          <div class="form-radio">
            <input type="checkbox" name="days" id="Tuesday" value="Tuesday">
            <label for="Tuesday">Tuesday</label>
          </div>
          <div class="form-radio">
            <input type="checkbox" name="days" id="Wednesday" value="Wednesday">
            <label for="Wednesday">Wednesday</label>
          </div>
          <div class="form-radio">
            <input type="checkbox" name="days" id="Thursday" value="Thursday">
            <label for="Thursday">Thursday</label>
          </div>
          <div class="form-radio">
            <input type="checkbox" name="days" id="Friday" value="Friday">
            <label for="Friday">Friday</label>
          </div>
          <div class="form-radio">
            <input type="checkbox" name="days" id="Saturday" value="Saturday">
            <label for="Saturday">Saturday</label>
          </div>
          <div class="form-radio">
            <input type="checkbox" name="days" id="Sunday" value="Sunday">
            <label for="Sunday">Sunday</label>
          </div>
        </div>
        <button type="submit" class="button">Send</button>
      </div>
    </main>
    <!-- End Main -->
  </div>

  <?php require './layouts/footer.php'; ?>

  <script src="../scripts/contact-me.js"></script>

</body>
</html>